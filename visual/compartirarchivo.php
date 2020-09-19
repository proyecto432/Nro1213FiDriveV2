<?php
$Titulo = " Ejercicio entregable 2";
include_once("estructura/cabecera.php");
?>
<?php
include_once("estructura/menu.php");
?>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap/4.5.2/bootstrap.min.css" >
 <link rel="stylesheet" href="/bootstrap/4.5.2/check.js" >

</head> 





<link rel="stylesheet" href="/bootstrap/4.5.2/check.js" >






<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >



<form  id="eje4" name="eje4" method="POST" action="accion.php">
1234.png


<p>
Ingrese la cantidad de dias que comparte este archivo:
<input type="number" name="cantArch" min="1" placeholder="si no ingresa nada quiere decir que no expira" required>
</p>

<p>
Ingresar cantidad de descargar posibles:
<input type="number" name="cantArch" min="1" placeholder="Si queda vació quiere decir que no hay limites" required>
</p>

<p>
Seleccionar desde un Combo, los usuario:
<select>
  <option>Admin</option>
  <option>Visitante</option>
  <option>root</option>

  </select>

</p>

<p>
Si desea proteger su contraseña marque la casilla
<input type="checkbox" id="pro" name="pro">
</p>

<div id="content" style="display: none;">
<p>
Cargar contraseña:
<input type="password">
</p>
</div>



<p>
enlace
</p>


</form >


</div>


</body>






<script src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
 <script src="../js/popper/popper.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrap.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrapValidator.min.js"></script>

 <script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/validator.js"></script>



<?php

include_once("estructura/pie.php");
?>