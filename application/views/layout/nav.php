<?php
$site_info          = $this->konfigurasi_model->listing();
$menu_berita        = $this->konfigurasi_model->menu_berita();
$menu_profil        = $this->konfigurasi_model->menu_profil();

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url() ?>"><img width="150px" class="img-fluid" src="<?php echo base_url('assets/upload/image/thumbs/' . $site_info->logo) ?>"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url() ?>"> Home <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('page/read/tentang-kami') ?>">Tentang Kami</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('layanan') ?>">Layanan</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('berita') ?>">Berita</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('kontak') ?>">Kontak</a></li>
      </ul>
      <ul class="navbar-nav">
        <?php if ($this->session->userdata('email')) {
          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='" . base_url('admin/dashboard') . "'><i class='far fa-user-circle'></i> dashboard</a>";
          echo "</li>";
        } else {
          echo "<li class='nav-item'><a class='nav-link' href='" . base_url('login') . "'><i class='fa fa-lock'></i> Log In</a></li>";
        }
        ?>

      </ul>

    </div>
  </div>
</nav>