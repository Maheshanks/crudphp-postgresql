<?php
//mengambil koneksi ke database
include("dbase.php");
//mengambil data
$id = $_GET['id'];
//menghapus data
pg_query($conn, "delete from barang where id = '$id'");

//tambahkan alert
echo "<script>alert('Data berhasil dihapus!');window.location='index.php';</script>";
