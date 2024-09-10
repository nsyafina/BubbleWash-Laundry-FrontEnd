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

  /* --------------------------------------------------------- HISTORY -------------------------------------------------------- */
  .histori{
    width: 1120px;
    height: 320px;
    background-color: rgba(18, 56, 159, 0.1);
    border: 1px solid #12389F;
    border-radius: 20px;
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
  }
  .cek{
    text-align: center;
    font-weight: bold;
    color: #12389F;
    margin-top: 20px;
    margin-bottom: 40px;
  }
  .btn-histori{
    color: #F2EDDB;
    background: #12389F;
    border: 1px solid rgba(0, 0, 0, 0.4);
    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    border-radius: 5px;
    transition: transform 0.2s ease;
    margin-left: 20px
  }
  .btn-histori:active{
    transform: scale(0.96);
  }
  .btn-histori:hover{
    color: black;
    background: orange;
  }
  .box-form-cek{
    margin-left: 30px;
    border: 1px solid #12389F;
    margin-bottom: 0px;
    box-shadow: inset -2px -2px rgba(0, 0, 0, 0.4);
  }
  .tabel-transaksi{
    background-color: #12389F;
    color: white;
    border: 1px solid rgba(0, 0, 0, 0.8);
    margin-top: 0px;
  }
  .tabellll{
    margin-top: 0px;
    padding: 0px 30px;
  }
  /* ------------------------------------------------------- HISTORY END ------------------------------------------------------ */

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
            <a class="nav-link nav-btn " href="service.php">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn active" href="histori.php">Check Status Laundry</a>
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


  <!------------------------------------------------------------ History ------------------------------------------------------------>
  <div class="container mt-4 mb-5">
    <div class="histori">
      <h1 class="cek">─ Check Status Laundry ─</h1>
      <form method="post" action="histori.html">
        <div class="container">
          <div class="row my-4">
            <div class="col-md-10">
              <input type="text" name="" class="form-control box-form-cek" placeholder="Silahkan Masukkan Kode Transaksi Anda!" required>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-histori">Cek Status</button>
            </div>
          </div>
        </div>
      </form>

      <div class="container">
        <div class="tabellll">
          <table class="table table-bordered table-striped mb-5" style="border: 1px solid rgba(0, 0, 0, 0.4);">
            <thead class="tabel-transaksi">
              <tr>
                <th>Nama Konsumen</th>
                <th>Tanggal Masuk</th>
                <th>Paket</th>
                <th>Jenis Barang</th>
                <th>Total</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (!empty($data)) {
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?= $row->nama_konsumen; ?></td>
                    <td><?= $row->tgl_masuk; ?></td>
                    <td><?= $row->nama_paket; ?></td>
                    <td><?= isset($row->jenis_barang) ? $row->jenis_barang : '-'; ?></td>

                    <td>Rp. <?= number_format($row->grand_total); ?>,-</td>
                    <td><?= $row->status; ?></td>
                  </tr>
                <?php }
              } else { ?>
                <tr>
                  <td colspan="6" class="">Tidak Ada Data</td>
                </tr>
              <?php }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!---------------------------------------------------------- History End ---------------------------------------------------------->



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