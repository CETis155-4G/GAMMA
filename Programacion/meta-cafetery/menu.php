<?php
    session_start();
    //error_reporting(0);
    $user = $_SESSION['user'];
?>
<!-- se usa para indicar que se usara html5  -->
<!DOCTYPE html>
<html lang="es">

<head>
        <!-- se usa para enlazar html y css  -->
    <link rel="stylesheet" href="styles/style_menu.css" type="text/css">

    <!-- se usa para definir el titulo de la pagina web  -->
    <title>
    menu
    </title>

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
        $sql = "SELECT rol from user where email= '$user' ;" ;

        $data = mysqli_query($conn, $sql);

        if (mysqli_num_rows($data) > 0) {
            while($rowData = mysqli_fetch_array($data)){
                $rol = $rowData["rol"];
            }
        }
    ?>
</head>    

<header>
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
        <button class="registro"><a href="registro.html">Registrarse</a>
        </button>   

        <button class="inicio"><a href="login.html">Iniciar Sesion</a>
        </button>

        <?php }else if($user){  ?>

        <button class="inicio"><a href="cerrar_sesion.php">Cerrar Sesion</a></button>

        <?php } ?>

    </nav> 
</header>

<br>
<!-- se usa para definir el cuerpo de toda la pagina web  -->
<body>

    <section class="section-class-menu"> -MENU- </section>
    <br>
    <!-- se usa para indicar que se cambia de tema o que es otra pagina   --> 
    <?php
    echo $rol;
    ?>

        <!-- se usa para crear secciones independientes  -->
    <section class="section-class-alimentos">Alimentos</section>
    <br>
    <section class="section-class-opciones-alimentos">
        <!-- se usa para insertar una img  -->
        <div id="menu">
            <IMG src="img/torta.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php
                                $id = 1;
                                include 'articulo.php';
                            ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>
               
                    <hr>
            <IMG src="img/enchiladas.jpg" align="left" width="150" height="125" ><br>
                    <section class="class-info-a">
                        <form>
                        <p>
                            <?php
                                $id = 2;
                                include 'articulo.php';
                            ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>    
                    <hr>
            <IMG src="img/pizza.jpg" align="left" width="150" height="125"><br>
                <section class="class-info-a">
                <form>
                        <p>
                            <?php
                                $id = 3;
                                include 'articulo.php';
                            ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                    <hr>
            <br>
            <IMG src="img/sincronizada.jpg" align="left" width="150" height="125" ><br>
                <section class="class-info-a">
                <form>
                        <p>
                            <?php
                                $id = 4;
                                include 'articulo.php';
                            ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                    <hr>
            <IMG src="img/tacos.jpg" align="left" width="150" height="125" ><br>
                <section class="class-info-a">
                <form>
                        <p>
                            <?php
                                $id = 5;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                    <hr>
                <IMG src="img/pan.jpg" align="left" width="150" height="125" ><br>
                <section class="class-info-a">
                <form>
                        <p>
                            <?php
                                $id = 16;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                    <hr>

                    
                <IMG src="img/hot dog.jpg" align="left" width="150" height="125" ><br>
                <section class="class-info-a">
                    <form>
                        <p>
                            <?php
                                $id = 17;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  

                    <hr>
                    <IMG src="img/burrito.jpg"  align="left"  width="150" height="130" ><br>
                    <section class="class-info-a">
                    <form>
                        <p>
                            <?php
                                $id = 20;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  

        </section>
        </div>

        <br>
        <section class="section-class-bebidas">Bebidas</section>
        <br>
        <section class="section-class-opciones-bebidas">
            <IMG src="img/agua.jpg" align="left"  width="125" ><br>
                <section class="class-info-a">
                <form>
                        <p>
                            <?php
                                $id = 6;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                    <hr>
            <IMG src="img/jumex.jpg"  align="left"  width="125" ><br>
                <section class="class-info-a">
                <form>
                        <p>
                            <?php
                                $id = 7;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                    <hr>
            <IMG src="img/leche.jpg" align="left"  width="125" ><br>
                <section class="class-info-a">
                <form>
                        <p>
                            <?php
                                $id = 8;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                    <hr>
            <IMG src="img/jugo.jpg"  align="left"  width="125" ><br>
                <section class="class-info-a">
                <form>
                        <p>
                            <?php
                                $id = 9;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                    <hr>
            <IMG src="img/te.jpg"  width="125" align="left"><br>
            <section class="class-info-a">
            <form>
                        <p>
                            <?php
                                $id = 10;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                <hr>

                <IMG src="img/power.jpg" align="left" width="130" height="125" ><br>
                <section class="class-info-a">
                    <form>
                        <p>
                            <?php
                                $id = 18;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>  
                    <hr>

                <IMG src="img/tikito.jpg" align="left" width="130" height="125" ><br>
                <section class="class-info-a">
                    <form>
                        <p>
                            <?php
                                $id = 19;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>
                
    <br>

        <section class="section-class-dulces">Dulces</section>
        <br>
        <section class="section-class-opciones-bebidas">
            <IMG src="img/donas.jpg" width="120" height="120" align="left">
            <section class="class-info-a">
                    <form>
                        <p>
                            <?php
                                $id = 11;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>
                
                <hr>
            <IMG src="img/lucas.jpg"  width="125" align="left"><br>
            <section class="class-info-a">
                    <form>
                        <p>
                            <?php
                                $id = 12;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>
                
                    <hr>
            <IMG src="img/pay.jpg"  width="125" align="left"><br>
            <section class="class-info-a">
                    <form>
                        <p>
                            <?php
                                $id = 13;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>
                
                <hr>
            <IMG src="img/galletas.jpg"  width="140" align="left" class="alimentos"><br>
            <section class="class-info-a">
                    <form>
                        <p>
                            <?php
                                $id = 14;
                                include 'articulo.php';
                                ?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>
                
                <hr>
            <IMG src="img/gomitas.jpg"  width="130" align="left"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 15;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
            <IMG src="img/palomitas.jpg"  align="left"  width="150" height="130" ><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 21;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
            <IMG src="img/pan dulce.jpg"  width="150" align="left" height="120"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 22;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
            <IMG src="img/cacahuates.jpg"  width="150" align="left" height="120"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 23;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
            <IMG src="img/papas.jpg"  width="150" align="left" height="120"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 24;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
            <IMG src="img/nieve.jpg"  width="150" align="left" height="120"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 25;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            <hr>
            <IMG src="img/chokis.jpg"  width="150" align="left" height="120"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 26;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
            <IMG src="img/orbit.jpg"  width="150" align="left" height="120"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 27;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
            <IMG src="img/bubbaloo.jpg"  width="150" align="left" height="120"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 28;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
            <IMG src="img/paleta.jpg"  width="150" align="left" height="120"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 29;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
            <IMG src="img/picafresa.jpg"  width="150" align="left" height="120"><br>
            <section class="class-info-a">
                <form>
                    <p>
                        <?php
                            $id = 30;
                            include 'articulo.php';
                            ?>
                    </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                </form>
            
            <hr>
    </body>
    <?php
        mysqli_close($conn);
    ?>
</html>