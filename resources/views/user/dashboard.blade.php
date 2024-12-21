<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  {{-- style css untuk contact --}}
  <link rel="stylesheet" href="contact/style.css">
  <!-- Favicons -->
  <link href="assets/Yummy/assets/img/favicon.png" rel="icon">
  <link href="assets/Yummy/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/Yummy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/Yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/Yummy/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/Yummy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/Yummy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/Yummy/assets/css/main.css" rel="stylesheet">

  

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    #hero {
      background-image: url('assets/Yummy/assets/img/background/background_tagline.jpg'); /* Ganti dengan path gambar Anda */
      background-size: cover; /* Mengatur ukuran gambar agar mencakup seluruh elemen */
      background-position: center; /* Menempatkan gambar di tengah */
      background-repeat: no-repeat; /* Mencegah pengulangan gambar */
      min-height: 100vh; /* Menjaga hero section setinggi layar penuh */
      background-size: cover; /* Memastikan background mencakup seluruh hero section */
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .food-image {
      position: absolute; /* Menggunakan posisi absolut untuk mengatur letak gambar */
      bottom: 0; /* Mengatur gambar agar berada tepat di atas garis bawah */
      right: 15%; /* Mengatur posisi horizontal gambar ke tengah */
      transform: translateX(-50%); /* Mengoreksi posisi agar benar-benar berada di tengah */
      width: 500px; /* Atur lebar gambar sesuai kebutuhan */
      height: auto; /* Pertahankan rasio aspek gambar */
      z-index: 50;
    }

    .navbar-profile {
        position: relative;
        display: inline-block;
    }

    .profile-picture {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        background-color: white;
        min-width: 150px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-menu a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-menu a:hover {
        background-color: #ddd;
    }
  </style>

</head>

<body>

  <div class="modal fade" id="modalprofile" tabindex="-1" aria-labelledby="modalprofileLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <!-- Header -->
            <div class="modal-header text-white border-0" style="background-color: #87CEEB; border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
                <h5 class="modal-title fw-semibold" id="modalprofileLabel">
                    <i class="bi bi-person-circle me-2"></i> Data Pemesan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Body -->
            <div class="modal-body text-center" style="background-color: #f7faff; color: #333;">
                <p class="mb-3 fs-5 fw-medium text-muted">Selamat Datang!</p>
                <p class="mb-4">Klik tombol di bawah untuk melanjutkan ke halaman profil Anda dan menyelesaikan proses pemesanan.</p>
            </div>
            <!-- Footer -->
            <div class="modal-footer justify-content-center border-0" style="background-color: #f7faff; border-bottom-left-radius: 1rem; border-bottom-right-radius: 1rem;">
              <a href="/user/profile" class="btn-profile-modern">
                <i class="bi bi-arrow-right-circle me-2"></i> Pergi ke Halaman Profil
              </a>
            </div>
        </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Mengecek jika URL mengandung hash #profile
    if (window.location.hash === '#profile') {
        // Inisialisasi dan tampilkan modal Bootstrap 5
        let myModal = new bootstrap.Modal(document.getElementById('modalprofile'));
        myModal.show();
    }

    // Event listener untuk menghapus hash ketika modal ditutup
    let modalElement = document.getElementById('modalprofile');
    modalElement.addEventListener('hidden.bs.modal', function () {
        // Hapus hash dari URL
        history.replaceState(null, null, ' ');
    });
  </script>

  <!-- CSS untuk Tombol dan Modal -->
  <style>
    .btn-profile-modern {
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        color: white;
        background-color: #87CEEB;
        border: none;
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 6px 12px rgba(135, 206, 235, 0.3);
    }

    .btn-profile-modern:hover {
        background-color: #70b9d6; /* Warna hover lebih gelap */
        box-shadow: 0 8px 16px rgba(112, 185, 214, 0.4);
        transform: translateY(-3px);
    }

    .modal-content {
        border-radius: 20px; /* Membuat sudut modal lebih bulat */
        overflow: hidden;
    }

    .modal-header, .modal-footer {
        border: none; /* Menghilangkan border bawaan */
    }
  </style>

  <!-- Ikon Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">





  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Wedding11<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#">Booking</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="navbar-profile">
        <img src="assets/Yummy/assets/img/testimonials/testimonials-1.jpg" alt="Profile Picture" class="profile-picture" onclick="toggleDropdown()">
        <div id="dropdownMenu" class="dropdown-menu">
          <a href="/user/profile">Profile</a>
          <a href="/user/order">Pesanan Saya</a>
          <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="dropdown-item">
               Logout
            </button>
        </form>
        </div>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start" style="z-index: 40">
          <h2 data-aos="fade-up" style="color: #fff">Your Premium Wedding<br>Organizer</h2>
          <p data-aos="fade-up" data-aos-delay="100" style="color: #fff">Kami hadir untuk mewujudkan pernikahan impian Anda, dengan sentuhan cinta dan perhatian pada setiap detail, menjadikan hari spesial Anda sempurna dan tak terlupakan.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="user/booking#pemesanan" class="btn-book-a-table">Booking Sekarang</a>
            <a href="https://www.youtube.com/watch?v=IvBToRiExbk" class="glightbox btn-watch-video d-flex align-items-center" style="color: #fff"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start" style="z-index: 10">
          <img src="assets/Yummy/assets/img/wedding/bride-removebg-preview.png" class="img-fluid food-image" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Pelajari Lebih Lanjut <span>Tentang Kami</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/Yummy/assets/img/wedding/about.jpg) ; background-size: cover;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Booking Now !</h4>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Selamat datang di WeddingSebelas, tempat di mana impian pernikahan Anda menjadi kenyataan. Kami adalah tim profesional yang berdedikasi untuk menciptakan momen pernikahan yang sempurna dan tak terlupakan. 
                Dengan sentuhan kreativitas, perhatian terhadap detail, dan layanan yang dipersonalisasi, kami siap membantu Anda merancang dan merayakan hari istimewa Anda sesuai keinginan.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Certified Wedding Planner</li>
                <li><i class="bi bi-check2-all"></i> 15 tahun pengalaman dalam wedding planning</li>
                <li><i class="bi bi-check2-all"></i> Spesialis Wedding Tradisional & Modern</li>
                <li><i class="bi bi-check2-all"></i> Kemampuan Beradaptasi yang sangat baik</li>
                <li><i class="bi bi-check2-all"></i> Jaringan & reputasi bisnis yang baik</li>
                <li><i class="bi bi-check2-all"></i> Tim eksklusif yang sudah terlatih</li>
              </ul>
              <p>
                Dari perencanaan awal hingga hari-H, kami akan bersama Anda di setiap langkah, memastikan setiap detail terencana dengan sempurna. 
                Percayakan pernikahan Anda kepada kami, dan biarkan kami menciptakan kisah cinta yang abadi.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/Yummy/assets/img/wedding/wedding-katering.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=HU3KDz_7PC8" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Kenapa harus memilih Wedding11?</h3>
              <p>
                Kami menghadirkan layanan wedding organizer yang profesional dan penuh dedikasi. 
                Setiap detail acara pernikahan Anda akan diatur dengan sempurna, mulai dari dekorasi hingga layanan catering. Tim kami siap membantu mewujudkan pernikahan impian Anda dengan pengalaman terbaik
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-balloon"></i>
                  <h4>Dekorasi Menawan</h4>
                  <p>Kami menyajikan dekorasi pernikahan yang elegan sesuai dengan tema pilihan Anda, dari modern hingga tradisional, dengan sentuhan artistik yang memukau</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Layanan Catering Eksklusif</h4>
                  <p>Pilihan menu yang lengkap dan lezat, disiapkan oleh koki berpengalaman, memastikan pengalaman kuliner yang sempurna di hari istimewa Anda</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-camera"></i>
                  <h4>Dokumentasi Profesional</h4>
                  <p>Tim dokumentasi kami akan mengabadikan setiap momen berharga dalam pernikahan Anda dengan hasil foto dan video berkualitas tinggi</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pengantin Bahagia</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Acara Pernikahan Terorganisir</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Tim Wedding Organizer Berpengalaman</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/Yummy/assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/Yummy/assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/Yummy/assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/Yummy/assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/Yummy/assets/img/gallery/1.jpg"><img src="assets/Yummy/assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/Yummy/assets/img/gallery/2.jpg"><img src="assets/Yummy/assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/Yummy/assets/img/gallery/3.jpg"><img src="assets/Yummy/assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/Yummy/assets/img/gallery/4.jpg"><img src="assets/Yummy/assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/Yummy/assets/img/gallery/5.jpg"><img src="assets/Yummy/assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/Yummy/assets/img/gallery/6.jpg"><img src="assets/Yummy/assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/Yummy/assets/img/gallery/gallery-7.jpg"><img src="assets/Yummy/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/Yummy/assets/img/gallery/gallery-8.jpg"><img src="assets/Yummy/assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          {{-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> --}}
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31684.780528653904!2d107.52474017431642!3d-6.938605499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ef4f76059d55%3A0xd56558d8293a349e!2sClassic%20Management%20%7C%20Wedding%20Organizer!5e0!3m2!1sid!2sid!4v1730699990374!5m2!1sid!2sid" width="100%" height="350" style="border:0;" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Jl. Taman Holis Indah II No.A2 no. 4, Cigondewah Kaler, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40214</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>Wedding11@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>0815-6005-610</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Senin-Jumat:</strong> 08.00 - 23.00;
                  <strong>Sabtu - Minggu:</strong> Tutup
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-12" align="center">
            <a href="mailto:damnducky0@gmail.com" class="btn-book-a-table">Kirim pesan kepada kami</a>
          </div>
        </div>
      </div >
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> Wedding11@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/Yummy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/Yummy/assets/vendor/aos/aos.js"></script>
  <script src="assets/Yummy/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/Yummy/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/Yummy/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/Yummy/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/Yummy/assets/js/main.js"></script>

  <script>
    function toggleDropdown() {
        var dropdown = document.getElementById("dropdownMenu");
        if (dropdown.style.display === "none" || dropdown.style.display === "") {
            dropdown.style.display = "block";
        } else {
            dropdown.style.display = "none";
        }
    }

    // Menutup dropdown jika klik di luar
    window.onclick = function(event) {
        if (!event.target.matches('.profile-picture')) {
            var dropdowns = document.getElementsByClassName("dropdown-menu");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.style.display === "block") {
                    openDropdown.style.display = "none";
                }
            }
        }
    }

  </script>

</body>

</html>