<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT id_bt, nama, email, pesan from buku_tamu";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	//output data of each row
	while($row = mysqli_fetch_assoc($result)){
		echo "NO : ".$row["id_bt"]. "<br>NAMA : ".$row["nama"]. "<br>EMAIL : ".$row["email"]."<br>PESAN : ".$row["pesan"]. "<br> ======================================= <br>";
	}
} else{
	echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>