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
			foreach ($query->result() as $row) {
				$sess = array(	'id_user'	=> $row->id_user,
								'pass' 		=> $row->pass,
								'id_peran'	=> $row->id_peran
							);
				$id_peran = $row->id_peran;
				
				$this->session->set_userdata($sess); 

				if($id_peran == '1') {
					echo "admin";
				} else if($id_peran == '2') {
					echo "editor";
				} else if($id_peran == '3') {
					echo "user";
				}
			}
		}
		else
		{
			echo "salah_semua";
			
		}
	}
	
	
}