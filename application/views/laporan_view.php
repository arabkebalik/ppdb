<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Laporan <small> Laporan PPDB</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
   	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Export data ke format Excel</h3>
					<div class="box-tools pull-right">   
                        <a class="btn btn-default" id="btn-export">Export to Excel</a>                                                         
                    </div>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table class="table">
						<tr>
							<th style="width: 10px">No</th>
							<th>Jurusan</th>
							<th style="width: 150px">Jumlah Pendaftar</th>
						</tr>
						<tr>
							<td>1.</td>
							<td>Teknik Komputer Jaringan</td>
							<td style="text-align:center;"><?php echo $tkj; ?></td>
						</tr>
						<tr>
							<td>2.</td>
							<td>Teknik Kendaraan RIngan</td>
							<td style="text-align:center;"><?php echo $tkr; ?></td>
						</tr>
						<tr>
							<td>3.</td>
							<td>Teknik Sepeda Motor</td>
							<td style="text-align:center;"><?php echo $tsm; ?></td>
						</tr>
						<tr>
							<td>4.</td>
							<td>Akuntansi</td>
							<td style="text-align:center;"><?php echo $ak; ?></td>
						</tr>
						<tr>
							<td>5.</td>
							<td>Administrasi Perkantoran</td>
							<td style="text-align:center;"><?php echo $ap; ?></td>
						</tr>
						<tr>
							<td>6.</td>
							<td>Pemasaran</td>
							<td style="text-align:center;"><?php echo $pe; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
        $('#btn-export').click(function(){
            window.open('<?php echo site_url(); ?>/laporan/export', '_self');
        });
	});
</script>