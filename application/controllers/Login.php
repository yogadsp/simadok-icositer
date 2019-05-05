<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$id_user = $this->session->userdata('id_user');
		if(empty($id_user)){
			$this->load->view('login');
		} else {
			echo '<script>alert("Anda sudah login!");
			window.history.back();;
					</script>';
		}
	}

	public function aksi_login()
	{	
		$data['u'] = $this->input->post('user');
		$data['p'] = $this->input->post('pass');
		$this->load->model('M_Login');
		$this->M_Login->cek_login($data);
	}
	
}
