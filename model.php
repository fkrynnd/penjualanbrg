<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function show_itempenjualan()
    {
        $sql = "SELECT * FROM tblkategori JOIN penjualan_item ON tblkategori"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function show_kategori()
    {
        $sql = "SELECT * FROM tblkategori"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function create_kategori($kode_kategori, $nama_kategori)
    {
        $sql = "INSERT INTO tblkategori (kode_kategori, nama_kategori) VALUES
        ('$kode_kategori', '$nama_kategori')";
        $this->conn->query($sql);
    }

    public function create_itempenjualan($no_penjualan, $kode_barang, $jumlah, $harga, $diskon)
    {
        $sql = "INSERT INTO penjualan_item (no_penjualan, kode_barang, jumlah, harga, diskon) VALUES
        ('$no_penjualan', '$kode_barang', '$jumlah', '$harga', '$diskon')";
        $this->conn->query($sql);
    }

    public function delete_kategori($kddosen)
    {
        $sql = "DELETE FROM tblkategori WHERE kode_kategori='$kode_kategori'";
        $this->conn->query($sql);
    }

    public function delete_itempenjualan($kode_kategori)
    {
        $sql = "DELETE FROM penjualan_item WHERE kode_barang='$kode_barang'";
        $this->conn->query($sql);
    }
    
}