<?php
    session_start();
    include "../connect.php";

    if(isset($_POST['add_dokumen'])){
        // kode urut buat ID Dokumen
		$queryID = mysqli_query($conn, "SELECT MAX(id_dokumen) as id_dokumen FROM dokumen");
		$dataID = mysqli_fetch_assoc($queryID);
		$id_urut = $dataID['id_dokumen'];
		$noUrut = (int) substr($id_urut, 4, 5);
		$noUrut++;
        $newID = 'PEIP' . sprintf("%05s", $noUrut);

        // ngambil folder2 buat move file
        $folder = $_POST['folder'];
		$queryFolder = mysqli_query($conn, "SELECT * FROM ms_folder WHERE id_folder = '$folder'");
        $dataFolder = mysqli_fetch_assoc($queryFolder);

		$nama_dokumen = $_POST['nama_dokumen'];
		$tahun_dokumen = $_POST['tahun_dokumen'];
		$user = $_SESSION['id_pengguna'];
		$dokumen = ($_FILES['dokumen']['name']);
        $path = ($_FILES['dokumen']['tmp_name']);
        
        // ngecek apakah dokumen udh ada difolder
        $cekFile = mysqli_query($conn, "SELECT file FROM dokumen WHERE kd_folder = '$folder' AND file = '$dokumen'");
        $cekDokumen = mysqli_num_rows($cekFile);

        if($cekDokumen > 0){
            echo "<script>window.alert('Dokumen " . $dokumen . " dimenu " . $dataFolder['sub_menu'] . " sudah ada sebelumnya. *Pastikan nama file tidak sama dalam 1 menu!');
						location='index.php?p=dokumen&folder=".base64_encode($folder)."'
					</script>";
        }else{
            move_uploaded_file($path, "../files/PEIP/".$dataFolder['folder']."/".$dataFolder['sub_folder']."/".$dataFolder['sub_subfolder']."/".$dataFolder['sub_subsfolder']."/$dokumen");

            $tambahData = mysqli_query($conn,"INSERT INTO dokumen (id_dokumen, nm_dokumen, kd_folder, thn_dokumen, diupload_oleh, waktu_diupload, dirubah_oleh, waktu_dirubah, file) VALUES
                                                ('$newID', '$nama_dokumen', '$folder', '$tahun_dokumen', '$user', now(), '$user', now(), '$dokumen')");
            if ($tambahData){
                header("Location: index.php?p=dokumen&folder=".base64_encode($folder)."");
                // echo " <div class='alert alert-success'>
                // 	Berhasil menambahkan data baru.
                //   </div>
                // <meta http-equiv='refresh' content='1; url=index.php?p=dokumen&folder=".base64_encode($folder)."'/>  ";
            } else {
                echo "Error cuii " . mysqli_connect_error();
                // echo "<div class='alert alert-warning'>
                // 	Gagal menambahkan data baru.
                //   </div>
                //  <meta http-equiv='refresh' content='1; url=index.php?p=dokumen&folder=".base64_encode($folder)."'/> ";
            }
        }
	}
?>
