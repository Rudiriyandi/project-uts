<?php

namespace App;

use Inc\Koneksi;

class Pembelian extends Koneksi {
    public function tampil() {
        $sql = "SELECT * FROM pembelian";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan() {
        $id_barang = $_POST['id_barang'];
        $id_supplier = $_POST['id_supplier'];
        $tanggal = $_POST['tanggal'];
        $jumlah = $_POST['jumlah'];
        $harga_total = $_POST['harga_total'];

        $sql = "INSERT INTO pembelian (id_barang, id_supplier, tanggal, jumlah, harga_total) VALUES (:id_barang, :id_supplier, :tanggal, :jumlah, :harga_total)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_barang", $id_barang);
        $stmt->bindParam(":id_supplier", $id_supplier);
        $stmt->bindParam(":tanggal", $tanggal);
        $stmt->bindParam(":jumlah", $jumlah);
        $stmt->bindParam(":harga_total", $harga_total);
        $stmt->execute();
    }

    public function edit($id) {
        $sql = "SELECT * FROM pembelian WHERE id_pembelian=:id_pembelian";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pembelian", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update($id_pembelian, $id_barang, $id_supplier, $tanggal, $jumlah, $harga_total) {
        $sql = "UPDATE pembelian SET id_barang = :id_barang, id_supplier = :id_supplier, tanggal = :tanggal, jumlah = :jumlah, harga_total = :harga_total WHERE id_pembelian = :id_pembelian";
      
        $stmt = $this->db->prepare($sql);
      
        $stmt->bindParam(':id_barang', $id_barang);
        $stmt->bindParam(':id_supplier', $id_supplier);
        $stmt->bindParam(':tanggal', $tanggal);
        $stmt->bindParam(':jumlah', $jumlah);
        $stmt->bindParam(':harga_total', $harga_total);
        $stmt->bindParam(':id_pembelian', $id_pembelian);
      
        return $stmt->execute();
    }
      

    public function delete($id) {
        $sql = "DELETE FROM pembelian WHERE id_pembelian=:id_pembelian";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pembelian", $id);
        $stmt->execute();
    }
}
