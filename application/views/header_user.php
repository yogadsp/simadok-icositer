<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
</head>

<body>
  <!-- Just an image -->
<nav class="navbar navbar-expand-lg navbar-light">
  <img src="<?php echo base_url();?>assets/img/icositerr.png" class="img-responsive" width="570" height="140">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >

    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <b><a class="nav-link" style="color: brown;" href="<?php echo base_url();?>">Beranda <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>galeri">Galeri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>tentang">Tentang</a></b>
      </li>
      <?php $id_peran = $this->session->userdata('id_peran'); ?>

      <?php 
        if($id_peran == '2' || $id_peran == '1'){
      ?> 
      <li class="nav-item">
        <b><a class="nav-link" style="color: brown;" href="<?php echo base_url();?>data_jurnal">Editor</a></b>
      </li>
      <?php
        }
      ?>
      
      <?php $id_user = $this->session->userdata('id_user'); ?>

      <?php 
        if($id_user != '') {
      ?>  
        <li class="nav-item">
          <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>logout/aksi_logout" value="Log Out"><b>Logout</b></a></b>
        </li>
      <?php
        } else {
      ?>
        <li class="nav-item">
          <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>login" value="Log Out"><b>Login</b></a></b>
        </li>
      <?php 
        } ?>

    </ul>
    </form>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>