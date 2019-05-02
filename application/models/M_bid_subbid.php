<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_bid_subbid extends CI_model{
	public function tampilBidang(){
        $data = $this->db->query('SELECT nama_bidang FROM bid_subbid GROUP BY nama_bidang');
                
        return $data;
    }
    
    public function tambah($id_bidang, $id_subbidang){
        $cek = $this->db->query("SELECT id_bid_subbid FROM bid_subbid WHERE id_bidang='$id_bidang'
                                 AND id_subbidang='$id_subbidang'");

        if($cek->num_rows() > 0) {
            alert("baris sudah ada");
        } else {
            $data = $this->db->query("INSERT INTO bid_subbid (id_bidang, id_subbidang) VALUES ('$id_bidang', '$id_subbidang')");
        }

        return $data;
    }

    public function cariId($id_bidang, $id_subbidang){
        $data = $this->db->query("SELECT id_bid_subbid FROM bid_subbid WHERE id_bidang='$id_bidang'
                                 AND id_subbidang='$id_subbidang'");
        $row = $data->row_array();

        return $row['id_bid_subbid'];
        
    }

    public function cariSub($id_pusat){
        $query = "SELECT id_subbidang, nama_subbidang FROM sub_bidang WHERE id_subbidang IN ( 
                  SELECT id_subbidang FROM bid_subbid WHERE id_bidang = (
                  SELECT id_bidang FROM bid_subbid WHERE id_bid_subbid = ( 
                  SELECT id_bid_subbid FROM pusat_data WHERE id_pusat = '$id_pusat'
                  )))";

        $data = $this->db->query($query);

        return $data;
    }
	
}