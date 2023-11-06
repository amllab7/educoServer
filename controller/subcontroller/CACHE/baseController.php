<?php 



require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class baseController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($page,$menusTble){

    
    //session_destroy();


          $configs = require 'configs/configV1.php';
          $theconnect = $this->bddInitiate($configs['db_Public']);
          require_once 'model/fetch/homeModel.php'; 
          $getAllaxes =  getAllAxes($theconnect); 
           

          $stat = $this->get_statistique(true);
          $getedStat = $stat->baseStat($theconnect);

          

          

          
          
         
            

    $dataExec = array(
  
      'page' => 'base',
      'stat_DATA' =>  $getedStat,
      'getAllaxes' =>  $getAllaxes, 
      'directoryURI' => '../',
      'type' => true,
      'value' => 0
    
    );


     
    if (isset($_SESSION['iduser'])) {
      renderDesign($dataExec);
    } else {

      header('location:  ../login'); 


      //renderDesign($dataExec);

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
