<?php 
$Titulo = " Ejercicio 1";
include_once("estructura/cabecerav2.php");
?>






<form  id="elim" name="elim" method="POST" action="accion.php" class="needs-validation" >


<h2>1234.png</h2>



    <div class="col-md-6 mb-3">
<p>Razon para de eliminación<br>

<textarea name="teli" id="teli" rows="2" cols="100" placeholder="Escriba el motivo" required></textarea>
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
  <div class="col-md-12">
<input type="submit" name="Submit" value="Enviar" />
</div>





 </form >



<script src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
 <script src=",,/js/popper/popper.min.js"></script>
 <script src=",,/js/bootstrap/4.5.2/bootstrap.min.js"></script>
<script src="../js/bootstrap/4.5.2/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/validator.js"></script>
<script type="text/javascript" src="../../vista/js/bootstrap/4.5.2/editor.js"></script>





<?php 

include_once("estructura/piev2.php");
?>