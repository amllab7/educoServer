

<center>
<div style=" background-color: white; border-radius: 7px;width: 500px;margin-top: 27px;border: 1px solid gray;
box-shadow: 7px 0px 20px rgba(0,0,0,0.3) ">

  <p> ICI vous creez le type de produit </p>

<form action="model/traitement.php" method="POST">
<table>
  <tr>
    <td style="">
     <input name="productname"  type="text" placeholder="Nom produit">
      
    </td>
      </tr>

        <tr>
    <td style="">
     <input name="productprice"  type="number" placeholder="Prix produit">
      
    </td>
      </tr>
        
      <tr>
    <td >
      <input name="functionExec" value="registerProduit"  type="hidden">
      
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




