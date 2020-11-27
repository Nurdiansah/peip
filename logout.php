<?php
    session_start();
    unset($_SESSION['_id']);
    unset($_SESSION['usr']);
    unset($_SESSION['nm']);
    unset($_SESSION['lvl']);
    session_destroy();
    header("Location: login.php");
    exit;
?>
