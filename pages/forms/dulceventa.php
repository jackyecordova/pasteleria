<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
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
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <?php include "./barramenu.php" ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">

      <div class="row">


      <div class="pad margin no-print">
              <div class="callout callout-info" style="margin-bottom: 0!important;">
                <h4> Pastelería y Dulcería</h4>
               Sandra <a class="pull-right" style="font-size:18px;"><?php 
//echo date("d-m-Y H:i:s");
                
                echo date('l, d M Y');
              ?></a>
              </div>
      </div>
        <div class="row" style="padding:10px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de venta   <button type="button" class="btn btn-primary">Nueva venta</button></h3>

              <div class="box-tools">
               
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th style="width:10%;">Código</th>
                  <th>Producto</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Total</th>
                  <th style="width:1%;"></th>
                </tr>
                <tr>
                  <td> <?php  ?></td>
                  <td><?php  ?></td>
                  <td><?php  ?></td>
                  <td><?php  ?></td>
                  <td> <span class="label label-success"><?php  ?></span>   </td>
                   <td> <a  class="btn btn-danger btn-xs btnEliminar" 
                                       data-toggle="modal"
                                       data-target="#eliminar"
                                       data-codigoeliminar="<?php echo $fila['codigo'] ?>"
                                       data-nombreeliminar="<?php echo $fila['nombre'] ?>">
                                         <i class="fa fa-trash"></i>  </a></td>
                </tr>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
        

              <div class="pad margin no-print">
                    <div class="callout callout-success" style="margin-bottom: 0!important;">
                      <label> </label>
                     <p class="pull-right" style="font-size:18px;margin-right:3%;"> 

                     <button type="button" class="btn btn-success  btnpagar" 
                        style=" background: rgb(255, 255, 255);
                        color: rgb(0, 166, 90);margin-right:100px;
                                      "
                                       data-toggle="modal"
                                       data-target="#eliminar"
                                       data-codigoeliminar="<?php echo $fila['codigo'] ?>"
                                       data-nombreeliminar="<?php echo $fila['nombre'] ?>"
                                        >Pagar</button>
                      Total: <?php      
                      echo "1234";
                    ?>
                    </p><br><p>.</p>
                    </div>
            </div>
               

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

 <!--.................................................... -->
  <div id="agregar" class="modal fade" role="dialog">
    

    <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Nuevo Producto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../codigos/nuevodulce.php" method="post">
              <div class="box-body">
                <div class="form-group"  style="margin-left:10%;">
                  <label for="inputEmail3"      class="col-sm-2 control-label">Codigo</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  placeholder="Codigo"
                    id="codigo"
                  name="codigo">
                  </div>
                </div>
                <div class="form-group"  style="margin-left:10%;">
                  <label for="text" class="col-sm-2 control-label">Nombre</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  placeholder="Nombre del Producto"
                    id="nombre"
                  name="nombre">
                  </div>
                </div>
                <div class="form-group"  style="margin-left:10%;">
                  <label for="text" class="col-sm-2 control-label">Existente</label>

                  <div class="col-sm-6" >
                    <input type="number" class="form-control" placeholder="Existencia del producto" 
                    id="existente"
                    name="existente">
                  </div>
                </div>
                  <div class="form-group"  style="margin-left:10%;">
                  <label for="text" class="col-sm-2 control-label">Precio</label>

                  <div class="col-sm-6" >
                    <input type="number" class="form-control" placeholder="Precio del Producto" 
                    id="precio"
                    name="precio">
                  </div>
                </div>

                 <div class="form-group">
                  <div class="col-sm-6" style="margin-left:40%;">
                  <label for="exampleInputFile">Agregar imagen</label>
                  <input type="file" id="exampleInputFile">

                 
                  </div>
                </div>

              
              </div>
              <!-- /.box-body -->
              <div class="box-footer"> 
                <button type="submit" class="btn btn-info pull-right" style="margin-left:1%;margin-right:45%;">Agregar</button>
            <button type="submit" class="btn btn-default pull-right" >   <a href="../tables/dulcesinventario.php"> Cancelar</a>
              </button>               
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
         
          <!-- /.box -->
        </div>
  </div> <!-- ....................................................................... -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <a href="#">Jaquelline Córdova </a>
    </div>
    <strong>Pastelería y Dulcería Sandra</strong>
  </footer>

 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
