<!-- cek apakah sudah login -->
<?php
	session_start();
	if(empty($_SESSION['pengguna']) || $_SESSION['pengguna'] == '' || !isset($_SESSION['pengguna'])){
		header("Location: login.php");
	}else{
		// header("Location: module/index.php");
		echo " <div class='alert alert-success' align='center'>
					<strong>Kapten ".$_SESSION['nm_pengguna'].", anda sudah Login sebelumnya!</strong> Anda akan dialihkan ke halaman Dashboard.
				</div>
				<meta http-equiv='refresh' content='1; url= module/index.php'/>";
	}
?>
