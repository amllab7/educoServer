<?php





class MainModel{


    protected static $bddConnected = null;
    protected static $configuration;
    protected $directory = 'configs/';
    public $defaultFileConfigs = 'configV1.php';
    public $connexion;

    public $mainAccess;
    function __construct(){ 
        
        $this->mainAccess = "Andre mazi";
     }


        
 	function connectBDD(){
        
         $configs = require 'configs/configV1.php';
          
          return $this->bddInitiate($configs['db_Public']);;
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