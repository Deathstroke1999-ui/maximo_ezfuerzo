<?php 


include("db.php");

if (isset($_POST['register'])) {
   if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['telefono']) >=1 && strlen($_POST['mensaje']) >= 1){    
	    $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $mensaje = trim($_POST['mensaje']);
	    $fechareg = date("d/m/y");
	    $consulta="INSERT INTO datos ( nombre , email, telefono, mensaje, fecha_reg) VALUES ('$name','$email','$telefono','$mensaje','$fechareg')";
        $resultado= mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente! 123</h3>
      <!-- Pepereto dasfasdfasdfasdfasdfasdf --->
      
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Error al registrar la información</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }


    }

?>