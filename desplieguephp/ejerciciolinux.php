<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Despliegue</title>
</head>
<body>
<?php
		if (isset($_POST['enviar'])) {

		$configs = include('config.php');

		$conn = new mysqli($configs['servername'], $configs['username'], $configs['password'], $configs['dbname']);
		
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$nombre = $_POST['nombre'];
		$pass = $_POST['pass'];

		$sql = "INSERT INTO usuarios (nombre, pass)	VALUES ('$nombre', '$pass')";

		if ($conn->query($sql) === TRUE) {
		    echo "Datos insertados correctamente";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		print "<br><br><a href=ejerciciolinux.php>Volver al index</a>";

		} else {
	?>
		<h2>Dar de alta usuario</h2>
		<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		Nombre: <input type="text" name="nombre" /><br />
		Contraseña: <input type="text" name="pass" /><br />
		<br />
		<input type="submit" value="Enviar" name="enviar"/>
		<input type="reset" value="Borrar" />
		</form>
	<?php
		}
	?>
</body>
</html>