<?php
$Titulo = " Ejercicio entregable 2";
include_once("../estructura/cabecera.php");
?>

<form  id="elim" name="elim" method="POST" >


<h2>1234.png</h2>



    <div class="col-md-6 mb-3">
<p>Razon para de eliminación<br>

<textarea name="teli" id="teli" rows="2" cols="100" placeholder="Escriba el motivo" required></textarea>
</p>
</div>


<div class="col-md-6 mb-3">
<p>
Seleccionar del combo, el usuario:
<select>
  <option>Admin</option>
  <option>Visitante</option>
  <option>root</option>

  </select>

</p>
</div>



</form >


</div>


</body>

<?php

include_once("../estructura/pie.php");
?>