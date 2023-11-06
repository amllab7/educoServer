<?php


/**
 *  gsdyufgysgfgshf fuyguydf sfsyugfysgfyis fsifgisghfs sfygsyfg
 */
class BddManager {







/**ojdgijdijg suhihsfs suhss diuhisdf uhs sfhiuhisg suighishgshg dughdiuhgs
 * 
 */

	public $connexionBDD;

	function __construct($connexion){
		$this->connexionBDD = $connexion;

	}







/**iohohghe iuhgihg egh uighigiugw wiugigsiw wiggwif fiyguwfgw
 * 
 */



   public function getDATA(){
   	return array_merge($_GET,$_POST);
   }

   







/**
 * adhaiduiahiud fuiuf fiugiuhs suhiuhsg siugis siuhius ius gfigis huygfssgyf sftf sftsyufs
 */


   public function verifyingUser($infosuser){


   	$requeteVerification = $this->connexionBDD->prepare('SELECT * FROM utilisateur WHERE numero = ? AND motdepass = ?');
    $requeteVerification->execute(array($infosuser["phone"],$infosuser["pass"]));
    $statut = $requeteVerification->rowCount();
    $infos = $requeteVerification->fetchAll();
    return  array('statut' => $statut,'infosUSER' =>$infos );


   }












   public function getQuantite($idproduit){


   	$requeteRecuperer = $this->connexionBDD->prepare('SELECT quantiteproduit FROM stockproduit WHERE idproduit = ?');
    $requeteRecuperer->execute(array($idproduit));
    $liste = $requeteRecuperer->fetchAll();

    
    return  $liste[0]["quantiteproduit"];


   }











   public function getProduit($idproduit){


   	$requeteRecuperer = $this->connexionBDD->prepare('SELECT * FROM stockproduit WHERE idproduit = ?');
    $requeteRecuperer->execute(array($idproduit));
    $liste = $requeteRecuperer->fetchAll();

    
    return  $liste[0];


   }













   public function recupererProduit(){


    $requeteRecuperer = $this->connexionBDD->prepare('SELECT * FROM stockproduit');
    $requeteRecuperer->execute(array());
    $liste = $requeteRecuperer->fetchAll();
    return  array('liste' =>$liste);


   }






   public function recupererUtilisateurs(){


    $requeteRecuperer = $this->connexionBDD->prepare('SELECT * FROM utilisateur');
    $requeteRecuperer->execute(array());
    $liste = $requeteRecuperer->fetchAll();
    return  array('liste' =>$liste);


   }








   public function recupererFacture(){


    $requeteRecuperer = $this->connexionBDD->prepare('SELECT * FROM facturation');
    $requeteRecuperer->execute(array());
    $liste = $requeteRecuperer->fetchAll();
    return  array('liste' =>$liste);


   }








   public function recupererProduitUnique($identifiant){


    $requeteRecuperer = $this->connexionBDD->prepare('SELECT * FROM stockproduit WHERE idproduit = ?');
    $requeteRecuperer->execute(array($identifiant));
    $liste = $requeteRecuperer->fetchAll();
    return  $liste[0];


   }






   public function recupererFactureUnique($identifiant){


    $requeteRecuperer = $this->connexionBDD->prepare('SELECT * FROM facturation WHERE identifiant = ?');
    $requeteRecuperer->execute(array($identifiant));
    $liste = $requeteRecuperer->fetchAll();
    return  $liste[0];


   }






   public function deleteProduit(){
   $dataUrl = BddManager::getDATA();

   $identifiant = $dataUrl['idproduit'];

   
    $requeteRecuperer = $this->connexionBDD->prepare('DELETE FROM stockproduit WHERE idproduit = ?');
    $requeteRecuperer->execute(array($identifiant));
    header('location: ../?fonctionality=stock&action=list');

   

   }
 public function deleteUser(){
     $requeteInfo = BddManager::getDATA();
     $iduser = $requeteInfo["iduser"];
     
    $requeteRecuperer = $this->connexionBDD->prepare('DELETE FROM utilisateur WHERE id = ?');
    $requeteRecuperer->execute(array($iduser));
    header('location: ../?fonctionality=admin');

   

   }












public function registerUser()
{

	$infosuser = BddManager::getDATA();
	$requeteInser = $this->connexionBDD->prepare('INSERT INTO  utilisateur(nom,address,numero,motdepass) VALUES(?,?,?,?)');
  $requeteInser->execute(array($infosuser["username"],$infosuser["adress"],$infosuser["phone"],$infosuser["pass"]));
  header('location: ../index.php?fonctionality=login');

}











public function registerProduit()
{

	$infosuser = BddManager::getDATA();
	$requeteInser = $this->connexionBDD->prepare('INSERT INTO  stockproduit(nomproduit,prixproduitunitaire,datemodif) VALUES(?,?,?)');
  $requeteInser->execute(array($infosuser["productname"],$infosuser["productprice"],date("d-m-Y")));
  header('location: ../?fonctionality=stock&action=list');

  

}






public function quaniteAjout()
{


$data = BddManager::getDATA();

  
   $infosuser = BddManager::getDATA();
   $quantiteEnStock = BddManager::getQuantite($data["idproduit"]);

   $nouvelleQuantite = $quantiteEnStock+$data["quantite"];



   $requeteInser = $this->connexionBDD->prepare('UPDATE stockproduit SET quantiteproduit = ?,datemodif = ? WHERE idproduit = ?');
   $requeteInser->execute(array($nouvelleQuantite,date("d-m-Y"),$data["idproduit"]));
   header('location: ../?fonctionality=stock&action=list'); 

  

}





public function manageAdmin($value=''){
  

     $requeteInfo = BddManager::getDATA();
     $iduser = $requeteInfo["iduser"];
     $statutToset = $requeteInfo["statut"];
  

   $requeteInser = $this->connexionBDD->prepare('UPDATE utilisateur SET adminAbility = ? WHERE id = ?');
   $requeteInser->execute(array($statutToset,$iduser));


   header('location: ../?fonctionality=admin'); 

  
}


















public function modifierProduit()
{


$data = BddManager::getDATA();

  
   $infoProduit = BddManager::getDATA();
   
   $nouveauNom = $infoProduit["nomproduit"];
   $nouveauPrix = $infoProduit["prixproduit"];



   $quantiteEnStock+$data["quantite"];



   $requeteInser = $this->connexionBDD->prepare('UPDATE stockproduit SET nomproduit = ?, prixproduitunitaire = ?,datemodif = ? WHERE idproduit = ?');
   $requeteInser->execute(array($nouveauNom,$nouveauPrix,date("d-m-Y"),$infoProduit["idproduit"]));
   header('location: ../?fonctionality=stock&action=list'); 

  

}























public function acheterProduit()
{

$data = BddManager::getDATA();
$identite = $_SESSION["infosuser"];

$bonus = 5;
$quantiteBonus = 10;

$idAchat = $data["idproduit"];




$produitEnStock =  BddManager::getProduit($data["idproduit"]);
$libelle = $produitEnStock["nomproduit"];
$quantiteproduitfacture = $data["quantite"];
$prixunitaire = $produitEnStock["prixproduitunitaire"];










if ($data["quantite"]>=$quantiteBonus) {
  $prixTotalavant = $data["quantite"]*$produitEnStock["prixproduitunitaire"];
  $pourcentagerEDUIRE = ($bonus * $prixTotalavant)/100;
  $prixTotalPAYER = $prixTotalavant - $pourcentagerEDUIRE;
  $prixTotal = $prixTotalPAYER;


echo "vous este elligible aux bonus PRIX DEVRAIT PAYER ".$prixTotalavant." mais vous aller payer slmt ".$prixTotal;
 echo "<br><br>";
  

}






else{

  $prixTotal = $data["quantite"]*$produitEnStock["prixproduitunitaire"];

echo "vous n'este elligible aux bonus PRIX DEVRAIT PAYER ".$prixTotal;
  echo "<br><br>";



 
}









if ($idAchat==3) {
    $tvaApayer = (16 * $prixTotal)/100;

     $prixTotal = $prixTotal +  $tvaApayer;

     echo "Vous venez d acter un ordinateur vous devez payer l TVA de <br>".$tvaApayer;
     echo "Vous venez d acter un ordinateur vous devez payer l TVA de  ".$prixTotal;
 

  }



return false;
$nomClient = $identite["nom"];
$dateAchat = date("d-m-Y : h");

$execData = array($libelle,$quantiteproduitfacture,$prixunitaire,$prixTotal,$nomClient,$dateAchat);




if ($data["quantite"]<=$produitEnStock["quantiteproduit"]) {


$infosuser = BddManager::getDATA();
	$requeteInser = $this->connexionBDD->prepare('INSERT INTO  facturation(libelle,quantiteproduitfacture,prixunitaire,prixtotal,nomClient,dateAchat) VALUES(?,?,?,?,?,?)');

  $requeteInser->execute($execData);



$nouvelleQuantite = $produitEnStock["quantiteproduit"]-$data["quantite"];

   $requeteInser = $this->connexionBDD->prepare('UPDATE stockproduit SET quantiteproduit = ?,datemodif = ? WHERE idproduit = ?');
   $requeteInser->execute(array($nouvelleQuantite,date("d-m-Y"),$data["idproduit"]));
   header('location: ../?fonctionality=stock&action=list');

	
}


else{

   echo $identite["nom"]." VEUT acheter ".$produitEnStock["nomproduit"]." a un prix de ".$produitEnStock["prixproduitunitaire"]."$ chacun - IL VEUT achter ".$data["quantite"]." ".$produitEnStock["nomproduit"]." au prix total de  ".$data["quantite"]*$produitEnStock["prixproduitunitaire"]."$";
echo "<br><br><br>";

	echo "le stock est insufisant";
}
  

}






























public function loginUser($value='')
{
	


$infosuser = BddManager::getDATA();
$statutUser = BddManager::verifyingUser($infosuser); 


if (isset($_GET['modeconnexion']) AND $_GET['modeconnexion']=='cookie') {
	echo "Vous essayer de vous connecter evec le cookie mais nous refusons";

	//return false;

}






 if ($statutUser['statut']==0) {
    	echo "Cet utilisateur n existe pas ";


    	var_dump($infos);
    }


elseif ($statutUser['statut']==1) {
	//echo "Cet utilisateur  existe tres bien ";
	$_SESSION['infosuser'] = $statutUser['infosUSER'][0];
	


	header('location: ../?fonctionality=home');



}





elseif ($statutUser['statut']>1) {
	echo "IL DES utilisateur qui ont les meme informqtions ";
}









}














}





	 	
	
	 
 
     

		   
		   
		   
		   
		   
		   
		   
		   
		   
		   