
<?php 


require  'model/bdd.php';
require  'model/BddClass.php';

$bddManager = new BddManager($connexion);
$listeDetoutLesProduits = $bddManager->recupererFacture();
 ?>


<table class="table table-striped">
  
  <thead>
    <tr class="">
      <th>ID</th>
      <th>Client</th>
      <th>Nom produit </th>
      <th>Quantite </th>
      <th>Prix unitaire </th>
      <th>Prix total</th>
       <th>date achat</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>



    <?php 
$totalMontant = 0;

foreach ($listeDetoutLesProduits['liste'] as $key => $value) {
$totalMontant = $totalMontant+$value['prixtotal'];



 ?>

<?php $statut = ($value['identifiant']>=1) ? "success" : "error" ;     ?>

 
<tr class="<?php echo $statut; ?>">
      <td> <?php echo $value['identifiant']  ?> </td>
      <td> <?php echo  $value['nomClient']  ?></td>
      <td> <?php echo  $value['libelle']  ?></td>
      <td> <?php echo  $value['quantiteproduitfacture']  ?></td>
      <td> <?php echo  $value['prixunitaire']  ?>$ </td>
      <td> <?php echo  $value['prixtotal']  ?>$</td>
      <td> <?php echo  $value['dateAchat']  ?> </td>
      <td> 

        <button id="<?php echo  $value['id'];  ?>"  class="btn btn-primary" type="button">

        <a href="?fonctionality=stock&action=afficherFacture&idfacture=<?php echo $value['identifiant']  ?>" style="color: white;text-decoration: none;" role="button" data-toggle="modal">Affcher facture</a>

       </button> 

       </td>
       
      
    </tr>

 <?php





}












 ?>

<tr class="error">
<td colspan="6"> TOTAL </td>
 <td style="font-size: 17px"><?php echo  $totalMontant  ?>$</td>
 <td>  </td>
      

  </tr>


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


