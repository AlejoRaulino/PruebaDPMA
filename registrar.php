<?php 
if (!isset($_SESSION)) {
  session_start();

}

include ("con_db.php");
$conexion = mysqli_connect ("localhost","root","","registro"); 

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Usuario']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['Email']) >= 1) {

	    $Nombre = ($_POST['Nombre']);
	    $Usuario = ($_POST['Usuario']);
	    $password = ($_POST['password']);
	    $Email = ($_POST['Email']);
	    $cliente = ($_POST['Usuario']);
	    
	    $consulta = "INSERT INTO datos (Nombre, Usuario, password, Email, hora) VALUES('$Nombre', '$Usuario', '$password', 'Email', '');";
	   
	    $tabla2 = "INSERT INTO logins (cliente) VALUES ('$Usuario');"; 

	    }
	    
	    $select = "SELECT Usuario FROM datos WHERE Usuario = '$Usuario';";

	    if (!$resultado = $mysqli->query($consulta)) {
   
	    	echo "Lo sentimos, este sitio web está experimentando problemas.";
	    	
        echo "Error: La ejecución de la consulta falló debido a: \n";
        echo "Query: " . $consulta . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
      exit;
}
	    
	    if (!$resultado = $mysqli->query($select)) {
 	    	echo "problema 1";
        echo "Error: La ejecución de la consulta falló d2222222ebido a: \n";
        echo "Query: " . $select . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
}

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!, clickea abajo para ingresar a tu cuenta</h3>
	    	<a href="login.php"> ingresar </a>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡ha ocurrido un error, no pudiste registrarte!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }


?>