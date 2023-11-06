<?php 
require_once 'controller/mainController.php';
require_once 'view/DefaultDesign.php';

/**
* 
*/
class searchController extends TheAMLModel{


	function __construct(){   }

  public function runThisPAGE($page,$menusTble){

    $configs = require 'configs/configV1.php';
    $theconnect = $this->bddInitiate($configs['db_Public']);


    require_once 'model/fetch/homeModel.php';


    $postDATA = array_merge($_GET,$_POST) ;
    $data = $postDATA['data'];
    $dataType = $postDATA['dataType'];
    $allDta =  searchThis($data,$theconnect,$dataType); 
    
 echo 'Pour votre requete sur le donnée du type nom : '.$dataType.' Nous avions obtenu '.count($allDta).' correspondance';
 
   




 
           

           
     
          
        }
    
    
    






 
    
    
        




}
