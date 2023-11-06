<?php 



if (isset($_SESSION['infosuser'])) {
  $allInfos = $_SESSION['infosuser'];

  
  $titre = "ADMINISTRATION";
  $description = $allInfos['nom']." - Bienvenue dans l admnistration du system ";

}


else{
$titre = "ADMINISTRATION";

$description ="- Bienvenue dans l admnistration du system ";


}





function designSpecifiaue($value='')
{ ?>




    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar" >
        <ul  class="nav nav-list bs-docs-sidenav" style="margin-left: 30px">
          <li><a href="#typography"><i class="icon-chevron-right"></i> Verifier Entree </a></li>
          <li><a href="#typography"><i class="icon-chevron-right"></i> Verfier Sortie</a></li>
          <li><a href="#typography"><i class="icon-chevron-right"></i> Attribuer accee</a></li>

        </ul>
      </div>

      <div class="span9">




<table class="table table-striped">
  
  <thead>
    <tr class="success">
      <th>Nom utilisateur</th>
      <th>Numero utilisateur</th>
    </tr>
  </thead>
  <tbody>


    <?php 





require  'model/bdd.php';
require  'model/BddClass.php';

$bddManager = new BddManager($connexion);
$listesDesUtilisateurs = $bddManager->recupererUtilisateurs();
$myinfos = $_SESSION['infosuser'];


 
foreach ($listesDesUtilisateurs['liste'] as $key => $value) {
 
  $statutAdmin = ($value['adminAbility']>=1) ? "success" : "error" ;     

 ?>
    <tr class="<?php echo $statutAdmin; ?>">
      <td> <?php echo $value['nom']; ?></td>
      <td> <?php echo $value['numero']; ?></td>
       <td> 



 <div class="btn-group">
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
<?php 

$statutAdmin = ($value['adminAbility']==0) ? 1 : 0 ;
$statutText = ($value['adminAbility']==0) ? "Ajouter admin" : "Supprimer admin" ;

 ?>

<li><a href="model/traitement.php?functionExec=manageAdmin&statut=<?php echo $statutAdmin  ?>&iduser=<?php echo  $value['id']  ?>">
  <?php echo $statutText; ?>
</a></li>





                  




                   <li class="divider"></li>




                  
                  <li><a href="model/traitement.php?functionExec=deleteUser&iduser=<?php echo  $value['id'] ?> ">Supprimer</a></li>


                  

                 <li><a href="?fonctionality=stock&action=ajouterAdmin&iduser=<?php echo  $value['id']  ?>">Modifier</a></li>
                 
                  

                 
                </ul>
              </div><!-- /btn-group -->



       </td>
    </tr>
<?php  
    }  ?>

  </tbody>
</table>
        
         </div> 
      </div>






  <?php

}


 ?>

