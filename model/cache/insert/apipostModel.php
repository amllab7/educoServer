<?php


/**
 * 
 */
function newuser($connexion,$dataPost){
 
     $nom = $dataPost['nom'];
     $postnom = $dataPost['postnom'];
     $mail = $dataPost['mail'];
     $phone = $dataPost['phone'];
     $boulo = $dataPost['boulo']; 
     $citylocation = $dataPost['citylocation']; 
     $age = $dataPost['age']; 
     $aboutme = $dataPost['aboutme']; 
  
     $creationDate = date('d/m/y');
     
     
     
     $invit = $connexion ->prepare('INSERT INTO  user(username,prenom,phone,usermail,jobprofile,aboutme,cityof,userange,userpass,registeredon) VALUES(?,?,?,?,?,?,?,?,?,?)');
     
     //$invit -> execute(array($nom,$postnom,$phone,$mail,$boulo,$aboutme,$citylocation,$age,"123456",$creationDate));
     echo "success";

  
   
}




 





function thenewuser($connexion,$dataPost){
 
      
     $nomcomplet = $dataPost['nomcomplet'];
     $phone = $dataPost['telephone'];
     $creationDate = date('d/m/y');
     $defaultUsername = "Educo777";
     $defaultPass = time();
     
      $reqER = $connexion ->prepare('INSERT INTO 
       user (username,user_password,FullName,picture_link,externalePicture,registeredon) VALUES(?,?,?,?,?,?)');
     $reqER->execute(array($defaultUsername,$defaultPass,$nomcomplet,$phone,1,time()));


      // $req = "UPDATE  user SET username = ? WHERE id = ?";
     //$thereq = $connexion->prepare($req);
    // $thereq->execute(array($mail,5));
     echo "success - donnee inseré avec succeseeeeeeeees";

  
   
}






















function thenewvideoz($connexion,$dataPost){
 
      
     $nomcomplet = $dataPost['titrevideo'];
     $description_vid = $dataPost['titrevideo'];
     $hostid_vid = 0000;
     $hostername_vid = 'Youtube';
     $creationDate = date('d/m/y');


    // $defaultUsername = "Educo777";
    // $defaultPass = time();
     
      $reqER = $connexion ->prepare('INSERT INTO 
       videos (titre_vid,description_vid,hostid_vid,hostername_vid,sponsor_vid,datecreated_vid) VALUES(?,?,?,?,?,?)');
     $reqER->execute(array($nomcomplet,$description_vid,$hostid_vid,$hostername_vid,0,time()));


      // $req = "UPDATE  user SET username = ? WHERE id = ?";
     //$thereq = $connexion->prepare($req);
    // $thereq->execute(array($mail,5));
     echo "success - donnee inseré avec succeseeeeeeeees";

  
   
}


















function thenewlivrez($connexion,$dataPost){
 
      
     $nomcomplet = $dataPost['titrevideo'];
     $description_vid = $dataPost['titrevideo'];
     $hostid_vid = 0000;
     $hostername_vid = 'Youtube';
     $creationDate = date('d/m/y');

 
   
      $reqER = $connexion ->prepare('INSERT INTO 
       books (titre_book,resume_book,coverpicture_book,link_book,sponsor_book,datecreated_book) VALUES(?,?,?,?,?,?)');
     $reqER->execute(array($nomcomplet,$description_vid,$hostid_vid,$hostername_vid,0,time()));
     echo "success - donnee inseré avec succeseeeeeeeees";

  
   
}

























function thenewaxe($connexion,$dataPost){
 
      
     $nom = $dataPost['nomaxe'];
     $representant = $dataPost['representant'];
     $creationDate = date('d/m/y');
     
     $reqER = $connexion ->prepare('INSERT INTO  axes(nom,representant) VALUES(?,?)');
      $reqER->execute(array($nom,$representant));
      // $req = "UPDATE  user SET username = ? WHERE id = ?";
     //$thereq = $connexion->prepare($req);
    // $thereq->execute(array($mail,5));
     echo ('Axe ajouté avec succees'); 

  
   
}




function thenewAbilitation($connexion,$dataPost){
 
       
     $id_userAb = $dataPost['idrow'];
     $id_Abilitation = $dataPost['dataval'];
     $isValid_abilitation = 1;
     
     $creationDate = date('d/m/y');
     
     $reqER = $connexion ->prepare('INSERT INTO  ability_access(id_userAb,id_Abilitation,isValid_abilitation) VALUES(?,?,?)');
     $reqER->execute(array($id_userAb,$id_Abilitation,$isValid_abilitation));


      // $req = "UPDATE  user SET username = ? WHERE id = ?";
     //$thereq = $connexion->prepare($req);
    // $thereq->execute(array($mail,5));
     echo "success - donnee inseré avec success";

  
   
}





function updaterAbility($connexion,$dataPost,$isValid_abilitation=0){

     $id_userAb = $dataPost['idrow'];
     $id_Abilitation = $dataPost['dataval'];
     $id_colonne = $dataPost['colonne'];
     

     $modif = "UPDATE ability_access SET isValid_abilitation = ? WHERE id_userAb = ? AND id_Abilitation = ?";
     $luMsg = $connexion->prepare($modif);
     $luMsg->execute(array($isValid_abilitation,$id_userAb,$id_Abilitation));
     echo 'suceeeeeeeeeed';


}






function getAbilityAccess($connexion,$dataPost){

     $id_userAb = $dataPost['idrow'];
     $id_Abilitation = $dataPost['dataval'];
     $isValid_abilitation = 1;


     $dataFrom = $connexion->prepare('SELECT id_ab FROM  ability_access WHERE 	id_userAb = ? AND id_abilitation = ?');
     $dataFrom->execute(array($id_userAb,$id_Abilitation));
     $userCount = $dataFrom->rowCount();
     return $userCount;


}

















function newaccomplisDB($connexion,$dataPost){
 
     $titre = $dataPost['titre'];
     $category = "category";
     $descrption = $dataPost['desc'];
     $picturelink = $dataPost['userid'];
     $userid = $dataPost['userid']; 
     $creationDate = date('d/m/y');
     
     
     
     $invit = $connexion ->prepare('INSERT INTO  realisations(titre,category,descrption,picturelink,userid) VALUES(?,?,?,?,?)');
     
     $invit -> execute(array($titre,$category,$descrption,'',$userid));
     echo "success";

  
   
}




function nouvellecompetence($connexion,$dataPost){
 
     $titre = $dataPost['titre'];
     $descrption = $dataPost['desc'];
     $userid = $dataPost['userid']; 
     $creationDate = date('d/m/y');
     $invit = $connexion ->prepare('INSERT INTO  whatido(titre,texte,iduser) VALUES(?,?,?)');
     $invit -> execute(array($titre,$descrption,$userid));
     echo "Si vous avez des realisations en ".$titre." n'hesitez pas de les ajouter pour donner plus de credibilités";

  
   
}





 


function newSingleDATA_update($connexion,$dataPost){
 
  
   
     $user = $dataPost['iduser'];
     $table = $dataPost['table'];  
     $dataInsert = $dataPost['dataInsert']; 
     $row = $dataPost['row'];
     $execute = array($dataInsert,$user);
     
      
     $modif = "UPDATE  $table SET $row = ? WHERE id_user = ?";
     $luMsg = $connexion->prepare($modif);
     $luMsg->execute($execute);
  echo 'suceeeeeeeeeed';
   
}











function update_profilePicture($connexion,$dataPost){
 
     // $titre = $dataPost['titre'];
 
    
      $user = $dataPost['iduser'];
      $table = $dataPost['table'];  
      $dataInsert = $dataPost['dataInsert']; 
      $row = $dataPost['row'];
      $execute = array($dataInsert,$user);
      
       
      $modif = "UPDATE  $table SET $row = ? WHERE id = ?";
      $luMsg = $connexion->prepare($modif);
      $luMsg->execute($execute);
   echo 'suceeeeeeeeeed';
    
 }

 





function activateUserDB($connexion,$dataPost){
 
     // $titre = $dataPost['titre'];
 
     
      //$user = $dataPost['active'];

      //$statut = $dataPost['statut'];

echo ("Ancien valeur est : ".$dataPost['statut']);
      $statut = (intval($dataPost['statut'])==0) ? 1 : 0 ;
      $iduser = intval($dataPost['iduser']);
      $execute = array($statut,$iduser);
       
      $modif = "UPDATE  user SET is_active = ? WHERE id = ?";
      $luMsg = $connexion->prepare($modif);
      $luMsg->execute($execute);
      echo $statut;
    
 }
 
 
 








function edituserDb($connexion,$dataPost){
  
  
    
   
     
    
       	 	
     
     $instagram = $dataPost['instagram'];
     $fbk = $dataPost['fbk'];
     $twitter = $dataPost['twitter']; 
     $iduser = $dataPost['userid']; 
     $aboutme = $dataPost['aboutme']; 
  
     $creationDate = date('d/m/y');

     $execute = array($aboutme,$instagram,$fbk,$twitter,$iduser);

     

     $modif = "UPDATE  user SET aboutme = ?, instagram = ?, fbk = ? , twitter = ? WHERE id = ?";
     $luMsg = $connexion->prepare($modif);
     $luMsg->execute($execute);
     
     //$invit -> execute(array($nom,$postnom,$phone,$mail,$boulo,$aboutme,$citylocation,$age,"123456",$creationDate));
     echo "success";

  
   
}












 





function editexplorerDB($connexion,$dataPost){
  
     $titre = $dataPost['titre'];
     $keyWord = $dataPost['keyword'];
     $descr = $dataPost['descr'];
     $iduser = $dataPost['userid'];
     $redirect = $dataPost['redirect']; 
     $creationDate = date('d/m/Y');
     $execute = array($titre,$descr,$redirect,$creationDate,$keyWord,$iduser);

     

     $modif = "UPDATE  explorer SET titre = ?,descriptions = ? ,redirect = ? ,thedate = ? ,keyword = ? WHERE id = ?";
     $luMsg = $connexion->prepare($modif);
     $luMsg->execute($execute);
     
     //$invit -> execute(array($nom,$postnom,$phone,$mail,$boulo,$aboutme,$citylocation,$age,"123456",$creationDate));
     echo "success";

  
   
}






function editSingleDATA($connexion,$dataPost){
  
     $data = $dataPost['dataval'];
     $colonne = $dataPost['colonne'];
     $idrow = $dataPost['idrow'];

    
     
     $creationDate = date('d/m/Y');
     $execute = array($data,intval($idrow));

     

     $modif = "UPDATE user SET $colonne = ? WHERE id_user = ?";
     $luMsg = $connexion->prepare($modif);
     $luMsg->execute($execute);





     

     if($colonne=='picture_link'){

          isPictureExternal(1,$connexion,$idrow);

     }
     
     //$invit -> execute(array($nom,$postnom,$phone,$mail,$boulo,$aboutme,$citylocation,$age,"123456",$creationDate));
     echo "Donnée mis ajour";

  
   
}


 

function isPictureExternal($isthis,$connexion,$idrow){

 
     $modif2 = "UPDATE user SET externalePicture = ? WHERE id_user = ?";
     $luMsg2 = $connexion->prepare($modif2);
     $luMsg2->execute(array($isthis,intval($idrow)));



}