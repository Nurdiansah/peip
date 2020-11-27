
<?php
	if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
		header("location:../login.php");
	};
	include '../connect.php';

	$queryDokumen = mysqli_query($conn, "SELECT * FROM dokumen_it ORDER BY nm_dokumen ASC");
	$no=1;


	if(isset($_POST['add_dokumen'])){
		$nama_dokumen = $_POST['nama_dokumen'];
		$it = $_SESSION['nm'];
		$dokumen = ($_FILES['dokumen']['name']);
		$path = ($_FILES['dokumen']['tmp_name']);
		move_uploaded_file($path, "../files/Dokumen IT/$dokumen");

		$tambahData = mysqli_query($conn,"INSERT INTO dokumen_it (nm_dokumen, diupload_oleh, waktu_diupload, dirubah_oleh, waktu_dirubah, file) values
											('$nama_dokumen', '$it', now(), '$it', now(), '$dokumen')");
		if ($tambahData){
		echo " <div class='alert alert-success'>
			Berhasil menambahkan data baru.
		  </div>
		<meta http-equiv='refresh' content='1; url=index.php?p=dokumen_it'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal menambahkan data baru.
		  </div>
		 <meta http-equiv='refresh' content='1; url=index.php?p=dokumen_it'/> ";
		}
	}

	if(isset($_POST['edit_dokumen'])){
		$cek_file = ($_FILES['dokumen']['name']);
        if ($cek_file == ''){
            $dokumen = $_POST['dokumen_lama'];
        }else{
            $del_dokumen = $_POST['dokumen_lama'];
            if(isset($del_dokumen)){
                unlink("../files/Dokumen IT/$del_dokumen");
            }
            $dokumen = ($_FILES['dokumen']['name']);
            $path = ($_FILES['dokumen']['tmp_name']);
            move_uploaded_file($path, "../files/Dokumen IT/$dokumen");
		}

		$id_dokumen = $_POST['id_dokumen'];
		$nama_dokumen = $_POST['nama_dokumen'];
		$it = $_SESSION['nm'];

		$rubahData = mysqli_query($conn,"UPDATE dokumen_it SET nm_dokumen='$nama_dokumen', dirubah_oleh='$it', waktu_dirubah=now(), file='$dokumen'
											WHERE id_dokumen='$id_dokumen'");
		if ($rubahData){
		echo " <div class='alert alert-success'>
			Berhasil merubah data.
		  </div>
		<meta http-equiv='refresh' content='1; url=index.php?p=dokumen_it'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal merubah data.
		  </div>
		 <meta http-equiv='refresh' content='1; url=index.php?p=dokumen_it'/> ";
		}
	}
?>
<section>

	<div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
						<h4>Dokumen IT</h4>
						<button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs">Tambah Data</button>
                    </div>
					<hr>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive">
                            <table id="table-dtNormal" class="table table-bordered table-hover  display nowrap" align="center">
                                <thead class="thead-dark">
                                    <tr style="text-align: center;">
                                        <th>No</th>
                                        <th>Nama Dokumen</th>
                                        <th>Dibuat Oleh</th>
										<th>Waktu Dibuat</th>
                                        <th>Dirubah Oleh</th>
										<th>Waktu Dirubah</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
								<tbody>
									<?php
										while ($data = mysqli_fetch_assoc($queryDokumen)){
									?>
										<tr>
											<td style="text-align: center; width: 5%;"><?= $no++; ?></td>
											<td><?= $data['nm_dokumen']; ?></td>
											<td><?= $data['diupload_oleh']; ?></td>
											<td><?= $data['waktu_diupload']; ?></td>
											<td><?= $data['dirubah_oleh']; ?></td>
											<td><?= $data['waktu_dirubah']; ?></td>
											<td style="text-align: center; width: 12%;">
												<a href="../files/Dokumen IT/<?= $data['file']; ?>" download title="Download : <?= $data['file']; ?>" class="btn btn-dark btn-xs"><i class="fa fa-download"></i></a>
												<button title="Rubah" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ubah_dokumen-<?= $data['id_dokumen']; ?>"><i class="fa fa-pencil-square-o"></i></button>
												<a href="del_dokumenit.php?id=<?= base64_encode($data['id_dokumen']); ?>&file=<?= base64_encode($data['file']); ?>" onclick="javascript: return confirm('Yakin dokumen <?= $data['nm_dokumen']; ?> dihapus?')"><button name="hapus" title="Hapus" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
											</td>
										</tr>

										<!-- EDIT MODAL DATA -->
										<div id="ubah_dokumen-<?= $data['id_dokumen']; ?>" class="modal fade">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Rubah Dokumen</h5>
													</div>
													<div class="modal-body">
														<form method="POST" enctype="multipart/form-data">
															<input type="hidden" name="id_dokumen" value="<?= $data['id_dokumen']; ?>">
															<input type="hidden" name="dokumen_lama" value="<?= $data['file']; ?>">
															<div class="form-group">
																<label for="nama_dokumen">Nama Dokumen</label>
																<input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control" placeholder="Nama Dokumen" required autofocus autocomplete="off"  value="<?= $data['nm_dokumen']; ?>">
															</div>
															<div class="form-group">
																<label for="dokumen">File</label>
																<input type="file" name="dokumen" id="dokumen" class="form-control">
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
															<input name="edit_dokumen" type="submit" class="btn btn-info btn-xs" value="Simpan">
														</div>
													</form>
												</div>
											</div>
										</div>
									<?php } ?>
								</tbody>
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
					<h5 class="modal-title">Tambah Dokumen</h5>
				</div>
				<div class="modal-body">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama_dokumen">Nama Dokumen</label>
							<input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control" placeholder="Nama Dokumen" required autofocus autocomplete="off">
						</div>
						<div class="form-group">
							<label for="dokumen">File</label>
							<input type="file" name="dokumen" id="dokumen" class="form-control" required >
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
						<input name="add_dokumen" type="submit" class="btn btn-info btn-xs" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
