<?php
require_once 'inc/Koneksi.php';
require_once 'app/Penjualan.php';

$id = $_GET['id'];

$jual = new App\Penjualan();
$rows = $jual->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=jual_tampil">Kembali</a>
</div>