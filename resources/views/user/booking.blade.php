<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Booking</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/Yummy/assets/img/favicon.png" rel="icon">
    <link href="assets/Yummy/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/Yummy/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Yummy/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Yummy/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Yummy/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/Yummy/assets/css/main.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}



    <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        #hero {
            background-image: url('{{ asset('assets/Yummy/assets/img/background/background_tagline.jpg') }}');
            /* Ganti dengan path gambar Anda */
            background-size: cover;
            /* Mengatur ukuran gambar agar mencakup seluruh elemen */
            background-position: center;
            /* Menempatkan gambar di tengah */
            background-repeat: no-repeat;
            /* Mencegah pengulangan gambar */
            min-height: 100vh;
            /* Menjaga hero section setinggi layar penuh */
            background-size: cover;
            /* Memastikan background mencakup seluruh hero section */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .food-image {
            position: absolute;
            /* Menggunakan posisi absolut untuk mengatur letak gambar */
            bottom: 0;
            /* Mengatur gambar agar berada tepat di atas garis bawah */
            right: 15%;
            /* Mengatur posisi horizontal gambar ke tengah */
            transform: translateX(-50%);
            /* Mengoreksi posisi agar benar-benar berada di tengah */
            width: 500px;
            /* Atur lebar gambar sesuai kebutuhan */
            height: auto;
            /* Pertahankan rasio aspek gambar */
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
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

    <div class="modal fade" id="modalpemesanan" tabindex="-1" aria-labelledby="modalpemesananLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalpemesananLabel">Data Pemesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Ini adalah isi dari modal.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mengecek jika URL mengandung hash #modal
        if (window.location.hash === '#pemesanan') {
            // Inisialisasi dan tampilkan modal Bootstrap 5
            let myModal = new bootstrap.Modal(document.getElementById('modalpemesanan'));
            myModal.show();
        }

        // Event listener untuk menghapus hash ketika modal ditutup
        let modalElement = document.getElementById('modalpemesanan');
        modalElement.addEventListener('hidden.bs.modal', function () {
            // Hapus hash dari URL
            history.replaceState(null, null, ' ');
        });
    </script>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/user" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Wedding11<span>.</span></h1>
            </a>

            {{-- <nav id="navbar" class="navbar">
                <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#chefs">Chefs</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .navbar --> --}}

            <div class="navbar-profile">
                <img src="{{ asset('assets/Yummy/assets/img/testimonials/testimonials-1.jpg') }}" alt="Profile Picture"
                    class="profile-picture" onclick="toggleDropdown()">
                <div id="dropdownMenu" class="dropdown-menu">
                    <a href="#">Profile</a>
                    <a href="#">Settings</a>
                    <a href="#">Logout</a>
                </div>
            </div>
            {{-- <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i> --}}

        </div>
    </header><!-- End Header -->

    <main id="main" class="menu">

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <br><br><br>
                    <h1 class="display-4 fw-bolder">Wujudkan Pernikahan Impian Anda</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Mulai dari Perencanaan Hingga Kenangan Abadi</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 " data-aos="fade-up">
                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    {{-- @if(session()->has('dekorasi_terpilih') || session()->has('dokumentasi_terpilih'))
                        <!-- Hapus session saat refresh pada bagian `nav` -->
                        @php
                            session()->forget(['dekorasi_terpilih', 'dokumentasi_terpilih']);
                        @endphp
                    @endif --}}

                    <li class="nav-item">
                        <a class="nav-link show" data-bs-toggle="tab" data-bs-target="#menu-gedung">
                            <h4>Gedung</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-katering">
                            <h4>Katering</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item">
                        {{-- <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dekorasi">
                            <h4>Dekorasi</h4>
                        </a> --}}
                        <a class="nav-link {{ session()->has('dekorasi_terpilih') ? 'disabled' : '' }}" data-bs-toggle="tab" data-bs-target="#menu-dekorasi">
                            <h4>Dekorasi</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        {{-- <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dokumentasi">
                            <h4>Dokumentasi</h4>
                        </a> --}}
                        <a class="nav-link {{ session()->has('dokumentasi_terpilih') ? 'disabled' : '' }}" data-bs-toggle="tab" data-bs-target="#menu-dokumentasi">
                            <h4>Dokumentasi</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-hiburan">
                            <h4>Hiburan</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Bridalstyle</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Souvenir</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Undangan</h4>
                        </a>
                    </li><!-- End tab nav item -->
                </ul>
                <br><br>
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." class="form-control">
                    </div>
                </div>
                <br>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300" id="menu-features">

                    <div class="tab-pane fade" id="menu-gedung">
                    @include('user.components.gedung')
                    </div>

                    <div class="tab-pane fade" id="menu-katering">
                    @include('user.components.katering')
                    </div>

                    <div class="tab-pane fade" id="menu-dekorasi">
                    @include('user.components.dekorasi')
                    </div>

                    <div class="tab-pane fade" id="menu-dokumentasi">
                    @include('user.components.dokumentasi')
                    </div>

                    <div class="tab-pane fade" id="menu-hiburan">
                    @include('user.components.hiburan')
                    </div>
          
                    <div class="tab-pane fade" id="menu-dinner">
          
                      <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Dinner</h3>
                      </div>
          
                      <div class="row gy-5">
          
                        <div class="col-lg-4 menu-item">
                          <a href="assets/Yummy/assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/Yummy/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                          <h4>Magnam Tiste</h4>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price">
                            $5.95
                          </p>
                        </div><!-- Menu Item -->
          
                        <div class="col-lg-4 menu-item">
                          <a href="assets/Yummy/assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/Yummy/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                          <h4>Aut Luia</h4>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price">
                            $14.95
                          </p>
                        </div><!-- Menu Item -->
          
                        <div class="col-lg-4 menu-item">
                          <a href="assets/Yummy/assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/Yummy/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                          <h4>Est Eligendi</h4>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price">
                            $8.95
                          </p>
                        </div><!-- Menu Item -->
          
                        <div class="col-lg-4 menu-item">
                          <a href="assets/Yummy/assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/Yummy/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                          <h4>Eos Luibusdam</h4>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price">
                            $12.95
                          </p>
                        </div><!-- Menu Item -->
          
                        <div class="col-lg-4 menu-item">
                          <a href="assets/Yummy/assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/Yummy/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                          <h4>Eos Luibusdam</h4>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price">
                            $12.95
                          </p>
                        </div><!-- Menu Item -->
          
                        <div class="col-lg-4 menu-item">
                          <a href="assets/Yummy/assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/Yummy/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                          <h4>Laboriosam Direva</h4>
                          <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                          </p>
                          <p class="price">
                            $9.95
                          </p>
                        </div><!-- Menu Item -->
          
                      </div>
                    </div><!-- End Dinner Menu Content -->
          
                </div>

                {{-- <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"id="item-katering">
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Product image-->
                          <img class="card-img-top"
                              src="{{ asset('assets/Yummy/assets/img/menu/menu-item-1.png') }}" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Fancy Product</h5>
                                  <!-- Product price-->
                                  $40.00 - $80.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View
                                      options</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute"
                              style="top: 0.5rem; right: 0.5rem">Sale</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                              alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Special Item</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  <span class="text-muted text-decoration-line-through">$20.00</span>
                                  $18.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                      to cart</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute"
                              style="top: 0.5rem; right: 0.5rem">Sale</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                              alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Sale Item</h5>
                                  <!-- Product price-->
                                  <span class="text-muted text-decoration-line-through">$50.00</span>
                                  $25.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                      to cart</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                              alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Popular Item</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  $40.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                      to cart</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute"
                              style="top: 0.5rem; right: 0.5rem">Sale</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                              alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Sale Item</h5>
                                  <!-- Product price-->
                                  <span class="text-muted text-decoration-line-through">$50.00</span>
                                  $25.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                      to cart</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                              alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Fancy Product</h5>
                                  <!-- Product price-->
                                  $120.00 - $280.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View
                                      options</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Sale badge-->
                          <div class="badge bg-dark text-white position-absolute"
                              style="top: 0.5rem; right: 0.5rem">Sale</div>
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                              alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Special Item</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  <span class="text-muted text-decoration-line-through">$20.00</span>
                                  $18.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                      to cart</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                              alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Popular Item</h5>
                                  <!-- Product reviews-->
                                  <div class="d-flex justify-content-center small text-warning mb-2">
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                      <div class="bi-star-fill"></div>
                                  </div>
                                  <!-- Product price-->
                                  $40.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                      to cart</a></div>
                          </div>
                      </div>
                  </div>
                </div> --}}

            </div>
            <div class="d-flex justify-content-center">
                {{-- <button type="submit" class="btn btn-outline-dark btn-lg btn-block col-md-8">Submit</button> --}}
                <!-- Tombol untuk melanjutkan ke halaman pemesanan -->
                <a href="{{ route('pemesanan') }}" class="btn btn-outline-dark btn-lg btn-block mt-3 {{ session()->has('dekorasi_terpilih') || session()->has('dokumentasi_terpilih') ? '' : 'disabled' }}">
                    Lanjut ke Pemesanan Item
                </a>
            </div>
        </section>


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
                            <strong>Email:</strong> info@example.com<br>
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

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/Yummy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Yummy/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/Yummy/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/Yummy/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/Yummy/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Yummy/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/Yummy/assets/js/main.js') }}"></script>

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

    {{-- <script>
        function myFunction() {
          // Ambil input pencarian
          var input = document.getElementById('myInput');
          var filter = input.value.toUpperCase();

          // Ambil kontainer yang berisi item gedung
          var menuGedung = document.querySelector("#menu-features .row");

          // Ambil semua elemen h5 yang berisi nama gedung
          var items = menuGedung.querySelectorAll(".menu-item");

          // Loop untuk setiap item gedung dan cek apakah nama gedung cocok dengan input
          items.forEach(function(item) {
              var namaGedung = item.querySelector("h5").textContent || item.querySelector("h5").innerText;
              if (namaGedung.toUpperCase().indexOf(filter) > -1) {
                  item.style.display = ""; // Tampilkan jika cocok
              } else {
                  item.style.display = "none"; // Sembunyikan jika tidak cocok
              }
          });
        }
    </script> --}}
    <script>
        function myFunction() {
            // Ambil input pencarian
            var input = document.getElementById('myInput');
            var filter = input.value.toUpperCase();
    
            // Ambil kontainer tab-content
            var menuFeatures = document.getElementById('menu-features');
    
            // Cari tab konten yang sedang aktif
            var activeTab = menuFeatures.querySelector('.tab-pane.active');
    
            // Ambil semua elemen yang ingin dicari di dalam tab yang aktif
            var items = activeTab ? activeTab.querySelectorAll('.menu-item') : [];
    
            // Loop untuk setiap item dan cek apakah teks cocok dengan input
            items.forEach(function(item) {
                var namaItem = item.querySelector('h5').textContent || item.querySelector('h5').innerText;
                if (namaItem.toUpperCase().indexOf(filter) > -1) {
                    item.style.display = ""; // Tampilkan jika cocok
                } else {
                    item.style.display = "none"; // Sembunyikan jika tidak cocok
                }
            });
        }
    </script>


</body>

</html>
