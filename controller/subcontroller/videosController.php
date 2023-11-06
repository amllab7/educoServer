<?php 

//require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class videosController{

 
	function __construct($page,$menusTble,$allData){  
                          
    $this->runThisPAGE();

   }

  public function runThisPAGE(){

   if (isset($_SESSION['iduser'])) {   $this->runNow();  } 
   else {  header('location:  ../login');   }
   
        
        }
    
    
    

 

 

 
 




public function runNow(){


      

  require_once 'model/videosModel.php';
  $videosBdd = new videosModel(); //instance de la classe du contorller encours
  $getAllvideos = $videosBdd->getAllvideos(); // methode pour recuperer des videos dans la bdd
  $stat = $videosBdd->get_statistique(); // methode pour instancier la classe statiqtique from classe parent MAIN MODEL
  $getedStat = $stat->videosStat($videosBdd->theconnect); // recupere uniquqement stat des videos das la class statistique
   
  

$dataExec = array(

'page' => 'videos',
'stat_DATA' =>  $getedStat,
'getAlluser' =>  $getAllvideos, 
'directoryURI' => '../',
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
