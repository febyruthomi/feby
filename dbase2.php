<?php

$servername5 = "127.0.0.1";
$username5 = "febyy";
$password5 = "";

//Membuat perintah koneksi
$conn5 = new mysqli($servername5,$username5,$password5);

//check koneksi
if($conn5 -> connect_error){
	die("Connection Failed : ".$conn5 -> connect_error);

}

//Membuat database
$sql = "CREATE DATABASE dbase_loginn";
if($conn5 -> query($sql) === TRUE){
	echo "Database Berhasil Dibuat :)";
}else{
	echo "Sorry!";
	echo "<br>Gagal Membuat Database :(".$conn5 -> error;
}
$conn5 -> close();

?>