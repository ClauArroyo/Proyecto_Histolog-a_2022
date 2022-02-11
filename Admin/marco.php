             
<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">MENU ADMINISTRADOR _ HISTOLOGÍA UFV</a>
    </div>
</div>

<div class="" style="padding-top: 60px;">
    <div class="row">
        <div class="col-md-2 "  style="background-color:#eee;">
            <button class="btn btn-primary btn-block" id="sube" onclick="paso1()"> Sube una imagen </button>
            <br><br>
            <button class="btn btn-info btn-block" id="muestra" onclick="muestraImagenes()"> Muestra las imágenes </button>           

        </div>
        <div class="col-md-10">
            <div id="marcoImagenes"></div>
            <input type="text" class="form-control" id="nombreImagen" placeholder="Nombre con el que se guardará la imagen" onkeypress="paso2()">
            <button class="btn btn-success" id="boton2" onclick="paso3()"> subir </button>
            <div  id="center3" style = ""></div> 
            <br>

        </div>
    </div>
            <div  id="cargaArchivo" ></div> 
</div> 

         <script>
             $("#nombreImagen").hide();
             $("#boton2").hide();
            function paso1(){
                $("#marcoImagenes").hide();
                $("#muestra").hide();
                $("#nombreImagen").show();
                
                $("#center3").hide().load('Admin/editaCategorias.php');
                $("#cargaArchivo").hide().load('Admin/upload.php');
            }
            function paso2(){
                $("#boton2").show();
            }
            function paso3(){
                $("#center3").show().load('Admin/editaCategorias.php');
                //$("#cargaArchivo").show().load('Admin/upload.php');
            }    
            
            function muestraImagenes(){
                $("#marcoImagenes").show();
                $("#marcoImagenes").load('Admin/muestraImagenes.php');
            }
            
        </script> 












