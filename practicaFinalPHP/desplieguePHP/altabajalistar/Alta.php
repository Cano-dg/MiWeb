<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ejercicios</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <?php
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
            $servername="192.168.1.112"; //En localhost poner la IP de tu ordenador
            $username="root";
            $password="";
            $dbname="CanoDB";

            //solo poner dbname si esta creada la base de datos
            $conn= new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Conexion fallida: ".$conn->connect_error);
            }

	$sql = "insert into guests (nombre, apellido, email) values('".$nombre."','".$apellido."','".$email."')";

            if($conn->query($sql) === TRUE){
                $last_id = $conn->insert_id;
                echo "Datos insertados correctamente<br>Identificador: ".$last_id;
            }else{
                echo "Error al insertar datos: ".$conn->error;
            }
            $conn->close();
 ?>
        
        
        
		<form name="Alta.php" action="Alta.php" method="post">
			
				<label for="nombre">Nombre: </label>
				<input type="text" id="nombre" name="nombre" placeholder="Nombre"/>
			
			
				<label for="apellido">Apellido: </label>
				<input type="text" id="apellido" name="apellido" placeholder="Apellido"/>
			
			
				<label for="email">E-mail: </label>
				<input type="text" id="email" name="email" placeholder="E-mail"/>

			<tr>
				<td><input type="submit" value="Enviar" /></td>
				<td><input type="reset" value="Borrar" /></td>
			</tr>

			
                

    </body>
</html>   

