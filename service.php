<?php
//koneksi ke database
$koneksi = new mysqli("localhost","root","","laundry");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap -->

  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Icon -->

  <!-- Java Srcript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Java Srcript -->

  <!-- Title Tab -->
  <title>BubbleWash Laundry</title>
  <!-- Title Tab -->
</head>
<style>
  /* ----------------------------------------------------------- GENERAL ----------------------------------------------------- */
  *{
    font-family: serif;
    margin: 0;
    padding: 0;
  }
  body{
    background-image: url('img/background/bgbody.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }


  /* Navbar */
  .body-navbar{
    background-image: url('img/background/bgnavbar.jpg');
  }
  .brand-toko{
    font-size: 30px;
    margin-left: 25px;
  }
  .brand-toko span{
    font-weight: bold;
    font-size: 35px;
  }
  .nav-btn{
    font-size: 21px;
  }
  .nav-btn:hover{
    border-bottom: 1px solid white;
  }
  .space{
    margin-left: 300px;
  }
  /* Navbar */

  /* Contact */
  .fab-container{
    position: fixed;
    bottom: 30px;
    right: 25px;
    z-index: 999;
    cursor: pointer;
  }
  .fab-icon-holder{
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background: #12389F;
    box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
  }
  .fab-icon-holder:hover{
    opacity: 0.8;
  }
  .fab-icon-holder i {
    justify-content: center;
    align-items: center;
    display: flex;
    margin-top: 20px; 
    height: 100%
    font-style: 150px;
    color: #F2EDDB;
  }
  .fab{
    width: 60px;
    height: 60px;
    background: #12389F;
  }
  .fab-options{
    list-style-type: none;
    margin: 0;
    position: absolute;
    bottom: 70px;
    right: 0;
    opacity: 0;
    transition: all 0.3s ease;
    transform: scale(0);
    transform-origin: 85% bottom; 
  }
  .fab:hover + .fab-options, .fab-options:hover{
    opacity: 1;
    transform: scale(1);
    font-size: 30px;
  }
  .fab-options li{
    display: flex;
    justify-content: flex-end;
    padding: 5px;
  }
  .fab-label{
    padding: 2px 7px;
    align-self: center;
    user-select: none;
    white-space: nowrap;
    border-radius: 5px;
    font-size: 16px;
    background: #F2EDDB;
    color: #12389F;
    box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    margin-right: 10px;
  }
  /* Contact */

  /* Footer */
  footer{
    padding: 30px 0;
    background-color: #12389F;
    color: black;
    text-align: center;
  }
  a{
    color: inherit;
    text-decoration: none;
  }
  ul li{
    display: inline-block;
    padding: 0px;
  }
  footer{
    position: fixed;
    bottom: 0;
  }
  @media (max-height: 800px)
  {
    footer{
      position: static;
    }
  }
  .footer-distributed{
    background-color: #12389F;
    box-sizing: border-box;
    widows: 100%;
    text-align: left;
    font-family: bold 16px serif;
    padding: 50px 50px 30px 50px;
  }
  .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right{
    display: inline-block;
    vertical-align: top;
  }
  .footer-distributed .footer-left{
    width: 30%;
    font-weight: bold;
  }
  .footer-distributed .footer-links{
    color: white;
    margin: 10px 0 7px;
  }
  .footer-distributed .footer-links a{
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: white;
  }
  .footer-distributed .footer-links a:hover{
    color: white;
  }
  .footer-distributed .footer-company-name{
    color: #7096d1; 
    font-size: 14px;
    font-weight: normal;
    margin-bottom: 17px;
    font-weight: bold;
  }
  .footer-distributed .footer-center{
    margin-left: 50px;
    width: 35%;
  }
  .footer-distributed .footer-center i{
    background-color: transparent;
    border: 1px solid white;
    color: white;
    font-size: 20px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
  }
  .footer-distributed .footer-center i .fa-envelope{
    font-size: 17px;
    line-height: 38px;
  }
  .footer-distributed .footer-center p{
    display: inline-block;
    color: white;
    vertical-align: middle;
    margin: 0;
    font-weight: bold;
  }
  .footer-distributed .footer-center p span{
    display: block;
    font-weight: normal;
    font-size: 15px;
    line-height: 2;
    font-weight: bold;
  }
  .footer-distributed .footer-center p a{
    color: white;
    text-decoration: none;
  }
  .footer-distributed .footer-center p a:hover{
    color: white;
  }
  .footer-distributed .footer-right{
    width: 30%;
  }
  .footer-distributed .footer-company-about{
    line-height: 20px;
    color: white;
    font-size: 15px;
    font-weight: normal;
    font-weight: bold;
  }
  .footer-distributed .footer-icons{
    margin-top: 10px;
  }
  .footer-distributed .footer-icons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    border: 1px solid;
    border-radius: 2px;
    font-size: 23px;
    color: white;
    text-align: center;
    line-height: 35px;
    margin-right: 5px;
  }
  .footer-distributed .footer-icons a:hover{
    background-color: #f7f2eb;
    color: #12389F;
    border: 1px solid #12389F;
  }
  @media(max-width: 880px){
    .footer-distributed .footer-links, .footer-distributed .footer-center, .footer-distributed .footer-right,{
      display: block;
      width: 100%;
      margin-bottom: 40px;
      text-align: center;
    }
    .footer-distributed .footer-center i{
      margin-left: 0;
    }
  }
  /* Footer */
  /* ---------------------------------------------------------- GENERAL END --------------------------------------------------- */

  /* ----------------------------------------------------------- SERVICE ------------------------------------------------------ */
  /* Title */
  .title-layanan-category{
    text-align: center;
    font-weight: bold;
    color: #12389F;
    margin-bottom: 0;
    background-color: #F2EDDB;
    border-radius: 10px;
    border: 1px solid #12389F;
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    padding: 10px 0;
    margin-left: 390px;
    margin-right: 390px;
  }
  /* Title */

  /* Service */
  .layanan{
    background-color: #F2EDDB;
    color: black;
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    border: 1px solid rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    border: 1px solid #12389F;
  }
  .layanan:hover{
    background-image: url('img/background/bgbody.jpg');
    border: 2px solid #12389F;
  }
  .judul-layanan{
    text-align: center;
    font-weight: bold;
    color: #12389F;
    margin-top: 15px;
    margin-bottom: 0px;
    -webkit-text-stroke: 1px rgba(0, 0, 0, 0.2);
  }
  .title-layanan{
    color: #12389F;
    font-weight: bold;
    text-align: center;
    font-size: 19px;
    margin-top: 0px;
    margin-bottom: 5px;
  }
  .harga-layanan{
    text-align: left;
    font-size: 18px;
    padding: 5px 0px 15px;
    text-align: center;
  }
  .harga-layanan3{
    text-align: left;
    font-size: 18px;
    padding: 5px 0px 0px;
    text-align: center;
  }
  .harga-layanan2{
    text-align: left;
    font-size: 18px;
    padding: 5px 0px 0px;
    margin-left: 40px;
  }
  .img-layanan{
    padding: 5px 7px 0px 5px;
    border-radius: 30px;
    margin-bottom: 0px;
  }
  .menu-layanan{
    color: #12389F;
    font-size: 20px;
    -webkit-text-stroke: 1px rgba(0, 0, 0, 0.2);
  }
  .menu-layanan:hover{
    color: #12389F;
    background-color: rgba(18, 56, 159, 0.1); 
  }
  .container-navtabs .nav-layanan .active{
    background-color: rgba(18, 56, 159, 0.1);
    color: #12389F;
    border: 1px solid #12389F;
    box-shadow: inset -3px 0px rgba(0, 0, 0, 0.3);
  }
  .allservice{
    background-color: rgba(18, 56, 159, 0.1);
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    border-radius: 15px;
    padding: 1px 0px;
    margin: 0px 30px 30px;
    border: 1px solid #12389F;
  }
  .estimasi-layanan{
    text-align: left;
    font-size: 17px;
    padding: 0px 0px 15px;
    text-align: center;
    margin-top: 0px;
  }
  /* Service */
  /* --------------------------------------------------------- SERVICE END ---------------------------------------------------- */
</style>
<body>
  <!-------------------------------------------------------------- Navbar --------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark body-navbar">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        <a class="navbar-brand brand-toko" href="index.html">
          <img src="img/logo/short_logo.jpg" alt="" width="60" height="60" class="me-2 logo">
          <span>BubbleWash </span> Laundry
        </a>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link nav-btn space " aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn active" href="service.php">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn " href="histori.php">Check Status Laundry</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!------------------------------------------------------------ Navbar End -------------------------------------------------------->


  <!-------------------------------------------------------------- Contact --------------------------------------------------------->
  <div class="fab-container">
    <div class="fab fab-icon-holder">
      <i class="fa fa-plus"></i>
    </div>

    <ul class="fab-options">
      <li>
        <span class="fab-label">Whatsapp</span>
        <div class="fab-icon-holder">
          <a href="#"><i class="fa-brands fa-whatsapp" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Instagram</span>
        <div class="fab-icon-holder">
          <a href="#"><i class="fa-brands fa-instagram" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Facebook</span>
        <div class="fab-icon-holder">
          <a href="#"><i class="fa-brands fa-square-facebook" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Tiktok</span>
        <div class="fab-icon-holder">
          <a href="#"><i class="fa-brands fa-tiktok" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Telegram</span>
        <div class="fab-icon-holder">
          <a href="#"><i class="fa-brands fa-telegram" style="margin-top: 10px;"></i></a>
        </div>
      </li>
    </ul>
  </div>
  <!------------------------------------------------------------ Contact End ------------------------------------------------------->


  
  <!------------------------------------------------------------ Service ------------------------------------------------------------>
  <div class="container container-navtabs mt-3">
    <nav class="nav-layanan">
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link menu-layanan active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Unit Laundry</button>
        <button class="nav-link menu-layanan" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Package Laundry</button>
      </div>
    </nav>
  </div>
  <div class="tab-content" id="nav-tabContent">
    <!-- Unit -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="allservice mb-4">
        <h1 class="judul-layanan">─ Unit Laundry ─</h1>
        <div class="container mt-4 mb-5">
          <div class="row row-cols-1 row-cols-md-5 g-2">
            <?php $ambil = $koneksi->query("SELECT * FROM jenis"); ?>
            <?php while($perjenis = $ambil->fetch_assoc()){ ?>
              <div class="col">
                <div class="card layanan">
                  <img src="img/service/<?php echo $perjenis['gambar'];?>" class="card-img-top img-layanan" alt="...">
                  <div class="card-body body-layanan">
                    <h5 class="card-title title-layanan"><?php echo $perjenis['kode_jenis'];?> | <?php echo $perjenis['jenis_barang'];?></h5>
                    <p class="card-text harga-layanan">IDR. <?php echo number_format($perjenis['harga_jenis']);?>.-</p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>
    <!-- Unit -->
    <!-- Package -->
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="allservice mb-4">
        <h1 class="judul-layanan">─ Package Laundry ─</h1>
        <div class="container mt-4 mb-5">
          <div class="row row-cols-1 row-cols-md-5 g-2">
            <?php $ambil = $koneksi->query("SELECT * FROM paket"); ?>
            <?php while($perpaket = $ambil->fetch_assoc()){ ?>
              <div class="col">
                <div class="card layanan">
                  <img src="img/service/<?php echo $perpaket['gambar'];?>" class="card-img-top img-layanan" alt="...">
                  <div class="card-body body-layanan">
                    <h5 class="card-title title-layanan"><?php echo $perpaket['nama_paket'];?></h5>
                    <p class="card-text harga-layanan3">IDR. <?php echo number_format($perpaket['harga_paket']);?>.-</p>
                    <p class="card-text estimasi-layanan">Estimasi : <?php echo $perpaket['estimasi'];?> hari.</p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Package -->
  </div>


  <!-------------------------------------------------------------- Footer ----------------------------------------------------------->
  <footer class="footer-distributed">
    <div class="footer-left">
      <img src="img/logo/long_logo.jpg" style="width: 330px;">
      <p class="footer-links">
        <a href="index.php">Home</a>
        |
        <a href="service.php">Services</a>
        |
        <a href="histori.php">Transaction History</a>
        |
        <a href="https://maps.app.goo.gl/9z7noQ9cd1tiwjq56">Outlet</a>
      </p>
      <p class="footer-company-name">Copyright &copy; 2024 - <strong>BubbleWash</strong>,  All Rights Reserved. </p>
      <div class="footer-icons">
        <ul>
          <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa-solid fa-location-dot"></i>
        <p><span>BubbleWash Jakarta</span>
        Jl. Raya Casablanca No.88, Jakarta.</p>
      </div>
      <div>
        <i class="fa-solid fa-fax"></i>
        <p>(021) 21236158</p>
      </div>
      <div>
        <i class="fa-regular fa-envelope"></i>
        <p><a href="#">bubblewashjakarta@gmail.com</a></p>
      </div>
    </div>

    <div class="footer-right">
      <p class="footer-company-about">
        Available Payment :
        <a href="#"><img src="img/home/pay_footer.jpg" style="width: 350px;"></a>
        Download Our App :
        <a href="#"><img src="img/home/app_footer.jpg" style="width: 350px;"></a>
      </p>
    </div>
  </footer>
  <!------------------------------------------------------------ Footer End -------------------------------------------------------->



</body>
</html>