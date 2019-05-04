<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Galeri</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.css">
</head>
<body>

<form action="<?php echo base_url('data_jurnal/updateGaleri') ?>" method="post" enctype="multipart/form-data">
        <center>
            <h3>FORM JURNAL</h3>

            <!-- untuk mendapatkan id_user dari session -->
            <?php $id_user = $this->session->userdata('id_user'); ?>
            <input type="hidden" name="user" id="user" value="<?php echo $id_user ?>">
            <input type="hidden" name="id_jurnal" id="id_jurnal" value="<?php echo $pusat->id_jurnal ?>">
            <input type="hidden" name="id_pusat" id="id_pusat" value="<?php echo $pusat->id_pusat ?>">

            <p>
                <label>Bidang    :</label>
                    <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                    <select id="bidang" name="bidang">
                        <?php foreach ($bidang_->result() as $row ) { ?>
                            <option value="<?php echo $row->id_bidang?>" <?php echo ($pusat->id_bidang == $row->id_bidang) ? 'selected' : '' ?>>
                                <?php echo $row->nama_bidang;?>
                            </option>
                        <?php } ?>
                    </select>
                    <a href="" data-toggle="modal" data-target="#bidang">Tambah Bidang</a>
            </p>

            <p>
                <label>Sub Bidang   :</label>
                    <select id="sub_bidang" name="sub_bidang">
                        <?php foreach ($sub_bidang->result() as $row ) { ?>
                            <option value="<?php echo $row->id_subbidang?>" <?php echo ($pusat->id_subbidang == $row->id_subbidang) ? 'selected' : '' ?>>
                                <?php echo $row->nama_subbidang;?>
                            </option>
                        <?php } ?>
                    </select>
                    <a href="#tambahSubbidang" id="#tambahSubbidang">Tambah SubBidang</a>
            </p>
            <p>
                <label>Jurnal    </label>
                    <input type="text" name="jurnal" id="jurnal" size="100" value ="<?php echo $pusat->judul_jurnal; ?>" required>
            </p>
            <p>
                <label>Penulis   :</label>
                    <!-- <textarea form="jurnalForm" id="nama_penulis" name="nama_penulis" rows="2" cols="50">a</textarea> -->
                    <textarea rows="4" cols="50" name="nama_penulis" form="jurnalForm" id="nama_penulis" required><?php echo $pusat->nama_penulis; ?></textarea>
            </p>
            <p>
                <label>Email    </label>
                    <input type="text" name="email" id="email" size="40" value ="<?php echo $pusat->email; ?>" required>
            </p>
            <p>
                <label>Afiliasi    </label>
                    <input type="text" name="afiliasi" id="afiliasi" size="40" value ="<?php echo $pusat->afiliasi; ?>" required>
            </p>
            <p>
                <label>Status    </label>
                    <input type="text" name="status" id="status" size="40" value ="<?php echo $pusat->status; ?>" required>
            </p>
            <p>
                <label>Upload Jurnal    </label>
                    <input type="file" name="dokumen" id="dokumen" size="40">
            </p>
            <input type="submit" name="submitDataa" id="submitDataa" value="SUBMIT">
        </center>
    </form>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>