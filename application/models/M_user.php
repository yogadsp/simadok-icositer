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
		$id_user = $data['user'];
		$id_peran = $data['peran'];
		// $kondisi = array('id_user' => $id_user, 'id_peran' => $id_peran);

		// $this->db->where($kondisi);
		// $query = $this->db->get('user');

		// if($query->num_rows()>0)
		// {
		// 	echo "<script> alert('Username sudah ada!'); </script>";
		// }
		// else
		// {
			// $dataa = $query->row_array();

			$pwd = $data['pass'];
			// if($dataa['pass'] == $data['pass']){
			// 	$pwd = $data['pass'];
			// } else {
			// 	$pwd = md5($data['pass']);
			// }
			$data1 = array(
				'id_user' => $data['user'],
				'pass' => $data['pass'],
				'id_peran' => $data['peran']
			);
			// $data1 = array(
			// 	'id_user' => $id_user,
			// 	'pass' => $pwd,
			// 	'id_peran' => $id_peran
			// );
			
			$query = "UPDATE user
			SET id_user = '$id_user', pass = '$pwd', id_peran = $id_peran
			WHERE id_user = '$id_user' AND id_peran=$id_peran";
			$data = $this->db->query($query);

			// UPDATE user SET id_user = '$id_user', pass = '$pwd', id_peran = '$id_peran' WHERE id_user = 'yogaas' AND id_peran = 2;


			// $this->db->where('id_user', $data['user']);
			// $queryy = $this->db->update('user', $data1);
			// Produces:
			//
			//      UPDATE mytable
			//      SET title = '{$title}', name = '{$name}', date = '{$date}'
			//      WHERE id = $id
			if($data){
				echo '<script>alert("Data berhasil di update!");</script>';
			} else {
				echo '<script>alert("Data tidak berhasil di update!"); </script>';
			}

		// }
    }
}