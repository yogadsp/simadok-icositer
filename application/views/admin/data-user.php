<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dash.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
</head>
<body>
<?php $this->load->view('admin/header_adit'); ?>

    <center>
        <h2 style="color: brown;"><b>DATA USER</b></h2>
    </center>
    <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <a href="<?php echo current_url();?>/formTambahUser" class="btn btn-primary">Tambah User</a>
            <br><br>
                    <table class="table table-striped" id="contoh">
                    <thead class="kepala">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">User</th>
                        <th scope="col">Password</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="isi_data">
                    <?php 
                        $no = 1;
                        foreach($data_user->result() as $row) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->id_user ?></td>
                            <td><?php echo $row->pass ?></td>
                            <td><?php echo $row->nama_peran ?></td>
                            <td>
                                
                                <a class="btn btn-primary" href="<?php echo base_url(); ?>data_user/editUser/<?php echo $row->id_user; ?>/<?php echo $row->id_peran; ?>" style="font-size: 0.8em;"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" href="<?php echo base_url(); ?>data_user/hapusUser/<?php echo $row->id_user; ?>/<?php echo $row->id_peran; ?>" onclick="return confirm('Are you sure you want to delete?')"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    </table>
            </div>
            <div class="col-md-1"></div>
        </div>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/DataTables/datatables.min.js"></script>

    <script>
		$(document).ready(function() {
            
            $('#contoh').DataTable();
        });

        
	</script>
</body>
</html>