<?php

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
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Cetak Struk Cuci Motor</title>
</head>
<body>
  <h1>Cetak Struk Cuci Motor</h1>
  <form method="post">
    <p>
      Nama pelanggan:<br>
      <input type="text" name="nama_pelanggan">
    </p>
    <p>
      ID pelanggan:<br>
      <input type="text" name="id_pelanggan">
    </p>
    <p>
      Jenis cuci:<br>
      <input type="radio" name="jenis_cuci" value="s">S (Rp10.000)<br>
      <input type="radio" name="jenis_cuci" value="m">M (Rp15.000)<br>
      <input type="radio" name="jenis_cuci" value="l">L (Rp20.000)<br>
    </p>
    <input type="submit" name="submit" value="Cetak Struk">
  </form>
</body>
</html>
