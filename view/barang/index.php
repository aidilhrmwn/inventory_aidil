<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../jenis/index.php">jenis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Barang Aidil Hermawan</h1>
        <a href="view_tambah.php" class="btn btn-primary">Tambah Data Barang Baru</a>
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>no</th>
                    <th>id Barang</th>
                    <th>nama Barang</th>
                    <th>id Jenis</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "../../config/koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM barang");
                $no = 1;
                if (mysqli_num_rows($query)) {
                    while ($result = mysqli_fetch_assoc($query)) {
                        ?>
                <tr>
    
                    <td><?php echo $no; ?></td>
                            <td><?php echo $result['id_barang']; ?></td>
                            <td><?php echo $result['nama_barang']; ?></td>
                            <td><?php echo $result['id_jenis']; ?></td>
                            <td><?php echo $result['harga']; ?></td>
                            <td><?php echo $result['stok']; ?></td>
                    <td>
                    <a class="btn btn-warning" href="view_edit.php?id=<?php echo $result['id_barang']; ?>">
            <i class="fa-solid fa-pen-to-square"></i>Edit
        </a>
        <a href="proses_hapus.php?id=<?php echo $result['id_barang']; ?>" 
           onclick="return confirm('Yakin?')" 
           class="btn btn-danger btn-sm">Hapus</a>
                </tr>
                <?php 
                    $no++;

                    
            }
        } else {
            echo "Data barang tidak muncul";
        }

            
        ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>


