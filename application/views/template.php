<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PPDB SMKN 1 PML | <?php echo $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>public/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>public/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url()?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url()?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url()?>public/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url()?>public/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url()?>public/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url()?>public/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url()?>public/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- Datatables style -->
        <link href="<?php echo base_url()?>public/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>public/css/jQueryUI/jquery-ui-1.10.3.custom.min.css">
		
		
		<!-- jQuery -->
        <script src="<?php echo base_url()?>public/js/jquery-1.11.0.min.js"></script>
		<!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url()?>public/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url()?>public/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>public/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url()?>public/js/raphael-min.js"></script>
        <script src="<?php echo base_url()?>public/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url()?>public/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url()?>public/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url()?>public/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url()?>public/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url()?>public/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url()?>public/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url()?>public/js/AdminLTE/app.js" type="text/javascript"></script>        
		
		
        <!-- Datatables -->
        <script src="<?php echo base_url()?>public/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>public/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>public/js/plugins/datatables/dataTables.reload.js" type="text/javascript"></script>
                
		<script src="<?php echo base_url()?>public/js/upj.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue fixed">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo site_url()?>/" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                SMKN 1 PML
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
							
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php if(!empty($login_nama)){ echo $login_nama; }else{ echo 'Administrator';} ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url()?>public/img/avatar.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php if(!empty($login_nama)){ echo $login_nama; }else{ echo 'Administrator';} ?>
                                        <small>SMKN 1 Pemalang</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Logs</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a id="ubah-password" data-toggle="modal" href="#modal-password" style="cursor: pointer;">Ubah Password</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo site_url()?>/welcome/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url()?>public/img/avatar.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php if(!empty($login_nama)){ echo $login_nama; }else{ echo 'Administrator';} ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url()?>/welcome">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						
                        <?php
                            if(!empty($menu)){
                                echo $menu;
                            } 
                        ?>
						
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <?php
                if(!empty($content)){
                    echo $content;
                }
                if(!empty($inside)){
                    echo $inside;
                }
                ?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <div id="spinner" style="position:fixed; top: 50%; left: 50%; margin-left: -50px; margin-top: -50px;z-index: 999999;display: none;">
        <!-- <div id="spinner" style="position: fixed; bottom: 0; right: 0; background: white; border-radius: 5px 0px 0px 5px; padding: 10px 15px; font-size: 16px; z-index: 999999; display: none"> -->
            <img src="<?php echo base_url()?>public/img/ajax-loader1.gif" />
        </div>
		
        
        <!-- Change Password -->
		<div class="modal fade" id="modal-password" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			<div class="modal-dialog" style="width: 350px;">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Ubah Password</h4>
					</div>
					<div class="modal-body">
                        <span id="form-pesan">
                        </span>
						<?php echo form_open('dashboard/password','id="form-password"')?>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control" id="password-old" name="password-old" placeholder="Old Password">
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" id="password-new" name="password-new" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" id="password-confirm" name="password-confirm" placeholder="Confirm Password">
                                </div>
                            </div>
                        <?php echo form_close(); ?>          
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						<button id="password-submit" type="button" class="btn btn-primary">Ubah Password</button>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
                //Form Ubah Password
                $('#modal-password').on('shown.bs.modal', function (e) {
                    $('#form-pesan').html('');
                    $('#password-old').val('');
                    $('#password-new').val('');
                    $('#password-confirm').val('');
                    $('#password-old').focus();
                });
                
                $('#password-submit').click(function(){
                    $('#form-password').submit();
                });
                
                $('#form-password').submit(function(){        
                    $.ajax({
            			url:"<?php echo site_url()?>/dashboard/password",
            			type:"POST",
            			data:$('#form-password').serialize(),
            			cache: false,
            		    success:function(respon){
            		    	var obj = $.parseJSON(respon);
            		        if(obj.status==1){
            		            $('#form-pesan').html(pesan_succ('Password berhasil diubah !'));
                                setTimeout(function(){$('#modal-password').modal('hide')}, 3000);
            		        }else{
                                $('#form-pesan').html(pesan_err(obj.error));
            		        }
            			}
            		});
            		return false;
                });
                           
                $(document).bind("ajaxSend", function() {
    		        $("#spinner").show();
    		    }).bind("ajaxStop", function() {
    		        $("#spinner").hide();
    		    }).bind("ajaxError", function() {
    		        $("#spinner").hide();
    		    });
			});			
		</script>
		
    </body>
</html>