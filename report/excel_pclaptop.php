<?php
    include "../connect.php";

    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");

    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=PC_Laptop.xls");


   $query = mysqli_query($conn, "SELECT * FROM pc_laptop
                                 INNER JOIN lokasi
                                    ON lokasi = kd_lokasi
                                 order by user asc");
   $i = 1;
?>
   <table border="1">
      <tr>
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

      <?php while($data=mysqli_fetch_assoc($query)) { ?>
      <tr>
        <td ><?= $i++; ?></td>
        <td><?= $data['id_perangkat']; ?></td>
        <td><?= $data['user']; ?></td>
        <td><?= $data['email']; ?></td>
        <td><?= $data['nm_lokasi']; ?></td>
        <td><?= $data['jenis_perangkat']; ?></td>
        <td><?= $data['spesifikasi_monitor']; ?></td>
        <td><?= $data['merk']; ?></td>
        <td><?= $data['spesifikasi']; ?></td>
        <td><?= $data['unit_bisnis']; ?></td>
        <td><?= $data['antivirus']; ?></td>
        <td><?= $data['expired_antivirus']; ?></td>
        <td><?= $data['anydesk']; ?></td>
        <td><?= $data['password_anydesk']; ?></td>
        <?php if($data['tanda_terima'] != '' || $data['tanda_terima'] != NULL){ ?>
          <td style="text-align: center;">Ada</td>
        <?php }else{ ?>
          <td style="text-align: center;">-</td>
        <?php } ?>
      </tr>
      <?php } ?>
   </table>
