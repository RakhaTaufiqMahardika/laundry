<?php
    session_start();
    include "koneksi.php";
    $id_member = $_POST["id_member"];
    $batas_waktu = $_POST["batas_waktu"];
    // $tgl_bayar = $_POST["tgl_bayar"];
    $status = ["baru"];
    // $dibayar = $_POST["dibayar"];
    $id_admin = $_SESSION['id_admin'];
    

    // tabel transaksi
    $query_transaksi = mysqli_query($koneksi,"insert into transaksi 
    (id_member,tgl,batas_waktu,status,dibayar,id_admin) 
    values ('".$id_member."','".date('Y-m-d')."','".$batas_waktu."','baru','belum_dibayar','".$id_admin."') ");

    $id_transaksi = $koneksi->insert_id;
    
    //tabel detail transaksi
    $query_paket = mysqli_query($koneksi, "SELECT * FROM paket");
    $data_paket = mysqli_num_rows($query_paket);
    for ($i=1; $i <= $data_paket; $i++) { 
        if (isset($_POST[$i])) {
            $paket  = $_POST[$i];
            $qty    = $_POST['qty'.$i];
            $harga  = $_POST['harga'.$i] * $_POST['qty'.$i];
            $query_detail_transaksi = mysqli_query($koneksi,"insert into detail_transaksi (id_transaksi,id_paket,qty,harga) values
                 ('".$id_transaksi."','".$paket."','".$qty."','".$harga."')");                
                 
        }
        
    }
    if ($query_detail_transaksi) {
        echo "<script>alert('berhasil');location.href='transaksi.php';</script>";
    }
    else {
        echo $query_detail_transaksi;
}

?>

