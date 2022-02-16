<?php
    $nama_admin = $_POST["nama_admin"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    include "koneksi.php";
    $query = "INSERT INTO admin (nama_admin, username, password, role)
             VALUES ('".$nama_admin."', '".$username."', '".md5($password)."', '".$role."')";
    $tambah = mysqli_query($koneksi, $query);
    if ($tambah) {
        echo "<script>alert('Berhasil menambahkan admin');location.href='index.php';</script>";
    }
    else {
        echo "<script>alert('Gagal menambahkan admin');location.href='tambah_admin.php';</script>";
    }
?>