<?php
  
	 session_start();
     require "controller/Requete.php";
	 $appReq = new Requetes(); 
     $appReq->getRequest();
     $appReq->execute_Controller();     
	  