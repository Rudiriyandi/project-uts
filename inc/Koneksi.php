<?php

namespace Inc;

class Koneksi {
    protected $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=stok_barang", "root", "");
    }
}
