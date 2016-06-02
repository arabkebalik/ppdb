<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Siswa_model extends CI_Model{	
	function __construct(){
		parent::__construct();
	}
    
    function save_siswa($no_pendaftaran, $no_formulir, $no_ujian, $nama, $asal_sekolah, $tgllahir, $kelamin, $petugas){
        $sql = 'INSERT INTO siswa(`no_pendaftaran`,`no_formulir`,`no_ujian`,`nama`,`asal_sekolah`,`tgllahir`,`kelamin`,`petugas`) VALUES
            ("'.$no_pendaftaran.'", "'.$no_formulir.'", "'.$no_ujian.'", "'.$nama.'", "'.$asal_sekolah.'", "'.$tgllahir.'", "'.$kelamin.'", "'.$petugas.'")';
        $this->db->query($sql);
    }
    
    function update_siswa($no_pendaftaran, $nama, $asal_sekolah, $tgllahir, $kelamin){
        $sql = 'UPDATE siswa SET `nama`="'.$nama.'", `asal_sekolah`="'.$asal_sekolah.'", `tgllahir`="'.$tgllahir.'", `kelamin`="'.$kelamin.'" WHERE no_pendaftaran="'.$no_pendaftaran.'"';
        $this->db->query($sql);
    }
    
    function delete_siswa($no_pendaftaran){
        $sql = 'DELETE FROM siswa WHERE no_pendaftaran="'.$no_pendaftaran.'"';
        $this->db->query($sql);
    }
    
    function get_siswa_by_pendaftaran($no_pendaftaran){
		$sql = 'SELECT * FROM siswa WHERE no_pendaftaran="'.$no_pendaftaran.'"';
		return $this->db->query($sql);
	}
    
    function get_siswa_detail_by_pendaftaran($no_pendaftaran){
        $sql = 'SELECT siswa.*, nilai.pres_status, nilai.pres_tingkat, nilai.pres_juara, nilai.jarak, nilai.ekonomi, nilai.total_nilai FROM ppdb.siswa INNER JOIN ppdb.nilai ON (siswa.no_pendaft.aran = nilai.no_pendaftaran) WHERE siswa.no_pendaftaran="'.$no_pendaftaran.'"';
        return $this->db->query($sql);
    }
    
    function get_siswa_detail_by_jurusan($kode_jurusan){
        $sql = 'SELECT siswa.*, nilai.pres_status, nilai.pres_tingkat, nilai.pres_juara, nilai.jarak, nilai.ekonomi, nilai.total_nilai, pilihan.kode_jurusan, pilihan.prioritas 
        FROM ppdb.siswa INNER JOIN ppdb.nilai ON (siswa.no_pendaftaran = nilai.no_pendaftaran) 
        INNER JOIN ppdb.pilihan ON (siswa.no_pendaftaran = pilihan.no_pendaftaran) WHERE pilihan.prioritas=1 AND pilihan.kode_jurusan="'.$kode_jurusan.'" ORDER BY nama ASC';
        return $this->db->query($sql);
    }
    
    function get_siswa_by_uan($no_uan){
        $sql = 'SELECT * FROM siswa WHERE no_ujian="'.$no_uan.'"';
        return $this->db->query($sql);
    }
    
    function get_siswa($start, $rows, $search){
		$sql = 'SELECT siswa.*, nilai.pres_status, nilai.pres_tingkat, nilai.pres_juara, nilai.jarak, nilai.ekonomi, nilai.total_nilai, pilihan.kode_jurusan, pilihan.prioritas 
        FROM ppdb.siswa INNER JOIN ppdb.nilai ON (siswa.no_pendaftaran = nilai.no_pendaftaran) 
        INNER JOIN ppdb.pilihan ON (siswa.no_pendaftaran = pilihan.no_pendaftaran) WHERE pilihan.prioritas=1 AND 
        (siswa.nama LIKE "%'.$search.'%" OR siswa.no_ujian LIKE "%'.$search.'%" OR siswa.no_pendaftaran LIKE "%'.$search.'%") ORDER BY
        pilihan.kode_jurusan ASC, siswa.nama ASC LIMIT '.$start.','.$rows;
		return $this->db->query($sql);
	}
    
    function get_count_siswa($search){
        $sql = 'SELECT COUNT(*) AS hasil FROM ppdb.siswa INNER JOIN ppdb.nilai ON (siswa.no_pendaftaran = nilai.no_pendaftaran) 
        INNER JOIN ppdb.pilihan ON (siswa.no_pendaftaran = pilihan.no_pendaftaran) WHERE pilihan.prioritas=1 OR 
        (siswa.nama LIKE "'.$search.'" OR siswa.no_ujian LIKE "'.$search.'" OR siswa.no_pendaftaran LIKE "'.$search.'")';
		return $this->db->query($sql);
    }
	
	function get_count_per_jurusan(){
		$sql = 'SELECT COUNT(CASE  WHEN pilihan.kode_jurusan="1" THEN 1 END) AS tkj, 
			COUNT(CASE  WHEN pilihan.kode_jurusan="2" THEN 1 END) AS tkr, 
			COUNT(CASE  WHEN pilihan.kode_jurusan="3" THEN 1 END) AS tsm, 
			COUNT(CASE  WHEN pilihan.kode_jurusan="4" THEN 1 END) AS ak, 
			COUNT(CASE  WHEN pilihan.kode_jurusan="5" THEN 1 END) AS ap,
            COUNT(CASE  WHEN pilihan.kode_jurusan="6" THEN 1 END) AS pe
			FROM ppdb.siswa INNER JOIN ppdb.pilihan ON (siswa.no_pendaftaran = pilihan.no_pendaftaran) WHERE pilihan.prioritas=1';
		return $this->db->query($sql);
	}

    function nilai(){
        $sql = 'SELECT MAX(unbi)AS maxbi, round(AVG(unbi),2) AS avgbi, MIN(unbi) AS minbi, MAX(unmat)AS maxmat, round(AVG(unmat),2) AS avgmat, MIN(unmat) AS minmat, MAX(uning)AS maxing, round(AVG(uning),2) AS avging, MIN(uning) AS mining, MAX(unipa)AS maxipa, round(AVG(unipa),2) AS avgipa, MIN(unipa) AS minipa, MAX(total_un)as maxna, MIN(total_un)as minna from un WHERE 1 ';
        return $this->db->query($sql);
    }
}