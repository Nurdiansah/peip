<?php
    include "../connect.php";
    include "../function.php";

    if(isset($_GET['id']) && isset($_GET['folder'])){
        $id_dokumen = base64_decode($_GET['id']);
        $folder = base64_decode($_GET['folder']);

        $queryDtl = mysqli_query($conn, "SELECT folder.*, id_dokumen, kd_folder, nm_dokumen, thn_dokumen, upload.nama as yg_upload, waktu_diupload, rubah.nama as yg_rubah, waktu_dirubah, file
                                            FROM dokumen
                                            INNER JOIN ms_folder folder
                                                ON kd_folder = id_folder
                                            LEFT JOIN login upload
                                                ON upload.id = diupload_oleh
                                            LEFT JOIN login rubah
                                                ON rubah.id = dirubah_oleh
                                            WHERE id_dokumen = '$id_dokumen'");
        $dataDtl = mysqli_fetch_assoc($queryDtl);

        $hari_upload = date("l", strtotime($dataDtl['waktu_diupload']));
            if ($hari_upload == "Sunday") $hari_upload = "Minggu";
            else if ($hari_upload == "Monday") $hari_upload = "Senin";
            else if ($hari_upload == "Tuesday") $hari_upload = "Selasa";
            else if ($hari_upload == "Wednesday") $hari_upload = "Rabu";
            else if ($hari_upload == "Thursday") $hari_upload = "Kamis";
            else if ($hari_upload == "Friday") $hari_upload = "Jumat";
            else if ($hari_upload == "Saturday") $hari_upload = "Sabtu";

        $hari_rubah = date("l", strtotime($dataDtl['waktu_dirubah']));
            if ($hari_rubah == "Sunday") $hari_rubah = "Minggu";
            else if ($hari_rubah == "Monday") $hari_rubah = "Senin";
            else if ($hari_rubah == "Tuesday") $hari_rubah = "Selasa";
            else if ($hari_rubah == "Wednesday") $hari_rubah = "Rabu";
            else if ($hari_rubah == "Thursday") $hari_rubah = "Kamis";
            else if ($hari_rubah == "Friday") $hari_rubah = "Jumat";
            else if ($hari_rubah == "Saturday") $hari_rubah = "Sabtu";
    }

?>
<section>
    <div class="row mt-4 mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4 title="<?= $dataDtl['menu']; ?>"><?= $dataDtl['sub_menu']; ?></h4>
                        <a href="index.php?p=dokumen&folder=<?= base64_encode($folder); ?>" class="btn btn-info btn-xs"><i class="fa fa-undo"> Kembali</i></a>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="index.php?p=laporan_it">
                            <div class="market-status-table mt-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th colspan="2" style="text-align: center;">
                                                <img src="../assets/images/peip.png" style="width: 10%;">
                                                <label>PT. PELAYARAN EKANURI INDRA PRATAMA<br>
                                                Dokumen on <?= $dataDtl['menu']; ?><br>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th width="40%">Kode Dokumen</th>
                                            <td width="60%"><?= $dataDtl['id_dokumen']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Dokumen</th>
                                            <td><?= $dataDtl['nm_dokumen']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tahun Dokumen</th>
                                            <td><?= $dataDtl['thn_dokumen']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Dibuat Oleh</th>
                                            <td><?= $dataDtl['yg_upload']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Waktu Dibuat</th>
                                            <td><?= $hari_upload.', '.date('d', strtotime($dataDtl['waktu_diupload'])).' '.($bln_tgl[date('m', strtotime($dataDtl['waktu_diupload']))]).' '.date('Y', strtotime($dataDtl['waktu_diupload'])); ?>&nbsp;&nbsp;(<?= date('H:i:s', strtotime($dataDtl['waktu_diupload'])); ?>)</td>
                                        </tr>
                                        <tr>
                                            <th>Dirubah Oleh</th>
                                            <td><?= $dataDtl['yg_rubah']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Waktu Dirubah</th>
                                            <td><?= $hari_rubah.', '.date('d', strtotime($dataDtl['waktu_dirubah'])).' '.($bln_tgl[date('m', strtotime($dataDtl['waktu_dirubah']))]).' '.date('Y', strtotime($dataDtl['waktu_dirubah'])); ?>&nbsp;&nbsp;(<?= date('H:i:s', strtotime($dataDtl['waktu_dirubah'])); ?>)</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" style="text-align: center; height: 800px;">
                                                <object data="../files/PEIP/<?= $dataDtl['folder']; ?>/<?= $dataDtl['sub_folder']; ?>/<?= $dataDtl['sub_subfolder']; ?>/<?= $dataDtl['sub_subsfolder']; ?>/<?= $dataDtl['file']; ?>" style="width: 70%; height: 800px;"></object>
                                            </th>
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