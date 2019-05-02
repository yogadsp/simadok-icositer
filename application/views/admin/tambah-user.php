<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
</head>
<body>
    <form action="<?php echo base_url();?>tambah_user/tambahUser" method="post">
        <p>
            <label>Username    </label>
                <input type="text" name="id_user" id="id_user" size="100" required>
        </p>
        <p>
            <label>Password    </label>
                <input type="password" name="pass" id="pass" size="100" required>
        </p>
        <p>
            <label>Kategori    :</label>
                <select id="kat_user" name="kat_user">
                    <option value="2">Editor</option>
                    <option value="3">Penulis</option>
                </select>
        </p>
        <input type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">
    </form>
    <a href="<?php echo base_url();?>tambah_user/tampilUser">Lihat User</a>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>