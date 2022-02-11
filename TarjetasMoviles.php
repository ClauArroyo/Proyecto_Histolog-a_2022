<?php
session_start();
    include('funciones.php');
    
    $mysqli = conectaLi();
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
    <style>

        .foto{ 
            width: 100%; 
            height: 250px;
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
            
        }
        
        
.card {
	width: 100%;
	height: 250px;
        
}

.card .front{
	text-align: center;
	font-size: 30px;
	font-weight: 200;
}

.card .back{
	text-align: center;
	font-size: 30px;
	font-weight: 200;
	background-color: #eee;
}

.card img{
	width: 100%;
	height: 100%;
}
.card > .back{
	word-wrap: break-word;
}



    </style>
    <div class="row">
        <div class="col-md-3">
            <div id="tarjeta1" class="card" >
                <div id="foto1" class="imagen front" ><img src="imagenes/<?php echo $listaIds[$im1][2]; ?>" id="imagen1" class="foto"></div>
                <div class=" back" ><h4 class="foto" style="top: 40%;position:absolute;"> <?php echo $listaIds[$im1][1]; ?></h4></div>
            </div> 
        </div>
        <div class="col-md-3">
            <div id="tarjeta2" class="card" >
                <div id="foto2" class="imagen front" ><img src="imagenes/<?php echo $listaIds[$im2][2]; ?>" id="imagen2" class="foto"></div>
                <div class=" back" ><h4 class="foto" style="top: 40%;position:absolute;"> <?php echo $listaIds[$im2][1]; ?></h4></div>
            </div> 
        </div>
        <div class="col-md-3">
            <div id="tarjeta3" class="card" >
                <div id="foto3" class="imagen front" ><img src="imagenes/<?php echo $listaIds[$im3][2]; ?>" id="imagen3" class="foto"></div>
                <div class=" back" ><h4 class="foto" style="top: 40%;position:absolute;"> <?php echo $listaIds[$im3][1]; ?></h4></div>
            </div>
        </div>
        <div class="col-md-3">
            <div id="tarjeta4" class="card" >
                <div id="foto4" class="imagen front" ><img src="imagenes/<?php echo $listaIds[$im4][2]; ?>" id="imagen4" class="foto"></div>
                <div class=" back" ><h4 class="foto" style="top: 40%;position:absolute;"> <?php echo $listaIds[$im4][1]; ?></h4></div>
            </div>
        </div>
    </div>        
<!--    <div id="foto2" class="imagen front" style="top:90px;left:700px;"><img src="imagenes/<?php echo $listaIds[$im2][2];?>" id="imagen2" class="foto"></div>
    <div id="foto3" class="imagen front" style="top:380px;left:200px;"><img src="imagenes/<?php echo $listaIds[$im3][2];?>" id="imagen3" class="foto"></div>
    <div id="foto4" class="imagen front" style="top:380px;left:700px;"><img src="imagenes/<?php echo $listaIds[$im4][2];?>" id="imagen4" class="foto"></div>-->
    
</div>
<!-- carga el plugin que gira las fotos -->
<script src="js/jquery.flip.min.js"></script>
<script>
    //estos dos id están en el index_alumnos, en cada pantalla tenéis que cambiar lo que pone acorde con el menú en que estáis
    $("#tipoEjercicio").text("PRÁCTICAS");
    $("#tituloActividad").text("Tarjetas móviles");
    $("#tarjeta1").flip();
    $("#tarjeta2").flip();
    $("#tarjeta3").flip();
    $("#tarjeta4").flip();
</script>   
