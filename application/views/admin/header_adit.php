
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
        <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>pos_galeri">Galeri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>tentang">Tentang</a></b>
      </li>
      <?php $id_user = $this->session->userdata('id_user'); ?>

      <?php 
        if($id_user != '') {
      ?>  
        <li class="nav-item">
          <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>logout/aksi_logout" value="Log Out">Logout</a></b>
        </li>
      <?php
        } else {
      ?>
        <li class="nav-item">
          <a class="nav-link" style="color: brown;" href="<?php echo base_url();?>login" value="Login">Login</a></b>
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