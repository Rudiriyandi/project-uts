<?php

namespace App;

use Inc\Koneksi;

class Penjualan extends Koneksi {
    public function tampil() {
        $sql = "SELECT * FROM penjualan";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan() {
        $id_penjualan = $_POST['id_penjualan'];
        $id_barang = $_POST['id_barang'];
        $tanggal = $_POST['tanggal'];
        $jumlah = $_POST['jumlah'];
        $harga_total = $_POST['harga_total'];

        $sql = "INSERT INTO penjualan (id_penjualan, id_barang, tanggal, jumlah, harga_total) VALUES (:id_penjualan, :id_barang, :tanggal, :jumlah, :harga_total)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_penjualan", $id_penjualan);
        $stmt->bindParam(":id_barang", $id_barang);
        $stmt->bindParam(":tanggal", $tanggal);
        $stmt->bindParam(":jumlah", $jumlah);
        $stmt->bindParam(":harga_total", $harga_total);
        $stmt->execute();
    }

    public function edit($id) {
        $sql = "SELECT * FROM penjualan WHERE id_penjualan=:id_penjualan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_penjualan", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update($id_penjualan, $id_barang, $tanggal, $jumlah, $harga_total) {
        $sql = "UPDATE penjualan SET id_barang = :id_barang, tanggal = :tanggal, jumlah = :jumlah, harga_total = :harga_total WHERE id_penjualan = :id_penjualan";
      
        $stmt = $this->db->prepare($sql);
      
        $stmt->bindParam(':id_barang', $id_barang);
        $stmt->bindParam(':tanggal', $tanggal);
        $stmt->bindParam(':jumlah', $jumlah);
        $stmt->bindParam(':harga_total', $harga_total);
        $stmt->bindParam(':id_penjualan', $id_penjualan);
      
        return $stmt->execute();
    }
      

    public function delete($id) {
        $sql = "DELETE FROM penjualan WHERE id_penjualan=:id_penjualan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_penjualan", $id);
        $stmt->execute();
    }
}
