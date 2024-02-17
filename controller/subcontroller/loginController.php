<?php 

//require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class loginController{







 
	function __construct($page,$menusTble,$allData){  
                           
                             $this->runThisPAGE();

   }

 

  public function runThisPAGE(){
                  $this->runNow();
        
        }
    
    
    

  



 
 




public function runNow(){


      
  $dataExec = array(
    'page' => "login", 
    'type' => false,
    'value' => 0,
    'directoryURI' => ''
    
    ); 

    if (isset($_SESSION['iduser'])) {  header('location:  admin/adminer');  } 
    else {   renderDesign($dataExec);   }


}





 

 
    
    
    
        




}
