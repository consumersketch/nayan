<?php
// require 'include/login_check.php';
// require 'include/database.php';

?>
<!DOCTYPE html>
<html>
<head>
 <?php include('asset/include/head.php');?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('asset/include/header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
   <?php include('asset/include/sidebar.php'); ?>
	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo getClientsCount(); ?></h3>

              <p>Total Clients</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
         
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo getProductsCount(); ?></h3>

              <p>Total Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
           
          </div>
        </div>
       
      </div>
      <!-- /.row -->
    
  
<?php //include('asset/include/footer.php'); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->   
  </aside>
</div>
<!-- ./wrapper -->
<?php include('asset/include/footerScript.php'); ?>
</body>
</html>
