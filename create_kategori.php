<?php
include 'Model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PENJUALAN BARANG</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="kategori.php">Kategori Penjualan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="itempenjualan.php">Item Penjualan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <span class="badge bg-secondary">Tambah Data Kategori Penjualan</span>
                </div>
                <div class="card-body">
                    <form action="storedata.php" method="post">
                        <div class="mb-3">
                            <label for="kode_kategori" class="form-label">Kode Kategori</label>
                            <input type="text" class="form-control" id="kode_kategori" name="kode_kategori">
                        </div>
                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="check_out" onchange="document.getElementById('store').disabled = !this.checked;">
                            <label class="form-check-label" for="exampleCheck1">Simpan Data!</label>
                        </div>
                        <button type="submit" id="store" name="store_kategori" class="btn btn-primary" disabled>Submit</button>
                        <button onclick="goBack()" class="btn btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/sweetalert.min.js"></script>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </body>

</html> 
