<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}
	public function index() {
		$data['title']='PPDB SMK Negeri 1 Pemalang';
		$this->load->view('index',$data);
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

	function chart(){
		$this->load->model('siswa_model');

		$jumlah = $this->siswa_model->get_count_per_jurusan()->row();
		$data['tkj'] = $jumlah->tkj;
		$data['tkr'] = $jumlah->tkr;
		$data['tsm'] = $jumlah->tsm;
		$data['ak'] = $jumlah->ak;
		$data['ap'] = $jumlah->ap;
		$data['pe'] = $jumlah->pe;

		echo json_encode([$data]);
	}
	function nilai(){
		$this->load->model('siswa_model');
		$nilai = $this->siswa_model->nilai()->row();
		$data['maxbi'] = $nilai->maxbi;
		$data['avgbi'] = $nilai->avgbi;
		$data['minbi'] = $nilai->minbi;

		$data['maxmat'] = $nilai->maxmat;
		$data['avgmat'] = $nilai->avgmat;
		$data['minmat'] = $nilai->minmat;
		
		$data['maxing'] = $nilai->maxing;
		$data['avging'] = $nilai->avging;
		$data['mining'] = $nilai->mining;
		
		$data['maxipa'] = $nilai->maxipa;
		$data['avgipa'] = $nilai->avgipa;
		$data['minipa'] = $nilai->minipa;

		$data['maxna'] = $nilai->maxna;
		$data['minna'] = $nilai->minna;
		
		echo json_encode($data);
	}

}