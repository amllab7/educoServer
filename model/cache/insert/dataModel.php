<?php


/**
 * 
 */
 



function editSingleDATA2($connexion,$dataPost){
  
     $data = $dataPost['dataval'];
     $colonne = $dataPost['colonne'];
     $idrow = $dataPost['idrow'];

     
     $creationDate = date('d/m/Y');
     $execute = array($data,intval($idrow));

     

     $modif = "UPDATE user SET $colonne = ? WHERE id = ?";
     $luMsg = $connexion->prepare($modif);
     $luMsg->execute($execute);
     
     //$invit -> execute(array($nom,$postnom,$phone,$mail,$boulo,$aboutme,$citylocation,$age,"123456",$creationDate));
     echo "success";

  
   
}
 

 