CREATE DATABASE IF NOT EXISTS stok_barang;

USE stok_barang;

CREATE TABLE IF NOT EXISTS barang (
  id_barang INT AUTO_INCREMENT PRIMARY KEY,
  nama_barang VARCHAR(255) NOT NULL,
  harga_beli INT NOT NULL,
  harga_jual INT NOT NULL,
  stok INT NOT NULL
);

CREATE TABLE IF NOT EXISTS supplier (
  id_supplier INT AUTO_INCREMENT PRIMARY KEY,
  nama_supplier VARCHAR(255) NOT NULL,
  alamat VARCHAR(255) NOT NULL,
  no_telp VARCHAR(20) NOT NULL
);

CREATE TABLE IF NOT EXISTS pembelian (
  id_pembelian INT AUTO_INCREMENT PRIMARY KEY,
  id_barang INT NOT NULL,
  id_supplier INT NOT NULL,
  tanggal DATE NOT NULL,
  jumlah INT NOT NULL,
  harga_total INT NOT NULL,
  FOREIGN KEY (id_barang) REFERENCES barang(id_barang),
  FOREIGN KEY (id_supplier) REFERENCES supplier(id_supplier)
);

CREATE TABLE IF NOT EXISTS penjualan (
  id_penjualan INT AUTO_INCREMENT PRIMARY KEY,
  id_barang INT NOT NULL,
  tanggal DATE NOT NULL,
  jumlah INT NOT NULL,
  harga_total INT NOT NULL,
  FOREIGN KEY (id_barang) REFERENCES barang(id_barang)
);
