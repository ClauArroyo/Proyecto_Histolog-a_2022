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
<?php
//session_start();
//$_SESSION[''] = '';
?>
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Logo -->
        <a href="" class="logo">
            
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>UFV</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>MEDICINA</b>UFV</span>
          </a>
          <!-- Sidebar toggle button-->
        
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="img/LOGOUFV.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><i class="fa fa-h-square"></i> MEDICINA UFV</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="img/LOGOUFV.png" class="img-circle" alt="User Image">
                    
                  </li>
                  
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/LOGOUFV.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>MEDICINA UFV</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menú </li>
            
           <li class="treeview">
              <a href="#" onclick="cargaAdmin();">
                <i class="fa fa-cogs"></i> <span>ADMIN</span>
                <i class="fa fa-angle-right pull-right"></i>
              </a>

            </li>
<!-- 
            <li class="treeview">
              <a href="#" onclick="cargaAlumnos();">
                <i class="fa fa-pencil-square-o"></i> <span>Importa la lista de alumnos</span>
                <i class="fa fa-angle-right pull-right"></i>
              </a>

            </li> -->
            <li class="treeview">
              <a href="#" onclick="cargaAlumnos();">
                <i class="fa fa-graduation-cap"></i> <span>Menú Alumnos</span>
                <i class="fa fa-angle-right pull-right"></i>
              </a>

            </li>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Herramienta de prácticas Histológicas UFV
            <small>Medicina UFV</small>
            <small id="carga"></small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-table"></i></li>
            <li class="active">Creado en Cetys@UFV</li>
          </ol>
            <div id="center">
                
            </div>
        </section>

      
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.1.0
          
        </div>
        
      </footer>

      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>


  </body>
     <script>
    function cargaFoto(){
        $("#center").load('cargaFoto.php');
    }
    function cargaAlumnos(){
        window.location ="index_alumnos.php";
    }
    function cargaAdmin(){
        $("#center").load("Admin/adminis.php");
    }    
     </script>  
</html>