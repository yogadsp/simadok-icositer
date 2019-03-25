<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
    <form id="frm_login" method="post">
    <input type="hidden" name="urlskrg" value="<?php echo current_url();?>" 
id="urlskrg1">
        <label for="user">Username : </label><input type="text" id="user1" name="user">
        <br>
        <label for="pass">Password : </label><input type="password" id="pass1" name="pass">
        <input type="submit" value="Login">
    </form>
</body>
</html>
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
                      url:'<?php echo base_url(); ?>/C_Login/aksi_login',
                      data: {
                        user: user2,
                        pass: pass2,
                        urlskrg: urlskrg2
                      },
                      dataType: 'html',
                      success:function (pesan) {
                      	  if(pesan == 'sukses'){ //data diambil dari data yang di echo kan
                      	  	alert('success');
                      	  	window.location = urlskrg;
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