<!-- Modal Edit User -->
<div class="modal fade" id="modal-edit" tabindex="-999" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit Data Calon Siswa</h4>
            </div>
            <div class="modal-body">
                <div class="box-body table-responsive">
                        <span id="form-pesan-edit">
                        </span>
						<?php echo form_open('pendaftaran/edit','id="form-edit" class="form-horizontal"')?>
                        <input type="hidden" id="edit-jurusan" name="edit-jurusan" />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">No. Pendaftaran </label>
        								<div class="col-sm-5">
        									<input type="text" id="edit-pendaftaran" name="edit-pendaftaran" class="form-control input-sm" readonly="true" />
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">No. Ujian </label>
        								<div class="col-sm-5">
        									<input type="text" id="edit-ujian" name="edit-ujian" class="form-control input-sm" placeholder="Nomor Ujian Nasional" readonly="true" />
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">Nama</label>
        								<div class="col-sm-8">
        									<input type="text" style="text-transform: uppercase" id="edit-nama" name="edit-nama" class="form-control input-sm" placeholder="Nama Lengkap">
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">Asal Sekolah</label>
        								<div class="col-sm-8">
        									<input type="text" style="text-transform: uppercase" id="edit-asal" name="edit-asal" class="form-control input-sm" placeholder="Asal Sekolah">
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">Tanggal Lahir</label>
        								<div class="col-sm-6">
        									<div class="input-group date form_date" id="edit-open-tgl" data-date="1997-09-16T05:25:07Z" data-date-format="dd MM yyyy" data-link-field="edit-tgl" data-link-format="yyyy-mm-dd">
        										<input class="form-control input-sm" id="tgl-lahir-format" name="tgl-lahir-format" type="text" value="" readonly>
        										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        									</div>
        									<input type="hidden" id="edit-tgl" name="edit-tgl" value="" />
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">Jenis Kelamin</label>
        								<div class="col-sm-4">
        									<select id="edit-kelamin" name="edit-kelamin" class="form-control input-sm">
        										<option value="Laki Laki">Laki Laki</option>
        										<option value="Perempuan">Perempuan</option>
        									</select>
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">Jurusan Ke 1</label>
        								<div class="col-sm-8">
        									<select id="edit-jurusan-1" name="edit-jurusan-1" class="form-control input-sm" disabled="true">
        										<option value="1">Teknik Komputer Jaringan</option>
        										<option value="2">Teknik Kendaraan Ringan</option>
        										<option value="3">Teknik Sepeda Motor</option>
        										<option value="4">Akuntansi</option>
        										<option value="5">Administrasi Perkantoran</option>
                                                <option value="6">Pemasaran</option>
        									</select>
        								</div>
        							</div>
        						</div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jurusan Ke 2</label>
                                        <div class="col-sm-8">
                                            <select id="edit-jurusan-2" name="edit-jurusan-2" class="form-control input-sm">
                                                <option value="0">Pilihan Jurusan Ke 2</option>
                                                <option value="1">Teknik Komputer Jaringan</option>
                                                <option value="2">Teknik Kendaraan Ringan</option>
                                                <option value="3">Teknik Sepeda Motor</option>
                                                <option value="4">Akuntansi</option>
                                                <option value="5">Administrasi Perkantoran</option>
                                                <option value="6">Pemasaran</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                
                                <div class="row">   
                                <div class="form-group">
                                        <label class="col-sm-3 control-label">Nilai UN Bahasa Indonesia</label>
                                        <div class="col-sm-8">
                                            <input type="number" style="" id="edit-unbi" name="edit-unbi" class="form-control input-sm" placeholder="Nilai UN Bahasa Indonesia">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nilai UN Matematika</label>
                                        <div class="col-sm-8">
                                            <input type="number" style="" id="edit-unmat" name="edit-unmat" class="form-control input-sm" placeholder="Nilai UN Matematika">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nilai UN Bahasa Inggris</label>
                                        <div class="col-sm-8">
                                            <input type="number" style="" id="edit-uning" name="edit-uning" class="form-control input-sm" placeholder="Nilai UN Bahasa Inggris">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nilai UN IPA</label>
                                        <div class="col-sm-8">
                                            <input type="number" style="" id="edit-unipa" name="edit-unipa" class="form-control input-sm" placeholder="Nilai UN IPA">
                                        </div>
                                    </div>
                                </div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">Prestasi</label>
        								<div class="col-sm-6">
        									<select id="edit-prestasi-status" name="edit-prestasi-status" class="form-control input-sm">
        										<option value="0">Tidak Ada Penghargaan</option>
        										<option value="1">Perorangan</option>
        										<option value="0.5">Sampai 5 (lima) Orang</option>
        										<option value="0.3">Sampai 10 (sepuluh) Orang</option>
        										<option value="0.3">Ketua Regu lebih dari 10 (sepuluh) Orang</option>
        										<option value="0.2">Anggota Regu lebih dari 10 (sepuluh) Orang</option>
        									</select>
        								</div>
        								<div class="col-sm-2">
        									<input type="text" tabindex=-1 id="edit-prestasi-total" name="edit-prestasi-total" class="form-control input-sm" value="0" readonly>
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label"></label>
        								<div class="col-sm-6">
        									<select id="edit-prestasi-tingkat" name="edit-prestasi-tingkat" class="form-control input-sm" disabled="true">
        										<option value="200">Tingkat Nasional/Internasional</option>
        										<option value="150">Tingkat Provinsi</option>
        										<option value="100">Tingkat Kabupaten</option>
        										<option value="50">Tingkat Kecamatan</option>
        									</select>
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label"></label>
        								<div class="col-sm-6">
        									<select id="edit-prestasi-juara" name="edit-prestasi-juara" class="form-control input-sm" disabled="true">
        										<option value="50">Juara 1</option>
        										<option value="40">Juara 2</option>
        										<option value="30">Juara 3</option>
        										<option value="20">Juara 4</option>
        										<option value="10">Juara 5</option>
        									</select>
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">Jarak</label>
        								<div class="col-sm-6">
        									<select id="edit-jarak" name="edit-jarak" class="form-control input-sm">
        										<option value="250">Satu Desa dengan sekolah</option>
        										<option value="200">Desa lain yang berhimpitan dengan Sekolah dalam satu kecamatan</option>
        										<option value="150">Desa lain yang tidak berhimpitan dalam satu kecamatan dengan sekolah</option>
        										<option value="100">Kecamatan lain dalam kabupaten</option>
        										<option value="50">Kabupaten lain</option>
        									</select>
        								</div>
        								<div class="col-sm-2">
        									<input type="text" tabindex=-1 id="edit-jarak-total" name="edit-jarak-total" class="form-control input-sm" value="250" readonly>
        								</div>
        							</div>
        						</div>
        						<div class="row">	
        							<div class="form-group">
        								<label class="col-sm-3 control-label">Faktor Ekonomi</label>
        								<div class="col-sm-6">
        									<select id="edit-ekonomi" name="edit-ekonomi" class="form-control input-sm">
        										<option value="0">Mampu</option>
        										<option value="100">Tidak Mampu</option>
        									</select>
        								</div>
        								<div class="col-sm-2">
        									<input type="text" tabindex=-1 id="edit-ekonomi-total" name="edit-ekonomi-total" class="form-control input-sm" value="0" readonly>
        								</div>
        							</div>
        						</div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
				</div><!-- /.box-body -->          
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button id="btn-edit" type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus User -->
<div class="modal fade" id="modal-hapus" tabindex="-999" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 450px;">
        <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Hapus Data Calon Siswa</h4>
            </div>
            <div class="modal-body">
                <div class="box-body table-responsive">
                        <span id="form-pesan-hapus">
                        </span>
						
						<?php echo form_open('pendaftaran/hapus','id="form-hapus"')?>
    
                                <div class="form-group">
                                    <label>No. Pendaftaran</label>
                                    <input type="text" class="form-control input-sm" id="hapus-pendaftaran" name="hapus-pendaftaran" readonly="true" />
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control input-sm" id="hapus-nama" name="hapus-nama" readonly="true" />
                                </div>
                                <div class="form-group">
                                    <label>Asal Sekolah</label>
                                    <input type="text" class="form-control input-sm" id="hapus-asal" name="hapus-asal" readonly="true" />
                                </div>                            
                        <?php echo form_close(); ?>
				</div><!-- /.box-body -->          
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button id="btn-hapus" type="button" class="btn btn-primary">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function clear_edit(){
        $('#edit-pendaftaran').val('');
        $('#edit-uan').val('');
        $('#edit-nama').val('');
        $('#edit-asal').val('');
        
        $('#edit-open-tgl').val('');
        $('#edit-jurusan').val('');
		$('#edit-jurusan-1').val('1').change();
		$('#edit-jurusan-2').val('0').change();
		$('#edit-prestasi-status').val('0').change();
		$('#edit-prestasi-tingkat').val('200').change();
		$('#edit-prestasi-juara').val('50').change();
		$('#edit-prestasi-tingkat').prop( "disabled", true );
		$('#edit-prestasi-juara').prop( "disabled", true );
        $('#edit-jarak').val('250').change();
		$('#edit-ekonomi').val('0').change();
        $('#edit-unbi').val('100').change();
        $('#edit-unmat').val('100').change();
        $('#edit-uning').val('100').change();
        $('#edit-unipa').val('100').change();
        $('#edit-prestasi-total').val('0');
        $('#edit-jarak-total').val('250');
        $('#edit-ekonomi-total').val('0');
    }
    
    function modaledit(pendaftaran){		
		$.getJSON('<?php echo site_url()?>/pendaftaran/get_pendaftaran_edit/'+pendaftaran, function(obj) {
            $('#edit-pendaftaran').val(obj.edit_pendaftaran);
            $('#edit-ujian').val(obj.edit_ujian);
            $('#edit-nama').val(obj.edit_nama);
            $('#edit-asal').val(obj.edit_asal);
            $('#edit-open-tgl').datetimepicker('setDate', new Date(obj.edit_tgl));
            $('#edit-jurusan').val(obj.edit_jurusan_1);
            $('#edit-jurusan-1').val(obj.edit_jurusan_1).change();
            $('#edit-jurusan-2').val(obj.edit_jurusan_2).change();
            $('#edit-kelamin').val(obj.edit_kelamin).change();
            $('#edit-unbi').val(obj.edit_unbi).change();
            $('#edit-unmat').val(obj.edit_unmat).change();
            $('#edit-uning').val(obj.edit_uning).change();
            $('#edit-unipa').val(obj.edit_unipa).change();
            $('#edit-prestasi-status').val(obj.edit_prestasi_status).change();
            $('#edit-prestasi-tingkat').val(obj.edit_prestasi_tingkat).change();
            $('#edit-prestasi-juara').val(obj.edit_prestasi_juara).change();
            $('#edit-prestasi-total').val(obj.edit_prestasi_total);
            $('#edit-jarak').val(obj.edit_jarak).change();
            $('#edit-jarak-total').val(obj.edit_jarak);
            $('#edit-ekonomi').val(obj.edit_ekonomi).change();
            $('#edit-ekonomi-total').val(obj.edit_ekonomi);
		});
		
        $('#modal-edit').modal('show');
    }
    
    function modalhapus(pendaftaran, nama, asal){
        $('#hapus-pendaftaran').val(pendaftaran);
        $('#hapus-nama').val(nama);
        $('#hapus-asal').val(asal);
        
        $('#modal-hapus').modal('show');
    }
    
    function prestasi(){
		var status = parseFloat($('#edit-prestasi-status').val());
		var tingkat = parseInt($('#edit-prestasi-tingkat').val());
		var juara = parseInt($('#edit-prestasi-juara').val());
		
		var hasil = status * (tingkat+juara);
		$('#edit-prestasi-total').val(hasil);
	}
        
	$(document).ready(function() {
        $('#modal-edit').on('show.bs.modal', function (e) {
            
        });
        
        $('#modal-edit').on('hidden.bs.modal', function (e) {
            clear_edit();
        });
       
        $('#edit-open-tgl').datetimepicker({
			language:  'en',
			weekStart: 1,
			todayBtn:  0,
			autoclose: 1,
			startView: "decade",
			minView: 2,
			forceParse: 0
		});
		
		$("#edit-prestasi-status").change(function() {
			var value = $('#edit-prestasi-status').val();
			if(value=='0'){
				$('#edit-prestasi-tingkat').prop( "disabled", true );
				$('#edit-prestasi-juara').prop( "disabled", true );
			}else{
				$('#edit-prestasi-tingkat').prop( "disabled", false );
				$('#edit-prestasi-juara').prop( "disabled", false );
			}
			prestasi();
		});
		$("#edit-prestasi-tingkat").change(function() {
			prestasi();
		});
		$("#edit-prestasi-juara").change(function() {
			prestasi();
		});
		$("#edit-jarak").change(function() {
			$('#edit-jarak-total').val($('#edit-jarak').val());
		});
		$("#edit-ekonomi").change(function() {
			$('#edit-ekonomi-total').val($('#edit-ekonomi').val());
		});
        
        // untuk form hapus       
		$('#btn-edit').click(function(){
            $('#form-edit').submit();
		});
        $('#form-edit').submit(function(){        
            $.ajax({
                url:"<?php echo site_url()?>/pendaftaran/edit",
 			    type:"POST",
 			    data:$('#form-edit').serialize(),
 			    cache: false,
  		        success:function(respon){
     		    	var obj = $.parseJSON(respon);
  		            if(obj.status==1){
  		                $('#form-pesan-edit').html(pesan_succ('Data berhasil diupdate !'));
                        setTimeout(function(){$('#form-pesan-edit').html('')}, 2000);
                        setTimeout(function(){$('#modal-edit').modal('hide')}, 2500);
                        setTimeout(function(){ $('#table-pendaftar').dataTable().fnReloadAjax() }, 2500);
      		        }else{
                        $('#form-pesan-edit').html(pesan_err(obj.error));
                        setTimeout(function(){$('#form-pesan-edit').html('')}, 2000);
      		        }
     			}
      		});
      		return false;
        });
        
        // untuk form hapus       
		$('#btn-hapus').click(function(){
            $('#form-hapus').submit();
		});
        $('#form-hapus').submit(function(){        
            $.ajax({
                url:"<?php echo site_url()?>/pendaftaran/hapus",
 			    type:"POST",
 			    data:$('#form-hapus').serialize(),
 			    cache: false,
  		        success:function(respon){
     		    	var obj = $.parseJSON(respon);
  		            if(obj.status==1){
  		                $('#form-pesan-hapus').html(pesan_succ('Data berhasil dihapus !'));
                        setTimeout(function(){$('#form-pesan-hapus').html('')}, 2000);
                        setTimeout(function(){$('#modal-hapus').modal('hide')}, 2500);
                        setTimeout(function(){ $('#table-pendaftar').dataTable().fnReloadAjax() }, 2500);
      		        }else{
                        $('#form-pesan-hapus').html(pesan_err(obj.error));
                        setTimeout(function(){$('#form-pesan-hapus').html('')}, 2000);
      		        }
     			}
      		});
      		return false;
        });
	});
</script>