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




function getInfosIDO($connexion,$userID){
     $dataFrom = $connexion->prepare('SELECT * FROM  whatido WHERE iduser  = ?');
     $dataFrom->execute(array($userID));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}


function getInfosREA($connexion,$userID){
     $dataFrom = $connexion->prepare('SELECT * FROM  realisations WHERE userid  = ?');
     $dataFrom->execute(array($userID));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}



function getMoreUSERS($connexion){
     $dataFrom = $connexion->prepare('SELECT * FROM  user WHERE is_active  = ? ORDER BY RAND() limit 10');
     $dataFrom->execute(array(1));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}


function getInfosUSER($connexion,$iduser){
     $dataFrom = $connexion->prepare('SELECT * FROM  user WHERE id_user = ?');
     $dataFrom->execute(array($iduser));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}


 


function getAllCategorie($connexion,$iduser){
     $dataFrom = $connexion->prepare('SELECT * FROM  categories');
     $dataFrom->execute();
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}

function getAllabilitations($connexion,$iduser){
     $dataFrom = $connexion->prepare('SELECT * FROM  abilitations');
     $dataFrom->execute();
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}

function getmyAbilitaty($connexion,$iduser){
     $dataFrom = $connexion->prepare('SELECT id_Abilitation FROM  ability_access WHERE 	id_userAb = ? AND isValid_abilitation = ?');
     $dataFrom->execute(array($iduser,1));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}


  


 

function getWorks($connexion,$iduser){
     $dataFrom = $connexion->prepare('SELECT * FROM realisations WHERE idrealistions = ?');
     $dataFrom->execute(array($iduser));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

} 
