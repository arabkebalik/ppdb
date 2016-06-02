<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Pendaftaran <small> Pendaftaran Calon Siswa</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pendaftaran</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
   	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<?php echo form_open('pendaftaran/simpan','id="form-tambah" class="form-horizontal"')?>
					<div class="box-body">
						<span id="form-pesan">
                        </span>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">No. Formulir </label>
								<div class="col-sm-5">
									<input type="text" id="no-formulir" name="no-formulir" class="form-control input-sm" placeholder="Nomor Formulir Pendaftaran">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">No. Ujian </label>
								<div class="col-sm-5">
									<input type="text" id="no-uan" name="no-uan" class="form-control input-sm" placeholder="Nomor Ujian Nasional">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama</label>
								<div class="col-sm-5">
									<input type="text" style="text-transform: uppercase" id="nama" name="nama" class="form-control input-sm" placeholder="Nama Lengkap">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Asal Sekolah</label>
								<div class="col-sm-5">
									<input type="text" style="text-transform: uppercase" id="asal-sekolah" name="asal-sekolah" class="form-control input-sm" placeholder="Asal Sekolah">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Tanggal Lahir</label>
								<div class="col-sm-4">
									<div class="input-group date form_date" id="open-tgl" data-date="1997-09-16T05:25:07Z" data-date-format="dd MM yyyy" data-link-field="tgl-lahir" data-link-format="yyyy-mm-dd">
										<input class="form-control input-sm" id="tgl-lahir-format" name="tgl-lahir-format" type="text" value="" readonly>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
									<input type="hidden" id="tgl-lahir" name="tgl-lahir" value="" />
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Jenis Kelamin</label>
								<div class="col-sm-4">
									<select id="kelamin" name="kelamin" class="form-control input-sm">
										<option value="Laki Laki">Laki Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Pilihan Jurusan Ke 1</label>
								<div class="col-sm-5">
									<select id="jurusan-1" name="jurusan-1" class="form-control input-sm">
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
								<label class="col-sm-3 control-label">Pilihan Jurusan Ke 2</label>
								<div class="col-sm-5">
									<select id="jurusan-2" name="jurusan-2" class="form-control input-sm">
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
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Nilai UN Bahasa Indonesia</label>
								<div class="col-sm-5">
									<input type="number" id="unbi" name="unbi" class="form-control input-sm" placeholder="Nilai UN Bahasa Indonesia">
								</div>
								<div class="col-sm-2">
									<label class="control-label">Total Nilai UN</label>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Nilai UN Matematika</label>
								<div class="col-sm-5">
									<input type="number" id="unmat" name="unmat" class="form-control input-sm" placeholder="Nilai UN Matematika">
								</div>
								<div class="col-sm-2">
									<input type="text" tabindex=-1 id="un-total" name="un-total" class="form-control input-sm" value="0" readonly>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Nilai UN Bahasa Inggris</label>
								<div class="col-sm-5">
									<input type="number" id="uning" name="uning" class="form-control input-sm" placeholder="Nilai UN Bahasa Inggris">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Nilai UN IPA</label>
								<div class="col-sm-5">
									<input type="number" id="unipa" name="unipa" class="form-control input-sm" placeholder="Nilai UN IPA">
								</div>
							</div>
						</div>

						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Prestasi</label>
								<div class="col-sm-5">
									<select id="prestasi-status" name="prestasi-status" class="form-control input-sm">
										<option value="0">Tidak Ada Penghargaan</option>
										<option value="1">Perorangan</option>
										<option value="0.5">Sampai 5 (lima) Orang</option>
										<option value="0.3">Sampai 10 (sepuluh) Orang</option>
										<option value="0.3">Ketua Regu lebih dari 10 (sepuluh) Orang</option>
										<option value="0.2">Anggota Regu lebih dari 10 (sepuluh) Orang</option>
									</select>
								</div>
								<div class="col-sm-2">
									<input type="text" tabindex=-1 id="prestasi-total" name="prestasi-total" class="form-control input-sm" value="0" readonly>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label"></label>
								<div class="col-sm-5">
									<select id="prestasi-tingkat" name="prestasi-tingkat" class="form-control input-sm" disabled="true">
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
								<div class="col-sm-5">
									<select id="prestasi-juara" name="prestasi-juara" class="form-control input-sm" disabled="true">
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
								<div class="col-sm-5">
									<select id="jarak" name="jarak" class="form-control input-sm">
										<option value="250">Satu Desa dengan sekolah</option>
										<option value="200">Desa lain yang berhimpitan dengan Sekolah dalam satu kecamatan</option>
										<option value="150">Desa lain yang tidak berhimpitan dalam satu kecamatan dengan sekolah</option>
										<option value="100">Kecamatan lain dalam kabupaten</option>
										<option value="50">Kabupaten lain</option>
									</select>
								</div>
								<div class="col-sm-2">
									<input type="text" tabindex=-1 id="jarak-total" name="jarak-total" class="form-control input-sm" value="250" readonly>
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="form-group">
								<label class="col-sm-3 control-label">Faktor Ekonomi</label>
								<div class="col-sm-5">
									<select id="ekonomi" name="ekonomi" class="form-control input-sm">
										<option value="0">Mampu</option>
										<option value="100">Tidak Mampu</option>
									</select>
								</div>
								<div class="col-sm-2">
									<input type="text" tabindex=-1 id="ekonomi-total" name="ekonomi-total" class="form-control input-sm" value="0" readonly>
								</div>
							</div>
						</div>
					</div>
				<div class="box-footer">
					<div class="col-sm-3"></div>
					<button type="submit" class="btn btn-primary">Daftar</button>
				</div>
				
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>


<!-- Modal Success User -->
<div class="modal fade" id="modal-success" tabindex="-999" role="dialog" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" style="width: 600px;">
        <div class="modal-content">
            <div class="modal-header">
				<h4 class="modal-title">Konfirmasi Pendaftaran</h4>
            </div>
            <div class="modal-body">
                <div class="box-body table-responsive">
                        <span id="form-pesan">
                            <div class="alert alert-success">
                                <i class="fa fa-check"></i>
                                <b>Konfirmasi!</b> Pendaftaran calon siswa dengan data berikut BERHASIL dilakukan.
                            </div>
                        </span>
						<form class="form-horizontal">
                            <div class="box-body">
                                <div class="row">
                                    <div class="form-group">
        								<label class="col-sm-3 control-label">No. Pendaftaran</label>
        								<div class="col-sm-8">
        									<input type="text" id="konfirm-pendaftaran" name="konfirm-pendaftaran" class="form-control input-sm" readonly="true" />
        								</div>
        							</div>
                                
                                    <div class="form-group">
        								<label class="col-sm-3 control-label">Nama</label>
        								<div class="col-sm-8">
        									<input type="text" id="konfirm-nama" name="konfirm-nama" class="form-control input-sm" readonly="true" />
        								</div>
        							</div>
                                
                                    <div class="form-group">
        								<label class="col-sm-3 control-label">Asal Sekolah</label>
        								<div class="col-sm-8">
        									<input type="text" id="konfirm-asal" name="konfirm-asal" class="form-control input-sm" readonly="true" />
        								</div>
        							</div>
                                </div>                               
                            </div>
                        </form>
				</div><!-- /.box-body -->          
            </div>
            <div class="modal-footer">
                <a onclick="cetak()" id="btn-cetak" type="button" class="btn btn-primary"><i class="fa fa-print"></i>Cetak</a>
                <a onclick="refresh()" id="btn-tambah" type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>Tambah</a>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	function prestasi(){
		var status = parseFloat($('#prestasi-status').val());
		var tingkat = parseInt($('#prestasi-tingkat').val());
		var juara = parseInt($('#prestasi-juara').val());
		
		var hasil = status * (tingkat+juara);
		$('#prestasi-total').val(hasil);
	}
	function un(){
		var unbi = parseInt($('#unbi').val());
		var unmat = parseInt($('#unmat').val());
		var uning = parseInt($('#uning').val());
		var unipa = parseInt($('#unipa').val());

		var hasil = unbi+unmat+uning+unipa;
		$('#un-total').val(hasil);
	}
    
    function cetak(){
        var pendaftaran = $('#konfirm-pendaftaran').val();
        newWindow('<?php echo site_url()?>/pendaftaran/cetak/'+pendaftaran,'Cetak Pekerjaan');
    }
    
    function refresh(){
        window.open("<?php echo site_url()?>/pendaftaran","_self");
    }

	$(document).ready(function() {        
		$('#no-formulir').focus();
		
		$('#open-tgl').datetimepicker({
			language:  'en',
			weekStart: 1,
			todayBtn:  0,
			autoclose: 1,
			startView: "decade",
			minView: 2,
			forceParse: 0
		});
		
		$("#unbi").change(function() {
			un();
		});
		$("#unmat").change(function() {
			un();
		});
		$("#uning").change(function() {
			un();
		});
		$("#unipa").change(function() {
			un();
		});

		$("#prestasi-status").change(function() {
			var value = $('#prestasi-status').val();
			if(value=='0'){
				$('#prestasi-tingkat').prop( "disabled", true );
				$('#prestasi-juara').prop( "disabled", true );
			}else{
				$('#prestasi-tingkat').prop( "disabled", false );
				$('#prestasi-juara').prop( "disabled", false );
			}
			prestasi();
		});
		$("#prestasi-tingkat").change(function() {
			prestasi();
		});
		$("#prestasi-juara").change(function() {
			prestasi();
		});
		$("#jarak").change(function() {
			$('#jarak-total').val($('#jarak').val());
		});
		$("#ekonomi").change(function() {
			$('#ekonomi-total').val($('#ekonomi').val());
		});
		
        //Form tambah
        $('#form-tambah').submit(function(){        
            $.ajax({
                url:"<?php echo site_url()?>/pendaftaran/simpan",
 			    type:"POST",
 			    data:$('#form-tambah').serialize(),
 			    cache: false,
  		        success:function(respon){
     		    	var obj = $.parseJSON(respon);
  		            if(obj.status==1){
  		                $('#konfirm-pendaftaran').val(obj.pendaftaran);
                        $('#konfirm-nama').val(obj.nama);
                        $('#konfirm-asal').val(obj.asal);
                        
                        $('#modal-success').modal('show');
      		        }else{
                        $('#form-pesan').html(pesan_err(obj.error));
      		        }
                    
                    $('#btn-simpan').removeClass('disabled');
     			}
      		});
      		return false;
        });
	});
</script>