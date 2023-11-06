<?php 


require  'model/bdd.php';
require  'model/BddClass.php';


$identifiant = $_GET['idproduit'];

$bddManager = new BddManager($connexion);
$infosProduit = $bddManager->recupererProduitUnique($identifiant);


 ?>









<center>
<div style=" background-color: white; border-radius: 7px;width: 500px;margin-top: 27px;border: 1px solid gray;
box-shadow: 7px 0px 20px rgba(0,0,0,0.3) ">

  <p> Combien de pieces vous voulez acheter ? </p>

<form action="model/traitement.php" method="POST">
<table>
  <tr>
     <tr>
    <td style="">
     <input name="nomproduit" value="<?php echo $infosProduit['nomproduit']; ?>" type="text" placeholder="Quantité à ajouter">
      
    </td>


    </tr>





    <tr>
     <tr>
    <td style="">
     <input name="prixproduit" value="<?php echo $infosProduit['prixproduitunitaire']; ?>" type="text" placeholder="Quantité à ajouter">
      
    </td>


    </tr>
     <tr>



    <td >
      <input name="functionExec" value="modifierProduit"  type="hidden">
      
    </td>
      </tr>


       <tr> 
    <td >
      <input name="idproduit" value="<?php echo $identifiant; ?>"  type="hidden">
      
    </td>
      </tr>



      
        <tr>
    <td>
      <center> <button class="btn btn-large btn-primary" type="submit">SUBMIT</button></center>
      
    </td>


  </tr>
</table>

</form>



</div>
</center>




