<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Edit Data Calon Siswa <small> Edit Data Calon Siswa</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
   	<div class="row">
		<div class="col-xs-12">
			<div class="box">
                <div class="box-body">
					<table id="table-pendaftar" class="table table-bordered table-hover" width="100%">
                        <thead>
							<tr>
								<th>No.</th>
                                <th>Nama</th>
								<th>Alamat</th>
                                <th>Asal Sekolah</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
							<tr>
								<td></td>
								<td></td>
                                <td></td>
								<td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
						<tfoot>
							<tr>
								<th>No.</th>
                                <th>Nama</th>
								<th>Alamat</th>
                                <th>Asal Sekolah</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	
		// untuk dataTable
		$('#table-user').dataTable({
				"sPaginationType": "bootstrap",
				"bProcessing": false,
				"bServerSide": true, 
				"iDisplayLength":10,
				"aoColumns": [
					{"bSearchable": false, "bSortable": false, "sWidth":"20px"},
					{"bSearchable": false, "bSortable": false, "sWidth":"60px"},
					{"bSearchable": false, "bSortable": false},
					{"bSearchable": false, "bSortable": false},
                    {"bSearchable": false, "bSortable": false},
					{"bSearchable": false, "bSortable": false, "sWidth":"80px"}
					],
				"sAjaxSource": "<?php echo site_url();?>/user/get_users/",
        });
        $('div.dataTables_filter input').focus();
	});
</script>