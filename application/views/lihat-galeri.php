<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Galeri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/galery.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
</head>
<body>
    <?php $this->load->view('header_user'); ?>
    <?php include("admin/konversi_tanggal.php"); ?>

    <center>
        <br>
        <br>
        <h1>GALERI</h1>
        <br><br>
    </center>
        <!-- <div class="col-md-12">
        <table>
            <?php foreach($galeri->result() as $row) { ?> 
                <td>
                    <img src="<?php echo base_url("upload/galeri/$row->gambar") ?>" width="40%">
                    <p>Tanggal Kegiatan : <?php echo tanggal_($row->tgl_galeri) ?> </p>
                    <p><?php echo $row->keterangan ?> </p>
                </td>

            <?php } ?>
        </table>
</div> -->
<!-- mencoba galery responsive -->

<center>

<?php foreach($galeri->result() as $row) { ?>
<div class="gallery">
    
  <!-- <a target="_blank" href="<?php echo base_url("upload/galeri/$row->gambar") ?>"> -->
    <img src="<?php echo base_url("upload/galeri/$row->gambar") ?>" alt="Cinque Terre" width="600" height="400">
  <!-- </a> -->
  <div class="desc">
    <p>
        <i class="far fa-calendar-alt"></i>&nbsp;
        <b> <?php echo tanggal_($row->tgl_galeri) ?></b> 
    </p>
    <p>
        <h5><?php echo $row->keterangan ?> </h5>
    </p>
  </div>
  

</div>
<?php } ?>
</center>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


</body>
</html>