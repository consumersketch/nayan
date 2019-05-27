<!DOCTYPE html>
<?php
if (isset ( $this->session->userdata ['logged_in'] )) {
	
	header ( "location: ".base_url()."index.php/Login/userLoginProcess");
}
?>
<html>
<head>
 <?php include('asset/include/head.php');?>
</head>
<body class="hold-transition login-page">
<?php
if (isset ( $logout_message )) {
	echo "<div class='message'>";
	echo $logout_message;
	echo "</div>";
}
?>
<?php
if (isset ( $message_display )) {
	echo "<div class='message'>";
	echo $message_display;
	echo "</div>";
}
?>
<div class="login-box">
		<div class="login-logo">
			<a href="<?php echo base_url();?>index.php/Login"><b>Demo</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>

    <?php echo form_open('Login/userLoginProcess'); ?>
		    <?php
						echo "<div class='error_msg'>";
						if (isset ( $error_message )) {
							echo $error_message;
						}
						echo validation_errors ();
						echo "</div>";
						?>
      <div class="form-group has-feedback">
				<input type="email" class="form-control" name="username"
					placeholder="Email"> <span
					class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password"
					placeholder="Password"> <span
					class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign
						In</button>
				</div>
				<!-- /.col -->
			</div>
    <?php echo form_close(); ?>   
  </div>
		<!-- /.login-box-body -->
	</div>

</body>
</html>
