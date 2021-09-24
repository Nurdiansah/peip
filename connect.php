<?php
    $conn = mysqli_connect("localhost","root","kambingjawa","peip");

    if (!$conn) {
        echo "Koneksi gagal " . mysqli_connect_error();
    }
?>
