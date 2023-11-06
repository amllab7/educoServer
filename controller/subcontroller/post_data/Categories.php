<?php 
//require_once 'controller/algorithmes/PostRouter.php';
require_once 'model/categoriesModel.php';
 
/**
*  
*/ 





 



class Categories extends categoriesModel{


	function __construct(){   }

 
    
  public function thenewvideo($connexion,$dataPost){
                  thenewvideoz($connexion,$dataPost);
        
   }



 
 


    public function updateCat($dataPost) {
 

      $videosBdd = new categoriesModel(); //instance de la classe du contorller encours
      $setdata = $videosBdd->updateCatBDD($dataPost); // methode pour  
      if ($setdata) { echo('video mis ajour'); }
     
        
             

          }


                










          
 
           
             
             }











    
        





             

       








 