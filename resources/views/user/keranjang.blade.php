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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/Yummy/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Yummy/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Yummy/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Yummy/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/Yummy/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!-- Custom CSS -->
    <style>
        .form-container {
            margin: 50px auto;
            max-width: 1200px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .order-items {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            height: 100%;
        }
        .order-items .item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .order-items .item img {
            width: 50px;
            height: 50px;
            border-radius: 5px;
            margin-right: 15px;
        }
        .order-items .item-details {
            flex: 1;
        }
        .order-items .item-details p {
            margin: 0;
        }
        .total-section {
            padding-top: 15px;
            border-top: 1px solid #ddd;
        }
        .total-section strong {
            font-weight: bold;
        }
        .payment-method {
            margin-top: 20px;
        }
    </style>

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
                    <h1 class="display-4 fw-bolder">Keranjang</h1>
                    {{-- <p class="lead fw-normal text-white-50 mb-0">Mulai dari Perencanaan Hingga Kenangan Abadi</p> --}}
                </div>
            </div>
        </header>
        <br>
        <div class="container">
            <div class="form-container">
                <div class="row">
                    {{-- <!-- Form Data Pelanggan -->
                    <div class="col-md-6 mb-3">
                        <h4>Data Pelanggan</h4>
                        <form>
                            <div class="mb-3">
                                <label for="groom-name" class="form-label">Nama Pengantin Pria</label>
                                <input type="text" class="form-control" id="groom-name" placeholder="Masukkan Nama Pengantin Pria">
                            </div>
                            <div class="mb-3">
                                <label for="bride-name" class="form-label">Nama Pengantin Wanita</label>
                                <input type="text" class="form-control" id="bride-name" placeholder="Masukkan Nama Pengantin Wanita">
                            </div>
                            <div class="mb-3">
                                <label for="phone-number" class="form-label">No Handphone</label>
                                <input type="text" class="form-control" id="phone-number" placeholder="Masukkan No Handphone">
                            </div>
                            <div class="mb-3">
                                <label for="event-date" class="form-label">Tanggal Acara</label>
                                <input type="date" class="form-control" id="event-date">
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Catatan</label>
                                <textarea class="form-control" id="notes" rows="5" placeholder="Tambahkan Catatan"></textarea>
                            </div>
                        </form>
                    </div> --}}
                    
                    <!-- Daftar Item Pesanan -->
                    <div class="col-md-12">
                        <div class="order-items">
                            <h4>Item</h4>
                            
                            
                            <!-- Item List -->
                            <table class="item-table table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        @php
                                            use App\Models\Dekorasi;
                                            use App\Models\Dokumentasi;
                                        @endphp
                                        <th>#</th>
                                        <th>Nama Item</th>
                                        <th>Variant</th>
                                        <th>Harga</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <style>
                                        .item-table {
                                            width: 100%;
                                            border-collapse: collapse;
                                            margin-bottom: 20px;
                                        }
                                        .item-table th, .item-table td {
                                            border: 1px solid #ddd;
                                            padding: 12px;
                                            text-align: left;
                                        }
                                        .item-table th {
                                            background-color: #f8f9fa;
                                            font-weight: 600;
                                            color: #495057;
                                        }
                                        .item-table td {
                                            vertical-align: middle;
                                        }
                                        .item-table tbody tr:hover {
                                            background-color: #f1f3f5;
                                        }
                                        .image-container img {
                                            width: 50px;
                                            height: 50px;
                                            object-fit: cover;
                                            border-radius: 4px;
                                            border: 1px solid #dee2e6;
                                        }
                                        .total-section {
                                            font-size: 1.1em;
                                            font-weight: 500;
                                        }
                                        .payment-method {
                                            margin-top: 20px;
                                        }
                                        .form-check-label {
                                            font-size: 1rem;
                                        }
                                    </style>
                                    @if(session()->has('dekorasi_terpilih'))
                                        <?php $dekorasi = Dekorasi::find(session('dekorasi_terpilih')); ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="item-checkbox" data-harga="{{ $dekorasi->harga_dekorasi }}" value="{{ $dekorasi->id_dekorasi }}">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="image-container me-3">
                                                        @if($dekorasi->foto_dekorasi)
                                                            <img src="{{ asset('storage/' . $dekorasi->foto_dekorasi) }}" alt="Foto Dekorasi" class="img-fluid">
                                                        @else
                                                            <p>Tidak ada Foto</p>
                                                        @endif
                                                    </div>
                                                    <h6 class="mb-0">{{ $dekorasi->nama_dekorasi }}</h6>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>Rp.{{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</td>
                                            <td>1</td>
                                            <td>Rp.{{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</td>
                                        </tr>
                                    @endif
                            
                                    @if(session()->has('dokumentasi_terpilih'))
                                        <?php $dokumentasi = Dokumentasi::find(session('dokumentasi_terpilih')); ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="item-checkbox" data-harga="{{ $dokumentasi->harga_dokumentasi }}" value="{{ $dokumentasi->id_dokumentasi }}">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="image-container me-3">
                                                        @if($dokumentasi->foto_dokumentasi)
                                                            <img src="{{ asset('storage/' . $dokumentasi->foto_dokumentasi) }}" alt="Foto Dokumentasi" class="img-fluid">
                                                        @else
                                                            <p>Tidak ada Foto</p>
                                                        @endif
                                                    </div>
                                                    <h6 class="mb-0">{{ $dokumentasi->nama_paket_dokumentasi }}</h6>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>Rp.{{ number_format($dokumentasi->harga_dokumentasi, 0, ',', '.') }}</td>
                                            <td>1</td>
                                            <td>Rp.{{ number_format($dokumentasi->harga_dokumentasi, 0, ',', '.') }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

                            <!-- Subtotal -->
                            <div class="total-section">
                                <div class="d-flex justify-content-between">
                                    <span>Subtotal</span>
                                    <span id="subtotal">0</span>
                                </div>
                                {{-- <div class="d-flex justify-content-between">
                                    <span>Tax (4%)</span>
                                    <span>Rp.2.045.000</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <strong>Total</strong>
                                    <strong>Rp.207.500.000</strong>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn custom-btn col-12">Checkout</button>
            </div>
        </div>

        <!-- CSS untuk button submit -->
        <style>
            .custom-btn {
                background-color: #fff;
                border-color: #87CEEB;
                color: #87CEEB;
            }

            .custom-btn:hover {
                background-color: #87CEEB;
                color: white;
            }

        </style>

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

    {{-- Menghitung Subtotal --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Ambil semua checkbox item
            let checkboxes = document.querySelectorAll('.item-checkbox');
            let subtotalElement = document.getElementById('subtotal');

            // Fungsi untuk menghitung subtotal
            function calculateSubtotal() {
                let subtotal = 0;
                checkboxes.forEach(function (checkbox) {
                    if (checkbox.checked) {
                        // Tambahkan harga item jika checkbox dipilih
                        subtotal += parseInt(checkbox.getAttribute('data-harga'));
                    }
                });
                // Format angka ke rupiah
                subtotalElement.textContent = 'Rp.' + new Intl.NumberFormat('id-ID').format(subtotal);
            }

            // Tambahkan event listener ke setiap checkbox
            checkboxes.forEach(function (checkbox) {
                checkbox.addEventListener('change', calculateSubtotal);
            });
        });

    </script>


</body>

</html>
