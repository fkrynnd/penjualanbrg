<?php
    include 'model.php';

    if (isset($_POST['store_kategori'])) {
        $kode_kategori = $_POST['kode_kategori'];
        $nama_kategori = $_POST['nama_kategori'];
        
        $model = new Model();
        $model->create_prodi($kode_kategori, $nama_kategori);
        header('location:kategori.php');
    }
    if (isset($_POST['store_itempenjualan'])) {
        $no_penjualan = $_POST['no_penjualan'];
        $kode_barang = $_POST['kode_barang'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $diskon = $_POST['diskon'];
        
        $model = new Model();
        $model->create_itempenjualan($no_penjualan, $kode_barang, $jumlah, $harga, $diskon);
        header('location:itempenjualan.php');
    }
?>