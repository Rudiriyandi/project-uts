<?php

require_once "inc/Koneksi.php";
require_once "app/Supplier.php";

$sup = new App\Supplier();

if (isset($_POST['btn_simpan'])) {
    $sup->simpan();
    header("location:index.php?hal=sup_tampil");
}

if (isset($_POST['btn_update'])) {
    $sup->update();
    header("location:index.php?hal=sup_tampil");
}