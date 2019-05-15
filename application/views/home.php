<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dash.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

</head>
<body>
    <?php $this->load->view('header_user'); ?>

    <?php include("admin/konversi_tanggal.php"); ?>

    <div class="col-md-12" style="padding-bottom: 190px;">
    <p style="text-align:justify;"  "><img src="<?php echo base_url();?>assets/img/tabel.png" style="float:right; width: 500px;" />
            <br>
            <br>
            <br>
            <h1><strong>ICOSITER</strong></h1>
            <i><h3>International Conference on Science,</h3>
            <h3>Infrastucture, Technology and Regional Development</h3></i>
            <h6>Konferensi internasional yang menghadirkan tokoh</h6>
            <h6>sains, infrastruktur, dan pengembangan wilayah</h6> 
            <h6>yang dilakukan setiap tahun untuk merayakan Dies Natalis</h6>
            <h6>Institut Teknologi Sumatera</h6>        
    </p>
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