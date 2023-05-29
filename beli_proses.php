<?php

require_once "inc/Koneksi.php";
require_once "app/Pembelian.php";

$beli = new App\Pembelian();

if (isset($_POST['btn_simpan'])) {
    $beli->simpan();
    header("location:index.php?hal=beli_tampil");
}

if (isset($_POST['btn_update'])) {
    $id_pembelian = $_POST['id_pembelian'];
    $id_barang = $_POST['id_barang'];
    $id_supplier = $_POST['id_supplier'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $harga_total = $_POST['harga_total'];

    $beli->update($id_pembelian, $id_barang, $id_supplier, $tanggal, $jumlah, $harga_total);
    header("location:index.php?hal=beli_tampil");
}