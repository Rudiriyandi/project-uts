<?php
require_once 'inc/Koneksi.php';
require_once 'app/Barang.php';

$id = $_GET['id'];

$brg = new App\Barang();
$rows = $brg->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=brg_tampil">Kembali</a>
</div>