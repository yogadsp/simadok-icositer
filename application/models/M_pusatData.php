<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_pusatData extends CI_model{

        public function tambah($data){

            $data1 = array(
                // 'id_pusat' => $id,
                'id_jurnal' => $data['id_jurnal'],
                'tgl_input' => $data['tgl_input'],
                'id_user' => $data['user'],
                'id_bid_subbid' => $data['id_bid_subbid'],
                'nama_penulis' => $data['nama_penulis'],
                'email' => $data['email'],
                'afiliasi' => $data['afiliasi'],
                'status' => $data['status'],
                'dokumen' => $data['dokumen']
            );

            $this->db->insert('pusat_data', $data1);
            
        }

        public function tampilPusatData(){
            $query  =   "SELECT nama_penulis, jurnal.judul_jurnal, afiliasi, email, bidang.nama_bidang, 
                        sub_bidang.nama_subbidang, user.id_user, dokumen, status, id_pusat, tgl_input
                        FROM pusat_data 
                        NATURAL JOIN bidang
                        NATURAL JOIN sub_bidang
                        NATURAL JOIN jurnal
                        NATURAL JOIN bid_subbid
                        NATURAL JOIN user
                        NATURAL JOIN peran";
            $data = $this->db->query($query);
            
            return $data;
        }

        
        
        public function tampilDataJSAT(){
            $query  =   "SELECT nama_penulis, jurnal.judul_jurnal, afiliasi, email, bidang.nama_bidang, 
                        sub_bidang.nama_subbidang, user.id_user, dokumen, status, id_pusat
                        FROM pusat_data
                        NATURAL JOIN bidang
                        NATURAL JOIN sub_bidang
                        NATURAL JOIN jurnal
                        NATURAL JOIN bid_subbid
                        NATURAL JOIN user
                        NATURAL JOIN peran WHERE bidang.nama_bidang='JSAT'";
            $data = $this->db->query($query);
            
            return $data;
        }

        public function tampilDataIOP(){
            $query  =   "SELECT nama_penulis, jurnal.judul_jurnal, afiliasi, email, bidang.nama_bidang, 
                        sub_bidang.nama_subbidang, user.id_user, dokumen, status, id_pusat
                        FROM pusat_data
                        NATURAL JOIN bidang
                        NATURAL JOIN sub_bidang
                        NATURAL JOIN jurnal
                        NATURAL JOIN bid_subbid
                        NATURAL JOIN user
                        NATURAL JOIN peran WHERE bidang.nama_bidang='IOP'";
            $data = $this->db->query($query);
            
            return $data;
        }

        public function tampilDataSBSN(){
            $query  =   "SELECT nama_penulis, jurnal.judul_jurnal, afiliasi, email, bidang.nama_bidang, 
                        sub_bidang.nama_subbidang, user.id_user, dokumen, status, id_pusat
                        FROM pusat_data
                        NATURAL JOIN bidang
                        NATURAL JOIN sub_bidang
                        NATURAL JOIN jurnal
                        NATURAL JOIN bid_subbid
                        NATURAL JOIN user
                        NATURAL JOIN peran WHERE bidang.nama_bidang='sbsn'";
            $data = $this->db->query($query);
            
            return $data;
        }

        public function tampilDataPerBidang($idBidang){
            $query  =   "SELECT nama_penulis, jurnal.judul_jurnal, afiliasi, email, bidang.nama_bidang, 
                        sub_bidang.nama_subbidang, user.id_user, dokumen, status, id_pusat, tgl_input
                        FROM pusat_data
                        NATURAL JOIN bidang
                        NATURAL JOIN sub_bidang
                        NATURAL JOIN jurnal
                        NATURAL JOIN bid_subbid
                        NATURAL JOIN user
                        NATURAL JOIN peran WHERE bidang.id_bidang='$idBidang'";
            $data = $this->db->query($query);

            return $data->result_array();
        }

        public function cariId($id_pusat){
            $query  =   "SELECT nama_penulis, jurnal.judul_jurnal, afiliasi, email, bidang.nama_bidang, 
                        sub_bidang.nama_subbidang, sub_bidang.id_subbidang, user.id_user, dokumen, status, bidang.id_bidang,
                        id_pusat, jurnal.id_jurnal FROM pusat_data
                        NATURAL JOIN bidang
                        NATURAL JOIN sub_bidang
                        NATURAL JOIN jurnal
                        NATURAL JOIN bid_subbid
                        NATURAL JOIN user
                        NATURAL JOIN peran WHERE id_pusat='$id_pusat'";
            
            $data = $this->db->query($query);

            return $data->row();
        }

        public function updateDataPusat($id_pusat, $data){
            $data1 = array(
                // 'id_pusat' => $id,
                'id_user' => $data['user'],
                'id_bid_subbid' => $data['id_bid_subbid'],
                'nama_penulis' => $data['nama_penulis'],
                'email' => $data['email'],
                'afiliasi' => $data['afiliasi'],
                'status' => $data['status'],
                'dokumen' => $data['dokumen']
            );

            $this->db->where('id_pusat', $id_pusat);
            $query = $this->db->update('pusat_data', $data1);
            // Produces:
            //
            //      UPDATE mytable
            //      SET title = '{$title}', name = '{$name}', date = '{$date}'
            //      WHERE id = $id
            if($query){
                echo '<script>alert("Data berhasil di update!");</script>';
            } else {
                echo '<script>alert("Data tidak berhasil di update!"); </script>';
            }
        }

        public function cariDokumen($id_pusat){
            $query = "SELECT dokumen FROM pusat_data WHERE id_pusat='$id_pusat'";

            $data = $this->db->query($query);

            $row = $data->row_array();

            return $row['dokumen'];
        }
	
}