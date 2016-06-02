<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Un_model extends CI_Model{	
	function __construct(){
		parent::__construct();
	}
    
    function save_un($no_pendaftaran, $unbi, $unmat, $uning, $unipa, $total_un){
        $sql = 'INSERT INTO un(`no_pendaftaran`,`unbi`,`unmat`,`uning`,`unipa`,`total_un`) VALUES
        ("'.$no_pendaftaran.'","'.$unbi.'","'.$unmat.'","'.$uning.'","'.$unipa.'","'.$total_un.'") ON DUPLICATE KEY UPDATE 
        unbi="'.$unbi.'", unmat="'.$unmat.'", uning="'.$uning.'", unipa="'.$unipa.'", total_un="'.$total_un.'"';
        $this->db->query($sql);
    }
    
    function update_un($no_pendaftaran, $unbi, $unmat, $uning, $unipa, $total_un){
        $data = array(
               'no_pendaftaran' => $no_pendaftaran,
               'unbi' => $unbi,
               'unmat' => $unmat,
               'uning' => $uning,
               'unipa' => $unipa,
               'total_un' => $total_un
            );

        $this->db->where('no_pendaftaran', $no_pendaftaran);
        $this->db->update('un', $data);
    }
    
    function get_un_by_pendaftaran($no_pendaftaran){
		$sql = 'SELECT * FROM un WHERE no_pendaftaran="'.$no_pendaftaran.'"';
		return $this->db->query($sql);
	}
    
    function delete_un($no_pendaftaran){
        $sql = 'DELETE FROM un WHERE no_pendaftaran="'.$no_pendaftaran.'"';
        $this->db->query($sql);
    }
}
