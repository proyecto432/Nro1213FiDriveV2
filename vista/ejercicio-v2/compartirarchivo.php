<?php
$Titulo = " Ejercicio entregable 2";
include_once("../estructura/cabecera.php");
?>


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








<form class="form-group row" id="eje2" name="eje2" method="POST" action="accion.php">
<h2>1234.png</h2>

<div class="col-md-12 mb-3">
<p>
Ingrese la cantidad de dias que comparte este archivo:
<input  size="50" name="cantArch" min="1"  placeholder="si no ingresa nada quiere decir que no expira" required>
</p>
</div>


<div class="col-md-12 mb-3">
<p>
Ingresar cantidad de descargar posibles:
<input  name="cantArch"  size="50" placeholder="Si queda vació quiere decir que no hay limites" required>
</p>
</div>

<div class="col-md-12 mb-3">
<p>
Seleccionar desde el combo, el usuario:
<select>
  <option>Admin</option>
  <option>Visitante</option>
  <option>root</option>

  </select>

</p>
</div>



<div class="col-md-12 mb-3">

<p>
Si desea proteger su contraseña marque la casilla
<input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
</div>
</p>



<div class="col-md-12 mb-3" id="content" style="display: none;">
Cargar contraseña:
<input type="password">
 </div>



 <div class="col-md-12 mb-3">

 <p>
<link rel="stylesheet">enlace a compartir
</p>

</div>


<div class="col-md-6 mb-3">
Desea encriptar el contenido:
 <input type="text" value="valor" readonly="readonly">
 <button  type="submit">Generar Hash</button>
 </div>















</form >


<?php

include_once("../estructura/pie.php");
?>