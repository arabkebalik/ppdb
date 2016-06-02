<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Dashboard <small> Jumlah Siswa Pendaftar</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

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
	$.getJSON('<?php echo site_url()?>/dashboard/get_jumlah_pendaftar/', function(obj) {
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