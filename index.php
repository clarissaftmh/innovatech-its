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
      <h1>Innovate the dream city</h1>
      <h2>Innovation Competition held by HMIT ITS</h2>
      <div class="d-lg-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="assets/img/visi.jpg" class="img-fluid animated" alt="">
    </div>
  </div>
</div>
</div>
</div>

</section><!-- End Hero -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <h3>Visi</h3>
            <p>
            Innovatech ITS sebagai wadah kembang keilmuan masyarakat untuk berinovasi 
            di bidang Smart City dan IOT di Indonesia.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Misi</h3>
            <ul>
              <li><i class="ri-check-double-line"></i> Meningkatkan kemampuan serta pengetahuan masyarakat tentang Smart City dan IOT</li>
              <li><i class="ri-check-double-line"></i> Menyebarluaskan informasi mengenai IOT</li>
              <li><i class="ri-check-double-line"></i> Mendukung inovasi anak bangsa</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Event</h2>
          <h3>Innovatech ITS mengadakan serangkaian acara sebagai berikut</h3>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Seminar</a></h4>
              <p>Seminar yang diadakan dengan tema Cyber Security dan IOT. <u></u></p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Workshop</a></h4>
              <p>Kegiatan yang diikuti oleh member Innovatech dan para finalis</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Innovation Competition</a></h4>
              <p>Ajang kompetisi mengenai inovasi dibidang IOT dan Smart City untuk Mahasiswa di Indonesia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Virtual Tour</a></h4>
              <p>Mmemperkenalkan daerah wisata suatu tempat untuk menunjang wawasan peserta</p>
            </div>
          </div>

        </div>

      </div>
    </section>

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
--></div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Competition</li>
          <li data-filter=".filter-card">Seminar</li>
          <li data-filter=".filter-web">Workshop</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/foto/comp1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Competition</h4>
              <p>Competition</p>
              <a href="assets/img/foto/comp1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/foto/workshop1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Workshop</h4>
              <p>Workshop</p>
              <a href="assets/img/foto/workshop1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/foto/comp2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Competition</h4>
              <p>Competition</p>
              <a href="assets/img/foto/comp2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/foto/seminar1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Seminar</h4>
              <p>Seminar</p>
              <a href="assets/img/foto/seminar1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
           
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/foto/workshop2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Workshop</h4>
              <p>Workshop</p>
              <a href="assets/img/foto/workshop2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/foto/comp3.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Competition</h4>
              <p>Competition</p>
              <a href="assets/img/foto/comp3.png" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
             
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/foto/seminar2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Seminar</h4>
              <p>Seminar</p>
              <a href="assets/img/foto/seminar2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/foto/seminar3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Seminar</h4>
              <p>Seminar</p>
              <a href="assets/img/foto/seminar3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
        
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/foto/workshop3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Workshop</h4>
              <p>Workshop</p>
              <a href="assets/img/foto/workshop3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
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

<?php
    include 'footer.php'
?>  