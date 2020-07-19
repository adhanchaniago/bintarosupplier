
<h4 class="cat-judul text-center"><?php echo $title ?></h4>

  <div class="container">

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>"> Home</a></li>
        <li class="breadcrumb-item active"><?php echo $title ?></li>
    </ul>
    </div>

<div class="booking-bg">
  <div class="container">
  <div class="row">
    



            </div>
          </div>
</div>

<div class="container">
<br>
<div class="row">
  <div class="col-md-8">
<h4>Form Pemesanan Sewa Mobil Bandara.</h4>
<hr>
<?php
//Error warning
echo validation_errors('<div class="alert alert-danger">','</div>');
echo form_open(base_url('booking'));
?>

<br>
 <div class="row">
   <div class="col-md-3">
      <div class="form-group">
          <label>Title</label>
        <select name="title" class="form-control form-control-chosen" required>
          <option>-- Pilih Title --</option>
           <option value="Tuan">Tuan</option>
          <option value="Nyonya">Nyonya</option>
          <option value="Saudara">Saudara</option>
          <option value="Saudari">Saudari</option>
        </select>
      </div>
    </div>


  <div class="col-md-5">
    <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control">
    </div>
  </div>
    <div class="col-md-4">
     <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="Email" class="form-control">
     </div>
    </div>

    <div class="col-md-12">
     <div class="form-group">
      <label>Nomor Hp/Whatsapp</label>
      <input type="number" name="telepon" placeholder="Telepon" class="form-control">
     </div>
    </div>

     <div class="col-md-4">
        <div class="form-group">
            <label>Maskapai</label>
          <input type="text" name="maskapai" placeholder="Maskapai" class="form-control">
        </div>
      </div>

      <div class="col-md-5">
         <div class="form-group">
             <label>Bandara Kedatangan</label>
           <select name="bandara" class="form-control form-control-chosen">
             <option>-- Pilih Bandara --</option>
              <option value="Bandara Soekarno Hatta">Bandara Soekarno Hatta (Jakarta)</option>
             <option value="Bandara Halim Perdana Kusuma">Bandara Halim Perdana Kusuma (Jakarta)</option>
             <option value="Bandara Adisutjipto">Bandara Adisutjipto (Yogyakarta)</option>
             <option value="Bandara Ahmad Yani">Bandara Ahmad Yani (Semarang)</option>
             <option value="Bandara Juanda">Bandara Juanda (Surabaya)</option>
           </select>
         </div>
       </div>

      <div class="col-md-3">
         <div class="form-group">
             <label>Terminal Kedatangan</label>
           <input type="text" name="terminal" placeholder="Terminal Kedatangan" class="form-control">
         </div>
       </div>

       <div class="col-md-4">
          <div class="form-group">
              <label>Jumlah Penumpang</label>
            <select name="jml_penumpang" class="form-control form-control-chosen" required>
              <option>-- Pilih Jumlah --</option>
               <option value="1 Orang">1 Orang</option>
              <option value="2 Orang">2 Orang</option>
              <option value="3 Orang">3 Orang</option>
              <option value="4 Orang">4 Orang</option>
              <option value="5 Orang">5 Orang</option>
              <option value="6 Orang">6 Orang</option>
              <option value="7 Orang">7 Orang</option>
              <option value="8 Orang">8 Orang</option>
              <option value="9 Orang">9 Orang</option>
              <option value="10 Orang">10 Orang</option>
              <option value="11 Orang">11 Orang</option>
              <option value="12 Orang">12 Orang</option>
              <option value="13 Orang">13 Orang</option>
              <option value="14 Orang">14 Orang</option>
              <option value="15 Orang">15 Orang</option>
            </select>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
              <label>Tanggal </label>
                <input type="text" name="tanggal_jemput" class="form-control" placeholder="Tanggal" id="id_tanggal">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
              <label>Jam </label>
                <input type="text" name="jam_jemput" class="form-control" placeholder="Time" id="timepicker">
          </div>
        </div>

    <div class="col-md-12">
     <div class="form-group">
      <label>Alamat Tujuan</label>
      <textarea name="alamat_tujuan" placeholder="Alamat Tujuan" class="form-control"></textarea>
     </div>
     <div class="form-group">
       <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Booking Mobil">
     </div>
    </div>

  </div>

<?php
//Form close
echo form_close();
 ?>


</div>

</div><!-- /.row -->

</div>
