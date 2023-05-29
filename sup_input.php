<!DOCTYPE html>
<html>
<head>
    <title>Tambah Supplier</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/styleaja.css">
</head>
<body>

<h2>Tambah Supplier</h2>

<form action="sup_proses.php" method="post">
    <table>
        <tr>
            <td>NAMA SUPPLIER</td>
            <td><input type="text" name="nama_supplier"></td>
        </tr>
        <tr>
            <td>ALAMAT
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>NOMOR TELPON
            <td><input type="text" name="no_telp"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>