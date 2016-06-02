<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pendaftaran_lib{	
	function __construct(){
	   
	}
    
    public function get_jurusan($kode){
        $jurusan = '';
        switch($kode){
            case '1':
                $jurusan='Teknik Komputer Jaringan';
                break;
            case '2':
                $jurusan='Teknik Kendaraan Ringan';
                break;
            case '3':
                $jurusan='Teknik Sepeda Motor';
                break;
            case '4':
                $jurusan='Akuntansi';
                break;
            case '5':
                $jurusan='Administrasi Perkantoran';
                break;
            case '6':
                $jurusan='Pemasaran';
                break;
            default:
                $jurusan='';
                break;
        }
        return $jurusan;
    }
    
    
    public function get_prestasi_status($kode){
        $status = '';
        switch($kode){
            case '1':
                $status='Perorangan';
                break;
            case '0.5':
                $status='Sampai 5 (lima) Orang';
                break;
            case '0.3':
                $status='Sampai 10 (sepuluh) Orang';
                break;
            case '0.3':
                $status='Ketua Regu lebih dari 10 (sepuluh) Orang';
                break;
            case '0.2':
                $status='Anggota Regu lebih dari 10 (sepuluh) Orang';
                break;
            default:
                $status='Tidak Ada Penghargaan';
                break;
        }
    }
    
    public function get_prestasi_tingkat($kode){
        
    }
    
    public function get_jurusan_all(){
        $jurusan = array('1','2','3','4','5','6');
        return $jurusan;
    }
    
    public function get_no_pendaftaran($jurusan, $no_formulir){
        $no_pendaftaran = ($jurusan*10000)+$no_formulir;
        return $no_pendaftaran;
    }
}