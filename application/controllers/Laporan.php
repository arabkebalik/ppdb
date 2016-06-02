<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends MY_Controller {
	function __construct(){
		parent:: __construct();
	}
	
	public function index(){
        parent::cek_akses('laporan');		
		$data['title']='Laporan Data Calon Siswa';
		$this->load->model('siswa_model');
		
		$jumlah = $this->siswa_model->get_count_per_jurusan()->row();
		$data['tkj'] = $jumlah->tkj;
		$data['tkr'] = $jumlah->tkr;
		$data['tsm'] = $jumlah->tsm;
		$data['ak'] = $jumlah->ak;
		$data['ap'] = $jumlah->ap;
		$data['pe'] = $jumlah->pe;
        $this->template->display('laporan_view', $data);
	}
	
	public function export(){
        $this->load->library('excel');
        $this->load->library('pendaftaran_lib');
        $this->load->model('siswa_model');
        $this->load->model('nilai_model');
        $this->load->model('pilihan_model');
		
        $inputFileName = './public/template.xls';
		$excel = PHPExcel_IOFactory::load($inputFileName);
        
        foreach($this->pendaftaran_lib->get_jurusan_all() as $jurusan){
            $excel->setActiveSheetIndex($jurusan-1);
            
            $siswa_query = $this->siswa_model->get_siswa_detail_by_jurusan($jurusan);
            $jml_siswa = $siswa_query->num_rows();
            if($jml_siswa>0){
                $count = 1;
                foreach($siswa_query->result() as $siswa){
                    $pretasi = $siswa->pres_status*($siswa->pres_tingkat+$siswa->pres_juara);
                    
                    $jurusan_query = $this->pilihan_model->get_pilihan_by_pendaftaran($siswa->no_pendaftaran);
                    $jml_pilihan = $jurusan_query->num_rows();
                    $pilihan1 = '';
                    $pilihan2 = '';
                    if($jml_pilihan>0){
                        if($jml_pilihan==1){                            
                            $pilihan1=$this->pendaftaran_lib->get_jurusan($jurusan_query->row()->kode_jurusan);
                        }else{
                            foreach($jurusan_query->result() as $temp){
        						if($temp->prioritas==1){
        							$pilihan1=$this->pendaftaran_lib->get_jurusan($temp->kode_jurusan);
        						}else if($temp->prioritas==2){
        							$pilihan2=$this->pendaftaran_lib->get_jurusan($temp->kode_jurusan);
        						}
                            }
                        }
                    }
                    
                    
                    $excel->getActiveSheet()
                                ->setCellValue('D2', $pilihan1)
                                ->setCellValue('D3', $jml_siswa)
								->setCellValue('A'.($count+7), $count)
								->setCellValue('B'.($count+7), $siswa->no_pendaftaran)
								->setCellValue('C'.($count+7), $siswa->no_ujian)
								->setCellValue('D'.($count+7), $siswa->nama)
								->setCellValue('E'.($count+7), $siswa->kelamin)
								->setCellValue('F'.($count+7), $siswa->tgllahir)
								->setCellValue('G'.($count+7), $siswa->asal_sekolah)
								->setCellValue('H'.($count+7), $pilihan1)
                                ->setCellValue('I'.($count+7), $pilihan2)
                                ->setCellValue('J'.($count+7), $pretasi)
                                ->setCellValue('K'.($count+7), $siswa->jarak)
                                ->setCellValue('L'.($count+7), $siswa->ekonomi)
                                ->setCellValue('M'.($count+7), ($pretasi+$siswa->jarak+$siswa->ekonomi));
                    
                    $count++;
                }
            }   
        }
        
        $tanggal=date('d-M-Y');
        $filename='Data Siswa - '.$tanggal.'.xls'; //save our workbook as this file name
		header('Content-Type: application/vnd.ms-excel'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
		 
		//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
		//if you want to save it as .XLSX Excel 2007 format
		$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
		//force user to download the Excel file without writing it to server's HD
		$objWriter->save('php://output');
	}
}