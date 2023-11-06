<?php 
require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class axeController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($page,$menusTble){

     



          $configs = require 'configs/configV1.php';
          $theconnect = $this->bddInitiate($configs['db_Public']);
          require_once 'model/fetch/baseModel.php';
          $geter = array_merge($_GET,$_POST) ;


          $baseinfos =  getInfosbase($theconnect,$geter['user']);
          
          
          $allIDO =  getInfosIDO($theconnect,$geter['user']);
          $realisations =  getWorks($theconnect,$geter['user']);
           



            
 
    $dataExec = array(
  
      'page' => 'axe',
       
      'baseinfos' =>  $baseinfos[0],  
      'allIDO' =>  $allIDO, 
      'realisations' =>  $realisations, 
      'type' => true,
      'directoryURI' => '../../',
      'value' => 0
    
    );

    if (isset($_SESSION['iduser'])) {
      renderDesign($dataExec);
    } else {

      header('location:  ../../login'); 

 

    }   
              
              
     
          
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
