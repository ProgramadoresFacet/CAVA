<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('/../libraries/mpdf/mpdf.php');

	class M_pdf{
		//public $param;
		public $pdf;

		//public function __construct($param = '"en-GB-x","A4","","",10,10,10,10,6,3'){
		public function __construct(){
			//$this->param = $param;
			//$this->pdf = new mPDF($this->param);
			$this->pdf_A4L = new mPDF('utf-8', 'A4-L');
			$this->pdf_A4 = new mPDF('utf-8', 'A4');
			$this->pdf_A6L = new mPDF('utf-8', 'A6-L');
		}
	}
?>