<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>Ini halaman home</p>

    <?php $id_user = $this->session->userdata('id_user'); ?>

    <p> <?php echo $id_user ?> </p>

    <form action="<?php echo base_url();?>C_Logout/aksi_logout">
        <input type="submit" value="Log Out">
    </form>
</body>
</html>