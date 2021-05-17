<!DOCTYPE html>
<html>

<head>
    <title>Tambah data</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
    <div class="container col-md-6 mt-4">
        <h1>Tabel Barang</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                Tambah Barang
            </div>
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Tambah Data</button>
                </form>
                <?php
                include("dbase.php");
                //cek button submit
                if (isset($_POST['submit'])) {
                    //tampung data
                    $nama = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $deskripsi = $_POST['deskripsi'];

                    //queri tambah data ke database
                    $data = pg_query($conn, "insert into barang(nama,harga,deskripsi)values('$nama','$harga','$deskripsi')") or die(mysqli_error($koneksi));

                    //alert jika data berhasil disimpan
                    echo "<script>alert('Data berhasil disimpan'); window.location='index.php';</script>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</html>