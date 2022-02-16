<?php
    include "koneksi.php";

    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

        $input_paket = mysqli_query($koneksi, "INSERT INTO paket (jenis, harga) 
                        VALUES ('".$jenis."', '".$harga."')");
        if ($input_paket) {
            echo "<script>alert('Berhasil menambahkan paket');location.href='data_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
        }
?>