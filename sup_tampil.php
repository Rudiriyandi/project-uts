<?php
require_once 'inc/Koneksi.php';
require_once 'app/Supplier.php';

use App\Supplier;

$sup = new Supplier;
$rows = $sup->tampil();
?>

<h2>Daftar Supplier</h2>

<a href="index.php?hal=sup_input" class="btn">Tambah Supplier</a>

<table>
    <tr>
        <th>ID</th>
        <th>NAMA SUPPLIER</th>
        <th>ALAMAT</th>
        <th>NOMOR TELPON</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_supplier']; ?></td>
        <td><?php echo $row['nama_supplier']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['no_telp']; ?></td>
        <td><a href="index.php?hal=sup_edit&id=<?php echo $row['id_supplier']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=sup_delete&id=<?php echo $row['id_supplier']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
