<?php
include('../sign/koneksi.php');
session_start();
if(!isset($_SESSION['id']) || empty($_SESSION['id']) || !isset($_SESSION['user']) || empty($_SESSION['user'])) {
    echo "<script>window.alert('Anda harus Login dahulu');window.location.href='../index.php';</script>";
}
?>
