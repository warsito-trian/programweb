<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 12 - Latihan 1 (Pemograman Web 2)</title>
</head>
<body>
<?php

// Nama : Muhammad Derio
// Kelas : 06TPLE012

$con = mysqli_connect("localhost","root","lat_dbase");
if (!$con) {
	die('Could not connect: ' . mysqli_error());
} else {
	echo "berhasil";
}

mysql_select_db("lat_dbase", $con);
mysql_query("UPDATE tbl_mhs SET Age = '36'
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
mysql_close($con);
?>
</body>
</html>