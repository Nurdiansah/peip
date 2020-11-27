<?php
	session_start();
	if(empty($_SESSION['usr']) || $_SESSION['usr'] == '' || !isset($_SESSION['usr'])){
		header("Location: ../login.php");
    };

	include '../connect.php';
	date_default_timezone_set("Asia/Bangkok");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="icon"
      type="image/png"
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ENC | IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">

    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Datatable -->
	<style>
		div.dataTables_wrapper {
            width: 100%;
            margin: 0 auto;
        }
	</style>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <a href="http://ekanuri.com" target="_blank"><img src="../assets/images/logo.png" alt="logo" height="50%" width="60%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <?php if($_SESSION['lvl'] == '1'){ ?>
                                <li class="active"><a href="index.php"><i class="ti-dashboard"></i><span>Home</span></a></li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-thumbs-o-up"></i><span>Approval</span></a>
                                    <ul class="collapse">
                                        <li><a href="#">Cuti Tahunan</a></li>
                                        <li><a href="index.php?p=app_sptlembur">SPT & Lembur</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-database"></i><span>Master Data</span></a>
                                    <ul class="collapse">
                                        <li><a href="index.php?p=dokumen_it">Dokumen IT</a></li>
                                        <li><a href="#">Topologi</a></li>
                                        <li><a href="index.php?p=lokasi">Lokasi</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Progress IT</span></a>
                                    <ul class="collapse">
                                        <li><a href="#">Barang Masuk</a></li>
                                        <li><a href="#">Barang Keluar</a></li>
                                        <li><a href="#">Cuti Tahunan</a></li>
                                        <li><a href="index.php?p=pc_laptop">Komputer & Laptop</a></li>
                                        <li><a href="index.php?p=laporan_it">Laporan Harian IT</a></li>
                                        <li><a href="index.php?p=spt_lembur">SPT & Lembur</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>User Management</span></a>
                                    <ul class="collapse">
                                        <li data-toggle="modal" data-target="#ubah_password"><a href="#ubah_password">Ubah Password</a></li>
                                        <li><a href="index.php?p=user">Kelola User</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="../logout.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a>
                                </li>
                            <?php }else{ ?>
                                <li class="active"><a href="index.php"><i class="ti-dashboard"></i><span>Home</span></a></li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-database"></i><span>Master Data</span></a>
                                    <ul class="collapse">
                                        <li><a href="index.php?p=dokumen_it">Dokumen IT</a></li>
                                        <li><a href="#">Topologi</a></li>
                                        <li><a href="index.php?p=lokasi">Lokasi</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Progress IT</span></a>
                                    <ul class="collapse">
                                        <li><a href="#">Barang Masuk</a></li>
                                        <li><a href="#">Barang Keluar</a></li>
                                        <li><a href="#">Cuti Tahunan</a></li>
                                        <li><a href="index.php?p=pc_laptop">Komputer & Laptop</a></li>
                                        <li><a href="index.php?p=laporan_it">Laporan Harian IT</a></li>
                                        <li><a href="index.php?p=spt_lembur">SPT & Lembur</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>User Management</span></a>
                                    <ul class="collapse">
                                        <li data-toggle="modal" data-target="#ubah_password"><a href="#ubah_password">Ubah Password</a></li>
                                        <li><a href="index.php?p=user">Kelola User</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="../logout.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area " style="background-color: darkblue; color: white;">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <h5>IT, <?= $_SESSION['nm'] ?>!</h5>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li>
                                <h5>
                                    <div class="date">
                                        <script text='text/javascript'>
                                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                            var date = new Date();
                                            var day = date.getDate();
                                            var month = date.getMonth();
                                            var thisDay = date.getDay(),
                                                thisDay = myDays[thisDay];
                                            var yy = date.getYear();
                                            var year = (yy < 1000) ? yy + 1900 : yy;
                                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                        </script>
                                    </div>
                                </h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

		<div class="main-content-inner">
            <!-- Content Header (Page header) -->
            <?php include "page.php"; ?>
        </div>
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Copyright <sup>&copy;</sup>ENC SYSTEM</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="../assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="../assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>

    <!-- data tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> </script>

    <script>
        $(document).ready(function() {
            $('#table-dtScrollX').DataTable({
                scrollX: true,
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#table-dtNormal').DataTable();
        });
    </script>

    <div id="ubah_password" class="modal fade">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ubah Password <strong><?= $_SESSION['nm']; ?></strong></h5>
				</div>
				<div class="modal-body">
					<form method="POST" action="ubah_password.php">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control" value="<?= $_SESSION['usr']; ?>" placeholder="Username" readonly>
						</div>
						<div class="form-group">
							<label for="pass">Password Baru</label>
							<input type="password" name="pass" id="pass" class="form-control" placeholder="Password Baru" required autocomplete="off" autofocus>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
						<input name="ubah_pass" type="submit" class="btn btn-info btn-xs" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>
