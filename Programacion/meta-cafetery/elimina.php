<?php
    // Conectarse a la base de datos
    $servername = "localhost:3307";
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
/*
    if (mysqli_query($conn, $sql)) {
        echo "
        <script> 
            window.location='menu.php'
            alert('Articulo eliminado');
        </script>";
        
            
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
*/
?>

<body>
    Eliminacion Pendiente
</body>