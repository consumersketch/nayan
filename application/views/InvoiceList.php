<!DOCTYPE html>
<html>
<head>
  <?php include('asset/include/head.php');?>
  <link rel="stylesheet" href="<?php echo base_url()?>/asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
        Invoice List
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
      <div class="row">
      <div class="col-xs-12">
      <div class="col-sm-3">
   		<div class="form-group">
                  <label>Select client</label>
                  <select class="form-control" name="clientId" id="clientId">
                    <option value="">Select Client</option>
                     <?php  
                     foreach ($clientsList as $client)  
			         {  
			         ?>
			         <option value="<?php echo $client['client_id'];?>"><?php echo $client['client_name'];?></option>
			         <?php
						}  
        		 	 ?> 
                  </select>
                </div>
      </div>
       <div class="col-sm-3">
   		<div class="form-group">
                  <label>Select product</label>
                  <select class="form-control" name="products" id="products">
                    <option value="">Select Product</option>
                  </select>
                </div>
      </div>
       <div class="col-sm-3">
   		<div class="form-group">
                  <label>Select Invoice Period</label>
                  <select class="form-control" name="invoicePeriod" id="invoicePeriod">
                  <option value="">Select Invoice Period</option>
                    <option value="LastMonthtoDate">Last Month to Date</option>
                    <option value="ThisMonth">This Month</option>
                    <option value="ThisYear">This Year</option>
                    <option value="LastYear">Last Year</option>
                   </select>
                </div>
      </div>
      <div class="col-sm-3">
   		<div class="form-group">
   		          <label>&nbsp;</label>
                  <button name="searchInvoice" id="searchInvoice" style="margin-top: 27px;">Search</button>
                </div>
      </div>
      </div>
        <div class="col-xs-12">
          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Sr No</th>
                  <th>Invoice Num</th>
                  <th>Invoice Date</th>
                  <th>Product</th>
                  <th>Qty</th>
                  <th>Price</th>
                  <th>Total</th>
                </tr>
                
                </thead>
                <tbody id="ajaxList">
                 <?php  
                 $i=1;
                 foreach ($invoiceList as $invoice)  
			         {  
			     ?>
                <tr>
                  <td><?php echo $i;?></td>	
                  <td><?php echo $invoice['invoice_num'];?></td>
                  <td><?php echo $invoice['invoice_date'];?></td>
                  <td><?php  echo $invoice['product_description'];?></td>
                  <td><?php echo $invoice['qty'];?></td>
                  <td><?php echo $invoice['price'];?></td>
                  <td><?php echo number_format($invoice['qty']*$invoice['price'],2);?></td>
                 </tr>
                 <?php
					$i++;
			         }  
        		 ?> 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="<?php echo base_url(); ?>/asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>/asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>/asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>/asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>/asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/asset/dist/js/demo.js"></script>
<!-- AdminLTE for custom purposes -->
<script src="<?php echo base_url(); ?>/asset/dist/js/custom.js"></script>
<script src="<?php echo base_url(); ?>/asset/dist/js/jquery.number.min.js"></script>


<!-- page script -->

</body>
</html>
