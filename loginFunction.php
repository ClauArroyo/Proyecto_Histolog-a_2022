<?php

session_start();  //inicia la sesión del navegador en el servidor PHP
                  //o la continúa si ya estuviera iniciada

include ('misFunciones.php');

function limpiaPalabra($palabra){
    //filtro muy básico para evitar la inyeccion SQL
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, '"');
    return $palabra;
}

$mysqli = conectaBBDD();

 $fieldNombre = limpiaPalabra($_POST['fieldNombre']);
 
 $fieldPassword = limpiaPalabra($_POST['fieldPassword']);




 $resultadoQuery = $mysqli -> query("SELECT * FROM usuarios WHERE nombreUsuario='$fieldNombre' ");
 $numUsuarios = $resultadoQuery -> num_rows;
 if ($numUsuarios > 0){
     $r = $resultadoQuery -> fetch_array();
     if (password_verify($fieldPassword, $r['userPass'])){
        //en la variable de sesión "nombreUsuario" guardo el nombre de usuario
        $_SESSION['nombreUsuario'] = $fieldNombre;
        //en la variable de sesión idUsuario guardo el id de usuario leido de la BBDD
        $_SESSION['idUsuario'] = $r['idUsuario'];
        //muestro la pantalla de la aplicación
        require 'index_inicial.php';
    }
    else {
        //muestro una pantalla de error porque la contraseña está mal
        $message = "Contraseña incorrecta";
        echo "<script type='text/javascript'>
        window.alert('$message');
        location.reload();
        </script>";
        
    }
 }
    else {
        //muestro una pantalla de error porque el nombre de usuario está mal
        $message = "Usuario incorrecto";
        echo "<script type='text/javascript'>
        window.alert('$message');
        location.reload();
        </script>";
    }