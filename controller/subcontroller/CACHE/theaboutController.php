<?php 
require_once 'controller/mainController.php';
require_once 'view/DefaultDesign.php';
require_once 'view/DefaultMenus.php';
/**
* 
*/
class theaboutController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($modeler){
 
           
    $configs = require 'configs/configV1.php';
    $theconnect = $this->bddInitiate($configs['db_Public']);
          require_once 'model/fetch/homeModel.php';
          $getAlluser =  getAboutWEBSITE($theconnect);


  
       
  
          //renderDesign("home",$getAlluser,"",false,'');

          $dataExec = array(
            
            'getAlluser' =>  $getAlluser, 
            'page' => "theabout",
            'type' => false,
            'directoryURI' => '',
            'value' => 0
             
          
          );


         // renderDesign($page,$dataGeted,$getInfosIDO,true,$userINFOS,0);

         renderDesign($dataExec);
              
              
     
          
        }
    
    
    










        public function runDISPLAY(){

          require "view/home.php";
     
          
        }
    
    
    
        




}
