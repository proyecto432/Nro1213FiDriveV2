<?php 
$Titulo = " Ejercicio entregable 3"; 
include_once("estructura/cabecerav2.php");
include_once("../utils/funciones.php");
include_once("../control/control-1213-2.php");

//include_once("/opt/lampp/htdocs/PWD/TP1-EJ7-Y-8/vista/estructura/cabecera.php");
?>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap/4.5.2/bootstrap.min.css" >
<title>Ejemplo de PHP</title>


<?php 
$datos = data_submitted() ;
$obj = new control_ejeNRO2();
//print_r($datos);

$respuesta = $obj->verInformacion($datos);
//$respuesta = $obj->verInformacion($_POST);
//$respuesta = $obj->verInformacion($_GET);



?>

<div class="col-md-6 mb-3">

<p>

<?php echo $respuesta ?>
<br><a href=compartirarchivo.php>GO BACK</a>
</p>
</div>




<?php 

include_once("estructura/piev2.php");
?>
