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
			<!-- Add the class icon to your logo image or logo icon to add the margining -->
            <a href="" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Jurnal <small>PPDB</small>
            </a>
            
	            <nav class="navbar navbar-static-top" role="navigation">
		            <div class="navbar-right">
		            <a href="<?php echo base_url()?>index.php/welcome" class="logo">
	                <!-- Add the class icon to your logo image or logo icon to add the margining -->
	                Login
	            </a>
	            </div>
	            </nav>
	        
            
        </header>

        <div id="spinner" style="position:fixed; top: 50%; left: 50%; margin-left: -50px; margin-top: -50px;z-index: 999999;display: none;">
        <!-- <div id="spinner" style="position: fixed; bottom: 0; right: 0; background: white; border-radius: 5px 0px 0px 5px; padding: 10px 15px; font-size: 16px; z-index: 999999; display: none"> -->
            <img src="<?php echo base_url()?>public/img/ajax-loader1.gif" />
        </div>
		
        
       
		
		
<br><br>


<!-- Main content -->
<section class="content">
    <div class="row">
		<div class="col-xs-12">
			<!-- small box -->
			<div class="small-box bg-purple">
				<div class="inner">
					<h3 id="jml-total">0</h3>
					<p>Total Pendaftar</p>
				</div>
				<div class="icon">
					<i class="ion ion-ios7-person"></i>
				</div>
				<span class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></span>
			</div>
		</div><!-- ./col -->
		<div class="col-xs-6">
			<!-- small box -->
			<div class="small-box bg-orange">
				<div class="inner">
					<h3 id="jml-tkj">0</h3>
					<p>Teknik Komputer Jaringan</p>
				</div>
				<div class="icon">
					<i class="ion ion-ios7-monitor"></i>
				</div>
				<span class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></span>
			</div>
		</div><!-- ./col -->
		<div class="col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3 id="jml-tkr">0</h3>
					<p>Teknik Kendaraan Ringan</p>
				</div>
				<div class="icon">
					<i class="ion ion-model-s"></i>
				</div>
				<span class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></span>
			</div>
		</div><!-- ./col -->
		<div class="col-xs-6">
			<!-- small box -->
			<div class="small-box bg-grey">
				<div class="inner">
					<h3 id="jml-tsm">0</h3>
					<p>Teknik Sepeda Motor</p>
				</div>
				<div class="icon">
					<i class="ion ion-ios7-gear"></i>
				</div>
				<span class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></span>
			</div>
		</div><!-- ./col -->
		<div class="col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3 id="jml-ak">0</h3>
					<p>Akuntansi</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<span class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></span>
			</div>
		</div><!-- ./col -->
		<div class="col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
					<h3 id="jml-ap">0</h3>
					<p>Administrasi Perkantoran</p>
				</div>
				<div class="icon">
					<i class="ion ion-document-text"></i>
				</div>
				<span class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></span>
			</div>
		</div><!-- ./col -->
		<div class="col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3 id="jml-pe">0</h3>
					<p>Pemasaran</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
				<span class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></span>
			</div>
		</div><!-- ./col -->
	</div><!-- /.row -->
</section><!-- /.content -->


<script type="text/javascript">
function refresh_jumlah(){
	$.getJSON('<?php echo site_url()?>/jurnal/get_jumlah_pendaftar/', function(obj) {
				$('#jml-tkj').html(obj.tkj);
				$('#jml-tkr').html(obj.tkr);
				$('#jml-tsm').html(obj.tsm);
				$('#jml-ak').html(obj.ak);
				$('#jml-ap').html(obj.ap);
				$('#jml-pe').html(obj.pe);
				$('#jml-total').html(obj.total);
	});
}


$(document).ready(function() {
	refresh_jumlah();
	var auto_refresh = setInterval(
		function(){
			refresh_jumlah();
		}, 60000
	)
});
</script>