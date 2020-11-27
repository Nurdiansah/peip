
<?php
    include "../connect.php";
    include "../function.php";
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date("Ymd");

    if(isset($_GET['id'])){
        $id_sptlembur = base64_decode($_GET['id']);
        $queryDtl = mysqli_query($conn, "SELECT * FROM spt_lembur
                                            INNER JOIN ms_status
                                                ON status = kode_status
                                            WHERE id_sptlembur='$id_sptlembur'");

        $dataDtl = mysqli_fetch_assoc($queryDtl);

            $hari_berangkat = date("l", strtotime($dataDtl['tgl_berangkat']));
            if ($hari_berangkat == "Sunday") $hari_berangkat = "Minggu";
            else if ($hari_berangkat == "Monday") $hari_berangkat = "Senin";
            else if ($hari_berangkat == "Tuesday") $hari_berangkat = "Selasa";
            else if ($hari_berangkat == "Wednesday") $hari_berangkat = "Rabu";
            else if ($hari_berangkat == "Thursday") $hari_berangkat = "Kamis";
            else if ($hari_berangkat == "Friday") $hari_berangkat = "Jumat";
            else if ($hari_berangkat == "Saturday") $hari_berangkat = "Sabtu";

            $hari_kembali = date("l", strtotime($dataDtl['tgl_kembali']));
            if ($hari_kembali == "Sunday") $hari_kembali = "Minggu";
            else if ($hari_kembali == "Monday") $hari_kembali = "Senin";
            else if ($hari_kembali == "Tuesday") $hari_kembali = "Selasa";
            else if ($hari_kembali == "Wednesday") $hari_kembali = "Rabu";
            else if ($hari_kembali == "Thursday") $hari_kembali = "Kamis";
            else if ($hari_kembali == "Friday") $hari_kembali = "Jumat";
            else if ($hari_kembali == "Saturday") $hari_kembali = "Sabtu";
    }
?>

<section>
<div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4>Detail SPT & Lembur</h4>
                        <fieldset class="form-control col-sm-4">
                            <a href="../report/cetak_spt.php?id=<?= base64_encode($id_sptlembur) ?>" target="_blank" class="btn btn-primary btn-xs mr-2"><i class="fa fa-file-pdf-o"> Cetak SPT</i></a>
                            <a href="../report/#" target="_blank" class="btn btn-primary btn-xs mr-2"><i class="fa fa-file-pdf-o"> Cetak Lemburan</i></a>
                            <a href="index.php?p=<?= base64_decode($_GET['pg']); ?>" class="btn btn-info btn-xs"><i class="fa fa-undo"> Kembali</i></a>
                        </fieldset>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="index.php?p=laporan_it">
                            <div class="market-status-table mt-4">
                                <div class="table-responsive">
                                <?php if($dataDtl['status'] == 'RJ' && $dataDtl['keterangan_reject'] != NULL){
                                    echo "<div style='text-align: center;' class='alert alert-".$dataDtl['warna']."'><h5>".$dataDtl['nama_status']."</h5><br>".$dataDtl['keterangan_reject']."</div>";
                                }else{
                                    echo "<div style='text-align: center;' class='alert alert-".$dataDtl['warna']."'><h5>".$dataDtl['nama_status']."</h5><br>".$dataDtl['keterangan']."</div>";
                                } ?>
                                    <table class="table table-bordered table-hover">
                                        <tr >
                                            <th rowspan="4" style="text-align: center; width:50% ;">
                                                <img src="../assets/images/logo_lama.png" style="width:120px; height:80px"><br>
                                                <div style="font-size: 23px; color: darkblue;">EKANURI GROUP</div>
                                                HUMAN RESOURCE POLICY & PROCEDURS
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Doc No : 0006-QF-HRD</td>
                                        </tr>
                                        <tr>
                                            <td>Revision Of : </td>
                                        </tr>
                                        <tr>
                                            <td>Effective Date : </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" style="text-align: center; font-size: 18px; background-color: #BDBDBD;">SUBJECT : SURAT PERINTAH TUGAS</th>
                                        </tr>
                                    </table>
                                    <p style="text-align: center; font-size: 15px;"><b>Nomor : </b></p>
                                    <p style="background-color: #BDBDBD;">DIVISI / DEPT : IT</p>
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <td style="text-align: center; width: 30px;">1</td>
                                            <td style="width: 48%;">Penjabat yang Memberi Perintah</td>
                                            <td><?= $dataDtl['perintah_oleh']; ?></td>
                                        </tr>
                                        <tr>
                                            <td >2</td>
                                            <td>Nama Pegawai yang Diperintah</td>
                                            <td><?= $dataDtl['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td >3</td>
                                            <td>Jabatan Pegawai</td>
                                            <td><?= $dataDtl['jabatan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td >4</td>
                                            <td>Maksud Perintah Tugas</td>
                                            <td><?= $dataDtl['nama_tugas']; ?></td>
                                        </tr>
                                        <tr>
                                            <td >5</td>
                                            <td>Alat Angkutan yang Dipergunakan</td>
                                            <td><?= $dataDtl['kendaraan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">6</td>
                                            <td>a. Tempat Berangkat</td>
                                            <td><?= $dataDtl['tempat_berangkat']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>b. Tempat Tujuan</td>
                                            <td><?= $dataDtl['tempat_tujuan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>c. Tempat Persinggahan (Transit)</td>
                                            <td><?= $dataDtl['tempat_transit']; ?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">7</td>
                                            <td>a. Lama Tugas</td>
                                            <td><?= $dataDtl['lama_tugas']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>b. Tanggal Berangkat</td>
                                            <td><?= $hari_berangkat.', '.date('d', strtotime($dataDtl['tgl_berangkat'])).' '.($bln_tgl[date('m', strtotime($dataDtl['tgl_berangkat']))]).' '.date('Y', strtotime($dataDtl['tgl_berangkat'])); ?> &nbsp;&nbsp; (<?= date('H:i', strtotime($dataDtl['jam_berangkat'])); ?> WIB)</td>
                                        </tr>
                                        <tr>
                                            <td>c. Tanggal Kembali</td>
                                            <td><?= $hari_kembali.', '.date('d', strtotime($dataDtl['tgl_kembali'])).' '.($bln_tgl[date('m', strtotime($dataDtl['tgl_kembali']))]).' '.date('Y', strtotime($dataDtl['tgl_kembali'])); ?> &nbsp;&nbsp; (<?= date('H:i', strtotime($dataDtl['jam_kembali'])); ?> WIB)</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Keterangan Lain-Lain</td>
                                            <td><?= $dataDtl['keterangan_lain']; ?></td>
                                        </tr>
                                    </table>
    <br>
    <table align="right" style="width: 50%;" class="table table-bordered table-hover">
        <tr>
            <td>Dikeluarkan di : Jakarta</td>
        </tr>
        <tr>
            <td>Pada Tanggal : <?= date('d', strtotime($tgl)).' '.($bln_tgl[date('m', strtotime($tgl))]).' '.date('Y', strtotime($tgl)); ?></td>
        </tr>
        <tr>
            <?php if($dataDtl['status'] == 'AP'){ ?>
                <td style="height: 3%;"><img src="../assets/images/approved.jpg" style="width: 70px; height: 55px;"></td>
            <?php }elseif($dataDtl['status'] == 'RJ'){ ?>
                <td style="height: 3%;"><img src="../assets/images/reject.png" style="width: 60px; height: 55px;"></td>
            <?php }else{ ?>
                <td style="height: 3%;"><br><br><br></td>
            <?php } ?>
        </tr>
        <tr>
            <td>Abdul Rozak</td>
        </tr>
    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
