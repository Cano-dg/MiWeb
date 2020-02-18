
        <?php
            $servername="192.168.1.112"; //En localhost poner la IP de tu ordenador
            $username="root";
            $password="";
            $dbname="CanoDB";

            //solo poner dbname si esta creada la base de datos
            $conn= new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Conexion fallida: ".$conn->connect_error);
            }

        $sql = "truncate table guests";
            if($conn->query($sql) === TRUE){
                $last_id = $conn->insert_id;
                echo "Datos insertados correctamente<br>Identificador: ".$last_id;
            }else{
                echo "Error al insertar datos: ".$conn->error;
            }
            $conn->close();
 ?>
     
