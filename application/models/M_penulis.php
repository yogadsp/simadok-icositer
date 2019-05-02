<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_penulis extends CI_model{

	public function tampilPenulis(){
        $data = $this->db->query('SELECT email, nama_penulis FROM penulis');

        return $data;
    }

	public function cariId($email){
        $data = $this->db->query("SELECT * FROM penulis WHERE email='$email'");
        $dataa = $data->row_array();

        return $dataa['email'];
    }

    public function tambah($email, $nama_penulis, $afiliasi){
        $query = "INSERT INTO penulis (email, nama_penulis, afiliasi) VALUES ('$email', '$nama_penulis', '$afiliasi')";

        $data = $this->db->query($query);

        return $data;
    }

    public function cariNama($nama){
        $query = "SELECT nama_penulis FROM penulis";
        $this->db->query($query);

        if($nama != ''){
            $data = $this->db->like('nama_penulis', $nama);
        }

        return $data->result_array();
    }

    public function tampilNama($keyword){
        $this->db->select('nama_penulis');
        $this->db->like('nama_penulis',$keyword,'after');
        $data = $this->db->get('penulis');

        return $data->result_array();
    }

}