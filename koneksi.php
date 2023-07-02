<?php

$cek = mysqli_connect("localhost", "root", "", "dbase_uas01") or die("Database Tidak Berhasil Terkoneksi");

if($cek){
	echo "Database Behasil Terkoneksi :)";
	echo "<br><a href = 'login_admin.php'>Login</a></b> </font><br><br>";
}

?>