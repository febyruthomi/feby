<?php
include "koneksi.php";
$hasil = mysqli_query($cek, "select * from tbl_pelanggan order by id_pelanggan asc ");//diurutkan berdasarkan nama_pelanggan dari kecil ke besar

echo "<pre>";
echo "<font size =6, color=mangenta><b>	DAFTAR PELANGGAN MOTORBIKE WASH </b></font><br><br>";

echo "<a href = 'sikitlagee.php'>Input</a></b> </font><br><br>";
echo "<hr width=75% size=4 color=green align=left>";
echo "<font size=5 color=maroon><b>";

echo "<table>";
echo "<tr>";
echo 	"<td width=75>ID Pelanggan </td>";
echo  "<td width=75>Tanggal Masuk </td>";
echo 	"<td width=100>Nama Pelanggan </td>";
echo 	"<td width=100>Harga </td>";

echo   "<td width=75>Struk </td>";
echo 	"<td width=75>Edit</td>";
echo 	"<td width=75>Hapus</td></tr>";
 while ($data = mysqli_fetch_array($hasil))
 {
 	echo "<tr><td>$data[id_pelanggan] </td>";
   echo "<td>$data[tanggal_masuk] </td>";
 	echo "<td>$data[nama_pelanggan] </td>";
 	echo "<td>$data[jenis_cuci] </td>";
  
   echo "<td><a href ='struk.php?id_pelanggan=$data[id_pelanggan]'>Cetak Struk</a></td>";

  // <a href="https://www.freecodecamp.org/" target="_blank" rel="noopener noreferrer">freeCodeCamp</a>

 	echo "<td><a href ='pilih.php?id_pelanggan=$data[id_pelanggan]'>Edit</a></td>";

 	echo "<td><a href ='hapus.php?id_pelanggan=$data[id_pelanggan]'>Hapus</a></td></tr>";
 }
 echo "</table><hr width=75% size=4 color=red align=left>";
 echo "</font></pre>";
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchTerm = $_POST['search'];

    // Perform search query
    $sql = "SELECT * FROM tbl_pelanggan WHERE nama_pelanggan LIKE '%$searchTerm%'";
    $result = $cek->query($sql);

    // Display search results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display search results here
            
            echo "Nama: " . $row['nama_pelanggan'] . "<br>";
            echo "Tanggal Masuk: " . $row['tanggal_masuk'] . "<br>";
            
        }
    } else {
        echo "No results found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Page</title>
</head>
<body>
    <h1>Search</h1>

    <form method="POST" action="">
        <input type="text" name="search" placeholder="Enter search term">
        <input type="submit" value="Search">
    </form>
</body>
</html>

