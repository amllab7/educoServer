<?php
   
	// Role = gestion de toutes les requetes

     class Requetes {

	        public $allData,$allPAGE,$pagenamer;
	        protected $view_Access = array('homeadmin.php','login.php',
			'deconnexion.php','search.php','tologin.php','apiexec.php','api.php','existepass.php'); 
			protected $controllerFolder = "controller/subcontroller";


 

			function __construct(){


				$this->allData = array_merge($_GET,$_POST);
				$this->allPAGE = array_merge($this->view_Access,scandir("view/pages"));

				 
				}



 

	 
	 public function getRequest(){ 
         //  permet de gerer la reconnaissance de page qu'on veut acceder
		// si la page en question n'exite pas la redirection se par Home page ligne 42
		
          
		$allPAGE = $this->allPAGE;
		$urldata =  $this->allData;
		$getterPAGE = 'paginate';
		$defaultPAGE = "home";
        $pageDemande  = (isset($_GET[$getterPAGE])) ? $_GET[$getterPAGE] : "home" ;  

		
        if(isset($pageDemande) AND $pageDemande !="" AND in_array($pageDemande.".php", $allPAGE)){	

			           $this->pagenamer = $pageDemande;
					   return  $this->pagenamer; // retourne le nom de la page si toute les conditions d'existnce sont rempli

                            } 

        else{   return $defaultPAGE; }	


							
		 
	 } 
	 








 

     public function gohome() {
		 
		header("location: home");
		 
	 }









 

 public function execute_Controller() { 
                 $this->render_Controller($this->pagenamer);
    
 
}

 




 

 

public function render_Controller($page)  {  


 
     
	     $controllerPage = strtolower($page).'Controller';
		 $checkController = $this->checkController($controllerPage.'.php');   
		 if ($checkController) {
						
			            require $this->controllerFolder.'/'.$controllerPage.'.php';
						$menusTble = array( );
						$appControl = new $controllerPage($page,$menusTble,$this->allData); // la classe du controller est Instancié NB il faut executé cela dans la classe constructeur
						
													 
		 } else{ echo 'Verifier vos controlleur : certains fichier manquent dans ceci'.$page; }


		 
		 
	 }
	
 











	 public function checkController($controller){ 
          
		$allPAGE = $this->allPAGE;
		$allController =  scandir($this->controllerFolder);
		return (in_array($controller, $allController)) ? true : false ;
	    
		 
	 } 
	 












}	 
		   
		   
		   
		   
		   