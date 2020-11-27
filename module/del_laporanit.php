
<?php
    include "../connect.php";

    if(isset($_GET['id']) && isset($_GET['file'])){
        $id_laporan = base64_decode($_GET['id']);
        $foto = base64_decode($_GET['file']);

        $delete = "DELETE FROM laporan_it WHERE id_laporan = '$id_laporan'";
        $hasil_del = mysqli_query($conn, $delete);

        if ($hasil_del){
            header("Location: index.php?p=laporan_it&bulan=$_GET[bulan]&tahun=$_GET[tahun]&pic=$_GET[pic]");
        }
        unlink("../files/Laporan Harian IT/$foto");
    }
?>
