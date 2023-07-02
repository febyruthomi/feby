<!DOCTYPE html>
<html>
<head>
<style>
  @import url("https://fonts.googleapis.com/css?family=Lato:400,700");
.container {
  width: 50%;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}
p{
  font-family: 'Lato';
}
h1 {
  text-align: center;
  margin-bottom: 20px;
}
h2 {
  text-align: left;
   font-family: helvetica,arial;
  margin-bottom: 10px;
}
label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: bold;
}

select {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
  background-color: #fff;
  font-size: 16px;
}

input[type="submit"] {
  display: block;
  margin: 0 auto;
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #4CAF50;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

</style>



             
  <title>Motorbike Wash</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Motorbike Wash</h1>

    <?php
      
      if (isset($_POST['submit'])){
        $id_pelanggan = $_POST['id_pelanggan'];
        $tanggal_masuk =$_POST['tanggal_masuk'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $jenis_cuci = $_POST['jenis_cuci'];
        $harga = 0;

        // harga jenis cuci
        switch ($jenis_cuci) {
          case 'Small':
            $harga = 10000;
            break;
          case 'Medium':
            $harga = 15000;
            break;
                    case 'Large':
            $harga = 20000;
            break;
            
          default:
            echo "<p class='error'>Invalid service type.</p>";
            exit();
        }

        // Display results
        echo "<p>You selected $jenis_cuci wash for $harga.</p>";
        // Membuat struk cuci motor
  $struk = "
    <h2>Struk Cuci Motor</h2>
    <p>ID Pelanggan: ".$id_pelanggan."</p>
     <p>Tanggal Masuk: ".$tanggal_masuk."</p>
    <p>Nama Pelanggan: ".$nama_pelanggan."</p>
    <p>Jenis Cuci: ".$jenis_cuci."</p>
    <p>Total Harga: Rp".$harga."</p>
    <p>Terima kasih telah menggunakan jasa kami.</p>

  ";
  /*echo "sorry <br>";
  
  echo "Sory";*/

  // Mencetak struk cuci motor
  echo $struk;
      }

    ?>

    <form action = "insert.php" method="POST" >
      <p>
      Nama Pelanggan:<br>
      <input type="text" name="nama_pelanggan">
    </p>
       <p>
      ID Pelanggan:<br>
      <input type="input" name="id_pelanggan">
    </p>
     <p>
      Tanggal Masuk:<br>
      <input type="input" name="tanggal_masuk">
    </p>
      <label for="jenis_cuci">Service Type:</label>
      <select name="jenis_cuci" required>
        <option value="">Silahkan Pilih Jenis Cuci</option>
        <option value="Small">Jenis Cuci "S-10K"</option>
        <option value="Medium">Jenis Cuci "M-15K"</option>
                <option value="Large">Jenis Cuci "L-20K"</option>
      </select><br>

     <input type="submit" name="submit" value="Daftar">


    </form>
  </div>
</body>
</html>
