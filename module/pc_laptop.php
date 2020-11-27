
<?php
	if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
		header("location:../login.php");
	};
	include '../connect.php';

	$query = mysqli_query($conn, "SELECT * FROM pc_laptop ORDER BY user ASC");

	$no=1;

?>

<section>
	<div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
						<h4>Komputer & Laptop</h4>
                        <fieldset class="form-control col-sm-4">
                            <a href="../report/pdf_pclaptop.php" target="_blank" class="btn btn-primary btn-xs mr-2"><i class="fa fa-file-pdf-o"> Cetak PDF</i></a>
                            <a href="../report/excel_pclaptop.php" target="_blank" class="btn btn-primary btn-xs mr-2"><i class="fa fa-file-excel-o"> Cetak Excel</i></a>
						    <!-- <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs"><i class="fa fa-files-o"> Tambah Data</i></button> -->
							<a href="index.php?p=add_pclaptop" class="btn btn-success btn-xs"><i class="fa fa-files-o"> Tambah Data</i></a>
                        </fieldset>
                    </div>
					<hr>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive">
                            <table id="table-dtScrollX" class="table table-bordered table-hover display nowrap">
                                <thead class="thead-dark">
                                    <tr style="text-align: center;">
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>Lokasi</th>
                                        <th>Perangkat</th>
                                        <th>Monitor</th>
                                        <th>Merk</th>
                                        <th>Spesifikasi</th>
                                        <th>Unit Bisnis</th>
                                        <th>Antivirus</th>
                                        <th>Expired Antivirus</th>
                                        <th>Anydesk</th>
                                        <th>Pass Anydesk</th>
                                        <th>Tanda Terima</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <?php
                                    while ($data = mysqli_fetch_assoc($query)){
                                ?>
                                    <tr>
                                        <td style="text-align: center; width: 4%;"><?= $no++; ?></td>
                                        <td><?= $data['id_perangkat']; ?></td>
                                        <td><?= $data['user']; ?></td>
										<td><?= $data['email']; ?></td>
                                        <td><?= $data['lokasi']; ?></td>
                                        <td><?= $data['jenis_perangkat']; ?></td>
                                        <td><?= $data['spesifikasi_monitor'] ?></td>
                                        <td><?= $data['merk']; ?></td>
                                        <td><?= $data['spesifikasi']; ?></td>
                                        <td><?= $data['unit_bisnis']; ?></td>
                                        <td><?= $data['antivirus']; ?></td>
                                        <td><?= $data['expired_antivirus']; ?></td>
                                        <td><?= $data['anydesk']; ?></td>
                                        <td><?= $data['password_anydesk']; ?></td>
                                        <?php if($data['tanda_terima'] == '' || $data['tanda_terima'] == NULL){ ?>
                                            <td style="text-align: center;"><input type="checkbox" disabled></td>
                                        <?php }else{ ?>
                                            <td style="text-align: center;"><input type="checkbox" checked="checked" disabled></td>
                                        <?php } ?>
										<td style="text-align: center; width: 13%;">
                                            <a href="index.php?p=dtl_pclaptop&id=<?= base64_encode($data['id_perangkat']); ?>" title="Detail" class="btn btn-info btn-xs"><i class="fa fa-search"></i></a>
											<a href="index.php?p=edit_pclaptop&id=<?= base64_encode($data['id_perangkat']); ?>" title="Rubah" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o"></i></a>
											<a href="del_pclaptop.php?id=<?= base64_encode($data['id_perangkat']); ?>&file=<?= base64_encode($data['tanda_terima']); ?>" onclick="javascript: return confirm('Yakin data <?= $data['user']; ?> dihapus?')"><button name="hapus" title="Hapus" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
										</td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>

