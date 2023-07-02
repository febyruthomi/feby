<?php
include "koneksi.php"; //memanggil file 
//mysqli_select_db("dbase_uas01"$cek):

$sql="INSERT INTO tbl_harga (id_price,price)
VALUES ('1','10000'),('2','15000'),('3','20000')";

$simpan=mysqli_query($cek, $sql) or die ("tidak berhasil");//mysqli_query(var koneksi, var sql)

echo "<br> 1 record added<br>";
echo "<a href = 'daftar.php'> Tampilkan ";



?>