<?php
$Titulo = " Ejercicio entregable 2";
include_once("../estructura/cabeceraV2.php");
?>



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







<?php

include_once("../estructura/pieV2.php");
?>