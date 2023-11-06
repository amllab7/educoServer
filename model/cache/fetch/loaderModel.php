<?php


/**
 * 
 */
 
 
function editprofile($connexion,$iduser){
     $dataFrom = $connexion->prepare('SELECT * FROM  user WHERE id = ?');
     $dataFrom->execute(array($iduser));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}





function editexplorer($connexion,$iduser){
     $dataFrom = $connexion->prepare('SELECT * FROM  explorer WHERE id = ?');
     $dataFrom->execute(array($iduser));
     $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}