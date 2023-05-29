<?php
require_once 'inc/Koneksi.php';
require_once 'app/Pembelian.php';

$id = $_GET['id'];

$beli = new App\Pembelian();
$rows = $beli->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=beli_tampil">Kembali</a>
</div>