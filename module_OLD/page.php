<?php
    $page = isset($_GET['p']) ? $_GET['p'] : "";

    if ($page == "") {
        include_once "home.php";
    } elseif($page == "user") {
        include_once "user.php";
    } elseif($page == "dokumen") {
        include_once "dokumen.php";
    } elseif($page == "dtl_dokumen") {
        include_once "dtl_dokumen.php";
    }
?>
