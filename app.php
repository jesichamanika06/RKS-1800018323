<?php
    session_start();
    if (empty($_SESSION['email'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="design.css" >
</head>
<body>
  <center>
    <div class="container">
       <header>
           <div class="logo">
            <a href="#"><img src="uad.jpg" width="100%" height="160" ></a>
           </div>
           
           <div class=prof>
            <a href="#" align="right">Profil</a>
          </div>
       </header>

  <nav>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Perkuliahan</a>
      <ul>
        <li><a href="#">Info pembayaran</a></li>
        <li><a href="#">Matakuliah ditawarkan</a></li>
        <li><a href="krs.html">KRS</a></li>
        <li><a href="#">KRS Ujian ulang</a></li>
        <li><a href="#">Jadwal kuliah</a></li>
        <li><a href="#">Presensi</a></li>
        <li><a href="#">KHS</a></li>
        <li><a href="#">Transkip</a></li>
        <li><a href="#">Praktikum</a></li>
        <li><a href="#">KHS Praktikum</a></li>
        <li><a href="#">UTS & UAS</a></li>
      </ul>
    </li>
    <li><a href="#">Kemahasiswaan</a></li>
    <li><a href="#">Kelulusan</a></li>
    <li><a href="#">Wifi Mhs</a></li>
    <li><a href="#">Forum Portal</a></li>
    <li><a href="#">FAQ</a></li>
    
  </ul>
</nav>
<br>
<br>
        <h2>Portal Akademik</h2>
     
      <br>
       <article>

           <div class="konten">
            
            <div class="judul">

            <table>
              <br>
                <h4>Aktif</h4>
                <p>Status Mahasiswa</p>
              </table>
           </div>
         </div>

           <div class="konten">
            <div class="judul">
              <table>
                <br>
                <h4>4.00</h4>
                <p>IP Komulatif</p>
              </table>
            </div>
           </div>

           <div class="konten">
            <div class="judul">
              <table>
                <br>
                <h4>82</h4>
                <p>SKS</p>
              </table>
            </div>
           </div>

      </article>
       <footer>
            <a href="">@Portal UAD</a>
       </footer>
       <br/>
    </div></center>
</body>
</html>