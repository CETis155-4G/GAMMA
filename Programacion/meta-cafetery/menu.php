<?php
    session_start();
    error_reporting(0);
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
        $servername = "localhost";
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
        <button class="registro"><a href="registro.php">Registrarse</a>
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
    //echo $rol;
    ?>

        <!-- se usa para crear secciones independientes  -->
    <section class="section-class-alimentos">Alimentos</section>
    <br>
    <section class="section-class-opciones-alimentos">
        <!-- se usa para insertar una img  -->
        <div id="menu">


        <?php
            $id = 1;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/torta.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>


               
        
        <?php
            $id = 2;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/enchiladas.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?> 

            
        <?php
            $id = 3;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/pizza.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
                    
            <br>
        <?php
            $id = 4;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/sincronizada.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>  
                
            <?php
            $id = 5;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
            ?>

            <IMG src="img/tacos.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>  
                    
        <?php
            $id = 16;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/pan.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
    

                    
        <?php
            $id = 17;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/hot dog.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?> 

                
        <?php
            $id = 20;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/burrito.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>  

        </section>
        </div>

        <br>
        <section class="section-class-bebidas">Bebidas</section>
        <br>
        <section class="section-class-opciones-bebidas">
        <?php
            $id = 6;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/agua.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>  
                    
        <?php
            $id = 7;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/jumex.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>  
                    
        <?php
            $id = 8;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/leche.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>  
        
        <?php
            $id = 9;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/jugo.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?> 
        
        <?php
            $id = 10;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/te.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
        

        <?php
            $id = 18;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/power.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>  
        

        <?php
            $id = 19;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/tikito.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
                
    <br>

        <section class="section-class-dulces">Dulces</section>
        <br>
        <section class="section-class-opciones-bebidas">
        <?php
            $id = 11;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/donas.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
                
        
        <?php
            $id = 12;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/lucas.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
                

        <?php
            $id = 13;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/pay.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
                
                
        <?php
            $id = 14;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/galletas.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
                
        
                <?php
            $id = 15;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/gomitas.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
        
        <?php
            $id = 21;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/palomitas.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
            
            <?php
            $id = 22;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/pan dulce.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
            
            <?php
            $id = 23;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/cacahuates.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
        
        <?php
            $id = 24;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/papas.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
            
        <?php
            $id = 25;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/nieve.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
        
            
        <?php
            $id = 26;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/chokis.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
        
        <?php
            $id = 27;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/orbit.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
            
        <?php
            $id = 28;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/bubbaloo.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
            
        <?php
            $id = 29;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/paleta.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
        
        <?php
            $id = 30;
            $sql = "SELECT * from articulo where id_articulo = $id";
            $data = mysqli_query($conn, $sql);
            $datos = mysqli_num_rows($data);
            if($datos>0){
        ?>

            <IMG src="img/picafresa.jpg" align="left" width="150" height="125" >
                <section class="class-info-a" >
                    <form>
                        <p>
                            <?php include 'articulo.php';?>
                        </p>
                        <?php if($rol == 'Administrador' ){ ?>
                        <button class="editar"><a href="editar.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Editar</a></button>
                        <button class="eliminar"><a href="elimina.php?id=<?php echo $id; ?>&nombre=<?php echo $nombre; ?>&descripcion=<?php echo $descr; ?>&=<?php echo $id; ?>&precio=<?php echo $precio; ?>">Eliminar</a></button>
                        <?php }  ?></section>
                    </form>

                    <?php }else{} ?>
            
        
    </body>
    <?php
        mysqli_close($conn);
    ?>
</html>