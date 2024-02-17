<?php 

//require_once 'controller/mainController.php';
//require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class deconnexionController{

 
	function __construct($page,$menusTble,$allData){  
                          
    $this->runThisPAGE();

   }

  public function runThisPAGE(){
    $this->runNow();
        
        }
    
    
    
 
public function runNow(){

  session_destroy();
    echo ("Vous venez d'etre déconnecté du systeme");
  if (isset($_SERVER['HTTP_REFERER'])) {
                     
    session_destroy();
    echo ("Vous venez d'etre déconnecté du systeme");
  } else{

    echo ('Impossible de realiser cet action de cette facon - utiliser l interface de l application');
  }

}



 

}
