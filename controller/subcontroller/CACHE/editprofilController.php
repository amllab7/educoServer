<?php 
require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class editprofilController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($page,$menusTble){

     

 

          $configs = require 'configs/configV1.php';
          $theconnect = $this->bddInitiate($configs['db_Public']);
           
          require_once 'model/fetch/loaderModel.php';
          $geter = array_merge($_GET,$_POST) ;

           
          $dataGeted = editprofile($theconnect,intval($geter['user']));

       
           

          $dataExec = array(
         
            'page' => 'editprofil', 
            'userinfos' =>  $dataGeted, 
            'type' => true,
            'directoryURI' => '../../',
            'value' => 0
          
          );

 



    renderDesign($dataExec);
       
         
              
              
     
          
        }
    
    
    










        public function runDISPLAY(){

          // exemple de model
          require_once 'model/bdd.php';
             $mysfi =  $connexion->prepare('SELECT * FROM  user ');
             $mysfi->execute(array(1));
             var_dump($mysfi->fetch());
             return $mysfi;
     
          
        }
    
    
    
        




}
