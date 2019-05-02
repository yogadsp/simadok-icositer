<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_sub_bidang extends CI_model{

        public function getSubBidangRows($id_bidang){
                $queryy = "SELECT * FROM sub_bidang WHERE id_subbidang IN
                           (SELECT id_subbidang FROM bid_subbid WHERE id_bidang= '$id_bidang')";

                $query = $this->db->query($queryy);

                $response = $query->result_array();

                return $response;
        }
        
        public function tambah($nama_subbidang){
                $query = "INSERT INTO sub_bidang (nama_subbidang) VALUES ('$nama_subbidang')";

                $data = $this->db->query($query);

                return $data;
        }

        public function cariId($nama_subbidang){
                $query = "SELECT id_subbidang FROM sub_bidang WHERE nama_subbidang='$nama_subbidang'";

                $data = $this->db->query($query);

                $row = $data->row_array();

                return $row['id_subbidang'];
        }
	
}