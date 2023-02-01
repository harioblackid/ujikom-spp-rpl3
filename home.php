<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        button{
            width: 80px;
        }
        .catatan{
            width:200px;
        }
        .form button{
            margin-left: 76%;
        }
    </style>
</head>
<body>
<?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
?>
<p class="text-end m-3">
    <a href="index.php" onclick="return confirm('Apakah anda yakin ingin keluar?')">
        <button type="button" class="btn btn-danger btn-sm">Logout</button>
    </a>
</p>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 my-5 ms-5 ps-5">
                <img src="logo.jpg" class="img-thumbnail" alt="">
            </div>
            <div class="col-md-8 my-5 ms-4">
                <h1>Selamat datang! <?php echo $_SESSION['nama'];?></h1>
                <p class="fw-semibold">Catatan Perjalanan</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="home.php" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="catatan_perjalanan.php" class="text-decoration-none">Catatan Perjalanan</a></li>
                    <li class="breadcrumb-item"><a href="isi_data_perjalanan.php" class="text-decoration-none">Ini Data</a></li>
                </ol>
                <div class="form mb-3">
                    <textarea class="form-control" rows="8"></textarea>
                    <button type="button" class="catatan btn btn-primary mt-4">Ini Catatan Perjalanan</button>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>