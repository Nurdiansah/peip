
<?php
    include "../connect.php";
    include "../function.php";

    if (isset($_POST['tampilkan']) || isset($_GET['bulan']) ){

        if (isset($_POST['bulan']) && isset($_POST['tahun']) && isset($_POST['pic'])){
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $pic = $_POST['pic'];
        } else if (isset($_GET['bulan']) && isset($_GET['tahun']) && isset($_GET['pic'])){
            $bulan = base64_decode($_GET['bulan']);
            $tahun = base64_decode($_GET['tahun']);
            $pic = base64_decode($_GET['pic']);
        }

        if ($bulan == 'all' && $tahun == 'all' && $pic == 'all'){
            $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                            LEFT JOIN login
                                                ON pic = id
                                            ORDER BY tanggal ASC");
        }else if($bulan != 'all' && $tahun != 'all' && $pic != 'all'){
            $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                            LEFT JOIN login
                                                ON pic = id
                                            WHERE YEAR(tanggal) = '$tahun'
                                            AND MONTH(tanggal) = '$bulan'
                                            AND pic = '$pic'
                                            ORDER BY tanggal asc");
        }else if($bulan != 'all' && $tahun == 'all' && $pic == 'all'){
            $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                            LEFT JOIN login
                                                ON pic = id
                                            WHERE MONTH(tanggal) = '$bulan'
                                            ORDER BY tanggal asc");
        }else if($bulan == 'all' && $tahun != 'all' && $pic == 'all'){
            $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                            LEFT JOIN login
                                                ON pic = id
                                            WHERE YEAR(tanggal) = '$tahun'
                                            ORDER BY tanggal asc");
        }else if($bulan == 'all' && $tahun == 'all' && $pic != 'all'){
            $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                            LEFT JOIN login
                                                ON pic = id
                                            WHERE pic = '$pic'
                                            ORDER BY tanggal asc");
        }else if($bulan != 'all' && $tahun != 'all' && $pic == 'all'){
            $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                            LEFT JOIN login
                                                ON pic = id
                                            WHERE MONTH(tanggal) = '$bulan'
                                            AND YEAR(tanggal) = '$tahun'
                                            ORDER BY tanggal asc");
        }else if($bulan != 'all' && $tahun == 'all' && $pic != 'all'){
            $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                            LEFT JOIN login
                                                ON pic = id
                                            WHERE MONTH(tanggal) = '$bulan'
                                            AND pic = '$pic'
                                            ORDER BY tanggal asc");
        }else if($bulan == 'all' && $tahun != 'all' && $pic != 'all'){
            $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                            LEFT JOIN login
                                                ON pic = id
                                            WHERE YEAR(tanggal) = '$tahun'
                                            AND pic = '$pic'
                                            ORDER BY tanggal asc");
        }
    }
    $no=1;

    $queryLokasi = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");

    $queryPIC = mysqli_query($conn, "SELECT * FROM login WHERE user_aktif = '1' ORDER BY nama ASC");

?>

<section>
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
						<h4>Laporan Harian IT</h4>
                        <fieldset class="form-control col-sm-3">
                            <?php if(!isset($bulan) || !isset($tahun) || !isset($pic)){ ?>
                                <a href="#" class="btn btn-primary btn-xs mr-2" onclick="alert('Tampilkan data terlebih dahulu sebelum Cetak PDF!')"><i class="fa fa-file-pdf-o"> Cetak PDF</i></a>
                                <a href="index.php?p=add_laporanit" class="btn btn-success btn-xs"><i class="fa fa-files-o"> Tambah Data</i></a>
                            <?php }else{ ?>
                                <a href="../report/cetak_laporanit.php?bulan=<?= base64_encode($bulan) ?>&tahun=<?= base64_encode($tahun) ?>&pic=<?= base64_encode($pic) ?>" target="_blank" class="btn btn-primary btn-xs mr-2"><i class="fa fa-file-pdf-o"> Cetak PDF</i></a>
                                <a href="index.php?p=add_laporanit&bulan=<?= base64_encode($bulan) ?>&tahun=<?= base64_encode($tahun) ?>&pic=<?= base64_encode($pic) ?>" class="btn btn-success btn-xs"><i class="fa fa-files-o"> Tambah Data</i></a>
                            <?php } ?>
                        </fieldset>
                    </div>
                    <hr>
                        <fieldset class="form-control col-sm-6">
                            <form action="" method="POST">
                                <select name="bulan" class="custom-select col-sm-2 form-control mr-2">
                                    <option value="all">Semua Bulan</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                                <select name="tahun" class="custom-select col-sm-2 form-control mr-2">
                                    <option value="all">Semua Tahun</option>
                                    <?php
                                        $currentYear = date('Y');
                                        foreach (range(2018, $currentYear) as $value) {
                                            echo "<option value=". $value .">". $value ."</option > ";
                                        }
                                    ?>
                                </select>
                                <select name="pic" class="custom-select col-sm-3 form-control mr-2">
                                    <option value="all">Semua PIC</option>
                                    <?php while($rowPIC=mysqli_fetch_assoc($queryPIC)){ ?>
                                        <option value="<?= $rowPIC['id']; ?>"><?= $rowPIC['nama']; ?></option>
                                    <?php } ?>
                                </select>
                                <input type="submit" value="Tampilkan Data" name="tampilkan" class="btn btn-primary btn-xs">
                                <!-- <a href="" class="btn btn-primary btn-xs">Tampilkan Data</a> -->
                            </form>
                        </fieldset>
                        <div class="market-status-table mt-4">
                            <div class="table-responsive">
								<table class="table table-bordered table-hover  display nowrap" id="table-dtScrollX">
                                    <thead class="thead-dark">
                                        <tr style="text-align: center;">
                                            <th style="width: 10px;">No</th>
                                            <th>Tanggal</th>
                                            <th>PIC</th>
                                            <th>Lokasi</th>
                                            <th>User</th>
                                            <th>Request By</th>
                                            <th style="width: 10%;">Permasalahan</th>
                                            <th style="width: 10%;">Perbaikan</th>
                                            <th>Sparepart</th>
                                            <th>Harga Sparepart</th>
                                            <th>Jenis</th>
                                            <th>Keterangan</th>
                                            <th>Foto</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_POST['tampilkan']) || isset($_GET['bulan']) ){
                                            while($laporan=mysqli_fetch_assoc($query)){
                                                $namahari = date("l", strtotime($laporan['tanggal']));
                                                if ($namahari == "Sunday") $namahari = "Minggu";
                                                else if ($namahari == "Monday") $namahari = "Senin";
                                                else if ($namahari == "Tuesday") $namahari = "Selasa";
                                                else if ($namahari == "Wednesday") $namahari = "Rabu";
                                                else if ($namahari == "Thursday") $namahari = "Kamis";
                                                else if ($namahari == "Friday") $namahari = "Jumat";
                                                else if ($namahari == "Saturday") $namahari = "Sabtu";
                                        ?>
                                            <tr>
                                                <td style="text-align: center; width: 4%;"><?= $no++; ?></td>
                                                <td style="text-align: center; width: 10%;"><?= $namahari.', '.date('d', strtotime($laporan['tanggal'])).' '.($bln_tgl[date('m', strtotime($laporan['tanggal']))]).' '.date('Y', strtotime($laporan['tanggal'])); ?></td>
                                                <td><?= $laporan['nama']; ?></td>
                                                <td><?= $laporan['lokasi']; ?></td>
                                                <td><?= $laporan['user']; ?></td>
                                                <td><?= $laporan['direct_request']; ?></td>
                                                <td style="width: 10%;"><?= $laporan['permasalahan']; ?></td>
                                                <td style="width: 10%;"><?= $laporan['perbaikan']; ?></td>
                                                <td><?= $laporan['sparepart']; ?></td>
                                                <td><?= rupiah($laporan['harga_sparepart']); ?></td>
                                                <td><?= $laporan['jenis']; ?></td>
                                                <td><?= $laporan['keterangan']; ?></td>
                                                <?php if($laporan['file'] == NULL || $laporan['file'] == ''){ ?>
                                                    <td>-</td>
                                                <?php }else{ ?>
                                                    <td style="text-align: center; width: 7%;"><a href="../files/Laporan Harian IT/<?= $laporan['file']; ?>" download><img height="50" width="50" src="../files/Laporan Harian IT/<?= $laporan['file']; ?>" title="Download"></a></td>
                                                <?php } ?>
                                                <td style="text-align: center; width: 13%;">
                                                    <a href="index.php?p=dtl_laporanit&id=<?= base64_encode($laporan['id_laporan']); ?>&bulan=<?= base64_encode($bulan) ?>&tahun=<?= base64_encode($tahun) ?>&pic=<?= base64_encode($pic) ?>" title="Detail" class="btn btn-info btn-sm btn-xs"><i class="fa fa-search"></i></a>
                                                    <a href="index.php?p=edit_laporanit&id=<?= base64_encode($laporan['id_laporan']); ?>&bulan=<?= base64_encode($bulan) ?>&tahun=<?= base64_encode($tahun) ?>&pic=<?= base64_encode($pic) ?>"title="Rubah" class="btn btn-warning btn-sm btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                                                    <!-- <button title="Rubah" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ubah_user"><i class="fa fa-pencil-square-o"><a href="#ubah_user?id_user=<?= $data['id']; ?>"></a></i></button> -->
                                                    <a href="del_laporanit.php?id=<?= base64_encode($laporan['id_laporan']); ?>&file=<?= base64_encode($laporan['file']); ?>&bulan=<?= base64_encode($bulan) ?>&tahun=<?= base64_encode($tahun) ?>&pic=<?= base64_encode($pic) ?>" onclick="javascript: return confirm('Yakin hapus laporan dari <?= $laporan['nama']; ?> ?')"><button name="hapus" title="Hapus" class="btn btn-danger btn-sm btn-xs"><i class="fa fa-trash"></i></button></a>
                                                </td>
                                            </tr>
                                        <?php } } ?>
									</tbody>
								</table>
                            </div>
                        </div>
						<!-- <a href="#" target="_blank" class="btn btn-info">Export Data</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- modal input -->
     <!-- <div id="add_laporan" class="modal fade">
 		<div class="modal-dialog">
 			<div class="modal-content">
 				<div class="modal-header">
 					<h4 class="modal-title">Tambah Laporan IT</h4>
 				</div>
 				<div class="modal-body">
 					<form method="POST">
 						<div class="form-inline ">
 							<label for="tanggal">Tanggal</label><br>
 							<input type="text" name="tanggal" id="datepicker" class="datepicker form-control col-sm-4" required autocomplete="off">

                             <label for="user">User</label>
                             <input type="text" name="user" id="name" class="form-control col-sm-4" placeholder="" required autocomplete="off">
                         </div>
                         <div class="form-group">
                             <label for="foto">Foto</label><br>
                             <input type="file" name="foto" id="foto" accept="image/*" class="form-control ">
                         </div>
                         <div class="form-group">
                             <label for="direct_request">Request By</label>
                             <fieldset class="form-control">
                                 <input type="radio" name="direct_request" value="Email"> Email&nbsp;
                                 <input type="radio" name="direct_request" value="Google Form"> Google Form&nbsp;
                                 <input type="radio" name="direct_request" value="Personal"> Personal&nbsp;
                                 <input type="radio" name="direct_request" value="Telepon"> Telepon&nbsp;
                                 <input type="radio" name="direct_request" value="WhatsApp"> WhatsApp&nbsp;
                             </fieldset>
                         </div>
 						<div class="form-group">
 							<label for="lokasi">Lokasi</label>
 							<select name="lokasi" id="lokasi" class="custom-select form-control " required>
                                 <?php while($lokasi=mysqli_fetch_assoc($queryLokasi)){ ?>
                                     <option value="<?= $lokasi['kd_lokasi']; ?>"><?= $lokasi['nm_lokasi']; ?></option>
                                 <?php } ?>
                             </select>
 						</div>
 						<div class="form-group">
 							<label for="pic">PIC</label>
 							<select name="pic" id="pic" class="custom-select form-control " required>
                                 <?php while($pic=mysqli_fetch_assoc($queryPIC)){ ?>
                                     <option value="<?= $pic['id']; ?>"><?= $pic['nama']; ?></option>
                                 <?php } ?>
                             </select>
 						</div>
                         <div class="form-group">
                             <label for="permasalahan">Permasalahan</label>
                             <textarea type="text" name="permasalahan" id="name" class="form-control " placeholder="" autocomplete="off"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="perbaikan">Perbaikan</label>
                             <textarea type="text" name="perbaikan" id="name" class="form-control " placeholder="" autocomplete="off"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="sparepart">Sparepart</label>
                             <input type="text" name="sparepart" id="name" class="form-control " placeholder="" autocomplete="off">
                         </div>
                         <div class="form-group">
                             <label for="harga_sparepart">Harga Sparepart</label>
                             <input type="number" name="harga_sparepart" id="name" class="form-control col-sm-4" placeholder="" autocomplete="off">
                         </div>
                         <div class="form-group">
                             <label for="jenis">Jenis</label>
                             <fieldset class="form-control">
                                 <input type="radio" name="jenis" value="Hardware"> Hardware&nbsp;
                                 <input type="radio" name="jenis" value="Software"> Software&nbsp;
                                 <input type="radio" name="jenis" value="Network"> Network&nbsp;
                             </fieldset>
                         </div>
                         <div class="form-group">
                             <label for="keterangan">Keterangan</label>
                             <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                         </div>
 					</div>
 					<div class="modal-footer">
 						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
 						<input name="adduser" type="submit" class="btn btn-info" value="Simpan">
 					</div>
 				</form>
 			</div>
 		</div>
 	</div> -->
