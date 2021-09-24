
<?php
    include "../connect.php";

    if(isset($_GET['id']) && isset($_GET['file']) && isset($_GET['folder'])){
        $id_dokumen = base64_decode($_GET['id']);
        $dokumen = base64_decode($_GET['file']);
        $folder = base64_decode($_GET['folder']);

        // delete row di database
        $delete = mysqli_query($conn, "DELETE FROM dokumen WHERE id_dokumen = '$id_dokumen'");

        // nampilin folder penyimpanan file
        $queryFolder = mysqli_query($conn, "SELECT * FROM ms_folder WHERE id_folder = '$folder'");
        $dataFolder = mysqli_fetch_assoc($queryFolder);

        // ngapus file di dalem folder
        unlink("../files/PEIP/".$dataFolder['folder']."/".$dataFolder['sub_folder']."/".$dataFolder['sub_subfolder']."/".$dataFolder['sub_subsfolder']."/$dokumen");

        if ($delete){
            header("Location: index.php?p=dokumen&folder=".base64_encode($folder)."");
        }else{
            echo "Error cuii " . mysqli_connect_error();
        }
    }
?>
