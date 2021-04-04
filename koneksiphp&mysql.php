<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi database MySQL</h1>
	<?php
	$conn = mysqli_connect("localhost","root","","my_db");

	//cek koneksi
	if (mysqli_connect_errno()) {
		echo "Failed to Connect to MySQL: ".mysqli_connect_error();
		exit();
	}
?>
</body>
</html>