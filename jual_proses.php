<?php

require_once "inc/Koneksi.php";
require_once "app/Penjualan.php";

$jual = new App\Penjualan();

if (isset($_POST['btn_simpan'])) {
    $jual->simpan();
    header("location:index.php?hal=jual_tampil");
}

if (isset($_POST['btn_update'])) {
    $id_pembelian = $_POST['id_penjualan'];
    $id_barang = $_POST['id_barang'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $harga_total = $_POST['harga_total'];

    $jual->update($id_penjualan, $id_barang, $tanggal, $jumlah, $harga_total);
    header("location:index.php?hal=jual_tampil");
}