<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('PHPMailer/class.phpmailer.php');
	require_once('PHPMailer/PHPMailerAutoload.php');

	class My_PHPMailer extends PHPMailer{
		
		public function __construct(){
			parent::__construct();
		}
	}


?>