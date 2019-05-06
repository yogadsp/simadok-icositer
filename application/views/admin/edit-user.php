<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/data.css">
</head>
<body>
<?php $this->load->view('admin/header_adit'); ?>

<form action="<?php echo base_url('data_user/updateUser') ?>" method="post">
    <center>    
    <div class="avatar">
      <img src="<?php echo base_url();?>assets/img/userr.png" alt="Avatar" width="150">
    </div>
        
            <p>
                <label style="padding-right: 370px;"><b>Username</b></label>
                    <input type="hidden" name="user_lama" value="<?php echo $user->id_user ?>">
                    <input class="form-control col-md-4" type="text" name="user" id="user" size="40" value ="<?php echo $user->id_user ?>" required>
            </p>
            <p>
                <label style="padding-right: 370px;"><b>Password</b>    </label>
                    <input class="form-control col-md-4" type="text" name="pass" id="pass" size="40" value ="<?php echo $user->pass ?>" required>
            </p>
            <p>
                <label style="padding-right: 375px;"><b>Kategori</b></label>
                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                    <input  type="hidden" name="peran_lama" value="<?php echo $user->id_peran ?>">
                    <select  class="form-control col-md-4" id="peran" name="peran">
                        <?php foreach ($peran->result() as $row ) { ?>
                            <option value="<?php echo $row->id_peran?>" <?php echo ($user->id_peran == $row->id_peran) ? 'selected' : '' ?>>
                                <?php echo $row->nama_peran;?>
                            </option>
                        <?php } ?>
                    </select>
            </p>
            <input class="btn btn-success" type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">
        </center>
    </form>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>