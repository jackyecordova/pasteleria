<?php  include './conexion.php'; 

$venta=$mysqli->query("select MAX(idventa) AS id from ventadulce")or die($mysqli->error);
    $ventadulce=$venta->fetch_assoc();
                  $noventa=$ventadulce['id'];
                  $novent=$noventa +1;
   

?>
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
               Sandra <a class="pull-right" style="font-size:18px; text-decoration:none;"><?php 
//echo date("d-m-Y H:i:s");
                
                echo date('l, d M Y');
              ?></a> <br>venta No_ <?php echo $novent ?>
              </div>
      </div>
        <div class="row" style="padding:10px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de venta </h3>  
                                      <a  class="btn btn-success  btnagregardulce pull-right" 
                                       data-toggle="modal"
                                       data-target="#agregar"
                                      >
                                        Agregar Producto </a>

              <div class="box-tools">
               
              </div>
            </div>
            <!-- /.Lista de productos que se van a comprar............................................................... -->
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
                <?php  $consulta=$mysqli->query("select * from detventadulce ")or die($mysqli->error);
            while ( $fila=mysqli_fetch_array($consulta)) { ?>
                <tr>
                  <td> <?php echo $fila['codigo'] ?></td>
                  <td><?php echo $fila['nombre'] ?></td>
                  <td><?php echo $fila['precio'] ?></td>
                  <td><?php echo $fila['cantidad'] ?></td>
                  <td> <span class="label label-success"><?php echo $fila['precio'] ?></span>   </td>
                <?php  // $consulta2=$mysqli->query("select dulces.*,detventadulce.* from detventadulce 
                       // inner JOIN dulces on detventadulce.".echo $fila['codigo']."=dulces.codigo")or die($mysqli->error);
                       //  $dulces=$consulta2->fetch_assoc();
                      // $dulces2=$dulces['nombre'];?> 
                   <td> <a  class="btn btn-danger btn-xs btneliminardulce" 
                                       data-toggle="modal"
                                       data-target="#eliminardulce"
                                       data-codigoeliminar="<?php echo $fila['id_detventa'] ?>"
                                      >
                                         <i class="fa fa-trash"></i>  </a></td>
                </tr>
               <?php } ?>
              </table>
            </div>
             <!-- /.Lista de productos que se van a comprar.............. -->
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
                       <!-- /.Cancelar la venta completa y dejar vacia la lista............................. -->
                              <button type="button" class="btn btn-success  btncancelar"
                               style=" background: rgb(255, 255, 255);
                                color: rgb(0, 166, 90);"
                                     data-toggle="modal"
                                       data-target="#cancelar"
                                       data-idventacancelar="<?php echo $novent ?>">
                               Cancelar</button>
                                <!-- /.Pagar la lista agregada y agregarse a la tabla de venta................... -->
                                   <button type="button" class="btn btn-success  btnpagar" 
                                      style=" background: rgb(255, 255, 255);
                                      color: rgb(0, 166, 90);margin-right:100px;
                                      "
                                       data-toggle="modal"
                                       data-target="#eliminar"
                                       data-codigopagar="<?php echo $fila['codigo'] ?>"
                                       data-nombrepagar="<?php echo $fila['nombre'] ?>"
                                        >Pagar</button>
                                        Total: <?php      
                                        echo "1234";
                                      ?>
                              </p>
                              <br><p>.</p>
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
  <!-- /.Agregar a la Lista de productos que se van a comprar............................................................... -->
  <div id="agregar" class="modal fade" role="dialog">
    <div class="col-md-6" style="margin-left: 25%;margin-top:10%;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Nuevo Producto</h3><button type="button" class="btn btn-default pull-right" data-dismiss="modal" style="color:#00c0ef;">    Cancelar
              </button>  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../codigos/ventadulce.php" method="post">
              <div class="box-body">
                <div class="form-group"  style="margin-left:10%;">
                  <label for="inputEmail3"      class="col-sm-2 control-label">Buscar</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  placeholder="Por Código o Por Nombre"
                    id="buscar"
                  name="buscar">
                  </div>
                   <div class="col-sm-9">
                   <table class="table table-hover" style="margin-top:10px;">
                       <tr >
                           <th style="width:10%;">Código</th>
                           <th style="width:50%;" >Nombre</th>
                           <th style="width:10%;">Precio</th>
                          <!-- <th  style="width:1%;">Cantidad</th>-->
                           <th class="pull-right" style="width:1%;"></th>
                        </tr>
                         <?php  $consulta=$mysqli->query("select * from dulces ")or die($mysqli->error);
                      while ( $fila=mysqli_fetch_array($consulta)) { ?>
                       
                        <tr id="contenido" name="contenido">
                               <td> <?php echo $fila['codigo'] ?></td>
                                <td><?php echo $fila['nombre'] ?></td>
                                <td><?php echo $fila['precio'] ?></td>
                             
                                <td><button type="submit" class="btn btn-success btn-xs pull-right btnagregar" style="margin-left:1%;margin-right:45%;"
                                        data-codigoagregar="<?php echo $fila['codigo'] ?>"
                                        data-nombreagregar="<?php echo $fila['nombre'] ?>"
                                        data-precioagregar="<?php echo $fila['precio'] ?>"
                                        data-idventaagregar="<?php echo $novent ?>"
                                        >
                                        <a  style="text-decoration: none;color:white;"> <i class="fa fa-plus"></i></a>
                                          </button></td>

                        </tr>
                        <?php } ?>
                    </table>
                    </div>
                </div>
               
                 
              
              </div>
              <!-- /.box-body -->
              <div class="box-footer"> 
               
                         
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
         
          <!-- /.box -->
        </div>
  </div> <!-- ...............................................<a href="...php" style="text-decoration: none;color:white;">.</a>....................... -->

 <!--.................................................... -->
  <!-- /.Eliminar de la Lista de productos que se van a comprar............................................................... -->
  <div id="eliminardulce" class="modal fade" role="dialog">
    <div class="col-md-6" style="margin-left: 25%;margin-top:10%;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border" style="text-align: center;">
              <h3 class="box-title" >Desea Eliminarlo? </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../codigos/eliminardulce.php" method="post">
              <div class="box-body">
                <div class="form-group"  style="margin-left:10%;">
                  <input type="hidden" id="codigoeliminar" name="codigoeliminar">
                   
                   <br>
                   
                </div>
               
                 
              
              </div>
              <!-- /.box-body -->
              <div class="box-footer"> 
                <button type="submit" class="btn btn-success pull-right" style="margin-left:1%;margin-right:38%;">
                        Eliminar</button>
            <button type="button" class="btn btn-default pull-right" data-dismiss="modal" style="color:red;">    Cancelar
              </button>               
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
         
          <!-- /.box -->
        </div>
  </div>  <!-- /.Eliminar de la Lista de productos que se van a comprar............................................................... -->
   <!-- /. Cancelar toda la Lista de productos que se van a comprar............................................................... -->
  <div id="cancelar" class="modal fade" role="dialog">
    <div class="col-md-6" style="margin-left: 25%;margin-top:10%;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border" style="text-align: center;">
              <h3 class="box-title" >Desea Cancelarlo? </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="./cancelardulce.php" method="post">
              <div class="box-body">
                <div class="form-group"  style="margin-left:10%;">
                 <!-- <input type="text" id="idcancelar" name="idcancelar">-->
                   <label  id="idcancelar" name="idcancelar"></label>
                   
                   <br>
                   
                </div>
               
                 
              
              </div>
              <!-- /.box-body -->
              <div class="box-footer"> 
                <button type="submit" class="btn btn-success pull-right" style="margin-left:1%;margin-right:38%;">
                        Si</button>
            <button type="button" class="btn btn-default pull-right" data-dismiss="modal" style="color:red;">   No
              </button>               
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
         
          <!-- /.box -->
        </div>
  </div>  <!-- /.cancelar de la Lista de productos que se van a comprar............................................................... -->
   <!-- ......................................................................................................... -->

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

<script>
  $(".btnagregar").on('click',function(){
      var codigoagregar=$(this).data('codigoagregar');
      var precioagregar=$(this).data('precioagregar');
     // var noventagregar=$(this).data('idventaagregar');
      var nombreagregar=$(this).data('nombreagregar');         
         $("#codigoagrear").val(codigoagregar);
         $("#nombreagregar").val(nombreagregar) ;   
         $("#precioagregar").val(precioagregar) ;   
       //  $("#idventaagregar").val(noventagregar) ; 

 });
   $(".btneliminardulce").on('click',function(){
   var codigoeliminar=$(this).data('codigoeliminar');
   var nombreeliminar=$(this).data('nombreeliminar');
   $("#codigoeliminar").val(codigoeliminar);
   $("#nombreeliminar").text(nombre) ;   
 });
   $(".btncancelar").on('click',function(){
     var idventacancelar=$(this).data('idventacancelar');
     $("#idcancelar").text(idventacancelar) ;   
 });
</script>

<script >
          $(document).ready(function(){
              $("#buscar").on('keyup',function(){ 

                  $("#contenido").find("td").remove();

                          $.ajax({
                                  url: "../codigos/buscardulce.php",
                                  method:"POST",
                                  data:{ 
                                    texto:$("#buscar").val()
                                  }
                                }).done(function(respuesta){
                                  $(div).find("td").append(respuesta);
                                  alert();
                                    });
                   });
             
          });
  
</script>
</body>
</html>
