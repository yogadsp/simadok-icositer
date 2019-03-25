<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Login extends CI_model{
	function cek_login($data){
		$pwd = md5($data['p']);
		
		$this->db->where('id_user',$data['u']);
		$this->db->where('pass',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			echo "sukses";
			foreach ($query->result() as $row) {
				$sess = array(	'id_user'	=> $row->id_user,
							  	'pass' 		=> $row->pass);
				$this->session->set_userdata($sess); 
			}
		}
		else
		{
			echo "salah_semua";
			
		}
	}
	
	
}