<?php
include "koneksi.php"; //memanggil file 
//mysqli_select_db("dbase_uas01"$cek):

$sql="INSERT INTO tbl_pelanggan (id_pelanggan,tanggal_masuk,nama_pelanggan,jenis_cuci)
VALUES ('$_POST[id_pelanggan]','$_POST[tanggal_masuk]','$_POST[nama_pelanggan]','$_POST[jenis_cuci]')";

$simpan=mysqli_query($cek, $sql) or die ("tidak berhasil");//mysqli_query(var koneksi, var sql)

echo "<br> 1 record added<br>";
echo "<a href = 'daftar.php'> Tampilkan ";



?>