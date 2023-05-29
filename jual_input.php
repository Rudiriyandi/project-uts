<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transkaksi</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/styleaja.css">
</head>
<body>

<h2>Tambah Penjualan</h2>

<form action="jual_proses.php" method="post">
    <table>
    <tr>
            <td>ID BARANG</td>
            <td><input type="text" name="id_barang"></td>
        </tr> 
            <td>TANGGAL</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" name="jumlah"></td>
        </tr>
        <tr>
            <td>HARGA TOTAL</td>
            <td><input type="number" name="harga_total"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>