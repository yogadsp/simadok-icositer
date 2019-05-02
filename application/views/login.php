<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">

  <!-- login -->
  <!-- penutup -->

</head>

<body>
  <!-- Just an image -->
<nav class="navbar navbar-expand-lg navbar-light">
  <img src="<?php echo base_url();?>assets/img/icositer.png" class="img-responsive">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >

    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <b><a class="nav-link" style="color: brown;" href="<?php echo base_url();?>">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: brown;" href="#">Galeri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: brown;" href="#">Login</a></b>
      </li>
    </ul>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-color: brown;">
      <button  class="btn btn-outline-success my-2 my-sm-0 btn-search" type="submit" style="border-color: brown; color: brown; background-color: #DEB887;" >Search</button>
    </form>
  </div>
</nav>

<!-- login -->
<div class="login-form">
    <form id="frm_login" method="post">
        <input type="hidden" name="urlskrg" value="<?php echo current_url();?>" id="urlskrg1">
    <div class="avatar">
      <img src="<?php echo base_url();?>assets/img/user.png" alt="Avatar">
    </div>
        <h2 class="text-center">Editor Login</h2>   
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Masukkan Username ..." id="user1" 
          name="user" required="required">
        </div>
    <div class="form-group">
          <input type="password" class="form-control" placeholder="Masukkan Password ..." id="pass1" 
          name="pass" required="required">
        </div>        
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign In">
        </div>
    <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
        </div>
    </form>
</div>


<!-- penutup login -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
<script>
      $(document).ready(function() {
          $("#frm_login").submit(function(e) {
          	e.preventDefault();
              var user2 = $("#user1").val();
              var pass2 = $("#pass1").val();
              var urlskrg2 = $("#urlskrg1").val();
              
              var urlskrg = '<?php echo current_url();?>';
              if (pass2 == '' && user2 == '') {
              	  alert("Username & Password kosong");
              } else if (user2 == '' && pass2 != '') {
              	  alert("Username kosong");
              }	else if (user2 != '' && pass2 == '') {
              	alert("Password kosong");
              } else {
                  $.ajax({
                      type:"post",
                      url:'<?php echo base_url(); ?>Login/aksi_login',
                      data: {
                        user: user2,
                        pass: pass2,
                        urlskrg: urlskrg2
                      },
                      dataType: 'html',
                      success:function (pesan) {
                      	  if(pesan == 'sukses'){ //data diambil dari data yang di echo kan
                      	  	alert('success');
                      	  	window.location = '<?php echo base_url(); ?>home';
                      	  }
                      	  else if (pesan == 'salah_id') 
                      	  {
                      	  	alert('Username Salah');
                      	  }
                      	  else if (pesan == 'salah_pass')
                      	  {
                      	  	alert('Password Salah');
                      	  }
                      	  else if (pesan == 'salah_semua') {
                      	  	alert("Username atau Password Salah");
                      	  }
                          
                      },
                      error:function(pesan){
                          alert('fail');
                      }
                  });
              }
          });
      });
  </script>

</body>
</html>