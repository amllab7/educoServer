<?php


require_once 'model/MainModel.php';
class loginModel extends MainModel{

    public $theconnect, $table, $username;



    function __construct($table,$username){
        $this->table = $table;
        $this->username = $username;

        $this->theconnect = $this->connectBDD();

        }

 

        public function loginInfos($mail){


            
            $dataFrom = $this->theconnect->prepare('SELECT * FROM  '.$this->table.' WHERE '.$this->username.' = ?');
            $dataFrom->execute(array($mail));
            $dataFromGETTER = $dataFrom->fetchAll(PDO::FETCH_ASSOC);
            $userCount = $dataFrom->rowCount();
        
            return array('count'=> $userCount,'data'=> $dataFromGETTER);
       
        
       
       }




       public function lastConnect(){
                     // set the last connexion
    
   
   }






 




    }