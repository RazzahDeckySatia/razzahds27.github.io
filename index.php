<?php
require 'controller.php';
$all_data = query("SELECT * FROM data_donatur");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masjid Wikrama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/f3a7a5168b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'poppins', sans-serif;
}
html{
  scroll-behavior: smooth;
}

body{
  padding: 5px 5%;
}
.header-1{
position: fixed;
top: 0;
left: 0;
width: 100%;
display: flex;
justify-content: space-between;
align-items: center;
transition: 0.6s;
padding: 40px 100px;
background-color: #DBDFEA;
z-index: 100000;
}
.header-1 .sticky{
background-color: #f2f2f2;
border-radius: 10px;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}
.header-1 p {
  display: inline-block;
}


nav{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}

.logo_1{
  width: 69.45px;
  height: 69.45px;
  position: relative;
  text-transform: uppercase;
  letter-spacing: 2px;
  transition: 0.6s;
}
nav ul{
position: relative;
display: flex;
justify-content: center;
align-items: center;
} 
nav ul li{
  position: relative;
  list-style: none;
  display: inline-block;
  list-style: none;
  margin: 8px 10px;
}

nav ul li a{
  color: black;
  text-decoration: none;
  font-size: 18px;
  position: relative;
  transition: 0.5s;
}

nav ul li a::after{
  content: '';
  width: 0;
  height: 3px;
  background: #213363;
  position: absolute;
  left: 0;
  bottom: -6px;
  transition: 0.6s;
}

nav ul li a:hover::after{
  width: 100%;
}
nav p{
  padding-right: 550px;
  font-weight: bold;
  font-size: 30px;
  padding-top: 20px;
}
.header-text-1{
  margin-top: 20px;
  font-size: 30px;
}

.header-text-1 h1{
  font-size: 70px;
  margin-top: 20px;
  font-weight: bold;
}

.header-text-1 h1 span{
  color: #1F3984;
}

.header-text-1 p{ 
  width: 631px;
  height: 41px;
  color: #919191;
}
.foto img{
  width: 500px;
  height: 600px;
  float: right;
  border-radius: 10px;
  margin-top: -300px;
}
.button-1 {
  font-size: 18px;
  letter-spacing: 2px;
  text-transform: uppercase;
  display: inline-block;
  position: relative;
  text-align: center;
  font-weight: bold;
  padding: 0.7em 2em;
  border: 3px solid #1F3984;
  border-radius: 2px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.1);
  text-decoration: none;
  transition: 0.3s ease all;
  z-index: 1;
  border-radius: 10px;
  background-color: #1F3984;
  color: white;
}

.button-1:before {
  transition: 0.5s all ease;
  position: absolute;
  top: 0;
  left: 50%;
  right: 50%;
  bottom: 0;
  opacity: 0;
  content: '';
  background-color: white;
  z-index: -1;
}

.button-1:hover, .button-1:focus {
  color: #1F3984;
}

.button-1:hover:before, .button-1:focus:before {
  transition: 0.5s all ease;
  left: 0;
  right: 0;
  opacity: 1;
}

.button-1:active {
  transform: scale(0.9);
}


.card2 {
  max-width: 700px;
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  padding: 70px;
  text-align: center;
  display: inline-block;
  margin: 20px;
}

.logo1 {
  display: block;
  max-width: 80%;
  height: 50px;
  margin-bottom: 50px;
}

.name-1 {
  text-align: left;
  font-size: 35px;
  font-weight: bold;
  margin-bottom: 5px;
}
.contact-1 {
  text-align: left;
  font-size: 20px;
  line-height: 1.5;
  margin-bottom: 10px;
}
.foto2{
  width: 350px;
  height: 600px;
  float: right;
  border-radius: 10px;
  margin-top: -430px;
}

.card1 {
  max-width: 500px;
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  padding: 70px;
  text-align: center;
  display: inline-block;
  margin: 20px;
}
.card2 h1{
  text-align: left;
  color: #1F3984;
  font-weight: bold;
}
.text1 h1{
  text-align: 20px;
}
.text1 p{
  text-align: 10px;

}

.card-2 {
  background-color: #f2f2f2;
  border-radius: 25px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  padding: 30px;
  width: 100%;
}

.section-2 {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
}

.section-2 span {
  color: #999999;
  font-size: 12px;
}

.section-2 .value-2 {
  font-weight: bold;
  font-size: 18px;
  text-align: center;
}

.progress-bar-2 {
  background-color: #1F3984;
  height: 20px;
  border-radius: 10px;
  margin-bottom: 10px;
}

.progress-bar-2 .progress-2{
  height: 100%;
  background-color: #66CCFF;
}
.gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 20px;
}
.text-jalan{
  border: 1px solid;
  font-size: 30px;
  background-color: #1F3984;
  border-radius: 5px;
  width: 95rem;
}

.gallery img {
  width: 400px;
  height: 650px;
  object-fit: cover;
  margin: 10px;
  border-radius: 20px;
}
.header-1{
  max-width: 110rem;
  height: 20rem;
}
.logo {
      width: 50px; /* Ubah ukuran logo sesuai kebutuhan */
      height: auto; /* Sesuaikan dengan aspek rasio logo */
}
#test{
  color: black;
}
.sticky{
  position:absolute;
  right:300px;
  z-index: 100000;
  background : white;
  width:100%;
  margin-right:100px;
  padding-bottom:20px;
}
.navbar-brand{
  width: 200px;
  margin-top:130px;
  margin-left:20px;
}
.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

.footer-main {
    background-color: #091D40;
    padding: 24px 0px;
    color: white;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(2, auto);
    grid-gap: 10px;
    margin: 0 auto;
    max-width: 100%;
    justify-items: center;
}

.footer-grid {
    padding-left: 20px;
}

.footer-grid p {
    margin: 10px 0;
}
.footer-2 ul li{
  font-size: 25px;
}
.input-container input[type="text"] {
    border-radius: 5px;
    height: 55px;
    width: 300px;
    padding: 5px;
    border: 1px solid #ccc;
  }
  .input-column input[type="text"] {
    border-radius: 5px;
    height: 40px;
    width: 300px;
  }
  /* CSS dasar */

/* Gaya untuk ukuran layar kecil */
@media only screen and (max-width: 600px) {
  /* Mengubah ukuran font */
  body {
    font-size: 14px;
  }
  
  /* Mengubah ukuran gambar */
  img {
    max-width: 100%;
    height: auto;
  }
}

/* Gaya untuk ukuran layar menengah */
@media only screen and (min-width: 601px) and (max-width: 1024px) {
  /* Mengubah ukuran font */
  body {
    font-size: 16px;
  }
  
  /* Mengubah ukuran gambar */
  img {
    max-width: 80%;
    height: auto;
  }
}

/* Gaya untuk ukuran layar besar */
@media only screen and (min-width: 1025px) {
  /* Mengubah ukuran font */
  body {
    font-size: 18px;
  }
  
  /* Mengubah ukuran gambar */
  img {
    max-width: 60%;
    height: auto;
  }
}

</style>
<body>
<section id="beranda" class="py-5">
    <div class="header-atas">
        <div class="container-atas">
        <nav class="navbar navbar-expand-lg navbar-white bg-white  navbar-custom" id="test">
          <div class="sticky">
          <img style="margin-top: -30px;"src="img/logosmk.png" alt="Logo" class="logo">
    <a style="font-weight: bold;"class="navbar-brand" href="#">Smk Wikrama <br> Bogor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#manfaat">Manfaat Wakaf</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cara">Cara Wakaf</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#data_donatur">Data Wakaf</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#galer">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Web Wikrama</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          </div>
        </nav>
        </div>
        <section class="banner-1"></section>
        <script type="text/javascript">
          window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrolly > 0);
          })
        </script>
        <div class="header-text-1">
            <br><br><br>
            <p>Masjid Besar SMK Wikrama Bogor </p>
            <h1>Mari <span> Tingkatkan</span><br><span>Keimanan </span>Masyarakat<br>SMK Wikrama Bogor</h1>
            <div class="foto">
              <img src="img/masjidwk.png">
            </div><br><br>
            <a href="inputdata.php" class="button-1">Beri Bantuan Shodaqo</a>
        </div>
    </div>
</section>
<br><br><br><br><br><br><br><br>
    </head>
    </section>
<body>
  <div class="card-2">
    <div class="section-2">
      <div>
      <h3>Total Dana</h3>
            <div class="value-2" id="total-target">
              <h1>1.000.000,00</h1>
            </div>
        </div>
      <div>
      <h3>Total Dana Terkumpul</h3>
          <div class="value-2" id="total-dana">
          <?php
    $total_dana = 0;
    $tota_harus = 1000.000;
    $query = "SELECT nominal FROM data_donatur";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)){
        $total_dana += $row['nominal'];
    }

    $format_nominal = number_format($total_dana, 3, '.', '.');

    // Pastikan nilai $format_nominal dan $tota_harus adalah numerik sebelum operasi pembagian
    if (is_numeric($format_nominal) && is_numeric($tota_harus) && $tota_harus != 0) {
        $bar = ($format_nominal / $tota_harus) * 100;
    } else {
        // Penanganan jika nilai tidak numerik atau pembagian dengan 0
        $bar = 0;
    }
?>

                <?php
                    echo '<h1 style="font-size: 35px;  color:black"> Rp: '. $format_nominal .',00</h1>';
                ?>
          </div>
      </div>
      <div>
          <h3>Total Donatur</h3>
            <div class="value-2" id="total-donatur">
              <div class="total-donatur">
                <?php $angka = 0; ?>
                <?php foreach ($all_data as $data) : ?>
                <?php $angka++ ?>
                <?php endforeach; ?>
                <h1><?= $angka; ?></h1>
              </div>
              </div>
        </div>
      </div>
      <hr>
    <div class="display: flex; justify-content: center">
      <div class="progress-bar-2" style="width: 93%; background-color: #999999; height: 45px; border-radius: 5px; overflow: hidden; text-align: center; margin-top:auto">
      <div class="progress-2" style=" width: <?php echo $bar ?? 0 ?>%;"></div>
      <span class="progress-text-2" style="position: absolute; top: 1120px; left: 90%; transform: translate(-50%, -50%); color: white; "><?php echo '<h1 style="color:black">' . $bar . '%<h1>'; ?></span>
    </div>
</div>
</div>
    <div class="section-2">
      <div class="spinning-text-2" id="spinning-text">
        <marquee class="text-jalan" behavior="scroll" direction="left" scrolLamount="15">
                  <?php foreach($all_data as $data) : ?>
                    <h3 style="color: #FFF500; margin-left: 50px; display: inline; animation-iteration-count: infinite; "><?= $data['nama_donatur']?> - <?= $data['kategori'] ?> | <?= "Rp" . number_format($data['nominal'], 3, '.', '.'); ?> </h3>
                    <?php endforeach; ?>
        </marquee>
      </div>
    </div>
  </div>
  </div>
    
  <br><br><br>
  <section id="manfaat" class="bg-light py-5">
    <div id="manfaat">
    <div class="header-text-1">
        <div class="text1"><h1><span>Manfaat </span>Wakaf, infaq<br> shodaqoh.</h1><br>
        <p>Berikut adalah beberapa keutamaan wakaq, infaq shodaqoh yang akan anda dapatkan.</p><br><br></div>
        </div>
        </div>
        <div class="card1">
    <img style="width: 100px; height:100px;"src="img/hati.jpg" alt="Logo" class="logo1">
    <div class="name-1">Menjadikan hati lebih tenang</div>
    <div class="contact-1">
    Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami
    </div>
  </div>
  <div class="card1">
    <img style="width: 100px; height:100px;" src="img/ceklis.jpg" alt="Logo" class="logo1">
    <div class="name-1">Menjauhkan dari bahaya</div>
    <div class="contact-1">
    Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."
    </div>
  </div>

  <div class="card1">
    <img style="width: 100px; height:100px;" src="img/tank.jpg" alt="Logo" class="logo1">
    <div class="name-1">Terbukanya pintu rezeki </div>
    <div class="contact-1">
    Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya.
    </div>
  </div>
  <div class="card1">
    <img style="width: 100px; height:100px;" src="img/bintang.jpg" alt="Logo" class="logo1">
    <div class="name-1">pahala yang tak terputus</div>
    <div class="contact-1">
    Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.
    </div>
  </div>
  <div class="foto2">
                    </foto><img src="img/foto2.png">
                    </div>
    </section>
<br><br><br>
<section id="cara" class="bg-light py-5">
        <div id="cara_melakukan">
    <div class="header-text-1">
      <br><br><br><br>
    <div class="text1"><h1><span>Cara Melakukan </span> Wakaf, infaq <br> shodaqoh.</h1><br>
        <p>Berikut adalah Cara melakukan wakaq, infaq shodaqoh untuk membantu pembangunan masjid besar SMK Bogor</p><br><br><br></div>
        </div>
        </div>
        <div class="card2">
            <h1>01</h1>
    <div class="name-1">Isi Form data diri</div>
    <div class="contact-1">
    Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.
    </div>
  </div>
  <div class="card2">
    <h1>02</h1>
    <div class="name-1">Isikan nominal shodaqoh</div>
    <div class="contact-1">
    Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.
    </div>
  </div>
  <div class="card2">
  <h1>03</h1>
    <div class="name-1">upload bukti pembayaran</div>
    <div class="contact-1">
    Pilih motode pembayaran dan upload bukti pembayaranya.
    </div>
  </div>
  <div class="card2">
  <h1>04</h1>
    <div class="name-1">Verifikasi Pembayaran</div>
    <div class="contact-1">
    Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.
    </div>
  </div>
  </section>
  <section id="data_donatur" class="bg-light py-5">
        <div id="data">
    <div class="header-text-1">
    <br><br><br><br>
    <div class="text1"><h1><span>Data donatur </span> Wakaf, infaq <br> shodaqoh.</h1><br>
        <p>Berikut adalah data donatur wakaf, infaq shodaqoh untuk masjid besar SMK Wikrama Bogor</p><br><br><br></div>
        <table class="table">
    <thead>
        <tr>
            <th>Nama Donatur</th>
            <th>Paket</th>
            <th>Kategori</th> 
            <th>Nominal/Barang</th>
        </tr>
    </thead> 
    <tbody>
    <?php $i = 1; ?>
        <?php foreach( $all_data as $data ) { ?>
        <tr>
            <td><?= $data["nama_donatur"]?></td>
            <td><?= $data["paket"] ?></td>
            <td><?= $data["kategori"] ?></td>
            <td><?= $data["nominal"] ?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php } ?>
                    </tbody>
        </table>
        </div>
        </div>
</section>
        <br>
        <section id="galer" class="bg-light py-5">
        <div id="galeri">
        <div class="header-text-1">
        <div class="text1"><br><br><br><br><h1><span>Gallery </span> Masjid Besar SMK <br> Wikrama Bogor.</h1><br>
        <p>Berikut adalah gallery masjid besar SMK Wikrama Bogor.</p><br><br>
        </div>
        </div> 
        <!-- <div class="galeri"></div>  -->
            <div class="gallery">
             
              <img src="img/galeri1.png" alt="Above Photo 1">
              <img src="img/galeri2.png" alt="Above Photo 2">
              <img src="img/galeri3.png" alt="Above Photo 3">
            </div>

            <div class="gallery">
              
              <img src="img/galeri4.png" alt="Below Photo 1">
              <img src="img/galeri5.png" alt="Below Photo 2">
              <a href="https://www.instagram.com/smkwikrama/" target="_blank">
                  <img src="img/galeri6.png" alt="Below Photo 3">
              </a>

            </div>
          </section>
          <br><br><br>
          
         
          <div class="clearfix">
    <footer class="footer-main">
      <div class="footer-grid">
        <section class="footer-1">
        <img style="margin-top: 65px;"src="img/logosmk.png" alt="" width="55">
          <h1 style="float:right; padding: 15px; margin-top: 40px;">SMK Wikrama <br> Bogor</h1>
          <br><br>
          <h3>Alamat</h3>
          <h3>Jl. Raya Wangun <br> Keluarahan Sindangsari <br> Bogor Timur 16720</h3>
          <br>
          <hr style="background-color: white;">
          <br>
          <h3>Telepon <br> 0251-8242411 / <br> 082221718035 (whatsapp)</h3>
          <br>
          <hr style="background-color: white;">
          <br>
          <i class="fa-brands fa-facebook fa-2x"></i>
          <i class="fa-brands fa-twitter fa-2x"></i>
          <i class="fa-brands fa-instagram fa-2x"></i>
          <i class="fa-brands fa-youtube fa-2x"></i>

        </section>
        <section class="footer-2">
          <br><br>
          <h4>Tentang Wikrama</h4>
          <ul>
          <li>Sejarah</li> <br>
          <li>Peraturan</li><br>
          <li>Rencana Stategi & Prestasi</li> <br>
          <li>Yayasan</li><br>
          <li>Struktur Organisasi</li><br>
          <li>Cabang</li><br>
          <li>Penghargaan</li><br>
          <li>Kerjasama</li><br>
          </ul>
        </section>
        <section class="footer-3">
  <br><br>
  <h4>Kirim Pesan</h4>
  <div class="input-container">
    <div class="input-column">
      <input type="text" name="input1" placeholder="Nama">
    </div><br>
    <div class="input-column">
      <input type="text" name="input2" placeholder="Email">
    </div><br>
    <div class="input-column">
      <input type="text" name="input3" placeholder="Pesan Anda" style="height: 200px;">
    </div>
    <br>
    <button style="float: right; background-color: yellow; color: black; width: 150px; height: 50px; border-radius: 15px; font-weight: bold;"class="btn btn-primary" name="submit">Submit</button>
  </div>
</section>
      </div>
    </footer>
  </div>

</body>
</html>
