
<?php
    include "../connect.php";

    if(isset($_GET['id']) && isset($_GET['file'])){
        $id_perangkat = base64_decode($_GET['id']);
        $tanda_terima = base64_decode($_GET['file']);

        $delete = "DELETE FROM pc_laptop WHERE id_perangkat = '$id_perangkat'";
        $hasil_del = mysqli_query($conn, $delete);

        if ($hasil_del){
            header("Location: index.php?p=pc_laptop");
        }
        unlink("../files/PC Laptop/$tanda_terima");
    }
?>
