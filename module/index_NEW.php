<!DOCTYPE html>
<head>
    <title>ENC | IT</title>
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
</head>
<body>
    <div id="preloader">
        <div class="loader"> </div>
    </div>

    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <a href="http://ekanuri.com"><img src="../assets/images/logo.png" alt=""></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                        <li class="active"><a href="index.php"><i class="ti-dashboard"></i><span>Home</span></a></li>
                            <li><a href=""> <i class="fa fa-database"></i><span>Master Data</a></span></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Progress IT</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Barang Masuk</a></li>
                                    <li><a href="#">Barang Keluar</a></li>
                                    <li><a href="#">Komputer & Laptop</a></li>
                                    <li><a href="index.php?p=laporan_it">Laporan Harian IT</a></li>
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
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li>
                                <h6>
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
                                </h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <?php include "page.php" ?>
            </div>
        </div>
        <footer>
            <div clas="footer-area">
                <p>Copyright <sup>&copy;</sup>ENC SYSTEM</p>
            </div>
        </footer>
    </div>

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
</body>
</html>
