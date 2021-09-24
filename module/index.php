<?php
	session_start();
	if(empty($_SESSION['pengguna']) || $_SESSION['pengguna'] == '' || !isset($_SESSION['pengguna'])){
		header("Location: ../logout.php");
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
    <title>PT. Pelayaran Ekanuri Indra Pratama</title>
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
    <style>
		.huruf_besar{
			text-transform: uppercase;
		}
		.huruf_kecil{
			text-transform: lowercase;
		}
		.awal_besar{
			text-transform: capitalize;
		}
	</style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- <img src="../assets/images/peip.png" alt="logo" height="70px" width="70px"> -->
                <a href="http://ekanuri.com" target="_blank"><img src="../assets/images/logoenc_NEW.jpg" alt="logo" height="115px" width="115px"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active"><a href="index.php"><i class="ti-home"></i><span>Home</span></a></li>
                            <li><a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-truck"></i><span>Operation Dept</span></a>
                                <ul class="collapse">
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0002'); ?>">Gas Nuri Arizona</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0003'); ?>">Certificate</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0004'); ?>">Statutory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0005'); ?>">Class</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0006'); ?>">Cash Advance Master Operational</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0007'); ?>">Crew Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0008'); ?>">Vessel Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0009'); ?>">P&I</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0010'); ?>">H&M</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0011'); ?>">Noon Report</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0012'); ?>">Deck Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0013'); ?>">Monthly Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0014'); ?>">List Inventory Deck</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0015'); ?>">Operation Template</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0016'); ?>">Master Cable Voyage</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0017'); ?>">Agency</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0018'); ?>">Data Agency</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0019'); ?>">Invoice Agency</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0020'); ?>">Fresh Water</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0021'); ?>">Quotation Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0022'); ?>">Vetting Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0023'); ?>">PSA</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0024'); ?>">PSC</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0025'); ?>">Class Survey</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0026'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0027'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0028'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0029'); ?>">Spesial Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0030'); ?>">Material Requestion Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0031'); ?>">Time Sheet Charter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0032'); ?>">Enc Rhayden</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0033'); ?>">Certificate</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0034'); ?>">Statutory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0035'); ?>">Class</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0036'); ?>">Cash Advance Master Operational</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0037'); ?>">Crew Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0038'); ?>">Vessel Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0039'); ?>">P&I</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0040'); ?>">H&M</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0041'); ?>">Daily Report</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0042'); ?>">Deck Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0043'); ?>">Monthly Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0044'); ?>">List Inventory Deck</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0045'); ?>">Operation Template</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0046'); ?>">Agency</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0047'); ?>">Data Agency</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0048'); ?>">Invoice Agency</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0049'); ?>">Fresh Water</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0050'); ?>">Quotation Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0051'); ?>">Vetting Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0052'); ?>">OVID</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0053'); ?>">PSC</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0054'); ?>">CMID</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0055'); ?>">Class Survey</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0056'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0057'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0058'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0059'); ?>">Spesial Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0060'); ?>">Material Requestion Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0061'); ?>">Time Sheet Charter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0062'); ?>">Mitra Anugerah 32</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0063'); ?>">Certificate</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0064'); ?>">Statutory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0065'); ?>">Class</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0066'); ?>">Cash Advance Master Operational</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0067'); ?>">Crew Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0068'); ?>">Vessel Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0069'); ?>">P&I</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0070'); ?>">H&M</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0071'); ?>">Daily Report</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0072'); ?>">Deck Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0073'); ?>">Monthly Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0074'); ?>">List Inventory Deck</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0075'); ?>">Operation Template</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0076'); ?>">Agency</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0077'); ?>">Data Agency</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0078'); ?>">Invoice Agency</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0079'); ?>">Fresh Water</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0080'); ?>">Quotation Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0081'); ?>">Vetting Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0082'); ?>">PSA</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0083'); ?>">PSC</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0084'); ?>">CMID</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0085'); ?>">Class Survey</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0086'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0087'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0088'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0089'); ?>">Spesial Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0090'); ?>">Material Requestion Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0091'); ?>">Time Sheet Charter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0092'); ?>">Mitra Anugerah 35</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0093'); ?>">Certificate</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0094'); ?>">Statutory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0095'); ?>">Class</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0096'); ?>">Cash Advance Master Operational</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0097'); ?>">Crew Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0098'); ?>">Vessel Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0099'); ?>">P&I</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0100'); ?>">H&M</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0101'); ?>">Daily Report</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0102'); ?>">Deck Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0103'); ?>">Monthly Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0104'); ?>">List Inventory Deck</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0105'); ?>">Operation Template</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0106'); ?>">Agency</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0107'); ?>">Data Agency</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0108'); ?>">Invoice Agency</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0109'); ?>">Fresh Water</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0110'); ?>">Quotation Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0111'); ?>">Vetting Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0112'); ?>">PSA</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0113'); ?>">PSC</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0114'); ?>">CMID</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0115'); ?>">Class Survey</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0116'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0117'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0118'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0119'); ?>">Spesial Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0120'); ?>">Material Requestion Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0121'); ?>">Time Sheet Charter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0122'); ?>">Enc Kalijapat 2</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0123'); ?>">Certificate</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0124'); ?>">Statutory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0125'); ?>">Class</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0126'); ?>">Crew Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0127'); ?>">Vessel Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0128'); ?>">P&I</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0129'); ?>">H&M</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0130'); ?>">Daily Operation Log</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0131'); ?>">Deck Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0132'); ?>">Monthly Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0133'); ?>">List Inventory</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0134'); ?>">Operation Template</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0135'); ?>">Agency</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0136'); ?>">Data Agency</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0137'); ?>">Invoice Agency</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0138'); ?>">Fresh Water</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0139'); ?>">Quotation Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0140'); ?>">Class Survey</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0141'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0142'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0143'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0144'); ?>">Spesial Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0145'); ?>">Material Requesition Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0146'); ?>">Time Sheet Charter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0147'); ?>">Enc Kalijapat 3</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0148'); ?>">Certificate</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0149'); ?>">Time Sheet Charter</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0150'); ?>">Statutory</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0151'); ?>">Crew Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0152'); ?>">Vessel Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0153'); ?>">P&I</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0154'); ?>">H&M</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0155'); ?>">Daily Operation Log</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0156'); ?>">Deck Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0157'); ?>">Monthly Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0158'); ?>">List Inventory</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0159'); ?>">Operation Template</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0160'); ?>">Agency</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0161'); ?>">Data Agency</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0162'); ?>">Invoice Agency</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0163'); ?>">Fresh Water</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0164'); ?>">Quotation Operation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0165'); ?>">Class Survey</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0166'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0167'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0168'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0169'); ?>">Spesial Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('OPS0170'); ?>">Material Requesition Operation</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-anchor"></i><span>Crewing Dept</span></a>
                                <ul class="collapse">
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0002'); ?>">Gas Nuri Arizona</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0003'); ?>">Database Crew</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0004'); ?>">PKL</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0005'); ?>">Licence</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0006'); ?>">Certificate Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0007'); ?>">Matrix Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0008'); ?>">MCU</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0009'); ?>">Fix Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0010'); ?>">Payroll</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0011'); ?>">Crew Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0012'); ?>">BPJS</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0013'); ?>">BPJSTKU</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0014'); ?>">Swasta</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0015'); ?>">Assesment</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0016'); ?>">Hospital Agreement</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0017'); ?>">Update Regulation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0018'); ?>">Crew Training</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0019'); ?>">Hand Over Report</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0020'); ?>">Enc Rhayden</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0021'); ?>">Database Crew</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0022'); ?>">PKL</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0023'); ?>">Licence</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0024'); ?>">Certificate Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0025'); ?>">Matrix Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0026'); ?>">MCU</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0027'); ?>">Fix Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0028'); ?>">Payroll</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0029'); ?>">Crew Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0030'); ?>">BPJS</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0031'); ?>">BPJSTKU</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0032'); ?>">Swasta</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0033'); ?>">Assesment</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0034'); ?>">Hospital Agreement</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0035'); ?>">Update Regulation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0036'); ?>">Crew Training</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0037'); ?>">Hand Over Report</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0038'); ?>">Mitra Anugerah 32</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0039'); ?>">Database Crew</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0040'); ?>">PKL</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0041'); ?>">Licence</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0042'); ?>">Certificate Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0043'); ?>">Matrix Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0044'); ?>">MCU</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0045'); ?>">Fix Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0046'); ?>">Payroll</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0047'); ?>">Crew Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0048'); ?>">BPJS</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0049'); ?>">BPJSTKU</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0050'); ?>">Swasta</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0051'); ?>">Assesment</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0052'); ?>">Hospital Agreement</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0053'); ?>">Update Regulation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0054'); ?>">Crew Training</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0055'); ?>">Hand Over Report</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0056'); ?>">Mitra Anugerah 35</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0057'); ?>">Database Crew</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0058'); ?>">PKL</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0059'); ?>">Licence</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0060'); ?>">Certificate Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0061'); ?>">Matrix Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0062'); ?>">MCU</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0063'); ?>">Fix Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0064'); ?>">Payroll</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0065'); ?>">Crew Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0066'); ?>">BPJS</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0067'); ?>">BPJSTKU</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0068'); ?>">Swasta</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0069'); ?>">Assesment</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0070'); ?>">Hospital Agreement</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0071'); ?>">Update Regulation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0072'); ?>">Crew Training</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0073'); ?>">Hand Over Report</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0074'); ?>">Enc Kalijapat 2</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0075'); ?>">Database Crew</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0076'); ?>">PKL</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0077'); ?>">Licence</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0078'); ?>">Certificate Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0079'); ?>">Matrix Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0080'); ?>">MCU</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0081'); ?>">Fix Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0082'); ?>">Payroll</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0083'); ?>">Crew Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0084'); ?>">BPJS</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0085'); ?>">BPJSTKU</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0086'); ?>">Swasta</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0087'); ?>">Assesment</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0088'); ?>">Hospital Agreement</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0089'); ?>">Update Regulation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0090'); ?>">Crew Training</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0091'); ?>">Hand Over Report</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0092'); ?>">Enc Kalijapat 3</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0093'); ?>">Database Crew</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0094'); ?>">PKL</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0095'); ?>">Licence</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0096'); ?>">Certificate Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0097'); ?>">Matrix Crew</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0098'); ?>">MCU</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0099'); ?>">Fix Rotation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0100'); ?>">Payroll</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0101'); ?>">Crew Insurance</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0102'); ?>">BPJS</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0103'); ?>">BPJSTKU</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0104'); ?>">Swasta</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0105'); ?>">Assesment</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0106'); ?>">Hospital Agreement</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0107'); ?>">Update Regulation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0108'); ?>">Crew Training</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('CRW0109'); ?>">Hand Over Report</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-building-o"></i><span>General Affair Dept</span></a>
                                <ul class="collapse">
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0002'); ?>">Report</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0003'); ?>">Petty Cash</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0004'); ?>">Maintenance Building</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0005'); ?>">Office Purpose</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0006'); ?>">Vehicle</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0007'); ?>">Maintenance</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0008'); ?>">Driver Database</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0009'); ?>">Usage Permit</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0010'); ?>">Equipment Maintenance</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0011'); ?>">Maintenance PC / Laptop</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0012'); ?>">Payment Office</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0013'); ?>">List Inventory</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0014'); ?>">Electrical</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0015'); ?>">Hardware</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0016'); ?>">First Aid</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0017'); ?>">Letter Out</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0018'); ?>">Letter In</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0019'); ?>">Transmital Receipt</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0020'); ?>">Document Check List</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0021'); ?>">Material Requistion Office</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0022'); ?>">Receptionist</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0023'); ?>">Visitor Log</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0024'); ?>">Minutes Of Meeting</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0025'); ?>">Security</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0026'); ?>">Office Boy</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('GA0027'); ?>">Scaning Document</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-male"></i><span>HR Dept</span></a>
                                <ul class="collapse">
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0002'); ?>">Employee Database</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0003'); ?>">Document Employee</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0004'); ?>">Payroll</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0005'); ?>">Permit Bussiness Trip</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0006'); ?>">Air Ticket</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0007'); ?>">Hotel & Accomodation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0035'); ?>">Surat Perintah Tugas</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0008'); ?>">Personal Report</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0009'); ?>">Assesment</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0010'); ?>">Insurance</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0011'); ?>">BPJS</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0013'); ?>">BPJSTKU</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0012'); ?>">Swasta</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0014'); ?>">TAX</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0015'); ?>">SPT Tahunan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0016'); ?>">Recruitment</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0017'); ?>">Employment Requistion</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0018'); ?>">CV & Data Candidate</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0019'); ?>">Employee Status</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0020'); ?>">Data Warning Employee</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0021'); ?>">Warning Letter 1</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0022'); ?>">Warning Letter 2</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0023'); ?>">Warning Letter 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0024'); ?>">Shore Employee Certificate (Hold)</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0025'); ?>">Update Regulation Kemenaker</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0026'); ?>">Update Regulation Company</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0027'); ?>">Absence</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0028'); ?>">Over Time</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0029'); ?>">Bonus</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0030'); ?>">THR</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0031'); ?>">KPI</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0032'); ?>">Paklaring Employee</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0033'); ?>">Legal</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0034'); ?>">MCU Employee</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0036'); ?>">Training Matrix Employee</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HR0037'); ?>">Status Keluarga Database Employee</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" aria-expanded="true"><i class="ti-money"></i><span>Finance</span></a>
                                <ul class="collapse">
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0002'); ?>">Finance</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0003'); ?>">Cashier</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0004'); ?>">Cash Advance</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0005'); ?>">Petty Cash</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0006'); ?>">Budgeting</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0007'); ?>">COA</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0008'); ?>">Transaction Code</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0009'); ?>">Account Receiveable</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0010'); ?>">Accounting</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0011'); ?>">TAX</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0012'); ?>">SKTD</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0013'); ?>">Actual Cost Report</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0014'); ?>">Procurement</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0015'); ?>">Data Vendor</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0016'); ?>">Material Requistion</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0017'); ?>">Purchase Order</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0018'); ?>">Work Order</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0019'); ?>">PPN / PPH</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0020'); ?>">Delivery Order</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0021'); ?>">Schedule Payment</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0022'); ?>">Pending Payment</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('FIN0023'); ?>">Agreement Vendor</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-phone"></i><span>Marketing Dept</span></a>
                                <ul class="collapse">
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0002'); ?>">Ship Particulars Owned By PEIP</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0003'); ?>">Gas Nuri Arizona</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0004'); ?>">Enc Rhayden</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0005'); ?>">Mitra Anugerah 32</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0006'); ?>">Mitra Anugerah 35</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0007'); ?>">Enc Kalijapat 2</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0008'); ?>">Enc Kalijapat 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0009'); ?>">Q88 Owned By PEIP</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0010'); ?>">Gas Nuri Arizona</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0011'); ?>">Ship Particulars & Q88 Own By Others</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0012'); ?>">Off Shore Support Vessel</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0013'); ?>">AHTS</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0014'); ?>">AHT</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0015'); ?>">PVS</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0016'); ?>">Utility</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0017'); ?>">Crew Boat / Speed Boat</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0018'); ?>">Accomodation Work Barge</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0019'); ?>">Survey Boat</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0020'); ?>">Tanker</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0021'); ?>">Product Tanker</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0022'); ?>">Chemical Tanker</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0023'); ?>">LPG Tanker</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0024'); ?>">LNG Tanker</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0025'); ?>">Crude OIL Tanker</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0026'); ?>">LCT</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0027'); ?>">Self Propeller OIL Barge</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0028'); ?>">TUG Boat</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0029'); ?>">Barge</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0030'); ?>">ASD TUG</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0031'); ?>">RIG</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0032'); ?>">CARGO</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0033'); ?>">Others</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0034'); ?>">Tender Process</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0035'); ?>">Tender Anouncement</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0036'); ?>">Tender Invitation</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0037'); ?>">Tender Registration</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0038'); ?>">Tender Pre-Qualification</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0039'); ?>">Tender Evaluation PO</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0040'); ?>">Tender Pre-Bid</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0041'); ?>">Minutes Of Meeting</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0042'); ?>">Tender Document</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0043'); ?>">Tender Subimission</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0044'); ?>">Tender Awarded</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0045'); ?>">Project Plan</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0046'); ?>">Vessel Requirement</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0047'); ?>">End User / Clients</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0048'); ?>">Project Location</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0049'); ?>">Contract Duration</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0050'); ?>">Contract Value</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0051'); ?>">Project Awarded</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0052'); ?>">Awarded Letter</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0053'); ?>">SPK</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0054'); ?>">Contract</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0055'); ?>">Update Civd</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0056'); ?>">List Bid Bond and Performance Bond</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0057'); ?>">List Project On Going</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0058'); ?>">Certificate ON/OFF Hire</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0059'); ?>">Process Invoice</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0060'); ?>">Gas Nuri Arizona</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0061'); ?>">Time Sheet Approval By User</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0062'); ?>">Enc Rhayden</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0063'); ?>">Time Sheet Approval By User</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0064'); ?>">Mitra Anugerah 32</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0065'); ?>">Time Sheet Approval By User</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0066'); ?>">Mitra Anugerah 35</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0067'); ?>">Time Sheet Approval By User</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0068'); ?>">Enc Kalijapat 2</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0069'); ?>">Time Sheet Approval By User</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0070'); ?>">Enc Kalijapat 3</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0071'); ?>">Time Sheet Approval By User</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0072'); ?>">Vendor Database</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('MKT0073'); ?>">Others</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-medkit"></i><span>QHSE Dept</span></a>
                                <ul class="collapse">
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0002'); ?>">HSE Plan</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0003'); ?>">Policy</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0004'); ?>">SOP Company</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0005'); ?>">Drill Schedule</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0006'); ?>">Training</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0007'); ?>">I Care</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0008'); ?>">Hospital Agreement</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0009'); ?>">Training Matrix</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0010'); ?>">List APD</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0011'); ?>">Certificate CSMS List</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0012'); ?>">KPI</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0013'); ?>">DOC Preparation</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0014'); ?>">SMC Preparation</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0015'); ?>">ISO</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0016'); ?>">Structural Organization Update</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0017'); ?>">Scope Of Work Organization</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0018'); ?>">Update Form Company</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0019'); ?>">Management Of Change</a></li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('HSE0020'); ?>">Hand Over Report</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php?p=dokumen&folder=<?= base64_encode('IT0001'); ?>"><i class="fa fa-desktop"></i><span>Information Technology</span></a>
                            </li>
                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0001'); ?>"><i class="fa fa-cog"></i><span>Technical</span></a>
                                <ul class="collapse">
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0002'); ?>">Gas Nuri Arizona</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0003'); ?>">Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0004'); ?>">Noon Report</a>
                                                        <ul>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0005'); ?>">2019</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0006'); ?>">2020</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0007'); ?>">2021</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0008'); ?>">Monthly Report</a>
                                                        <ul>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0009'); ?>">2019</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0010'); ?>">2020</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0011'); ?>">2021</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0012'); ?>">Engine Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0013'); ?>">Deck Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0014'); ?>">Defect Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0015'); ?>">Class Status Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0016'); ?>">Vessel Maintenance Inspection</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0017'); ?>">Master Cable</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0018'); ?>">2018</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0019'); ?>">2019</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0020'); ?>">2020</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0021'); ?>">2021</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0022'); ?>">Equipment Equipment Certificates</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0023'); ?>">Fuel Control</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0024'); ?>">Pre-Arrival Notification</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0025'); ?>">Vetting</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0026'); ?>">PSA</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0027'); ?>">Invoices Tracking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0028'); ?>">Running Store</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0029'); ?>">Critical Spareparts</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0030'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0031'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0032'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0033'); ?>">Special Survey</a>
                                                        <ul>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0034'); ?>">Bid Docking</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0035'); ?>">Docking Agreement</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0036'); ?>">Docking List</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0037'); ?>">Docking Time Frame</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0038'); ?>">Docking Report</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0039'); ?>">Docking Invoices</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0040'); ?>">Docking Budget vs Actual</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0041'); ?>">Docking Presentation</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0042'); ?>">Inventory</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0043'); ?>">Deck Inventory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0044'); ?>">Engine INventory</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0045'); ?>">FO Analysis</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0046'); ?>">LO Analysis</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0047'); ?>">Enc Rhayden</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0048'); ?>">Vetting Ovid</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0049'); ?>">Equipment Certificates</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0050'); ?>">Fuel Control</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0051'); ?>">Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0052'); ?>">Daily Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0053'); ?>">Monthly Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0054'); ?>">ICare</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0055'); ?>">Defect Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0056'); ?>">Class Status Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0057'); ?>">Vessel Maintenance Inspection</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0058'); ?>">Invoices Tracking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0059'); ?>">Running Store</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0060'); ?>">Critical Spareparts</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0061'); ?>">Pemantauan Kesehatan Crew</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0062'); ?>">Logbook Personel</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0063'); ?>">Form Pemantauan Kesehatan</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0064'); ?>">Virus Outbreak Report</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0065'); ?>">PMS</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0066'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0067'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0068'); ?>">Intermediate Survey</a>
                                                        <ul>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0069'); ?>">Bid Docking</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0070'); ?>">Docking Agreement</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0071'); ?>">Docking List</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0072'); ?>">Docking Time Frame</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0073'); ?>">Docking Report</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0074'); ?>">Docking Invoices</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0075'); ?>">Docking Budget vs Actual</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0076'); ?>">Docking Presentation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0077'); ?>">Special Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0078'); ?>">Inventory</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0079'); ?>">Deck Inventory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0080'); ?>">Engine Inventory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0081'); ?>">FO Analysis</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0082'); ?>">LO Analysis</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0083'); ?>">Mitra Anugerah 32</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0084'); ?>">Equipment Certificates</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0085'); ?>">Timesheet</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0086'); ?>">Reports</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0087'); ?>">Vessel Daily Report</a>
                                                        <ul>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0088'); ?>">2019</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0089'); ?>">2020</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0090'); ?>">2021</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0091'); ?>">2022</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0092'); ?>">Monthly Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0093'); ?>">Defect Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0094'); ?>">Class Status Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0095'); ?>">Vessel Maintenance Inspection</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0096'); ?>">PMS</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0097'); ?>">Matrix Maintenance</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0098'); ?>">Marine Assurance</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0099'); ?>">Invoice Tracking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0100'); ?>">Running Store</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0101'); ?>">Critical Spareparts</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0102'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0103'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0104'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0105'); ?>">Special Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0106'); ?>">Inventory</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0107'); ?>">Deck Inventory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0108'); ?>">Engine Inventory</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0109'); ?>">FO Analysis</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0110'); ?>">LO Analysis</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0111'); ?>">Mitra Anugerah 35</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0112'); ?>">Equipment Certificates</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0113'); ?>">Timesheet</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0114'); ?>">Reports</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0115'); ?>">Vessel Daily Report</a>
                                                        <ul>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0116'); ?>">2019</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0117'); ?>">2020</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0118'); ?>">2021</a></li>
                                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0119'); ?>">2022</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0120'); ?>">Monthly Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0121'); ?>">Defect Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0122'); ?>">Class Status Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0123'); ?>">Vessel Maintenance Inspection</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0124'); ?>">PMS</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0125'); ?>">Matrix Maintenance</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0126'); ?>">Marine Assurance</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0127'); ?>">Invoice Tracking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0128'); ?>">Running Store</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0129'); ?>">Critical Spareparts</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0130'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0131'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0132'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0133'); ?>">Special Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0134'); ?>">Inventory</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0135'); ?>">Deck Inventory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0136'); ?>">Engine Inventory</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0137'); ?>">FO Analysis</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0138'); ?>">LO Analysis</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0139'); ?>">Enc Kalijapat 2</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0140'); ?>">Eqiuipment Certificates</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0141'); ?>">Timesheet</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0142'); ?>">2019</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0143'); ?>">2020</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0144'); ?>">2021</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0145'); ?>">2022</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0146'); ?>">2023</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0147'); ?>">PMS</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0148'); ?>">Invoice Tracking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0149'); ?>">Running Store</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0150'); ?>">Critical Spareparts</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0151'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0152'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0153'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0154'); ?>">Special Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0155'); ?>">Class Status Report</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0156'); ?>">Vessel Maintenance Inspection</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0157'); ?>">Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0158'); ?>">Daily Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0159'); ?>">Handover Report</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0160'); ?>">Inventory</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0161'); ?>">Deck Inventory</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0162'); ?>">Engine Inventory</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0163'); ?>">FO Analysis</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0164'); ?>">LO Analysis</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0165'); ?>">Enc Kalijapat 3</a>
                                        <ul>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0166'); ?>">Eqiuipment Certificates</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0167'); ?>">Timesheet</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0168'); ?>">2019</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0169'); ?>">2020</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0170'); ?>">2021</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0171'); ?>">2022</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0172'); ?>">2023</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0173'); ?>">PMS</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0174'); ?>">Invoice Tracking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0175'); ?>">Running Store</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0176'); ?>">Critical Spareparts</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0177'); ?>">Docking</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0178'); ?>">Annual Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0179'); ?>">Intermediate Survey</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0180'); ?>">Special Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0181'); ?>">Vessel Maintenance Inspection</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0182'); ?>">Report</a>
                                                <ul>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0183'); ?>">Daily Report</a></li>
                                                    <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0184'); ?>">Handover Report</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0185'); ?>">Inventory</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0186'); ?>">FO Analysis</a></li>
                                            <li><a href="index.php?p=dokumen&folder=<?= base64_encode('TEC0187'); ?>">LO Analysis</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>User Management</span></a>
                                <ul class="collapse">
                                    <li data-toggle="modal" data-target="#ubah_password"><a href="#ubah_password">Ubah Password</a></li>
                                    <?php if ($_SESSION['pengguna'] == 'it') { ?>
                                        <li><a href="index.php?p=user">Kelola User</a></li>
                                    <?php } ?>
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
                            <h5><?= $_SESSION['nm_pengguna'] ?></h5>
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
					<h5 class="modal-title">Ubah Password <strong><?= $_SESSION['nm_pengguna']; ?></strong></h5>
				</div>
				<div class="modal-body">
					<form method="POST" action="ubah_password.php">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control" value="<?= $_SESSION['pengguna']; ?>" placeholder="Username" readonly>
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
