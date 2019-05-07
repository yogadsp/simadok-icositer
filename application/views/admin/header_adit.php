
  <!-- Just an image -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
      <li class="nav-item">
        <b><a class="nav-link" style="color: brown;" href="<?php echo base_url();?>">Beranda <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>data_jurnal">Jurnal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>data_galeri">Galeri</a></b>
      </li>
      <?php $id_peran = $this->session->userdata('id_peran'); ?>

      <?php 
        if($id_peran == '1') {
      ?>
      <li class="nav-item">
        <b><a class="nav-link" style="color: brown;" href="<?php echo base_url();?>data_user">User</a></b>
      </li>
      <?php
        }
      ?>

      <?php $id_user = $this->session->userdata('id_user'); ?>

      <?php 
        if($id_user != '') {
      ?>  
        <li class="nav-item">
          <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>logout/aksi_logout" value="Log Out"><b><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</b></a>
        </li>
      <?php
        } else {
      ?>
        <li class="nav-item">
          <b><a class="nav-link" style="color: brown;" href="<?php echo base_url();?>login" value="Login"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a></b>
        </li>
      <?php 
        } ?>

    </ul>
    </form>
  </div>
</nav>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>