<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Cek_login extends CI_model{
    function apa_login(){		
				$id_user = $this->session->userdata('id_user');
				$pass = $this->session->userdata('pass');
				if(empty($id_user)){
					echo '<script>alert("Anda harus login dahulu!");
					window.location.href="Login";
					</script>'; //tambahin sendiri kalo jquery
				}
		}	
}