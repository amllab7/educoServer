<?php


require_once 'model/MainModel.php';
class categoriesModel extends MainModel{

    public $theconnect;



    function __construct(){
        $this->theconnect = $this->connectBDD();

        }



        public function getAllcategories(){
            $dataFrom = $this->theconnect->prepare('SELECT * FROM  categories');
            $dataFrom->execute();
            $dataFromGETTER = $dataFrom->fetchAll();
        return $dataFromGETTER;
        
        }
        
        




        public function updateCatBDD($dataPost){
            
            $data = $dataPost['dataval'];
            $colonne = $dataPost['colonne'];
            $idrow = $dataPost['idrow'];
            $creationDate = time();
            $execute = array($data,$creationDate,intval($idrow));
      
                  $requete = "UPDATE categories SET $colonne = ?, datecreted_cat = ? WHERE id_cat = ?";
                  $luMsg = $this->theconnect->prepare($requete);
                  $luMsg->execute($execute);
                  return true;
        
        }
        
        






 



































/**
 * 
 */
public function getAlluser($connexion){
          $dataFrom = $connexion->prepare('SELECT * FROM  user WHERE is_active = ?');
          $dataFrom->execute(array(1));
          $dataFromGETTER = $dataFrom->fetchAll();
     return $dataFromGETTER;
   
}


 
public function getAllAxes($connexion){
    $dataFrom = $connexion->prepare('SELECT * FROM  axes');
    $dataFrom->execute();
    $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}





public function getAboutWEBSITE($connexion){
    $dataFrom = $connexion->prepare('SELECT content FROM  website_data WHERE id = ?');
    $dataFrom->execute(array(1));
    $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER[0]["content"];

}






public function getExplorer($connexion){
    $dataFrom = $connexion->prepare('SELECT * FROM explorer');
    $dataFrom->execute(array(1));
    $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}
















public function getInfosIDO($connexion){
     $dataFrom = $connexion->prepare('SELECT * FROM  whatido WHERE iduser  = ?');
     $dataFrom->execute(array(1));
     $dataFromGETTER = $dataFrom->fetchAll();
     return $dataFromGETTER;

}  




public function searchThis($keywo,$bdd,$useRkEY){

     $limiter = 20; $ability = 0;
     $keyWord = array('theID'=>$keywo);

      

                       
     $theReq = 'SELECT * FROM user WHERE '.$useRkEY.' LIKE "%" :theID "%" ORDER BY id DESC LIMIT 0'.$limiter;
     
     
     $fetcher = $bdd->prepare($theReq);
     $fetcher ->execute($keyWord);

     $dataFromGETTER = $fetcher->fetchAll();
     return $dataFromGETTER;
     
     
     
     }









     
     public function searchThis2($keywo,$bdd){

     $limiter = 20; $ability = 0;
     $keyWord = array('is_active'=>'','theID'=>$keywo,'is_active2'=>$keywo,);



                       
     $theReq = 'SELECT username FROM user WHERE username LIKE "%" :theID "%" OR 
         prenom LIKE "%" :theID "%" OR 
         jobprofile LIKE "%" :theID "%"
         ORDER BY id DESC LIMIT 0'.$limiter;
     
     
     $fetcher = $bdd->prepare($theReq);
     $fetcher ->execute($keyWord);

     $dataFromGETTER = $fetcher->fetchAll();
     return $dataFromGETTER;
     
     
     
     }







    }