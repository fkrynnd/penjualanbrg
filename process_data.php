<?php
    include 'model.php';

    if (isset($_GET['kode_kategori'])) {
        $kddosen = $_GET['kode_kategori'];
        $model = new Model();
        $model->delete_dosen($kode_kategori);
        header('location:kategori.php');
    }
    if (isset($_GET['kode_barang'])) {
        $kdprodi = $_GET['kode_barang'];
        $model = new Model();
        $model->delete_prodi($kode_barang);
        header('location:itempenjualan.php');
    }
?>