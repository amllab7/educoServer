<?php


/**
 * 
 */
function getInfosQbout($connexion){
          $dataFrom = $connexion->prepare('SELECT * FROM  user');
          $dataFrom->execute();
          $dataFromGETTER = $dataFrom->fetchAll();
     return $dataFromGETTER;
   
}




function getDATAcategory($connexion,$userID){
     $dataFrom = $connexion->prepare('SELECT * FROM datas_cat WHERE actived  = ?');
     $dataFrom->execute(array(1));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}



function getInfosUSER($connexion,$iduser){
     $dataFrom = $connexion->prepare('SELECT * FROM  user WHERE id = ?');
     $dataFrom->execute(array($iduser));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}





function getInfosAbout($connexion,$iduser){
     $dataFrom = $connexion->prepare('SELECT * FROM  aboutme WHERE id = ?');
     $dataFrom->execute(array($iduser));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}
