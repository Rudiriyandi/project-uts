<?php
require_once 'inc/Koneksi.php';
require_once 'app/Pembelian.php';

use App\Pembelian;

$beli = new Pembelian;
$rows = $beli->tampil();
?>

<h2>Daftar Pembelian</h2>

<a href="index.php?hal=beli_input" class="btn">Tambah Barang</a>

<table>
    <tr>
        <th>ID PEMBELIAN</th>
        <th>ID BARANG</th>
        <th>ID SUPPLIER</th>
        <th>TANGGAL</th>
        <th>JUMLAH</th>
        <th>HARGA TOTAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_pembelian']; ?></td>
        <td><?php echo $row['id_barang']; ?></td>
        <td><?php echo $row['id_supplier']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['jumlah']; ?></td>
        <td><?php echo $row['harga_total']; ?></td>
        <td><a href="index.php?hal=beli_edit&id=<?php echo $row['id_pembelian']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=beli_delete&id=<?php echo $row['id_pembelian']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
