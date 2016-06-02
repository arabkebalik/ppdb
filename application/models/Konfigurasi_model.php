<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Konfigurasi_model extends CI_Model{	
	function __construct(){
		parent::__construct();
	}
    
    function get_konfigurasi_by_kode($kode){
        $sql = 'SELECT * FROM konfigurasi WHERE kode = "'.$kode.'"';
        return $this->db->query($sql);
    }
    
    function save_konfigurasi($kode, $konfigurasi, $keterangan){
        $sql = 'INSERT INTO konfigurasi(`kode`, `konfigurasi`, `keterangan`) VALUES ("'.$kode.'", "'.$konfigurasi.'", "'.$keterangan.'")';
        $this->db->query($sql);
    }
    
    function update_konfigurasi($kode, $konfigurasi, $keterangan){
        $sql = 'UPDATE konfigurasi SET `konfigurasi`="'.$konfigurasi.'", `keterangan`="'.$keterangan.'" WHERE `kode`="'.$kode.'"';
        $this->db->query($sql);
    }
}