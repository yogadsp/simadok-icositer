<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Galeri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/tabell.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
</head>
<body>

<?php $this->load->view('admin/header_adit'); ?>
<?php include("konversi_tanggal.php"); ?>

    <center>
        <h2>DATA GALERI</h2>
    </center>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

            <a href="<?php echo current_url();?>/pos_galeri" class="btn btn-primary">Tambah Galeri</a>
            
                    <table class="table table-striped table-sm" id="contoh">
                    <thead class="kepala">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Penginput</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;
                        foreach($galeri->result() as $row) { ?>
                        <tr id="<?php echo $row->id_galeri ?>" >
                            <td><?php echo $no++ ?></td>
                            <td><?php echo tanggal_($row->tgl_galeri) ?></td>
                            <td><?php echo $row->keterangan ?></td>
                            <td><img src="<?php echo base_url("upload/galeri/$row->gambar"); ?>" alt="" width="40%"></td>
                            <td><?php echo $row->id_user ?></td>
                            <td>
                                <a href="<?php echo current_url(); ?>/editGaleri/<?php echo $row->id_galeri; ?>" style="font-size: 0.8em;">Edit</a>
                            
                            <a href="<?php echo current_url(); ?>/hapusGaleri/<?php echo $row->id_galeri; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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