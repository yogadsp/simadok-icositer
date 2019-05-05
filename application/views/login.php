<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">

  <!-- login -->
  <!-- penutup -->

</head>

<body>
<?php $this->load->view('header_user'); ?>

<!-- login -->
<div class="login-form">
    <form id="frm_login" method="post">
        <input type="hidden" name="urlskrg" value="<?php echo current_url();?>" id="urlskrg1">
    <div class="avatar">
      <img src="<?php echo base_url();?>assets/img/userr.png" alt="Avatar">
    </div>
        <h2 class="text-center">Login</h2>   
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" id="user1" 
          name="user" required="required">
        </div>
    <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" id="pass1" 
          name="pass" required="required">
        </div>        
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
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

              var url_adit = '<?php echo base_url() ?>data_jurnal';
              
              var url_home = '<?php echo base_url();?>';
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
                      	  if(pesan == 'user'){ //data diambil dari data yang di echo kan
                      	  	alert('success');
                      	  	window.location = url_home;
                      	  }
                          else if (pesan == 'admin') 
                      	  {
                            alert('success');
                      	  	window.location = url_adit;
                      	  }
                          else if (pesan == 'editor') 
                      	  {
                            alert('success');
                      	  	window.location = url_adit;
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