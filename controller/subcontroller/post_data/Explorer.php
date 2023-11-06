<?php 
require_once 'controller/algorithmes/PostRouter.php';
 

/**
* 
*/
class Explorer extends PostRouter{


	function __construct(){   }

  public function executeInsert(){

     echo ('je suis un faisue de monde'); 
 
          
        }
    
    
    



   public function AddNewExplorer($connexion,$dataPost){

          

         thenewExplorer($connexion,$dataPost);

          $iduserAdded = 1;
         // $test = $this::getLast_Addeduser($iduserAdded,$connexion);

         //var_dump($test);


          echo ('je suis un faisue de monde'); 



      
               
             }

        




             public function editexplorer($connexion,$dataPost){

          
              editexplorerDB($connexion,$dataPost);
    
          
                   
                 }
             


                 public function activateUser($connexion,$dataPost){
                               activateUserDB($connexion,$dataPost);
                              }


                 public function analyserUser() {
       
          

                        require_once 'view/admin/composants/input_composant.php';
                        $arrInput = getInputColor();

         

                        for ($i=0; $i < 5; $i++) { 
                          $arrInput = $arrInput."".getInput();
                        }
                       echo $arrInput;

                }


















             public function postProfile($connexion,$dataPost) {

               

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
          
                   newSingleDATA_update($connexion,$data_reference);
                  echo 'fichie uplodé avec sucee';
                }
                
          
          
          
              }
          
              else {
          
                  
                 
              }
             
             }











    
        





             


             public function AddCv($connexion,$dataPost) {



              if(isset($dataPost)){


                require 'controller/algorithmes/filesManager.php';
                require 'controller/algorithmes/pdf.php';
                $result = uplodPdf('view/assets/datas/pdf/cv/','thefile',$dataPost['dataID']);

                if ($result['statut']) {
          
                  $data_reference = array(
                   
                   'iduser' => $dataPost['dataID'],
                   'dataInsert' => $result['data_name'],
                   'table' => 'user',
                   'row' => 'cv_link');
         
                  newSingleDATA_update($connexion,$data_reference); 

                   
          
                 echo 'fichie uplodé avec sucee';
               }

                echo ("pdf ajouté");

 }
          
               
             
             }









 




}
