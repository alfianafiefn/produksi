<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class pdf {
	
	{
		$CI = & get_instance();
		log_message ('Debug', 'mPDF class is loaded');
	}
	
	function load ($param=Null)
	{
		include_once APPPATH.'/third_party/mpdf/mpdf.php';
		
		if ($param == Null)
		{
			$param = '"en-GB-x","A4"," "," ",10,10,10,10,6,3';
		}
		
		return new mPDF($param);
	}
	
}