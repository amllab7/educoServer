<?php 
//require_once 'controller/algorithmes/PostRouter.php';
require_once 'model/videosModel.php';
 
/**
*  
*/ 





 



class Videos extends videosModel{


	function __construct(){   }

 
   

   public function thenewvideo($dataPost){



    $videonew = new videosModel(); //instance de la classe du contorller encours
    $setdata = true; $videonew->addvideoBdd($dataPost); // methode pour  
    if ($setdata) { echo('livre ajouté'); }




              
        
   }

 
 


    public function updatevideo($dataPost) {
 

      $videosBdd = new videosModel(); //instance de la classe du contorller encours
      $setdata = $videosBdd->updatevideoBDD($dataPost); // methode pour  
      if ($setdata) { echo('video mis ajour'); }
     
        
             

          }


                










          
 
           
             
             }











    
        





             

       








 