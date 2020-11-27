<?php
    session_start();
    include "../connect.php";

    if(isset($_POST['add_note'])){
        $isi = $_POST['isi'];
        $user = $_SESSION['_id'];

        $insert = "INSERT INTO catatan (isi, user, tanggal) VALUES ('$isi', '$user', now())";
        $hasil_ins = mysqli_query($conn, $insert);

        if ($hasil_ins){
            header ('Location: index.php');
        }
    }
?>