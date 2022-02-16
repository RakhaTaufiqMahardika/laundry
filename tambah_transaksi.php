<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <?php include "navbar.php" ?>
</head>

<body>
    <!-- id member,tgl,batas waktu,tgl bayar,status,id user -->
    <div class=container>   
    <form action="proses_tambah_transaksi.php" method="post">
        <h2>Add Transaksi</h2>
        <br>
        Pelanggan :
        <select name="id_member" class="form-control">
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($koneksi,"select * from member");
            while($data_member=mysqli_fetch_array($qry_member)){
                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama_member'].'</option>';    
            }
            ?>
        </select>
        <br>
        Batas Waktu :  
        <input type="date" name="batas_waktu" value="" class="form-control" require>
        <br>
        <!-- Bayar :  
        <input type="date" name="tgl_bayar" value="" class="form-control" require> -->
        <br>
        <table>
            <tr>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Qty</th>
            </tr>
            <?php 
                include "koneksi.php";
                $qry_paket=mysqli_query($koneksi,"select * from paket");
                while($data_paket=mysqli_fetch_array($qry_paket)){
                    echo '<tr>
                        <td> 
                            <input type="checkbox" id="'.$data_paket['id_paket'].'" name="'.$data_paket['id_paket'].'" value="'.$data_paket['id_paket'].'">
                            <label for="'.$data_paket['id_paket'].'"> '.$data_paket['jenis'].'</label></td>
                        <td>
                            <input type="number" name="harga'.$data_paket['id_paket'].'" value="'.$data_paket['harga'].'" readonly>
                        </td>
                        <td>
                            <input type="number" name="qty'.$data_paket['id_paket'].'" value="">
                        </td>
                    </tr>';    
                }
            ?>
        </table>
        <input type="submit" value="Tambah Transaksi" class="btn btn-dark">
    </form>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>