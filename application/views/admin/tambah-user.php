<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/data.css">
</head>
<body>
<?php $this->load->view('admin/header_adit'); ?>
<center>
    <div class="avatar">
      <img src="<?php echo base_url();?>assets/img/userr.png" alt="Avatar" width="150">
    </div>
    <br>
    <form action="<?php echo base_url();?>tambah_user/tambahUser" method="post">
        <p>
            <label style="padding-right: 370px;" ><b>Username</b></label>
                <input class="form-control col-md-4" placeholder="Username" type="text" name="id_user" id="id_user" size="100" required>
        </p>
        <p>
            <label style="padding-right: 370px;"><b>Password</b></label>
                <input class="form-control col-md-4" placeholder="Password" type="password" name="pass" id="pass" size="100" required>
        </p>
        <p>
            <label style="padding-right: 375px;"><b>Kategori</b></label>
                <select class="form-control col-md-4" id="kat_user" name="kat_user">
                    <option value="2">Editor</option>
                    <option value="3">Penulis</option>
                </select>
        </p>
        <input class="btn btn-success" type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">
    </form></center>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>