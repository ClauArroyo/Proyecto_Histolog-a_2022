<?php
header("Content-Type: text/html;charset=utf-8");
session_start();

$_SESSION['rol_usuario'] = 'profesor';

//si hay sesión iniciada cargamos código
if ( $_SESSION['rol_usuario'] == 'profesor')
{
            // formulario para subir el archivo
            echo '<br><br>

            <!-- El tipo de codificación de datos, enctype, se DEBE especificar como a continuación -->
            <form enctype="multipart/form-data" action="importa_alumnos_Moodle.php" method="POST">
                <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
                Elige el archivo que has bajado de Moodle: <input name="fichero" type="file" width="5px"> </input>
                <button type="submit" value="Enviar" class="btn btn-primary"> Enviar archivo</button>
            </form>
            ';

}//fin hay sesión
?>













