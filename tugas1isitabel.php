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

// Create record
$sql = "INSERT INTO buku_tamu (nama, email, pesan)
values ('Manjab','Manjab@gmail.com','Sakinah yaaa')";
if(mysqli_query($conn, $sql)){
	echo "New record created succesfully";
} else{
	echo "Error: ". $sql ."<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>