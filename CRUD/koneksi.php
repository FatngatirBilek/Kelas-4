<?php 
$koneksi = mysqli_connect('localhost','root','','toko-sore');

// check connection

if (mysqli_connect_errno() ) {
        echo "koneksi database gagal : " .  mysqli_connect_error();
}

?>