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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<?php
session_start();
//$_SESSION[''] = '';
?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>UFV</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>MEDICINA</b>UFV</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- este botón muestra el tipo de ejercicio en el que estamos-->
            <button id="tipoEjercicio" class="btn" style="background-color: #3c8dbc; color:white;padding-top: 15px;">Bienvenido a la web de prácticas Histológicas</button>
            
            <!-- Sidebar toggle button-->
                            
         
          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="LOGOUFV.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">MEDICINA UFV</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="LOGOUFV.png" class="img-circle" alt="User Image">
                    
                  </li>
                  
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <ul class="sidebar-menu">
            <li class="header">Menú </li>
            
            <li class="treeview">
                
                <h5><font color="#24AAff">ESTUDIEMOS</font></h5>
            
            </li>

            <li class="treeview">

                <a href="">Profesor Portatil</a>

            </li>
            <li class="treeview">

                <a onclick="cargaTarjetasMoviles()">Tarjetas Móviles</a>

            </li>
            <li class="treeview">

                <a href="">Help</a>

            </li>
            <li class="treeview">
                
                <h5><font color="#24AAff">PRACTIQUEMOS</font></h5>
            
            </li>
            <li class="treeview">

                <a onclick="cargaQuienSoy()">Adivina quien soy</a>

            </li>
            <li class="treeview">

                <a onclick="cargaOveja()">Cada oveja con su pareja</a>

            </li>
            <li class="treeview">

                <a onclick="cargaDeDondeVienes()">¿De donde vienes tu?</a>

            </li>
            <li class="treeview">

                <a href="">¿Quien es quien?</a>

            </li>
            <li class="treeview">

                <h5><font color="#24AAff">TEORÍA</font></h5>

            </li>
            <li class="treeview">

                <a href="">Comprueba lo que sabes</a>

            </li>
            <li class="treeview">

                <h5><a href=""><font color="#24AAff">Mis Resultados</font></a></h5>

            </li>

            
  
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" >
            <div id="tituloActividad" style="text-align: center; " ></div>
        </section>
        <section class="content">
            <div id="contenido">
                
            </div>
        </section>

        <!-- /.content -->
      </div><!-- /.content-wrapper -->


    </div><!-- ./wrapper -->

      <footer class="footer">
        <div class="pull-right hidden-xs" style="text-align: center; color:white;">
            Creado en Cetys@UFV
          <b>Version</b> 0.1.0  
        </div>
      </footer>
    <!-- jQuery 2.1.4 -->
    <script src="js/jquery-1.11.3.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="js/jquery-ui.min.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>


  </body>
     <script>
    function cargaFoto(){
        $("#center").load('cargaFoto.php');
    }
        function cargaTarjetasMoviles(){
            $("#contenido").load('TarjetasMoviles.php');
        }
        function cargaDeDondeVienes(){
            $("#contenido").load('dondeVienes.php');
        }
        function cargaOveja(){
          console.log("SI")
            $("#contenido").load('oveja.php');
        }
        function cargaQuienSoy(){
            $("#contenido").load('quienSoy.php');
        }
        //Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
        $.widget.bridge('uibutton', $.ui.button);
     </script>  
</html>