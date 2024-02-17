<?php 
 
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class tologinController {
 


  public $page, $allData;
	function __construct($page,$menusTble,$allData){ 
    $this->page = $page;
        $this->allData = $allData;
 
                       
    $this->runThisPAGE();

   }




  public function runThisPAGE(){
    $this->runNow();
        
        }

 
        public function runNow(){




    
          $postDATA = $this->allData;
          $mail = $postDATA['username_FallaGo'];
          $pass = $postDATA['pass_FallaGo'];
          require_once 'model/loginModel.php'; 

    


 



          $userBdd = new loginModel('user','username'); //instance de la classe du contorller encours plus de details...
          $getInfosUSER = $userBdd->loginInfos($mail); // methode pour recuperer des videos dans la bdd
          $getInfosUSERfilt = $getInfosUSER['data'][0];
          if ($getInfosUSER['count']==1 AND password_verify($pass, $getInfosUSERfilt['user_password'])) {
            $_SESSION['iduser'] = $getInfosUSER['data']; //COMMENTAIRES
            // set History of connexion 
           // update the last connexion connexion 
            echo 100;
          }

      else {
              echo 'Verifiez vos informations'; 
          
      }
        
        }

        



 



}
