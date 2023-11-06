<?php 

//require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class apipostController{

 
	function __construct($page,$menusTble,$allData){  
                          
    $this->runThisPAGE();

   }

  public function runThisPAGE(){

   if (isset($_SESSION['iduser'])) {   $this->runNow();  } 

   else {  echo 'impossible';   }
   
        
        }
    
    
    

 



 
 




public function runNow(){


      

  //require_once 'model/apipostModel.php';
  //$videosBdd = new apipostModel(); //instance de la classe du contorller encours

      
    $postDATA = array_merge($_GET,$_POST) ;
    $dataType = $postDATA['datatype']; 
    $funcType = $postDATA['funcExec'];   
   
 
  require_once 'controller/subcontroller/post_data/'.$dataType.'.php';
  $instance = new $dataType();
  $instance->$funcType($postDATA);

 


}





 

 
    
        




}
