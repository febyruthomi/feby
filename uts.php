
<div class="container">
    <?php
      
      if (isset($_POST['submit'])){
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $kode = $_POST['kode'];
        $orang = $_POST['orang'];
        $total1=0;
        //$kode = $_POST['kode'];//jenis cuci
        
        

        // harga jenis cuci
        switch ($kode) {
          case 'AB2341EXE':
            $harga = 450000;
            $orang = 0;
            $total1 = $harga * $orang;
        //$harga = 0;
           // $total = 450000 * $orang;

            break;
          case 'AD4321BIS':
            $harga = 375000;
            break;
                    case 'AA5432EKO':
            $harga = 350000;
            break;
                     case 'AB4325BIS':
            $harga = 400000;
            break;
                     case 'AG4532EXE':
            $harga = 500000;
            break;
                     case 'AG4321BIS':
            $harga = 450000;
            break;
          default:
            echo "<p class='error'>Invalid service type.</p>";
            exit();
        }

        // Display results
        //echo "<p>You selected $jenis_cuci wash for $harga.</p>";
        // Membuat struk cuci motor
  $struk = "
    <h2>Tanda Terima Pembayaran</h2>
    <p>Nama Pelanggan: ".$nama_pelanggan."</p>
    <p>Jumlah: ".$orang." Orang</p>
    <p>Kelas: ".$kode."</p>

    <p>Harga: Rp".$harga."</p>
    <p>Total: Rp".$harga*$orang."</p>
    <p>Terima kasih telah menggunakan jasa kami.</p>
  ";

  // Mencetak struk cuci motor
  echo $struk;
      }

    ?>

    <form method="POST">
      <p>
      Nama pelanggan:<br>
      <input type="text" name="nama_pelanggan">
      <input type="text" name="orang">
    </p>
      <label for="kode">Kode:</label>
      <select name="kode" required>
        <option value="">Silahkan Pilih Kode</option>
        <option value="AB2341EXE">AB2341EXE</option>
        <option value="AD4321BIS">AD4321BIS</option>
        <option value="AA5432EKO">AA5432EKO</option>
        <option value="AB4325BIS">AB4325BIS</option>
        <option value="AG4532EXE">AG4532EXE</option>
        <option value="AG4321BIS">AG4321BIS</option>
      </select><br>

     <input type="submit" name="submit" value="Cetak Struk">


    </form>
  </div>
</body>
</html>
