<?php
    session_start();
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

    $ap_paterno = $_GET["apPaterno"];
    $ap_materno = $_GET["apMaterno"];
    $nombre = $_GET["nombre"];
    $fecha_nac = $_GET["fecha_nac"];
    $estado = $_GET["estado"];
    $municipio = $_GET["municipio"];
    $rol = $_GET["rol"];
    $telefono = $_GET["numero"];
    $email = $_GET["correo"];
    $password = $_GET["pswd"];
    $encr = base64_encode($password);

    $insert = "INSERT INTO user (apPaterno, apMaterno, nombre, fecha_nac, estado, municipio, numero, email, password, rol)
    VALUES ('$ap_paterno', '$ap_materno', '$nombre', '$fecha_nac', '$estado', '$municipio', '$telefono', '$email', '$encr', '$rol')";
    
    $_SESSION['user'] = $email;

    if (mysqli_query($conn, $insert)) {
        $log = TRUE;

        echo "<script> alert('se ha registrado con exito');
            window.location='index.php'</script>";
         
            
    } else {
        echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }
?>