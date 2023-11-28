<?php 
require_once 'controller/mainController.php';
require_once 'view/DefaultDesign.php';
 require_once 'view/DefaultMenus.php';
 
//require_once 'controller/abilitationsController.php';

 
/**
* 
*/
class homeController extends TheAMLModel{


	function __construct(){  


                $this->runThisPAGE();

         }
 




          public function runThisPAGE(){

            
          $configs = require 'configs/configV1.php'; // data base configuration
          $theconnect = $this->bddInitiate($configs['db_Public']); // data base connexion
        
          //require_once 'model/fetch/homeModel.php'; // require of model file 

          //$access = new Abilitations();
          //$access->runAccess('homeController','userHome',1);

          
          
           echo ("UNDER DEV");
           return false;
          
         
           $getAlluser =  getAlluser($theconnect);

           
          $dataExec = array(
            
                  'getAlluser' =>  $getAlluser, 
                  'page' => "home",
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
