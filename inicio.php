<?php

  if (!isset($_SESSION)) {
  session_start();
}
    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenido</title>
</head>
<body>
	<h1>Bienvenido 	<?php echo($_SESSION["Usuario"]); 	?></h1>
	<h2>Has ingresado correctamente</h2>

	<?php
	if (isset($_POST['Ingresar'])) {
	include ("con_db.php");
    
    $conexion = mysqli_connect ("localhost","root","","registro"); 
	
	  $Usuario = ($_POST['Usuario']);
	  $cliente = ($_POST['Usuario']);
	
}else{

		include("db_logins.php");
		echo("<table style='width:100%''>
	  <tr>
	    <th>Usuario</th>
	    <th>Fecha de inicio sesion</th>
	  </tr>");
		while ($row = $resultado->fetch_object()){
		  	echo("<tr>
		    <th>$row->cliente</th>
		    <th>$row->tiempo</th>
		  	</tr>
		    ");
		  }
		    echo("</table>");
	}
	?>

	<a href="session.php">Cerrar sesion</a>

</body>
</html>


