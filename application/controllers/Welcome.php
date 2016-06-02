<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent:: __construct();
	}
	
	public function index(){
	    $this->load->helper('form');
	    $data['title']='Halaman Login';
		if(!$this->access->is_login()){
            $this->load->view('login_view',$data);
		}else{
            redirect('dashboard');
		}
	}
	
	function login(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username','trim|required|strip_tags');
		$this->form_validation->set_rules('password', 'Password','trim|required');
		       
		if($this->form_validation->run() == TRUE){
			$this->form_validation->set_rules('token','token','callback_check_login');
			if($this->form_validation->run() == FALSE){
				//Jika login gagal
                $status['status'] = 0;
                $status['error'] = validation_errors();
			}else{
				//Jika sukses
                $status['status'] = 1;
			}
		}else{
			//Jika form validasi gagal
            $status['status'] = 0;
            $status['error'] = validation_errors();
		}
        
        echo json_encode($status);
	}
	
	function logout(){
		$this->access->logout();
		redirect('welcome');
	}
	
	function check_login(){
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		
		$login = $this->access->login($username, $password);
		if($login==1){
			return TRUE;
		}else if($login==2){
			$this->form_validation->set_message('check_login','Password yang dimasukkan salah');
			return FALSE;
		}else{
			$this->form_validation->set_message('check_login','Username yang dimasukkan tidak dikenal');
			return FALSE;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */