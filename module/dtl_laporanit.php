
<?php
    include "../connect.php";
    include "../function.php";

    if(isset($_GET['id'])){
        $id_laporan = base64_decode($_GET['id']);
        $queryDtl = mysqli_query($conn, "SELECT * FROM laporan_it
                                            LEFT JOIN login
                                                ON pic = id
                                            LEFT JOIN lokasi
                                                ON lokasi = kd_lokasi
                                            WHERE id_laporan='$id_laporan'");
        $dataDtl = mysqli_fetch_assoc($queryDtl);
            $namahari = date("l", strtotime($dataDtl['tanggal']));
            if ($namahari == "Sunday") $namahari = "Minggu";
            else if ($namahari == "Monday") $namahari = "Senin";
            else if ($namahari == "Tuesday") $namahari = "Selasa";
            else if ($namahari == "Wednesday") $namahari = "Rabu";
            else if ($namahari == "Thursday") $namahari = "Kamis";
            else if ($namahari == "Friday") $namahari = "Jumat";
            else if ($namahari == "Saturday") $namahari = "Sabtu";
    }
?>

<section>
<div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4>Detail Laporan IT</h4>
                        <a href="index.php?p=laporan_it&bulan=<?= $_GET['bulan'] ?>&tahun=<?= $_GET['tahun'] ?>&pic=<?= $_GET['pic'] ?>" class="btn btn-info btn-xs"><i class="fa fa-undo"> Kembali</i></a>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="index.php?p=laporan_it">
                            <div class="market-status-table mt-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">

                                        <tr class="">
                                            <th>Tanggal</th>
                                            <td><?= $namahari.', '.date('d', strtotime($dataDtl['tanggal'])).' '.($bln_tgl[date('m', strtotime($dataDtl['tanggal']))]).' '.date('Y', strtotime($dataDtl['tanggal'])); ?></td>
                                        </tr>
                                        <tr>
                                            <th>PIC</th>
                                            <td><?= $dataDtl['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Lokasi</th>
                                            <td><?= $dataDtl['nm_lokasi']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>User</th>
                                            <td><?= $dataDtl['user']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Request By</th>
                                            <td><?= $dataDtl['direct_request']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Permasalahan</th>
                                            <td><?= $dataDtl['permasalahan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Perbaikan</th>
                                            <td><?= $dataDtl['perbaikan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Sparepart</th>
                                            <td><?= $dataDtl['sparepart']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Harga Sparepart</th>
                                            <td><?= rupiah($dataDtl['harga_sparepart']); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Pekerjaan</th>
                                            <td><?= $dataDtl['jenis']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Keterangan</th>
                                            <td><?= $dataDtl['keterangan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Foto</th>
                                            <td><img src="../files/Laporan Harian IT/<?= $dataDtl['file']; ?>" ></td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">(Dibuat Oleh : <?= $dataDtl['dibuat_oleh']; ?> - <?= $dataDtl['dibuat_pada']; ?>)<br>(Dirubah Oleh : <?= $dataDtl['dirubah_oleh']; ?> - <?= $dataDtl['dirubah_pada']; ?>)</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- <hr>
                            <a href="index.php?p=laporan_it&bulan=<?= $_GET['bulan'] ?>&tahun=<?= $_GET['tahun'] ?>&pic=<?= $_GET['pic'] ?>" class="btn btn-secondary btn-xs">Kembali</a> -->
                            <!-- <input type="submit" class="btn btn-secondary btn-xs" value="Kembali" name="kembali"> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
