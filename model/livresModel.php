<?php


require_once 'model/mainModel.php';
class livresModel extends MainModel{

    public $theconnect;



    function __construct(){
        $this->theconnect = $this->connectBDD();

        }



        public function getAlllivres(){
            $dataFrom = $this->theconnect->prepare('SELECT * FROM  books');
            $dataFrom->execute();
            $dataFromGETTER = $dataFrom->fetchAll();
        return $dataFromGETTER;
        
        }
        
        



       
        public function updateLivreBDD($dataPost){
            
            $data = $dataPost['dataval'];
            $colonne = $dataPost['colonne'];
            $idrow = $dataPost['idrow'];
            $creationDate = time();
            $execute = array($data,$creationDate,intval($idrow));
      
                  $requete = "UPDATE books SET $colonne = ?, datecreated_book = ? WHERE id_book = ?";
                  $luMsg = $this->theconnect->prepare($requete);
                  $luMsg->execute($execute);
                  return true;
        
        }
        
        





        public function addbookBdd($dataPost){
 
      
            $nomcomplet = $dataPost['titrevideo'];
            $link_book = $dataPost['link_book'];
            $description_book = $dataPost['desc'];
            $hostid_vid = 0000;
            $hostername_Book = 'Educo';
            $creationDate = date('d/m/y');
       
        
          
             $reqER = $this->theconnect->prepare('INSERT INTO 
              books (titre_book,resume_book,coverpicture_book,link_book,sponsor_book,datecreated_book) VALUES(?,?,?,?,?,?)');
            $reqER->execute(array($nomcomplet,$description_book,$link_book,"",$hostername_Book,time()));
           return true;
       
         
          
       }






 

    }