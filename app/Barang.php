<?php

namespace App;

use Inc\Koneksi;

class Barang extends Koneksi {
    public function tampil() {
        $sql = "SELECT * FROM barang";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan() {
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga_jual = $_POST['harga_jual'];
        $harga_beli = $_POST['harga_beli'];

        $sql = "INSERT INTO barang (nama_barang, stok, harga_jual, harga_beli) VALUES (:nama_barang, :stok, :harga_jual, :harga_beli)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_barang", $nama_barang);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":harga_jual", $harga_jual);
        $stmt->bindParam(":harga_beli", $harga_beli);
        $stmt->execute();
    }

    public function edit($id) {
        $sql = "SELECT * FROM barang WHERE id_barang=:id_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_barang", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update() {
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $id_barang = $_POST['id_barang'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];

        $sql = "UPDATE barang SET nama_barang=:nama_barang, stok=:stok, harga_jual=:harga_jual, harga_beli=:harga_beli WHERE id_barang=:id_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_barang", $nama_barang);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":id_barang", $id_barang);
        $stmt->bindParam(":harga_jual", $harga_jual);
        $stmt->bindParam(":harga_beli", $harga_beli);
        $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM barang WHERE id_barang=:id_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_barang", $id);
        $stmt->execute();
    }
}
