<?php
$Titulo = " Ejercicio entregable 2";
include_once("../estructura/cabecera.php");
?>
<?php
include_once("../estructura/menu.php");
?>

<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap/4.5.2/bootstrap.min.css" >
 <link rel="stylesheet" href="../bootstrap/4.5.2/check.js" >

</head> 


<div id="contenido" style="height:100%; width: 84%; border: 1px solid #808080; border-radius: 2px;margin-left:16%;" >

<!---->
<form  id="elim1" name="elim1" method="POST" >

<h2>1234.png</h2>


<div class="col-md-6 mb-3">
<p>Cantidad de veses compartido</p>
</div>

<div class="col-md-6 mb-3">
<p>Razon para no compartirlo<br>

<textarea name="teli" id="teli" rows="2" cols="100" placeholder="Escriba el motivo" required></textarea></p>

<p></div>

<div class="col-md-6 mb-3">
Seleccionar del combo, el usuario:
<select>
  <option>Admin</option>
  <option>Visitante</option>
  <option>root</option>

  </select>

</p></div>




</form >


</div>




<script src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
 <script src="../js/popper/popper.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrap.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrapValidator.min.js"></script>

 <script type="text/javascript" src="../../visual/js/bootstrap/4.5.2/validator.js"></script>
<?php

include_once("../estructura/pie.php");
?>