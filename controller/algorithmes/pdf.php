<?php






 function uplodPdf($directoryUplad,$name,$dataID) {
 
  
  $file_temp_name = $_FILES [$name]['tmp_name'];
  $file_name = $_FILES [$name]['name'];

  $gereateName = sha1($dataID.'fallax');
  
  $file_extension = strrchr($file_name, "." );
  $finalFileNAME = $gereateName.''.$file_extension;
  $file_dest = $directoryUplad.'fallax_'.$gereateName."".$file_extension;
   move_uploaded_file($file_temp_name,$file_dest);
   return array('statut' => true, 'data_name' => "fallax_".$finalFileNAME);

   



}

         
        