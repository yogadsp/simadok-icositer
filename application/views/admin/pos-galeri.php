<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pos Galeri</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/data.css">
</head>
<body>
    <?php $this->load->view('admin/header_adit'); ?>
    
    <!-- enctype="multipart/form-data" agar file bisa diupload -->
    <form action="<?php echo base_url(); ?>pos_galeri/pos" method="post" enctype="multipart/form-data">
        <center>
            <br>
            <br>
            <h1>POS GALERI</h1>

            <!-- untuk mendapatkan id_user dari session -->
            <?php $id_user = $this->session->userdata('id_user'); ?>
            <input  type="hidden" name="user" id="user" value="<?php echo $id_user ?>">

            <p>
                <label style="padding-right: 316px;"><b>Tanggal Kegiatan</b></label>
                    <input class="form-control col-md-4" type="date" name="tgl_galeri" id="tgl_galeri" required>
            </p>

            <p>
                <label style="padding-right: 356px;"><b>Keterangan</b></label>
                    <input class="form-control col-md-4" placeholder="Keterangan" type="text" name="ket" id="ket" size="50" required>
            </p>

            <p>
                <label style="padding-right: 52px;"><b>Upload Foto</b></label>
                    <input type="file" name="gambar" id="gambar" required>
                    
            </p>
            <input class="btn btn-success" type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">

        </center>
    </form>
</body>
</html>