<?php


require_once 'model/MainModel.php';
class profileModel extends MainModel{

    public $theconnect;



    function __construct(){
        $this->theconnect = $this->connectBDD();

        }

 
 
      public  function getInfosUSER($iduser){
            $dataFrom = $this->theconnect->prepare('SELECT * FROM  user WHERE id_user = ?');
            $dataFrom->execute(array($iduser));
            $dataFromGETTER = $dataFrom->fetchAll();
            return $dataFromGETTER;
       
       }





       public function thenewAbilitation($dataPost){
 
       
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



       public function getAllabilitations(){
        $dataFrom = $this->theconnect->prepare('SELECT * FROM  abilitations');
        $dataFrom->execute();
        $dataFromGETTER = $dataFrom->fetchAll();
   return $dataFromGETTER;
   
   }










   public function getmyAbilitaty($iduser){
    $dataFrom = $this->theconnect->prepare('SELECT id_Abilitation FROM  ability_access WHERE 	id_userAb = ? AND isValid_abilitation = ?');
    $dataFrom->execute(array($iduser,1));
    $dataFromGETTER = $dataFrom->fetchAll();
return $dataFromGETTER;

}















    }