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

<!---->


<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:15.5%;" >

<form  id="elim" name="elim" method="POST" >


    1234.png




<p>Razon para de eliminación

<textarea name="teli" id="teli" rows="2" cols="100" placeholder="Escriba el motivo" required></textarea>
</p>

<p>
Seleccionar desde un Combo, los usuario:
<select>
  <option>Admin</option>
  <option>Visitante</option>
  <option>root</option>

  </select>

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