<?php
$Titulo = " Ejercicio entregable 2";
include_once("../estructura/cabecera.php");
?>
<?php
include_once("../estructura/menu.php");
?>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap/4.5.2/bootstrap.min.css" >
 <link rel="stylesheet" href="../bootstrap/4.5.2/check.js" >

</head> 




<div id="contenido" style="height: 400px; width: 84%; border: 1px solid #808080; border-radius: 2px;margin-left:16%;" >

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


<script src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
 <script src="../js/popper/popper.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrap.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrapValidator.min.js"></script>

 <script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/validator.js"></script>
 <script type="text/javascript" src="../js/bootstrap/4.5.2/check.js"></script>

<?php
include_once("../estructura/pie.php");
?>