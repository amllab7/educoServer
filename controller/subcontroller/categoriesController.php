<?php 

//require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
*  
*/
class categoriesController{

 
	function __construct($page,$menusTble,$allData){  
                          
    $this->runThisPAGE();

   }

  public function runThisPAGE(){

   if (isset($_SESSION['iduser'])) {   $this->runNow();  } 
   else {  header('location:  ../login');   }
   
        
        }
    
    
    

 



 
 




public function runNow(){


      

  require_once 'model/categoriesModel.php';
  $categoriesBdd = new categoriesModel(); //instance de la classe du contorller encours
  $getAllCategories = $categoriesBdd->getAllcategories(); // methode pour recuperer des videos dans la bdd
  $stat = $categoriesBdd->get_statistique(); // methode pour instancier la classe statiqtique from classe parent MAIN MODEL
  $getedStat = $stat->categoriesStat($categoriesBdd->theconnect); // recupere uniquqement stat des videos das la class statistique
   
  

$dataExec = array(

'page' => 'categories',
'stat_DATA' =>  $getedStat,
'getAllcategories' =>  $getAllCategories, 
'directoryURI' => '../',
'type' => true,
'value' => 0

);
renderDesign($dataExec);

}





 

 
    
    
    
        




}
