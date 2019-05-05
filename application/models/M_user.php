<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_user extends CI_model{
	function tambahDataUser($data){
		$pwd = md5($data['pass']);
		
		$this->db->where('id_user',$data['id_user']);
		$this->db->where('pass',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			echo "<script> alert('Username sudah ada!'); </script>";
		}
		else
		{
			$data1 = array(
                'id_user' => $data['id_user'],
                'pass' => $pwd,
                'id_peran' => $data['id_peran']
            );

            $this->db->insert('user', $data1);
            echo "<script> alert('Data berhasil ditambah!'); </script>";
            redirect(base_url('home/tambah_jurnal'), 'refresh');
		}
	}

	function tampilDataUser(){
		$query = "SELECT * FROM user NATURAL JOIN peran";

		$data = $this->db->query($query);

		return $data;
	}
}