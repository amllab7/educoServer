<?php






 function uplodPICTURE($directoryUplad,$name,$dataID) {
 
    


   $dat = date("yhi");
   $nomAleatoire = sha1($dataID.'fallax');
   $nomFichier = ($nomAleatoire.'.jpg'); 
   
   $file_temp_name = $_FILES [$name]['tmp_name'];
   $file_name = $_FILES [$name]['name'];
   $imageManager = new ManageFile();
   $checkExtension = $imageManager->checkPictureExtension($file_name);
   if($checkExtension['statut']===true){
        if($checkExtension['type']=='.jpg' OR 
          $checkExtension['type']=='.jpeg' OR
          $checkExtension['type']=='.JPEG' OR 
           $checkExtension['type']=='.JPG'){


                                            $srce = imagecreatefromjpeg($file_temp_name);
          
                                           }
        else{ $srce = imagecreatefrompng($file_temp_name); }
    


if($srce!=null){ 



                             
$imageReel = $imageManager->createTheImage($file_temp_name,$srce);
$tmp_min = $imageReel['tmp'];
$tmp_minMicro = $imageReel['tmpcro'];



$pass = true;
if($pass){

 //move_uploaded_file($file_temp_name,$file_dest);
imagejpeg($tmp_min,$directoryUplad."mini/fallax_".$nomFichier,50);
imagejpeg($tmp_minMicro,$directoryUplad."micro/fallax_".$nomFichier,50);


return array('statut' => true, 'picture_name' => "fallax_".$nomFichier);
//$updd =  $upd->updatePofilePicture($db,'avatar/nazapps_'.$nom,$sesID);

}}}





}

         
        