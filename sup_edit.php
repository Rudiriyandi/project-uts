<?php
require_once 'inc/Koneksi.php';
require_once 'app/Supplier.php';

$id = $_GET['id'];
$sup = new App\Supplier();

$row = $sup->edit($id);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/styleaja.css">
</head>
<body>

<h2>Edit Supplier</h2>

<form action="sup_proses.php" method="post">
    <input type="hidden" name="id_supplier" value="<?php echo $row['id_supplier']; ?>">
    <table>
        <tr>
            <td>NAMA SUPPLIER</td>
            <td><input type="text" name="nama_supplier" value="<?php echo $row['nama_supplier']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>NOMOR TELEPON</td>
            <td><input type="text" name="no_telp" value="<?php echo $row['no_telp']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
