<?php
    $nama_member = $_POST["nama_member"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tlp = $_POST["tlp"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "koneksi.php";
    $query = "INSERT INTO member (nama_member, alamat, jenis_kelamin, tlp, username, password)
             VALUES ('".$nama_member."', '".$alamat."',  '".$jenis_kelamin."', '".$tlp."', '".$username."', '".md5($password)."')";
    $tambah = mysqli_query($koneksi, $query);
    if ($tambah) {
        echo "<script>alert('Registrasi berhasil');location.href='data_member.php';</script>";
    }
    else {
        echo "<script>alert('Registrasi gagal');location.href='tambah_member.php';</script>";
    }
?>