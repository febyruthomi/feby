<?php

$servername2 = "localhost";
$username2 = "root";
$password2 = "";

//Membuat perintah koneksi
$conn1 = new mysqli($servername2,$username2,$password2);

//check koneksi
if($conn1 -> connect_error){
	die("Connection Failed : ".$conn1 -> connect_error);

}

//Membuat database
$sql = "CREATE DATABASE dbase_uas01";
if($conn1 -> query($sql) === TRUE){
	echo "Database Berhasil Dibuat :)";
}else{
	echo "Sorry!";
	echo "<br>Gagal Membuat Database :(".$conn1 -> error;
}
$conn1 -> close();

?>