<?php 
require_once 'controller/mainController.php';
//require_once 'view/DefaultDesign.php';

/**
* 
*/
class apigetController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($page,$menusTble){

           echo 'nazapps';
           return false;
    $configs = require 'configs/configV1.php';
    $theconnect = $this->bddInitiate($configs['db_Public']);
    require_once 'model/insert/apipostModel.php';
   
    $postDATA = array_merge($_GET,$_POST) ;

    var_dump($postDATA);
    return false;
    $dataType = $postDATA['datatype'];
    $funcType = $postDATA['funcExec'];
    require_once 'controller/subcontroller/post_data/'.$dataType.'.php';
    $instance = new $dataType();
    $instance->$funcType($theconnect,$postDATA);
   

     


 
          
        }
    
    
    






 
    
    
        




}
