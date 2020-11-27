
<?php
	if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
		header("location:../login.php");
	};
	include '../connect.php';

	$query = mysqli_query($conn, "SELECT * FROM spt_lembur
									INNER JOIN ms_status
										ON status = kode_status
									ORDER BY id_sptlembur DESC");

	$no=1;

	$queryLokasiBerangkat = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");
	$queryLokasiTujuan = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");

	if(isset($_POST['add_sptlembur'])){
		$nama = $_POST['nama'];
		$jabatan = $_POST['jabatan'];
		$ditugaskan_oleh = $_POST['ditugaskan_oleh'];
		$nama_tugas = $_POST['nama_tugas'];
		$kendaraan = $_POST['kendaraan'];
		$tempat_berangkat = $_POST['tempat_berangkat'];
		$tempat_transit = $_POST['tempat_transit'];
		$tempat_tujuan = $_POST['tempat_tujuan'];
		$tgl_berangkat = $_POST['tgl_berangkat'];
		$jam_berangkat = $_POST['jam_berangkat'];
		$tgl_kembali = $_POST['tgl_kembali'];
		$jam_kembali = $_POST['jam_kembali'];
		$keterangan = $_POST['keterangan'];

		$waktu_awal  = date_create($tgl_berangkat.' '.$jam_berangkat);
		$waktu_akhir = date_create($tgl_kembali.' '.$jam_kembali);
		$cek_waktu  = date_diff($waktu_awal, $waktu_akhir);

		if($tgl_berangkat > $tgl_kembali){
			echo "<script>window.alert('Tanggal kembali harus lebih besar dari tanggal berangkat !');</script>";
		}elseif($tgl_berangkat == $tgl_kembali && $jam_berangkat > $jam_kembali){
			echo "<script>window.alert('Jam kembali harus lebih besar dari jam berangkat !');</script>";
		}else{
			if($cek_waktu->d == 0){
				if ($cek_waktu->h >= 1 ) {
					$terbilang_waktu = $cek_waktu->h . ' Jam ' . $cek_waktu->i . ' Menit ';
				} else {
					$terbilang_waktu = $cek_waktu->i . ' Menit ';
				}

			} else {
				$terbilang_waktu = $cek_waktu->d . ' Hari ' . $cek_waktu->h . ' Jam ' . $cek_waktu->i . ' Menit ';
			}

			$tambahData = mysqli_query($conn,"INSERT INTO spt_lembur (nama, jabatan, perintah_oleh, nama_tugas, kendaraan, tempat_berangkat, tempat_transit, tempat_tujuan, tgl_berangkat, jam_berangkat, tgl_kembali, jam_kembali, lama_tugas, keterangan_lain, status) values
												('$nama','$jabatan','$ditugaskan_oleh', '$nama_tugas', '$kendaraan', '$tempat_berangkat', '$tempat_transit', '$tempat_tujuan', '$tgl_berangkat', '$jam_berangkat', '$tgl_kembali', '$jam_kembali', '$terbilang_waktu', '$keterangan', 'NW')");
			if ($tambahData){
			echo " <div class='alert alert-success'>
				Berhasil menambahkan data baru.
			</div>
			<meta http-equiv='refresh' content='1; url=index.php?p=spt_lembur'/>  ";
			} else { echo "<div class='alert alert-warning'>
				Gagal menambahkan data baru.
			</div>
			<meta http-equiv='refresh' content='1; url=index.php?p=spt_lembur'/> ";
			}
		}
	}

	if(isset($_POST['edit_sptlembur'])){
		$id_sptlembur = $_POST['id_sptlembur'];
		$nama = $_POST['nama'];
		$jabatan = $_POST['jabatan'];
		$ditugaskan_oleh = $_POST['ditugaskan_oleh'];
		$nama_tugas = $_POST['nama_tugas'];
		$kendaraan = $_POST['kendaraan'];
		$tempat_berangkat = $_POST['tempat_berangkat'];
		$tempat_transit = $_POST['tempat_transit'];
		$tempat_tujuan = $_POST['tempat_tujuan'];
		$tgl_berangkat = $_POST['tgl_berangkat'];
		$jam_berangkat = $_POST['jam_berangkat'];
		$tgl_kembali = $_POST['tgl_kembali'];
		$jam_kembali = $_POST['jam_kembali'];
		$keterangan = $_POST['keterangan'];

		$waktu_awal  = date_create($tgl_berangkat.' '.$jam_berangkat);
		$waktu_akhir = date_create($tgl_kembali.' '.$jam_kembali);
		$cek_waktu  = date_diff($waktu_awal, $waktu_akhir);

		if($cek_waktu->d == 0){
			if ($cek_waktu->h >= 1 ) {
				$terbilang_waktu = $cek_waktu->h . ' Jam ' . $cek_waktu->i . ' Menit ';
			} else {
				$terbilang_waktu = $cek_waktu->i . ' Menit ';
			}

		} else {
			$terbilang_waktu = $cek_waktu->d . ' Hari ' . $cek_waktu->h . ' Jam ' . $cek_waktu->i . ' Menit ';
		}

		$rubahData = mysqli_query($conn,"UPDATE spt_lembur SET nama='$nama', jabatan='$jabatan', perintah_oleh='$ditugaskan_oleh', nama_tugas='$nama_tugas', kendaraan='$kendaraan', tempat_berangkat='$tempat_berangkat', tempat_transit='$tempat_transit', tempat_tujuan='$tempat_tujuan', tgl_berangkat='$tgl_berangkat', jam_berangkat='$jam_berangkat', tgl_kembali='$tgl_kembali', jam_kembali='$jam_kembali', lama_tugas='$terbilang_waktu', keterangan_lain='$keterangan', status='NW', keterangan_reject=NULL
											WHERE id_sptlembur='$id_sptlembur'");
		if ($rubahData){
		echo " <div class='alert alert-success'>
			Berhasil merubah data.
		  </div>
		<meta http-equiv='refresh' content='1; url=index.php?p=spt_lembur'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal merubah data.
		  </div>
		 <meta http-equiv='refresh' content='1; url=index.php?p=spt_lembur'/> ";
		}
	}
?>
<section>

	<div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
						<h4>SPT & Lembur</h4>
                        <!-- <fieldset class="form-control col-sm-4"> -->
                            <!-- <a href="../report/pdf_pclaptop.php" target="_blank" class="btn btn-primary btn-xs mr-2"><i class="fa fa-file-pdf-o"> Cetak PDF</i></a>
                            <a href="../report/excel_pclaptop.php" target="_blank" class="btn btn-primary btn-xs mr-2"><i class="fa fa-file-excel-o"> Cetak Excel</i></a>
							<a href="index.php?p=add_pclaptop" class="btn btn-success btn-xs"><i class="fa fa-files-o"> Tambah Data</i></a> -->
						    <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs"><i class="fa fa-files-o"> Tambah Data</i></button>
                        <!-- </fieldset> -->
                    </div>
					<hr>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover display nowrap " id="table-dtNormal">
                                <thead class="thead-dark">
                                    <tr style="text-align: center;">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Nama Tugas</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Lama Tugas</th>
										<th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <?php
                                    while ($data = mysqli_fetch_assoc($query)){
                                ?>
                                    <tr>
                                        <td style="text-align: center; width: 4%;"><?= $no++; ?></td>
                                        <td><?= $data['nama']; ?></td>
                                        <td><?= $data['jabatan']; ?></td>
										<td><?= $data['nama_tugas']; ?></td>
                                        <td style="text-align: ; width: 160px;"><?= $data['tgl_berangkat']; ?> <?= $data['jam_berangkat']; ?></td>
                                        <td style="text-align: ; width: 160px;"><?= $data['tgl_kembali']; ?> <?= $data['jam_kembali']; ?></td>
                                        <td><?= $data['lama_tugas']; ?></td>
										<td style="text-align: center; width: 1%;"><span class="badge badge-<?= $data['warna']; ?>" title="<?= $data['keterangan']; ?>"><?= $data['nama_status']; ?></span></td>
										<?php if($data['nama'] != $_SESSION['nm']){ ?>
											<td style="text-align: center; width: 13%;"><a href="index.php?p=dtl_sptlembur&id=<?= base64_encode($data['id_sptlembur']); ?>&pg=<?= base64_encode("spt_lembur"); ?>" title="Detail" class="btn btn-info btn-xs"><i class="fa fa-search"></i></a></td>
										<?php }else{ ?>
											<?php if($data['status'] == 'NW' || $data['status'] == 'RJ'){ ?>
												<td style="text-align: center; width: 13%;">
													<a href="index.php?p=dtl_sptlembur&id=<?= base64_encode($data['id_sptlembur']); ?>&pg=<?= base64_encode("spt_lembur"); ?>" title="Detail" class="btn btn-info btn-xs"><i class="fa fa-search"></i></a>
													<button title="Rubah" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ubah-<?= $data['id_sptlembur']; ?>"><i class="fa fa-pencil-square-o"></i></button>
													<a href="del_sptlembur.php?id=<?= base64_encode($data['id_sptlembur']); ?>" onclick="javascript: return confirm('Yakin SPT & Lemburan <?= $data['nama']; ?> dihapus?')"><button name="hapus" title="Hapus" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
												</td>
											<?php }else{ ?>
												<td style="text-align: center; width: 13%;">
													<a href="index.php?p=dtl_sptlembur&id=<?= base64_encode($data['id_sptlembur']); ?>&pg=<?= base64_encode("spt_lembur"); ?>" title="Detail" class="btn btn-info btn-xs"><i class="fa fa-search"></i></a>
													<button title="Rubah" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#" disabled><i class="fa fa-pencil-square-o"></i></button>
													<a href="del_sptlembur.php?id=<?= base64_encode($data['id_sptlembur']); ?>" onclick="javascript: return confirm('Yakin SPT & Lemburan <?= $data['nama']; ?> dihapus?')"><button name="hapus" title="Hapus" class="btn btn-danger btn-xs" disabled><i class="fa fa-trash"></i></button></a>
												</td>
											<?php }
										} ?>
                                    </tr>

									<!-- MODAL EDIT DATA -->
									<div id="ubah-<?= $data['id_sptlembur']; ?>" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Rubah SPT & Lembur</h5>
												</div>
												<div class="modal-body">
													<form method="POST">
														<input type="hidden" name="id_sptlembur" value="<?= $data['id_sptlembur']; ?>">
														<div class="form-group">
															<label for="nama" class="">Nama</label>
															<input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama']; ?>" readonly>
														</div>
														<div class="form-group">
															<label for="jabatan">Jabatan</label>
															<input type="text" name="jabatan" id="jabatan" class="form-control" value="<?= $data['jabatan']; ?>" readonly>
														</div>
														<div class="form-group">
															<label for="ditugaskan_oleh">Ditugaskan Oleh</label>
															<input type="text" name="ditugaskan_oleh" id="ditugaskan_oleh" class="form-control" value="<?= $data['perintah_oleh']; ?>" placeholder="Atasan / Leader / Head Office" autocomplete="off">
														</div>
														<div class="form-group">
															<label for="nama_tugas">Nama Tugas</label>
															<textarea name="nama_tugas" id="nama_tugas" class="form-control" placeholder="Installasi CCTV" autocomplete="off"><?= $data['nama_tugas']; ?></textarea>
														</div>
														<div class="form-group">
															<label for="kendaraan">Kendaraan</label>
															<select name="kendaraan" id="kendaraan" class="custom-select form-control" >
																<option value="Kendaraan Umum" <?php if($data['kendaraan'] == 'Kendaraan Umum') {echo "selected=\"selected\"";} ?>>Kendaraan Umum</option>
																<option value="Mobil" <?php if($data['kendaraan'] == 'Mobil') {echo "selected=\"selected\"";} ?>>Mobil</option>
																<option value="Motor" <?php if($data['kendaraan'] == 'Motor') {echo "selected=\"selected\"";} ?>>Motor</option>
																<option value="Shuttle" <?php if($data['kendaraan'] == 'Shuttle') {echo "selected=\"selected\"";} ?>>Shuttle</option>
															</select>
														</div>
														<div class="form-group">
															<label for="tempat_berangkat">Tempat Berangkat</label>
															<select name="tempat_berangkat" id="tempat_berangkat" class="custom-select form-control" >
																<option value="Rumah">Rumah</option>
																<?php $editLokasiBerangkat = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");
																while($editBerangkat=mysqli_fetch_assoc($editLokasiBerangkat)){ ?>
																	<option value="<?= $editBerangkat['nm_lokasi']; ?>" <?php if($data['tempat_berangkat'] == $editBerangkat['nm_lokasi']) {echo "selected=\"selected\"";} ?>><?= $editBerangkat['nm_lokasi']; ?></option>
																<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label for="tempat_transit">Tempat Transit</label>
															<input type="text" name="tempat_transit" id="tempat_transit" class="form-control" value="<?= $data['tempat_transit']; ?>" autocomplete="off">
														</div>
														<div class="form-group">
															<label for="tempat_tujuan">Tempat Tujuan</label>
															<select name="tempat_tujuan" id="tempat_tujuan" class="custom-select form-control" >
																<?php $editLokasiTujuan = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");
																while($editTujuan=mysqli_fetch_assoc($editLokasiTujuan)){ ?>
																	<option value="<?= $editTujuan['nm_lokasi']; ?>" <?php if($data['tempat_tujuan'] == $editTujuan['nm_lokasi']){echo "selected=\"selected\"";} ?>><?= $editTujuan['nm_lokasi']; ?></option>
																<?php } ?>
															</select>
														</div>
														<fieldset class="form-control mb-3"><legend class="col-sm-3 form-control">Waktu Tugas</legend>
															<div class="form-inline mb-3">
																<label for="tgl_berangkat" class="col-sm-offset-1 col-sm-4 control-label">Tgl/Jam Berangkat</label>
																<input type="date" name="tgl_berangkat" id="tgl_berangkat" class="form-control col-sm-4 mr-2" required value="<?= $data['tgl_berangkat']; ?>">
																<input type="time" name="jam_berangkat" id="jam_berangkat" class="form-control col-sm-3" required value="<?= $data['jam_berangkat']; ?>">
															</div>
															<div class="form-inline ">
																<label for="tgl_kembali" class="col-sm-offset-1 col-sm-4 control-label">Tgl/Jam Kembali</label>
																<input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control col-sm-4 mr-2" required value="<?= $data['tgl_kembali']; ?>">
																<input type="time" name="jam_kembali" id="jam_kembali" class="form-control col-sm-3" required value="<?= $data['jam_kembali']; ?>">
															</div>
														</fieldset>
														<div class="form-group">
															<label for="keterangan">Keterangan</label>
															<textarea name="keterangan" id="keterangan" class="form-control" autocomplete="off"> <?= $data['keterangan_lain']; ?></textarea>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
														<input name="edit_sptlembur" type="submit" class="btn btn-info btn-xs" value="Simpan">
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
					<h5 class="modal-title">Tambah SPT & Lembur</h5>
				</div>
				<div class="modal-body">
					<form method="POST">
						<div class="form-group">
							<label for="nama" class="">Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" value="<?= $_SESSION['nm']; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<input type="text" name="jabatan" id="jabatan" class="form-control" value="<?= $_SESSION['jab']; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="ditugaskan_oleh">Ditugaskan Oleh</label>
							<input type="text" name="ditugaskan_oleh" id="ditugaskan_oleh" class="form-control" value="Abdul Rozak" placeholder="Atasan / Leader / Head Office" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="nama_tugas">Nama Tugas</label>
							<textarea name="nama_tugas" id="nama_tugas" class="form-control" placeholder="Installasi CCTV" autocomplete="off"></textarea>
						</div>
						<div class="form-group">
							<label for="kendaraan">Kendaraan</label>
							<select name="kendaraan" id="kendaraan" class="custom-select form-control" >
								<option value="Kendaraan Umum">Kendaraan Umum</option>
								<option value="Mobil">Mobil</option>
								<option value="Motor">Motor</option>
								<option value="Shuttle">Shuttle</option>
							</select>
						</div>
						<div class="form-group">
							<label for="tempat_berangkat">Tempat Berangkat</label>
							<select name="tempat_berangkat" id="tempat_berangkat" class="custom-select form-control" >
								<option value="Rumah">Rumah</option>
								<?php while($lokasiBerangkat=mysqli_fetch_assoc($queryLokasiBerangkat)){ ?>
                                    <option value="<?= $lokasiBerangkat['nm_lokasi']; ?>"><?= $lokasiBerangkat['nm_lokasi']; ?></option>
                                <?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="tempat_transit">Tempat Transit</label>
							<input type="text" name="tempat_transit" id="tempat_transit" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="tempat_tujuan">Tempat Tujuan</label>
							<select name="tempat_tujuan" id="tempat_tujuan" class="custom-select form-control" >
								<?php while($lokasiTujuan=mysqli_fetch_assoc($queryLokasiTujuan)){ ?>
                                    <option value="<?= $lokasiTujuan['nm_lokasi']; ?>"><?= $lokasiTujuan['nm_lokasi']; ?></option>
                                <?php } ?>
							</select>
						</div>
						<fieldset class="form-control mb-3"><legend class="col-sm-3 form-control">Waktu Tugas</legend>
							<div class="form-inline mb-3">
								<label for="tgl_berangkat" class="col-sm-offset-1 col-sm-4 control-label">Tgl/Jam Berangkat</label>
								<input type="date" name="tgl_berangkat" id="tgl_berangkat" class="form-control col-sm-4 mr-2" required>
								<input type="time" name="jam_berangkat" id="jam_berangkat" class="form-control col-sm-3" required>
							</div>
							<div class="form-inline ">
								<label for="tgl_kembali" class="col-sm-offset-1 col-sm-4 control-label">Tgl/Jam Kembali</label>
								<input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control col-sm-4 mr-2" required>
								<input type="time" name="jam_kembali" id="jam_kembali" class="form-control col-sm-3" required>
							</div>
						</fieldset>
						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<textarea name="keterangan" id="keterangan" class="form-control" autocomplete="off"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
						<input name="add_sptlembur" type="submit" class="btn btn-info btn-xs" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>

