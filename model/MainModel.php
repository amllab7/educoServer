<?php





class MainModel{


    protected static $bddConnected = null;
    protected static $configuration;
    protected $directory = 'configs/';
    public $defaultFileConfigs = 'configV1.php';
    public $connexion;
    public $abilitationsConfigs;

    public $mainAccess;
    function __construct(){ 
        
        $this->mainAccess = "Andre mazi";
     }


        
 	function connectBDD(){
        
         $configs = require 'configs/configV1.php';
          
          return $this->bddInitiate($configs['db_Public']);
             }
     

         




             public function abilitationsAlgo($class) {
            
                
           
              $abiliationsRequire = require 'configs/configV1.php';
              
              if (isset($abiliationsRequire['abilitationsConfigs'][$class])) {
                
                return $abiliationsRequire['abilitationsConfigs'][$class];
              } else{  return false; }
 
 
            }


          







             

            public function checkaBILITATIONS($id_userAb,$id_Abilitation) {
            
                 


 
              $isValid_abilitation = 1;
          
          
              $dataFrom = $this->theconnect->prepare('SELECT id_ab FROM  ability_access WHERE 	id_userAb = ? AND id_abilitation = ? AND isValid_abilitation = ?');
              $dataFrom->execute(array($id_userAb,$id_Abilitation,$isValid_abilitation));
              $userCount = $dataFrom->rowCount();
              return $userCount;





              
          
            }













             public function get_statistique() {
            
                
                require_once 'controller/algorithmes/StatistiqueV1.php';
                return $statistique = new Statistique();
                
            
              }

 








             public function  bddInitiate($data){
                try{ 
                    $bDDconects = new PDO('mysql:host='.$data['db_host'].'; dbname='.$data['db_name'].'',$data['db_User'],$data['db_Pass']);
                    $bDDconects->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); } 
                   catch(PDOexception $probleme){   
                          die('probleme de connexion a la base dedonnee: ' .$probleme->getMessage());
                                /// header('location: https://www.google.com');
                                  }
                                 return $bDDconects;
            }    
        






















  


    }