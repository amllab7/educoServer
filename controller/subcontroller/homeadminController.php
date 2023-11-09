<?php 

//require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class homeadminController{

  
	function __construct($page,$menusTble,$allData){  
                          
    $this->runThisPAGE();

   }

  public function runThisPAGE(){

   if (isset($_SESSION['iduser'])) {   $this->runNow();  } 
   else {  header('location:  ../login');   }
   
        
        }
    
    
    

 

 

 
 




public function runNow(){

 

 
  
  
$dataExec = array(

'page' => 'home',
'getAlluser' =>  array(), 
'type' => true,
'directoryURI' => '../',
'value' => 0

);



      
 
renderDesign($dataExec);

}





 

 
    
    
        




}
