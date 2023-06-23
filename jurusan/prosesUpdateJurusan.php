<?php
include '../koneksi.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama=$_POST['nama'];
        $id=$_GET['id'];
        $sql = "update `jurusan` set `jur_nama`='$nama'
        where `jur_id`='$id';
        ";

        if ($con->query($sql)) {
            echo "Update berhasil:";
            header("location: /si_kampus/jurusan/");
        } else {
            echo "Error: ";
    }
    $con->close();
}
?>


