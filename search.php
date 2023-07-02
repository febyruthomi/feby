<?php
include "koneksi.php";
$hasil = mysqli_query($cek, "select * from tbl_pelanggan order by nama_pelanggan ");
// Database connection
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/

// Handle search form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchTerm = $_POST['search'];

    // Perform search query
    $sql = "SELECT * FROM tbl_pelanggan WHERE nama_pelanggan LIKE '%$searchTerm%'";
    $result = $cek->query($sql);

    // Display search results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display search results here
            
            echo "Title: " . $row['nama_pelanggan'] . "<br>";
            
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
