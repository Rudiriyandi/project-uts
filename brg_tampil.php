<?php
require_once 'inc/Koneksi.php';
require_once 'app/Barang.php';

use App\Barang;

$brg = new Barang;
$rows = $brg->tampil();
?>

<h2>Daftar Barang</h2>

<a href="index.php?hal=brg_input" class="btn">Tambah Barang</a>

<table>
    <tr>
        <th>ID</th>
        <th>NAMA BARANG</th>
        <th>STOK</th>
        <th>HARGA JUAL</th>
        <th>HARGA BELI</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_barang']; ?></td>
        <td><?php echo $row['nama_barang']; ?></td>
        <td><?php echo $row['stok']; ?></td>
        <td><?php echo $row['harga_jual']; ?></td>
        <td><?php echo $row['harga_beli']; ?></td>
        <td><a href="index.php?hal=brg_edit&id=<?php echo $row['id_barang']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=brg_delete&id=<?php echo $row['id_barang']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
