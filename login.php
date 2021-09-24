<?php
	session_start();

	include "connect.php";
	date_default_timezone_set("Asia/Bangkok");
	$timenow = date("j-F-Y-h:i:s A");

	if(isset($_POST['tombol_login'])){
		$pengguna = mysqli_real_escape_string($conn, $_POST['uname']);
		$kata_sandi = md5(mysqli_real_escape_string($conn, $_POST['upass']));

		$masuk = mysqli_query($conn, "SELECT * FROM login WHERE username = '$pengguna' AND password = '$kata_sandi' AND user_aktif = '1'");
		$cek_masuk = mysqli_num_rows($masuk);

		if($cek_masuk > 0){
			$data_masuk = mysqli_fetch_assoc($masuk);
			$_SESSION['id_pengguna'] = $data_masuk['id'];
			$_SESSION['nm_pengguna'] = $data_masuk['nama'];
			$_SESSION['pengguna'] = $data_masuk['username'];
			$_SESSION['time'] = $timenow;
			if(isset($_POST['remember'])){
				setcookie('usr', base64_encode($_POST['uname']), time() + 259200);
				setcookie('pwd', base64_encode($_POST['upass']), time() + 259200);
			}else{
				setcookie('usr', base64_encode($_POST['uname']), time() - 259200);
				setcookie('pwd', base64_encode($_POST['upass']), time() - 259200);
			}
			header('Location: module/index.php');
		}else{
			echo "<script>window.alert('Username atau password salah!');
						location='login.php'
					</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PEIP | Login</title>
	<link rel="shortcut icon" type="image/icon" href="assets/images/peip.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<link rel="stylesheet" href="login.css">
	<!-- <style>body{
		background-image:url("bg.png");
		background-size: cover;
		background-position: center;
		text-align: center;
		height: 100%;
	}
	</style> -->
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/images/peip.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST">
						<div class="form-group mb-4">
							<h6 class="control-label" align="center"><strong>PT. Pelayaran Ekanuri Indra Pratama</strong></h6>
						</div>
						<?php if(isset($_COOKIE['usr']) && isset($_COOKIE['pwd'])){ ?>
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="uname" class="form-control input_user" value="<?= base64_decode($_COOKIE['usr']); ?>" placeholder="Username" required autofocus>
							</div>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="upass" class="form-control input_pass" value="<?= base64_decode($_COOKIE['pwd']); ?>" placeholder="Password" required>
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" checked="checked" name="remember" id="remember" title="Ingat saya dalam 3 hari">
									<label class="custom-control-label" for="remember" title="Ingat saya dalam 3 hari">Ingat saya</label>
								</div>
							</div>
						<?php }else{ ?>
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="uname" class="form-control input_user" placeholder="Username" required autofocus>
							</div>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="upass" class="form-control input_pass" placeholder="Password" required>
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="remember" id="remember" title="Ingat saya dalam 3 hari">
									<label class="custom-control-label" for="remember" title="Ingat saya dalam 3 hari">Ingat saya</label>
								</div>
							</div>
						<?php } ?>
						<div class="form-group">
							<input type="submit" name="tombol_login" class="btn login_btn" value="Login">
						</div>
					</form>
				</div>
				<!-- <div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<!------ Include the above in your HEAD tag ---------->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
