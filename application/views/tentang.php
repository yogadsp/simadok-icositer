<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tentang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/galery.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dash.css">
</head>
<body>
    <?php $this->load->view('header_user'); ?>

    <center>
        <br><br>
        <h1><b>TENTANG</b></h1>
        <div class="col-md-9" style="text-align:justify;">
        <p><h6>
           International Conference on Science,
Infrastucture, Technology and Regional Development
Konferensi internasional yang menghadirkan tokoh
sains, infrastruktur, dan pengembangan wilayah
yang dilakukan setiap tahun untuk merayakan Dies Natalis
Institut Teknologi Sumatera
        </h6></p></div>

<!-- data pembuat web -->
<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Mahesa Darma Satria</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="img_forest.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Yoga Dwi Septana</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Fardiansyah</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bayu Winnie</div>
</div>

    </center>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>