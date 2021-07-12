<?php

include("con_db.php");

if (!isset($_SESSION['Usuario'])) {
	echo("Usuario no autenticado");
	header("location: login.php");
}

$cliente = $_SESSION['Usuario'];

$select2 = "SELECT cliente, tiempo FROM `logins` WHERE cliente = '$cliente'; ";

$resultado = $mysqli->query($select2);

if ($resultado->num_rows === 0) {
   echo "Lo sentimos, este sitio web está experimentando problemas.";
   exit;
}



?>