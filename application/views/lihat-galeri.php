<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Galeri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
</head>
<body>
    <?php $this->load->view('header_user'); ?>
    <?php include("admin/konversi_tanggal.php"); ?>

    <center>
        <h2>GALERI</h2>

        <table>
            <?php foreach($galeri->result() as $row) { ?>
                <td>
                    <img src="<?php echo base_url("upload/galeri/$row->gambar") ?>" width="40%">
                    <p>Tanggal Kegiatan : <?php echo tanggal_($row->tgl_galeri) ?> </p>
                    <p><?php echo $row->keterangan ?> </p>
                </td>
            <?php } ?>
        </table>

    </center>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>