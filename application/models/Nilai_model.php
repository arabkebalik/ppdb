<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Nilai_model extends CI_Model{	
	function __construct(){
		parent::__construct();
	}
    
    function save_nilai($no_pendaftaran, $pres_status, $pres_tingkat, $pres_juara, $jarak, $ekonomi, $total_nilai){
        $sql = 'INSERT INTO nilai(`no_pendaftaran`,`pres_status`,`pres_tingkat`,`pres_juara`,`jarak`,`ekonomi`,`total_nilai`) VALUES
        ("'.$no_pendaftaran.'","'.$pres_status.'","'.$pres_tingkat.'","'.$pres_juara.'","'.$jarak.'","'.$ekonomi.'","'.$total_nilai.'") ON DUPLICATE KEY UPDATE 
        pres_status="'.$pres_status.'", pres_tingkat="'.$pres_tingkat.'", pres_juara="'.$pres_juara.'", jarak="'.$jarak.'", ekonomi="'.$ekonomi.'", total_nilai="'.$total_nilai.'"';
        $this->db->query($sql);
    }
    
    function update_nilai($judul, $isi, $id){
        $sql = '';
        $this->db->query($sql);
    }
    
    function get_nilai_by_pendaftaran($no_pendaftaran){
		$sql = 'SELECT * FROM nilai WHERE no_pendaftaran="'.$no_pendaftaran.'"';
		return $this->db->query($sql);
	}
    
    function delete_nilai($no_pendaftaran){
        $sql = 'DELETE FROM nilai WHERE no_pendaftaran="'.$no_pendaftaran.'"';
        $this->db->query($sql);
    }
}