
<?php
    include "../connect.php";

    $query = "SELECT *, a.id as id_note FROM catatan a
              INNER JOIN login b
                ON user = b.id
              ORDER BY a.id DESC";
    $proses = mysqli_query($conn, $query);
    $no = 1;

    // if(isset($_POST['add_note'])){
    //     $isi = $_POST['isi'];
    //     $user = $_SESSION['_id'];

    //     $insert = "INSERT INTO catatan (isi, user, tanggal) VALUES ('$isi', '$user', now())";
    //     $hasil_ins = mysqli_query($conn, $insert);

    //     if ($hasil_ins){
    //         header ("Location: index.php");
    //     }
    // }

    // if(isset($_POST['del_note'])){
    //     $id_note = $_POST['id_note'];

    //     $delete = "DELETE FROM catatan WHERE id = '$id_note'";
    //     $hasil_del = mysqli_query($conn, $delete);

    //     if ($hasil_del){
    //         header("Location: index.php");
    //     }
    // }
?>

<section>

    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Dashboard</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h5>Mengirim pesan ke sesama IT dihalaman ini</h5>
                    </div>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr style="text-align: center;">
                                        <th>No</th>
                                        <th>Catatan</th>
                                        <th>Tanggal</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>

                                <form action="add_catatan.php" method="POST">
                                    <tr class="table-active" >
                                        <td colspan="3"><input type="text" name="isi" class="form-control" required placeholder="ex : Weekly report CCTV sdh saya email ya Pak" autocomplete="off"></td>
                                        <td><input type="submit" name="add_note" class="btn btn-primary btn-sm" value="Tambah Note"></td>
                                    </tr>
                                </form>

                                <?php
                                    while ($data = mysqli_fetch_assoc($proses)){
                                ?>
                                <form action="del_catatan.php" method="POST">
                                    <tr>
                                        <td style="text-align: center; width: 5%;"><?= $no++; ?></td>
                                        <td><strong>@<?= $data['nama']; ?>: </strong><?= $data['isi']; ?></td>
                                        <td style="text-align: center; width: 15%;"><?= $data['tanggal']; ?></td>
                                        <?php if($data['nama'] == $_SESSION['nm']){ ?>
                                            <td style="text-align: center; width: 10%;"><input type="hidden" name="id_note" value="<?= $data['id_note']; ?>"><input type="submit" name = "del_note"  class="btn btn-danger btn-sm" value = "Hapus"></td>
                                        <?php } else { ?>
                                            <td style="text-align: center; width: 10%;">Bukan Pesan Antum</td>
                                        <?php } ?>
                                    </tr>
                                </form>
                                <?php } ?>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
