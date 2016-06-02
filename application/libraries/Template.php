<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	class Template{
		protected $_ci;
		
		function __construct(){ 
			$this->_ci=&get_instance();
		}
		
		function display($template, $data=null){
			$data['content']=$this->_ci->load->view($template,$data,true);
			$data['menu'] = $this->_ci->users_model->get_menu($this->_ci->access->get_level());
			$this->_ci->load->view('template',$data);
		}
        
        function display_inside($template, $data=null){
			$data['content']=$this->_ci->load->view($template['content'],$data,true);
            $data['inside']=$this->_ci->load->view($template['inside'],$data,true);
			$data['menu'] = $this->_ci->users_model->get_menu($this->_ci->access->get_level());
			$this->_ci->load->view('template',$data);
		}
		
	} 
?>