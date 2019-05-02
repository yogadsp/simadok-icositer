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

    <form id="frm_penulis" method="post">
                <!-- untuk mendapatkan url sekarang -->
                <input type="hidden" name="urlskrg" value="<?php echo current_url();?>" 
                id="urlskrg1">
        <center>

            <div class="form-group">
                    <label>Email		:</label>
                    <input type="text" name="email" id="email1">
            </div>

            <div class="form-group">
                    <label>Nama		:</label>
                    <input type="text" name="nama_penulis" id="nama_penulis1">
            </div>

            <div class="form-group">
                    <label>Afiliasi		:</label>
                    <input type="text" name="afiliasi" id="afiliasi1">
            </div>

                <input type="submit" class="btn btn-primary" value="SUBMIT">
        </center>
            </form>

    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script>

    $(document).ready(function(){
        $("#frm_penulis").submit(function(e) {
            e.preventDefault();
            var email = $("#email1").val();
            var nama_penulis = $('#nama_penulis1').val();
            var afiliasi = $('#afiliasi1').val();
            
            var urlskrg = '<?php echo current_url();?>';

                $.ajax({
                    type:"post",
                    url:'<?php echo base_url(); ?>tambah_penulis/tambahPenulis',
                    data: {
                        email: email,
                        nama_penulis: nama_penulis,
                        afiliasi: afiliasi
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