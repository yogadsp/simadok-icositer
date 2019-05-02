<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- <script src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=6s0pdpt7rm9fbj8jb8x10asoikucl00vp9298cb8fzpxwm0n'></script> -->
    <style>
        .hidden {
            display: none;
        }
    </style>    
</head>
<body>
<a href="<?php echo base_url(); ?>pos_artikel/tampilArtikel"><h1>Lihat Artikel</h1></a>

  <form method="post" id="posForm" action="<?php echo base_url(); ?>pos_artikel/tambahPos">
        <input type="text" name="judul_artikel" id="judul_artikel" placeholder="Judul Artikel ...">
        <textarea id="artikel" name="artikel" form="posForm"></textarea>
        <!-- <input name="image" type="file" id="upload" class="hidden" onchange=""> -->

        <input type="submit" name="submit_post" id="submit_post" value="POST">
  </form>


  <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/tinymce4/js/tinymce/jquery.tinymce.min.js"></script>
  <script src="<?php echo base_url();?>assets/tinymce4/js/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
        selector: "#artikel",
        theme: "modern",
        width: 1000,
        height: 1000,
        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern jbimages"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        relative_urls: false
        // image_advtab: true,
        // file_picker_callback: function(callback, value, meta) {
        // if (meta.filetype == 'image') {
        //     $('#upload').trigger('click');
        //     $('#upload').on('change', function() {
        //     var file = this.files[0];
        //     var reader = new FileReader();
        //     reader.onload = function(e) {
        //         callback(e.target.result, {
        //         alt: ''
        //         });
        //     };
        //     reader.readAsDataURL(file);
        //     });
        // }
        // },
        // templates: [{
        // title: 'Test template 1',
        // content: 'Test 1'
        // }, {
        // title: 'Test template 2',
        // content: 'Test 2'
        // }]
    });
    </script>
</body>
</html>