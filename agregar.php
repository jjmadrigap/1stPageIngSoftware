<?php 

include("conexion_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['category']) >= 1) {
	    $name = trim($_POST['name']);
	    $category = trim($_POST['category']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO animes(nombre, categoria, fecha_reg) VALUES ('$name','$category','$fechareg')";
	    $resultado = mysqli_query($conect ,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Se ha guardado correctamente</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Error F</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Por favor complete no sea vago</h3>
           <?php
    }
}

?>