<?php 
require_once 'controller/mainController.php';
require_once 'view/DefaultDesign.php';

/**
* 
*/
class loaderController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($page,$menusTble){

           
    $configs = require 'configs/configV1.php';

    $theconnect = $this->bddInitiate($configs['db_Public']);
  
  
          require_once 'model/fetch/loaderModel.php';
          $geter = array_merge($_GET,$_POST) ;

          

          $fonction = $geter['datatype'];
          $id = $geter['id'];
          $dataGeted = $fonction($theconnect,$id);

       
            
          require 'view/admin/pages/loader/'.$fonction.'.php';
          $functionIS = $fonction."DESIGN";

          $functionIS($dataGeted);
        
         // newuser($theconnect,$geter);
           

           
     
          
        }
    
    
    






 
    
    
        




}
