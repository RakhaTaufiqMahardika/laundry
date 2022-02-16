<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body style="background-color: #A6CF98">
<?php 
    include "navbar.php";
?>
<br><br><br>
<div class="container">
    <div class="card" style="margin: 20px;">
        <div class="card-header" style="background-color: #F2FFE9;"><h1>Data Member</h1></div>
        <div class="card-body">
            <form action="data_member.php" method="POST" style="padding-bottom: 15px;" class="d-flex">
                <input class="form-control me-2" type="search" name="cari" placeholder="Masukkan keyword" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
            <a class="btn btn-secondary" href="home.php" role="button">Back to Menu</a>
            <hr>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">NO.TELEPON</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">AKSI</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST["cari"])) {
                        // if ($_POST["cari"] != NULL)
                        // jika ada keyword pencarian
                        $cari = $_POST["cari"];
                        $query_member = mysqli_query($koneksi, "SELECT * FROM member WHERE
                        id_member = '$cari' OR nama_member LIKE '%$cari%' OR username LIKE '%$cari%' OR alamat LIKE '%$cari%' OR jenis_kelamin LIKE '%$cari%'");
                    } else {
                        // jika tdk ada keyword pencarian
                        $query_member = mysqli_query($koneksi, "SELECT * FROM member");
                    }
                    
                    //$query_member = mysqli_query($koneksi, "SELECT * FROM member");
                    while ($data_member = mysqli_fetch_array($query_member)) { ?>
                        <tr>
                            <td><?= $data_member['id_member']; ?></td>
                            <td><?= $data_member['nama_member']; ?></td>
                            <td><?= $data_member['alamat']; ?></td>
                            <td><?= $data_member['jenis_kelamin']; ?></td>
                            <td><?= $data_member['tlp']; ?></td>
                            <td><?= $data_member['username']; ?></td>
                            <td>
                                <a href="ubah_member.php?id_member=<?=$data_member['id_member'];?>" class="btn btn-success">Ubah</a> 
                                <a href="hapus_member.php?id_member=<?=$data_member['id_member'];?>" 
                                onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php } 
                ?>
            </tbody>
            </table>
        </div>
    </div>
    </div>
    <?php 
       
    ?>
</body>
</html>