<?php
$Titulo = " Ejercicio entregable 2";
include_once("estructura/cabecera.php");
?>
<?php
include_once("estructura/menu.php");
?>
<head>
<!-- Required meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap/4.5.2/bootstrap.min.css" >
</head> 



<div id="contenido" style="height: 400px; width: 84%; border: 2px solid red; border-radius: 5px;margin-left:16%;" >

<form  id="eje4" name="eje4" method="POST" action="accion.php"  data-toggle="validator">
<h2>1234.png</h2>



<div class="col-md-6 mb-3">
<p>Descripcion<br>
Archivo para alta de archivos
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
  

<input type="checkbox" id="op1" value="Imagen"> Imagen

<input type="checkbox" id="op2" value="Zip"> Zip

<input type="checkbox" id="op3" value="Doc"> Doc

<input type="checkbox" id="op3" value="PDF "> PDF 

<input type="checkbox" id="op3" value="XLS"> XLS
</div>
<br><br>
<div class="col-md-12">
Clave del archivo:

<input type="password">
</div>

</div>




</form>

<script src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
 <script src="../js/popper/popper.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrap.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrapValidator.min.js"></script>

 <script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/validator.js"></script>


<?php
include_once("estructura/pie.php");
?>