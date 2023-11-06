<?php 
/**
 * Renvoie un objet de connexion à la BDD en initialisant la connexion au besoin
* 
* @return second =  PDO Objet PDO de connexion à la BDD
*/
/**
* 
*/ 
class TheAMLModel{
    protected static $bddConnected = null;
    protected static $configuration;
    protected $directory = 'configs/';
    public $defaultFileConfigs = 'configV1.php';

    function __construct(){  }





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


/*
cette methode a besoin d'un tableau avec des index predefinie contenu les configuration de la bdd
pour creer des index referez aux fichier de configuration AML BDD
*/
    




  public function get_statistique($index) {
            
    require_once 'controller/algorithmes/StatistiqueV1.php';
    $statistique = new Statistique();
    return $statistique;

  }










public function getBdd($index) {
        if (self::$bddConnected === null){
            self::$bddConnected = $this->AMLbddInitiate($this->configuration[$index]); }
            return self::$bddConnected; }


 




     




}

