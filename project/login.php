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
            <li><a href="pencarian.php">Mini Google</a></li>
            <li><a href="biodata.html">About Us</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
    	<h1 class="text-center">HALAMAN ONLY ADMIN AKSES</h1>
    	<form name="loginkuy" method="POST">
    		<center>
    		<table>
    			<tr>	 
    				<td><label>EMAIL</label></td>
    				<td><input type="text" name="email" required id="username"></td>
    			</tr>
    			<tr>	
    				<td><label>PASSWORD</label></td>
    				<td><input type="password" name="password" required id="password"></td>
    			</tr>
    			<tr>
    				<td colspan="2" style="text-align: center"><input type="submit" value="LOGIN" onclick="login()"></td>
    			</tr>
    		</table>
    		</center>
    	</form>
    </div>
    <div class="container text-center">
      <p>&copy 2019 Bima Nagantara</p>
    </div>
    <script src="myjs.js"></script>
  </body>
</html>