<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 12 - Latihan 2 (Pemograman web 2)</title>
</head>
<body>

<?php 

// Nama : Muhammad Derio
// Kelas : 06TPLE012

$con = mysqli_connect("localhost","root","","");
if (!$con) {
die('Could not connect: ' . mysqli_error());
} else {
	echo "berhasil dihapus";
}

// mysql_select_db("lat_dbase",$con);
// mysql_query("DELETE FROM tbl_mhs WHERE LastName='Prabowo'");
?>


</body>
</html>