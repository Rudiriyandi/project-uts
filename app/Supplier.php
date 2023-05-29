<?php

namespace App;

use Inc\Koneksi;

class Supplier extends Koneksi {
    public function tampil() {
        $sql = "SELECT * FROM supplier";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan() {
        $nama_supplier = $_POST['nama_supplier'];
        $alamat = $_POST['alamat'];
        $no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';

        $sql = "INSERT INTO supplier (nama_supplier, alamat, no_telp) VALUES (:nama_supplier, :alamat, :no_telp)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_supplier", $nama_supplier);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":no_telp", $no_telp);
        $stmt->execute();
    }

    public function edit($id) {
        $sql = "SELECT * FROM supplier WHERE id_supplier=:id_supplier";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_supplier", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update() {
        $nama_supplier = $_POST['nama_supplier'];
        $alamat = $_POST['alamat'];
        $id_supplier = $_POST['id_supplier'];
        $no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';

        $sql = "UPDATE supplier SET nama_supplier=:nama_supplier, alamat=:alamat, no_telp=:no_telp WHERE id_supplier=:id_supplier";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_supplier", $nama_supplier);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":id_supplier", $id_supplier);
        $stmt->bindParam(":no_telp", $no_telp);
        $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM supplier WHERE id_supplier=:id_supplier";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_supplier", $id);
        $stmt->execute();
    }
}
