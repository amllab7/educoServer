<?php


require_once 'model/mainModel.php';
class apiModel extends MainModel{

    public $theconnect;



    function __construct(){
        $this->theconnect = $this->connectBDD();

        }
































       public function getAllBooks(){



            $dataFrom = $this->theconnect->prepare('SELECT * FROM  books ');
            $dataFrom->execute(array());
            $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC);
            $userCount = $dataFrom->rowCount();
       
        return array('count'=> $userCount,'data'=> $dataFromGETTER);
       
       
       }




      public function getAllVideos(){



        $dataFrom = $this->theconnect->prepare('SELECT * FROM videos ');
        $dataFrom->execute(array());
        $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC);
        $userCount = $dataFrom->rowCount();
   
    return array('count'=> $userCount,'data'=> $dataFromGETTER);
   
   
   
   
   
   }
   










  public function getLiveVideo(){



    $dataFrom = $this->theconnect->prepare('SELECT * FROM videos WHERE islive_vid = ?');
    $dataFrom->execute(array(1));
    $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC);
    $userCount = $dataFrom->rowCount();

return array('count'=> $userCount,'data'=> $dataFromGETTER);





}




public function getAllDiscovery(){



    $dataFrom = $this->theconnect->prepare('SELECT * FROM  blogs');
    $dataFrom->execute(array());
    $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC); 
    $userCount = $dataFrom->rowCount();

return array('count'=> $userCount,'data'=> $dataFromGETTER);


}





public function getAllDatatMessage(){



    $dataFrom = $this->theconnect->prepare('SELECT 	descriptions FROM  datamessage');
    $dataFrom->execute(array());
    $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC); 
    $userCount = $dataFrom->rowCount();

return array('count'=> $userCount,'data'=> $dataFromGETTER);


}






public function getAllCategories(){



    $dataFrom = $this->theconnect->prepare('SELECT * FROM  categories');
    $dataFrom->execute(array());
    $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC); 
    $userCount = $dataFrom->rowCount();

return array('count'=> $userCount,'data'=> $dataFromGETTER);


}




public function getSingleCategory($id){



    $dataFrom = $this->theconnect->prepare('SELECT * FROM  categories WHERE id = ?');
    $dataFrom->execute(array($id));
    $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC); 
    $userCount = $dataFrom->rowCount();

return array('count'=> $userCount,'data'=> $dataFromGETTER);


}



 







 public function execRechercheVIDEOS($postDATA){


    $theIDz = $postDATA["value"];
    $limiter = 5;

    $keyWord = array('is_active'=>1,'theID'=>$theIDz,'is_active2'=>$theIDz,);

    $theReq = 'SELECT * FROM videos WHERE titre_vid LIKE "%" :theID "%" OR 
description_vid LIKE "%" :theID "%" AND 
isactive_vid = :is_active
ORDER BY id_vid DESC LIMIT 0'.$limiter;


$dataFrom = $this->theconnect->prepare($theReq);
$dataFrom->execute($keyWord);
    $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC);
    $userCount = $dataFrom->rowCount();

return array('count'=> $userCount,'data'=> $dataFromGETTER);





}














public function execrecherchercategorie($postDATA){


    $theIDz = $postDATA["value"];
    $limiter = 5;

    $keyWord = array('theID'=>$theIDz);

    $theReq = 'SELECT * FROM categories WHERE nom_cat LIKE "%" :theID "%"
ORDER BY id_cat DESC LIMIT 0'.$limiter;


$dataFrom = $this->theconnect->prepare($theReq);
$dataFrom->execute($keyWord);
    $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC);
    $userCount = $dataFrom->rowCount();

return array('count'=> $userCount,'data'=> $dataFromGETTER);





}


















public function execRechercheBooks($postDATA){


    $theIDz = $postDATA["value"];
    $limiter = 25;

    $keyWord = array('is_active'=>1,'theID'=>$theIDz,'is_active2'=>$theIDz,);

    $theReq = 'SELECT * FROM books WHERE titre_book LIKE "%" :theID "%" OR 
resume_book LIKE "%" :theID "%" AND 
isactive_book = :is_active
ORDER BY id_BOOK DESC LIMIT 0'.$limiter;


$dataFrom = $this->theconnect->prepare($theReq);
$dataFrom->execute($keyWord);
    $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC);
    $userCount = $dataFrom->rowCount();

return array('count'=> $userCount,'data'=> $dataFromGETTER);





}

































   public function setTrack($dataFrom){


    //$reqER = $this->theconnect->prepare('INSERT INTO trackingData () VALUES(?)');
    //$reqER->execute(array());
    return "Tracking finish - data is setted";
       
       
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