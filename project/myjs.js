var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  //menambah slideindex increment
  slideIndex++;
  //jika slideindex lebih besar dari slideslengs, maka slideindex=1
  if (slideIndex > slides.length) {slideIndex = 1}  
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // merubah gambar selama 2 detik sekali 
}

//fungsi sebagai mini google, pencarian google
function cari() {
	// var kata isinya berupa value keyword dari form cari
	var kata = document.formcari.keyword.value;
	var hasil = "http://www.google.com/search?q=" + kata ;
	window.open(hasil, '_blank')
}

function login(){
    //mengambil value dari username dan password dari form loginkuy
    var user=loginkuy.username.value;
    var pass=loginkuy.password.value;
	//melakukan cek user dan pass apakah sama atau tidak jika iya redirect ke halaman laporan penjualan, jika tidak muncul alert password salah
	if (user=="admin"&&pass=="admin123") {
		window.open("penjualan.php")
	}else{
		alert("USERNAME DAN PASSWORD SALAH")
	}
}

