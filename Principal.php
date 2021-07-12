<?php 
if (!isset($_SESSION)) {
  session_start();
}

$mysqli = new mysqli("localhost", "root", "", "registro");

if ($mysqli->connect_errno) {
     printf("Falló la conexión: %s\n", $mysqli->connect_error);
     exit();
}


if (isset($_POST['Ingresar'])) {
	 include ("con_db.php");
     $conexion = mysqli_connect ("localhost","root","","registro"); 
}

$tabla1 = "datos";              	

$Usuario = trim (($_POST['Usuario']));

$password = trim(($_POST['password']));

$conexion = mysqli_connect ("localhost","root","","registro"); 

$consulta2 = mysqli_query ($conexion, "SELECT Usuario, password, hora FROM datos WHERE Usuario = '$Usuario' AND password = '$password' AND hora = ''");

$consulta = "SELECT * FROM datos WHERE Usuario = '$Usuario' AND password = '$password'";
        
$result= mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($result);

if ($filas) {
     session_start();
     $_SESSION['Usuario'] = $Usuario;
     header("location: inicio.php");
}else{
     ?>
     <?php include("login.php"); ?>
     <h1 class="bad">error en la autenticacion, vuelva a ingresar los datos</h1>
     <?php
     die();
}

// este es para guardar la hora y fecha de logins
    
include ("con_db.php");
$conexion = mysqli_connect ("localhost","root","","registro"); 

if (isset($_POST['Ingresar'])) {
    if (strlen($_POST['Usuario']) >= 1)
     $cliente = ($_POST['Usuario']);
 
}

$consulta2 = "INSERT INTO logins (cliente) VALUES ('$cliente')";

$select2 = "SELECT cliente FROM `logins` WHERE cliente = '$cliente'; ";

// funcion para ver si hay algun error en cuanto al login 

if (!$resultado = $mysqli->query($consulta2)) {   
     echo "Lo sentimos, este sitio web está experimentando problemas.";
     echo "Error: La ejecución de la consulta falló debido a: \n";
     echo "Query: " . $consulta2 . "\n";
     echo "Errno: " . $mysqli->errno . "\n";
     echo "Error: " . $mysqli->error . "\n";
     exit;
}
         
if (!$resultado = $mysqli->query($select2)) {
     echo "problema 1";      
     echo "Error: La ejecución de la consulta falló debido a: \n";
     echo "Query: " . $select2 . "\n";
     echo "Errno: " . $mysqli->errno . "\n";
     echo "Error: " . $mysqli->error . "\n";
     exit;
}

mysqli_free_result($result);  
mysqli_close($conexion);