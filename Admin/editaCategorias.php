<?php

session_start();

require('../funciones.php');

$mysqli = conectaLi();
////////////////////////////////////////////////
//este bucle genera los cuatro botones, y los alimenta con los valores que hay en la base de datos
//de momento muestra todos los items de una categoría, en el futuro debería mostrar sólo los que corresponden a esa categoría
for ($i=1; $i<5; $i++){
    echo '<div class="btn-group" id="boton_'.$i.'">';
    echo'<button style="width:150px;" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"  type="button" id="categoria_'.$i.'"> Categoria '.$i.' <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></button>
            <ul class="dropdown-menu" id="list_'.$i.'">';
    $categoria = "Categoria".$i;
    $consulta_categorias = $mysqli->query("select * from $categoria ");
    $n_categorias = $consulta_categorias->num_rows;
    for ($a = 0; $a < $n_categorias; $a++) {
        $r = $consulta_categorias->fetch_array();
        echo '<li><a href="#" onclick="selector(\'' . $r['nombre'] . '\',\''.$i.'\',\'' . $r['id_cat'.$i.''] . '\')">'. $r['id_cat'.$i.''].' _ '  . $r['nombre'] . '</a></li>';
    }
    echo '<li id="cat'.$i.'"><a href="#" >  ';
    echo '<input id="texto'.$i.'" type="text" class="form-control" placeholder="pulsa el + para guardar" >'
    . '<span class="glyphicon glyphicon-plus" aria-hidden="true" onclick="agregaCategoria(\''.$i.'\')"></span></a></li>';
    echo '</ul>';
    echo '</div>'; 
}

//?>
<script>
    //cambia el texto del desplegable, y el color
    function selector(eleccion,categoria,padre) {
        $("#cargaArchivo").show().load('Admin/upload.php');
        $("#categoria_"+categoria).text(padre+" _ "+eleccion).removeClass("btn-warning").addClass("btn-success");
    }
    //agrega una nueva categoría al pulsar en el + del desplegable
    function agregaCategoria(categoria) {
        var _nombre = $('#texto'+categoria).val();
        var padre = parseInt(categoria);
        padre--;
        var _catPadre = $("#categoria_"+padre).text();
        var _arrayPadre = _catPadre.split("_");
        console.log(categoria);
        $('#boton_'+categoria).load('Admin/insertaCategoria.php',{
            catPadre : _arrayPadre[0],
            cat:categoria,
            nombre: _nombre
        });
        
    }
    

</script>

<?php

?>

