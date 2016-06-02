<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pilihan_model extends CI_Model{	
	function __construct(){
		parent::__construct();
	}
    
    public function save_pilihan($no_pendaftaran, $kode_jurusan, $priotitas){
        $sql = 'INSERT INTO pilihan(`no_pendaftaran`,`kode_jurusan`,`prioritas`) VALUES
        ("'.$no_pendaftaran.'","'.$kode_jurusan.'",'.$priotitas.')';
        $this->db->query($sql);
    }
    
    public function delete_pilihan($no_pendaftaran){
        $sql = 'DELETE FROM pilihan WHERE no_pendaftaran="'.$no_pendaftaran.'"';
        $this->db->query($sql);
    }
    
    function get_pilihan_by_pendaftaran($no_pendaftaran){
        $sql = 'SELECT * FROM pilihan WHERE no_pendaftaran="'.$no_pendaftaran.'" ORDER BY prioritas ASC LIMIT 2';
        return $this->db->query($sql);
    }
}