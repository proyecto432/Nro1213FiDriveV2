<?php
$Titulo = " Ejercicio entregable 2";
include_once("../estructura/cabecera.php");
?>
<?php
include_once("../estructura/menu.php");
?>

<!-- Required meta tags -->

<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap/4.5.2/bootstrap.min.css" >
 <link rel="stylesheet" href="../bootstrap/4.5.2/check.js" >
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head> 

<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>




<link rel="stylesheet" href="../bootstrap/4.5.2/check.js" >






<div id="contenido" style="height: 100%; width: 84%; border: 1px solid #808080; border-radius: 2px;margin-left:16%;" >


<form  id="eje2" name="eje2" method="POST" action="accion.php">
<h2>1234.png</h2>

<div class="col-md-6 mb-3">
<p>
Ingrese la cantidad de dias que comparte este archivo:
<input  size="50" name="cantArch" min="1"  placeholder="si no ingresa nada quiere decir que no expira" required>
</p>
</div>


<div class="col-md-6 mb-3">
<p>
Ingresar cantidad de descargar posibles:
<input  name="cantArch"  size="50" placeholder="Si queda vació quiere decir que no hay limites" required>
</p>
</div>

<div class="col-md-6 mb-3">
<p>
Seleccionar desde el combo, el usuario:
<select>
  <option>Admin</option>
  <option>Visitante</option>
  <option>root</option>

  </select>

</p>
</div>



<div class="col-md-6 mb-3">

<p>
Si desea proteger su contraseña marque la casilla
<input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
</div>
</p>



<div class="col-md-6 mb-3" id="content" style="display: none;">
Cargar contraseña:
<input type="password">
 </div>




 <p>
<link rel="stylesheet">enlace a compartir
</p>




<div class="col-md-6 mb-3">
Desea encriptar el contenido:
 <input type="text" value="valor" readonly="readonly">
 <button  type="submit">Generar Hash</button>
 </div>















</form >

</body>
</div>


</div>






<script src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
 <script src="../js/popper/popper.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrap.min.js"></script>
 <script src="../js/bootstrap/4.5.2/bootstrapValidator.min.js"></script>

 <script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/validator.js"></script>
 <script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/check.js"></script>


<?php

include_once("../estructura/pie.php");
?>