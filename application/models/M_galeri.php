<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_galeri extends CI_model{

    public function tampilDataGaleri(){
        $query = "SELECT * FROM galeri";
        $data = $this->db->query($query);

        return $data;
    }

    public function tampilGambar(){
        $query = "SELECT tgl_galeri, keterangan, gambar FROM galeri";
        $data = $this->db->query($query);

        return $data;
    }

    public function posData($data){
        $data1 = array(
            'tgl_galeri' => $data['tgl_galeri'],
            'keterangan' => $data['ket'],
            'gambar' => $data['gambar'],
            'id_user' => $data['user']
        );

        $this->db->insert('galeri', $data1);
    }

    public function editData($id_galeri){
        $query = "SELECT * FROM galeri WHERE id_galeri='$id_galeri'";
        $data = $this->db->query($query);

        return $data->row();
    }

    public function updateData($id_galeri, $data){
        $data1 = array(
            'id_user' => $data['user'],
            'tgl_galeri' => $data['tgl_galeri'],
            'keterangan' => $data['ket'],
            'gambar' => $data['gambar']
        );

        $this->db->where('id_galeri', $id_galeri);
        $query = $this->db->update('galeri', $data1);
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

    public function cariGambar($id_galeri){
        $query = "SELECT gambar FROM galeri WHERE id_galeri='$id_galeri'";
        $data = $this->db->query($query);

        $row = $data->row_array();

        return $row['gambar'];
    }
}