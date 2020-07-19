<div class="tile">
    <div class="tile-title-w-btn">
        <h3 class="title">Data Upload</h3>
     </div>

<?php
//Notifikasi
if($this->session->flashdata('sukses'))
{
  echo '<div class="alert alert-success custom-alert">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}

 ?>

<hr>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
  <th width="10%">Foto KTP</th>
    <th>Nama</th>
  <th width="20%">Layanan</th>
  <th>Tanggal Daftar</th>
  <th width="20%">Aksi</th>
</tr>
</thead>
<tbody>

<?php foreach($upload as $upload) { ?>

<tr>

  <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$upload->foto) ?>" width="60"
    class="img img-thumbnail"></td>
    <td><?php echo $upload->nama_lengkap ?>

      <?php if($upload->status_read == 0) {
        echo '<span class="badge badge-danger">';
        echo "Pendaftar Baru";
        echo '</span>';
      }else {
        // echo '<span class="badge badge-success">';
        // echo "Ok";
        // echo '</span>';
      } ?>


    </td>
  <td><?php echo $upload->nama_layanan ?></td>
  <td><?php echo shortdate_indo($upload->tanggal_post) ?></td>
  <td><a href="<?php echo base_url('admin/upload/lihat/' .$upload->id_upload) ?>" title="Edit Berita" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> view</a>

      <?php
      //link Delete
      include('delete.php');
      ?>

  </td>
</tr>

<?php } ?>

</tbody>
</table>
</div>
</div>
