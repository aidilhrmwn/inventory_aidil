<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
                        <a class="nav-link" href="../barang/index.php">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Jenis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Jenis Aidil Hermawan</h1>
        <a href="view_tambah.php" class="btn btn-primary">Tambah Data Jenis Baru</a>
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>no</th>
                    <th>id jenis</th>
                    <th>nama jenis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "../../config/koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM jenis");
                $no = 1;
                if (mysqli_num_rows($query)) {
                    while ($result = mysqli_fetch_assoc($query)) {
                        ?>
                <tr>
    
                    <td><?php echo $no; ?></td>
                            <td><?php echo $result['id_jenis']; ?></td>
                            <td><?php echo $result['nama_jenis']; ?></td>
                    <td>
                    <a class="btn btn-warning">Edit</a>
                    <a class="btn btn-danger">Hapus</a>
                </tr>
                <?php 
                    $no++;

                    
            }
        } else {
            echo "Data jenis tidak muncul";
        }

            
        ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>


