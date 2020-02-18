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
        $apellido = $_POST['apellido'];
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="CanoDB";

            //solo poner dbname si esta creada la base de datos
            $conn= new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Conexion fallida: ".$conn->connect_error);
            }

	$sql = "delete from guests where apellido=('".$apellido."')";
            if($conn->query($sql) === TRUE){
                $last_id = $conn->insert_id;
                echo "Datos insertados correctamente<br>Identificador: ".$last_id;
            }else{
                echo "Error al insertar datos: ".$conn->error;
            }
            $conn->close();
 ?>
        
        
        
		<form name="Baja.php" action="Baja.php" method="post">
			
			
				<label for="apellido">Apellido: </label>
				<input type="text" id="apellido" name="apellido" placeholder="Apellido"/>
			

			<tr>
				<td><input type="submit" value="Enviar" /></td>
				<td><input type="reset" value="Borrar" /></td>
			</tr>

			
                

    </body>
</html>   

