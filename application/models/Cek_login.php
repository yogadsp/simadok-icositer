<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Cek_login extends CI_model{
    function login_editor(){		
				$id_user = $this->session->userdata('id_user');
				$pass = $this->session->userdata('pass');
				$id_peran = $this->session->userdata('id_peran');
				if(empty($id_user)){
					echo '<script>alert("Anda harus login dahulu!");
					window.location.href="Login";
					</script>'; //tambahin sendiri kalo jquery
				} else if ($id_peran == '3'){
					echo '<script>alert("Anda bukan editor!");
					window.location.href="home";
					</script>';
				}
		}
	
	function login_admin(){
				$id_user = $this->session->userdata('id_user');
				$pass = $this->session->userdata('pass');
				$id_peran = $this->session->userdata('id_peran');
				if(empty($id_user)){
					echo '<script>alert("Anda harus login dahulu!");
					window.location.href="Login";
					</script>'; //tambahin sendiri kalo jquery
				} else if ($id_peran == '2' || $id_peran == '3'){
					echo '<script>alert("Anda bukan admin!");
					window.location.href="data_jurnal";
					</script>';
				}
	}

	function login_penulis(){
		$id_user = $this->session->userdata('id_user');
		$pass = $this->session->userdata('pass');
		$id_peran = $this->session->userdata('id_peran');
		if(empty($id_user)){
			echo '<script>alert("Anda harus login dahulu!");
			window.location.href="Login";
			</script>'; //tambahin sendiri kalo jquery
		}
}
}