<?php
    include "../connect.php";

    if(isset($_POST['simpan'])){
        date_default_timezone_set('Asia/Jakarta');
        $nm_file = ($_FILES['foto']['name']);
        $path = ($_FILES['foto']['tmp_name']);
        $tgl = date("YmdHis");
        $ekstensi = pathinfo($nm_file, PATHINFO_EXTENSION);
        if($nm_file == ''){
            $nm_baru = NULL;
          }else{
            $nm_baru = $tgl.".".$ekstensi;
            move_uploaded_file($path, "../files/Laporan Harian IT/$nm_baru");
        }

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

        $insert = "INSERT INTO laporan_it (tanggal, pic, lokasi, user, direct_request, permasalahan, perbaikan, sparepart, harga_sparepart, jenis, keterangan, file, dibuat_oleh, dibuat_pada, dirubah_oleh, dirubah_pada) VALUES
                    ('$tgl', '$pic', '$lokasi', '$user', '$direct_request', '$permasalahan', '$perbaikan', '$sparepart', '$harga_sparepart', '$jenis', '$keterangan', '$nm_baru', '$it', now(), '$it', now())";
        $hasil_ins = mysqli_query($conn, $insert);

        // if ($hasil_ins){
            // header ('Location: index.php?p=add_laporanit');
        // }

    }

    $queryLokasi = mysqli_query($conn, "SELECT * FROM lokasi ORDER BY nm_lokasi ASC");

    $queryPIC = mysqli_query($conn, "SELECT * FROM login WHERE user_aktif = '1' ORDER BY nama ASC");
?>
<section>
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4>Tambah Laporan IT</h4>
                        <?php if(!isset($_GET['bulan']) || !isset($_GET['tahun']) || !isset($_GET['pic'])){ ?>
                            <a href="index.php?p=laporan_it" class="btn btn-info btn-xs"><i class="fa fa-undo"> Kembali</i></a>
                        <?php }else{ ?>
                            <a href="index.php?p=laporan_it&bulan=<?= $_GET['bulan'] ?>&tahun=<?= $_GET['tahun'] ?>&pic=<?= $_GET['pic'] ?>" class="btn btn-info btn-xs"><i class="fa fa-undo"> Kembali</i></a>
                        <?php } ?>
                    </div>
                    <hr>
                    <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-inline mb-3">
                                <label for="tanggal" class=" col-sm-offset-1 col-sm-1 control-label">Tanggal</label>
                                <input type="date" name="tanggal" id="" class="form-control tanggal col-sm-2" placeholder="" required autocomplete="off">

                                <label for="user" class="col-sm-offset-1 col-sm-1 control-label">User</label>
                                <input type="text" name="user" id="name" class="form-control col-sm-2 mr-4" placeholder="" required autocomplete="off">
                            </div>
                            <div class="form-inline mb-3">
                                <label for="foto" class="col-sm-offset-1 col-sm-1 control-label">Foto</label>
                                <input type="file" name="foto" id="foto" accept="image/*" class="form-control col-sm-5">
                            </div>
                            <div class="form-inline mb-3">
                                <label for="direct_request" class="col-sm-offset-1 col-sm-1 control-label">Request By</label>
                                <fieldset class="form-control col-sm-5" >
                                    <input type="radio" name="direct_request" value="Email"> Email&nbsp;
                                    <input type="radio" name="direct_request" value="Google Form"> Google Form&nbsp;
                                    <input type="radio" name="direct_request" value="Personal"> Personal&nbsp;
                                    <input type="radio" name="direct_request" value="Telepon"> Telepon&nbsp;
                                    <input type="radio" name="direct_request" value="WhatsApp"> WhatsApp&nbsp;
                                </fieldset>
                            </div>
                            <div class="form-inline mb-3">
                                <label for="lokasi" class="col-sm-offset-1 col-sm-1 control-label">Lokasi</label>
                                <select name="lokasi" id="lokasi" class="custom-select form-control col-sm-2" required>
                                    <?php while($lokasi=mysqli_fetch_assoc($queryLokasi)){ ?>
                                        <option value="<?= $lokasi['kd_lokasi']; ?>"><?= $lokasi['nm_lokasi']; ?></option>
                                    <?php } ?>
                                </select>

                                <label for="pic" class="col-sm-offset-1 col-sm-1 control-label">PIC</label>
                                <select name="pic" id="pic" class="custom-select col-sm-2 form-control" required>
                                    <?php while($pic=mysqli_fetch_assoc($queryPIC)){ ?>
                                        <option value="<?= $pic['id']; ?>"><?= $pic['nama']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-inline mb-3">
                                <label for="permasalahan" class="col-sm-offset-1 col-sm-1 control-label">Permasalahan</label>
                                <textarea type="text" name="permasalahan" id="name" class="form-control col-sm-5" placeholder="" autocomplete="off"></textarea>

                            </div>
                            <div class="form-inline mb-3">
                                <label for="perbaikan" class="col-sm-offset-1 col-sm-1 control-label">Perbaikan</label>
                                <textarea type="text" name="perbaikan" id="name" class="form-control col-sm-5" placeholder="" autocomplete="off"></textarea>
                            </div>
                            <div class="form-inline mb-3">
                                <label for="sparepart" class="col-sm-offset-1 col-sm-1 control-label">Sparepart</label>
                                <input type="text" name="sparepart" id="name" class="form-control col-sm-2" placeholder="" autocomplete="off">

                                <label for="harga_sparepart" class="col-sm-offset-1 col-sm-1 control-label">Harga Sparepart</label>
                                <input type="number" name="harga_sparepart" id="name" class="form-control col-sm-2" placeholder="" autocomplete="off">
                            </div>
                            <div class="form-inline mb-3">
                                <label for="jenis" class="col-sm-offset-1 col-sm-1 control-label">Jenis Pekerjaan</label>
                                <fieldset class="form-control col-sm-5">
                                    <input type="radio" name="jenis" value="Dokumen Admin"> Dokumen Admin&nbsp;
                                    <input type="radio" name="jenis" value="Hardware"> Hardware&nbsp;
                                    <input type="radio" name="jenis" value="Network"> Network&nbsp;
                                    <input type="radio" name="jenis" value="Software"> Software&nbsp;
                                </fieldset>
                            </div>
                            <div class="form-inline mb-3">
                                <label for="keterangan" class="col-sm-offset-1 col-sm-1 control-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control col-sm-5"></textarea>
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

<!-- framework bootstrap -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">
  <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>

  <script>
$( function() {
  $( "#date" ).datepicker({
    autoclose:true,
    todayHighlight:true,
    format:'yyyy-mm-dd',
    language: 'id'
  });
} );
</script>