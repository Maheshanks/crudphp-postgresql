<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
    <div class="container col-md-6 mt-4">
        <h1>Tabel Barang</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                Edit Barang
            </div>
            <div class="card-body">
                <?php
                include("dbase.php");

                $id = $_GET['id']; //mengambil id barang yang ingin diubah

                //menampilkan barang berdasarkan id
                $data = pg_query($conn, "Select * from barang where id='$id'");
                $row = pg_fetch_array($data);
                ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Nama</label>
                        <!-- Menampilkan nama barang -->
                        <input type="text" name="nama" class="form-control" value="<?= $row['nama']; ?>" required>
                    </div>
                    <div class="form-group">
                        <!-- Menampilkan Harga -->
                        <input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>" required>
                    </div>
                    <div class="form-group">
                        <!-- Menampilkan deskripsi -->
                        <input type="text" name="deskripsi" class="form-control" value="<?= $row['deskripsi']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </form>
                <?php
                //jika klik tombol submit maka
                if (isset($_POST['submit'])) {
                    //inisialisasi
                    $nama = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $deskripsi = $_POST['deskripsi'];

                    //echo $idpost, $nama, $harga, $deskripsi;
                    //queri untuk update data
                    pg_query($conn, "update barang set nama='$nama', harga='$harga', deskripsi='$deskripsi' where id = '$id'");
                    //redirect
                    echo "<script>alert('Data berhasil diupdate!');window.location='index.php'</script>";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>