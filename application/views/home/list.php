<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <?php $i = 1;
    foreach ($slider as $slider) { ?>

      <div class="carousel-item <?php if ($i == 1) {
                                  echo 'active';
                                } ?> ">
        <img class="img-fluid" src="<?php echo base_url('assets/upload/image/' . $slider->gambar) ?>" alt="<?php echo $slider->judul_galeri ?>">
        <div class="container">
          <div class="carousel-caption text-left">

            <!-- <h1><?php echo $slider->judul_galeri ?></h1>
                     <p><?php echo strip_tags($slider->isi_galeri) ?> </p> -->
          </div>
        </div>
      </div>

      <?php $i++;
    } ?>



  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<section class="about-us py-4">
  <div class="container">
    <div class="row">

      <div class="col-md-5">
        <img class="img-fluid" src="<?php echo base_url('assets/upload/image/ayam_jago.jpg'); ?>" alt="">
      </div>

      <div class="col-md-7">
        <h2>Supplier Ayam Hidup!</h2>
        <hr>
        <p>
          Bintaro supplier adalah Usaha Dagang yang bergerak
          di bidang penjualan unggas seperti Ayam kampung,
          Ayam Negri, bebek dan Entog.

          Usaha ini mulai dirintis bulan Agustus 1995 bertempat
          di samping pasar Inpres Batu Putih, Kebayoran Lama -
          Jakarta selatan.

          Dengan konsep “Halalan Toyyiban” Sehat dan Terjangkau
          dalam menyediakan kebutuhan masyarakat terhadap
          unggas. </p>


        <!-- <button type="button" class="btn btn-success">Let's Know More</button> -->

      </div>

    </div>
  </div>
</section>


<div class="section-block-grey">
  <div class="container">
    <div class="section-heading center-holder">
      <h3>Keunggulan Supplier dan Pemasok Ayam Hidup</h3>
      <div class="section-heading-line"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        <br>incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="row mt-60">
      <div class="col-md-4 col-sm-12 col-12">
        <div class="serv-section-2">
          <div class="serv-section-2-icon"> <i class="fas fa-gem"></i> </div>
          <div class="serv-section-desc">
            <h4>Halal</h4>
            <h5></h5>
          </div>
          <div class="section-heading-line-left"></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-12">
        <div class="serv-section-2 serv-section-2-act">
          <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fas fa-cogs"></i> </div>
          <div class="serv-section-desc">
            <h4>Bersih</h4>
            <h5></h5>
          </div>
          <div class="section-heading-line-left"></div>

        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-12">
        <div class="serv-section-2">
          <div class="serv-section-2-icon"> <i class="fa fa-health"></i> </div>
          <div class="serv-section-desc">
            <h4>Sehat</h4>
            <h5></h5>
          </div>
          <div class="section-heading-line-left"></div>

        </div>
      </div>
    </div>

  </div>
</div>



<!-- Marketing messaging and featurettes -->
<div class="section_bg_gray">
  <div class="container">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-md-3">

          </div>
        </div>
      </div>
      <div class="row">

        <?php foreach ($layanan as $layanan) { ?>

          <div class="col-sm-6 col-md-4">
            <div class="single_what_we_do">
              <div class="top_line"></div>
              <div class="what_we_do_figure">
                <img src="<?php echo base_url('assets/upload/image/' . $layanan->gambar) ?>" alt="" class="img-fluid">
              </div>
              <h4 class="what_we_do_title"><a href="<?php echo base_url('layanan/' . $layanan->slug_layanan) ?>"><?php echo character_limiter($layanan->judul_layanan, 50) ?></a></h4>

            </div>
          </div>

        <?php } ?>

      </div>
    </div>
  </div>
</div>





<!-- START THE FEATURETTES -->
<div class="album">
  <div class="container">
    <div class="row">
      <?php foreach ($berita as $berita) { ?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="img-frame"><img class="card-img-top" src="<?php echo base_url('assets/upload/image/' . $berita->gambar) ?>" alt="Card image cap"></div>
            <div class="card-body">
              <h5 class="card-title"><a href="<?php echo base_url('berita/read/' . $berita->slug_berita) ?>"><?php echo character_limiter($berita->judul_berita, 50) ?></a></h5>
              <p class="card-text"><?php echo character_limiter($berita->isi_berita, 100) ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <a class="btn btn-sm btn-outline-secondary" href="<?php echo base_url('berita/read/' . $berita->slug_berita) ?>">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="container text-center">
      <a class="btn btn-outline-primary btn-lg" href="<?php echo base_url('berita/') ?> ">Index Berita</a>
    </div>

  </div>
</div>

<!-- /END THE FEATURETTES -->
