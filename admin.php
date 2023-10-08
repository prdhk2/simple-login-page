<?php
session_start();

// cek apakah pengguna sudah login (username tersedia dalam sesi)
if (!isset($_SESSION['username'])) {
    // jike belum login tendang ke halaman login
    header("Location: login.php");
    exit;
}
// ambil username dari sesi 
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h2 class="card-title">Selamat datang, <?php echo $username; ?>!</h2>
                <p>Anda telah berhasil login ke halaman admin.</p>
                    <div style="width: 18rem justify-content-left;">
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
