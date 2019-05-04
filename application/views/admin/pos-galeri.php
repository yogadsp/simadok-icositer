<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pos Galeri</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
</head>
<body>
    <?php $this->load->view('admin/header_adit'); ?>
    
    <!-- enctype="multipart/form-data" agar file bisa diupload -->
    <form action="<?php echo base_url(); ?>pos_galeri/pos" method="post" enctype="multipart/form-data">
        <center>
            <h3 style="color: black;">POS GALERI</h3>

            <!-- untuk mendapatkan id_user dari session -->
            <?php $id_user = $this->session->userdata('id_user'); ?>
            <input type="hidden" name="user" id="user" value="<?php echo $id_user ?>">

            <p>
                <label style="color: black;">Tanggal Kegiatan    </label>
                    <input type="date" name="tgl_galeri" id="tgl_galeri" required>
            </p>

            <p>
                <label style="color: black;">Keterangan    </label>
                    <input type="text" name="ket" id="ket" size="50" required>
            </p>

            <p>
                <label style="color: black;">Upload Foto    </label>
                <div style="color: black;">
                    <input type="file" name="gambar" id="gambar" required>
                    </div>
            </p>
            <input type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">

        </center>
    </form>
</body>
</html>