<!DOCTYPE html>
<html>

<head>
	<title>curd sederhana</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Tabel</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Data Barang <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Deskripsi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include("dbase.php");
						$data = pg_query($conn, "select * from barang");
						//tampil barang
						$no = 1;

						//perulangan
						while ($row = pg_fetch_array($data)) {
							//print_r($row);
						?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $row['nama']; ?></td>
								<td><?= $row['harga']; ?></td>
								<td><?= $row['deskripsi']; ?></td>
								<td>
									<a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
									<a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>