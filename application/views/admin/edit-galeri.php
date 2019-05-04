<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Galeri</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
</head>
<body>

<form action="<?php echo base_url('data_galeri/updateGaleri') ?>" method="post" enctype="multipart/form-data">
        <center>
            <h3>EDIT GALERI</h3>

            <!-- untuk mendapatkan id_user dari session -->
            <?php $id_user = $this->session->userdata('id_user'); ?>
            <input type="hidden" name="user" id="user" value="<?php echo $id_user ?>">
            <input type="hidden" name="id_galeri" id="id_galeri" value="<?php echo $galeri->id_galeri ?>">

            <p>
                <label>Tanggal    </label>
                <!-- strtotime digunakan untuk mengubah format tanggal, waktu, dll -->
                    <input type="date" name="tgl_galeri" id="tgl_galeri" value ="<?php echo date('Y-m-d',strtotime($galeri->tgl_galeri)) ?>" required>
                    
            </p>
            <p>
                <label>Keterangan    </label>
                    <input type="text" name="ket" id="ket" size="40" value ="<?php echo $galeri->keterangan; ?>" required>
            </p>
            <p>
                <label>Foto Sekarang
                <img src="<?php echo base_url("upload/galeri/$galeri->gambar"); ?>" alt="" width="80%">
                </label>
            </p>
            <p>
                <label>Upload Foto Baru    </label>
                    <input type="file" name="gambar" id="gambar">
            </p>
            <input type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">
        </center>
    </form>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>