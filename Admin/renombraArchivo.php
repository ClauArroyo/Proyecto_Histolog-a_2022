<?php

    include('../funciones.php');
    
    

    $mysqli = conectaLi();
    //obtiene el id mas alto de la BBDD para asignarlo de nombre de imagen
    //le suma uno para que coincida y le pone 0 a la izquierda para que se ordenen luego correctamente
    $consulta = $mysqli -> query("SELECT MAX(id) FROM imagenes");
    $resultado = $consulta ->fetch_array();
    $id_mas_alto = $resultado['MAX(id)'];
    $id_mas_alto++;
    $id_mas_alto = sprintf('%04d', $id_mas_alto);
    $nombreFinal = 'imagen'.$id_mas_alto.'.jpg';
    ///
    
    $titulo = $_POST['nombreFinal'];
    $fileName = $_POST['fileName'];
    $categoria1 = $_POST['categoria1'];
    $categoria2 = $_POST['categoria2'];
    $categoria3 = $_POST['categoria3'];
    $categoria4 = $_POST['categoria4'];
    
    echo $categoria1;
echo $nombreFinal;
copy('../server/php/files/'.$fileName, '../imagenes/'.$nombreFinal);
copy('../server/php/files/thumbnail/'.$fileName, '../imagenes/thumbnail/'.$nombreFinal);

unlink('../server/php/files/'.$fileName);
unlink('../server/php/files/thumbnail/'.$fileName);


            
    $consulta = $mysqli -> query("INSERT INTO imagenes (id, nombreImagen, nombreCorto, titulo, cat1, cat2, cat3, cat4) "
            . "VALUES (NULL, '$nombreFinal', 'j', '$titulo', '$categoria1', '$categoria2', '$categoria3', '$categoria4');");
//    $num_filas = $consulta -> num_rows;
//    
//    if ($num_filas > 0){
//    }

