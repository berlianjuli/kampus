<?php
include '../header.php';
include '../koneksi.php';?>
<div class="tableform">
<h5>UPDATE DATA JURUSAN</h5>
<?php
$id=$_GET['id'];

$sql = "SELECT * FROM jurusan where jur_id=".$id;
$hasil = $con->query($sql);
$jurusan = $hasil->fetch_assoc();
?>
<form action="prosesUpdateJurusan.php?id=<?php echo $jurusan['jur_id']; ?>" method="post">
<div class="col-auto">
  <label for="lNama" class="form-label">Nama</label>
  <input type="text" name="nama" value="<?php echo $jurusan['jur_nama']; ?>" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
include '../footer.php';
?>


