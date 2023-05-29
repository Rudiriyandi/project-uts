<?php

require_once "inc/Koneksi.php";
require_once "app/Barang.php";

$brg = new App\Barang();

if (isset($_POST['btn_simpan'])) {
    $brg->simpan();
    header("location:index.php?hal=brg_tampil");
}

if (isset($_POST['btn_update'])) {
    $brg->update();
    header("location:index.php?hal=brg_tampil");
}