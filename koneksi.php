<?php
$koneksi = new mysqli("localhost","root","","ujikom_spp");

if(mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>