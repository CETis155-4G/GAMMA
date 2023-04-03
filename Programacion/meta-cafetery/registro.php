<?php
    require "estados.php";
?>
<!--datos necesarios del html-->
<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/style_form.css" type="text/css">
        <title>Formulario Registro</title>
    </head>
    <body>
        <!--campos para registrarse-->
        <form action="insert.php" class="form-register" method="get"> 
            <h4 style="text-align: center;">Formulario Registro</h4>
            <input class="controls" type="text" name="apPaterno" id="apellidos" placeholder="Apellido paterno" required>
            <input class="controls" type="text" name="apMaterno" id="apellidos" placeholder="Apellido materno" required>
            <input class="controls" type="text" name="nombre" id="nombres" placeholder="Nombre" required>
            <input class="controls" type="date" name="fecha_nac" id="fecha" placeholder="Fecha de nacimiento" required>
            <select class="controls" type="text" name="estado" id="id_estado" placeholder="Estado"  required>
                    <option hidden selected>Selecciona tu Estado</option>
                    <!--estados-->
                    <?php
                    foreach ($estados as $estado) {
                        echo '<option value="'.$estado['id'].'">'.$estado['nombre'].'</option>';
                    }//end foreach
                    ?>
            </select>

            <div class="form-group col-md-4">
                    <select id="municipios" class="controls" name="municipio">
                        <option value="">Seleccionar municipio</option>
                    </select>
            </div>

            <script>
                document.querySelector('#id_estado').addEventListener('change', event => {
                    fetch('municipios.php?id_estado='+event.target.value)
                    .then(res => {
                        if(!res.ok) {
                            throw new Error('Hubo un error en la respuesta');
                        }//en if
                        return res.json();
                    })
                    .then(datos => {
                        let html = '<option value="">Seleccionar municipio</option>';
                        if(datos.data.length > 0) {
                            for (let i = 0; i < datos.data.length; i++) {
                                html += `<option value="${datos.data[i].id}">${datos.data[i].nombre}</option>`;
                            }//end for
                        }//end if
                        document.querySelector('#municipios').innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Ocurrió un error '+error);
                    });
                });
            </script>

            <br>

            <select class="controls" type="text" name="rol" required>
                <option hidden selected>Elige tu rol</option>
                <option>	Estudiante  </option>
                <option>	Administrador	</option>
            </select> <br>
            <input class="controls" type="number" name="numero" id="numero" placeholder="Numero telefonico" maxlength="10" 
            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
            <input class="controls" type="email" name="correo" id="correo" placeholder="Correo" required>
            <input class="controls" type="password" name="pswd" id="correo" placeholder="Contraseña" required>
            <button class="reg">registrarse</button>
            <!--link para ir a inciar sesion-->
            <p style="text-align: center;"><a href="login.html">¿Ya cuentas con una cuenta?</a></p>
        </form>
    </body>
</html>