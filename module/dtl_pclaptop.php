
<?php
    include "../connect.php";
    include "../function.php";

    if(isset($_GET['id'])){
        $id_perangkat = base64_decode($_GET['id']);
        $queryDtl = mysqli_query($conn, "SELECT * FROM pc_laptop
                                            LEFT JOIN lokasi
                                                ON lokasi = kd_lokasi
                                            WHERE id_perangkat='$id_perangkat'");

        $dataDtl = mysqli_fetch_assoc($queryDtl);
            $namahari = date("l", strtotime($dataDtl['expired_antivirus']));
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
                        <h4>Detail Komputer & Laptop IT</h4>
                        <a href="index.php?p=pc_laptop" class="btn btn-info btn-xs"><i class="fa fa-undo"> Kembali</i></a>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="index.php?p=laporan_it">
                            <div class="market-status-table mt-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tr class="">
                                            <th>Kode Perangkat</th>
                                            <td><?= $dataDtl['id_perangkat']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>User</th>
                                            <td><?= $dataDtl['user']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?= $dataDtl['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Lokasi</th>
                                            <td><?= $dataDtl['nm_lokasi']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Perangkat</th>
                                            <td><?= $dataDtl['jenis_perangkat']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Monitor</th>
                                            <td><?= $dataDtl['spesifikasi_monitor']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Merk</th>
                                            <td><?= $dataDtl['merk']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Spesifikasi</th>
                                            <td><?= $dataDtl['spesifikasi']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Unit Bisnis</th>
                                            <td><?= $dataDtl['unit_bisnis']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Antivirus</th>
                                            <td><?= $dataDtl['antivirus']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Expired Antivirus</th>
                                            <td><?= $namahari.', '.date('d', strtotime($dataDtl['expired_antivirus'])).' '.($bln_tgl[date('m', strtotime($dataDtl['expired_antivirus']))]).' '.date('Y', strtotime($dataDtl['expired_antivirus'])); ?></td>
                                        </tr>
                                        <tr>
                                            <th>ID Anydesk</th>
                                            <td><?= $dataDtl['anydesk']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Password Anydesk</th>
                                            <td><?= $dataDtl['password_anydesk']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanda Terima</th>
                                            <?php if($dataDtl['tanda_terima'] == '' || $dataDtl['tanda_terima'] == NULL){ ?>
                                                <td>Tanda terima tidak ada</td>
                                            <?php }else{ ?>
                                                <td><object data="../files/PC Laptop/<?= $dataDtl['tanda_terima']; ?>" type="" width="40%" height="40%"></object></td>
                                            <?php } ?>
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
