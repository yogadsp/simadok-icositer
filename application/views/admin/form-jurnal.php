<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Jurnal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/data.css">
</head>
<body>
<?php $this->load->view('admin/header_adit'); ?>
<!-- load modal form bidang -->
<?php $this->load->view('admin/form-bidang'); ?>
<?php $this->load->view('admin/form-subbidang'); ?>
    <form action="<?php echo base_url('form_jurnal/tambahJurnal') ?>" id="jurnalForm" method="post" enctype="multipart/form-data">
        <center>
            <h1>FORM JURNAL</h1>

            <?php
                // mendapatkan zona waktu sekarang
                $timezone = new DateTimeZone('Asia/Jakarta');
                $date = new DateTime();
                $date->setTimeZone($timezone);
            ?>

            <!-- untuk mendapatkan id_user dari session -->
            <?php $id_user = $this->session->userdata('id_user'); ?>
            <input type="hidden" name="user" id="user" value="<?php echo $id_user ?>">
            <input type="hidden" name="tgl_input" id="tgl_input" value="<?php echo $date->format('Y-m-d'); ?>">

            <p>
                
                <label style="padding-right: 385px;"><b>Bidang    </b></label>
                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                    <select class="form-control col-md-4" id="bidang" name="bidang">
                        <?php foreach ($bidang_->result() as $row ) { ?>
                            <option value="<?php echo $row->id_bidang; ?>">
                                <?php echo $row->nama_bidang; ?>
                            </option>
                        <?php } ?>
                    </select>
                
                    <p>
                    <a class="btn btn-info" href="#" data-toggle="modal" data-target="#bidang">Tambah Bidang</a>
                </p>
            </p>
            <p>
                <label style="padding-right: 350px;"><b>Sub Bidang </b>  </label>
                    <select class="form-control col-md-4" id="sub_bidang" name="sub_bidang">
                        <option>--Pilih Sub Bidang--</option>
                    </select>
                    <p>
                    <a class="btn btn-info" href="#tambahSubbidang" id="#tambahSubbidang">Tambah SubBidang</a>
                </p>
            </p>
            <p>
                <label style="padding-right: 389px;"><b>Jurnal</b>    </label>
                    <input class="form-control col-md-4" type="text" name="jurnal" id="jurnal" placeholder="Masukkan Jurnal ... " size="100" required>
            </p>
            <p>
                <label style="padding-right: 385px;"><b>Penulis</b>   </label>
                    <!-- <textarea form="jurnalForm" id="nama_penulis" name="nama_penulis" rows="2" cols="50">a</textarea> -->
                    <textarea class="form-control col-md-4" rows="4" cols="50" name="nama_penulis" form="jurnalForm" id="nama_penulis" placeholder="Masukkan Penulis ... " required></textarea>
            </p>
            <p>
                <label style="padding-right: 397px;"><b>Email</b></label>
                    <input class="form-control col-md-4" type="text" name="email" id="email" placeholder="Masukkan Email ... " size="40" required>
            </p>
            <p>
                <label style="padding-right: 385px;"><b>Afiliasi</b></label>
                    <input class="form-control col-md-4" type="text" name="afiliasi" id="afiliasi" placeholder="Masukkan Afiliasi ... " size="40" required>
            </p>
            <p>
                <label style="padding-right: 385px;"><b>Status</b>    </label>
                    <input class="form-control col-md-4" type="text" name="status" id="status" placeholder="Masukkan Status ... " size="40" required>
            </p>
            <p>
                <label style="padding-right: 40px;"><b>Upload Jurnal</b>    </label>
                    <input type="file" name="dokumen" id="dokumen" size="40" required>
            </p>
            <input class=" btn btn-success" type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">
        </center>
    </form>
    
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.autocomplete.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    

    <?php $this->load->view('admin/isi-form'); ?>
</body>

</html>