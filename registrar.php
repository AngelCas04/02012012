<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && 
    	strlen($_POST['number']) >= 1 && strlen($_POST['tel']) >= 1) {
	    $name = trim($_POST['name']);
	    $tel = trim($_POST['tel']);
	    $number = trim($_POST['numvuelo'])
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = INSERT INTO datos(id, nombre, email, num_vuelo, tel, fecha_reg) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]');
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
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