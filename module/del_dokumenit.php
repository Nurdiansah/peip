
<?php
    include "../connect.php";

    if(isset($_GET['id']) && isset($_GET['file'])){
        $id_dokumen = base64_decode($_GET['id']);
        $dokumen = base64_decode($_GET['file']);

        $delete = "DELETE FROM dokumen_it WHERE id_dokumen = '$id_dokumen'";
        $hasil_del = mysqli_query($conn, $delete);

        if ($hasil_del){
            header("Location: index.php?p=dokumen_it");
        }
        unlink("../files/Dokumen IT/$dokumen");
    }
?>
