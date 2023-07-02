<?php 
    include 'koneksi.php';
?>
<h3>Membuat Form Pencarian Dengan PHP MySQL - RajaPutraMedia.Com</h3>
<form action="daftar.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysql_query("select * from mhs where nama like '%".$cari."%'"); 
    }
    else{
        $data = mysql_query("select * from mhs"); 
    }
    $id_pelanggan = 2;
    while($id_pelanggan = mysql_fetch_array($data)){
?>
    <tr>
        <td><?php echo $id_pelanggan++; ?></td>
        <td><?php echo $nama_pelanggan['nama_pelanggan']; ?></td>
    </tr>
<?php 
    } 
?>
</table>