<div class="row">
    <div class="col-md-9">
<table class="table table-striped table-bordered table-condensed">
<?php

    include('../funciones.php');
    
    $mysqli = conectaLi();
    
    //carga las categorias en un array
    $arrayCategorias=array();
    for ($i=1; $i<5; $i++){
        $consulta = $mysqli -> query("SELECT * FROM Categoria$i ;");
        while ($resultado = $consulta ->fetch_array()){
            $arrayCategorias[$i][$resultado['id_cat'.$i]] =  $resultado['nombre'];
        }
    }
    
    
    //carga las imágenes
    $consulta = $mysqli -> query("SELECT * FROM imagenes ;");

    
   
    $n=0;
    while ($resultado = $consulta ->fetch_array()){
        $n++;
        $nombreImagen = $resultado['nombreImagen'];

        
        //if (file_exists("imagenes/thumbnail/$nombreImagen")){                        
        ?>
<!--        ////////////////////////////////////////foto en grande en modal////////////////////////////////////////// -->
        <div class="modal fade" id="myModal<?php echo $n; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $resultado['titulo']; ?></h4>
              </div>
              <div class="modal-body">
                <img src="imagenes/<?php echo $nombreImagen; ?>" style="width: 570px; ">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<!--        ////////////////////////////////////////fin foto en grande en modal////////////////////////////////////////// -->

<!--        ////////////////////////////////////////edita linea en modal////////////////////////////////////////// -->
        <div class="modal fade" id="edicion<?php echo $n; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cambia el título de la imagen</h4>
              </div>
              <div class="modal-body">
                <input type="text" class="form-control" id="titulo<?php echo $n; ?>"  value="<?php echo $resultado['titulo']; ?>"><br/>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onClick="edita(<?php echo $n; ?>,<?php echo $resultado['id']; ?>);" data-dismiss="modal" >
                    Guardar cambios
                </button>
              </div>
            </div>
          </div>
        </div>
<!--        ////////////////////////////////////////fin edita linea en modal////////////////////////////////////////// -->


    <tr id="boton_<?php echo $n; ?>">
        <td><button  onClick="borra(<?php echo $n; ?>,<?php echo $resultado['id']; ?>);" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash" ></i></button></td>
        <td><a  href="#myModal<?php echo $n; ?>" role="button"  data-toggle="modal" data-target="#myModal<?php echo $n; ?>" > 
                <img src="imagenes/thumbnail/<?php echo $nombreImagen; ?>" >
            </a>
        </td>
        <td id="tituloFinal<?php echo $n; ?>"><?php echo $resultado['titulo']; ?> </td>
        <td><?php if ($resultado['cat1'] != 0) { echo $arrayCategorias[1][$resultado['cat1']];} else { echo '';} ?> </td>
        <td><?php if ($resultado['cat2'] != 0) { echo $arrayCategorias[2][$resultado['cat2']];} else { echo '';} ?> </td>
        <td><?php if ($resultado['cat3'] != 0) { echo $arrayCategorias[3][$resultado['cat3']];} else { echo '';} ?> </td>
        <td><?php if ($resultado['cat4'] != 0) { echo $arrayCategorias[4][$resultado['cat4']];} else { echo '';} ?> </td>
        <td><?php echo $nombreImagen; ?> </td>
        <td><button   class="btn btn-warning btn-xs"> 
                
                    <a  href="#myModal<?php echo $n; ?>" style="color:white;" role="button"  data-toggle="modal" data-target="#edicion<?php echo $n; ?>" > 
                        <i class="glyphicon glyphicon-edit" ></i>
                    </a>
                
            </button></td>
    </tr>
     <?php   
        //}
    }
    ?>
</table>
    </div>
    <div class="col-md-3">
        <div id="borraFoto"></div>
    </div>
</div>
        <script>
            function borra(numero, _idFoto){
                $('#boton_'+numero).hide("slow");
                $('#borraFoto').load('Admin/borraFoto.php', {
                    idFoto: _idFoto
                });
            }
            
            function edita(numero, _idFoto){
                var _titulo = $('#titulo'+numero).val();
                $('#tituloFinal'+numero).html(_titulo);
                $('#borraFoto').load('Admin/editaFoto.php', {
                    idFoto: _idFoto,
                    titulo: _titulo
                });
            }
        </script>


    

