<?php 
$Titulo = " Ejercicio 1";
include_once("estructura/cabecerav2.php");
?>


<head>


<script type="text/javascript" src="./js/bootstrap/4.5.2/editor.js"></script>
<script type="text/javascript" src="./js/bootstrap/4.5.2/summernote-lite.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/bootstrap/4.5.2/editor.css" >
<link rel="stylesheet" href="./css/bootstrap/4.5.2/summernote-lite.min.css" >

<script type="text/javascript" src="../../vista/js/jquery/jquery-3.5.1.min.js"></script>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>


<script src="https://kit.fontawesome.com/7eaf632f42.js" crossorigin="anonymous"></script>




<script type="text/javascript">
		$(document).ready(function(){
			$('#txt-content').Editor();

			$('#txt-content').Editor('setText', ['<p style="color:red;">Esta es una descripción genérica, si lo necesita la puede cambiar</p>']);

			$('#btn-enviar').click(function(e){
				e.preventDefault();
				$('#txt-content').text($('#txt-content').Editor('getText'));
				$('#frm-test').submit();				
			});
		});	
	</script>



<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("op1");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
    function showContent2() {
        element = document.getElementById("content2");
        check = document.getElementById("op2");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
    function showContent3() {
        element = document.getElementById("content3");
        check = document.getElementById("op3");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
    function showContent4() {
        element = document.getElementById("content4");
        check = document.getElementById("op4");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>










<script type="text/javascript">
    function showContent5() {
        element = document.getElementById("content5");
        check = document.getElementById("op5");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }



function getFileExtension(filename){
//return filename.slice((filename.lastIndexOf('.') - 1 >>> 0) + 2);
return filename.slice((Math.max(0, filename.lastIndexOf(".")) || Infinity) + 1);

}


function setRadioOff){
    document.getElementById('radioImagen').checked=false;
    document.getElementById('radioDoc').checked=false;
    document.getElementById('radioZip').checked=false;
    document.getElementById('radioPdf').checked=false;
    document.getElementById('radioXls').checked=false;
}

function elegirIcono(){
    var nombre;
    var extension;
    nombre=document.getElementById('fileToUpload');
    extension=getFileExtension(nombre.value);
switch(extension)
    {
        case ('jpg'): document.getElementById('img').checked=true;break;
        case ('png'): document.getElementById('img').checked=true;break;
        case ('gif'): document.getElementById('img').checked=true;break;
        case ('txt'): document.getElementById('doc').checked=true;break;
        case ('doc'): document.getElementById('doc').checked=true;break;
        case ('docx'):document.getElementById('doc').checked=true;break;
        case ('zip'): document.getElementById('zip').checked=true;break;
        case ('rar'): document.getElementById('zip').checked=true;break;
        case ('pdf'): document.getElementById('pdf').checked=true;break;
        case ('xls'): document.getElementById('xls').checked=true;break;
        case ('xlsx'): document.getElementById('xls').checked=true;break;
        

    }
}

</script>




<script type="text/javascript">


function sugerirExtension() {
    //alert('hola'); 
    var archivo = document.getElementById('fileToUpload').value; // esto te trae C:\fakepath\Situlo.png un falso url, solo importa la extension
    
    var extension = archivo.split('.').pop(); //aca dividis el string cuando hay un punto y solo se guarda la extension y despues el switch
    switch (extension) {
        case ('jpg'):
            document.getElementById('img').checked = true; // haces llamado del radio al que queres sugerir y .checked lo dejas seleccionado y con break cortas y salir de la funcion
            break;
        case ('png'):
            document.getElementById('img').checked = true;
            break;
        case ('gif'):
            document.getElementById('img').checked = true;
            break;
        case ('txt'):
            document.getElementById('doc').checked = true;
            break;
        case ('doc'):
            document.getElementById('doc').checked = true;
            break;
        case ('docx'):
            document.getElementById('doc').checked = true;
            break;
        case ('zip'):
            document.getElementById('zip').checked = true;
            break;
        case ('rar'):
            document.getElementById('zip').checked = true;
            break;
        case ('pdf'):
            document.getElementById('pdf').checked = true;
            break;
        case ('xls'):
            document.getElementById('xls').checked = true;
            break;
        case ('xlsx'):
            document.getElementById('xls').checked = true;
            break;
            alert(extension);
    }
}








</script>







</head>


<form  id="eje1213" name="eje1213" method="POST" action="accion1.php" class="needs-validation" enctype="multipart/form-data"  >








<div class="form-group" >
<div class="col-md-12 mb-3">
Si desea subir un archivo:<br><br>
<input name="fileToUpload" id="fileToUpload" type="file"  onchange="sugerirExtension()" />

<br><br>
</div>
</div>


<!--<form  id="amarchivo" name="amarchivo" method="POST" action="accion1.php"  data-toggle="validator"  class="needs-validation"  novalidate >-->



<div class="form-group" >
<div class="col-md-12">
      <label>Nombre archivo:</label>
       
 <input  name="nombre" id="nombre" size="25"  placeholder="Escriba el nombre del archivo" value="1234.jpg">
</div>
</div>

<div class="form-group" >
<div class=row>
<div class="col-md-12 mb-3">
<p>Descripcion<br>

<div class="form-group">
	<textarea id="txt-content" name="txt-content"></textarea>
</div>



</div>
</div>
</div>




<div class="form-group" >
  <div class="col-md-12 mb-3">
 Por favor ingrese usuario que lo carga:<p>
<select name="user">
   <option value="">Elegir...</option>
   <option value="1">Admin</option> 
   <option value="2">Visitante</option> 
   <option value="3">root</option>
</select>
  </div>
  </div>



  



  <div class="form-group" >
<div class="col-md-12 mb-3">
Elija el icono que va a utilizar:
<input type="radio" id="img" name="radioI"  value="img"> Imagen

<input type="radio" id="doc" name="radioI"   value="doc"> Doc

<input type="radio" id="zip" name="radioI"   value="zip"> ZIP

<input type="radio" id="pdf" name="radioI"   value="pdf"> PDF 

<input type="radio" id="xls" name="radioI"  value="xls"> XLS
</div>
</div>




<div class="col-md-12 mb-3" id="content" style="display: none;">
icono recomendado<br>
<i class="far fa-file-image"></i>
 </div>
 <div class="col-md-12 mb-3" id="content2" style="display: none;">
icono recomendado<br>
<i class="fas fa-file-archive"></i>
 </div>
 <div class="col-md-12 mb-3" id="content3" style="display: none;">
icono recomendado<br>
<i class="fas fa-file-word"></i>
 </div>
 <div class="col-md-12 mb-3" id="content4" style="display: none;">
icono recomendado<br>
<i class="fas fa-file-pdf"></i>
 </div>
 <div class="col-md-12 mb-3" id="content5" style="display: none;">
icono recomendado<br>
<i class="fas fa-file-spreadsheet"></i>
 </div>




 









 <div class="form-group" >
<div class="col-md-12">
Clave del archivo:
<input type="password" id="valor1" name="valor1" >
<input type="hidden" id=clave  name=clave value="0">
</div>

</div>















<div class="form-group" >
<div class="col-md-12">
<input type="submit" name="Submit" value="Aceptar" />
</div>
</div>










 </form >



<script src="./js/jquery/jquery-3.5.1.slim.min.js"></script>
 <script src="./js/popper/popper.min.js"></script>
 <script src="./js/bootstrap/4.5.2/bootstrap.min.js"></script>
<script src="./js/bootstrap/4.5.2/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="./js/bootstrap/4.5.2/validator.js"></script>
<script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/editor.js"></script>





<?php 

include_once("./estructura/piev2.php");
?>