<script>
$(document).ready(function(){
    // City change
    
    $('select[name="bidang"]').on ('change', function(e){
        e.preventDefault();
        var id_bidang = $(this).val();
        
        // AJAX request
        $.ajax({
            url:'<?php echo base_url()?>form_jurnal/getSubBidang',
            method: 'GET',
            data: {id_bidang: id_bidang},
            dataType: "json",
            success: function(response){
                
                $('select[id="sub_bidang"]').empty();
                $.each(response, function(key, res) {
                    var v = '<option value="'+ res.id_subbidang +'">'+ res.nama_subbidang +'</option>';
                    $('select[id="sub_bidang"]').append(v);
                });
                
                
            }
        });
        // return s;
    });

    $("#frm_bidang").submit(function(e) {
          e.preventDefault();
        var nama_bidang = $("#bidang1").val();
        
        var urlskrg = '<?php echo current_url();?>';

            $.ajax({
                type:"post",
                url:'<?php echo base_url(); ?>form_jurnal/tambahBidang',
                data: {
                    nama_bidang: nama_bidang
                },
                dataType: 'html',
                success:function (pesan) {  
                    alert('success');
                    window.location = urlskrg;
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
    
    $("#frm_subbidang").submit(function(e) {
        e.preventDefault();
        var nama_subbidang = $("#sub_bidang1").val();
        var id_bidang = $('#bidang2').val();
        
        var urlskrg = '<?php echo current_url();?>';

            $.ajax({
                type:"post",
                url:'<?php echo base_url(); ?>form_jurnal/tambahSubBidang',
                data: {
                    nama_subbidang: nama_subbidang,
                    id_bidang: id_bidang
                },
                dataType: 'html',
                success:function (pesan) {  
                    alert('success');
                    window.location = urlskrg;
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

    $('a[href$="#tambahSubbidang"]').on( "click", function() {
        var bidang = $("#bidang").val();
        $(".modal-body #id_bidang").val( bidang );

        $('#sub_bidang').modal('show');
    });

});

</script>