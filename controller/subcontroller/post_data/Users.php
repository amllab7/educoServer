<?php 
//require_once 'controller/algorithmes/PostRouter.php';
require_once 'model/adminerModel.php';
 
/**
*  
*/ 





 



class Users extends adminerModel{


	function __construct(){   }

 
    
  public function thenewvideo($connexion,$dataPost){
                  thenewvideoz($connexion,$dataPost);
        
   }



 
 
 

   public function modifyInfos($dataPost) {
 
     

    $adminerBdd = new adminerModel(); //instance de la classe du contorller encours
    $setdata = $adminerBdd->editSingleDATA($dataPost); // methode pour  
    if ($setdata) { echo('video mis ajour'); }
   
      
           

        }


              













        public function addNewuser($dataPost) {
 
  

          $adminerBdd = new adminerModel(); //instance de la classe du contorller encours
          $setdata = $adminerBdd->setThisUser($dataPost); // methode pour  
          if ($setdata) { echo('video mis ajour'); }
         
            
                 
      
              }

















public function resetPass($dataPost) {
 
   //Nous prevoyons mettre un bon algoritme de cryptage de mot de pass ici pour augmenter la securité
   // $2y$10$XVm1gksuO8QFmROmF1G1aO6ItP4iFuXc7ZSbwTo/J1PModUxqpIx2


   
     $dataPost['dataval'] = password_hash($dataPost['dataval'], PASSWORD_DEFAULT);    // cryptage de mot de passe 
     $adminerBdd = new adminerModel(); //instance de la classe du contorller encours
     $setdata = $adminerBdd->editSingleDATA($dataPost); // methode pour  
     if ($setdata) { echo ('Pass crypté avec sucee'); }
   
     }







    
        public function setAbilitation($dataPost) {


          $adminerBdd = new adminerModel(); //instance de la classe du contorller encours
          $checkIf =  $adminerBdd->getAbilityAccess($dataPost);
                    
                      if($checkIf==0){
                        $adminerBdd->thenewAbilitation($dataPost);
                      
                      } else{ $adminerBdd->updaterAbility($dataPost,1); }
             
           }   





       
           public function updateAbilitation($dataPost) {
            $adminerBdd = new adminerModel(); //instance de la classe du contorller encours
            $setdata = $adminerBdd->updaterAbility($dataPost,0); // methode pour  
            if ($setdata) { echo('profile mis ajour'); }



           
          
          
          
          }
      
      
      
    
    
                    
    
    

          public function postProfile($dataPost) {

            $adminerBdd = new adminerModel(); //instance de la classe du contorller encours
            $connexion = $adminerBdd->theconnect; // methode pour 

            if(isset($dataPost)){
             


              require 'controller/algorithmes/filesManager.php';
              require 'controller/algorithmes/photo.php';
        
              $result = uplodPICTURE('view/assets/datas/images/profile_images/','thefile',$dataPost['dataID']);
        
               var_dump('fuchier avec suceess');
              
              if ($result['statut']) {
        
                 $data_reference = array(
                  
                  'iduser' => $dataPost['dataID'],
                  'dataInsert' => $result['picture_name'],
                  'table' => 'user',
                  'row' => 'picture_link');
        
                  $adminerBdd->newSingleDATA_update($data_reference);
                  $adminerBdd->isPictureExternaler(0,$dataPost['dataID']);


                echo 'fichie uplodé avec sucee';
              }
              
        
        
        
            }
        
            else {
        
                
               
            }
           
           }







          
 
           
             
             }











    
        





             

       








 