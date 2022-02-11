<?php
    include('../funciones.php');
    
    $mysqli = conectaLi();
    
    $idFoto = $_POST['idFoto'];
    $consulta = $mysqli -> query("SELECT * FROM imagenes where id='$idFoto';");
    $resultado = $consulta ->fetch_array();
    $fileName = $resultado['nombreImagen'];
    unlink('../imagenes/'.$fileName);
    unlink('../imagenes/thumbnail/'.$fileName);

    $consulta_borrado = $mysqli -> query("DELETE FROM imagenes where id = '$idFoto' ;");
    echo "Borrado correctamente el id " .$idFoto;
    
    ?>

