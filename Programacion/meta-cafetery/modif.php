<?php
    // Conectarse a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Verificar la conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    //echo "Conectado";

    $id = ($_GET['id']);
    $nombre = ($_GET['nombre']);
    $desc = ($_GET['descripcion']);
    $precio = ($_GET['precio']);

    /*
    echo $id;
    echo $nombre;
    echo $desc;
    echo $precio;
    */

    $sql = "UPDATE articulo set nombre='$nombre' , descripcion='$desc' , precio=$precio where id_articulo=$id;";

    if (mysqli_query($conn, $sql)) {
        echo "
        <script> 
            window.location='menu.php'
            alert('Articulo actualizado');
        </script>";
        
            
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>