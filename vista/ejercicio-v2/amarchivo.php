<?php
$Titulo = " Ejercicio entregable 2";
include_once("../estructura/cabecera.php");
?>







<form  id="eje4" name="eje4" method="POST" action="accion.php"  data-toggle="validator">
<h2>1234.png</h2>



<div class="col-md-6 mb-3">
<p>Descripcion<br>
Archivo para operaciones varias
</p>
</div>


<div class="col-md-6 mb-3">
Usuario que lo carga:
<select>
  <option>Admin</option>
  <option>Visitante</option>
  <option>root</option>

  </select>
  </div><br><br>



  
  <div class="col-md-6 mb-3">
Elija el icono que va a utilizar:
  

<input type="checkbox" id="op1" name="op1" value="Imagen" onclick="uncheck()"> Imagen

<input type="checkbox" id="op2" name="op2" value="Zip" onclick="uncheck()"> Zip

<input type="checkbox" id="op3" name="op3" value="Doc" onclick="uncheck()"> Doc

<input type="checkbox" id="op4" name="op4"  value="PDF " onclick="uncheck()"> PDF 

<input type="checkbox" id="op5" name="op5" value="XLS" onclick="uncheck()"> XLS
</div>
<br><br>
<div class="col-md-12">
Clave del archivo:

<input type="password">
</div>

</div>




</form>


<?php
include_once("../estructura/pie.php");
?>