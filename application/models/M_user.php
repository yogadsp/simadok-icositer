<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_user extends CI_model{
	function tambahDataUser($data){
		$pwd = md5($data['pass']);
		
		$this->db->where('id_user',$data['id_user']);
		$this->db->where('id_peran',$data['id_peran']);
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

	function tampilPeran(){
		$query = "SELECT * FROM peran";

		$data = $this->db->query($query);

		return $data;
	}

	function editData($id_user, $id_peran){
		$query = "SELECT * FROM user WHERE id_peran='$id_peran' AND id_user='$id_user'";

		$data = $this->db->query($query);

		return $data->row();
	}

	public function updateData($data){
		$id_user = $data['user_lama'];
		$id_peran = $data['peran_lama'];
		$kondisi = array('id_user' => $id_user, 'id_peran' => $id_peran);
		
		$this->db->select('pass');
		$this->db->where($kondisi);
		$lama_pass = $this->db->get('user');

		$cek_dbl = array('id_user' => $data['user'], 'id_peran' => $data['peran'], 'pass' => $data['pass']);
		$this->db->where($cek_dbl);
		$query = $this->db->get('user');

		if($query->num_rows()>0)
		{
			echo "<script> alert('Username sudah ada!'); </script>";
		}
		else
		{
			$dataa = $lama_pass->row_array();

			$pwd = null;
			if($dataa['pass'] == $data['pass']){
				$pwd = $data['pass'];
			} else {
				$pwd = md5($data['pass']);
			}

			$data1 = array(
				'id_user' => $data['user'],
				'pass' => $pwd,
				'id_peran' => $data['peran']
			);

			$this->db->where($kondisi);
			$queryy = $this->db->update('user', $data1);
			// Produces:
			//
			//      UPDATE mytable
			//      SET title = '{$title}', name = '{$name}', date = '{$date}'
			//      WHERE id = $id
			if($queryy){
				echo '<script>alert("Data berhasil di update!");</script>';
			} else {
				echo '<script>alert("Data tidak berhasil di update!"); </script>';
			}
		}
	}
}