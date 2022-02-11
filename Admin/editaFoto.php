<?php
    include('../funciones.php');
    
    $mysqli = conectaLi();
    
    $idFoto = $_POST['idFoto'];
    $titulo = $_POST['titulo'];
    
    $consulta = $mysqli -> query("UPDATE imagenes set titulo = '$titulo' where id='$idFoto';");

    echo "Actualizado correctamente el id " .$idFoto;
    
    ?>

