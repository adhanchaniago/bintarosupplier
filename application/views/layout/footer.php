<!-- FOOTER -->
<?php
$site_info      = $this->konfigurasi_model->listing();
$page           = $this->konfigurasi_model->menu_page();
$layanan        = $this->konfigurasi_model->menu_layanan();
 ?>



  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md">
          <a href="<?php echo base_url();?>"><img class="mb-2" src="<?php echo base_url('assets/upload/image/'.$site_info->logo) ?>" alt="" width="250"></a>
          <small class="d-block mb-3 text-muted">Copyright &copy; <?php echo date('Y') ?> - <?php echo $site_info->namaweb ?>
            <br/> <?php echo $site_info->tagline ?></small>
             <span style="font-size:15px;">
               <i class="fa fa-phone"></i> <?php echo $site_info->telepon ?><br>
               <i class="fa fa-envelope"></i> <?php echo $site_info->email ?>
             </span>
        </div>
        <div class="col-6 col-md ml-md-5">
          <h5>Layanan</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo base_url('kontak') ?>">Jual Ayam Kampung</a></li>
            <li><a class="text-muted" href="<?php echo base_url('kontak') ?>">Jual Ayam Broiler</a></li>
            <li><a class="text-muted" href="<?php echo base_url('kontak') ?>">Jual Bebek</a></li>
            <li><a class="text-muted" href="<?php echo base_url('kontak') ?>">Jual Mentok</a></li>
          </ul>
          <!-- <ul class="list-unstyled text-small">
            <?php foreach ($layanan as $layanan) { ?>
            <li><a class="text-muted" href="<?php echo base_url('layanan/'.$layanan->slug_layanan) ?> "><?php echo $layanan->judul_layanan ?></a></li>
          <?php } ?>
          </ul> -->
        </div>
        <div class="col-5 col-md">
          <h5>Contact Us</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?php echo base_url('kontak') ?>">Hubungi Kami</a></li>
            <li><a class="text-muted" href="<?php echo base_url('berita') ?>">Blog Berita</a></li>
            <li><a class="text-muted" href="<?php echo base_url('galeri') ?>">Galeri Foto</a></li>

          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Dukungan</h5>
          <ul class="list-unstyled text-small">
            <?php foreach ($page as $page) { ?>
            <li><a class="text-muted" href="<?php echo base_url('/'.$page->slug_page) ?> "><?php echo $page->judul_page ?></a></li>
          <?php } ?>
          </ul>
        </div>



      </div>
        </div>
        </footer>

        <!-- Load javascript Jquery -->
        <script src="<?php echo base_url() ?>assets/template/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/template/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/template/js/jquery-1.11.3.min.js"></script>
        <script src="<?php echo base_url() ?>assets/template/js/jquery-3.3.1.js"></script>
        <!-- <script src="<?php echo base_url() ?>assets/template/js/jquery-2.1.1.js"></script>
        <script src="<?php echo base_url() ?>assets/template/js/jquery-3.2.1.min.js"></script> -->
        <script src="<?php echo base_url() ?>assets/template/js/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/template/assets/js/vendor/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/template/js/moment-with-locales.js"></script>
        <script src="<?php echo base_url() ?>assets/template/js/bootstrap-datetimepicker.js"></script>
        <script src="<?php echo base_url() ?>assets/template/js/timepicker.js"></script>



  <script>
  $(function() {
  $('#id_tanggal').datetimepicker({locale:'id', format:'D MMMM YYYY',minDate: new Date(),});
    });

  $('.form-control-chosen').chosen({
    });

    $('#timepicker').timepicker();

    </script>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c947d5e5dfe77fc"></script>

    <!-- Script Galery -->



<!-- Test -->
<script>
$('input[type="file"]').each(function(){
  // Refs
  var $file = $(this),
      $label = $file.next('label'),
      $labelText = $label.find('span'),
      labelDefault = $labelText.text();

  // When a new file is selected
  $file.on('change', function(event){
    var fileName = $file.val().split( '\\' ).pop(),
        tmppath = URL.createObjectURL(event.target.files[0]);
    //Check successfully selection
    if( fileName ){
      $label
        .addClass('file-ok')
        .css('background-image', 'url(' + tmppath + ')');
      $labelText.text(fileName);
    }else{
      $label.removeClass('file-ok');
      $labelText.text(labelDefault);
    }
  });

// End loop of file input elements
});
</script>



</body>
</html>
