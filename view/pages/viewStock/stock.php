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
          <?php
          $myinfos = $_SESSION['infosuser'];





var_dump($myinfos);
return false;


          if ($myinfos['adminAbility']!=0) {
                   
                    ?>
          <li><a href="#typography"><i class="icon-chevron-right"></i>Ajouter produit</a></li>
          <?php   }  ?>
          <li><a href="#code"><i class="icon-chevron-right"></i> Afficher produit</a></li>
          <li><a href="#tables"><i class="icon-chevron-right"></i> Gestion Entree</a></li>
          <li><a href="#forms"><i class="icon-chevron-right"></i> Gestion sortie</a></li>
        </ul>
      </div>

      <div class="span9">
<div style="min-height: 600px">
  

<table class="table table-striped">
  
  <thead>
    <tr class="">
      <th>Nom du produit</th>
      <th>Prix du produit</th>
    </tr>
  </thead>
  <tbody>


    <?php for ($i=0; $i < 1000; $i++) { 
      ?>
    <tr class="">
      <td>Telephone Samsung galaxy</td>
      <td> 850$</td>
    </tr>
<?php  
    }  ?>

  </tbody>
</table>





</div>
        
         </div> 
      </div>






  <?php

}


 ?>

