<!-- cek apakah sudah login -->
<?php
	session_start();
	if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
		header("Location: login.php");
	}else{
		// header("Location: module/index.php");
		echo " <div class='alert alert-success' align='center'>
					<strong>Rambo ".$_SESSION['nm'].", anda sudah Login sebelumnya!</strong> Anda akan dialihkan ke halaman Dashboard.
				</div>
				<meta http-equiv='refresh' content='1; url= module/index.php'/>";
	}
?>
