<?php 

//require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class profileController{

 
	function __construct($page,$menusTble,$allData){  
                          
    $this->runThisPAGE();

   }

  public function runThisPAGE(){

   if (isset($_SESSION['iduser'])) {   $this->runNow();  } 
   else {  header('location:  ../../');   }
   
        
        }
    
    
    

 



 
 




public function runNow(){

 


 


      
  $geter = array_merge($_GET,$_POST) ;
  require_once 'model/profileModel.php';
  $profileBdd = new profileModel(); //instance de la classe du contorller encours
  $userinfos = $profileBdd->getInfosUSER($geter['user']); // methode pour recuperer des videos dans la bdd
  $abilitations = $profileBdd->getAllabilitations(); // methode pour recuperer des videos dans la bdd
  $myAbilitaty = $profileBdd->getmyAbilitaty($geter['user']); // methode pour recuperer des videos dans la bdd
  $myAbilitatyFiltered = array();

  foreach ($myAbilitaty as $key => $value) {
     array_push($myAbilitatyFiltered,$value['id_Abilitation']);
  }


  
  $dataExec = array( 
  
    'page' => 'profile',
    'userinfos' =>  $userinfos[0],  
    'abilitations' => $abilitations, 
    'myAbilitaty' => $myAbilitatyFiltered,
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
