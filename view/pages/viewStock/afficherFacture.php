

<?php 


require  'model/bdd.php';
require  'model/BddClass.php';

$bddManager = new BddManager($connexion);

$identifiant = $_GET['idfacture'];

$infosRecu = $bddManager->recupererFactureUnique($identifiant);
 ?>

<div style=" background-color: white; border-radius: 7px;width: 700px;margin-top: 27px;height: 420px; border: 1px solid gray;
box-shadow: 7px 0px 20px rgba(0,0,0,0.3);margin-left: 100px">
<table style="width: 90%;margin-left: 50px;margin-top: 20px">
  <tr>
    <td>
      <img src="view/images/congo.png" style="width: 30px">
    
      
    </td>
     <td style="font-size: 20px;font-family: Forte">
      COMES Sarl
      
    </td>
     <td style="font-size: 20px;font-family: Berlin sans FB">
      Services informatiaque
      
    </td>

     <td style="font-size: 20px;font-family: Berlin sans FB">
     Numero Recu: ........ <?php echo $infosRecu['identifiant']; ?> ...........
      
    </td>
  </tr>
</table>
<hr style="width: 60%;color: black;background-color: black">

<div style="text-align: center;"> <span style="background-color: red;color: white; padding: 7px; border-radius: 17px"> RECU DE PAIEMENT </span> 
</div>


<div style="margin-left: 5px">
  Nom Client :    <b><?php echo $infosRecu['nomClient']; ?>  </b>
</div>

<div style="padding: 5px;padding-top: 20px;">
  
  <table class="table table-bordered">
    <tr class="info">
      <td>
        Nom
      </td>
      <td>
        Quantite produit 
      </td>
      <td>
        Prix unitaire
      </td>
      <td>
        Prix total
      </td>
    </tr>

    <tr>

      <td>
        <?php echo $infosRecu['libelle']; ?> 
      </td>
      <td>
       <?php echo $infosRecu['quantiteproduitfacture']; ?> 
      </td>
      <td>
       <?php echo $infosRecu['prixunitaire']; ?> 
      </td>
      <td>
       <?php echo $infosRecu['prixtotal']; ?>$
      </td>
      
    </tr>




    <tr><td> -</td> <td>-</td><td> -</td> <td> -</td>
    </tr>
    <tr><td> -</td> <td>-</td><td> -</td> <td> -</td>
    </tr>






<tr class="error">
<td colspan="3"> TOTAL </td>
 <td style="font-size: 17px"><?php echo $infosRecu['prixtotal']; ?> $</td>
    

  </tr>
   
  </table>

  <div style="text-align: right;margin-right: 10%">
    Date et Signature: <br>
    <b>
    <?php 
 echo $infosRecu['dateAchat']; 

     ?></b>
  </div>
</div>
  






</div>
<center>
</center>




