<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai</title>
</head>
<body>
<center><h1>Data Pegawai</h1>
<?php
// Sebagai Deklarasi nama server, username, password, dan nama database
$servername="localhost";
$username="root";
$password="";
$dbname="data_pegawai";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// untuk cek koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}


$result= mysqli_query($conn,"SELECT * FROM pegawai");/*mengambil semua data dari tabel pegawai
sama hal nya$sql= "SELECT * FROM pegawai";*/

// untuk kondisi
if(mysqli_num_rows($result) > 0){
	//menampilkan data baris dari tabel
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "Nama: ". $row["nama"] ."<br>Alamat: ". $row["alamat"] ."<br>email: ". $row["email"] ."<br>" ;
		echo "<tr>
		<td><a href='bttn_edit.php?kode=$row[ID_pegawai]'>Edit</a></td>
		<br>
		<td><a href='?kode=$row[ID_pegawai]'>Delete</a></td>
		</tr><br>";
	}
} else{
	echo "Data telah kosong, Silahkan tambah data!";
}
echo"<br><br><form action='bttn_tambah.php'><input type='submit' name='tombolTambah' value='Tambah Data'></form>";

mysqli_close($conn);
?>
</body>
</html>
<?php
// sebagai deklarasi
$servername="localhost";
$username="root";
$password="";
$dbname="data_pegawai";

// sebagai koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// untuk cek koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

if(isset($_GET['kode'])){

	// menghapus data pegawai sesuai id_pegawai nya
	$sql= "DELETE FROM pegawai WHERE ID_pegawai='$_GET[kode]'";
	if(mysqli_query($conn, $sql)){
		echo "Sudah Terhapus!";
		// membuka tugas_ke3.php
		echo "<meta HTTP-EQUIV='REFRESH' content='3; url=tugas_ke3.php'>";
	} else{
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}
	mysqli_close($conn); // sebagai akhir koneksi	
}

?>
</center>