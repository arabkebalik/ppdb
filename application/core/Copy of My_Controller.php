<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->access->is_login()){
			// diredirect ke bagian login
			redirect('admin/welcome');
		}
	}
	
	function is_login(){
		return $this->access->is_login();
	}
	
	function cek_akses($kode_menu){
		if(!$this->access->cek_akses($kode_menu)){
			redirect('admin/welcome');
		}
	}
}

class My_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
}