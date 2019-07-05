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
    <nav>
      <div class="container">
        <div class="nav navbar-nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="tokoku.php">Tokoku</a></li>
            <li><a href="login.php">Penjualan</a></li>
            <li><a href="biodata.html">About Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Berfungsi Untuk Menyimpan Hasil Form Ke dalam File TXT bukutransaksi -->
    <?php
		//membuka file bukutransaksi.txt, +a digunakan untuk menulis hasil inputan di akhir file
		$fp = fopen("bukutransaksi.txt","a+");
		$total;
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$nohp = $_POST['nohp'];
		$jenisbarang = $_POST['jenis'];
		$jumlah = $_POST['jumlah'];
	  	//menyamakan dari pilihan jenis, supaya dapat menghitung sesuai dengan harga jenis barang
		if ($_POST['jenis']=='Kemeja Batik') {
			$harga=100000;
			$total = $jumlah*$harga;
		}elseif ($_POST['jenis']=='Kemeja Formal') {
			$harga=150000;
			$total = $jumlah*$harga;
		}elseif ($_POST['jenis']=='Baju KOKO') {
			$harga=120000;
			$total = $jumlah*$harga;
		}elseif ($_POST['jenis']=='Kemeja ASGARD') {
			$harga=130000;
			$total = $jumlah*$harga;
		}
		$ukuranbarang = $_POST['ukuran'];
		// Menyimpan dalam format pembagian menggunakan " | ", Ex: Bima|Bantul
		fputs($fp,"$nama|$alamat|$nohp|$jenisbarang|$harga|$ukuranbarang|$jumlah|$total\n");
		fclose($fp);
    //membuat folder bukti untuk menyimpan foto bukti transaksi
    $target_dir = "bukti/";
    if(!file_exists($target_dir)){
      mkdir($target_dir);
    }
    
    if(isset($_POST["input"])) {
      if (is_uploaded_file($_FILES["fileUpload"]["tmp_name"])) {
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        $tipeFile = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
      }else {
        echo "<h1 class='text-center'>Gagal Upload Bukti Transaksi</h1>";
      }
    }

	 ?>
    <div class="container text-center">
    	<h1>PESANAN SEDANG DI PROSES</h1>
	  </div>
    
  </body>
</html>
