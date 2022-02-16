<?php
    if ($_GET['id_paket']) {
        include "koneksi.php";

        $id_paket = $_GET['id_paket'];

        $sql = "SELECT * FROM paket WHERE id_paket = '$id_paket'";
        $query = mysqli_query($koneksi, $sql);
        $paket = mysqli_fetch_array($query);

        
        // if (file_exists($path)) {
        //     unlink($path);
        // }

        $qry_hapus = mysqli_query($koneksi, "DELETE FROM paket WHERE id_paket = '$id_paket'");
        if ($qry_hapus) {
            echo "<script>alert('Berhasil menghapus paket');location.herf='data_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus paket');location.href='data_paket.php';</script>";
            echo mysqli_error($koneksi);
        }
    } else {
        echo "id_paket tidak ada";
    }
?>