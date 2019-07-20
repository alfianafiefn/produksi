<?php
class M_import extends CI_Model
{
function __construct()
{
parent::__construct();
	
}
function import_upah_pegawai_cabang()
						{ 
							$query = $this->db->query("delete from setup_upahpegawai");

						  $fp = fopen($_FILES['import']['tmp_name'],'r') or die("can't open file");
						  while($csv_line = fgetcsv($fp,1024))
						  {
						for ($i = 0, $j = count($csv_line); $i < $j; $i++)
						  {
						   $insert_csv = array();
						   $insert_csv['noind'] = $csv_line[0];
						   $insert_csv['nama'] = $csv_line[1];
						   $insert_csv['g_pokok'] = $csv_line[2];
						   $insert_csv['ins_abc'] = $csv_line[3];
						   $insert_csv['ins_kedisiplinan'] = $csv_line[4];
						   $insert_csv['ubt'] = $csv_line[5];
						   $insert_csv['upamk'] = $csv_line[6];

						  }
						  $data = array(
						   'noind' => $insert_csv['noind'] ,
						   'nama' => $insert_csv['nama'] ,
						   'g_pokok' => $insert_csv['g_pokok'],
						   'ins_abc' => $insert_csv['ins_abc'],
						   'ins_kedisiplinan' => $insert_csv['ins_kedisiplinan'] ,
						   'ubt' => $insert_csv['ubt'],
						   'upamk' => $insert_csv['upamk']
						   );
							  $data['crane_features']=$this->db->insert('setup_upahpegawai', $data);
							 }
										   fclose($fp) or die("can't close file");
							   $data['success']="success";
							   return $data;
								  }
	
   function import_upah_cabang()
						{
							$query = $this->db->query("delete from tupahcabang");
							
						  $fp = fopen($_FILES['import']['tmp_name'],'r') or die("can't open file");
						  while($csv_line = fgetcsv($fp,1024))
						  {
						for ($i = 0, $j = count($csv_line); $i < $j; $i++)
						  {
						   $insert_csv = array();
						   $insert_csv['kd_lokasi'] = $csv_line[1];
						   $insert_csv['lokasi_kerja'] = $csv_line[2];
						   $insert_csv['ins_kepatuhan'] = $csv_line[3];
						   $insert_csv['uang_makan'] = $csv_line[4];
						   $insert_csv['p_lepas'] = $csv_line[5];
						  }
						  $data = array(
						   'kd_lokasi' => $insert_csv['kd_lokasi'] ,
						   'lokasi_kerja' => $insert_csv['lokasi_kerja'],
						   'ins_kepatuhan' => $insert_csv['ins_kepatuhan'],
						   'uang_makan' => $insert_csv['uang_makan'] ,
						   'p_lepas' => $insert_csv['p_lepas'] 
						   );
							  $data['crane_features']=$this->db->insert('tupahcabang', $data);
							 }
										   fclose($fp) or die("can't close file");
							   $data['success']="success";
							   return $data;
								  }
		  
function import_presensi()
						{ 
							
						  $fp = fopen($_FILES['import']['tmp_name'],'r') or die("can't open file");
						  while($csv_line = fgetcsv($fp,1024))
						  {
						for ($i = 0, $j = count($csv_line); $i <= $j; $i++)
						  {
						   $insert_csv = array();
						   $insert_csv['noind'] = $csv_line[0];
						   $insert_csv['nama'] = $csv_line[1];
						   $insert_csv['kodesie'] = $csv_line[2];
						   $insert_csv['gpokok'] = $csv_line[3];
						   $insert_csv['insabc'] = $csv_line[4];
						   $insert_csv['inskedis'] = $csv_line[5];
						   $insert_csv['inskepatuhan'] = $csv_line[6];
						   $insert_csv['ubt'] = $csv_line[7];
						   $insert_csv['upamk'] = $csv_line[8];
						   $insert_csv['plepas'] = $csv_line[9];
						   $insert_csv['um'] = $csv_line[10];
						   $insert_csv['shiftmasuk'] = $csv_line[11];
						   $insert_csv['PKJ'] = $csv_line[12];
						   $insert_csv['PDL'] = $csv_line[13];
						   $insert_csv['HTM'] = $csv_line[14];
						   $insert_csv['PSK'] = $csv_line[15];
						   $insert_csv['WPLBlibur'] = $csv_line[16];
						   $insert_csv['WPLBbiasa'] = $csv_line[17];
						   $insert_csv['CT'] = $csv_line[18];
						   $insert_csv['Wikp'] = $csv_line[19];
						   $insert_csv['Ttim'] = $csv_line[20];
						   $insert_csv['TTerlambat'] = $csv_line[21];
						   $insert_csv['Wterlambat'] = $csv_line[22];
						   $insert_csv['tanggal_berlaku'] = $csv_line[23];
						   $insert_csv['tanggal_kadaluarsa'] = $csv_line[24];
						  }
						  $data = array(
						   'noind' => $insert_csv['noind'] ,
						   'nama' => $insert_csv['nama'] ,
						   'kodesie' => $insert_csv['kodesie'] ,
						   'gpokok' => $insert_csv['gpokok'],
						   'insabc' => $insert_csv['insabc'],
						   'inskedis' => $insert_csv['inskedis'] ,
						   'inskepatuhan' => $insert_csv['inskepatuhan'],
						   'ubt' => $insert_csv['ubt'],
						   'upamk' => $insert_csv['upamk'],
						   'plepas' => $insert_csv['plepas'],
						   'um' => $insert_csv['um'],
						   'shiftmasuk' => $insert_csv['shiftmasuk'],
						   'PKJ' => $insert_csv['PKJ'],
						   'PDL' => $insert_csv['PDL'],
						   'HTM' => $insert_csv['HTM'],
						   'PSK' => $insert_csv['PSK'],
						   'WPLBlibur' => $insert_csv['WPLBlibur'],
						   'WPLBbiasa' => $insert_csv['WPLBbiasa'],
						   'CT' => $insert_csv['CT'],
						   'Wikp' => $insert_csv['Wikp'],
						   'Ttim' => $insert_csv['Ttim'],
						   'TTerlambat' => $insert_csv['TTerlambat'],
						   'Wterlambat' => $insert_csv['Wterlambat'],
						   'tanggal_berlaku' => $insert_csv['tanggal_berlaku'],
						   'tanggal_kadaluarsa' => $insert_csv['tanggal_kadaluarsa']
						   );
							  $data['crane_features']=$this->db->insert('presensi_pekerja', $data);
							  
							 }
										   fclose($fp) or die("can't close file");
							   $data['success']="success";
							   return $data;
								  }
}