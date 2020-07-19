<div class="tile">
<div class="row">
  <div class="col-md-4">
    <b>Layanan</b>
    <p><?php echo $pendaftaran->nama_layanan ?></p>
    <b>Nama Lengkap</b>
    <p><?php echo $pendaftaran->nama_lengkap ?></p>
    <b>Alamat Lengkap</b>
    <p><?php echo $pendaftaran->alamat ?></p>
    <b>Email</b>
    <p><?php echo $pendaftaran->email ?></p>
    <b>Nomor Handphone</b>
    <p><?php echo $pendaftaran->nomorhp ?></p>
  </div>
  <div class="col-md-4">
    <b>Kota</b>
    <p><?php echo $pendaftaran->kota ?></p>
    <b>Tipe Kendaraan</b>
    <p><?php echo $pendaftaran->tipe_kendaraan ?></p>
    <b>Merek Kendaraan</b>
    <p><?php echo $pendaftaran->merek_kendaraan ?></p>
    <b>Tahun Kendaraan</b>
    <p><?php echo $pendaftaran->tahun_kendaraan ?></p>
    <b>Nomor KTP</b>
    <p><?php echo $pendaftaran->no_ktp ?></p>
  </div>
  <div class="col-md-4">
    <img src="<?php echo base_url('assets/upload/image/'.$pendaftaran->foto) ?>" width="70%"
      class="img img-thumbnail">
  </div>

</div>
</div>
