<?php


require_once 'model/mainModel.php';
class adminerModel extends MainModel{

    public $theconnect;



    function __construct(){
        $this->theconnect = $this->connectBDD();

        }








        public function getInfosUSER($mail,$pass){



            $dataFrom = $this->theconnect->prepare('SELECT * FROM  user WHERE 	username = ? AND user_password = ?');
            $dataFrom->execute(array($mail,$pass));
            $dataFromGETTER = $dataFrom->fetchAll();
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
        
   
        $modif = "UPDATE ability_access SET isValid_abilitation = ? WHERE id_userAb = ? AND id_Abilitation = ?";
        $luMsg = $this->theconnect->prepare($modif);
        $luMsg->execute(array($isValid_abilitation,$id_userAb,$id_Abilitation));
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
    
    $creationDate = date('d/m/y');
    
    $reqER = $this->theconnect->prepare('INSERT INTO  ability_access(id_userAb,id_Abilitation,isValid_abilitation) VALUES(?,?,?)');
    $reqER->execute(array($id_userAb,$id_Abilitation,$isValid_abilitation));


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