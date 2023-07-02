<?php
include "koneksi.php";
$hasil = mysqli_query($cek, "select * from tbl_pelanggan order by id_pelanggan asc ");
/*
if (isset($_POST['submit'])) {
  $nama_pelanggan = $_POST['nama_pelanggan'];
  $jenis_cuci = $_POST['jenis_cuci'];
  $harga = 0;

  if ($jenis_cuci == 's') {
    $jenis_cuci_text = "S (Rp10.000)";
    $harga = 10000;
  } elseif ($jenis_cuci == 'm') {
    $jenis_cuci_text = "M (Rp15.000)";
    $harga = 15000;
  } elseif ($jenis_cuci == 'l') {
    $jenis_cuci_text = "L (Rp20.000)";
    $harga = 20000;
  } else {
    echo "Jenis cuci tidak valid.";
    exit;
  }
*/
   echo "<h1>Cetak Struk Cuci Motor</h1>"

   
    while ($data = mysqli_fetch_array($hasil))
    {
      echo  "<p>
      Nama pelanggan: $data[nama_pelanggan] </p>";
      echo  "<p>
      Tanggal Masuk: $data[tanggal_masuk] </p>";
      echo  "<p>
      id_pelanggan: $data[id_pelanggan] </p>";
      echo  "<p>
      Jenis Cuci: $data[jenis_cuci] </p>";
    
}
$struk = "
    <h2>Struk Cuci Motor</h2>
    <p>Nama Pelanggan: ".$nama_pelanggan."</p>
    <p>ID Pelanggan: ".$id_pelanggan."</p>
    <p>Jenis Cuci: ".$jenis_cuci_text."</p>
    <p>Total Harga: Rp".$harga."</p>
    <p>Terima kasih telah menggunakan jasa kami.</p>
  ";

  // Mencetak struk cuci motor
  echo $struk;

  // Opsi untuk mencetak struk secara otomatis menggunakan printer
echo '<script>window.print();</script>';
echo "<form method = "post">"
 echo " <input type="submit" name="submit" value="Cetak Struk"> </form>"

?>

<!--<!DOCTYPE html>
<html>
<head>
  <title>Cetak Struk Cuci Motor</title>
</head>
<body>
  <h1>Cetak Struk Cuci Motor</h1>
 
    <p>
      Nama pelanggan:<br>
      
    </p>
    <p>
      ID pelanggan:<br>
      
    </p>
    <p>
      Jenis cuci:<br>
      
    </p>
    <input type="submit" name="submit" value="Cetak Struk">
  </form>
</body>
</html>
