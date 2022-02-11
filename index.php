<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HISTOLOGIA UFV</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">

    </head>
    <style>
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #3c8dbc;
        }
    </style>

    <body>
       
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#3c8dbc;">
            
        </nav>
        
        <br/> <br/> <br/> <br/>  
        <div class="container-fluid" id="principal">
            <div class="row-fluid">

                <div class="col-md-4" style="text-align: left;">
                    <img class="inner" src="img/logo_cabecera.png" />
                </div>
                <div class="col-md-4">
                    <!-- <form class="form-signin" method="post"> -->
                        <h2 class="form-signin-heading">Herramienta de prácticas Histológicas UFV</h2>
                        <input id="cajaNombre" type="text" class="input-block-level btn-block" placeholder="Usuario">
                        <input id="cajaPassword" type="password" class="input-block-level btn-block" placeholder="Contraseña">
                        <br/>
                        
                    <!-- </form> -->
                    <button onclick="iniciar()" class="btn btn-large btn-primary btn-block" type="submit" >Entrar</button>
                </div>
                
            </div><!--/row-->
        </div>
        


        <footer class="footer">
            <div class="container">
                <br/>
                <p style="text-align: center; color:white;">Esta web es de uso exclusivo de los alumnos matriculados en Histología en el Grado de Medicina de la UFV</p>
            </div>
        </footer>

    </body>
    <script src="js/jquery-1.11.3.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
    $('body').css('background-image', 'url(img/fondoHistologia.jpg)');
    function iniciar(){
            //leo el contenido de las cajas de nombre y contraseña.
            var _fieldNombre = $('#cajaNombre').val();
            var _fieldPassword = $('#cajaPassword').val();
            //Ejecuto login.php pasandole el nombre y la contraseña introducidos.
            $('#principal').load("loginFunction.php",{
                fieldNombre : _fieldNombre,
                fieldPassword : _fieldPassword
            });
        };
    </script>
</html>

