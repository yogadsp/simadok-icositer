<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function aksi_logout()
	{	
        $this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
	
}