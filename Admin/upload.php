
<style>
    .upload-drop-zone {
  height: 100px;
  border-width: 2px;
  margin-bottom: 20px;
}

/* skin.css Style*/
.upload-drop-zone {
  color: #ccc;
  border-style: dashed;
  border-color: #ccc;
  line-height: 100px;
  text-align: center
}
.upload-drop-zone.drop {
  color: #222;
  border-color: #222;
}
</style>

<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">

            <div class="row">
                
                <div class="col-md-11">
                        <div >
                            <h2 class="lead">Selecciona un fichero. Puedes arrastrarlo y soltarlo en esta ventana. </h2>

                            <br>
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-warning fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Elige foto...</span>
                                <!-- The file input field used as target for the file upload widget -->
                                <input id="fileupload" type="file" name="files[]" multiple>
                            </span>
                            <hr/>
                            <br>
                            <div class="upload-drop-zone" id="drop-zone">
                                    o arrástralo y suéltalo aquí
                            </div>
                            <br>
                            <!-- The global progress bar -->
                            <div id="progress" class="progress">
                                <div class="progress-bar progress-bar-success"></div>
                            </div>
                            <!-- The container for the uploaded files -->
                            <div id="files" class="files"></div>
                            
                            <br>

                        </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <button class="btn btn-success btn-block" id="botonFinal" onclick="pasoFinal()"> SUBIR FOTO </button>
            <div id="upload" class="files"></div>

<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>

<script>

function pasoFinal(){
    $("#center3").hide();
    $("#cargaArchivo").hide();
    $("#nombreImagen").hide();
    $("#boton2").hide();
    $("#muestra").show();
}  
            
$(function () {
    $("#botonFinal").hide();
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'server/php/';
 
 
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            var _nombreFinal = $('#nombreImagen').val();
            var _categoria1 = $('#categoria_1').text();  _categoria1 = _categoria1.split('_');
            var _categoria2 = $('#categoria_2').text();  _categoria2 = _categoria2.split('_');    
            var _categoria3 = $('#categoria_3').text();  _categoria3 = _categoria3.split('_');
            var _categoria4 = $('#categoria_4').text();  _categoria4 = _categoria4.split('_');
            
            $('#upload').load('Admin/renombraArchivo.php',{
                    nombreFinal: _nombreFinal,
                    fileName: file.name,
                    categoria1 : _categoria1[0],
                    categoria2 : _categoria2[0],
                    categoria3 : _categoria3[0],
                    categoria4 : _categoria4[0]
                });
            }); 
            $("#botonFinal").show(); 
            
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>

