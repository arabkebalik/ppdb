<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Datar Calon Siswa <small> Data Calon Siswa</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Calon Siswa</li>
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
                                <th>No. Daftar</th>
								<th>No. Ujian</th>
                                <th>Nama</th>
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
                                <td></td>
                            </tr>
                        </tbody>
						<tfoot>
							<tr>
								<th>No.</th>
                                <th>No. Daftar</th>
								<th>No. Ujian</th>
                                <th>Nama</th>
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

<!-- Modal Detail User -->
<div class="modal fade" id="modal-detail" tabindex="-999" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog" style="width: 800px;">
        <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Detail Data Calon Siswa</h4>
            </div>
            <div class="modal-body">
                <div class="box-body table-responsive">
                    <form id="form-detail" class="form-horizontal">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
								<label class="col-sm-4 control-label">No. Pendaftaran </label>
								<div class="col-sm-8">
									<input type="text" id="detail-pendaftaran" name="detail-pendaftaran" class="form-control input-sm" readonly="true" />
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-4 control-label">No. Ujian </label>
								<div class="col-sm-8">
									<input type="text" id="detail-ujian" name="detail-ujian" class="form-control input-sm" readonly="true" />
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-4 control-label">Nama </label>
								<div class="col-sm-8">
									<input type="text" id="detail-nama" name="detail-nama" class="form-control input-sm" readonly="true" />
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-4 control-label">Jenis Kelamin </label>
								<div class="col-sm-8">
									<input type="text" id="detail-kelamin" name="detail-kelamin" class="form-control input-sm" readonly="true" />
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-4 control-label">Asal Sekolah </label>
								<div class="col-sm-8">
									<input type="text" id="detail-asal" name="detail-asal" class="form-control input-sm" readonly="true" />
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tanggal Lahir </label>
                                <div class="col-sm-8">
                                    <input type="text" id="detail-tgl" name="detail-tgl" class="form-control input-sm" readonly="true" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Jurusan </label>
                                <div class="col-sm-8">
                                    <input type="text" id="detail-jurusan" name="detail-jurusan" class="form-control input-sm" readonly="true" />
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Nilai UN Bahasa Indonesia</label>
                                <div class="col-sm-8">
                                    <input type="text" id="detail-unbi" name="detail-unbi" class="form-control input-sm" readonly="true">
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Nilai UN Matematika</label>
                                <div class="col-sm-8">
                                        <input type="text" style="" id="detail-unmat" name="detail-unmat" class="form-control input-sm" readonly="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Nilai UN Bahasa Inggris</label>
                                <div class="col-sm-8">
                                    <input type="text" style="" id="detail-uning" name="detail-uning" class="form-control input-sm" readonly="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Nilai UN IPA</label>
                                <div class="col-sm-8">
                                    <input type="text" style="" id="detail-unipa" name="detail-unipa" class="form-control input-sm"readonly="true">
                                </div>
                            </div>
                            <div class="form-group">
								<label class="col-sm-4 control-label">Prestasi </label>
								<div class="col-sm-8">
									<input type="text" id="detail-prestasi" name="detail-prestasi" class="form-control input-sm" readonly="true" />
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-4 control-label">Jarak </label>
								<div class="col-sm-8">
									<input type="text" id="detail-jarak" name="detail-jarak" class="form-control input-sm" readonly="true" />
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-4 control-label">Ekonomi </label>
								<div class="col-sm-8">
									<input type="text" id="detail-ekonomi" name="detail-ekonomi" class="form-control input-sm" readonly="true" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Petugas </label>
								<div class="col-sm-8">
									<input type="text" id="detail-petugas" name="detail-petugas" class="form-control input-sm" readonly="true" />
								</div>
							</div>
                        </div>
                    </div>
                    </form>
				</div><!-- /.box-body -->          
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function resizeWindow(e){
        var newWindowWidth = $(window).width();
        var oTable = $('#table-pendaftar').dataTable();
        if(newWindowWidth > 1024){
                /* Do Something */
            oTable.fnSetColumnVis( 2, true );
            oTable.fnSetColumnVis( 4, true );
        }else if((newWindowWidth >= 600) && (newWindowWidth <= 1050)){
                /* Do Something */
            oTable.fnSetColumnVis( 2, false );
            oTable.fnSetColumnVis( 4, false );
        }else if(newWindowWidth < 600){
            
        }
    }
    
    function modaldetail(pendaftaran){
        $.getJSON('<?php echo site_url()?>/pendaftaran/get_pendaftaran_detail/'+pendaftaran, function(obj) {
            
            $('#detail-pendaftaran').val(obj.detail_pendaftaran);
            $('#detail-ujian').val(obj.detail_ujian);
            $('#detail-nama').val(obj.detail_nama);
            $('#detail-asal').val(obj.detail_asal);
            $('#detail-kelamin').val(obj.detail_kelamin);
            $('#detail-jurusan').val(obj.detail_jurusan);
            $('#detail-unbi').val(obj.detail_unbi);
            $('#detail-unmat').val(obj.detail_unmat);
            $('#detail-uning').val(obj.detail_uning);
            $('#detail-unipa').val(obj.detail_unipa);
            $('#detail-prestasi').val(obj.detail_prestasi);
            $('#detail-jarak').val(obj.detail_jarak);
            $('#detail-ekonomi').val(obj.detail_ekonomi);
            $('#detail-tgl').val(obj.detail_tgl);
			$('#detail-petugas').val(obj.detail_petugas);
            
			/* loop over each object in the array to create rows
		    $.each( data, function( index, item){
		    		
			});*/
		});
        
        $('#modal-detail').modal('show');
    }
    
    function cetak(pendaftaran){
        newWindow('<?php echo site_url()?>/pendaftaran/cetak/'+pendaftaran,'Cetak Pekerjaan');
    }
    
	$(document).ready(function() {
        $('#modal-detail').on('hidden.bs.modal', function (e) {
            $('#detail-pendaftaran').val('');
            $('#detail-ujian').val('');
            $('#detail-nama').val('');
            $('#detail-asal').val('');
            $('#detail-kelamin').val('');
            $('#detail-jurusan').val('');
            $('#detail-prestasi').val('');
            $('#detail-jarak').val('');
            $('#detail-ekonomi').val('');
            $('#detail-tgl').val('');
        });
       
		$('#table-pendaftar').dataTable({
				"sPaginationType": "bootstrap",
				"bProcessing": false,
				"bServerSide": true, 
				"iDisplayLength":25,
				"aoColumns": [
					{"bSearchable": false, "bSortable": false, "sWidth":"20px"},
					{"bSearchable": false, "bSortable": false, "sWidth":"80px"},
					{"bSearchable": false, "bSortable": false, "sWidth":"80px"},
                    {"bSearchable": false, "bSortable": false},
					{"bSearchable": false, "bSortable": false},
                    {"bSearchable": false, "bSortable": false},
					{"bSearchable": false, "bSortable": false, "sWidth":"90px"}
					],
				"sAjaxSource": "<?php echo site_url();?>/pendaftaran/get_pendaftaran/",
        });
        $('div.dataTables_filter input').focus();
                
        $(window).bind("resize", resizeWindow);
        resizeWindow();
	});
</script>