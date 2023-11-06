
<?php 


require  'model/bdd.php';
require  'model/BddClass.php';

$bddManager = new BddManager($connexion);
$listeDetoutLesProduits = $bddManager->recupererProduit();
$myinfos = $_SESSION['infosuser'];



 ?>


<table class="table table-striped">
  
  <thead>
    <tr class="">
      <th>ID</th>

      <th>Nom du produit</th>
      <th>QUANITE </th>
      <th>PRIX </th>
      <th>DATE AJOUT </th>
      
      <th>Action</th>
     
    </tr>
  </thead>
  <tbody>



    <?php 


foreach ($listeDetoutLesProduits['liste'] as $key => $value) {
 ?>

<?php $statut = ($value['quantiteproduit']>=1) ? "success" : "error" ;     ?>

 
<tr class="<?php echo $statut; ?>">
      <td> <?php echo $value['idproduit']  ?> </td>
      <td> <?php echo  $value['nomproduit']  ?> </td>
      <td> <?php echo  $value['quantiteproduit']  ?></td>
      <td> <?php echo  $value['prixproduitunitaire']  ?>$</td>
      <td> <?php echo  $value['datemodif']  ?> </td>
       <td>

       <div class="btn-group">
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  

                  <li><a href="?fonctionality=stock&action=acheterProduit&idproduit=<?php echo  $value['idproduit']  ?>">Acheter</a></li>

                   <li class="divider"></li>




                  <?php if ($myinfos['adminAbility']!=0) {
                   
                    ?>


                  <li><a href="?fonctionality=stock&action=ajouterQuantite&idproduit=<?php echo  $value['idproduit']  ?> ">Nouveau</a></li>


                  

                 <li><a href="?fonctionality=stock&action=modifier&idproduit=<?php echo  $value['idproduit']  ?>">Modifier</a></li>
                 
                  <li class="divider"></li>
                  <li><a href="model/traitement.php?functionExec=deleteProduit&idproduit=<?php echo  $value['idproduit']  ?>">Supprimer</a></li>


                  

                  <?php } ?>
                </ul>
              </div><!-- /btn-group -->


 </td>
      
    </tr>

 <?php
}









 ?>

  </tbody>
</table>


 
<!-- Modal -->
<div id="pacifique" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Ajouter produit</h3>
  </div>
  <div class="modal-body">
    <p>



<center>
<form action="model/traitement.php" method="POST">






<table>
  <tr>
    <td style="">
     <input name="quantite"  type="number" placeholder="Quantité à ajouter">
      
    </td>


    </tr>

    <td>
      <center> <button class="btn btn-large btn-primary" type="submit">SUBMIT</button></center>
      
    </td>

    <tr>
    <td >
      <input name="functionExec" value="quaniteAjout"  type="hidden" placeholder="Confirmez Mot de pass">
      
    </td>
    </tr>







  </tr>
</table>

</form>

</center>


    </p>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    
  </div>
</div>


