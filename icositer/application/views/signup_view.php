<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Icositer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href='assets/css/signup.css'?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="main.js"></script>
</head>
<body>

<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="assets/image/bahan.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                   
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputName" class="form-control" placeholder="Masukkan Nama" required autofocus>
                <input type="tel" id="inputTelp" class="form-control" placeholder="Masukkan No Telp" required autofocus>
                <input type="email" id="inputEmail" class="form-control" placeholder="Masukkan Email" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan Password" required>
                

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"> Daftar </button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
               Belum mempunyai akun ? Klik disini
            </a>
        </div>
    </div>
    
</body>
</html>