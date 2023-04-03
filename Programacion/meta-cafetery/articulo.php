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

    $art = "SELECT nombre , descripcion , precio FROM articulo WHERE id_articulo=$id";
    $articulo = mysqli_query($conn, $art);

    if (mysqli_num_rows($articulo) > 0) {
        while($rowData = mysqli_fetch_array($articulo)){
            $nombre = $rowData["nombre"];
            $descr = $rowData["descripcion"];
            $precio = $rowData["precio"];
        }
    }
?>


Articulo : <?php echo $nombre ?><br>
Precio : $<?php echo $precio ?><br>
Descripcion : <?php echo $descr ?><br>