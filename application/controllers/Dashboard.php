<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MY_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('users_model');
	}
	
	public function index(){	    
		$data['title']='Dashboard';
        $data['login_nama']=$this->access->get_nama();
		$this->template->display('dashboard_view',$data);
	}
    
    function password(){
        $this->load->library('form_validation');
        
		$this->form_validation->set_rules('password-old', 'Username','required|strip_tags');
		$this->form_validation->set_rules('password-new', 'Password','required|strip_tags');
        $this->form_validation->set_rules('password-confirm', 'Confirm Password','required|strip_tags');
        
        if($this->form_validation->run() == TRUE){
            $this->form_validation->set_rules('token','token','callback_proses_password()');
			if($this->form_validation->run()==TRUE){				
				$status['status'] = 1;
                $status['error'] = '';
			}else{
                $status['status'] = 0;
                $status['error'] = validation_errors();
			}
        }else{
            $status['status'] = 0;
            $status['error'] = validation_errors();
        }
        
        echo json_encode($status);
    }
    
    function proses_password(){		
		$old = $this->input->post('password-old', TRUE);
		$new = $this->input->post('password-new', TRUE);
		$confirm = $this->input->post('password-confirm', TRUE);
		
		$username = $this->access->get_username();
		
		if($this->users_model->get_user_count($username, $old)>0){
			if($new==$confirm){
				$this->users_model->change_password($username, $new);
				return TRUE;		
			}else{
				$this->form_validation->set_message('proses_password','Password baru tidak cocok');
				return FALSE;	
			}
		}else{
			$this->form_validation->set_message('proses_password','Password Lama tidak sesuai');
			return FALSE;
		}
	}
	
	function get_jumlah_pendaftar(){
		$this->load->model('siswa_model');
		
		$jumlah = $this->siswa_model->get_count_per_jurusan()->row();
		$data['tkj'] = $jumlah->tkj;
		$data['tkr'] = $jumlah->tkr;
		$data['tsm'] = $jumlah->tsm;
		$data['ak'] = $jumlah->ak;
		$data['ap'] = $jumlah->ap;
		$data['pe'] = $jumlah->pe;
		$data['total'] = $jumlah->tkj+$jumlah->tkr+$jumlah->tsm+$jumlah->ak+$jumlah->ap+$jumlah->pe;
		 
		echo json_encode($data);
	}
}