 
<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
</head>
<body>
    <form action="registrar.php" method="post">
    	<h1>Registrarse</h1>
    	<input type="text" name="Nombre" placeholder="Nombre completo">
    	<input type="text" name="Usuario" placeholder="Usuario">
    	<input type="password" name="password" placeholder="Contraseña">
    	<input type="email" name="Email" placeholder="Ingrese su correo">
    	<input type="submit" name="register"><br>

        <a href="index.php">Volver al inicio</a><br>
        <a href="login.php">Iniciar sesion</a>
    </form>
        <?php 
        include("con_db.php");

        ?>
</body>
</html>