<?php 
class Statistique {
   
      public $data;
      
      function __construct(){  }
  
       public function showstat(){
                    echo 'voici les donnee statiq';
                  
                }




        public function homeStat($connexion){
                  $colonne = "id_user";
                  $table = "user";
                  $where = array('is_active',1);
                   $countedAll = $this::countAll($connexion,$colonne,$table);
                   $countedAll_active = $this::countWHERE($connexion,$colonne,$table,$where);
                   $desactive = $countedAll-$countedAll_active;
                   $lastEntry = $this::get_lastEntry($connexion,$colonne,$table,"registeredon");

                  
                  return array("countedAll"=>$countedAll,"countedAll_active"=>$countedAll_active,"desactive"=>$desactive,"lastEntry"=>$lastEntry);

                  
              }

              





              public function videosStat($connexion){
                $colonne = "id_vid";
                $table = "videos";
                $where = array('isactive_vid',1);
                 $countedAll = $this::countAll($connexion,$colonne,$table);
                 $countedAll_active = $this::countWHERE($connexion,$colonne,$table,$where);
                 $desactive = $countedAll-$countedAll_active;
                 $lastEntry = $this::get_lastEntry($connexion,$colonne,$table,"datecreated_vid");

                
                return array("countedAll"=>$countedAll,"countedAll_active"=>$countedAll_active,"desactive"=>$desactive,"lastEntry"=>$lastEntry);

                
            }

            




             

            public function livresStat($connexion){
              $colonne = "id_book";
              $table = "books";
              $where = array('isactive_book',1);
               $countedAll = $this::countAll($connexion,$colonne,$table);
               $countedAll_active = $this::countWHERE($connexion,$colonne,$table,$where);
               $desactive = $countedAll-$countedAll_active;
               $lastEntry = $this::get_lastEntry($connexion,$colonne,$table,"datecreated_book");

              
              return array("countedAll"=>$countedAll,"countedAll_active"=>$countedAll_active,"desactive"=>$desactive,"lastEntry"=>$lastEntry);

              
          }

          







          public function categoriesStat($connexion){
            $colonne = "id_cat";
            $table = "categories";
            $where = array('isvalid_cat',1);
             $countedAll = $this::countAll($connexion,$colonne,$table);
             $countedAll_active = $this::countWHERE($connexion,$colonne,$table,$where);
             $desactive = $countedAll-$countedAll_active;
             $lastEntry = $this::get_lastEntry($connexion,$colonne,$table,"datecreted_cat");

            
            return array("countedAll"=>$countedAll,"countedAll_active"=>$countedAll_active,"desactive"=>$desactive,"lastEntry"=>$lastEntry);

            
        }




 
















 







              public function countAll($connexion,$colonne,$table){
                
                $dataFrom = $connexion->prepare("SELECT COUNT($colonne) FROM $table ");
                $dataFrom->execute();
                $dataFromGETTER = $dataFrom->fetchAll();
                return $dataFromGETTER[0][0];
              
            }


            public function countWHERE($connexion,$colonne,$table,$where){
                
              $dataFrom = $connexion->prepare("SELECT COUNT($colonne) FROM $table WHERE $where[0] = ?");
              $dataFrom->execute(array($where[1]));
              $dataFromGETTER = $dataFrom->fetchAll();
              return $dataFromGETTER[0][0];
            
          }



          public function get_lastEntry($connexion,$colonne,$table,$key){
                
            $dataFrom = $connexion->prepare("SELECT * FROM $table ORDER BY $colonne DESC LIMIT 1");
                $dataFrom->execute();
                $dataFromGETTER = $dataFrom->fetchAll();
                return $dataFromGETTER[0][$key];
          
        }




} ?>