<?php
    session_start();
    include 'conn.php';

    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Innovatech ITS';
    include 'header.php';
?>

  

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

 <div class="background">
    <div class="layer">
<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
    
          <a href="index.php">Home</a>
          <h2> Welcome  <?php if ($_SESSION) : ?> <h/h2>
         <?php echo $_SESSION['username']?>
         <?php endif; ?>
      <br><br><br><br>
      <h1>Innovate the dream city</h1>
      <h2>Innovation Competition held by HMIT ITS</h2>
    
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="assets/img/visi.jpg" class="img-fluid animated" alt="">
    </div>
  </div>
</div>
</div>
</div>

</section><!-- End Hero -->

<section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Event</h2>
        </div>

        
          <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="text-align:center">
   
              <h4><a href="">Innovation Competition</a></h4>
              <p>Seminar yang diadakan dengan tema Cyber Security dan IOT. <u></u></p>
              <a href="upload.php" type="submit" name="submit" id="submit" class="btn"style="background: #f8c5a7">Daftar</a> 
            </div>
          </div>

          <br><br>
          <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="text-align:center">
            <style>
            table, th, td {
              border: 2px solid black;
              border-collapse: collapse;
            }
            th{
              text-align:center;
            }
            td {
              padding: 10px;
              text-align: left;
            }
            </style>
            
            <h2>Timeline</h2>

            <p>Berikut ini adalah timeline perlombaan innovation.</p>

            <table style="width:100% " >
              <tr>
                <th>Kegiatan</th>
                <th>Tanggal</th>
              </tr>
              <tr>
                <td>Pendaftaran</td>
                <td>16 Januari 2021-28 Februari 2021</td>
              </tr>
              <tr>
                <td>Technical Meeting</td>
                <td>1 Maret 2021</td>
              </tr>
              <tr>
                <td>Babak Penyisihan</td>
                <td>5 Maret 2021</td>
              </tr>
              <tr>
                <td>Pengumuman Babak Penyisihan</td>
                <td>7 Maret 2021</td>
              </tr>
              <tr>
                <td>Babak Final</td>
                <td>10 Maret 2021</td>
              </tr>
              <tr>
                <td>Pengumuman Lomba</td>
                <td>15 Maret 2021</td>
              </tr>
            </table>
          </div>
          </div>


      </div>
    </section>
 

  <!-- ======= Footer ======= -->
  <?php include 'footer.php' ?>

    

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>