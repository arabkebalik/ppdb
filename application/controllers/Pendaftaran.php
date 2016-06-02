<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends MY_Controller {
	function __construct(){
		parent:: __construct();
	}
	
	public function index(){
        parent::cek_akses('pendaftaran');        		
		$data['title']='Pendaftaran Calon Siswa';
        $data['login_nama']=$this->access->get_nama();        
        $this->template->display('pendaftaran_view', $data);
	}
    
    public function simpan(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('no-formulir', 'Nomor Formulir','required|numeric|strip_tags');
        $this->form_validation->set_rules('no-uan', 'Nomor Ujian Nasional','required|strip_tags');
        $this->form_validation->set_rules('nama', 'Nama','required|strip_tags');
        $this->form_validation->set_rules('asal-sekolah', 'Asal Sekolah','required|strip_tags');
        $this->form_validation->set_rules('tgl-lahir', 'Tanggal Lahir','required|strip_tags');
        if($this->form_validation->run() == TRUE){
            $this->load->model('siswa_model');
            $this->load->model('nilai_model');
            $this->load->model('pilihan_model');
            $this->load->model('un_model');
            $this->load->library('pendaftaran_lib');
            
            $no_formulir = $this->input->post('no-formulir', TRUE);
            $no_uan = $this->input->post('no-uan', TRUE);
            $nama = strtoupper(addslashes($this->input->post('nama', TRUE)));
            $asal_sekolah = strtoupper(addslashes($this->input->post('asal-sekolah', TRUE)));
            $tgllahir = $this->input->post('tgl-lahir', TRUE);
            $kelamin = $this->input->post('kelamin', TRUE);
            $jurusan_pertama = $this->input->post('jurusan-1', TRUE);
            $jurusan_kedua = $this->input->post('jurusan-2', TRUE);
            $unbi = $this->input->post('unbi', TRUE);
            $unmat = $this->input->post('unmat', TRUE);
            $uning = $this->input->post('uning', TRUE);
            $unipa = $this->input->post('unipa', TRUE);
            $prestasi_status = $this->input->post('prestasi-status', TRUE);
            if($prestasi_status=='0'){
                $prestasi_tingkat = '0';
                $prestasi_juara = '0';
            }else{
                $prestasi_tingkat = $this->input->post('prestasi-tingkat', TRUE);
                $prestasi_juara = $this->input->post('prestasi-juara', TRUE);
            }
            $prestasi = $prestasi_status*($prestasi_juara+$prestasi_tingkat);
            $jarak = $this->input->post('jarak', TRUE);
            $ekonomi = $this->input->post('ekonomi', TRUE);
            $petugas = $this->access->get_nama();
            
            $no_pendaftaran = $this->pendaftaran_lib->get_no_pendaftaran($jurusan_pertama, $no_formulir);
            
            $query_cek_pendaftaran = $this->siswa_model->get_siswa_by_pendaftaran($no_pendaftaran);
            if($query_cek_pendaftaran->num_rows()>0){
                $status['status'] = 0;
                $status['error'] = 'Nomor Formulir sudah digunakan !';
            }else{
                $query_cek_uan = $this->siswa_model->get_siswa_by_uan($no_uan);
                if($query_cek_uan->num_rows()>0){
                    $status['status'] = 0;
                    $status['error'] = 'Nomor Ujian Nasional sudah digunakan !';
                }else{
                    if($jurusan_pertama!=$jurusan_kedua){
                        $this->siswa_model->save_siswa($no_pendaftaran,$no_formulir,$no_uan,$nama,$asal_sekolah,$tgllahir,$kelamin,$petugas);
                        $this->nilai_model->save_nilai($no_pendaftaran,$prestasi_status,$prestasi_tingkat,$prestasi_juara,$jarak,$ekonomi,($prestasi+$jarak+$ekonomi));
                        $this->un_model->save_un($no_pendaftaran,$unbi,$unmat,$uning,$unipa,($unbi+$unmat+$uning+$unipa));
                        
                        $this->pilihan_model->delete_pilihan($no_pendaftaran);
                        $this->pilihan_model->save_pilihan($no_pendaftaran,$jurusan_pertama,1);
                        if($jurusan_kedua!=0){
                            $this->pilihan_model->save_pilihan($no_pendaftaran,$jurusan_kedua,2);
                        }
                        
                        $status['status'] = 1;
                        $status['error'] = '';
                        $status['pendaftaran']=$no_pendaftaran;
                        $status['nama']=$nama;
                        $status['asal']=$asal_sekolah;
                    }else{
                        $status['status'] = 0;
                        $status['error'] = 'Pilihan kedua jurusan tidak boleh sama !';
                    }
                }
            }
            
        }else{
            $status['status'] = 0;
            $status['error'] = validation_errors();
        }
        echo json_encode($status);
    }
    
    public function data(){
        parent::cek_akses('data_pendaftar');
        $data['login_nama']=$this->access->get_nama();
		$data['title']='Data Calon Siswa';
        if($this->access->cek_akses('atur_pendaftar')){
            $view['content']='data_pendaftar_view';
            $view['inside']='pendaftaran_edit_view';
            $this->template->display_inside($view, $data);
        }else{
            $this->template->display('data_pendaftar_view', $data);
        }
    }
    
    //Untuk form edit data siswa
    function edit(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('edit-pendaftaran', 'Nomor Pendaftaran','required|numeric|strip_tags');
        $this->form_validation->set_rules('edit-ujian', 'No. Ujian','required|strip_tags');
        $this->form_validation->set_rules('edit-nama', 'Nama','required|strip_tags');
        $this->form_validation->set_rules('edit-asal', 'Asal Sekolah','required|strip_tags');
        $this->form_validation->set_rules('edit-tgl', 'Tanggal Lahir','required|strip_tags');

        if($this->form_validation->run() == TRUE){
            $this->load->model('siswa_model');
            $this->load->model('nilai_model');
            $this->load->model('pilihan_model');
            $this->load->model('un_model');
            $this->load->library('pendaftaran_lib');
            
            $no_pendaftaran = $this->input->post('edit-pendaftaran', TRUE);
            $no_uan = $this->input->post('edit-ujian', TRUE);
            $nama = strtoupper(addslashes($this->input->post('edit-nama', TRUE)));
            $asal_sekolah = strtoupper(addslashes($this->input->post('edit-asal', TRUE)));
            $tgllahir = $this->input->post('edit-tgl', TRUE);
            $kelamin = $this->input->post('edit-kelamin', TRUE);
            $jurusan_pertama = $this->input->post('edit-jurusan', TRUE);
            $jurusan_kedua = $this->input->post('edit-jurusan-2', TRUE);
            $unbi = $this->input->post('edit-unbi', TRUE);
            $unmat = $this->input->post('edit-unmat', TRUE);
            $uning = $this->input->post('edit-uning', TRUE);
            $unipa = $this->input->post('edit-unipa', TRUE);

            $prestasi_status = $this->input->post('edit-prestasi-status', TRUE);
            if($prestasi_status=='0'){
                $prestasi_tingkat = '0';
                $prestasi_juara = '0';
            }else{
                $prestasi_tingkat = $this->input->post('edit-prestasi-tingkat', TRUE);
                $prestasi_juara = $this->input->post('edit-prestasi-juara', TRUE);
            }
            $prestasi = $prestasi_status*($prestasi_juara+$prestasi_tingkat);
            $jarak = $this->input->post('edit-jarak', TRUE);
            $ekonomi = $this->input->post('edit-ekonomi', TRUE);
            
            if($jurusan_pertama!=$jurusan_kedua){
                //proses update data
                $this->siswa_model->update_siswa($no_pendaftaran,$nama,$asal_sekolah,$tgllahir,$kelamin);
                $this->nilai_model->save_nilai($no_pendaftaran,$prestasi_status,$prestasi_tingkat,$prestasi_juara,$jarak,$ekonomi,($prestasi+$jarak+$ekonomi));
                $this->un_model->update_un($no_pendaftaran,$unbi,$unmat,$uning,$unipa,($unbi+$unmat+$uning+$unipa));
                
                //update pilihan jurusan
                $this->pilihan_model->delete_pilihan($no_pendaftaran);
                $this->pilihan_model->save_pilihan($no_pendaftaran,$jurusan_pertama,1);
                if($jurusan_kedua!=0){
                    $this->pilihan_model->save_pilihan($no_pendaftaran,$jurusan_kedua,2);
                }
                
                $status['status'] = 1;
                $status['error'] = '';
            }else{
                $status['status'] = 0;
                $status['error'] = 'Pilihan kedua jurusan tidak boleh sama !';
            }
        }else{
            $status['status'] = 0;
            $status['error'] = validation_errors();
        }
        
        echo json_encode($status);
    }
    
    public function hapus(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('hapus-pendaftaran', 'Nomor pendaftaran','required');
        $this->form_validation->set_rules('hapus-nama', 'Nama','required');
        $this->form_validation->set_rules('hapus-asal', 'Asal Sekolah','required');
        if($this->form_validation->run() == TRUE){
            $this->load->model('siswa_model');
            $this->load->model('nilai_model');
            $this->load->model('pilihan_model');
            $this->load->model('un_model');
            
            $no_pendaftaran = $this->input->post('hapus-pendaftaran', TRUE);
            
            $this->siswa_model->delete_siswa($no_pendaftaran);
            $this->nilai_model->delete_nilai($no_pendaftaran);
            $this->pilihan_model->delete_pilihan($no_pendaftaran);
            $this->un_model->delete_un($no_pendaftaran);
            
            $status['status'] = 1;
            $status['error'] = '';
        }else{
            $status['status'] = 0;
            $status['error'] = validation_errors();
        }
        
        echo json_encode($status);
    }
	
	public function get_pendaftaran_edit($pendaftaran=null){
		$data['edit_pendaftaran']='';
		$data['edit_ujian']='';
		$data['edit_nama']='';
		$data['edit_kelamin']='';
		$data['edit_asal']='';
		$data['edit_tgl']='';
		$data['edit_prestasi_status']='';
		$data['edit_prestasi_tingkat']='';
		$data['edit_prestasi_juara']='';
		$data['edit_prestasi_total']='';
		$data['edit_jarak']='';
		$data['edit_ekonomi']='';
		$data['edit_jurusan_1']='';
		$data['edit_jurusan_2']='';
        $data['edit_unbi']='';
        $data['edit_unmat']='';
        $data['edit_uning']='';
        $data['edit_unipa']='';
		
		if(!empty($pendaftaran)){
			$this->load->model('siswa_model');
            $this->load->model('nilai_model');
            $this->load->model('pilihan_model');
            $this->load->model('un_model');
            $this->load->library('pendaftaran_lib');
			$pendaftaran_query = $this->siswa_model->get_siswa_detail_by_pendaftaran($pendaftaran);
            if($pendaftaran_query->num_rows()>0){
				$siswa = $pendaftaran_query->row();
				
				$data['edit_pendaftaran']=$siswa->no_pendaftaran;
                $data['edit_ujian']=$siswa->no_ujian;
                $data['edit_nama']=$siswa->nama;
                $data['edit_kelamin']=$siswa->kelamin;
                $data['edit_asal']=$siswa->asal_sekolah;
                //$data['edit_tgl']=date("Y-m-d", strtotime($siswa->tgllahir));
                $data['edit_tgl']=$siswa->tgllahir;
				$data['edit_jarak']=$siswa->jarak;
                $data['edit_ekonomi']=$siswa->ekonomi;
				$data['edit_prestasi_status']=$siswa->pres_status;
                if($siswa->pres_status==0){
                    $data['edit_prestasi_tingkat']='200';
    				$data['edit_prestasi_juara']='50';
                }else{
    				$data['edit_prestasi_tingkat']=$siswa->pres_tingkat;
    				$data['edit_prestasi_juara']=$siswa->pres_juara;
                }
				$data['edit_prestasi_total']=$siswa->pres_status*($siswa->pres_tingkat+$siswa->pres_juara);
				$data['edit_jurusan_1']='';
				$data['edit_jurusan_2']='';
				
                $un_query = $this->un_model->get_un_by_pendaftaran($siswa->no_pendaftaran);
                if($un_query->num_rows()>0){
                    $un = $un_query->row();

                    $data['edit_unbi']=$un->unbi;
                    $data['edit_unmat']=$un->unmat;
                    $data['edit_uning']=$un->uning;
                    $data['edit_unipa']=$un->unipa;
                }


				$jurusan_query = $this->pilihan_model->get_pilihan_by_pendaftaran($siswa->no_pendaftaran);
                $jml_pilihan = $jurusan_query->num_rows();
                if($jml_pilihan>0){
                    if($jml_pilihan==1){
                        $temp = $jurusan_query->row();
                        $data['edit_jurusan_1']=$temp->kode_jurusan;
                        $data['edit_jurusan_2']='0';
                    }else{
                        foreach($jurusan_query->result() as $jurusan){
    						if($jurusan->prioritas==1){
    							$data['edit_jurusan_1']=$jurusan->kode_jurusan;
    						}else if($jurusan->prioritas==2){
    							$data['edit_jurusan_2']=$jurusan->kode_jurusan;
    						}
                        }
                    }
                }
			}
		}
		
		echo json_encode($data);
	}
    
    public function get_pendaftaran_detail($pendaftaran=null){
        $data['detail_pendaftaran']='';
		$data['detail_ujian']='';
		$data['detail_nama']='';
		$data['detail_kelamin']='';
		$data['detail_asal']='';
		$data['detail_tgl']='';
		$data['detail_prestasi']='';
		$data['detail_jurusan']='';
		$data['detail_jarak']='';
		$data['detail_ekonomi']='';
		$data['detail_jurusan']='';
        $data['detail_unbi']='';
        $data['detail_unmat']='';
        $data['detail_uning']='';
        $data['detail_unipa']='';
        
        if(!empty($pendaftaran)){
            $this->load->model('siswa_model');
            $this->load->model('nilai_model');
            $this->load->model('pilihan_model');
            $this->load->model('un_model');
            $this->load->library('pendaftaran_lib');
            
            $pendaftaran_query = $this->siswa_model->get_siswa_detail_by_pendaftaran($pendaftaran);
            if($pendaftaran_query->num_rows()>0){
                $siswa = $pendaftaran_query->row();
                
                $data['detail_pendaftaran']=$siswa->no_pendaftaran;
                $data['detail_ujian']=$siswa->no_ujian;
                $data['detail_nama']=$siswa->nama;
                $data['detail_kelamin']=$siswa->kelamin;
                $data['detail_asal']=$siswa->asal_sekolah;
                $data['detail_tgl']=date("d M Y", strtotime($siswa->tgllahir));
                $data['detail_prestasi']=$siswa->pres_status*($siswa->pres_tingkat+$siswa->pres_juara);
                $data['detail_jarak']=$siswa->jarak;
                $data['detail_ekonomi']=$siswa->ekonomi;
				$data['detail_petugas']=$siswa->petugas;
                
                $un_query = $this->un_model->get_un_by_pendaftaran($siswa->no_pendaftaran);
                if($un_query->num_rows()>0){
                    $un = $un_query->row();

                    $data['detail_unbi']=$un->unbi;
                    $data['detail_unmat']=$un->unmat;
                    $data['detail_uning']=$un->uning;
                    $data['detail_unipa']=$un->unipa;
                }


                $jurusan_query = $this->pilihan_model->get_pilihan_by_pendaftaran($siswa->no_pendaftaran);
                if($jurusan_query->num_rows()>0){
                    $hasil = '';
                    $count = 1;
                    foreach($jurusan_query->result() as $jurusan){
                        $hasil = $hasil.$count.'. '.$this->pendaftaran_lib->get_jurusan($jurusan->kode_jurusan).'   ';
                        $count++;
                    }
                    $data['detail_jurusan']=$hasil;
                }else{
                    $data['detail_jurusan']='Tidak Memilih';
                }
            }
        }
        
        echo json_encode($data);
    }
    
    public function cetak($no_pendaftaran=null){
        $this->load->model('siswa_model');
        $this->load->model('nilai_model');
        $this->load->model('pilihan_model');
        $this->load->model('un_model');
        $this->load->library('pendaftaran_lib');
        
        if(!empty($no_pendaftaran)){
            $siswa_query = $this->siswa_model->get_siswa_detail_by_pendaftaran($no_pendaftaran);
            if($siswa_query->num_rows()>0){
                $siswa = $siswa_query->row();
                $data['no_pendaftaran']=$siswa->no_pendaftaran;
				$data['no_formulir']=$siswa->no_formulir;
                $data['nama']=$siswa->nama;
                $data['asal']=$siswa->asal_sekolah;
                $data['petugas']=$siswa->petugas;
                $data['prestasi']=$siswa->pres_status*($siswa->pres_tingkat+$siswa->pres_juara);
                $data['jarak']=$siswa->jarak;
                $data['ekonomi']=$siswa->ekonomi;
                $data['total_skor']=$siswa->total_nilai;
                $date = new DateTime();
                $data['tanggal']=$date->format('d M Y');
                
                $un_query = $this->un_model->get_un_by_pendaftaran($siswa->no_pendaftaran);
                if($un_query->num_rows()>0){
                    $un = $un_query->row();

                    $data['xun']=$un->total_un;
                    $data['xtotal_skor']=$siswa->total_nilai+$un->total_un;
                }

                $jurusan_query = $this->pilihan_model->get_pilihan_by_pendaftaran($siswa->no_pendaftaran);
                if($jurusan_query->num_rows()>0){
                    $hasil = '';
                    $count = 1;
                    foreach($jurusan_query->result() as $jurusan){
                        $hasil = $hasil.$count.'. '.$this->pendaftaran_lib->get_jurusan($jurusan->kode_jurusan).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        $count++;
                    }
                    $data['jurusan']=$hasil;
                }else{
                    $data['jurusan']='Tidak Memilih';
                }       
            }else{ // Jika data tidak ditemukan
                
            }
        }
        
        
        $this->load->view('pendaftaran_print_view', $data);
    }
    
    /**
     * fungsi get_user untuk data pendaftaran 
     */
    function get_pendaftaran(){
		$this->load->model('siswa_model');
        $this->load->library('pendaftaran_lib');
		// variable initialization
		$search = "";
		$start = 0;
		$rows = 25;

		// get search value (if any)
		if (isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
			$search = $_GET['sSearch'];
		}

		// limit
		$start = $this->get_start();
		$rows = $this->get_rows();

		// run query to get user listing
		$query = $this->siswa_model->get_siswa($start, $rows, $search);
		$iFilteredTotal = $query->num_rows();
		
		$iTotal=$this->siswa_model->get_count_siswa($search)->row()->hasil;
	    
		$output = array(
			"sEcho" => intval($_GET['sEcho']),
	        "iTotalRecords" => $iTotal,
	        "iTotalDisplayRecords" => $iTotal,
	        "aaData" => array()
	    );

        $edit = $this->access->cek_akses('atur_pendaftar');
        $edit_menu = '';
	    // get result after running query and put it in array
		$i=$start;
		$siswa = $query->result();
	    foreach ($siswa as $temp) {			
			$record = array();
			
            if($edit){
                $edit_menu = '
                    <li><a href="#" onclick="modaledit(\''.$temp->no_pendaftaran.'\')" >Edit</a></li>
                    <li><a href="#" onclick="modalhapus(\''.$temp->no_pendaftaran.'\', \''.$temp->nama.'\', \''.$temp->asal_sekolah.'\')">Hapus</a></li>
                    ';
            }
            
			$record[] = ++$i;
			$record[] = $temp->no_pendaftaran;
			$record[] = $temp->no_ujian;
			$record[] = $temp->nama;
			$record[] = $temp->asal_sekolah;
            $record[] = $this->pendaftaran_lib->get_jurusan($temp->kode_jurusan);
			$record[] = '<div class="btn-group">
                            <button type="button" class="btn btn-info btn-xs btn-flat" data-toggle="dropdown">Action
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" onclick="modaldetail(\''.$temp->no_pendaftaran.'\')">Detail</a></li>
                                <li><a href="#" onclick="cetak(\''.$temp->no_pendaftaran.'\')">Cetak</a></li>
                                '.$edit_menu.'
                            </ul>
                        </div>';

			$output['aaData'][] = $record;
		}
		// format it to JSON, this output will be displayed in datatable
		echo json_encode($output);
	}
     
      
    
    /**
	* fungsi tambahan 
	* 
	* 
*/
	
	function get_start() {
		$start = 0;
		if (isset($_GET['iDisplayStart'])) {
			$start = intval($_GET['iDisplayStart']);

			if ($start < 0)
				$start = 0;
		}

		return $start;
	}

	function get_rows() {
		$rows = 10;
		if (isset($_GET['iDisplayLength'])) {
			$rows = intval($_GET['iDisplayLength']);
			if ($rows < 5 || $rows > 500) {
				$rows = 10;
			}
		}

		return $rows;
	}

	function get_sort_dir() {
		$sort_dir = "ASC";
		$sdir = strip_tags($_GET['sSortDir_0']);
		if (isset($sdir)) {
			if ($sdir != "asc" ) {
				$sort_dir = "DESC";
			}
		}

		return $sort_dir;
	}
}