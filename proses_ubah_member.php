<?php
    include "koneksi.php";

    $id_member = $_POST['id_member'];
    $nama_member = $_POST["nama_member"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tlp = $_POST["tlp"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // mendapatkan data member yang diubah
    $sql = "SELECT * FROM member WHERE id_member = '$id_member'";
    # eksekusi perintah SQL
    $query = mysqli_query($koneksi, $sql);
    # konversi ke array
    $member = mysqli_fetch_array($query);

        $sql = "UPDATE member SET nama_member = '".$nama_member."',
                                 alamat = '".$alamat."',
                                 jenis_kelamin = '".$jenis_kelamin."',
                                 tlp = '".$tlp."',
                                 username = '".$username."',
                                 password = '".md5($password)."'
                                  WHERE id_member = '$id_member'";
        $result = mysqli_query($koneksi, $sql);
        if ($result) {
            echo "<script>alert('Berhasil mengubah member');location.href='data_member.php';</script>";
        } else {
            echo "<script>alert('Gagal mengubah member');location.href='data_member.php';</script>";
        }

?>