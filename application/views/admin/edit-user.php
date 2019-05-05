<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
</head>
<body>
<?php $this->load->view('admin/header_adit'); ?>

<form action="<?php echo base_url('data_user/updateUser') ?>" method="post">
        <center>
            <h3>EDIT USER</h3>

            <p>
                <label>ID User    </label>
                    <input type="text" name="user" id="user" size="40" value ="<?php echo $user->id_user ?>" required>
            </p>
            <p>
                <label>Password    </label>
                    <input type="text" name="pass" id="pass" size="40" value ="<?php echo $user->pass ?>" required>
            </p>
            <p>
                <label>Peran    :</label>
                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                    <select id="peran" name="peran">
                        <?php foreach ($peran->result() as $row ) { ?>
                            <option value="<?php echo $row->id_peran?>" <?php echo ($user->id_peran == $row->id_peran) ? 'selected' : '' ?>>
                                <?php echo $row->nama_peran;?>
                            </option>
                        <?php } ?>
                    </select>
            </p>
            <input type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">
        </center>
    </form>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>