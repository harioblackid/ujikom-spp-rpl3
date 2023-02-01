<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        button {
            width: 200px;
        }

        .form button {
            margin-left: 80%;
        }
    </style>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        $nisn = $_POST['nisn'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $id_kelas = $_POST['id_kelas'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $id_spp = $_POST['id_spp'];
      
        $stmt = $koneksi->prepare("INSERT INTO siswa(nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) 
        VALUES (?,?,?,?,?,?,?)");
        $stmt = $koneksi->bind_param("sssissi" , $nisn, $nis, $nama, $id_kelas, $alamat, $no_telp, $id_spp);
        
        if ($stmt->execute()) {
            header("Location: home.php");
        } else{
            echo $koneksi->error;
        }
    }
    ?>

    <section>
        <div class="container-fluid">
            <div class="col-md-3 my-5 ms-5 ps-5">
    <img src="13684622logosmk-removebg-preview.png" class="img-thumbnail" alt="">
            </div>
            <div class="col-md-8-my-5 ms-4">
                <h1>APLIKASI PEMBAYARAN SPP</h1>
                <p class="fw-semibold">Isi Data Siswa</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="isi_data_siswa.php">DATA SISWA</a></li>
                </ol>
                <div class="form mb-3">
                    <form class="form-control" method="POST" row="8">
                        <div class="container px-8">
                            <div class="row">
                                <div class="col">
                                    <div class="p-3">NISN</div>
                                    <div class="p-3">NIS</div>
                                    <div class="p-3">NAMA</div>
                                    <div class="p-3">ID KELAS</div>
                                    <div class="p-3">ALAMAT</div>
                                    <div class="p-3">NO TELP</div>
                                    <div class="p-3">ID SPP</div>
                                </div>
                <div class="col">
                <input type="text" name="nisn" class="form-control m-3">
                <input type="text" name="nis" class="form-control m-3">
                <input type="text" name="nama" class="form-control m-3">
                <input type="number" name="id_kelas" class="form-control m-3">
                <input type="text" name="alamat" class="form-control m-3">
                <input type="text" name="no_telp" class="form-control m-3">
                <input type="number" name="id_spp" class="form-control m-3">
                </div>
                            </div>
                        </div>    
    <button type="submit" name="submit" class="btn btn-primary mt-5">SIMPAN</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>
</body>
</html>