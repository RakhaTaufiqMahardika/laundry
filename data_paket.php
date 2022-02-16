<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paket</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body style="background-color: #A6CF98">
    <?php 
        include "navbar.php";
    ?>
    <br><br><br>
    <div class="container">
    <div class="card" style="margin: 20px;">
        <div class="card-header" style="background-color: #F2FFE9;"><h1>Data Paket</h1></div>
        <div class="card-body">
            <form action="data_paket.php" method="POST" style="padding-bottom: 15px;" class="d-flex">
                <input class="form-control me-2" type="search" name="cari" placeholder="Masukkan keyword" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
            <a class="btn btn-secondary" href="home.php" role="button">Back to Menu</a>
            <a class="btn btn-secondary" href="tambah_paket.php" role="button">Tambahkan Paket</a>
            <hr>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID PAKET</th>
                    <th scope="col">JENIS</th>
                    <th scope="col">HARGA</th>
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
                        $query_paket = mysqli_query($koneksi, "SELECT * FROM paket WHERE
                        id_paket = '$cari' OR jenis LIKE '%$cari%'");
                    } else {
                        // jika tdk ada keyword pencarian
                        $query_paket = mysqli_query($koneksi, "SELECT * FROM paket");
                    }
                    
                    //$query_paket = mysqli_query($koneksi, "SELECT * FROM paket");
                    while ($data_paket = mysqli_fetch_array($query_paket)) { ?>
                        <tr>
                            <td><?= $data_paket['id_paket']; ?></td>
                            <td><?= $data_paket['jenis']; ?></td>
                            <td><?= $data_paket['harga']; ?></td>
                            <td>
                                <a href="ubah_paket.php?id_paket=<?=$data_paket['id_paket'];?>" class="btn btn-success">Ubah</a> 
                                <a href="hapus_paket.php?id_paket=<?=$data_paket['id_paket'];?>" 
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
        // include "footer.php";
    ?>
</body>
</html>