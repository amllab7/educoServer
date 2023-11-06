<?php
   
	// role = gestion de requetes

     class Requetes {

	        public $allData,$allPAGE,$pagenamer;
	        protected $view_Access = array('homeadmin.php','login.php',
			'deconnexion.php','search.php','apiexec.php','api.php','existepass.php');


 

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

		$pageDemande = $urldata[$getterPAGE];
		



		if (!isset($pageDemande)) { return $defaultPAGE; } // redirection home page 42
		
        if(isset($pageDemande) AND $pageDemande !="" AND in_array($urldata[$getterPAGE].".php", $allPAGE)){	
			                
			                $this->pagenamer = $urldata[$getterPAGE];
							return  $urldata[$getterPAGE];// retourne le nom de la page si toute les conditions d'existnce sont rempli

                            } 
							
		else{   return null;   /*retourne null si la page en question n'est pas configurée */ }	


							
		 
	 } 
	 








 

     public function gohome() {
		 
		header("location: home");
		 
	 }







	 public function checkController($controller){ 
         

		
		$allPAGE = $this->allPAGE;
		$allController =  scandir("controller/subcontroller");
		return (in_array($controller, $allController)) ? true : false ;
	    
		 
	 } 
	 













 public function execute_Controller() { 
  
        if (is_null($this->pagenamer)) {   $this->gohome();   }
        else{ $this->render_Controller($this->pagenamer); } /*la redirection se fais sur home en cas d'erreur; si non l application s'execute normlement*/
 
}

 




 

 

public function render_Controller($page)  {  
     
	     $controllerPage = strtolower($page).'Controller';
		 $checkController = $this->checkController($controllerPage.'.php');   
		
		 if ($checkController) {
						
			            require 'controller/subcontroller/'.$controllerPage.'.php';
						$menusTble = array( );
						$appControl = new $controllerPage($page,$menusTble,$this->allData); // la classe du controller est Instancié
						
//$appControl->runThisPAGE(); // l'execution du controller  
													 
		 } else{ echo 'Verifier vos controlleur : certains fichier manquent '.$page; }


		 
		 
	 }
	
 






















}	 
		   
		   
		   
		   
		   