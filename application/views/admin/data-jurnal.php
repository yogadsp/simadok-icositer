<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Jurnal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dash.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    
</head>
<body>

<?php $this->load->view('admin/header_adit'); ?>
<?php include("konversi_tanggal.php"); ?>

    <center>
        <h2>DATA JURNAL</h2>
    </center>
        <div class="row" style="margin: 0 20px 0 20px;">
            <div class="col-md-12">
            
            <a href="<?php echo current_url();?>/form_jurnal" class="btn btn-primary">Tambah Jurnal</a>
            <br>

            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?php echo base_url();?>home/data_jurnal" class="btn btn-secondary active">Tampil Semua</a>
                <a href="<?php echo current_url();?>/tampilJSAT" class="btn btn-secondary">JSAT</a>
                <a href="<?php echo current_url();?>/tampilIOP" class="btn btn-secondary">IOP</a>
                <a href="<?php echo current_url();?>/tampilSBSN" class="btn btn-secondary">SBSN </a>
            </div><br><br>

            <p>Ekspor</p>

            <div class="table-responsive-xl">
                    <table class="table table-sm table-bordered" id="contoh">
                    <thead class="kepala">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Afiliasi</th>
                        <th scope="col">Email</th>
                        <th scope="col">Bidang</th>
                        <th scope="col">Sub Bidang</th>
                        <th scope="col">Status</th>
                        <th scope="col">Penginput</th>
                        <th scope="col">Dokumen</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;
                        foreach($pusat_data->result() as $row) { ?>
                        <tr id="<?php echo $row->id_pusat ?>" >
                            <td><?php echo $no++ ?></td>
                            <td><?php echo tanggal_($row->tgl_input) ?></td>
                            <td><?php echo $row->nama_penulis ?></td>
                            <td><?php echo $row->judul_jurnal ?></td>
                            <td><?php echo $row->afiliasi ?></td>
                            <td><?php echo $row->email ?></td>
                            <td><?php echo $row->nama_bidang ?></td>
                            <td><?php echo $row->nama_subbidang ?></td>
                            <td><?php echo $row->status ?></td>
                            <td><?php echo $row->id_user ?></td>
                            <td><a href="<?php echo base_url("upload/jurnal/$row->dokumen"); ?>" target="_blank">Download</a></td>
                            <td>
                                <a href="<?php echo base_url(); ?>data_jurnal/editJurnal/<?php echo $row->id_pusat; ?>" style="font-size: 0.8em;">Edit</a>
                            
                                <a href="<?php echo base_url(); ?>data_jurnal/hapusJurnal/<?php echo $row->id_pusat; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/DataTables/datatables.min.js"></script>
    
    <?php $this->load->view('admin/js-ekspor') ?>

    <script>
		$(document).ready(function() {
            $('#contoh').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    }
                ]
            } );
        });
	</script>
    
</body>
</html>