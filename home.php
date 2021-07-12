<?php
?>

<!DOCTYPE html>
<html>
<head>
	<?php

		$conexion = mysqli_connect ("localhost","root","","registro"); 

		$Usuario = ($_POST['Usuario']);
		$cliente = ($_POST['Usuario']);

		echo('<title>Bienvenido $Usuario</title>');
	?>
	<meta charset="utf-8">
</head>
<body>
	<?php
		include('db_logins.php')
		echo('<table style="width:100%">
	  <tr>
	    <th>Usuario</th>
	    <th>Fecha de inicio sesion</th>
	  </tr>')
	while($row = $result->fetch_array()){
	  	echo('<tr>
	    <th>$row->usuario</th>
	    <th>$row->tiempo</th>
	  </tr>')
	  }
	</table>
?>
</body>

        
      
</html>