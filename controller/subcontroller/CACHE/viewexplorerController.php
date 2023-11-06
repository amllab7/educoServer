<?php 
require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class viewexplorerController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($page,$menusTble){
 
          $configs = require 'configs/configV1.php';
          $theconnect = $this->bddInitiate($configs['db_Public']);
          require_once 'model/fetch/aboutModel.php';
          $geter = array_merge($_GET,$_POST) ;


          $userinfos =  getInfosUSER($theconnect,$geter['user']);
          $allIDO =  getInfosIDO($theconnect,$geter['user']);
          $realisations =  getWorks($theconnect,$geter['user']);
           
 
    $dataExec = array(
  
      'page' => 'viewexplorer',
       
      'userinfos' =>  $userinfos[0], 
      'allIDO' =>  $allIDO, 
      'realisations' =>  $realisations, 
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
