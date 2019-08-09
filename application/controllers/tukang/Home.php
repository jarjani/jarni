	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
		public function index()
		{
			$data = array(
				'konten' =>'home' ,
				'titleheader' => 'Admin',
				'titlekonten' => 'Nama'
			 );
			$this->load->view('welcome_message', $data);
		}
	}
