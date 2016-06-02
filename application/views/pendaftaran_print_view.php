<html>
    <head>
        <meta charset="UTF-8">
        <title>SMKN 1 Pemalang | PPDB jalur Mandiri</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url()?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url()?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        
        <script src="<?php echo base_url()?>public/js/jquery-1.11.0.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url()?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>public/js/upj.js"></script>
        <!-- AdminLTE App -->
    </head>
    <body class="skin-blue">
            <section class="content invoice">
                <!-- title row -->
                    <div class="row">
						<div class="col-xs-2">
						<img src="<?php echo base_url()?>public/img/pemalang.png" height="100" />
						</div>
						<div class="col-xs-8 text-center">
						<h3 style="margin: -1px">PEMERINTAH KABUPATEN PEMALANG</h3>
						<h3 style="margin: -1px">DINAS PENDIDIKAN</h3>
						<h3 style="margin: -1px">SMK NEGERI 1 PEMALANG</h3>
						<p>Jl. Gatot Subroto No. 31, Pemalang Telp. (0284) 321386</p>
						</div>
						<div class="col-xs-2 text-right">
						<img src="<?php echo base_url()?>public/img/logo.png" height="100" />
						</div>
                    </div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<img width="100%" height="1.5px" src="<?php echo base_url()?>public/img/line.jpg" />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<h4><strong>DATA CALON SISWA JALUR MANDIRI</strong></h4>
						</DIV>
					</div>
                    <div class="row">
                        <div class="col-xs-4">
							<h5 style="margin: 0px"><strong>No. Pendaftaran</strong></h5>
							<h5 style="margin: 0px"><strong>No. Formulir</strong></h5>
							<h5 style="margin: 0px"><strong>Nama</strong></h5>
							<h5 style="margin: 0px"><strong>Asal Sekolah</strong></h5>
							<h5 style="margin: 0px"><strong>Jurusan</strong></h5>
                        </div><!-- /.col -->
						<div class="col-xs-8">
                            <h5 style="margin: 0px">: <?php if(!empty($no_pendaftaran)){ echo $no_pendaftaran;} ?></h5>
							<h5 style="margin: 0px">: <?php if(!empty($no_formulir)){ echo $no_formulir;} ?></h5>
							<h5 style="margin: 0px">: <?php if(!empty($nama)){ echo $nama;} ?></h5>
							<h5 style="margin: 0px">: <?php if(!empty($asal)){ echo $asal;} ?></h5>
							<h5 style="margin: 0px">: <?php if(!empty($jurusan)){ echo $jurusan;} ?></h5>
							<br />
                        </div><!-- /.col -->
                    </div><!-- /.row -->
					<div class="row">
						<div class="col-xs-12">
							<table class="table table-bordered table-condensed differentTable">
								<tr>
									<th style="width: 15px">No</th>
                                    <th>Komponen</th>
                                    <th style="text-align: center">Skor</th>
                                </tr>
								<tr>
									<td>1.</td>
									<td>Prestasi Akademin / Non Akademik</td>
									<td style="text-align: center"><?php echo $prestasi; ?></td>
								</tr>
								<tr>
									<td>2.</td>
									<td>Jarak Ke Sekolah</td>
									<td style="text-align: center"><?php echo $jarak; ?></td>
								</tr>
								<tr>
									<td>3.</td>
									<td>Faktor Ekonomi</td>
									<td style="text-align: center"><?php echo $ekonomi; ?></td>
								</tr>
								<tr>
									<td>3.</td>
									<td>Nilai UN</td>
									<td style="text-align: center"><?php echo $xun; ?></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align: center;background: #D3D1D1"><strong>Skor Sementara</strong></td>
									<td style="text-align: center;background: #D3D1D1"><strong><?php if(!empty($xtotal_skor)){ echo $xtotal_skor;} ?></strong></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2">
							<p><strong>Catatan :</strong></p>
						</div>
						<div class="col-xs-6">
							<ol>
								<li>Kartu Tanda Bukti tidak boleh Hilang / Rusak</li>
								<li>Kartu ini harus dibawa saat Ujian Tulis</li>
								<li>Kartu Tanda Bukti ini digunakan untuk DAFTAR ULANG Jika DITERIMA</li>
							</ol>
						</div>
						<div class="col-xs-4 text-center">
							Pemalang, <?php echo $tanggal ?><br />
							Petugas
							<br />
							<br />
							<br />
							<br />
							<strong><?php if(!empty($petugas)){ echo $petugas;} ?></strong>	
						</div>
					</div>
            </section>
            
    <script type="text/javascript">
        $(document).ready(function() {
            window.print();
            setTimeout(function(){window.close()}, 3000);
        });
    </script>
    </body>
</html>