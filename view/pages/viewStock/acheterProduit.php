
<center>
<div style=" background-color: white; border-radius: 7px;width: 500px;margin-top: 27px;border: 1px solid gray;
box-shadow: 7px 0px 20px rgba(0,0,0,0.3) ">

  <p> Combien de pieces vous voulez acheter ? </p>

<form action="model/traitement.php" method="POST">
<table>
  <tr>
     <tr>
    <td style="">
     <input name="quantite" type="number" placeholder="Quantité à ajouter">
      
    </td>


    </tr>
     <tr>
    <td >
      <input name="functionExec" value="acheterProduit"  type="hidden">
      
    </td>
      </tr>


       <tr> 
    <td >
      <input name="idproduit" value="<?php echo $_GET["idproduit"]; ?>"  type="hidden">
      
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




