<?php 
$koneksi = mysqli_connect("localhost", "root", "", "siswa");

if (mysqli_connect_error()) {
	echo "koneksi gagal" . mysql_connect_error();
}
 ?>