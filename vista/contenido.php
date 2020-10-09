<?php 
$Titulo = " Ejercicio 1";
include_once("./estructura/cabecerav2.php");
include_once("../control/control-cont.php");

$control=new control_contenido();
$archivos=$control->obtenerArchivos();

//foreach($archivos as $archivo){
  //  echo $archivo."<br>";
//}


$ruta = "../archivos/";
 
$filehandle = opendir($ruta);
 echo "LISTA DE ARCHIVOS";


while ($file = readdir($filehandle)) {
	if ($file != "." && $file != "..") {

        echo "<ul>
            <li>
            $ruta$file


            
            </li>
                </ul>";
                echo'<div class="col-md-12">';   
             echo'
             <buttom class="btn btn-dark"><a class="inline-item" href="amarchivo.php">Modificar</a>
             </buttom>';
             echo '
             <buttom class="btn btn-warning"><a class="inline-item" href="compartirarchivo.php">Compartir</a>
             </buttom>';
             echo '
             <buttom class="btn btn-danger"><a class="inline-item" href="eliminararchivo.php">Eliminar</a>
             </buttom> <br><br>';
             echo'</div>';

	}
}

 
closedir($filehandle);















?>







<script>
function cambia_de_pagina2(){
    location.href="compartirarchivo.php"
}

function cambia_de_pagina3(){
    location.href="eliminararchivo.php"
}
function cambia_de_pagina1(){
    location.href="amarchivo.php"
}





</script>










<form  id="ejeArchivos" name="ejeArchivos" method="POST" action="accion-cont.php" enctype="multipart/form-data">







<div class="col-md-6 mb-3">
      <label>Ingrese el nombre de la nueva carpeta:</label>
       
 <input  name="nombre" id="nombre"  required>

 <button >Click me</button>
 </div>






















</form >

<script src="./js/bootstrap/4.5.2/bootstrapValidator.min.js"></script>

<script type="text/javascript" src="./js/bootstrap/4.5.2/validator.js"></script>
<?php 

include_once("./estructura/piev2.php");
?>