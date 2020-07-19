

<h4 class="cat-judul text-center">Detail Berita</h4>

  <div class="container">
    <div class="row">

<!-- START THE FEATURETTES -->

        <div class="col-md-8 post-detail">
          <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>"> Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url($this->uri->segment(1)) ?>">
                <?php echo ucfirst(str_replace('_',' ', $this->uri->segment(1))) ?>
              </a></li>
              <li class="breadcrumb-item active"><?php echo $title ?></li>
          </ul>
          <div class="konten-berita">
           <img src="<?php echo base_url('assets/upload/image/'.$berita->gambar)?>" alt="<?php echo $berita->judul_berita ?>" class="img-fluid">
          <h2><?php echo $title ?></h2>
          <div class="post-meta">
            <span><i class="fa fa-calendar"></i> <?php echo shortdate_indo($berita->tanggal_post) ?></span>
            <span><i class="fa fa-user"></i> <?php echo $berita->nama ?> </span>
            <span><i class="fa fa-tag"></i> <?php echo $berita->nama_kategori ?></span>
            <span><i class="fa fa-eye"></i> <?php echo $berita->berita_views ?> Kali dilihat</span>
          </div>
          <p><?php echo $berita->isi_berita ?></p>

          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <div class="addthis_inline_share_toolbox"></div>

        </div>

      </div>



        <div class="col-md-4 sidebar">
          <div class="sidebar-konten">
          <h3 class="sidebar-title">Berita Terbaru</h3>
          <?php foreach($listing as $listing) { ?>
          <ul>
            <li>
              <img src="<?php echo base_url('assets/upload/image/'.$listing->gambar)?>" alt="<?php echo $listing->judul_berita ?>" class="img-fluid">
              <a href="<?php echo base_url('berita/'.$listing->slug_berita) ?>"> <?php echo strip_tags(character_limiter($listing->judul_berita, 50)) ?> </a>
              <br><i class="fa fa-calendar"></i> <?php echo date_indo($listing->tanggal_post) ?>
            </li>
          </ul>
          <?php } ?>

          </div>
          <div class="sidebar-konten">
          <h3 class="sidebar-title">Berita Terpopuler</h3>
          <?php foreach($popularpost as $popularpost) { ?>
          <ul>
            <li>
              <img src="<?php echo base_url('assets/upload/image/'.$popularpost->gambar)?>" alt="<?php echo $popularpost->judul_berita ?>" class="img-fluid">
              <a href="<?php echo base_url('berita/'.$popularpost->slug_berita) ?>"> <?php echo strip_tags(character_limiter($popularpost->judul_berita, 50)) ?> </a>
              <br><i class="fa fa-eye"></i> <?php echo $popularpost->berita_views ?> Kali dilihat
            </li>
          </ul>
          <?php } ?>



        </div>
      </div>


<!-- /END THE FEATURETTES -->

</div>
</div>
