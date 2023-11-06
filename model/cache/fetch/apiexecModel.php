<?php


/**
 *  
 */
function getInfosUSER($connexion,$mail,$pass){



     $dataFrom = $connexion->prepare('SELECT * FROM  user WHERE 	username = ? AND user_password = ?');
     $dataFrom->execute(array($mail,$pass));
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
 