<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ejercicios</title>
    </head>
    <body>
<?php 
    $email = $_POST['email'];
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="CanoDB";

	//solo poner dbname si esta creada la base de datos
	$conn= new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("Conexion fallida: ".$conn->connect_error);
	}

	$sql = "select * from guests where email=('".$email."')";

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
        
        
		<form name="Buscar.php" action="Buscar.php" method="post">
			
			
				<label for="email">E-mail: </label>
				<input type="text" id="email" name="email" placeholder="E-mail"/>

			<tr>
				<td><input type="submit" value="Enviar" /></td>
				<td><input type="reset" value="Borrar" /></td>
			</tr>

			
                

    </body>
</html>   

