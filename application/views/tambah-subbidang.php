<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Jurnal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
</head>
<body>
            <form id="frm_subbidang" method="post">
                <!-- untuk mendapatkan url sekarang -->
                <input type="hidden" name="urlskrg" value="<?php echo current_url();?>" 
                id="urlskrg1">
        <center>

                                    <div class="form-group">
                                            <label>Nama Bidang		:</label>
                                            <!-- mengulang data berdasarkan data yang telah diambil dari controller -->
                                            <select id="bidang1" name="bidang">
                                                    <?php foreach ($bidang_->result() as $row ) { ?>
                                                            <option value="<?php echo $row->id_bidang; ?>">
                                                                    <?php echo $row->nama_bidang; ?>
                                                            </option>
                                                    <?php } ?>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                            <label>Nama Sub Bidang		:</label>
                                            <input type="text" name="sub_bidang" id="sub_bidang1">
                                    </div>

                <input type="submit" class="btn btn-primary" value="SUBMIT">
        </center>
            </form>
    
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function(){
            $("#frm_subbidang").submit(function(e) {
          	    e.preventDefault();
                var nama_subbidang = $("#sub_bidang1").val();
                var id_bidang = $('#bidang1').val();
                
                var urlskrg = '<?php echo current_url();?>';

                    $.ajax({
                        type:"post",
                        url:'<?php echo base_url(); ?>tambah_subbidang/tambahBidSubbid',
                        data: {
                            nama_subbidang: nama_subbidang,
                            id_bidang: id_bidang
                        },
                        dataType: 'html',
                        success:function (pesan) {  
                            alert('success');
                            window.location = '<?php echo base_url(); ?>form_jurnal';
                        },
                        error:function(pesan){
                            if(pesan == 'Data Sudah Ada'){
                                alert('Data sudah ada');
                            } else {
                                alert('fail');
                            }
                            
                        }
                    });
            });
        });

    </script>
</body>

</html>