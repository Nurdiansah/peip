<?php
    $page = isset($_GET['p']) ? $_GET['p'] : "";

    if ($page == "") {
        include_once "home.php";
    } elseif($page == "user") {
        include_once "user.php";
    } elseif($page == "laporan_it") {
        include_once "laporan_it.php";
    } elseif($page == "add_laporanit") {
        include_once "add_laporanit.php";
    } elseif($page == "edit_laporanit") {
        include_once "edit_laporanit.php";
    } elseif($page == "dtl_laporanit") {
        include_once "dtl_laporanit.php";
    } elseif($page == "pc_laptop") {
        include_once "pc_laptop.php";
    } elseif($page == "dtl_pclaptop") {
        include_once "dtl_pclaptop.php";
    } elseif($page == "add_pclaptop") {
        include_once "add_pclaptop.php";
    } elseif($page == "edit_pclaptop") {
        include_once "edit_pclaptop.php";
    } elseif($page == "spt_lembur") {
        include_once "spt_lembur.php";
    } elseif($page == "dtl_sptlembur") {
        include_once "dtl_sptlembur.php";
    } elseif($page == "dokumen_it") {
        include_once "dokumen_it.php";
    } elseif($page == "app_sptlembur") {
        include_once "app_sptlembur.php";
    } elseif($page == "lokasi") {
        include_once "lokasi.php";
    }
?>
