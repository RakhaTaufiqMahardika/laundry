<?php
    if ($_GET['id_member']) {
        include "koneksi.php";

        $id_member = $_GET['id_member'];

        $sql = "SELECT * FROM member WHERE id_member = '$id_member'";
        $query = mysqli_query($koneksi, $sql);
        $member = mysqli_fetch_array($query);

        
        // if (file_exists($path)) {
        //     unlink($path);
        // }

        $qry_hapus = mysqli_query($koneksi, "DELETE FROM member WHERE id_member = '$id_member'");
        if ($qry_hapus) {
            echo "<script>alert('Berhasil menghapus member');location.herf='data_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus member');location.href='data_member.php';</script>";
            echo mysqli_error($koneksi);
        }
    } else {
        echo "id_member tidak ada";
    }
?>