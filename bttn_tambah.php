<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai</title>
</head>
<body>
<h1>Input Data Baru</h1>
<!-- Membuat form data pegawai -->
<form method="POST" action="#">
	<table width="400" cellpadding="2" cellspacing="2">
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td width="130">Alamat</td>
			<td><input type="text" name="alamat" required></td>
		</tr>
		<tr>
			<td width="130">Email</td>
			<td><input type="text" name="email" required></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="tombolSimpan" value="Simpan">
				<input type="reset" name="tombolClear" value="Clear">
			</td>
		</tr>
	</table>
</form>
<!-- Ketika button batal di klik akan kembali pada halaman utama -->
<form action="tugas_ke3.php">
    <input type="submit" value="Batal" />
</form>
</body>
</html>
<?php
// Deklarasi nama server, username, password, dan database
$servername="localhost";
$username="root";
$password="";
$dbname="data_pegawai";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

// jika btnSimpan diklik
if(isset($_POST['tombolSimpan'])){

	// Membuat data
	$sql= "INSERT INTO pegawai(nama, alamat, email, id_jabatan) VALUES ('$_POST[nama]', '$_POST[alamat]', '$_POST[email]', '3')";
	if(mysqli_query($conn, $sql)){
		echo "New record created succesfully";
		// pindah ke halaman utama
		echo "<meta HTTP-EQUIV='REFRESH' content='3; url=tugas_ke3.php'>";
	} else{
		echo "Error!: ". $sql ."<br>". mysqli_error($conn);
	}
	// menutup koneksi
	mysqli_close($conn);	
}

?>