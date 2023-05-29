<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/styleaja.css">
</head>
<body>

<h2>Tambah Barang</h2>

<form action="brg_proses.php" method="post">
    <table>
        <tr>
            <td>NAMA BARANG</td>
            <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td>STOK</td>
            <td><input type="text" name="stok"></td>
        </tr>
        <tr>
            <td>HARGA JUAL</td>
            <td><input type="text" name="harga_jual"></td>
        </tr>
        <tr>
            <td>HARGA BELI
            <td><input type="text" name="harga_beli"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>