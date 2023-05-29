<?php
require_once 'inc/Koneksi.php';
require_once 'app/Barang.php';

$id = $_GET['id'];
$brg = new App\Barang();

$row = $brg->edit($id);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/styleaja.css">
</head>
<body>
<h2>Edit Barang</h2>

<form action="brg_proses.php" method="post">
    <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
    <table>
        <tr>
            <td>NAMA BARANG</td>
            <td><input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>"></td>
        </tr>
        <tr>
            <td>STOK</td>
            <td><input type="text" name="stok" value="<?php echo $row['stok']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA BELI</td>
            <td><input type="text" name="harga_beli" value="<?php echo $row['harga_beli']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA JUAL</td>
            <td><input type="text" name="harga_jual" value="<?php echo $row['harga_jual']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
