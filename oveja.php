<?php
session_start();
    include('funciones.php');
    
    $mysqli = conectaLi();
//$_SESSION[''] = '';
?>
    <style>

        .foto{ 
            width: 250px; 
            height: 150px; 
            padding: 0.5em;
        }
        .caja{ 
            width: 250px; 
            height: 30px; 
            padding: 0em;
            text-align: center;
            vertical-align: middle;
            line-height: 30px;
            background-color:#0089db;
            color:#ffffff;
        }
        .imagen{
            position: absolute; 
            left:200px;
        }
    </style>
<?php
        $pos1 = rand(1,4);
        $pos2 = rand(1,4); while ($pos2 == $pos1){$pos2 = rand(1,4);}
        $pos3 = rand(1,4); while (($pos3 == $pos1) || ($pos3 == $pos2)){$pos3 = rand(1,4);}
        $pos4 = rand(1,4); while (($pos4 == $pos1) || ($pos4 == $pos2) || ($pos4 == $pos3)){$pos4 = rand(1,4);}
        
        $listaIds = array();
        $consulta = $mysqli -> query("SELECT * FROM imagenes ;");
        $n=0;
        while ($resultado = $consulta ->fetch_array()){
            $listaIds[$n][0] = $resultado['id'];
            $listaIds[$n][1] = $resultado['titulo'];
            $listaIds[$n][2] = $resultado['nombreImagen'];
            $n++;
        }
        $im1 = rand(0,$n-1);
        $im2 = rand(0,$n-1);  while ($im2 == $im1){$im2 = rand(0,$n-1);}
        $im3 = rand(0,$n-1);  while (($im3 == $im1) || ($im3 == $im2)){$im3 = rand(0,$n-1);}
        $im4 = rand(0,$n-1);  while (($im4 == $im1) || ($im4 == $im2) || ($im4 == $im3)){$im4 = rand(0,$n-1);}
?>  
<div>
    <div id="marcador" style="position:absolute; top: 90px; left:600px;"></div>
    <div id="foto1" class="imagen" style="top: 90px;"><img src="imagenes/<?php echo $listaIds[$im1][2];?>" id="imagen1" class="foto"></div>
    <div id="foto2" class="imagen" style="top:240px;"><img src="imagenes/<?php echo $listaIds[$im2][2];?>" id="imagen2" class="foto"></div>
    <div id="foto3" class="imagen" style="top:390px;"><img src="imagenes/<?php echo $listaIds[$im3][2];?>" id="imagen3" class="foto"></div>
    <div id="foto4" class="imagen" style="top:530px;"><img src="imagenes/<?php echo $listaIds[$im4][2];?>" id="imagen4" class="foto"></div>
    
    <div id="texto1" class="caja" style="top:<?php echo ($pos1-1)*150 ; ?>px; left:500px;"><?php echo $listaIds[$im1][1];?></div>
    <div id="texto2" class="caja" style="top:<?php echo ($pos2-1)*150 ; ?>px; left:500px;"><?php echo $listaIds[$im2][1];?></div>
    <div id="texto3" class="caja" style="top:<?php echo ($pos3-1)*150 ; ?>px; left:500px;"><?php echo $listaIds[$im3][1];?></div>
    <div id="texto4" class="caja" style="top:<?php echo ($pos4-1)*150 ; ?>px; left:500px;"><?php echo $listaIds[$im4][1];?></div>
    

</div>

<script>
    //estos dos id están en el index_alumnos, en cada pantalla tenéis que cambiar lo que pone acorde con el menú en que estáis
    $("#tipoEjercicio").text("PRÁCTICAS");
    $("#tituloActividad").text("Cada oveja con su pareja");
    var puntuacion = 0;
    var faltan = 4; 
        //para mover los textos a las fotos
    $('.caja').draggable();
    
    function actualizaMarcador(){
        //actualiza el marcador en pantalla
        if (faltan == 0) {
            $('#marcador').html("<h3>puntuación final: " + puntuacion + " puntos</h3>");
            //tiene que guardar el marcador del alumno en la BBDD
        }
        else {
            $('#marcador').html("<h3>puntuación: " + puntuacion + "</h3>");
        }
    }
    
    $('#imagen1').droppable({ 
        drop: function(event, ui) {
            var draggableId = ui.draggable.attr("id");
            if (draggableId == 'texto1'){
                puntuacion++;
                $('#texto1').draggable('disable').css({'background-color':'#008900'});
                faltan--;
            }
            else{
                ui.draggable.css({'background-color':'#890000'}).animate({'left':'500px', 'background-color':'#0089db'},'slow');
                puntuacion--;
            }
            actualizaMarcador();
          }
    });
 
     $('#imagen2').droppable({ 
        drop: function(event, ui) {
            var draggableId = ui.draggable.attr("id");
            if (draggableId == 'texto2'){
                puntuacion++;
                $('#texto2').draggable('disable').css({'background-color':'#008900'});
                faltan--;
            }
            else{
                ui.draggable.css({'background-color':'#890000'}).animate({'left':'500px', 'background-color':'#0089db'},'slow');
                puntuacion--;
            }
            actualizaMarcador();
          }
    });
    
        $('#imagen3').droppable({ 
        drop: function(event, ui) {
            var draggableId = ui.draggable.attr("id");
            if (draggableId == 'texto3'){
                puntuacion++;
                $('#texto3').draggable('disable').css({'background-color':'#008900'});
                faltan--;
            }
            else{
                ui.draggable.css({'background-color':'#890000'}).animate({'left':'500px', 'background-color':'#0089db'},'slow');
                puntuacion--;
            }
            actualizaMarcador();
          }
    });
    
        $('#imagen4').droppable({ 
        drop: function(event, ui) {
            var draggableId = ui.draggable.attr("id");
            if (draggableId == 'texto4'){
                puntuacion++;
                $('#texto4').draggable('disable').css({'background-color':'#008900'});
                faltan--;
            }
            else{
                ui.draggable.css({'background-color':'#890000'}).animate({'left':'500px', 'background-color':'#0089db'},'slow');
                puntuacion--;
            }
            actualizaMarcador();
          }
    });
</script>   
