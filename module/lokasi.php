
<?php
	if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
		header("location:../login.php");
	};
	include '../connect.php';

	$queryDokumen = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");
	$no=1;


	if(isset($_POST['add_lokasi'])){
		$kode_lokasi = $_POST['kode_lokasi'];
		$nama_lokasi = $_POST['nama_lokasi'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];

		$tambahData = mysqli_query($conn, "INSERT INTO lokasi (kd_lokasi, nm_lokasi, alamat, telepon) values
											('$kode_lokasi', '$nama_lokasi', '$alamat', '$telepon')");
		if ($tambahData){
		echo " <div class='alert alert-success'>
			Berhasil menambahkan data baru.
		  </div>
		<meta http-equiv='refresh' content='1; url=index.php?p=lokasi'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal menambahkan data baru.
		  </div>
		 <meta http-equiv='refresh' content='1; url=index.php?p=lokasi'/> ";
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
						<h4>Lokasi</h4>
						<button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs">Tambah Data</button>
                    </div>
					<hr>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive">
                            <table id="table-dtNormal" class="table table-bordered table-hover  display nowrap" align="center">
                                <thead class="thead-dark">
                                    <tr style="text-align: center;">
                                        <th>No</th>
                                        <th>Kode Lokasi</th>
                                        <th>Nama Lokasi</th>
										<th width="100px">Alamat</th>
                                        <th>No. Telp</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
								<tbody>
									<?php
										while ($data = mysqli_fetch_assoc($queryDokumen)){
									?>
										<tr>
											<td style="text-align: center; width: 5%;"><?= $no++; ?></td>
											<td><?= $data['kd_lokasi']; ?></td>
											<td><?= $data['nm_lokasi']; ?></td>
											<td width="100px"><?= $data['alamat']; ?></td>
											<td><?= $data['telepon']; ?></td>
											<td style="text-align: center; width: 12%;">
												<button title="Rubah" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ubah_lokasi-<?= $data['kd_lokasi']; ?>"><i class="fa fa-pencil-square-o"></i></button>
												<a href="#?id=<?= base64_encode($data['kd_lokasi']); ?>&file=<?= base64_encode($data['file']); ?>" onclick="javascript: return confirm('Yakin dokumen <?= $data['nm_dokumen']; ?> dihapus?')"><button name="hapus" title="Hapus" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
											</td>
										</tr>

										<!-- EDIT MODAL DATA -->
										<div id="ubah_lokasi-<?= $data['kd_lokasi']; ?>" class="modal fade">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Rubah Lokasi <strong><?= $data['nm_lokasi']; ?></strong></h5>
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
					<h5 class="modal-title">Tambah Lokasi</h5>
				</div>
				<div class="modal-body">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="kode_lokasi">Kode Lokasi</label>
							<input type="text" name="kode_lokasi" id="kode_lokasi" class="form-control" placeholder="Kode Lokasi" required autofocus autocomplete="off">
						</div>
						<div class="form-group">
							<label for="nama_lokasi">Nama Lokasi</label>
							<input type="text" name="nama_lokasi" id="nama_lokasi" class="form-control" placeholder="Nama Lokasi" required autocomplete="off">
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea name="alamat" class="form-control" required autocomplete="off"></textarea>
                        </div>
						<div class="form-group">
							<label for="telepon">Telepon</label>
							<input type="number" name="telepon" id="telepon" class="form-control" placeholder="08xxx" required autocomplete="off">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
						<input name="add_lokasi" type="submit" class="btn btn-info btn-xs" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
