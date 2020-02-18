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

	$sql = "select * from guests";

	$result = $conn->query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "id: ".$row["id"]." - Nombre: ".$row["nombre"]." - Apellido: ".$row["apellido"]." - Email: ".$row["email"]."<br>";
		}
	}else{
		echo "0 resultados.";
	}
 ?>
        
        

			
                

    </body>
</html>   

