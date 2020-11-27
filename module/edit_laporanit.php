<?php
    include "../connect.php";

    if(isset($_POST['simpan'])){
        date_default_timezone_set('Asia/Jakarta');
        $cek_foto = ($_FILES['foto']['name']);
        if ($cek_foto == ''){
            $nm_baru = $_POST['foto_lama'];
        }else{
            $delfoto = $_POST['foto_lama'];
            if(!isset($delfoto)){
                unlink("../files/Laporan Harian IT/$delfoto");
            }
            $nm_file = ($_FILES['foto']['name']);
            $path = ($_FILES['foto']['tmp_name']);
            $tgl = date("YmdHis");
            $ekstensi = pathinfo($nm_file, PATHINFO_EXTENSION);
            $nm_baru = $tgl.".".$ekstensi;
            move_uploaded_file($path, "../files/Laporan Harian IT/$nm_baru");
        }

        $id_laporan = $_POST['id_laporan'];
        $tgl = $_POST['tanggal'];
        $user = $_POST['user'];
        $direct_request = $_POST['direct_request'];
        $lokasi = $_POST['lokasi'];
        $pic = $_POST['pic'];
        $permasalahan = $_POST['permasalahan'];
        $perbaikan = $_POST['perbaikan'];
        $sparepart = $_POST['sparepart'];
        $harga_sparepart = $_POST['harga_sparepart'];
        $jenis = $_POST['jenis'];
        $keterangan = $_POST['keterangan'];
        $it = $_SESSION['nm'];

        $update = "UPDATE laporan_it SET tanggal='$tgl', pic='$pic', lokasi='$lokasi', user='$user', direct_request='$direct_request', permasalahan='$permasalahan', perbaikan='$perbaikan', sparepart='$sparepart', harga_sparepart='$harga_sparepart', jenis='$jenis', keterangan='$keterangan', file='$nm_baru', dirubah_oleh='$it', dirubah_pada=now()
                    WHERE id_laporan = '$id_laporan'";
        $hasil_ins = mysqli_query($conn, $update);

        // if ($hasil_ins){
        //     header ('Location: index.php?p=laporan_it');
        // }

    }

    $queryLokasi = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");

    $queryPIC = mysqli_query($conn, "SELECT * FROM login WHERE user_aktif = '1' ORDER BY nama ASC");

    if(isset($_GET['id'])){
        $id_laporan = base64_decode($_GET['id']);
        $queryEdit = mysqli_query($conn, "SELECT * FROM laporan_it WHERE id_laporan='$id_laporan'");
        $dataEdit = mysqli_fetch_assoc($queryEdit);
    }
?>
<section>
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4>Rubah Laporan IT</h4>
                        <a href="index.php?p=laporan_it&bulan=<?= $_GET['bulan'] ?>&tahun=<?= $_GET['tahun'] ?>&pic=<?= $_GET['pic'] ?>" class="btn btn-info btn-xs"><i class="fa fa-undo"> Kembali</i></a>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_laporan" value="<?= $dataEdit['id_laporan']; ?>">
                            <div class="form-inline mb-3">
                                <label for="tanggal" class=" col-sm-offset-1 col-sm-1 control-label">Tanggal</label>
                                <input type="date" name="tanggal" id="" class="form-control tanggal col-sm-2" placeholder="" required autocomplete="off" value="<?= $dataEdit['tanggal']; ?>">

                                <label for="user" class="col-sm-offset-1 col-sm-1 control-label">User</label>
                                <input type="text" name="user" id="name" class="form-control col-sm-2 mr-4" placeholder="" required autocomplete="off" value="<?= $dataEdit['user']; ?>">
                            </div>
                            <div class="form-inline mb-3">
                                <label for="foto" class="col-sm-offset-1 col-sm-1 control-label">Foto</label>
                                <input type="file" name="foto" id="foto" accept="image/*" class="form-control col-sm-5">
                                <input type="hidden" name="foto_lama" value="<?= $dataEdit['file']; ?>">
                            </div>
                            <div class="form-inline mb-3">
                                <label for="direct_request" class="col-sm-offset-1 col-sm-1 control-label">Request By</label>
                                <fieldset class="form-control col-sm-5" >
                                    <input type="radio" name="direct_request" value="Email" <?php if($dataEdit['direct_request'] == 'Email'){echo "checked=\"checked\"";} ?>> Email&nbsp;
                                    <input type="radio" name="direct_request" value="Google Form" <?php if($dataEdit['direct_request'] == 'Google Form'){echo "checked=\"checked\"";} ?>> Google Form&nbsp;
                                    <input type="radio" name="direct_request" value="Personal" <?php if($dataEdit['direct_request'] == 'Personal'){echo "checked=\"checked\"";} ?>> Personal&nbsp;
                                    <input type="radio" name="direct_request" value="Telepon" <?php if($dataEdit['direct_request'] == 'Telepon'){echo "checked=\"checked\"";} ?>> Telepon&nbsp;
                                    <input type="radio" name="direct_request" value="WhatsApp" <?php if($dataEdit['direct_request'] == 'WhatsApp'){echo "checked=\"checked\"";} ?>> WhatsApp&nbsp;
                                </fieldset>
                            </div>
                            <div class="form-inline mb-3">
                                <label for="lokasi" class="col-sm-offset-1 col-sm-1 control-label">Lokasi</label>
                                <select name="lokasi" id="lokasi" class="custom-select form-control col-sm-2" required>
                                    <?php while($lokasi=mysqli_fetch_assoc($queryLokasi)){ ?>
                                        <option value="<?= $lokasi['kd_lokasi']; ?>" <?php if ($dataEdit['lokasi'] == $lokasi['kd_lokasi']) {echo "selected=\"selected\"";} ?>><?= $lokasi['nm_lokasi']; ?></option>
                                    <?php } ?>
                                </select>

                                <label for="pic" class="col-sm-offset-1 col-sm-1 control-label">PIC</label>
                                <select name="pic" id="pic" class="custom-select col-sm-2 form-control" required>
                                    <?php while($pic=mysqli_fetch_assoc($queryPIC)){ ?>
                                        <option value="<?= $pic['id']; ?>" <?php if ($dataEdit['pic'] == $pic['id']) {echo "selected=\"selected\"";} ?>><?= $pic['nama']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-inline mb-3">
                                <label for="permasalahan" class="col-sm-offset-1 col-sm-1 control-label">Permasalahan</label>
                                <textarea type="text" name="permasalahan" id="name" class="form-control col-sm-5" placeholder="" autocomplete="off"><?= $dataEdit['permasalahan']; ?></textarea>

                            </div>
                            <div class="form-inline mb-3">
                                <label for="perbaikan" class="col-sm-offset-1 col-sm-1 control-label">Perbaikan</label>
                                <textarea type="text" name="perbaikan" id="name" class="form-control col-sm-5" placeholder="" autocomplete="off"><?= $dataEdit['perbaikan']; ?></textarea>
                            </div>
                            <div class="form-inline mb-3">
                                <label for="sparepart" class="col-sm-offset-1 col-sm-1 control-label">Sparepart</label>
                                <input type="text" name="sparepart" id="name" class="form-control col-sm-2" placeholder="" autocomplete="off" value="<?= $dataEdit['sparepart']; ?>">

                                <label for="harga_sparepart" class="col-sm-offset-1 col-sm-1 control-label">Harga Sparepart</label>
                                <input type="number" name="harga_sparepart" id="name" class="form-control col-sm-2" placeholder="" autocomplete="off" value="<?= $dataEdit['harga_sparepart']; ?>">
                            </div>
                            <div class="form-inline mb-3">
                                <label for="jenis" class="col-sm-offset-1 col-sm-1 control-label">Jenis Pekerjaan</label>
                                <fieldset class="form-control col-sm-5">
                                    <input type="radio" name="jenis" value="Dokumen Admin" <?php if($dataEdit['jenis'] == 'Dokumen Admin'){echo "checked=\"checked\"";} ?>> Dokumen Admin&nbsp;
                                    <input type="radio" name="jenis" value="Hardware" <?php if($dataEdit['jenis'] == 'Hardware'){echo "checked=\"checked\"";} ?>> Hardware&nbsp;
                                    <input type="radio" name="jenis" value="Network" <?php if($dataEdit['jenis'] == 'Network'){echo "checked=\"checked\"";} ?>> Network&nbsp;
                                    <input type="radio" name="jenis" value="Software" <?php if($dataEdit['jenis'] == 'Software'){echo "checked=\"checked\"";} ?>> Software&nbsp;
                                </fieldset>
                            </div>
                            <div class="form-inline mb-3">
                                <label for="keterangan" class="col-sm-offset-1 col-sm-1 control-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control col-sm-5"><?= $dataEdit['keterangan']; ?></textarea>
                            </div>
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
