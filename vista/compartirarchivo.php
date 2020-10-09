<?php 
$Titulo = " Ejercicio 2";
include_once("estructura/cabecerav2.php");
?>


<head>




<script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/contra.js"></script>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha256.js"></script>
<script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/hash.js"></script>  



<!--Para hash-->
<script src="http://www.myersdaily.org/joseph/javascript/md5.js"></script>



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





<script type="text/javascript" >

function validatePassword() {
    alert (holaaaa);
    $v1=^[0-9,$]*$;
    var expRegContrasena1=/^(?=.*[0-9])[0-9]$/;
    var expRegContrasena2=/^(?=.*[a-z])[a-z]$/;
    var expRegContrasena3=/^(?=.*[A-Z])[A-Z]$/;
    var patt = new RegExp(/^[A-Za-z0-9\s]+$/g);
    var patt2 =/^(?=(?:.*\d){1})(?=(?:.*[A-Z]){1})(?=(?:.*[a-z]){1})(?=(?:.*[@$?¡\-_]){1})\S{8,16}$/;
    



       var p = document.getElementById('pass').value,
           errors = [];
       if (p.length < 6 ) ) {
           errors.push("Debil");
           document.getElementById("mensaje").value ="Debil";
           alert (debil);
       }
       if (expRegContrasena1.test(p.value)) {
           errors.push("Debil");
           document.getElementById("mensaje").value ="Debil";
           alert (debil);
       }
       if (expRegContrasena2.test(p.value) ) {
           errors.push("Debil");
           document.getElementById("mensaje").value ="Debil";
           alert (debil);
       }
       if (p.length > 6 && patt.test(p.value)) {
           errors.push("Normal."); 
           document.getElementById("mensaje").value ="Normal";

       }
       if (p.length > 6 && patt2.test(p.value)) {
           errors.push("FUERTE");
           document.getElementById("mensaje").value ="FUERTE";

       }
     

       
}

</script>

<script type="text/javascript">

function hash(){


    var valor="";
    var element1 = document.getElementById("dias");
    var element2 = document.getElementById("descargas");
    var element3 = document.getElementById("enlace");
    var element4 = 9007199254740991;
    var resultado=element1.value+element2.value+element3.value;
    //alert(resultado);
    //console.log(md5(resultado));
      //alert(md5(resultado));


    if(element1.value=="" && element2.value==""){
      console.log(md5('9007199254740991'));
      valor=md5('9007199254740991');
      document.getElementById("enlacegenerado").value =valor;
    }else{
      console.log(md5(resultado));
      valor=md5(resultado);
      document.getElementById("enlacegenerado").value =valor;

    }

    return valor;
}

</script>











</head>

<form  id="compartir" name="compartir" method="POST" action="accion2.php" class="needs-validation" >



<!--<form  id="amarchivo" name="amarchivo" method="POST" action="accion1.php"  data-toggle="validator"  class="needs-validation"  novalidate >-->
<h2>1234.png</h2>
























<div class="col-md-12 mb-3">
<p>
Ingrese la cantidad de dias que comparte este archivo:
<input  size="50"  min="1" id="dias" name="dias" placeholder="si no ingresa nada quiere decir que no expira" >
</p>
</div>


<div class="col-md-12 mb-3">
<p>
Ingresar cantidad de descargar posibles:
<input  name="descargas"  size="50" id="descargas" placeholder="Si queda vació quiere decir que no hay limites" >
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
<input type="password" name="pass" id="pass"  onchange="javascript:validatePassword()"/>
<input id="mensaje" >
 </div>


 <div class="col-md-12 mb-3">
<p>
Ingrese el enlace:
<input  size="50" name="enlace" id="enlace" min="1"  value="9007199254740991" >
</p>
</div>

<button type="buttom" data-toggle="collapse" data-target="#enlacegenerado" onclick="hash()" >Generar Hash</button>

 


<div class="col-md-6 mb-3">
Desea encriptar el contenido:
 <input value="/" element.value="hash()" name="enlacegenerado" id="enlacegenerado" readonly="readonly">
 

 </div>




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

include_once("estructura/piev2.php");
?>