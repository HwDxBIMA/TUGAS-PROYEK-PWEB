<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container text-center">
      <div class="header">
        <img src="img/indonesia.png">
        <h4>SADDAN BIMA NAGANTARA</h4>
      </div>
    </div>
    <div class="container">
    <nav>
        <div class="nav navbar-nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="tokoku.php">Tokoku</a></li>
            <li><a href="login.php">Penjualan</a></li>
            <li><a href="pencarian.php">Mini Google</a></li>
            <li><a href="biodata.html">About Us</a></li>
          </ul>
      </div> 
    </nav>
  </div>
    
    <?php
      $fp = fopen("bukutransaksi.txt","r");
      while ($isi = fgets($fp,100)){
      $pisah = explode("|",$isi);
      echo "
                    <div class='container'>
                    <table border=0>
                    <tr>
                        <td>Nama</td>
                        <td> : $pisah[0]</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> : $pisah[1]</td>
                    </tr>
                    <tr>
                        <td>NO HP</td>
                        <td> : $pisah[2]</td>
                    </tr>
                    <tr>
                        <td>Jenis Barang</td>
                        <td> : $pisah[3]</td>
                    </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td> : $pisah[4]</td>
                    </tr>
                    <tr>
                        <td>Ukuran Barang</td>
                        <td> : $pisah[5]</td>
                    </tr>
                    <tr>
                        <td>Jumlah Barang</td>
                        <td> : $pisah[6]</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td> : $pisah[7]</td>
                    </tr>
                    <tr>
                      <td>&nbsp;<hr></td>
                      <td>&nbsp;<hr></td>
                    </tr>
                    </table>
                    </div>
                ";   
                    }  
          ?>

    <section>
      <div class="container text-center">
        <p>&copy 2019 Bima Nagantara</p>
      </div>
    </section>

    <script src="hitung.js"></script>    
  </body>
</html>