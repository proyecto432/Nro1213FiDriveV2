<?php
$Titulo = " Ejercicio entregable 2";
include_once("estructura/cabecera.php");
?>
<?php
include_once("estructura/menu.php");
?>

<link rel="stylesheet" href="/bootstrap/4.5.2/check.js" >



<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >


<form  id="eje4" name="eje4" method="GET" action="accion.php">
1234.png

<p>Descripcion
Archivo para alta de archivos
</p>




Usuario que lo carga:
<select>
  <option>Admin</option>
  <option>Visitante</option>
  <option>root</option>

  </select>



Elija el icono que va a utilizar:
  

<input type="checkbox" id="op1" value="Imagen"> Imagen

<input type="checkbox" id="op2" value="Zip"> Zip

<input type="checkbox" id="op3" value="Doc"> Doc

<input type="checkbox" id="op3" value="PDF "> PDF 

<input type="checkbox" id="op3" value="XLS"> XLS



Clave del archivo:

<input type="password">


</div>







<?php
include_once("estructura/pie.php");
?>