<?php
//initialization
$server = "localhost";
$port = "5432";
$dbname = "cruddb";
$username = "postgres";
$password = "MKH&579";

try {
	$conn_string = "host={$server} port={$port} dbname={$dbname} user={$username} password={$password}";
	$conn = pg_connect($conn_string);
	//echo "Connection Successfull!";
} catch (Exception $e) {
	echo "Connection Failure" . $e;
}
