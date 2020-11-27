<?php

  ob_start();
  session_start();
  if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
		header("Location: ../login.php");
  };

  include "../connect.php";

  $query = mysqli_query($conn, "SELECT * FROM pc_laptop
                                LEFT JOIN lokasi
                                  ON lokasi = kd_lokasi
                                ORDER BY user ASC");
  $i = 1;

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
  <p align="center" style="font-weight: bold; font-size: 16px;"><u>KOMPUTER & LAPTOP PT. EKANURI GROUP</u></p>
  <table class="tabel2" align="center" style="font-size: 8px;">
    <thead>
      <tr style="text-align: center; " >
        <th>No</th>
        <th>Kode</th>
        <th>User</th>
        <th>Email</th>
        <th>Lokasi</th>
        <th>Jenis</th>
        <th>Monitor</th>
        <th>Merk</th>
    		<th>Spesifikasi</th>
    		<th>Unit Bisnis</th>
        <th>Antivirus</th>
        <th>Expired Antivirus</th>
        <th>ID Anydesk</th>
        <th>Pass Anydesk</th>
        <th>Tanda Terima</th>
      </tr>
    </thead>
    <tbody>
      <?php while($data=mysqli_fetch_assoc($query)) { ?>
      <tr>
        <td style="text-align: center; width=7px;"><?= $i++; ?></td>
        <td><?= $data['id_perangkat']; ?></td>
        <td><?= $data['user']; ?></td>
        <td><?= $data['email']; ?></td>
        <td style="text-align: ; width=30px;"><?= $data['nm_lokasi']; ?></td>
        <td><?= $data['jenis_perangkat']; ?></td>
        <td><?= $data['spesifikasi_monitor']; ?></td>
        <td style="text-align: ; width=40px;"><?= $data['merk']; ?></td>
        <td style="text-align: ; width=50px;"><?= $data['spesifikasi']; ?></td>
        <td><?= $data['unit_bisnis']; ?></td>
        <td><?= $data['antivirus']; ?></td>
        <td><?= $data['expired_antivirus']; ?></td>
        <td><?= $data['anydesk']; ?></td>
        <td><?= $data['password_anydesk']; ?></td>
        <?php if($data['tanda_terima'] != '' || $data['tanda_terima'] != NULL){ ?>
          <td style="text-align: center;"><input type="checkbox" checked="checked" ></td>
        <?php }else{ ?>
          <td></td>
        <?php } ?>
      </tr>
    <?php } ?>
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

  <!-- <table >
    <tr>
      <td style="text-align: center; width=510px;">Mengetahui :<br>Sekretaris<br><br><br><br><br><br><b>(E Hodijeh)</b></td>
      <td style="text-align: center; width=510px;">Menyetujui :<br>Head IT<br><br><br><br><br><br><b>(Abdul Rozak)</b></td>
    </tr>
  </table> -->

<!-- Memanggil fungsi bawaan HTML2PDF -->
<?php
$content = ob_get_clean();
 include '../assets/library/html2pdf/html2pdf.class.php';
 try
{
    $html2pdf = new HTML2PDF('l', 'A4', 'en', false, 'UTF-8', array(5, 10, 5, 10));
    // $html2pdf->setDefaultFont('Arial');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->pdf->SetTitle('Komputer dan Laptop');
    $html2pdf->writeHTML($content);
    $html2pdf->Output('KomputerLaptop.pdf');
}
catch(HTML2PDF_exception $e) {
    echo $e;
    exit;
}
?>