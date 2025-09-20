<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $nis = $_POST['nis'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if (!file_exists(($_FILES['photo']['tmp_name'])) || !is_uploaded_file($_FILES['photo']['tmp_name'])) {
        $sql = "UPDATE students SET nis='$nis', name='$name', gender='$gender', dob='$dob'";
    } else {
        if (in_array($ext, $extallowed)) {
            if ($size > 10000000) {
                echo "<script>alert('Ukuran file tidak boleh lebih dari 10 MB'); window.location='?m=siswa&s=add';</script>";
            } else {
                $photo = $filename2 . "_" . $random . '.' . $ext;
                move_uploaded_file($_FILES['photo']['tmp_name'], 'images/students/'.$photo);
                $sql = "UPDATE students SET nis='$nis', name='$name', gender='$gender', dob='$dob'";
            }
        } else {
            echo "<script>alert('Akhiran file tidak sesuai'); window.location='?m=siswa&s=add';</script>";
        }
    }
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ?m=siswa&s=view");
    } else {
        echo "<script>alert('Data gagal disimpan'); window.location='?m=siswa&s=add';</script>";
    }
} else {
    echo "Jangan langsung buka file ini. Tambah Data <a href='?m=siswa&s=add'>Klik disini</a>";
}