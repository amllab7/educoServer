<?php 



 
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class apiexecController {





	function __construct($page,$menusTble,$allData){  
                       
    $this->runThisPAGE();

   }

  public function runThisPAGE(){
    $this->runNow();
        
        }






 

        public function runNow(){


    
          $postDATA = array_merge($_GET,$_POST) ;

              $mail = $postDATA['mailIS'];
              $pass = $postDATA['passIS'];
          require_once 'model/adminerModel.php'; 
          $userBdd = new adminerModel(); //instance de la classe du contorller encours
          $getInfosUSER = $userBdd->getInfosUSER($mail); // methode pour recuperer des videos dans la bdd
          $getInfosUSERfilt = $getInfosUSER['data'][0];

          
             
          if ($getInfosUSER['count']==1 AND password_verify($pass, $getInfosUSERfilt['user_password'])) {
            $_SESSION['iduser'] = $getInfosUSER['data'];//"bzcbbbzkjcbkbzkjbzczc4z6c46zcz4c6";
            echo 100;
          }
      else {
        echo 'Verifiez vos informations'; 
          
      }
        
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
