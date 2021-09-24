
<?php
	if(empty($_SESSION['pengguna']) || $_SESSION['pengguna'] == '' || !isset($_SESSION['pengguna'])){
		header("location:../logout.php");
	};
	include "../connect.php";
	include "../function.php";

	if(isset($_GET['folder'])){
		$folder = base64_decode($_GET['folder']);

		$queryDokumen = mysqli_query($conn, "SELECT folder.*, id_dokumen, kd_folder, nm_dokumen, thn_dokumen,
													upload.nama as yg_upload, waktu_diupload,
													rubah.nama as yg_rubah, waktu_dirubah,
													replace(ifnull(expired, '-'), '0000-00-00', '-') as expired, file,
													ifnull(datediff(expired, now()), '-') as selisih
												FROM dokumen
												INNER JOIN ms_folder folder
													ON kd_folder = id_folder
												LEFT JOIN login upload
													ON upload.id = diupload_oleh
												LEFT JOIN login rubah
													ON rubah.id = dirubah_oleh
												WHERE kd_folder = '$folder'
												ORDER BY nm_dokumen ASC");
		$no=1;

		$queryFolder = mysqli_query($conn, "SELECT * FROM ms_folder WHERE id_folder = '$folder'");
        $dataFolder = mysqli_fetch_assoc($queryFolder);
	}
?>
<section>

	<div class="row mt-4 mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
						<h4 title="<?= $dataFolder['menu']; ?>"><?= $dataFolder['sub_menu']; ?></h4>
						<button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs"><i class="fa fa-files-o"> Tambah Data</i></button>
                    </div>
					<hr>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive">
                            <table id="table-dtNormal" class="table table-bordered table-hover  display nowrap" align="center">
                                <thead class="thead-dark">
                                    <tr style="text-align: center;">
                                        <th>No</th>
                                        <th>Nama Dokumen</th>
										<th>Tahun Dokumen</th>
                                        <th>Dibuat Oleh</th>
										<th>Waktu Dibuat</th>
                                        <th>Dirubah Oleh</th>
										<th>Waktu Dirubah</th>
										<th>Kadaluarsa Dokumen</th>
										<th>Selisih</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
								<tbody>
									<?php
										while ($data = mysqli_fetch_assoc($queryDokumen)){

										if($data['selisih'] >= "16" && $data['selisih'] <= "30"){
									?>
										<tr style="background-color: yellow;">
											<td style="text-align: center; width: 5%; background-color: yellow;"><?= $no++; ?></td>
											<td><?= $data['nm_dokumen']; ?></td>
											<td style="width: 7%;"><?= $data['thn_dokumen']; ?></td>
											<td><?= $data['yg_upload']; ?></td>
											<td><?= $data['waktu_diupload']; ?></td>
											<td><?= $data['yg_rubah']; ?></td>
											<td><?= $data['waktu_dirubah']; ?></td>
											<td><?= $data['expired']; ?></td>
											<td><?= $data['selisih']; ?> Hari</td>
											<td style="text-align: center; width: 10%;">
												<a href="../files/PEIP/<?= $data['folder']; ?>/<?= $data['sub_folder']; ?>/<?= $data['sub_subfolder']; ?>/<?= $data['sub_subsfolder']; ?>/<?= $data['file']; ?>" download title="Download : <?= $data['file']; ?>" class="btn btn-dark btn-xs"><i class="fa fa-download"></i></a>

												<div class="btn-group">
													<button class="btn btn-primary dropdown-toggle btn-xs" type="button" id="menu_kebawah" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fa fa-cogs"></i>
													</button>
													<div class="dropdown-menu" aria-labelledby="menu_kebawah">
														<a class="dropdown-item" href="index.php?p=dtl_dokumen&id=<?= base64_encode($data['id_dokumen']); ?>&folder=<?= base64_encode($data['kd_folder']); ?>">Lihat</a>
														<a class="dropdown-item" href="" data-toggle="modal" data-target="#ubah_dokumen-<?= $data['id_dokumen']; ?>">Rubah</a>
														<a class="dropdown-item" href="del_dokumen.php?id=<?= base64_encode($data['id_dokumen']); ?>&file=<?= base64_encode($data['file']); ?>&folder=<?= base64_encode($data['kd_folder']); ?>" onclick="javascript: return confirm('Yakin Dokumen <?= $data['nm_dokumen']; ?> dihapus?')">Hapus</a>
													</div>
												</div>
											</td>
										</tr>
									<?php }elseif($data['selisih'] <= "15" && $data['selisih'] != '-'){ ?>
										<tr style="background-color: red;">
											<td style="text-align: center; width: 5%; background-color: red;"><?= $no++; ?></td>
											<td><?= $data['nm_dokumen']; ?></td>
											<td style="width: 7%;"><?= $data['thn_dokumen']; ?></td>
											<td><?= $data['yg_upload']; ?></td>
											<td><?= $data['waktu_diupload']; ?></td>
											<td><?= $data['yg_rubah']; ?></td>
											<td><?= $data['waktu_dirubah']; ?></td>
											<td><?= $data['expired']; ?></td>
											<td><?= $data['selisih']; ?> Hari</td>
											<td style="text-align: center; width: 10%;">
												<a href="../files/PEIP/<?= $data['folder']; ?>/<?= $data['sub_folder']; ?>/<?= $data['sub_subfolder']; ?>/<?= $data['sub_subsfolder']; ?>/<?= $data['file']; ?>" download title="Download : <?= $data['file']; ?>" class="btn btn-dark btn-xs"><i class="fa fa-download"></i></a>

												<div class="btn-group">
													<button class="btn btn-primary dropdown-toggle btn-xs" type="button" id="menu_kebawah" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fa fa-cogs"></i>
													</button>
													<div class="dropdown-menu" aria-labelledby="menu_kebawah">
														<a class="dropdown-item" href="index.php?p=dtl_dokumen&id=<?= base64_encode($data['id_dokumen']); ?>&folder=<?= base64_encode($data['kd_folder']); ?>">Lihat</a>
														<a class="dropdown-item" href="" data-toggle="modal" data-target="#ubah_dokumen-<?= $data['id_dokumen']; ?>">Rubah</a>
														<a class="dropdown-item" href="del_dokumen.php?id=<?= base64_encode($data['id_dokumen']); ?>&file=<?= base64_encode($data['file']); ?>&folder=<?= base64_encode($data['kd_folder']); ?>" onclick="javascript: return confirm('Yakin Dokumen <?= $data['nm_dokumen']; ?> dihapus?')">Hapus</a>
													</div>
												</div>
											</td>
										</tr>
									<?php }else{ ?>
										<tr>
											<td style="text-align: center; width: 5%;"><?= $no++; ?></td>
											<td><?= $data['nm_dokumen']; ?></td>
											<td style="width: 7%;"><?= $data['thn_dokumen']; ?></td>
											<td><?= $data['yg_upload']; ?></td>
											<td><?= $data['waktu_diupload']; ?></td>
											<td><?= $data['yg_rubah']; ?></td>
											<td><?= $data['waktu_dirubah']; ?></td>
											<td><?= $data['expired']; ?></td>
											<td><?= $data['selisih']; ?> <?php if($data['selisih'] != '-'){ echo " Hari"; } ?></td>
											<td style="text-align: center; width: 10%;">
												<a href="../files/PEIP/<?= $data['folder']; ?>/<?= $data['sub_folder']; ?>/<?= $data['sub_subfolder']; ?>/<?= $data['sub_subsfolder']; ?>/<?= $data['file']; ?>" download title="Download : <?= $data['file']; ?>" class="btn btn-dark btn-xs"><i class="fa fa-download"></i></a>

												<div class="btn-group">
													<button class="btn btn-primary dropdown-toggle btn-xs" type="button" id="menu_kebawah" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fa fa-cogs"></i>
													</button>
													<div class="dropdown-menu" aria-labelledby="menu_kebawah">
														<a class="dropdown-item" href="index.php?p=dtl_dokumen&id=<?= base64_encode($data['id_dokumen']); ?>&folder=<?= base64_encode($data['kd_folder']); ?>">Lihat</a>
														<a class="dropdown-item" href="" data-toggle="modal" data-target="#ubah_dokumen-<?= $data['id_dokumen']; ?>">Rubah</a>
														<a class="dropdown-item" href="del_dokumen.php?id=<?= base64_encode($data['id_dokumen']); ?>&file=<?= base64_encode($data['file']); ?>&folder=<?= base64_encode($data['kd_folder']); ?>" onclick="javascript: return confirm('Yakin Dokumen <?= $data['nm_dokumen']; ?> dihapus?')">Hapus</a>
													</div>
												</div>
											</td>
										</tr>
									<?php } ?>

										<!-- EDIT MODAL DATA -->
										<div id="ubah_dokumen-<?= $data['id_dokumen']; ?>" class="modal fade">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Rubah Dokumen</h5>
													</div>
													<div class="modal-body">
														<form action="edit_dokumen.php" method="POST" enctype="multipart/form-data">
															<div class="form-group">
																<label for="nama_dokumen">Nama Dokumen</label>
																<input type="hidden" name="folder" value="<?= $folder; ?>">
																<input type="hidden" name="id_dokumen" value="<?= $data['id_dokumen']; ?>">
																<input type="hidden" name="dokumen_lama" value="<?= $data['file']; ?>">
																<input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control" placeholder="Nama Dokumen" value="<?= $data['nm_dokumen'] ?>" required autocomplete="off">
															</div>
															<div class="form-group">
																<label for="tahun_dokumen">Tahun Dokumen</label>
																<select name="tahun_dokumen" class="custom-select form-control" required>
																	<?php
																		$tahunSekarang = date('Y');
																		foreach (range(2018, $tahunSekarang) as $tahun) { ?>
																			<option value="<?= $tahun; ?>"<?php if ($data['thn_dokumen'] == $tahun) {echo "selected=\"selected\"";} ?>><?= $tahun; ?></option>
																	<?php
																		}
																	?>
																</select>
															</div>
															<div class="form-group">
																<label for="expired_dokumen">Kadaluarsa Dokumen</label>
																<input type="date" name="expired_dokumen" id="expired_dokumen" class="form-control" autocomplete="off" value="<?= $data['expired']; ?>">
															</div>
															<div class="form-group">
																<label for="dokumen">File</label>
																<input type="file" name="dokumen" id="dokumen" class="form-control">
																<label><i><b>*</b>Kosongkan jika file tidak diganti</i></label>
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
					<form action="add_dokumen.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama_dokumen">Nama Dokumen</label>
							<input type="hidden" name="folder" value="<?= $folder; ?>">
							<input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control" placeholder="Nama Dokumen" required autofocus autocomplete="off">
						</div>
						<div class="form-group">
							<label for="tahun_dokumen">Tahun Dokumen</label>
							<select name="tahun_dokumen" class="custom-select form-control" required>
                                <?php
                                    $tahunSekarang = date('Y');
                                    foreach (range(2018, $tahunSekarang) as $tahun) {
                                        echo "<option value=". $tahun .">". $tahun ."</option > ";
                                    }
                                ?>
                            </select>
						</div>
						<div class="form-group">
							<label for="expired_dokumen">Kadaluarsa Dokumen</label>
							<input type="date" name="expired_dokumen" id="expired_dokumen" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="dokumen">File</label>
							<input type="file" name="dokumen" id="dokumen" class="form-control" required>
							<label ><i><b style="color: red;">*</b>Pastikan nama file tidak sama dalam 1 menu</i></label>
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
