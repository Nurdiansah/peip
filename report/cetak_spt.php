<?php

    ob_start();
    session_start();
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date("Ymd");

    include "../connect.php";
    include "../function.php";

    if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
        header("Location: ../login.php");
    };

    if(isset($_GET['id'])){
        $id_sptlembur = base64_decode($_GET['id']);

        $query = mysqli_query($conn, "SELECT * FROM spt_lembur WHERE id_sptlembur = '$id_sptlembur'");
        $data = mysqli_fetch_assoc($query);

        if($data['nama'] == $_SESSION['nm']){
            $queryUpdate = mysqli_query($conn, "UPDATE spt_lembur SET status = 'RL'
                                                WHERE id_sptlembur = '$id_sptlembur'
                                                AND status = 'NW'");
        }

            $hari_berangkat = date("l", strtotime($data['tgl_berangkat']));
            if ($hari_berangkat == "Sunday") $hari_berangkat = "Minggu";
            else if ($hari_berangkat == "Monday") $hari_berangkat = "Senin";
            else if ($hari_berangkat == "Tuesday") $hari_berangkat = "Selasa";
            else if ($hari_berangkat == "Wednesday") $hari_berangkat = "Rabu";
            else if ($hari_berangkat == "Thursday") $hari_berangkat = "Kamis";
            else if ($hari_berangkat == "Friday") $hari_berangkat = "Jumat";
            else if ($hari_berangkat == "Saturday") $hari_berangkat = "Sabtu";

            $hari_kembali = date("l", strtotime($data['tgl_kembali']));
            if ($hari_kembali == "Sunday") $hari_kembali = "Minggu";
            else if ($hari_kembali == "Monday") $hari_kembali = "Senin";
            else if ($hari_kembali == "Tuesday") $hari_kembali = "Selasa";
            else if ($hari_kembali == "Wednesday") $hari_kembali = "Rabu";
            else if ($hari_kembali == "Thursday") $hari_kembali = "Kamis";
            else if ($hari_kembali == "Friday") $hari_kembali = "Jumat";
            else if ($hari_kembali == "Saturday") $hari_kembali = "Sabtu";
    }

?>
<!-- Setting CSS bagian header/ kop -->
<style type="text/css">
    table.page_header {width: 1020px; border: none; background-color: #3C8DBC; color: #fff; border-bottom: solid 1mm #AAAADD; padding: 2mm }
    table.page_footer {width: 1020px; border: none; background-color: #3C8DBC; border-top: solid 1mm #AAAADD; padding: 2mm}
    h1 {color: #000033}
    h2 {color: #000055}
    h3 {color: #000077}
</style>
    <!-- Setting Margin header/ kop -->
    <!-- Setting CSS Tabel data yang akan ditampilkan -->
<style type="text/css">
    .tabel2 {
        border-collapse: collapse;
        margin-left: 5px;
    }
    .tabel2 th, .tabel2 td {
        padding: 5px 5px;
        border: 1px solid ;
        font-size: 10;
    }

</style>

    <table class="tabel2" >
        <tr>
            <th rowspan="3" style="text-align: center; width: 50%;">
                <img src="../assets/images/logo_lama.png" style="width:100px; height:65px">
                <h4 style="color: darkblue;">EKANURI GROUP</h4>
                HUMAN RESOURCE POLICY & PROCEDURS
            </th>
            <td style="width: 50%;">Doc No : 0006-QF-HRD</td>
        </tr>
        <tr>
            <td>Revision Of : </td>
        </tr>
        <tr>
            <td>Effective Date : </td>
        </tr>
        <tr>
            <th colspan="2" style="text-align: center; font-size: 12px; background-color: #BDBDBD;">SUBJECT : SURAT PERINTAH TUGAS</th>
        </tr>
    </table>
    <p style="text-align: center; font-size: 12px;"><b>Nomor : </b></p>

    <table class="tabel2">
        <tr>
            <td colspan="3" style="background-color: #BDBDBD;">DIVISI / DEPT : IT</td>
        </tr>
        <tr>
            <td style="text-align: center; width: 10px;">1</td>
            <td style="width: 45%;">Penjabat yang Memberi Perintah</td>
            <td style="width: 50%;"><?= $data['perintah_oleh']; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;">2</td>
            <td>Nama Pegawai yang Diperintah</td>
            <td><?= $data['nama']; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;">3</td>
            <td>Jabatan Pegawai</td>
            <td><?= $data['jabatan']; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;">4</td>
            <td>Maksud Perintah Tugas</td>
            <td><?= $data['nama_tugas']; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;">5</td>
            <td>Alat Angkutan yang Dipergunakan</td>
            <td><?= $data['kendaraan']; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;">6</td>
            <td>a. Tempat Berangkat</td>
            <td><?= $data['tempat_berangkat']; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;"></td>
            <td>b. Tempat Tujuan</td>
            <td><?= $data['tempat_tujuan']; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;"></td>
            <td>c. Tempat Persinggahan (Transit)</td>
            <td><?= $data['tempat_transit']; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;">7</td>
            <td>a. Lama Tugas</td>
            <td><?= $data['lama_tugas']; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;"></td>
            <td>b. Tanggal Berangkat</td>
            <td><?= $hari_berangkat.', '.date('d', strtotime($data['tgl_berangkat'])).' '.($bln_tgl[date('m', strtotime($data['tgl_berangkat']))]).' '.date('Y', strtotime($data['tgl_berangkat'])); ?>  (<?= date('H:i', strtotime($data['jam_berangkat'])); ?> WIB)</td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;"></td>
            <td>c. Tanggal Kembali</td>
            <td><?= $hari_kembali.', '.date('d', strtotime($data['tgl_kembali'])).' '.($bln_tgl[date('m', strtotime($data['tgl_kembali']))]).' '.date('Y', strtotime($data['tgl_kembali'])); ?>  (<?= date('H:i', strtotime($data['jam_kembali'])); ?> WIB)</td>
        </tr>
        <tr>
            <td colspan="3" style="height: 1px;"></td>
        </tr>
        <tr>
            <td style="text-align: center;">8</td>
            <td>Keterangan</td>
            <td><?= $data['keterangan_lain']; ?></td>
        </tr>
    </table>
    <br>
    <table align="right" class="tabel2">
        <tr>
            <td style="width: 50%;">Dikeluarkan di : Jakarta</td>
        </tr>
        <tr>
            <td>Pada Tanggal : <?= date('d', strtotime($tgl)).' '.($bln_tgl[date('m', strtotime($tgl))]).' '.date('Y', strtotime($tgl)); ?></td>
        </tr>
        <tr>
            <?php if($data['status'] == 'AP'){ ?>
                <td style="height: 3%;"><img src="../assets/images/approved.jpg" style="width: 70px; height: 55px;"></td>
            <?php }elseif($data['status'] == 'RJ'){ ?>
                <td style="height: 3%;"><img src="../assets/images/reject.png" style="width: 60px; height: 55px;"></td>
            <?php }else{ ?>
                <td style="height: 3%;"></td>
            <?php } ?>
        </tr>
        <tr>
            <td>Abdul Rozak</td>
        </tr>
    </table>
    <p style="font-size: 10px;">Tembusan :<br>
        #                               Direksi<br>
        ##                              Arsip<br>
                                    *) Nama dan tanda tangan penjabat yang memberi perintah</p>

<!-- Memanggil fungsi bawaan HTML2PDF -->
<?php
$content = ob_get_clean();
 include '../assets/library/html2pdf/html2pdf.class.php';
 try
{
    $html2pdf = new HTML2PDF('P', 'A4', 'en', false, 'UTF-8', array(10, 15, 15, 15));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->pdf->SetTitle('Surat Perintah Tugas');
    $html2pdf->writeHTML($content);
    $html2pdf->Output('SPT.pdf');
}
catch(HTML2PDF_exception $e) {
    echo $e;
    exit;
}
?>