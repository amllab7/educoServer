<?php 
class ManageFile {
   
      public $theFiles;
      
      function __construct($file=null){ 
        $this->theFiles = $file;
                                        }



      public function checkPictureExtension($file_name){
         $file_extension = strrchr( $file_name, "." );
         $extension_autorise = array('.PNG', '.png',
                                     '.jpg', '.JPG', 
                                     '.JPEG', '.jpeg');
         if(in_array($file_extension, $extension_autorise)){ 
          return array('type' => $file_extension,'statut' =>true);}
         else{ return array('type' => $file_extension,'statut' =>false); }



                                    }









public function createTheImage($file_temp_name,$srce){

list($width_min,$height_min)=getimagesize($file_temp_name);
                  $newwidth_min = 500;
                  $newwidth_minMicro = 100;



                  $newheight_min=($height_min/$width_min)*$newwidth_min;
                  $tmp_min = imagecreatetruecolor($newwidth_min,$newheight_min);
                  imagecopyresampled($tmp_min, $srce, 0, 0, 0, 0, $newwidth_min, $newheight_min, $width_min, $height_min);



                  $newheight_minmIcro = ($height_min/$width_min)*$newwidth_minMicro;
             $tmp_minMicro = 
             imagecreatetruecolor($newwidth_minMicro,$newheight_minmIcro);
             imagecopyresampled($tmp_minMicro, $srce, 0, 0, 0, 0, 
              $newwidth_minMicro, $newheight_minmIcro, $width_min, $height_min);


                  return array('tmp' =>$tmp_min,'tmpcro' =>$tmp_minMicro);
                                    }
















public function securitydata($mazing){


                 $mazing = stripslashes($mazing);
                 $mazing = strip_tags($mazing);
                 $mazing = trim($mazing);
                 return $mazing;
                                      }


      































      public function saveme($data){
                 
                    
       $insertmbr = $this->currentBDD->prepare("INSERT INTO 
       andiko(call1,call2,gm,namba,unknow,registereddate,birthday,language)
       VALUES(?,?,?,?,?,?,?,?)");
       $insertmbr->execute($data);
       echo"Register success";

                                    }








     public function updatePofile($db,$fn,$ln,$loc,$about,$mymail,$sessionId){
           

       $modif = "UPDATE andiko SET 
                 call1 = ?,call2 = ?,local= ?,biog= ?,gm= ? 
                 WHERE uniq = ?";
       $theModif = $db->prepare($modif);
       $theModif->execute(array($fn,$ln,$loc,$about,$mymail,$sessionId));
}




























} ?>