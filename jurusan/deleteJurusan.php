<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include '../koneksi.php';

    $id=$_GET["id"];
    // sql to delete a record
    $sql = "DELETE FROM jurusan WHERE jur_id=".$id;

    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("location: /si_kampus/jurusan/");
    } else {
        echo "Error deleting record: " . $con->error;
    }

    $con->close();
}

?>


