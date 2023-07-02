<?php 
include "koneksi.php";
// Mengatur koneksi ke database
/*$host = "localhost";
$username = "username_database";
$password = "password_database";
$database = "nama_database";*/



// Mendapatkan input dari form login
if (isset($_POST['submit'])) {

    $username = $_POST['febyola'];
    $password = $_POST['400243'];

    // Mengecek kecocokan username dan password di database
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Jika login berhasil, simpan informasi admin di session
        $_SESSION['admin'] = $result->fetch_assoc();
        header("Location: admin_dashboard.php"); // Mengarahkan ke halaman admin setelah login berhasil
        exit();
    } else {
        // Jika login gagal, tampilkan pesan 


        $error = "Username atau password admin salah.";
    }
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="./style.css">
<style type="text/css">
  
@import url("https://fonts.googleapis.com/css?family=Lato:400,700");
#bg {
  background-image: url('gm4.jpg');
  position: fixed;
  left: 20;
  top: 20;
  width: 100%;
  height: 100%;
  background-size: cover;
  filter: blur(2px);
}

body {
  font-family: 'Lato', sans-serif;
  color: #4A4A4A;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

form {
  width: 350px;
  position: relative;
}
form .form-field::before {
  font-size: 20px;
  position: absolute;
  left: 15px;
  top: 17px;
  color: #888888;
  content: " ";
  display: block;
  background-size: cover;
  background-repeat: no-repeat;
}
form .form-field:nth-child(1)::before {
 /* background-image: url(img/user-icon.png);*/
  width: 20px;
  height: 20px;
  top: 15px;
}
form .form-field:nth-child(2)::before {
  /*background-image: url(img/lock-icon.png);*/
  width: 16px;
  height: 16px;
}
form .form-field {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  margin-bottom: 1rem;
  position: relative;
}
form input {
  font-family: inherit;
  width: 100%;
  outline: none;
  background-color: #fff;
  border-radius: 4px;
  border: none;
  display: block;
  padding: 0.9rem 0.7rem;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
  color: #4A4A4A;
  text-indent: 40px;
}
form .btn {
  outline: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  margin: 0 auto;
  padding: 0.9rem 2.5rem;
  text-align: center;
  background-color: #47AB11;
  color: #fff;
  border-radius: 4px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form method="POST" action="dash.php">
  <div class="form-field">
    <input type="text" placeholder="Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit">Log in</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>
