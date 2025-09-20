<?php
    include_once('config.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ?m=siswa&s=view");
    }   else {
            echo "<script>alert('Data gagal dihapus'); window,location='?m=siswa&s=view';</script>";
    }