<?php
    session_start();
    include "../connect.php";

    if(isset($_POST['edit_dokumen'])){
		// ngambil folder2 buat move file
		$folder = $_POST['folder'];
		$queryFolder = mysqli_query($conn, "SELECT * FROM ms_folder WHERE id_folder = '$folder'");
		$dataFolder = mysqli_fetch_assoc($queryFolder);

		// ngecek apakah dokumen yg mau dirubah udh ada difolder
		$cek_dokumen = $_FILES['dokumen']['name'];
		$cek_dokumen_lama = $_POST['dokumen_lama'];
        $cekFile = mysqli_query($conn, "SELECT file FROM dokumen WHERE kd_folder = '$folder' AND file = '$cek_dokumen' AND file <> '$cek_dokumen_lama'");
        $cekDokumen = mysqli_num_rows($cekFile);

        if($cekDokumen > 0){
            echo "<script>window.alert('Dokumen " . $cek_dokumen . " dimenu " . $dataFolder['sub_menu'] . " sudah ada sebelumnya. *Pastikan nama file tidak sama dalam 1 menu!');
						location='index.php?p=dokumen&folder=".base64_encode($folder)."'
					</script>";
        }else{
			// ngecek file apa user mau ganti file nya atau engga, klo ganti yg lama diapus
			$cek_file = ($_FILES['dokumen']['name']);
			if ($cek_file == ''){
				$dokumen = $_POST['dokumen_lama'];
			}else{
				$del_dokumen = $_POST['dokumen_lama'];
				unlink("../files/PEIP/".$dataFolder['folder']."/".$dataFolder['sub_folder']."/".$dataFolder['sub_subfolder']."/".$dataFolder['sub_subsfolder']."/$del_dokumen");
				$dokumen = ($_FILES['dokumen']['name']);
				$path = ($_FILES['dokumen']['tmp_name']);
				move_uploaded_file($path, "../files/PEIP/".$dataFolder['folder']."/".$dataFolder['sub_folder']."/".$dataFolder['sub_subfolder']."/".$dataFolder['sub_subsfolder']."/$dokumen");
			}

			$id_dokumen = $_POST['id_dokumen'];
			$nama_dokumen = $_POST['nama_dokumen'];
			$tahun_dokumen = $_POST['tahun_dokumen'];
			$user = $_SESSION['id_pengguna'];

			$rubahData = mysqli_query($conn,"UPDATE dokumen SET nm_dokumen='$nama_dokumen', thn_dokumen='$tahun_dokumen', dirubah_oleh='$user', waktu_dirubah=now(), file='$dokumen'
												WHERE id_dokumen='$id_dokumen'");
			if ($rubahData){
				header("Location: index.php?p=dokumen&folder=".base64_encode($folder)."");
				// echo " <div class='alert alert-success'>
				// 	Berhasil merubah data.
				//   </div>
				// <meta http-equiv='refresh' content='1; url=index.php?p=dokumen'/>  ";
			} else {
				echo "Error cuii " . mysqli_connect_error();
				//  echo "<div class='alert alert-warning'>
				// 	Gagal merubah data.
				//   </div>
				//  <meta http-equiv='refresh' content='1; url=index.php?p=dokumen'/> ";
			}
		}
	}
?>