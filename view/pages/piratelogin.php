<?php 



if (isset($_SESSION['infosuser'])) {
  $allInfos = $_SESSION['infosuser'];


  $titre = "Home page";
  $description = $allInfos['nom']." - Bienvenue dans GESTOCK votre logiciel de gestion de stock";

}


else{

  $titre = "Home page";
  $description ="Bienvenue dans GESTOCK votre logiciel de gestion de stock";

}







function designSpecifiaue($value='')
{ ?>



<div id="fenenetre" style="background-image: url('view/images/avengers-wallpaper-28.jpg');background-size: cover;min-height:600px;padding-top: 200px " >


 
<div id="realView" style="height: 50px;width: 193px;margin-top: 3px;
background-color: black;position: absolute;
border: 3PX solid gray; border-radius: 7px;font-weight: bold;box-shadow: 0px 0px 10px white; color: white;font-size: 27px;border: 2px solid silver; text-align: center;padding-top: 33px;
right: 200px">


  
</div>



 <center> <h1 style="margin-top: 100px">Tapez votre code</h1>

<br>





 </center>


<div style="height: 200px;width: 200px;
background-color: black;position: absolute;
border: 3PX solid gray; border-radius: 7px;
right: 194px">

<table style="width: 100%">
  <tr id="codeOne" style="height: 66px;">
    <td>
      
    </td>
  </tr>
<tr id="codetwo" style="height: 66px">
    <td>
      
    </td>
  </tr>
<tr id="codethree" style="height: 66px">
    <td>
      
    </td>
  </tr>

  
</table>
  
</div>
   
</div>


  <?php

}


 ?>

