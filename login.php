<?php
require_once 'model/User.php';

if(isset($_SESSION['user'])) {
    header("Location: admin.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!preg_match('/^[a-zA-Z0-9]{3,}$/', $username)) {
        echo '<script>alert("Username harus lebih dari 3 huruf serta hanya huruf dan angka!")</script>';
    } else {
        $user = new User();
        $data = $user->login($username, $password);
        
        if ($data) {
            header('Location: admin.php');
        } else {
            echo '<script>alert("Username atau password salah!")</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    
    <title>Masuk - Desa Kemiri</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="post" class="row g-3">
                        <h4>Selamat datang, silakan masuk</h4>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end" name="submit">Masuk</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>