<?php 
require_once 'controller/algorithmes/PostRouter.php';
 

/**
*  
*/
class Datas extends PostRouter{


	function __construct(){   }

  public function postLinks(){

     echo ('je suis un faisue de monde'); 
 
          
        }
    
    
    
  


   public function test2($connexion,$dataPost){


    require_once 'model/insert/dataModel.php';
    editSingleDATA($connexion,$dataPost);

      
               
             }




 







}
