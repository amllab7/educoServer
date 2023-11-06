<?php 
require_once 'controller/mainController.php';
require_once 'view/DefaultDesign.php';

/**
* 
*/
class aboutController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($page){

           
    $configs = require 'configs/configV1.php';
    $theconnect = $this->bddInitiate($configs['db_Public']);
  
   
          require_once 'model/fetch/aboutModel.php';
          $dataGeted =  getInfosQbout($theconnect);
          $geter = $_GET;

         
         
          $getInfosUSER =  getInfosUSER($theconnect,$geter['user']);

          $getInfosIDO =  getInfosIDO($theconnect,$geter['user']);
          $getMoreUSERS =  getMoreUSERS($theconnect);


          $getInfosIDOset = (!empty($getInfosIDO)) ? $getInfosIDO : false ;

 
          
          $userINFOS = array('getInfosUSER' => $getInfosUSER[0], 'getInfosIDO' => $getInfosIDOset);
           
          $dataExec = array(
            
            'getInfosUSER' => $getInfosUSER[0], 
            'getInfosIDO' =>  $getInfosIDOset, 
            'getMoreUSERS' => $getMoreUSERS,
            'page' => $page,
            'directoryURI' => '../../',
            'type' => true, 
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
