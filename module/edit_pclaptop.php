<?php
    include "../connect.php";

    if(isset($_POST['simpan'])){
        date_default_timezone_set('Asia/Jakarta');
        $cek_file = ($_FILES['tanda_terima']['name']);
        if ($cek_file == ''){
            $nm_baru = $_POST['file_lama'];
        }else{
            $delfile = $_POST['file_lama'];
            if(isset($delfile)){
                unlink("../files/PC Laptop/$delfile");
            }
            $nm_file = ($_FILES['tanda_terima']['name']);
            $path = ($_FILES['tanda_terima']['tmp_name']);
            $tgl = date("YmdHis");
            $ekstensi = pathinfo($nm_file, PATHINFO_EXTENSION);
            $nm_baru = $tgl.".".$ekstensi;
            move_uploaded_file($path, "../files/PC Laptop/$nm_baru");
        }

        $id_perangkat = $_POST['kode'];
        $jenis_perangkat = $_POST['jenis'];
        $user = $_POST['user'];
        $email = $_POST['email'];
        $lokasi = $_POST['lokasi'];
        $unit_bisnis = $_POST['unit_bisnis'];
        $merk = $_POST['merk'];
        $spesifikasi = $_POST['spesifikasi'];
        $monitor = $_POST['monitor'];
        $antivirus = $_POST['antivirus'];
        $exp_antivirus = $_POST['exp_antivirus'];
        $anydesk = $_POST['anydesk'];
        $pass_anydesk = $_POST['pass_anydesk'];
        $it = $_SESSION['nm'];

        $update = "UPDATE pc_laptop SET user='$user', email='$email', lokasi='$lokasi', jenis_perangkat='$jenis_perangkat', spesifikasi_monitor='$monitor', merk='$merk', spesifikasi='$spesifikasi', unit_bisnis='$unit_bisnis', antivirus='$antivirus', expired_antivirus='$exp_antivirus', anydesk='$anydesk', password_anydesk='$pass_anydesk', tanda_terima='$nm_baru', dirubah_oleh='$it', dirubah_pada=now()
                    WHERE id_perangkat='$id_perangkat'";
        $hasil_upd = mysqli_query($conn, $update);

        // if ($hasil_ins){
        //     header ('Location: index.php?p=edit_laporanit');
        // }

    }

    $queryLokasi = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");

    if(isset($_GET['id'])){
        $id_perangkat = base64_decode($_GET['id']);
        $queryEdit = mysqli_query($conn, "SELECT * FROM pc_laptop WHERE id_perangkat='$id_perangkat'");
        $dataEdit = mysqli_fetch_assoc($queryEdit);
    }
?>
<section>
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4>Rubah Komputer & Laptop</h4>
                        <a href="index.php?p=pc_laptop" class="btn btn-info btn-xs"><i class="fa fa-undo"> Kembali</i></a>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset class="form-control ">
                                <div class="form-inline mb-3">
                                    <label for="kode" class=" col-sm-offset-1 col-sm-1 control-label">Kode</label>
                                    <input type="text" name="kode" id="kode" class="form-control col-sm-2 " value="<?= $dataEdit['id_perangkat']; ?>" readonly>

                                    <label for="jenis" class="col-sm-offset-1 col-sm-1 control-label">Jenis Perangkat</label>
                                    <select name="jenis" id="jenis" class="custom-select form-control col-sm-2" required>
                                        <option value="Komputer" <?php if ($dataEdit['jenis_perangkat'] == 'Komputer') {echo "selected=\"selected\"";} ?>>Komputer</option>
                                        <option value="Laptop" <?php if ($dataEdit['jenis_perangkat'] == 'Laptop') {echo "selected=\"selected\"";} ?>>Laptop</option>
                                    </select>
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="user" class="col-sm-offset-1 col-sm-1 control-label">User</label>
                                    <input type="text" name="user" id="name" class="form-control col-sm-2 " value="<?= $dataEdit['user']; ?>" required autocomplete="off">

                                    <label for="email" class=" col-sm-offset-1 col-sm-1 control-label">Email</label>
                                    <input type="text" name="email" id="" class="form-control email col-sm-2" placeholder="nama@ekanuri.com" value=<?= $dataEdit['email']; ?> autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="lokasi" class="col-sm-offset-1 col-sm-1 control-label">Lokasi</label>
                                    <select name="lokasi" id="lokasi" class="custom-select form-control col-sm-2" required>
                                        <?php while($lokasi=mysqli_fetch_assoc($queryLokasi)){ ?>
                                            <option value="<?= $lokasi['kd_lokasi']; ?>" <?php if ($dataEdit['lokasi'] == $lokasi['kd_lokasi']) {echo "selected=\"selected\"";} ?>><?= $lokasi['nm_lokasi']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <label for="unit_bisnis" class="col-sm-offset-1 col-sm-1 control-label">Unit Bisnis</label>
                                    <input type="text" name="unit_bisnis" id="unit_bisnis" class="form-control col-sm-2" value="<?= $dataEdit['unit_bisnis']; ?>" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="merk" class="col-sm-offset-1 col-sm-1 control-label">Merk</label>
                                    <input type="text" name="merk" class="form-control col-sm-5" value="<?= $dataEdit['merk']; ?>" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="spesifikasi" class="col-sm-offset-1 col-sm-1 control-label">Spesifikasi</label>
                                    <input type="text" name="spesifikasi" class="form-control col-sm-5" value="<?= $dataEdit['spesifikasi']; ?>" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="monitor" class="col-sm-offset-1 col-sm-1 control-label">Spesifikasi Monitor</label>
                                    <input type="text" name="monitor" class="form-control col-sm-5" value="<?= $dataEdit['spesifikasi_monitor']; ?>" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="tanda_terima" class="col-sm-offset-1 col-sm-1 control-label">Tanda Terima</label>
                                    <input type="file" name="tanda_terima" id="tanda_terima" class="form-control col-sm-5">
                                    <input type="hidden" name="file_lama" class="form-control" value="<?= $dataEdit['tanda_terima']; ?>">
                                </div>
                            </fieldset>
                            <br>
                            <fieldset class="form-control">
                                <div class="form-inline mb-3">
                                    <label for="antivirus" class="col-sm-offset-1 col-sm-1 control-label">Antivirus</label>
                                    <input type="text" name="antivirus" id="antivirus" class="form-control col-sm-2" value="<?= $dataEdit['antivirus']; ?>" autocomplete="off">

                                    <label for="exp_antivirus" class="col-sm-offset-1 col-sm-1 control-label">Expired Antivirus</label>
                                    <input type="date" name="exp_antivirus" id="exp_antivirus" class="form-control col-sm-2" value="<?= $dataEdit['expired_antivirus']; ?>" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="anydesk" class="col-sm-offset-1 col-sm-1 control-label">Anydesk</label>
                                    <input type="number" name="anydesk" id="anydesk" class="form-control col-sm-2" value="<?= $dataEdit['anydesk']; ?>" autocomplete="off">

                                    <label for="pass_anydesk" class="col-sm-offset-1 col-sm-1 control-label">Password Anydesk</label>
                                    <input type="text" name="pass_anydesk" id="pass_anydesk" class="form-control col-sm-2" value="<?= $dataEdit['password_anydesk']; ?>" autocomplete="off">
                                </div>
                            </fieldset>
                            <hr>
                            <div class="form-group" align="center">
                                <input type="reset" name="batal" id="batal" value="Batal" class="btn btn-secondary btn-xs">
                                <input type="submit" name="simpan" class="btn btn-info btn-xs" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
