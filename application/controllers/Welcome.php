		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');

		class Welcome extends CI_Controller {
			public function index()
			{
				$data = array(
					'konten' =>'home' ,
					'titleheader' => 'Admin',
					'titlekonten' => 'Nama'
				 );
				$this->load->view('welcome_message', $data);
			}
			public function listnama()
			{
				$data = array(
					'konten' =>'listnama' ,
					'titleheader' => 'Admin',
					'titlekonten' => 'Nama'
				 );
				$this->load->view('welcome_message', $data);
			}
		}
