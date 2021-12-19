<?php 
include("con_db.php");
/*
if($conex){
	echo "todo correcto";
}else{
	echo "ha ocurrido un error";
}
*/
if (isset($_POST['register'])) {
    if (strlen($_POST['name'])) {
	    $name = trim($_POST['name']);
	    $consulta = "INSERT INTO direcciones(nombre) VALUES ('$name')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>