<?php 

//require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class livresController{

 
	function __construct($page,$menusTble,$allData){  
                          
    $this->runThisPAGE();

   }

  public function runThisPAGE(){

   if (isset($_SESSION['iduser'])) {   $this->runNow();  } 
   else {  header('location:  ../login');   }
   
        
        }
    
    
    

 



 
 




public function runNow(){


      

  require_once 'model/livresModel.php';
  $livresBdd = new livresModel(); //instance de la classe du contorller encours
  $getAlllivres = $livresBdd->getAlllivres(); // methode pour recuperer des videos dans la bdd
  $stat = $livresBdd->get_statistique(); // methode pour instancier la classe statiqtique from classe parent MAIN MODEL
  $getedStat = $stat->livresStat($livresBdd->theconnect); // recupere uniquqement stat des videos das la class statistique
   
  

$dataExec = array(

'page' => 'livres',
'stat_DATA' =>  $getedStat,
'getAlluser' =>  $getAlllivres, 
'directoryURI' => '../',
'type' => true,
'value' => 0

);
renderDesign($dataExec);

}





 

 
    
    
        




}
