<?php
define('EXIT_SUCCESS', 0);
define('EXIT_FAILURE', 1);

function get_server_ip(){
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
		$ipString = $_SERVER['HTTP_X_FORWARDED_FOR']; 
		$addr = explode(',',$ipString); 
		$ip = trim($addr[sizeof($addr)-1]);
	} 
	elseif(isset($_SERVER['HTTP_CLIENT_IP'])){ 
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	else{ 
		$ip = $_SERVER['REMOTE_ADDR'];
	} 
	return $ip;
}
function add_visitor($visitor, $date, $file = 'compteur.txt'){
	if (FALSE === ($pt = fopen($file,'r+'))) {
		return EXIT_FAILURE;
	}
	if (!flock($pt, LOCK_EX)) {
		return EXIT_FAILURE;
	}
	$n = 1;
	while(3 === fscanf($pt, "%s\t%d\t%d\n", $ip,$nb_visite,$last_date)) {
		if ($ip === $visitor) {
			$str_len = strlen($visitor) + 15; // 3 (tab et chariot) + 4 (nombre) + 8 (date)
			$n += $nb_visite;
			// rembobiner au début de l'enregistrement concerné
			fseek($pt, - $str_len, SEEK_CUR);
			break;
		}
	}
	// écrire soit à la fin du fichier, soit sur l'enregistrement précédent
	$entry = sprintf("%s\t%04d\t%d\n", $visitor, $n, $date);
	fwrite($pt, $entry);
	flock($pt, LOCK_UN);
	fclose($pt);
	return EXIT_SUCCESS;
}

function visite(){
	session_start();
	if (!array_key_exists('welcome',$_SESSION)) {
		$_SESSION['welcome'] = TRUE;
		$ip = get_server_ip();
		// vérifier si $ip est une IP (V4 ou V6)
		if (FALSE === filter_var($ip, FILTER_VALIDATE_IP)) {
			return EXIT_FAILURE;
		}
		add_visitor($ip,date('Ymd'));
	}
	else {
		$_SESSION['welcome'] = FALSE;
	}
	return EXIT_SUCCESS;
}