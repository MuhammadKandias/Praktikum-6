<?php
// sebagai deklarasi
$servername="localhost";
$username="root";
$password="";
$dbname="data_pegawai";

$conn = mysqli_connect($servername, $username, $password, $dbname); // Membuat koneksi

if(!$conn){ // untuk cek koneksi
	die("Connection failed: ". mysqli_connect_error());
}
// Mengambil data pegawai sesuai id pada ink
$sql= "SELECT * FROM pegawai WHERE ID_pegawai=$_GET[kode]";
$result= mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>tes</title>
</head>
<body>
<h1>Ubah Data</h1>
<!-- form untuk mengubah data -->
<form method="POST" action="#">
	<table width="400" cellpadding="2" cellspacing="2">
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama" value="<?php echo $row['nama'] ?>" required></td>
		</tr>
		<tr>
			<td width="130">Alamat</td>
			<td><input type="text" name="alamat" value="<?php echo $row['alamat']?>" required></td>
		</tr>
		<tr>
			<td width="130">email</td>
			<td><input type="text" name="email" value="<?php echo $row['email']?>" required></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="tombolUbah" value="Ubah">
			</td>
		</tr>
	</table>
</form>
<!-- Kembali pada halaman awal -->
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

if(isset($_POST['tombolUbah'])){

	// Memperbarui data
	$sql= "UPDATE pegawai SET nama='$_POST[nama]', alamat='$_POST[alamat]', email='$_POST[email]' WHERE ID_pegawai='$_GET[kode]'";
	if(mysqli_query($conn, $sql)){
		echo "Data terupdate!";
		//pindah ke halaman utama
		echo "<meta HTTP-EQUIV='REFRESH' content='3; url=tugas_ke3.php'>";
	} else{
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}
	// Menutup koneksi
	mysqli_close($conn);	
}

?>