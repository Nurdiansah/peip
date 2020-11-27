
<?php
    include "../connect.php";

    if(isset($_GET['id'])){
        $id_sptlembur = base64_decode($_GET['id']);

        $delete = "DELETE FROM spt_lembur WHERE id_sptlembur = '$id_sptlembur'";
        $hasil_del = mysqli_query($conn, $delete);

        if ($hasil_del){
            header("Location: index.php?p=spt_lembur");
        }
    }
?>
