<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recruitment Management System | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />
        
   	<style type="text/css">
	#bd{
 	 background: #C3D0DE;
 	 background: -moz-linear-gradient(#C3D0DE 0%, #0058BB 100%);
 	 background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #C3D0DE), color-stop(100%, #0058BB));
 	 background: -webkit-linear-gradient(#C3D0DE 0%, #0058BB 100%);
 	 background: linear-gradient(#C3D0DE 0%, #0058BB 100%);		
	}
	</style> 
    </head>
    <body id="bd" class="login-page">
         <!-- Automatic element centering -->
    <div  class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <a href="../../index2.html"><b>Employee Assessment</b><br>System</a>
      </div>
      <!-- User name -->
     

      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
          <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/FactoryYellow.png') ?>" style="border:solid #ababab;"class="img-circle" alt="User Image"/>
        </div>
        <!-- /.lockscreen-image -->

        <!-- lockscreen credentials (contains the form) -->
        <form method="post" action="<?php echo site_url('C_Auth/login') ?>" class="lockscreen-credentials">
          <div class="input-group">
            <input type="text" name="noind" class="form-control"  placeholder="Type Employee Master Number" />
		<input type="password" name="password" class="form-control" placeholder="Type Your Password" />
            <div class="input-group-btn">
         <button class="btn"> <img src="assets/AdminLTE-2.0.5/dist/img/buttonarrow.png"/> </button>
            </div>
          </div>
        </form><!-- /.lockscreen credentials -->

      </div><!-- /.lockscreen-item -->
      <div class="help-block text-center">
        <font color="#fff">Enter your Username and Password to retrieve your session</font>
      </div>
      <div class='text-center'>
   <a data-toggle="modal" data-target="#myModal"><font color="#fff">Forgot Password</font></a>
      </div>
      <div class='lockscreen-footer text-center'>
        Copyright &copy; 2014-2015 <b><a href="http://quick.com" class='text-black'>CH. Karya Hidup Sentosa</a></b><br>
        All rights reserved
      </div>
    </div><!-- /.center -->


        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel" align="center">You are Forgot Password</h4> </div>
							<div class="modal-body"> If you forget your password, <br>please contact the IT section to reset the password on VOIP Ext : 12300 <br>
							<br>or click this link to configure your password 
							</div>
						<div class="modal-footer"> 
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
						</div> 
				</div>
			</div>
		</div>
    </body>
</html>