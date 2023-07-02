<?php
include "koneksi.php";
$id = $_GET['id_pelanggan'];
//$dbase_uas01="dbase_uas01";
//mysql_select_db($dbase_uas01);

$perintah="DELETE FROM tbl_pelanggan WHERE id_pelanggan =$id ";
$hasil=mysqli_query($cek,$perintah);

if($hasil){
	echo "Artikel berhasil dihapus <br>";
	echo "<a href='daftar.php'>Back<br>";
}else{
	echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke database MySQL";
}



?>
