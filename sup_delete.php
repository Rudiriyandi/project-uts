<?php
require_once 'inc/Koneksi.php';
require_once 'app/Supplier.php';

$id = $_GET['id'];

$sup = new App\Supplier();
$rows = $sup->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=sup_tampil">Kembali</a>
</div>