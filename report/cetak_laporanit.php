<?php

  ob_start();
  session_start();

  include "../connect.php";
  include "../function.php";

  if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
    header("Location: ../login.php");
  };

  if($_GET['bulan'] == '' || $_GET['tahun'] == '' || $_GET['pic'] == ''){
    echo "<script>window.alert('Tampilkan Data terlebih dahulu sebelum Cetak Laporan!');
            exit;
          </script>";
          return false;
  }else{
    $bulan = base64_decode($_GET['bulan']);
    $tahun = base64_decode($_GET['tahun']);
    $pic = base64_decode($_GET['pic']);

    if ($bulan == 'all' && $tahun == 'all' && $pic == 'all'){
      $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                      LEFT JOIN login
                                        ON pic = id
                                      LEFT JOIN lokasi
                                        ON lokasi = kd_lokasi
                                      ORDER BY tanggal ASC");
    }else if($bulan != 'all' && $tahun != 'all' && $pic != 'all'){
        $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                        LEFT JOIN login
                                            ON pic = id
                                        LEFT JOIN lokasi
                                          ON lokasi = kd_lokasi
                                        WHERE YEAR(tanggal) = '$tahun'
                                        AND MONTH(tanggal) = '$bulan'
                                        AND pic = '$pic'
                                        ORDER BY tanggal asc");
    }else if($bulan != 'all' && $tahun == 'all' && $pic == 'all'){
        $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                        LEFT JOIN login
                                            ON pic = id
                                        LEFT JOIN lokasi
                                          ON lokasi = kd_lokasi
                                        WHERE MONTH(tanggal) = '$bulan'
                                        ORDER BY tanggal asc");
    }else if($bulan == 'all' && $tahun != 'all' && $pic == 'all'){
        $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                        LEFT JOIN login
                                            ON pic = id
                                        LEFT JOIN lokasi
                                          ON lokasi = kd_lokasi
                                        WHERE YEAR(tanggal) = '$tahun'
                                        ORDER BY tanggal asc");
    }else if($bulan == 'all' && $tahun == 'all' && $pic != 'all'){
        $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                        LEFT JOIN login
                                            ON pic = id
                                        LEFT JOIN lokasi
                                          ON lokasi = kd_lokasi
                                        WHERE pic = '$pic'
                                        ORDER BY tanggal asc");
    }else if($bulan != 'all' && $tahun != 'all' && $pic == 'all'){
        $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                        LEFT JOIN login
                                            ON pic = id
                                        LEFT JOIN lokasi
                                          ON lokasi = kd_lokasi
                                        WHERE MONTH(tanggal) = '$bulan'
                                        AND YEAR(tanggal) = '$tahun'
                                        ORDER BY tanggal asc");
    }else if($bulan != 'all' && $tahun == 'all' && $pic != 'all'){
        $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                        LEFT JOIN login
                                            ON pic = id
                                        LEFT JOIN lokasi
                                          ON lokasi = kd_lokasi
                                        WHERE MONTH(tanggal) = '$bulan'
                                        AND pic = '$pic'
                                        ORDER BY tanggal asc");
    }else if($bulan == 'all' && $tahun != 'all' && $pic != 'all'){
        $query = mysqli_query($conn, "SELECT * FROM laporan_it
                                        LEFT JOIN login
                                            ON pic = id
                                        LEFT JOIN lokasi
                                          ON lokasi = kd_lokasi
                                        WHERE YEAR(tanggal) = '$tahun'
                                        AND pic = '$pic'
                                        ORDER BY tanggal asc");
    }
    $i = 1;
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
      border: 1px solid #959595;
      font-size: 9;
  }

  </style>
  <table >
    <tr>
      <th rowspan="3" ><img src="../assets/images/logoenc.png" style="width:250px;height:50px" /></th>
      <td align="center" style="width: 520px;"><font style="font-size: 18px"><b>PT. EKANURI</b></font>
      <br><br>JL.Hayam Wuruk No.2XX, Jakarta Pusat, DKI Jakarta<br>Telp :  (021) 439-02157 | Fax : (021) 385-0830</td>
	    <th rowspan="3"></th>
    </tr>
  </table>
  <hr>
  <p align="center" style="font-weight: bold; font-size: 18px;"><u>LAPORAN HARIAN IT PT. EKANURI</u></p>

  <table class="tabel2" align="center" >
    <thead>
      <tr>
        <th style="text-align: center; width: 10px;" ><b>No</b></th>
        <th style="text-align: center; width: 50px;" ><b>Tanggal</b></th>
        <th style="text-align: center; width: 60px" ><b>PIC</b></th>
    		<th style="text-align: center; width: 70px" ><b>Lokasi</b></th>
        <th style="text-align: center; width: 60px" ><b>User</b></th>
        <th style="text-align: center; width: 50px" ><b>Request By</b></th>
        <th style="text-align: center; width: 60px" ><b>Permasalaan</b></th>
        <th style="text-align: center; width: 60px" ><b>Perbaikan</b></th>
        <th style="text-align: center; width: 60px" ><b>Sparepart</b></th>
        <th style="text-align: center; width: 50px" ><b>Harga Parts</b></th>
        <th style="text-align: center; width: " ><b>Jenis Perbaikan</b></th>
        <th style="text-align: center; width: 90px" ><b>Keterangan</b></th>
        <th style="text-align: center; width: 70px" ><b>Foto</b></th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($data=mysqli_fetch_assoc($query))
      {
        $namahari = date("l", strtotime($data['tanggal']));
        if ($namahari == "Sunday") $namahari = "Minggu";
        else if ($namahari == "Monday") $namahari = "Senin";
        else if ($namahari == "Tuesday") $namahari = "Selasa";
        else if ($namahari == "Wednesday") $namahari = "Rabu";
        else if ($namahari == "Thursday") $namahari = "Kamis";
        else if ($namahari == "Friday") $namahari = "Jumat";
        else if ($namahari == "Saturday") $namahari = "Sabtu";
      ?>
      <tr>
        <td style="text-align: center; width=5px;"><?= $i; ?></td>
		    <td style="text-align: center; width=30px;"><?= $namahari.', '.date('d', strtotime($data['tanggal'])).' '.($bln_tgl[date('m', strtotime($data['tanggal']))]).' '.date('Y', strtotime($data['tanggal'])); ?></td>
        <td style="text-align: center; width=50px;"><?= $data['nama']; ?></td>
        <td style="text-align: center; width=10px;"><?= $data['nm_lokasi']; ?></td>
        <td style="text-align: center; width=10px;"><?= $data['user']; ?></td>
        <td style="text-align: center; width=10px;"><?= $data['direct_request']; ?></td>
        <td style="text-align: center; width=50px;"><?= $data['permasalahan']; ?></td>
        <td style="text-align: center; width=50px;"><?= $data['perbaikan']; ?></td>
        <td style="text-align: center; width=50px;"><?= $data['sparepart']; ?></td>
        <td style="text-align: center; width=40px;"><?= rupiah($data['harga_sparepart']); ?></td>
        <td style="text-align: center; width=;"><?= $data['jenis']; ?></td>
        <td style="text-align: center; width=50px;"><?= $data['keterangan']; ?></td>
        <?php if($data['file'] == NULL or $data['file'] == ''){ ?>
          <td style="text-align: center; width=50px;">Tidak Ada Foto</td>
        <?php }else{ ?>
          <td style="text-align: center; width=50px;"><img height="70" width="70" src="../files/Laporan Harian IT/<?= $data['file']; ?>" alt=""></td>
        <?php } ?>
      </tr>
    <?php
    $i++;
    }
    ?>
    </tbody>
  </table>

  <br>
  <br>
  <!-- <div class="kanan">
      <p>Mengetahui :<br>Manajer </p>
      <br>
      <br>
      <br>
      <p><b><u>NAMA</u><br>NIK : 197810170371</b></p>
  </div> -->

  <table style="font-size: 11;">
    <tr>
      <td style="text-align: center; width=510px;">Mengetahui :<br>Admin<br><br><br><br><br><br><b>(E Hodijeh)</b></td>
      <td style="text-align: center; width=510px;">Menyetujui :<br>Head IT<br><br><br><br><br><br><b>(Abdul Rozak)</b></td>
    </tr>
  </table>

<!-- Memanggil fungsi bawaan HTML2PDF -->
<?php
$content = ob_get_clean();
 include '../assets/library/html2pdf/html2pdf.class.php';
 try
{
    $html2pdf = new HTML2PDF('l', 'A4', 'en', false, 'UTF-8', array(5, 10, 5, 10));
    // $html2pdf->setDefaultFont('Arial');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->pdf->SetTitle('Laporan Harian IT');
    $html2pdf->writeHTML($content);
    $html2pdf->Output('LaporanHarianIT.pdf');
}
catch(HTML2PDF_exception $e) {
    echo $e;
    exit;
}
?>