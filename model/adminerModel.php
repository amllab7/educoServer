<?php


require_once 'model/MainModel.php';
class adminerModel extends MainModel{

    public $theconnect;



    function __construct(){
        $this->theconnect = $this->connectBDD();

        }








        public function getInfosUSER($mail){


 
            $dataFrom = $this->theconnect->prepare('SELECT * FROM  user WHERE 	username = ?');
            $dataFrom->execute(array($mail));
            $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC);
            $userCount = $dataFrom->rowCount();
        
            return array('count'=> $userCount,'data'=> $dataFromGETTER);
       
        
       
       }










        public function getAlluser(){
            $dataFrom = $this->theconnect->prepare('SELECT * FROM  user');
            $dataFrom->execute();
            $dataFromGETTER = $dataFrom->fetchAll();
        return $dataFromGETTER;
        
        }
        
        








       public function editSingleDATA($dataPost){
  
            $data = $dataPost['dataval'];
            $colonne = $dataPost['colonne'];
            $idrow = $dataPost['idrow'];
       
           
            
            $creationDate = date('d/m/Y');
            $execute = array($data,intval($idrow));
       
            
       
            $modif = "UPDATE user SET $colonne = ? WHERE id_user = ?";
            $luMsg = $this->theconnect->prepare($modif);
            $luMsg->execute($execute);
        
            if($colonne=='picture_link'){
       
                 isPictureExternal(1,$connexion,$idrow);
       
            }
            
            //$invit -> execute(array($nom,$postnom,$phone,$mail,$boulo,$aboutme,$citylocation,$age,"123456",$creationDate));
            echo "Donnée mis ajour";
       
         
          
       }











       public function updaterAbility($dataPost,$isValid_abilitation=0){

        $id_userAb = $dataPost['idrow'];
        $id_Abilitation = $dataPost['dataval'];
        $id_colonne = $dataPost['colonne'];
        $creationDate = time();
        
   
        $modif = "UPDATE ability_access SET isValid_abilitation = ?, dataabilititation = ? WHERE id_userAb = ? AND id_Abilitation = ?";
        $luMsg = $this->theconnect->prepare($modif);
        $luMsg->execute(array($isValid_abilitation,$creationDate,$id_userAb,$id_Abilitation));
        echo 'suceeeeeeeeeed';
   
   
   }







   public function getAbilityAccess($dataPost){

    $id_userAb = $dataPost['idrow'];
    $id_Abilitation = $dataPost['dataval'];
    $isValid_abilitation = 1;


    $dataFrom = $this->theconnect->prepare('SELECT id_ab FROM  ability_access WHERE 	id_userAb = ? AND id_abilitation = ?');
    $dataFrom->execute(array($id_userAb,$id_Abilitation));
    $userCount = $dataFrom->rowCount();
    return $userCount;


}








public function thenewAbilitation($dataPost){
 
       
    $id_userAb = $dataPost['idrow'];
    $id_Abilitation = $dataPost['dataval'];
    $isValid_abilitation = 1;
    
    $creationDate = time();
    
    $reqER = $this->theconnect->prepare('INSERT INTO  ability_access(id_userAb,id_Abilitation,isValid_abilitation,dataabilititation) VALUES(?,?,?,?)');
    $reqER->execute(array($id_userAb,$id_Abilitation,$isValid_abilitation,$creationDate));


     // $req = "UPDATE  user SET username = ? WHERE id = ?";
    //$thereq = $connexion->prepare($req);
   // $thereq->execute(array($mail,5));
    echo "success - donnee inseré avec success";

 
  
}







public function setThisUser($dataPost){
 
    $FullName = $dataPost['nomcomplet'];  
    $username = $dataPost['telephone'];
    $user_password = password_hash("12345", PASSWORD_DEFAULT); 
    
    
    $registeredon = time();
    
    $reqER = $this->theconnect->prepare('INSERT INTO  user(username,user_password,FullName,registeredon) VALUES(?,?,?,?)');
    $reqER->execute(array($username,$user_password,$FullName,$registeredon));


     // $req = "UPDATE  user SET username = ? WHERE id = ?";
    //$thereq = $connexion->prepare($req);
   // $thereq->execute(array($mail,5));
    echo "success - donnee inseré avec success";

 
  
}














 
public function isPictureExternaler($isthis,$idrow){

 
    $modif2 = "UPDATE user SET externalePicture = ? WHERE id_user = ?";
    $luMsg2 = $this->theconnect->prepare($modif2);
    $luMsg2->execute(array($isthis,intval($idrow)));



}



public function newSingleDATA_update($dataPost){
 
  
   
    $user = $dataPost['iduser'];
    $table = $dataPost['table'];  
    $dataInsert = $dataPost['dataInsert']; 
    $row = $dataPost['row'];
    $execute = array($dataInsert,$user);
    
     
    $modif = "UPDATE  $table SET $row = ? WHERE id_user = ?";
    $luMsg = $this->theconnect->prepare($modif);
    $luMsg->execute($execute);
    echo 'suceeeeeeeeeed';
  
}





    }