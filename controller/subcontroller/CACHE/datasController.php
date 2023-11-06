<?php 
require_once 'controller/mainController.php';
require_once 'view/DefaultDesign.php';

/**
* 
*/
class datasController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($page,$menusTble){

           
    $configs = require 'configs/configV1.php';

    $theconnect = $this->bddInitiate($configs['db_Public']);
  
  
          require_once 'model/fetch/datasModel.php';
          $dataGeted =  getInfosQbout($theconnect);

       
          $geter = $_GET;

          $getInfosUSER =  getInfosUSER($theconnect,$geter['user']);
          $getDATAcategory =  getDATAcategory($theconnect,$geter['user']);
          $getDATAcategorySET = (!empty($getDATAcategory)) ? $getDATAcategory : false ;
          $userINFOS = array('getInfosUSER' => $getInfosUSER[0], 'getDATAcategory' => $getDATAcategory);

          $dataExec = array(
            
            'getInfosUSER' => $getInfosUSER[0], 
            'getDATAcategorySET' =>  $getDATAcategorySET, 
            'getInfosUSER' => $getInfosUSER[0],
            'page' => $page,
            'type' => true,
            'directoryURI' => '../../',
            'value' => 0
          
          );


         // renderDesign($page,$dataGeted,$getInfosIDO,true,$userINFOS,0);

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
