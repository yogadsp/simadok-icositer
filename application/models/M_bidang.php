<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_bidang extends CI_model{
	public function tampilBidang(){
        $data = $this->db->query('SELECT * FROM bidang');
                
        return $data;
    }

    public function tambah($nama_bidang){
        $cek = $this->db->query("SELECT id_bidang FROM bidang WHERE nama_bidang='$nama_bidang'");

        if($cek->num_rows() > 0) {
            echo 'Data Sudah Ada';
        } else {
            $data = $this->db->query("INSERT INTO bidang (nama_bidang) VALUES ('$nama_bidang')");
        }

        return $data;
    }
    
    public function cariId($nama_bidang, $nama_subbidang){
        $data = $this->db->query("SELECT id_bid_subbid FROM bid_subbid 
                                  WHERE nama_bidang='$nama_bidang' AND nama_subbidang='$nama_subbidang'" );
        $dataa = $data->row_array();

        return $dataa['id_bid_subbid'];
    }
	
}