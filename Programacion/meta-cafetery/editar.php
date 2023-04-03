<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
        <link rel="stylesheet" href="styles/style_edit.css" type="text/css">

    </head>

    <body>
        <form action="modif.php" class="edit" method="get">
            <h4>Edita Producto</h4>
            <?php 
                $id = ($_GET['id']);
                $nombre = ($_GET['nombre']);
                $descr = ($_GET['descripcion']);
                $precio = ($_GET['precio']);
            ?>

            <input class="controlls" type="text" name="nombre" value="<?php echo $nombre?>" placeholder="Articulo" required><br>
            <input class="controlls"  type="text" name="descripcion" value="<?php echo $descr?>" placeholder="descripcion" required><br>
            <input class="controlls" type="number" name="precio" value="<?php echo $precio?>" placeholder="precio" required><br>

            <input type="number" name="id" value="<?php echo $id?>" hidden>

            <button class="guardar">Guardar</button>
        </form>
        
    </body>
</html>

<?php ?>