<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {
	function __construct(){
		parent:: __construct();
	}
	
	public function index(){
        parent::cek_akses('atur_operator');
        $data['login_nama']=$this->access->get_nama();		
		$data['title']='Pengaturan Operator';
        $this->template->display('user_view', $data);
	}
    
    function simpan(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tambah-username', 'Username','required|strip_tags');
        $this->form_validation->set_rules('tambah-nama', 'Nama','required|strip_tags');
        $this->form_validation->set_rules('tambah-password', 'Password','required|strip_tags');
        $this->form_validation->set_rules('tambah-confirm', 'Confirm Password','required|strip_tags');
        if($this->form_validation->run() == TRUE){
            $username = addslashes($this->input->post('tambah-username', TRUE));
            $nama = addslashes($this->input->post('tambah-nama', TRUE));
            $alamat = addslashes($this->input->post('tambah-alamat', TRUE));
            $telp = addslashes($this->input->post('tambah-telp', TRUE));
            $password = $this->input->post('tambah-password', TRUE);
            $confirm = $this->input->post('tambah-confirm', TRUE);
            
            if($password==$confirm){
                $this->load->model('users_model');
                $this->users_model->save_user($username, $nama, $alamat, $telp, 'operator', $password);
                
                $status['status'] = 1;
                $status['error'] = '';
            }else{
                $status['status'] = 0;
                $status['error'] = '<div>Password tidak sama, silahkan masukkan lagi !!</div>';
            }
        }else{
            $status['status'] = 0;
            $status['error'] = validation_errors();
        }
        
        echo json_encode($status);
    }
    
    function edit(){
        $edit = $this->input->post('edit-tipe', TRUE);
        if($edit==null){ $edit=1; }
        
        $this->load->library('form_validation');
        
		$this->form_validation->set_rules('edit-username', 'Username','required|strip_tags');
        $this->form_validation->set_rules('edit-nama', 'Nama','required|strip_tags');
        if($this->form_validation->run() == TRUE){
            $username = addslashes($this->input->post('edit-username', TRUE));
            $nama = addslashes($this->input->post('edit-nama', TRUE));
            $alamat = addslashes($this->input->post('edit-alamat', TRUE));
            $telp = addslashes($this->input->post('edit-telp', TRUE));
            
            $this->load->model('users_model');
            
            //Jika edit data
            if($edit==1){
                $this->users_model->update_user($username, $nama, $alamat, $telp);
            //Jika hapus data
            }else{
                $this->users_model->delete_user($username);
            }
            
            $status['status'] = 1;
            $status['error'] = '';
            $status['tipe'] = $edit;
        }else{
            $status['status'] = 0;
            $status['error'] = validation_errors();
        }
        
        echo json_encode($status);
    }
    
    function reset(){
        $this->load->library('form_validation');
        
		$this->form_validation->set_rules('reset-username', 'Username','required|strip_tags');
        $this->form_validation->set_rules('reset-password', 'Password','required|strip_tags');
        if($this->form_validation->run() == TRUE){
            $this->load->model('users_model');
            
            $username = addslashes($this->input->post('reset-username', TRUE));
            $password = $this->input->post('reset-password', TRUE);
            
            $this->users_model->change_password($username, $password);
            
            $status['status'] = 1;
            $status['error'] = '';
        }else{
            $status['status'] = 0;
            $status['error'] = validation_errors();
        }
        
        echo json_encode($status);
    }
    
    function get_users(){
		$this->load->model('users_model');
		// variable initialization
		$search = "";
		$start = 0;
		$rows = 10;

		// get search value (if any)
		if (isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
			$search = $_GET['sSearch'];
		}

		// limit
		$start = $this->get_start();
		$rows = $this->get_rows();

		// run query to get user listing
		$query = $this->users_model->get_users($start, $rows, $search);
		$iFilteredTotal = $query->num_rows();
		
		$iTotal=$this->users_model->get_users_count($search)->row()->hasil;
	    
		$output = array(
			"sEcho" => intval($_GET['sEcho']),
	        "iTotalRecords" => $iTotal,
	        "iTotalDisplayRecords" => $iTotal,
	        "aaData" => array()
	    );

	    // get result after running query and put it in array
		$i=$start;
		$users = $query->result();
	    foreach ($users as $temp) {			
			$record = array();
			
			$record[] = ++$i;
			$record[] = $temp->username;
			$record[] = $temp->nama;
			$record[] = $temp->alamat;
			$record[] = $temp->telp;
			$record[] = '<a onclick="modaledit(\''.$temp->username.'\', \''.addslashes($temp->nama).'\', \''.addslashes($temp->alamat).'\', \''.$temp->telp.'\')" class="btn btn-default btn-xs">Edit</a> 
                         <a onclick="modalreset(\''.$temp->username.'\')" class="btn btn-default btn-xs">Reset</a> 
            ';

			$output['aaData'][] = $record;
		}
		// format it to JSON, this output will be displayed in datatable
		echo json_encode($output);
	}
	
	
	/**
	* funsi tambahan 
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