<?php
require_once 'inc/Koneksi.php';
require_once 'app/Penjualan.php';

$id = $_GET['id'];
$jual = new App\Penjualan();

$row = $jual->edit($id);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Penjualan</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/styleaja.css">
</head>
<body>

<h2>Edit Penjualan</h2>

<form action="jual_proses.php" method="post">
    <input type="hidden" name="id_penjualan" value="<?php echo $row['id_penjualan']; ?>">
    <table>
        <tr>
            <td>ID BARANG</td>
            <td><input type="text" name="id_barang" value="<?php echo $row['id_barang']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>"></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA TOTAL</td>
            <td><input type="number" name="harga_total" value="<?php echo $row['harga_total']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
