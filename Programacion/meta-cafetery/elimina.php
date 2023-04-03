<?php
    // Conectarse a la base de datos
    $servername = "localhost:4000";
    $username = "root";
    $password = "";
    $dbname = "sistema";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Verificar la conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    //echo "Conexión exitosa";

    $id = ($_GET['id']);
    $nombre = ($_GET['nombre']);
    $desc = ($_GET['descripcion']);
    $precio = ($_GET['precio']);

    $sql = "DELETE from articulo where id_articulo='$id'";

    if (mysqli_query($conn, $sql)) {
        header('location:menu.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>