<!doctype html>
<html lang="en">
  <head>
    <script type="text/javascript" src="myjs.js"> </script>
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
    <nav>
      <div class="container">
        <div class="nav navbar-nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="tokoku.php">Tokoku</a></li>
            <li><a href="login.php">Penjualan</a></li>
            <li><a href="pencarian.php">Mini Google</a></li>
            <li><a href="biodata.html">About Us</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- Produk -->
    <section class="produk" id="produk">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center">Daftar Produk</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 text-center">
            <img src="produk/kemeja-batik.jpg">
            <hr>
            <h4>BATIK</h4>
            <h5>Rp 100.000</h5>
            <p>S, M , XL , XXL</p>
          </div>
          <div class="col-md-3 text-center">
            <img src="produk/kemeja-formal.jpg">
            <hr>
            <h4>Kemeja Formal</h4>
            <h5>Rp 150.000</h5>
            <p>S, M , XL , XXL</p>
          </div>
          <div class="col-md-3 text-center">
            <img src="produk/koko-mandarin.jpg">
            <hr>
            <h4>Baju KOKO</h4>
            <h5>Rp 120.000</h5>
            <p>S, M , XL , XXL</p>
          </div>
          <div class="col-md-3 text-center">
            <img src="produk/kemeja-ASGARD.jpg">
            <hr>
            <h4>Kemeja ASGARD</h4>
            <h5>Rp 130.000</h5>
            <p>S, M , XL , XXL</p>
          </div>
        </div>
      </div>
    </section>

    <section class="transaksi">
      <div class="container">
        <form method="post" action="proses.php" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <br>
            <h2 class="text-center">FROM TRANSAKSI</h2>
            <hr>
            <br>
            <div class="form-group">
              <label>NAMA LENGKAP</label>
              <input type="text" name="nama" class="form-control">
              <label>ALAMAT</label>
              <input type="text" name="alamat" class="form-control">
              <label>NO HP</label>
              <input type="text" name="nohp" class="form-control">
              <label>JENIS BARANG</label>
              <select class="form-control" name="jenis">
                <option name="Kemeja Batik">Kemeja Batik</option>
                <option name="Kemeja Formal">Kemeja Formal</option>
                <option name="Baju KOKO">Baju KOKO</option>
                <option name="Kemeja ASGARD">Kemeja ASGARD</option>
              </select>
              <label>UKURAN</label>
              <select class="form-control" name="ukuran">
                <option>S</option>
                <option>M</option>
                <option>XL</option>
                <option>XXL</option>
              </select>
              <label>JUMLAH</label>
              <input type="text" name="jumlah" class="form-control" >
              <br>
              <label>BUKTI TRANFER : </label>
              <input type="file" name="fileUpload" id="fileUpload">
              <br>
              <center>
              <input class="btn btn-primary" type="submit" value="Submit" name="input">
              </center>
            <br>
          </div>
        </div>
        </form>
      </div>
    </section>
    <section>
      <div class="container text-center">
        <p>&copy 2019 Bima Nagantara</p>
      </div>
    </section>
    
  </body>
</html>