<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ejercicios</title>
    </head>
    <body>
        <?php
        $nombre = $_POST['nombre'];
        $nombre2 = $_POST['nombre2'];
        $apellido2 = $_POST['apellido2'];
        $email2 = $_POST['email2'];
            $servername="192.168.1.112"; //En localhost poner la IP de tu ordenador
            $username="root";
            $password="";
            $dbname="CanoDB";

            //solo poner dbname si esta creada la base de datos
	$conn= new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("Conexion fallida: ".$conn->connect_error);
	}

        
        $sql = "update guests set nombre='".$nombre2."', apellido='".$apellido2."', email='".$email2."' 
                where (nombre)=('".$nombre."')";

	$result = $conn->query($sql);
	echo "<table border=1>";
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			//echo "id: ".$row["id"]." - Nombre: ".$row["nombre"]." - Apellido: ".$row["apellido"]." - Email: ".$row["email"]."<br>";*/

			echo "
				
					<tr>
						<td>".$row["id"]."</td>
						<td>".$row["nombre"]."</td>
						<td>".$row["apellido"]."</td>
						<td>".$row["email"]."</td>
					</tr>
				
			";
		}
	}else{
		echo "0 resultados.";
	}
	echo "</table>";
 ?> 
        

        
		<form name="Modificar.php" action="Modificar.php" method="post">
			
				<label for="nombre">Nombre: </label>
				<input type="text" id="nombre" name="nombre" placeholder="Nombre"/>
                <br>
                <br>
                <br>
                <br>
                <label for="nombre2">Nuevo Nombre: </label>
				<input type="text" id="nombre2" name="nombre2" placeholder="Nombre2"/>
                <br>
			
				<label for="apellido2">Nuevo Apellido: </label>
				<input type="text" id="apellido2" name="apellido2" placeholder="Apellido2"/>
			     <br>
			
				<label for="email2">Nuevo E-mail: </label>
				<input type="text" id="email2" name="email2" placeholder="E-mail2"/>
                <br>
			<tr>
				<td><input type="submit" value="Enviar" /></td>
				<td><input type="reset" value="Borrar" /></td>
			</tr>

			
                

    </body>
</html>   

