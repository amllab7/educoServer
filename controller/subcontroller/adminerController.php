<?php 



 
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class adminerController {





	function __construct($page,$menusTble,$allData){  
                          
    $this->runThisPAGE();

   }

  public function runThisPAGE(){

   if (isset($_SESSION['iduser'])) {   $this->runNow();  } 
   else {  header('location:  ../login');   }
   
        
        }






 

        public function runNow(){


      

          require_once 'model/adminerModel.php';
          $userBdd = new adminerModel(); //instance de la classe du contorller encours
          $getAlluser = $userBdd->getAlluser(); // methode pour recuperer des videos dans la bdd
          $stat = $userBdd->get_statistique(); // methode pour instancier la classe statiqtique from classe parent MAIN MODEL
          $getedStat = $stat->homeStat($userBdd->theconnect); // recupere uniquqement stat des videos das la class statistique
           
          
         

          
    $dataExec = array(
  
      'page' => 'adminer',
      'stat_DATA' =>  $getedStat,
      'getAlluser' =>  $getAlluser, 
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
