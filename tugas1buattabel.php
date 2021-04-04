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

// Create table
$sql = "CREATE TABLE buku_tamu (
id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
email VARCHAR(30) NOT NULL,
pesan TEXT)";
if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn);
?>