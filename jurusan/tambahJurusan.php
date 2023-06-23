<?php
include '../header.php';
include '../koneksi.php';?>
<div class="tableform">
<h5>TAMBAH DATA JURUSAN</h5>
<form action="prosesTambahJurusan.php" method="post">
<div class="col-auto">
  <label for="lNama" class="form-label">Nama</label>
  <input type="text" name="nama" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include '../footer.php';
?>

