<?php


$titre = "Infos ce stock";
$description ="Bienvenue dans le informations du stock";













function designSpecifiaue($value='')
{ 


  ?>




    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar" >
        <ul  class="nav nav-list bs-docs-sidenav" style="margin-left: 30px">
          <li><a href="?fonctionality=stock&action=list"><i class="icon-chevron-right"></i> Afficher produit</a></li>
          <?php 
           $myinfos = $_SESSION['infosuser'];


          if ($myinfos['adminAbility']!=0) {
             

            ?>
  <li><a href="?fonctionality=stock&action=enregStock"><i class="icon-chevron-right"></i>Ajouter produit</a></li> <?php } ?>
          <li><a href="?fonctionality=stock&action=facture"><i class="icon-chevron-right"></i> Afficher Factures</a></li>
          <li><a href="#tables"><i class="icon-chevron-right"></i> Gestion Entree</a></li>
          <li><a href="#forms"><i class="icon-chevron-right"></i> Gestion sortie</a></li>
        </ul>
      </div>
      <div class="span9">
           <div style="min-height: 600px">
                 <?php 
                      if (isset($_GET['action']) AND file_exists("view/pages/viewStock/".$_GET['action'].'.php')) {
                              require "view/pages/viewStock/".$_GET['action'].'.php';

                            }

                       else{ require "view/pages/viewStock/list.php"; }
                 ?>


</div>
        
         </div> 
      </div>






  <?php

}


 ?>
















