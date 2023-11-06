<?php


/**
 *  
 */


function getInfosUSER($connexion){



     $dataFrom = $connexion->prepare('SELECT * FROM  user ');
     $dataFrom->execute(array());
     $dataFromGETTER = $dataFrom->fetchAll();
     $userCount = $dataFrom->rowCount();

 return array('count'=> $userCount,'data'=> $dataFromGETTER);





}
 








function getAllBooks(){



     $dataFrom = $connexion->prepare('SELECT * FROM  books ');
     $dataFrom->execute(array());
     $dataFromGETTER = $dataFrom->fetchAll();
     $userCount = $dataFrom->rowCount();

 return array('count'=> $userCount,'data'=> $dataFromGETTER);


}
 






function getAllCategories($connexion){



     $dataFrom = $connexion->prepare('SELECT * FROM  categories');
     $dataFrom->execute(array());
     $dataFromGETTER = $dataFrom->fetchAll();
     $userCount = $dataFrom->rowCount();

 return array('count'=> $userCount,'data'=> $dataFromGETTER);


}













function getAllVideos($connexion){



     $dataFrom = $connexion->prepare('SELECT * FROM videos ');
     $dataFrom->execute(array());
     $dataFromGETTER = $dataFrom->fetchAll();
     $userCount = $dataFrom->rowCount();

 return array('count'=> $userCount,'data'=> $dataFromGETTER);





}






function getLiveVideo($connexion){



     $dataFrom = $connexion->prepare('SELECT * FROM videos WHERE islive_vid = ?');
     $dataFrom->execute(array(1));
     $dataFromGETTER = $dataFrom->fetchAll();
     $userCount = $dataFrom->rowCount();

 return array('count'=> $userCount,'data'=> $dataFromGETTER);





}


















function getInfosUSER2($connexion,$mail,$pass){


     
     $dataFrom = $connexion->prepare('SELECT * FROM  user WHERE phone = ?');
     $dataFrom->execute(array($mail));
     $dataFromGETTER = $dataFrom->fetchAll();
     $userCount = $dataFrom->rowCount();
     
    if ($userCount==1 AND password_verify($pass,$dataFromGETTER[0]['userpass'])) {
          echo (525272);
          return array('count'=> $userCount,'data'=> $dataFromGETTER);
           
     }

     else{

          echo ("none");
          return array('count'=> $userCount,'data'=>array());
     }
 


     





}
 









function execRecherche($connexion,$postDATA){


     $theIDz = $postDATA["value"];
     $limiter = 5;

     $keyWord = array('is_active'=>'','theID'=>$theIDz,'is_active2'=>$theIDz,);

     $theReq = 'SELECT * FROM videos WHERE titre_vid LIKE "%" :theID "%" OR 
description_vid LIKE "%" :theID "%" OR 
isactive_vid LIKE "%" :theID "%"
ORDER BY id_vid DESC LIMIT 0'.$limiter;


$dataFrom = $connexion->prepare($theReq);
 $dataFrom->execute($keyWord);
     $dataFromGETTER = $dataFrom->fetchAll();
     $userCount = $dataFrom->rowCount();

 return array('count'=> $userCount,'data'=> $dataFromGETTER);





}




