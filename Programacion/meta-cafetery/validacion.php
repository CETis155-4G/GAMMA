<?php
    session_start();

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

    $correo = $_POST['email'];
    $pass = $_POST['contrasena'];
    $password = base64_encode($pass);

    $sql = "SELECT * FROM user WHERE email='$correo' and password='$password'" ;

    $data = mysqli_query($conn, $sql);

    $datos = mysqli_num_rows($data);

    $_SESSION['user'] = $correo;

    if($datos>0){
        header('location:index.php');
    }else{
        header('location:login.html');
        
    }

    mysqli_free_result($data);
    mysqli_close($conn);

?>