<div class="container">
<br>
<h4 class="text-center">Berhasil!</h4>
<?php
//Notifikasi
if($this->session->flashdata('sukses'))
{
  echo '<div class="alert alert-success text-center">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

<div style="text-align:center;font-size:190px;color:#16a085;">
<i class="fa fa-check-circle"></i>
</div>
<center>
<a class="btn btn-success" href="<?php echo base_url()?>"><i class="fa fa-home"></i> Kembali Ke Halaman Depan</a>
</center>



</div>
