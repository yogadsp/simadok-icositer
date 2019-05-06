<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Jurnal</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/data.css">
</head>
<body>
<?php $this->load->view('admin/header_adit'); ?>
<!-- load modal form bidang -->
<?php $this->load->view('admin/form-bidang'); ?>
<?php $this->load->view('admin/form-subbidang'); ?>
<form action="<?php echo base_url('data_jurnal/updatePusat') ?>" id="jurnalForm" method="post">
        <center>
            <h1>FORM JURNAL</h1>
            <br>

            <!-- untuk mendapatkan id_user dari session -->
            <?php $id_user = $this->session->userdata('id_user'); ?>
            <input type="hidden" name="user" id="user" value="<?php echo $id_user ?>">
            <input type="hidden" name="id_jurnal" id="id_jurnal" value="<?php echo $pusat->id_jurnal ?>">
            <input type="hidden" name="id_pusat" id="id_pusat" value="<?php echo $pusat->id_pusat ?>">

            <p>
                <label style="padding-right: 385px;"><b>Bidang</b> </label>
                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                    <select class="form-control col-md-4" id="bidang" name="bidang" >
                        <?php foreach ($bidang_->result() as $row ) { ?>
                            <option value="<?php echo $row->id_bidang?>" <?php echo ($pusat->id_bidang == $row->id_bidang) ? 'selected' : '' ?>>
                                <?php echo $row->nama_bidang;?>
                            </option>
                        <?php } ?>
                    </select><br>
                    <a class="btn btn-info" href="" data-toggle="modal" data-target="#bidang">Tambah Bidang</a>
            </p>

            <p>
                <label style="padding-right: 350px;"><b>Sub Bidang</b></label>
                    <select class="form-control col-md-4" id="sub_bidang" name="sub_bidang">
                        <?php foreach ($sub_bidang->result() as $row ) { ?>
                            <option value="<?php echo $row->id_subbidang?>" <?php echo ($pusat->id_subbidang == $row->id_subbidang) ? 'selected' : '' ?>>
                                <?php echo $row->nama_subbidang;?>
                            </option>
                        <?php } ?>
                    </select><br>
                    <a class="btn btn-info" href="#tambahSubbidang" id="#tambahSubbidang">Tambah SubBidang</a>
            </p>
            <p>
                <label style="padding-right: 389px;"><b>Jurnal</b>    </label>
                    <input class="form-control col-md-4" type="text" name="jurnal" id="jurnal" size="100" value ="<?php echo $pusat->judul_jurnal; ?>" required>
            </p>
            <p>
                <label style="padding-right: 385px;"><b>Penulis</b> </label>
                    <!-- <textarea form="jurnalForm" id="nama_penulis" name="nama_penulis" rows="2" cols="50">a</textarea> -->
                    <textarea class="form-control col-md-4" rows="4" cols="50" name="nama_penulis" form="jurnalForm" id="nama_penulis" required><?php echo $pusat->nama_penulis; ?></textarea>
            </p>
            <p>
                <label style="padding-right: 397px;"><b>Email</b>    </label>
                    <input class="form-control col-md-4" type="text" name="email" id="email" size="40" value ="<?php echo $pusat->email; ?>" required>
            </p>
            <p>
                <label style="padding-right: 385px;"><b>Afiliasi</b></label>
                    <input class="form-control col-md-4" type="text" name="afiliasi" id="afiliasi" size="40" value ="<?php echo $pusat->afiliasi; ?>" required>
            </p>
            <p>
                <label style="padding-right: 385px;"><b>Status</b></label>
                    <input class="form-control col-md-4" type="text" name="status" id="status" size="40" value ="<?php echo $pusat->status; ?>" required>
            </p>
            <p>
                <label style="padding-right: 40px;"><b>Upload Jurnal</b></label>
                    <input type="file" name="dokumen" id="dokumen" size="40">
            </p>
            <input class=" btn btn-success" type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">
        </center>
    </form>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <?php $this->load->view('admin/isi-form'); ?>  
</body>
</html>