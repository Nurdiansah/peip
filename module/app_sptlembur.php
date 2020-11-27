
<?php
	if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
		header("location:../login.php");
	};
	include '../connect.php';

	$query = mysqli_query($conn, "SELECT * FROM spt_lembur
									INNER JOIN ms_status
										ON status = kode_status
                                    WHERE status = 'RL'
									ORDER BY id_sptlembur DESC");

	$no=1;

	$queryLokasiBerangkat = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");
	$queryLokasiTujuan = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");

	if(isset($_POST['approve'])){
		$id_sptlembur = $_POST['id_sptlembur'];

		$appData = mysqli_query($conn,"UPDATE spt_lembur SET status='AP'
										WHERE id_sptlembur='$id_sptlembur'");
		if ($appData){
		echo " <div class='alert alert-success'>
			Berhasil Approve data.
		  </div>
		<meta http-equiv='refresh' content='1; url=index.php?p=app_sptlembur'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal Approve data.
		  </div>
		 <meta http-equiv='refresh' content='1; url=index.php?p=app_sptlembur'/> ";
		}
    }

    if(isset($_POST['reject'])){
        $id_sptlembur = $_POST['id_sptlembur'];
        $alasan = $_POST['alasan'];

		$rjData = mysqli_query($conn,"UPDATE spt_lembur SET status='RJ', keterangan_reject='$alasan'
										WHERE id_sptlembur='$id_sptlembur'");
		if ($rjData){
		echo " <div class='alert alert-success'>
			Berhasil Reject data.
		  </div>
		<meta http-equiv='refresh' content='1; url=index.php?p=app_sptlembur'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal Reject data.
		  </div>
		 <meta http-equiv='refresh' content='1; url=index.php?p=app_sptlembur'/> ";
		}
	}
?>
<section>

	<div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
						<h4>Approval SPT & Lembur</h4>
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
										<td style="text-align: center; width: 13%;">
											<a href="index.php?p=dtl_sptlembur&id=<?= base64_encode($data['id_sptlembur']); ?>&pg=<?= base64_encode("app_sptlembur"); ?>" title="Detail" class="btn btn-info btn-xs"><i class="fa fa-search"></i></a>
											<button title="Setuju" class="btn btn-success btn-xs" data-toggle="modal" data-target="#app-<?= $data['id_sptlembur']; ?>"><i class="fa fa-check"></i></button>
											<button title="Setuju" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#rj-<?= $data['id_sptlembur']; ?>"><i class="fa fa-times"></i></button>
											<!-- <a href="#?id=<?= base64_encode($data['id_sptlembur']); ?>" onclick="javascript: return confirm('Yakin SPT & Lemburan <?= $data['nama']; ?> dihapus?')"><button name="hapus" title="Tolak" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a> -->
										</td>
                                    </tr>
                                    <div class="modal fade" id="app-<?= $data['id_sptlembur']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="POST">
                                                    <input type="hidden" name="id_sptlembur" value="<?= $data['id_sptlembur']; ?>">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Approval SPT & Lembur</h5>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        Approve SPT & Lembur <strong><?= $data['nama']; ?></strong>. Lama tugas <strong><?= $data['lama_tugas']; ?></strong>?
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-success btn-xs" name="approve">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="rj-<?= $data['id_sptlembur']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="POST">
                                                    <input type="hidden" name="id_sptlembur" value="<?= $data['id_sptlembur']; ?>">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Reject SPT & Lembur</h5>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            Reject SPT & Lembur <strong><?= $data['nama']; ?></strong>. Lama tugas <strong><?= $data['lama_tugas']; ?></strong>?
                                                        </div>
                                                        <div class="form-group">
                                                            <!-- <label for="alasan" class="control-label">Alasan Reject</label> -->
                                                            <textarea name="alasan" id="alasan" class="form-control" placeholder="Keterangan Reject.." required autofocus autocomplete="off"></textarea>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger btn-xs" name="reject">Simpan</button>
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
