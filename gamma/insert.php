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

    $ap_paterno = $_GET["apPaterno"];
    $ap_materno = $_GET["apMaterno"];
    $nombre = $_GET["nombre"];
    $fecha_nac = $_GET["fecha_nac"];
    $estado = $_GET["estado"];
    $municipio = $_GET["municipio"];
    $telefono = $_GET["telefono"];
    $email = $_GET["email"];
    $password = $_GET["pswd"];

    $insert = "INSERT INTO user (apPaterno, apMaterno, nombre, fecha_nac, estado, municipio, telefono, email, pswd)
    VALUES ('$ap_paterno', '$ap_materno', '$nombre', '$fecha_nac', '$estado', '$municipio', '$telefono', '$email', '$password')";
    
    if (mysqli_query($conn, $insert)) {
        echo "<script> alert('se ha registrado con exito');
            window.location='index.html'</script>";
         
            
    } else {
        echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }
?>