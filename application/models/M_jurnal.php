<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_jurnal extends CI_model{
    public function tampilJurnal(){
        $data = $this->db->query('SELECT * FROM jurnal');

        return $data;
    }

	public function tambah($judul){
        $cek_judul = $this->db->query("SELECT id_jurnal FROM jurnal WHERE judul_jurnal='$judul'");

        if($cek_judul->num_rows() > 0) {
            echo "<script> alert('Judul sudah ada'); </script>";
            
            echo "<script> window.history.back(); </script>";
        } else {
            $data = $this->db->query("INSERT INTO jurnal (judul_jurnal) VALUES ('$judul')");
        }
    }
    
	public function cariId($judul){
        $data = $this->db->query("SELECT id_jurnal FROM jurnal WHERE judul_jurnal='$judul'");
        $dataa = $data->row_array();

        return $dataa['id_jurnal'];
    }

    public function updateDataJurnal($id_jurnal, $judul){
        $this->db->set('judul_jurnal', $judul);
        $this->db->where('id_jurnal', $id_jurnal);
        $this->db->update('jurnal'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
    }
}