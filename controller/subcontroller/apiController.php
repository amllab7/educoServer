<?php 

//require_once 'controller/mainController.php';
require_once 'view/admin/DefaultDesign.php';

/**
* 
*/
class apiController{

 
	function __construct($page,$menusTble,$allData){  
                          
    $this->runThisPAGE();

   }

 

  public function runThisPAGE(){


    require_once 'model/apiModel.php';
    $apiBdd = new apiModel(); //instance de la classe du contorller encours
     //require_once 'model/fetch/apiModel.php';
    $postDATA = array_merge($_GET,$_POST) ;

     
    $function = $postDATA['type'];
    $this->$function($apiBdd);


   
        
        }
    
    
    

 



 
 

 





public function rechercherbook($instanceModel){

$postDATA = array_merge($_GET,$_POST) ;  
$getResult =  $instanceModel->execRechercheBooks($postDATA);


//echo  $getResult["count"];
$filterSearch = array();
foreach ($getResult["data"] as $key => $value) {

  //$categoryType = $instanceModel->getSingleCategory($id) 
  $filterDataLOCAL = array($value["id_book"],$value["titre_book"],
  $value["resume_book"],$value["coverpicture_book"],$value["link_book"],$value["ispdf_book"],$value["viewers_book"]); 		
  array_push($filterSearch,$filterDataLOCAL);
  
  }
  

  $resulteris = array($getResult["count"],$filterSearch);
  echo json_encode($resulteris);
  
  
 


}






public function recherchervideo($instanceModel){

$postDATA = array_merge($_GET,$_POST) ;  
$getResult =   $instanceModel->execRechercheVIDEOS($postDATA);
$filterSearch = array();

foreach ($getResult["data"] as $key => $value) {
$filterDataLOCAL = array($value["id_vid"],$value["titre_vid"],
$value["description_vid"],$value["hostid_vid"]);
array_push($filterSearch,$filterDataLOCAL);

}

$resulteris = array($getResult["count"],$filterSearch);
  echo json_encode($resulteris);
  


}















public function recherchercategorie($instanceModel){

  $postDATA = array_merge($_GET,$_POST) ;  
  $getResult =   $instanceModel->execrecherchercategorie($postDATA);
  $filterSearch = array();
  
  foreach ($getResult["data"] as $key => $value) {
  $filterDataLOCAL = array($value["id_cat"],$value["nom_cat"],"Voir plus",$value["cover_cat"]);
  array_push($filterSearch,$filterDataLOCAL);
  
  }
  
  $resulteris = array($getResult["count"],$filterSearch);
    echo json_encode($resulteris);
    
  
  
  }
















public function getAllData($instanceModel){


  $postDATA = array_merge($_GET,$_POST) ;

  $type = $postDATA["type"];
  $valueGetter = $postDATA["value"];
  $token = $postDATA["token"]; // pour servir de verifier les token


 

$getAllBooks = $instanceModel->getAllBooks();
$getAllVideos = $instanceModel->getAllVideos();

$getLiveVideo =  $instanceModel->getLiveVideo()["data"][0];
$getAllCategories =  $instanceModel->getAllCategories();
$getAllDiscovery =  $instanceModel->getAllDiscovery();

$getAllDatatMessage =  $instanceModel->getAllDatatMessage();

$filteredAllDatatMessage = array();
//$dataAllVideos,$dataAllBooks,$dataLive,$dataAboutApp,
//$dataConfidential,$dataNumberWhatsapp,$dataAboutNEWPOST,$dataDiscover,$dataCategories


foreach ($getAllDatatMessage["data"] as $key => $value) {
   
  array_push($filteredAllDatatMessage,$value["descriptions"]);
}


///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




$filterDataBooks = array();

  foreach ($getAllBooks["data"] as $key => $value) {
            // $filterDataLOCAL = array("id"=>$value["id_book"], "nom"=>$value["titre_book"],"resume_book"=>$value["resume_book"],"imageCover"=>$value["coverpicture_book"]);
            $filterDataLOCAL = array($value["id_book"],$value["titre_book"],
            $value["resume_book"],$value["coverpicture_book"],$value["link_book"]);  
            array_push($filterDataBooks,$filterDataLOCAL);
  }




  $filterDataVideos = array();
  foreach ($getAllVideos["data"] as $key => $value) {

     // $filterDataLOCAL = array("id"=>$value["id_book"], "nom"=>$value["titre_book"],"resume_book"=>$value["resume_book"],"imageCover"=>$value["coverpicture_book"]);

     $filterDataLOCAL = array($value["id_vid"],$value["titre_vid"],
     $value["description_vid"],$value["hostid_vid"]);
     
     array_push($filterDataVideos,$filterDataLOCAL);


   }



 

   
  $filterDataCategorie = array();

  foreach ($getAllCategories["data"] as $key => $value) {
 
     $filterDataLOCAL = array($value["id_cat"],$value["nom_cat"],
     $value["cover_cat"]);
     
     array_push($filterDataCategorie,$filterDataLOCAL);


   }





   $getLiveVideoFilter = array($getLiveVideo["id_vid"],$getLiveVideo["titre_vid"],
   $getLiveVideo["description_vid"],$getLiveVideo["hostid_vid"]);












   $randomAI = array(
    "Pour le moment je suis incapable de repondre precisement à vos questions; mon intelligence est encore limité.
    mais bientot quand on finira de me développer, je serai à votre service. 
    si vous voulez je peux vous trouvez des réponses sur google",
    "Je ne peux repondre actuellement à des questions, je vous propose des résultat de google",

    "je vous prie de m'excuser de ne pas repondre à votre question actuellement",
    "Quand le moment sera venu je repondrait à votre question",
    "André je suis vraiment désolé",
    "je suis un cours de fabrication ",
    "ne vous fachez pas soyez comprehensif ",
    "je suis encore limité actuellement",
    "je n'ai pas une reponse exacte mon ami",
    "Tapez l'icone google pour avoir une réponse exacte",
    "contacter mon informaticien pour cette question"


   );





   $keyGpt = "";






   $dataMessage = array("Infos de l'application","Infos de l application 2","Bientot nous comptons Integrer 
   l'intelligence Artificiele avec laquelle vous pouvez echager; poser des questions et obtenir des réponses 
   à vos questions comme un hummain. nous comptons sur la contribution de chacun pour finir le devellopement 
   de cette technologie");


   $allData = array($filterDataBooks,$filterDataVideos,$getLiveVideoFilter,$filterDataCategorie,$filteredAllDatatMessage,$randomAI,$filterDataBooks);
  echo  json_encode($allData); 


}










 

 
    
    
        




}
