<?php
require_once 'inc/Koneksi.php';
require_once 'app/Penjualan.php';

use App\Penjualan;

$jual = new Penjualan;
$rows = $jual->tampil();
?>

<h2>Daftar Penjualan</h2>

<a href="index.php?hal=jual_input" class="btn">Tambah Transaksi</a>

<table>
    <tr>
        <th>ID PENJUALAN</th>
        <th>ID BARANG</th>
        <th>TANGGAL</th>
        <th>JUMLAH</th>
        <th>HARGA TOTAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_penjualan']; ?></td>
        <td><?php echo $row['id_barang']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['jumlah']; ?></td>
        <td><?php echo $row['harga_total']; ?></td>
        <td><a href="index.php?hal=jual_edit&id=<?php echo $row['id_penjualan']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=jual_delete&id=<?php echo $row['id_penjualan']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
