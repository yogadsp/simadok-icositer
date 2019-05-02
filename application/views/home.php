<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
</head>
<body>
    <?php $this->load->view('header'); ?>
    <p>Ini halaman home</p>

    <?php $id_user = $this->session->userdata('id_user'); ?>

    <p> <?php echo $id_user ?> </p>

    <?php include("admin/konversi_tanggal.php"); ?>

    <center>
        <h2>DATA JURNAL</h2>
    </center>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

            <!-- <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?php echo base_url();?>home/data_jurnal" class="btn btn-secondary active">Tampil Semua</a>
                <a href="<?php echo current_url();?>/tampilJSAT" class="btn btn-secondary">JSAT</a>
                <a href="<?php echo current_url();?>/tampilIOP" class="btn btn-secondary">IOP</a>
                <a href="<?php echo current_url();?>/tampilSBSN" class="btn btn-secondary">SBSN </a>
            </div> -->
            
                    <table class="table table-striped" id="contoh">
                    <thead class="kepala">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Afiliasi</th>
                        <th scope="col">Email</th>
                        <th scope="col">Bidang</th>
                        <th scope="col">Sub Bidang</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody id="isi-tabel">
                    <?php 
                        $no = 1;
                        foreach($pusat_data->result() as $row) { ?>
                        <tr id="<?php echo $row->id_pusat ?>" >
                            <td><?php echo $no++ ?></td>
                            <td><?php echo tanggal_($row->tgl_input) ?></td>
                            <td><?php echo $row->nama_penulis ?></td>
                            <td><?php echo $row->judul_jurnal ?></td>
                            <td><?php echo $row->afiliasi ?></td>
                            <td><?php echo $row->email ?></td>
                            <td><?php echo $row->nama_bidang ?></td>
                            <td><?php echo $row->nama_subbidang ?></td>
                            <td><?php echo $row->status ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    </table>
            </div>
            <div class="col-md-1"></div>
        </div>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/DataTables/datatables.min.js"></script>


    <script>
		$(document).ready(function() {
            $('#contoh').DataTable();
        });
	</script>

    <!-- <p><a href="<?php echo current_url();?>/data_jurnal">Data Jurnal</a></p>

    <p><a href="<?php echo current_url();?>/admin/tambah_user">Tambah User</a></p> -->

</body>
</html>