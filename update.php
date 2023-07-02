<?php
include "koneksi.php";

$update = "UPDATE tbl_pelanggan SET nama_pelanggan='$_POST[nama_pelanggan]' WHERE id_pelanggan ='$_POST[id]'";
$hasil = mysqli_query($cek,$update);

if($hasil) {
	echo "Daftar Pelanggan berhasil di update <br>";
	echo "<a href = 'daftar.php'>List</a>";

}else{
	echo "Data gagal di update";
}

?>