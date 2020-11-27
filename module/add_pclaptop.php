<?php
    include "../connect.php";

    if(isset($_POST['simpan'])){
        date_default_timezone_set('Asia/Jakarta');
        $nm_file = ($_FILES['tanda_terima']['name']);
        $path = ($_FILES['tanda_terima']['tmp_name']);
        $tgl = date("YmdHis");
        $ekstensi = pathinfo($nm_file, PATHINFO_EXTENSION);
        if($nm_file == ''){
            $nm_baru = NULL;
          }else{
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

        $insert = "INSERT INTO pc_laptop VALUES
                    ('$id_perangkat', '$user', '$email', '$lokasi', '$jenis_perangkat', '$monitor', '$merk', '$spesifikasi', '$unit_bisnis', '$antivirus', '$exp_antivirus', '$anydesk', '$pass_anydesk', '$nm_baru', '$it', now(), '$it', now())";
        $hasil_ins = mysqli_query($conn, $insert);

        // if ($hasil_ins){
            // header ('Location: index.php?p=add_laporanit');
        // }

    }

    $queryKode = mysqli_query($conn, "SELECT MAX(id_perangkat) as id_perangkat FROM pc_laptop");
    $hasilKode = mysqli_fetch_assoc($queryKode);
    $id_urut = $hasilKode['id_perangkat'];
    $noUrut = (int) substr($id_urut, 2, 4);
    $noUrut++;
    $newID = 'PC' . sprintf("%04s", $noUrut);

    $queryLokasi = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");

?>
<section>
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4>Tambah Komputer & Laptop</h4>
                        <a href="index.php?p=pc_laptop" class="btn btn-info btn-xs"><i class="fa fa-undo"> Kembali</i></a>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset class="form-control ">
                                <div class="form-inline mb-3">
                                    <label for="kode" class=" col-sm-offset-1 col-sm-1 control-label">Kode</label>
                                    <input type="text" name="kode" id="kode" class="form-control col-sm-2 " value="<?= $newID; ?>" readonly>

                                    <label for="jenis" class="col-sm-offset-1 col-sm-1 control-label">Jenis Perangkat</label>
                                    <select name="jenis" id="jenis" class="custom-select form-control col-sm-2" required>
                                        <option value="Komputer">Komputer</option>
                                        <option value="Laptop">Laptop</option>
                                    </select>
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="user" class="col-sm-offset-1 col-sm-1 control-label">User</label>
                                    <input type="text" name="user" id="name" class="form-control col-sm-2 "  required autocomplete="off">

                                    <label for="email" class=" col-sm-offset-1 col-sm-1 control-label">Email</label>
                                    <input type="text" name="email" id="" class="form-control email col-sm-2" placeholder="nama@ekanuri.com" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="lokasi" class="col-sm-offset-1 col-sm-1 control-label">Lokasi</label>
                                    <select name="lokasi" id="lokasi" class="custom-select form-control col-sm-2" required>
                                        <?php while($lokasi=mysqli_fetch_assoc($queryLokasi)){ ?>
                                            <option value="<?= $lokasi['kd_lokasi']; ?>"><?= $lokasi['nm_lokasi']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <label for="unit_bisnis" class="col-sm-offset-1 col-sm-1 control-label">Unit Bisnis</label>
                                    <input type="text" name="unit_bisnis" id="unit_bisnis" class="form-control col-sm-2" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="merk" class="col-sm-offset-1 col-sm-1 control-label">Merk</label>
                                    <input type="text" name="merk" class="form-control col-sm-5" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="spesifikasi" class="col-sm-offset-1 col-sm-1 control-label">Spesifikasi</label>
                                    <input type="text" name="spesifikasi" class="form-control col-sm-5" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="monitor" class="col-sm-offset-1 col-sm-1 control-label">Spesifikasi Monitor</label>
                                    <input type="text" name="monitor" class="form-control col-sm-5" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="tanda_terima" class="col-sm-offset-1 col-sm-1 control-label">Tanda Terima</label>
                                    <input type="file" name="tanda_terima" id="tanda_terima" class="form-control col-sm-5">
                                </div>
                            </fieldset>
                            <br>
                            <fieldset class="form-control">
                                <div class="form-inline mb-3">
                                    <label for="antivirus" class="col-sm-offset-1 col-sm-1 control-label">Antivirus</label>
                                    <input type="text" name="antivirus" id="antivirus" class="form-control col-sm-2" autocomplete="off">

                                    <label for="exp_antivirus" class="col-sm-offset-1 col-sm-1 control-label">Expired Antivirus</label>
                                    <input type="date" name="exp_antivirus" id="exp_antivirus" class="form-control col-sm-2" autocomplete="off">
                                </div>

                                <div class="form-inline mb-3">
                                    <label for="anydesk" class="col-sm-offset-1 col-sm-1 control-label">Anydesk</label>
                                    <input type="number" name="anydesk" id="anydesk" class="form-control col-sm-2" autocomplete="off">

                                    <label for="pass_anydesk" class="col-sm-offset-1 col-sm-1 control-label">Password Anydesk</label>
                                    <input type="text" name="pass_anydesk" id="pass_anydesk" class="form-control col-sm-2" autocomplete="off">
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
