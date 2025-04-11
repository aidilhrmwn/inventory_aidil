<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Tambah Pendaftar Baru</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Pendaftar Baru</h1>
        <?php
        include '../../config/koneksi.php';
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM jenis WHERE id='$id'");
        $result = mysqli_fetch_array($query);
        ?>

        <form action="proses_edit.php?id=<?php echo $result['id'] ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" value="<?php echo $result['id'] ?>" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Plat Nomor</label>
                <input type="text" class="form-control" name="plat_nomor" value="<?php echo $result['plat_nomor'] ?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis Kendaraan</label>
                <input type="text" class="form-control" name="jenis_kendaraan" value="<?php echo $result['jenis_kendaraan'] ?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Waktu Masuk</label>
                <input type="text" class="form-control" name="waktu_masuk" value="<?php echo $result['waktu_masuk'] ?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Waktu Keluar</label>
                <input type="text" class="form-control" name="waktu_keluar" value="<?php echo $result['waktu_keluar'] ?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Biaya</label>
                <input type="number" class="form-control" name= "biaya" value="<?php echo $result['biaya'] ?>" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>