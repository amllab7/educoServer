<?php 
//require_once 'controller/algorithmes/PostRouter.php';
require_once 'model/livresModel.php';
 
/**
*  
*/ 





 



class Livres extends livresModel{


	function __construct(){   }

 
    
  public function thenewlivre($dataPost){
    $dataPost = array_merge($_GET,$_POST);


    $booknew = new livresModel(); //instance de la classe du contorller encours
    $booknew->addbookBdd($dataPost); // methode pour  
    
    if ($booknew) { echo('livre ajouté'); }




              
        
   }



 
 


    public function updatelivre($dataPost) {
 

      $videosBdd = new livresModel(); //instance de la classe du contorller encours
      $setdata = $videosBdd->updateLivreBDD($dataPost); // methode pour  
      if ($setdata) { echo('livre mis ajour'); }
     
        
             

          }


                










          
 
           
             
             }











    
        





             

       








 