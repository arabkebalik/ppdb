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
			<div class="box">
                <div class="box-header">
                    <div class="box-tools pull-right">   
                        <a class="btn btn-default" id="btn-tambah-user">Tambah User</a>                                                         
                    </div>
                </div>
                <div class="box-body">
					<table id="table-user" class="table table-bordered table-hover" width="100%">
                        <thead>
							<tr>
								<th>No.</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telp</th>
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
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>
</section>

<!-- Modal Tambah User -->
<div class="modal fade" id="modal-tambah" tabindex="-999" role="dialog" aria-labelledby="btn-tambah-user" aria-hidden="true">
    <div class="modal-dialog" style="width: 800px;">
        <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah User</h4>
            </div>
            <div class="modal-body">
                <div class="box-body table-responsive">
                        <span id="form-pesan-tambah">
                        </span>
						<?php echo form_open('user/simpan','id="form-tambah"')?>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" id="tambah-username" name="tambah-username" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" id="tambah-nama" name="tambah-nama" />
                                        </div> 
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" id="tambah-alamat" name="tambah-alamat" />
                                        </div>                                   
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telp.</label>
                                            <input type="text" class="form-control" id="tambah-telp" name="tambah-telp" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" id="tambah-password" name="tambah-password" />
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" id="tambah-confirm" name="tambah-confirm" />
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
				</div><!-- /.box-body -->          
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button id="btn-simpan" type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Reset User -->
<div class="modal fade" id="modal-reset" tabindex="-999" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog" style="width: 350px;">
        <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Reset Password User</h4>
            </div>
            <div class="modal-body">
                <div class="box-body table-responsive">
                        <span id="form-pesan-reset">
                        </span>
						<?php echo form_open('user/reset','id="form-reset"')?>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" id="reset-username" name="reset-username" readonly="true" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" id="reset-password" name="reset-password" />
                                </div>
                            </div>
                        <?php echo form_close(); ?>
				</div><!-- /.box-body -->          
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button id="btn-reset" type="button" class="btn btn-primary">Reset</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit User -->
<div class="modal fade" id="modal-edit" tabindex="-999" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog" style="width: 700px;">
        <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit User</h4>
            </div>
            <div class="modal-body">
                <div class="box-body table-responsive">
                        <span id="form-pesan-edit">
                        </span>
						<?php echo form_open('user/edit','id="form-edit"')?>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" id="edit-tipe" name="edit-tipe" value="1" />
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" id="edit-username" name="edit-username" readonly="true" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" id="edit-nama" name="edit-nama" />
                                        </div>                                    
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" id="edit-alamat" name="edit-alamat" />
                                        </div>
                                        <div class="form-group">
                                            <label>Telp.</label>
                                            <input type="text" class="form-control" id="edit-telp" name="edit-telp" />
                                        </div>                                    
                                    </div>
                            </div>
                        <?php echo form_close(); ?>
				</div><!-- /.box-body -->          
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button id="btn-hapus" type="button" class="btn btn-primary">Hapus</button>
                <button id="btn-edit" type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function modaledit(username, nama, alamat, telp){
        // untuk edit, 1=edit, 2=hapus
        $('#edit-tipe').val('1');
        $('#form-pesan-edit').html('');
        $('#edit-username').val('');
        $('#edit-nama').val('');
        $('#edit-telp').val('');
        $('#edit-alamat').val('');
        $('#modal-edit').modal('show');
        $('#edit-username').val(username);
        $('#edit-nama').val(nama);
        $('#edit-telp').val(telp);
        $('#edit-alamat').val(alamat);
    }
    
    function modalreset(username){
        $('#form-pesan-reset').html('');
        $('#reset-username').val('');
        $('#reset-password').val('');
        $('#modal-reset').modal('show');
        $('#reset-username').val(username);
    }
    
    $(document).ready(function() {
        $('#modal-tambah').on('shown.bs.modal', function (e) {
            $('#tambah-username').focus();
        });
        
        $('#modal-edit').on('shown.bs.modal', function (e) {
            $('#edit-nama').focus();
        });
		
		$('#modal-reset').on('shown.bs.modal', function (e) {
            $('#reset-password').focus();
        });
                
        $('#btn-tambah-user').click(function(){
            $('#form-pesan-tambah').html('');
            $('#tambah-username').val('');
            $('#tambah-nama').val('');
            $('#tambah-telp').val('');
            $('#tambah-alamat').val('');
            $('#tambah-password').val('');
            $('#tambah-confirm').val('');
            $('#modal-tambah').modal('show');
        });
        
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
        
        //Tambah User
        $('#btn-simpan').click(function(){
            $('#form-tambah').submit();
            $('#btn-simpan').addClass('disabled');
        });
        $('#form-tambah').submit(function(){        
            $.ajax({
                url:"<?php echo site_url()?>/user/simpan",
 			    type:"POST",
 			    data:$('#form-tambah').serialize(),
 			    cache: false,
  		        success:function(respon){
     		    	var obj = $.parseJSON(respon);
  		            if(obj.status==1){
  		                $('#form-pesan-tambah').html(pesan_succ('Data user berhasil disimpan !'));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 2000);
                        setTimeout(function(){$('#modal-tambah').modal('hide')}, 2500);
                        setTimeout(function(){ $('#table-user').dataTable().fnReloadAjax() }, 2500);
      		        }else{
                        $('#form-pesan-tambah').html(pesan_err(obj.error));
                        setTimeout(function(){$('#form-pesan-tambah').html('')}, 2000);
      		        }
                    
                    $('#btn-simpan').removeClass('disabled');
     			}
      		});
      		return false;
        });
        
        // Edit user
        $('#btn-edit').click(function(){
            $('#form-edit').submit();
        });
        $('#btn-hapus').click(function(){
            $('#edit-tipe').val('2');
            $('#form-edit').submit();
        });
        $('#form-edit').submit(function(){        
            $.ajax({
                url:"<?php echo site_url()?>/user/edit",
 			    type:"POST",
 			    data:$('#form-edit').serialize(),
 			    cache: false,
  		        success:function(respon){
     		    	var obj = $.parseJSON(respon);
  		            if(obj.status==1){
  		                if(obj.tipe==1){
  		                    $('#form-pesan-edit').html(pesan_succ('Data berhasil diupdate !'));
  		                }else{
  		                    $('#form-pesan-edit').html(pesan_succ('Data berhasil dihapus !'));
  		                }
                        setTimeout(function(){$('#form-pesan-edit').html('')}, 2000);
                        setTimeout(function(){$('#modal-edit').modal('hide')}, 2500);
                        setTimeout(function(){ $('#table-user').dataTable().fnReloadAjax() }, 2500);
      		        }else{
                        $('#form-pesan-edit').html(pesan_err(obj.error));
                        setTimeout(function(){$('#form-pesan-edit').html('')}, 2000);
      		        }
     			}
      		});
      		return false;
        });
        
        
        // Reset Password
        $('#btn-reset').click(function(){
            $('#form-reset').submit();
        });
        $('#form-reset').submit(function(){        
            $.ajax({
                url:"<?php echo site_url()?>/user/reset",
 			    type:"POST",
 			    data:$('#form-reset').serialize(),
 			    cache: false,
  		        success:function(respon){
     		    	var obj = $.parseJSON(respon);
  		            if(obj.status==1){
  		                $('#form-pesan-reset').html(pesan_succ('Password berhasil direset !'));
                        setTimeout(function(){$('#form-pesan-reset').html('')}, 2000);
                        setTimeout(function(){$('#modal-reset').modal('hide')}, 2500);
      		        }else{
                        $('#form-pesan-reset').html(pesan_err(obj.error));
                        setTimeout(function(){$('#form-pesan-reset').html('')}, 2000);
      		        }
     			}
      		});
      		return false;
        });             
    });
</script>