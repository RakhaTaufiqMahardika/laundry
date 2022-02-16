<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body style="background-color: #A6CF98">
    <div class="container">
    <div class="card" style="margin: 20px;">
        <div class="card-header" style="background-color: #F2FFE9;"><h1>Tambah Paket</h1></div>
        <div class="card-body">
        <a class="btn btn-secondary" href="data_paket.php" role="button">Back to Data Paket</a>
        <hr>
        <form action="proses_tambah_paket.php" method="POST" enctype="multipart/form-data">
        <div class="mb-2">
                <label class="form-label">Jenis Paket : </label>
                <select name="jenis" class="form-select" aria-label="Default select example" required>
                    <option selected></option>
                    <option value="kiloan">kiloan</option>
                    <option value="selimut">selimut</option>
                    <option value="bed_cover">Bed cover</option>
                    <option value="kaos">kaos</option>
                </select>
                </div>
            <div class="mb-2">
                <label for="harga" class="form-label">Harga Paket : </label>
                <input type="number" name="harga" class="form-control" placeholder="Masukkan harga Paket" required>
            </div>
            <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-secondary">
        </form>
        </div>
    </div>
    </div>
</body>
</html>