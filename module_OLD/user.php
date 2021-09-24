
<?php
	if(empty($_SESSION['pengguna']) || $_SESSION['pengguna'] == '' || !isset($_SESSION['pengguna'])){
		header("location:../login.php");
	};
	include '../connect.php';

	$query = "SELECT * FROM login
				ORDER BY nama asc";
	$proses = mysqli_query($conn, $query);
	$no=1;

	if(isset($_POST['adduser'])){
		$nama = $_POST['nama'];
		$username = strtolower($_POST['username']);
		$password = md5($_POST['pass']);
		$user_aktif = $_POST['user_aktif'];

		$ceklogin = mysqli_query($conn, "SELECT username FROM login WHERE username = '$username'");
		$cekuser = mysqli_num_rows($ceklogin);

		if($cekuser > 0){
			echo "<script>window.alert('Username a/n " . $username . " sudah ada sebelumnya!');
						location='index.php?p=user'
					</script>";
		}else{
			$tambahuser = mysqli_query($conn,"INSERT INTO login (nama, username, password, user_aktif) values ('$nama','$username','$password', '$user_aktif')");
			if ($tambahuser){
			echo " <div class='alert alert-success'>
				Berhasil menambahkan user baru.
			</div>
			<meta http-equiv='refresh' content='1; url=index.php?p=user'/>  ";
			} else { echo "<div class='alert alert-warning'>
				Gagal menambahkan user baru.
			</div>
			<meta http-equiv='refresh' content='1; url=index.php?p=user'/> ";
			}
		}
	};

	if(isset($_POST['ubah_user'])){
		$id_user = $_POST['id_user'];
		$nama = $_POST['nama'];
		$username = strtolower($_POST['username']);
		$username_lama = $_POST['username_lama'];
		$password = md5($_POST['pass']);
		$user_aktif = $_POST['user_aktif'];

		$ceklogin = mysqli_query($conn, "SELECT username FROM login WHERE username = '$username' AND username <> '$username_lama'");
		$cekuser = mysqli_num_rows($ceklogin);

		if($cekuser > 0){
			echo "<script>window.alert('Username a/n " . $username . " sudah ada sebelumnya!');
						location='index.php?p=user'
					</script>";
		}else{
			if(!empty($_POST['pass'])){
				$rubahUser = mysqli_query($conn, "UPDATE login SET nama='$nama', username='$username', password='$password', user_aktif='$user_aktif'
													WHERE id='$id_user'");
			}else{
				$rubahUser = mysqli_query($conn, "UPDATE login SET nama='$nama', username='$username', user_aktif='$user_aktif'
													WHERE id='$id_user'");
			}

			if ($rubahUser){
				echo " <div class='alert alert-success'>
					Berhasil merubah user.
				</div>
				<meta http-equiv='refresh' content='1; url=index.php?p=user'/>  ";
			} else { echo "<div class='alert alert-warning'>
					Gagal merubah user.
				</div>
				<meta http-equiv='refresh' content='1; url=index.php?p=user'/> ";
			}
		}
	}
?>
<section>

	<div class="row mt-4 mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
						<h4>Data User</h4>
						<button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs">Tambah User</button>
                    </div>
					<hr>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive">
                            <table id="table-dtNormal" class="table table-bordered table-hover  display nowrap">
                                <thead class="thead-dark">
                                    <tr style="text-align: center;">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
										<th>User Aktif</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <?php
                                    while ($data = mysqli_fetch_assoc($proses)){
                                ?>
                                    <tr>
                                        <td style="text-align: center; width: 5%;"><?= $no++; ?></td>
                                        <td><?= $data['nama']; ?></td>
										<td><?= $data['username']; ?></td>
										<?php if($data['user_aktif'] == '1'){ ?>
											<td style="text-align: center; width: 8%;"><input type="checkbox" checked="checked" readonly></td>
										<?php }else{ ?>
											<td style="text-align: center; width: 8%;"><input type="checkbox" readonly></td>
										<?php } ?>
										<td style="text-align: center; width: 40px;">
											<button title="Rubah" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#user-<?= $data['id']; ?>"><i class="fa fa-pencil-square-o"><a href="#user-<?= $data['id']; ?>?id_user=<?= $data['id']; ?>"></a></i></button>
											<a href="del_user.php?id=<?= base64_encode($data['id']); ?>" onclick="javascript: return confirm('Yakin user <?= $data['nama']; ?> dihapus?')"><button name="hapus" title="Hapus" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
										</td>
                                    </tr>

									<!-- Modal Edit user -->
									<div id="user-<?= $data['id']; ?>" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Ubah User <strong><?= $data['nama']; ?></strong></h5>
												</div>
												<div class="modal-body">
													<form method="POST">
														<input type="hidden" name="id_user" value="<?= $data['id']; ?>">
														<input type="hidden" name="username_lama" value="<?= $data['username']; ?>">
														<div class="form-group">
															<label for="nama">Nama</label>
															<input type="text" name="nama" id="nama" class="form-control awal_besar" placeholder="Nama" required autofocus autocomplete="off" value="<?= $data['nama']; ?>">
														</div>
														<div class="form-group">
															<label for="username">Username</label>
															<input type="text" name="username" id="username" class="form-control huruf_kecil" placeholder="Username" required autocomplete="off" value="<?= $data['username']; ?>">
														</div>
														<div class="form-group">
															<label for="pass">Password</label>
															<input type="password" name="pass" id="pass" class="form-control" placeholder="*kosongkan jika tidak dirubah" autocomplete="off" >
														</div>
														<div class="form-group">
															<input type="checkbox" name="user_aktif" value="1" <?php if($data['user_aktif'] == '1'){echo "checked=\"checked\"";} ?>> User Aktif
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
														<input name="ubah_user" type="submit" class="btn btn-info btn-xs" value="Simpan">
													</div>
												</form>
											</div>
										</div>
									</div>
                                <?php } ?>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>

<!-- modal input -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah User Baru</h4>
				</div>
				<div class="modal-body">
					<form method="POST">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" id="nama" class="form-control awal_besar" placeholder="Nama" required autofocus autocomplete="off">
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control huruf_kecil" placeholder="Username" required autocomplete="off">
						</div>
						<div class="form-group">
							<label for="pass">Password</label>
							<input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required autocomplete="off">
						</div>
						<div class="form-group">
							<input type="checkbox" name="user_aktif" value="1" checked="checked" > User Aktif
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
						<input name="adduser" type="submit" class="btn btn-info btn-xs" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
