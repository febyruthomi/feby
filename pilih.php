<?php
include "koneksi.php";
$id_pelanggan = $_GET['id_pelanggan'];
//query satu record mahasiswa dari tabel sesuai nilai $id_pelanggan
$perintah = "SELECT * FROM tbl_pelanggan WHERE id_pelanggan = '$id_pelanggan'";
/*mysql_selet_db($dbname);*/

$hasil=mysqli_query($cek, $perintah);
$row=mysqli_fetch_array($hasil);

?>
<h1> Daftar Pelanggan </h1>
<form name="pelanggan" method="post" action="update.php">
	<input type="hidden" name="id" value="<?php echo "$row[0]" ?>">
	<table width="100%" border="0" cellspacing ="0" cellpadding="0">
	<tr>
		<td width="185">Nama Pelanggan</td>
		<td width="2%">:</td>
		<td width="80%"><input type="text" name="nama_pelanggan" size="50"
			value="<?php echo "$row[1]" ?>"></td>
	</tr>
	 