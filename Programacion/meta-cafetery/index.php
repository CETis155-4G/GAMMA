<?php
    session_start();
    error_reporting(0);
    $user = $_SESSION['user'];
?>
<!-- se usa para indicar que se usara html5  -->
<!DOCTYPE html>
<html lang="es">
    <!-- se usa para enlazar html y css  -->
    <link rel="stylesheet" href="styles/style_home.css" type="text/css">

   <!-- se usa para definir el titulo de la pagina web  -->
   <title>
    pagina principal
    </title>

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
        //echo "Conexión exitosa";
    ?>

    <nav class="nav">
        <h2>
        <!-- se usa para definir el encabezado de la pagina web  -->
            <header style="text-align: center;">
                 META-CAFETERY 
            </header>
        </h2>   
                            
        <IMG src="img/logo.jpg" width="100px">
        

        <?php if(!$user){ ?>

        <!-- se define un boton para enlazar las paginas --> 
        <button class="registro"><a href="registro.php">Registrarse</a>
        </button>   

        <button class="inicio"><a href="login.html">Iniciar Sesion</a>
        </button>

        <?php }else if($user){  ?>

        <button class="inicio"><a href="cerrar_sesion.php">Cerrar Sesion</a></button>

        <?php } ?>

        <button class="menu"><a href="menu.php">Menu</a>
        </button>  

    </nav>
    
    <body>
        <br>
        <div class="logo">
            <img src="img/lo_go.png"></img>
        </div>
        <!-- se define un boton para enlazar las paginas -->  
        <br>
    </body>
</html>