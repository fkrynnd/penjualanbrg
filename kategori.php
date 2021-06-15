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
                                        <a class="nav-link"href="itempenjualan.php">Item Penjualan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="kategori.php">Kategori Penjualan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <span class="badge bg-secondary">Data Kategori Penjualan</span>
                </div>
                <div class="card-body">
                    <a type="button" class="btn btn-success" href="create_kategori.php">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Kategori</th>
                                <th scope="col">Nama Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $model->show_kategori();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                            <tr>
                                <th scope="row"><?= $index++ ?></th>
                                <td><?= $data->nama_kategori ?></td>
                                <td>
                                    <a name="hapus" id="hapus" href="process_data.php?nama_kategori=<?= $data->nama_kategori ?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;
                            } else { ?>
                                <tr>
                                    <td colspan="9" style="text-align: center;">Belum Ada Data Kategori Penjualan</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/sweetalert.min.js"></script>
    </body>

</html> 
