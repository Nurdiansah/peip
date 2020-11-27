<?php
    $conn = mysqli_connect("localhost","root","","enc_it");

    if (!$conn) {
        echo "Koneksi gagal " . mysqli_connect_error();
    }
?>