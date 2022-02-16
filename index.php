<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="text-center" style="background-color: #A6CF98">
    <div class="container mt-5">
        <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-5">
        <div class="card">
        <main class="form-signin">
            <form action="proses_login.php" method="POST">
                <div class="card-header" style="background-color: #F2FFE9;"><h1>LAUNDRY</h1></div>
                <div class="card-body mt-2">
                <h1 class="h3 mb-4 fw-normal">SIGN IN ADMIN</h1>
                <div class="form-floating">
                    <input type="username" class="form-control" id="floatingInput" 
                    name="username" placeholder="Insert Username" required>
                    <label for="floatingInput">Username</label>
                </div>
                <br>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" 
                    name="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <a href="tampil_admin.php">DATA ADMIN</a><br>
                <a href="tambah_admin.php">Daftar Akun Admin</a>
                <br><br>
                <button class="w-100 btn btn-lg btn-secondary" type="submit">Sign in</button>
                <p class="mt-4 mb-3 text-muted">SMK TELKOM MALANG &copy; 2021</p>
                </div>
            </form>
        </main>
        </div>
        </div>
        </div>
    </div>
</body>