<?php 
$Titulo = " Ejercicio 2";
include_once("../estructura/cabecerav2.php");
?>


<head>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/contra.js"></script>




</head>

<form  id="compartir" name="compartir" method="POST" action="accion.php" class="needs-validation" >



<!--<form  id="amarchivo" name="amarchivo" method="POST" action="accion1.php"  data-toggle="validator"  class="needs-validation"  novalidate >-->
<h2>1234.png</h2>




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


<script type="text/javascript">
$('#pass').keyup(function(e) {
     var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
     var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
     var enoughRegex = new RegExp("(?=.{6,}).*", "g");
     if (false == enoughRegex.test($(this).val())) {
             $('#passstrength').html('Más caracteres.');
     } else if (strongRegex.test($(this).val())) {
             $('#passstrength').className = 'ok';
             $('#passstrength').html('Fuerte!');
     } else if (mediumRegex.test($(this).val())) {
             $('#passstrength').className = 'alert';
             $('#passstrength').html('Media!');
     } else {
             $('#passstrength').className = 'error';
             $('#passstrength').html('Débil!');
     }
     return true;
});
</script>

<script type="text/javascript">



</script>




















<div class="col-md-12 mb-3">
<p>
Ingrese la cantidad de dias que comparte este archivo:
<input  size="50" name="cantArch" min="1" id="dias" name="dias" placeholder="si no ingresa nada quiere decir que no expira" >
</p>
</div>


<div class="col-md-12 mb-3">
<p>
Ingresar cantidad de descargar posibles:
<input  name="cantArch"  size="50" id="descargas"  id="descargas" placeholder="Si queda vació quiere decir que no hay limites" >
</p>
</div>


<div class="col-md-6 mb-3">
 Por favor ingrese usuario que lo carga:<p>
<select name="user">
   <option value="">Elegir...</option>
   <option value="1">Admin</option> 
   <option value="2">Visitante</option> 
   <option value="3">root</option>
</select>
  </div>



<div class="col-md-12 mb-3">

<p>
Si desea proteger su contraseña marque la casilla
<input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
</div>
</p>



<div class="col-md-12 mb-3" id="content" style="display: none;">
Cargar contraseña:
<input type="password" name="pass" id="pass" />
<span id="passstrength"></span>
 </div>


 <div class="col-md-12 mb-3">
<p>
Ingrese el enlace:
<input  size="50" name="enlace" id="enlace" min="1"   >
</p>
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



<script src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
 <script src=",,/js/popper/popper.min.js"></script>
 <script src=",,/js/bootstrap/4.5.2/bootstrap.min.js"></script>
<script src="../js/bootstrap/4.5.2/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/validator.js"></script>
<script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/editor.js"></script>
<script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/contra.js"></script>





<?php 

include_once("../estructura/piev2.php");
?>