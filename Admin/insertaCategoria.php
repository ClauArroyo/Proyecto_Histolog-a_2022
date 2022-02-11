<?php

require('../funciones.php');

$mysqli = conectaLi();
$catPadre = isset($_POST['catPadre']) ? $_POST['catPadre'] : false;
$cat = isset($_POST['cat']) ? $_POST['cat'] : false;
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;

switch ($cat){
    case '1': $consulta = "Insert into Categoria1 (id_cat1, nombre) VALUES (NULL, '$nombre')"; break;
    case '2': $consulta = "Insert into Categoria2 (id_cat1, id_cat2, nombre) VALUES ('$catPadre', NULL, '$nombre')"; break;
    case '3': $consulta = "Insert into Categoria3 (id_cat2, id_cat3, nombre) VALUES ('$catPadre', NULL, '$nombre')"; break;
    case '4': $consulta = "Insert into Categoria4 (id_cat3, id_cat4, nombre) VALUES ('$catPadre', NULL, '$nombre')"; break;
}
$inserta_categoria = $mysqli->query($consulta);


//recargo sólo el botón desplegable correspondiente
    echo '<div class="btn-group" id="boton_'.$cat.'">';
    echo'<button style="width:150px;" class="btn btn-success dropdown-toggle" data-toggle="dropdown"  type="button" id="categoria_'.$cat.'"> Categoria '.$cat.' <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></button>
            <ul class="dropdown-menu" id="list_'.$cat.'">';
    $categoria = "Categoria".$cat;
    $consulta_categorias = $mysqli->query("select * from $categoria ");
    $n_categorias = $consulta_categorias->num_rows;
    for ($a = 0; $a < $n_categorias; $a++) {
        $r = $consulta_categorias->fetch_array();
        echo '<li><a href="#" onclick="selector(\'' . $r['nombre'] . '\',\''.$cat.'\',\'' . $r['id_cat'.$cat.''] . '\')">'. $r['id_cat'.$cat.''].' _ '  . $r['nombre'] . '</a></li>';
    }
    echo '<li id="cat'.$cat.'"><a href="#" >  ';
    echo '<input id="texto'.$cat.'" type="text" class="form-control" placeholder="pulsa el + para guardar" >'
    . '<span class="glyphicon glyphicon-plus" aria-hidden="true" onclick="agregaCategoria(\''.$cat.'\')"></span></a></li>';
    echo '</ul>';
    echo '</div>'; 
?>

