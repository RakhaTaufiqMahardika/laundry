<?php
    include "koneksi.php";

    $id_paket = $_POST['id_paket'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    // mendapatkan data buku yang diubah
    $sql = "SELECT * FROM paket WHERE id_paket = '$id_paket'";
    # eksekusi perintah SQL
    $query = mysqli_query($koneksi, $sql);
    # konversi ke array
    $paket = mysqli_fetch_array($query);

        $sql = "UPDATE paket SET jenis = '".$jenis."', harga = '".$harga."' WHERE id_paket = '$id_paket'";
        $result = mysqli_query($koneksi, $sql);
        if ($result) {
            echo "<script>alert('Berhasil mengubah paket');location.href='data_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal mengubah paket');location.href='data_paket.php';</script>";
        }

?>