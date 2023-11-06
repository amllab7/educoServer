<?php 

$titre = "LOGIN";
$description ="Connectez vous pour acceder";






function designSpecifiaue($value='')
{ ?>



<div style="background-image: url('view/images/loginBG.JPG'); 
background-size: cover;min-height:700px; " >

<div style="background-color: black;height: 100%;min-height:700px;width: 100%;padding-top: 200px;opacity: 0.9;">
  <center>

 <div style="background-color: white;width: 700px;border-radius: 20px;height: 400px">  




  <h1 style="margin-top: 100px;color: silver;font-size: 25px;margin-top: 30px">REGISTER</h1>

<br>




<form action="model/traitement.php" method="POST">






<table>
  <tr>
    <td style="">
     <input name="username"  type="text" placeholder="Votre nom">
      
    </td>
      </tr>

        <tr>
    <td style="">
     <input name="adress"  type="text" placeholder="votre adresse">
      
    </td>
      </tr>
        <tr>
    <td >
      <input name="phone" type="text" placeholder="Numero de telephone">
      
    </td>
      </tr>
      <tr>
    <td >
      <input name="pass" type="text" placeholder="Mot de pass">
      
    </td>
      </tr>

      <tr>
    <td >
      <input name="passconfiirm" type="text" placeholder="Confirmez Mot de pass">
      
    </td>
      </tr>


      <tr>
    <td >
      <input name="functionExec" value="registerUser"  type="hidden" placeholder="Confirmez Mot de pass">
      
    </td>
      </tr>
      
        <tr>
    <td>
      <center> <button class="btn btn-large btn-primary" type="submit">SUBMIT</button></center>
      
    </td>


  </tr>
</table>

</form>


<a href="?fonctionality=login">
LOGIN </a>
 </div>
  </center>
</div>
   
</div>


  <?php

}


 ?>

