<?php
  include "koneksi.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Motorbike Wash</title>
    <style>
       @import url("https://fonts.googleapis.com/css?family=Lato:400,700");
      /* Set background color and font family */
      body {
        background-image: url('gm4.jpg');
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      
      /* Style the header */
      header {
        background-color: white;
        color: black;
        padding: 20px;
        text-align: center;
        font-size: 24px;
      }
      
      /* Style the navigation bar */
      nav {
        background-color: #555;
        overflow: hidden;
      }
      
      nav a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
      
      nav a:hover {
        background-color: #777;
      }
      
      /* Style the main content area */
      main {
        margin: 20px;
      }
      
      /* Style the book list */
      .book-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 20px;
      }
      
      .book {
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        margin-bottom: 20px;
        width: 50%;
        padding: 20px;
      }
      
      .book img {
        width: 5%;

        height: auto;
        margin-bottom: 10px;
      }
      
      .book p {
        margin-top: 10px;
        font-size: 18px;
        line-height: 1.5;
      }
      p{ 
        font-family: 'Lato', sans-serif;
        font-size: 15px;

      }
    table {
      font-family: 'Lato';
      font-size: 16px;
      font-style: italic;
      font-weight: bolder;
      line-height: 1,5;

    }
    </style>
  </head>
  <body>
    <header>
      <h1>Welcome To Motorbike Wash</h1>
     <p><i>"the best way to clean a motorcycle"</i></p>
    </header>
    <nav>
      
      <a href="sikitlagee.php">Daftar Langganan</a>
      <a href="daftar.php">Data Transaksi Langganan</a>
      <a href="#">Contact Us</a>
    </nav>
    <main>
      
      <div class="book-list">
        <div class="book">
          <img src="log_lokasi.jpg" alt="Location"> <a href="https://www.google.com/maps/place/Steam+motor+Andalas/@-6.3243495,106.7154929,17z/data=!4m6!3m5!1s0x2e69e5dd5de855f3:0x427cd21d6ab31da6!8m2!3d-6.3243548!4d106.7180678!16s%2Fg%2F11sdbm7422?hl=id&entry=ttu">Lokasi Kami </a>
          <h2>Steam Motor Andalas :</h2>
          <p >Layanan Steam Motor : </p>
          <p>No Hanphone : 081344198812</p>
          
        </div>
      </div>
    </main>
  </body>
</html>
