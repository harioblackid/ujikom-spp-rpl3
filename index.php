<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8> charset="UTF8-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    html, body {
        height: 100%;
    }
    body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
    }

    .signin{
        margin-left: 90px;
    }
</style>

</head>
<body>
<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        session_start();
        $query = mysqli_fetch_array($data);
        $_SESSION['username'] = $query['username'];
        $_SESSION['level'] = "admin";
        header("location:admin.php");
    }
    else{
        header("location:index.php?pesan=gagal"); 
    }
}
?>
    <div class="form-signin w-100 m-auto">
        <form method="POST">
            <h3 class="text-center mb-3">Login</h3>
            <?php
                if(isset($_GET['pesan'])) : ?>
                <div class="alert alert-danger" role="alert">
                    Silahkan masukan NIK atau Password dengan benar!
                </div> 
            <?php else:?>
            <?php endif;?>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username"
id="floatingPassword" placeholder="Username">
                <label for="floatingPassword">Username</label>
            </div>
            <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password"
id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary signin mt-4">Masuk</button>
        </form>
    </div>
</body>
</html>