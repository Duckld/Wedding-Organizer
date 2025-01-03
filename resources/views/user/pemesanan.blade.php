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
                    <h1 class="display-4 fw-bolder">Pemesanan</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Mulai dari Perencanaan Hingga Kenangan Abadi</p>
                </div>
            </div>
        </header>
        <br>
        <div class="container">
            <div class="form-container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('pemesanan.store') }}" method="POST">
                            @csrf
                            <div class="container mt-4">
                                <div class="mb-3">
                                    <label for="id_customer" class="form-label">ID Customer</label>
                                    <input type="text" id="id_customer" name="id_customer" class="form-control" value="{{ $user->id_customer}}" readonly>
                                </div>
                        
                                <div class="mb-3">
                                    <label for="jumlah_tamu" class="form-label">Jumlah tamu</label>
                                    <input type="text" id="jumlah_tamu" name="jumlah_tamu" class="form-control" value="{{ session('jumlah_tamu') ?? 'Belum diisi' }}">
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal_acara" class="form-label">Tanggal Acara</label>
                                    <input type="date" id="tanggal_acara" name="tanggal_acara" class="form-control" required>
                                </div>
                            </div>
                            

                            <div class="order-items">
                                <h4>Item</h4>
                                @php
                                    use App\Models\Gedung;
                                    use App\Models\Maincourse;
                                    use App\Models\Dekorasi;
                                    use App\Models\Dokumentasi;
                                    use App\Models\Hiburan;
                                    use App\Models\Bridalstyle;
                                    use App\Models\Souvenir;
                                    use App\Models\Undangan;
                                @endphp
                                <style>
                                    .item-container {
                                        display: flex;
                                        align-items: center;
                                    }
                                    .image-container {
                                        width: 50px;
                                        height: 50px;
                                        overflow: hidden;
                                        margin-right: 10px;
                                    }
                                    .image-container img {
                                        width: 100%;
                                        height: auto;
                                    }
                                    .item-info {
                                        display: flex;
                                        flex-direction: column;
                                    }
                                </style>
                                <!-- Item List -->
                                <div id="items">
                                    @if(session()->has('gedung_terpilih'))
                                        <?php $gedung = Gedung::find(session('gedung_terpilih')); ?>
                                        <!-- Item List -->
                                        <div class="item-container d-flex align-items-center" data-harga="{{ $gedung->harga_sewa_gedung }}">
                                            <div class="image-container">
                                                @if($gedung->foto_gedung)
                                                    <img src="{{ asset('storage/' . $gedung->foto_gedung) }}" alt="Foto Menu" class="img-fluid" style="width: 50px; height: 50px;">
                                                @else
                                                    <p>Tidak ada Foto Thumbnail</p>
                                                @endif
                                            </div>
                                            <div class="item-info ml-2">
                                                <h6 class="mb-0">{{ $gedung->nama_gedung }}</h6>
                                                <p>Rp.{{ number_format($gedung->harga_sewa_gedung, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    @endif

                                    @if(session()->has('maincourse_terpilih'))
                                        <?php $maincourse = Maincourse::find(session('maincourse_terpilih')); ?>
                                        <!-- Item List -->
                                        <div class="item-container d-flex align-items-center" data-harga="{{ $maincourse->harga_paket }}">
                                            <div class="image-container">
                                                @if($maincourse->foto_menu)
                                                    <img src="{{ asset('storage/' . $maincourse->foto_menu) }}" alt="Foto Menu" class="img-fluid" style="width: 50px; height: 50px;">
                                                @else
                                                    <p>Tidak ada Foto Thumbnail</p>
                                                @endif
                                            </div>
                                            <div class="item-info ml-2">
                                                <h6 class="mb-0">{{ $maincourse->nama_paket_maincourse }}</h6>
                                                <p>Rp.{{ number_format($maincourse->harga_paket, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    @endif
                        
                                    @if(session()->has('dekorasi_terpilih'))
                                        <?php $dekorasi = Dekorasi::find(session('dekorasi_terpilih')); ?>
                                        <!-- Item List -->
                                        <div class="item-container d-flex align-items-center" data-harga="{{ $dekorasi->harga_dekorasi }}">
                                            <div class="image-container">
                                                @if($dekorasi->foto_dekorasi)
                                                    <img src="{{ asset('storage/' . $dekorasi->foto_dekorasi) }}" alt="Foto Menu" class="img-fluid" style="width: 50px; height: 50px;">
                                                @else
                                                    <p>Tidak ada Foto Thumbnail</p>
                                                @endif
                                            </div>
                                            <div class="item-info ml-2">
                                                <h6 class="mb-0">{{ $dekorasi->nama_dekorasi }}</h6>
                                                <p>Rp.{{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    @endif
                        
                                    @if(session()->has('dokumentasi_terpilih'))
                                        <?php $dokumentasi = Dokumentasi::find(session('dokumentasi_terpilih')); ?>
                                        <!-- Item List -->
                                        <div class="item-container d-flex align-items-center" data-harga="{{ $dokumentasi->harga_dokumentasi }}">
                                            <div class="image-container">
                                                @if($dokumentasi->foto_dokumentasi)
                                                    <img src="{{ asset('storage/' . $dokumentasi->foto_dokumentasi) }}" alt="Foto Menu" class="img-fluid" style="width: 50px; height: 50px;">
                                                @else
                                                    <p>Tidak ada Foto Thumbnail</p>
                                                @endif
                                            </div>
                                            <div class="item-info ml-2">
                                                <h6 class="mb-0">{{ $dokumentasi->nama_paket_dokumentasi }}</h6>
                                                <p>Rp.{{ number_format($dokumentasi->harga_dokumentasi, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    @endif
                        
                                    @if(session()->has('hiburan_terpilih'))
                                        <?php $hiburan = Hiburan::find(session('hiburan_terpilih')); ?>
                                        <!-- Item List -->
                                        <div class="item-container d-flex align-items-center" data-harga="{{ $hiburan->harga_sewa_hiburan }}">
                                            <div class="image-container">
                                                @if($hiburan->foto_hiburan)
                                                    <img src="{{ asset('storage/' . $hiburan->foto_hiburan) }}" alt="Foto Menu" class="img-fluid" style="width: 50px; height: 50px;">
                                                @else
                                                    <p>Tidak ada Foto Thumbnail</p>
                                                @endif
                                            </div>
                                            <div class="item-info ml-2">
                                                <h6 class="mb-0">{{ $hiburan->nama_paket_hiburan }}</h6>
                                                <p>Rp.{{ number_format($hiburan->harga_sewa_hiburan, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    @endif
                        
                                    @if(session()->has('bridalstyle_terpilih'))
                                        <?php $bridalstyle = Bridalstyle::find(session('bridalstyle_terpilih')); ?>
                                        <div class="item-container d-flex align-items-center" data-harga="{{ $bridalstyle->harga_paket }}">
                                            <div class="image-container">
                                                @if($bridalstyle->foto_bridalstyle)
                                                    <img src="{{ asset('storage/' . $bridalstyle->foto_bridalstyle) }}" alt="Foto Bridalstyle" class="img-fluid" style="width: 50px; height: 50px;">
                                                @else
                                                    <p>Tidak ada Foto Thumbnail</p>
                                                @endif
                                            </div>
                                            <div class="item-info ml-2">
                                                <h6 class="mb-0">{{ $bridalstyle->nama_paket_bridalstyle }}</h6>
                                                <p>Rp.{{ number_format($bridalstyle->harga_paket, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    @endif
                        
                                    @if(session()->has('souvenir_terpilih'))
                                        <?php $souvenir = Souvenir::find(session('souvenir_terpilih')); ?>
                                        <div class="item-container d-flex align-items-center" data-harga="{{ $souvenir->harga_paket_souvenir }}">
                                            <div class="image-container">
                                                @if($souvenir->foto_souvenir)
                                                    <img src="{{ asset('storage/' . $souvenir->foto_souvenir) }}" alt="Foto Souvenir" class="img-fluid" style="width: 50px; height: 50px;">
                                                @else
                                                    <p>Tidak ada Foto Thumbnail</p>
                                                @endif
                                            </div>
                                            <div class="item-info ml-2">
                                                <h6 class="mb-0">{{ $souvenir->nama_paket_souvenir }}</h6>
                                                <p>Rp.{{ number_format($souvenir->harga_paket_souvenir, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    @endif
                        
                                    @if(session()->has('undangan_terpilih'))
                                        <?php $undangan = Undangan::find(session('undangan_terpilih')); ?>
                                        <div class="item-container d-flex align-items-center" data-harga="{{ $undangan->harga_undangan }}">
                                            <div class="image-container">
                                                @if($undangan->foto_undangan)
                                                    <img src="{{ asset('storage/' . $undangan->foto_undangan) }}" alt="Foto Undangan" class="img-fluid" style="width: 50px; height: 50px;">
                                                @else
                                                    <p>Tidak ada Foto Thumbnail</p>
                                                @endif
                                            </div>
                                            <div class="item-info ml-2">
                                                <h6 class="mb-0">{{ $undangan->bahan_undangan }}</h6>
                                                <p>Rp.{{ number_format($undangan->harga_undangan, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                        
                                <!-- Subtotal -->
                                <div class="total-section">
                                    <div class="d-flex justify-content-between">
                                        <span>Subtotal</span>
                                        <span id="subtotal">Rp.0</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Tax (4%)</span>
                                        <span id="tax">Rp.0</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <strong>Total</strong>
                                        <strong id="total">Rp.0</strong>
                                    </div>
                                    <!-- Hidden input untuk menyimpan total biaya -->
                                    <input type="hidden" id="total_biaya" name="total_biaya" value="0">
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                        let items = document.querySelectorAll('.item-container');
                                        let subtotalElement = document.getElementById('subtotal');
                                        let taxElement = document.getElementById('tax');
                                        let totalElement = document.getElementById('total');
                                        let totalBiayaInput = document.getElementById('total_biaya'); // Hidden input

                                        // Fungsi untuk menghitung subtotal
                                        function calculateSubtotal() {
                                            let subtotal = 0;

                                            // Iterasi setiap item dan tambahkan harganya ke subtotal
                                            items.forEach(function (item) {
                                                let harga = parseInt(item.getAttribute('data-harga')) || 0; // Default ke 0 jika NaN
                                                subtotal += harga;
                                            });

                                            // Hitung pajak 4%
                                            let tax = subtotal * 0.04;
                                            let total = subtotal + tax;

                                            // Tampilkan hasil dengan format rupiah
                                            subtotalElement.textContent = 'Rp.' + new Intl.NumberFormat('id-ID').format(subtotal);
                                            taxElement.textContent = 'Rp.' + new Intl.NumberFormat('id-ID').format(tax);
                                            totalElement.textContent = 'Rp.' + new Intl.NumberFormat('id-ID').format(total);

                                            // Update hidden input dengan nilai total biaya
                                            totalBiayaInput.value = total; // Update nilai hidden input
                                        }

                                        // Panggil fungsi untuk menghitung subtotal saat halaman dimuat
                                        calculateSubtotal();
                                    });

                                    </script>
                                </div>
                        
                                <!-- Metode Pembayaran -->
                                {{-- <div class="payment-method">
                                    <h4>Metode Pembayaran</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment-method" id="dp" value="dp">
                                        <label class="form-check-label" for="dp">DP</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment-method" id="full-payment" value="full">
                                        <label class="form-check-label" for="full-payment">Langsung Lunas</label>
                                    </div>
                                </div> --}}
                            </div>
                            <br>
                            <button type="submit" class="btn custom-btn col-12">Submit</button>
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
        {{-- <div class="container">
            <div class="form-container">
                <div class="row">
                    
                    <!-- Daftar Item Pesanan -->
                    <div class="col-md-12">
                        <div class="order-items">
                            <h4>Item</h4>
                            @php
                                use App\Models\Gedung;
                                use App\Models\Dekorasi;
                                use App\Models\Dokumentasi;
                                use App\Models\Hiburan;
                                use App\Models\Bridalstyle;
                                use App\Models\Souvenir;
                                use App\Models\Undangan;
                            @endphp
                            <style>
                                .item-container {
                                    display: flex;
                                    align-items: center;
                                }
                                .image-container {
                                    width: 50px;
                                    height: 50px;
                                    overflow: hidden;
                                    margin-right: 10px;
                                }
                                .image-container img {
                                    width: 100%;
                                    height: auto;
                                }
                                .item-info {
                                    display: flex;
                                    flex-direction: column;
                                }
                            </style>
                            <!-- Item List -->
                            <div id="items">
                                @if(session()->has('gedung_terpilih'))
                                    <?php $gedung = Gedung::find(session('gedung_terpilih')); ?>
                                    <!-- Item List -->
                                    <div class="item-container d-flex align-items-center" data-harga="{{ $gedung->harga_sewa_gedung }}">
                                        <div class="image-container">
                                            @if($gedung->foto_gedung)
                                                <img src="{{ asset('storage/' . $gedung->foto_gedung) }}" alt="Foto Menu" class="img-fluid" style="width: 50px; height: 50px;">
                                            @else
                                                <p>Tidak ada Foto Thumbnail</p>
                                            @endif
                                        </div>
                                        <div class="item-info ml-2">
                                            <h6 class="mb-0">{{ $gedung->nama_gedung }}</h6>
                                            <p>Rp.{{ number_format($gedung->harga_sewa_gedung, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                @endif
                    
                                @if(session()->has('dekorasi_terpilih'))
                                    <?php $dekorasi = Dekorasi::find(session('dekorasi_terpilih')); ?>
                                    <!-- Item List -->
                                    <div class="item-container d-flex align-items-center" data-harga="{{ $dekorasi->harga_dekorasi }}">
                                        <div class="image-container">
                                            @if($dekorasi->foto_dekorasi)
                                                <img src="{{ asset('storage/' . $dekorasi->foto_dekorasi) }}" alt="Foto Menu" class="img-fluid" style="width: 50px; height: 50px;">
                                            @else
                                                <p>Tidak ada Foto Thumbnail</p>
                                            @endif
                                        </div>
                                        <div class="item-info ml-2">
                                            <h6 class="mb-0">{{ $dekorasi->nama_dekorasi }}</h6>
                                            <p>Rp.{{ number_format($dekorasi->harga_dekorasi, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                @endif
                    
                                @if(session()->has('dokumentasi_terpilih'))
                                    <?php $dokumentasi = Dokumentasi::find(session('dokumentasi_terpilih')); ?>
                                    <!-- Item List -->
                                    <div class="item-container d-flex align-items-center" data-harga="{{ $dokumentasi->harga_dokumentasi }}">
                                        <div class="image-container">
                                            @if($dokumentasi->foto_dokumentasi)
                                                <img src="{{ asset('storage/' . $dokumentasi->foto_dokumentasi) }}" alt="Foto Menu" class="img-fluid" style="width: 50px; height: 50px;">
                                            @else
                                                <p>Tidak ada Foto Thumbnail</p>
                                            @endif
                                        </div>
                                        <div class="item-info ml-2">
                                            <h6 class="mb-0">{{ $dokumentasi->nama_paket_dokumentasi }}</h6>
                                            <p>Rp.{{ number_format($dokumentasi->harga_dokumentasi, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                @endif
                    
                                @if(session()->has('hiburan_terpilih'))
                                    <?php $hiburan = Hiburan::find(session('hiburan_terpilih')); ?>
                                    <!-- Item List -->
                                    <div class="item-container d-flex align-items-center" data-harga="{{ $hiburan->harga_sewa_hiburan }}">
                                        <div class="image-container">
                                            @if($hiburan->foto_hiburan)
                                                <img src="{{ asset('storage/' . $hiburan->foto_hiburan) }}" alt="Foto Menu" class="img-fluid" style="width: 50px; height: 50px;">
                                            @else
                                                <p>Tidak ada Foto Thumbnail</p>
                                            @endif
                                        </div>
                                        <div class="item-info ml-2">
                                            <h6 class="mb-0">{{ $hiburan->nama_paket_hiburan }}</h6>
                                            <p>Rp.{{ number_format($hiburan->harga_sewa_hiburan, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                @endif
                    
                                @if(session()->has('bridalstyle_terpilih'))
                                    <?php $bridalstyle = Bridalstyle::find(session('bridalstyle_terpilih')); ?>
                                    <div class="item-container d-flex align-items-center" data-harga="{{ $bridalstyle->harga_paket }}">
                                        <div class="image-container">
                                            @if($bridalstyle->foto_bridalstyle)
                                                <img src="{{ asset('storage/' . $bridalstyle->foto_bridalstyle) }}" alt="Foto Bridalstyle" class="img-fluid" style="width: 50px; height: 50px;">
                                            @else
                                                <p>Tidak ada Foto Thumbnail</p>
                                            @endif
                                        </div>
                                        <div class="item-info ml-2">
                                            <h6 class="mb-0">{{ $bridalstyle->nama_paket_bridalstyle }}</h6>
                                            <p>Rp.{{ number_format($bridalstyle->harga_paket, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                @endif
                    
                                @if(session()->has('souvenir_terpilih'))
                                    <?php $souvenir = Souvenir::find(session('souvenir_terpilih')); ?>
                                    <div class="item-container d-flex align-items-center" data-harga="{{ $souvenir->harga_paket_souvenir }}">
                                        <div class="image-container">
                                            @if($souvenir->foto_souvenir)
                                                <img src="{{ asset('storage/' . $souvenir->foto_souvenir) }}" alt="Foto Souvenir" class="img-fluid" style="width: 50px; height: 50px;">
                                            @else
                                                <p>Tidak ada Foto Thumbnail</p>
                                            @endif
                                        </div>
                                        <div class="item-info ml-2">
                                            <h6 class="mb-0">{{ $souvenir->nama_paket_souvenir }}</h6>
                                            <p>Rp.{{ number_format($souvenir->harga_paket_souvenir, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                @endif
                    
                                @if(session()->has('undangan_terpilih'))
                                    <?php $undangan = Undangan::find(session('undangan_terpilih')); ?>
                                    <div class="item-container d-flex align-items-center" data-harga="{{ $undangan->harga_undangan }}">
                                        <div class="image-container">
                                            @if($undangan->foto_undangan)
                                                <img src="{{ asset('storage/' . $undangan->foto_undangan) }}" alt="Foto Undangan" class="img-fluid" style="width: 50px; height: 50px;">
                                            @else
                                                <p>Tidak ada Foto Thumbnail</p>
                                            @endif
                                        </div>
                                        <div class="item-info ml-2">
                                            <h6 class="mb-0">{{ $undangan->bahan_undangan }}</h6>
                                            <p>Rp.{{ number_format($undangan->harga_undangan, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                    
                            <!-- Subtotal -->
                            <div class="total-section">
                                <div class="d-flex justify-content-between">
                                    <span>Subtotal</span>
                                    <span id="subtotal">Rp.0</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Tax (4%)</span>
                                    <span id="tax">Rp.0</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <strong>Total</strong>
                                    <input type="hidden" name="total_biaya"><strong id="total">Rp.0</strong>
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        let items = document.querySelectorAll('.item-container');
                                        let subtotalElement = document.getElementById('subtotal');
                                        let taxElement = document.getElementById('tax');
                                        let totalElement = document.getElementById('total');
                                
                                        // Fungsi untuk menghitung subtotal
                                        function calculateSubtotal() {
                                            let subtotal = 0;
                                
                                            // Iterasi setiap item dan tambahkan harganya ke subtotal
                                            items.forEach(function (item) {
                                                let harga = parseInt(item.getAttribute('data-harga')) || 0; // Default ke 0 jika NaN
                                                subtotal += harga;
                                            });
                                
                                            // Hitung pajak 4%
                                            let tax = subtotal * 0.04;
                                            let total = subtotal + tax;
                                
                                            // Tampilkan hasil dengan format rupiah
                                            subtotalElement.textContent = 'Rp.' + new Intl.NumberFormat('id-ID').format(subtotal);
                                            taxElement.textContent = 'Rp.' + new Intl.NumberFormat('id-ID').format(tax);
                                            totalElement.textContent = 'Rp.' + new Intl.NumberFormat('id-ID').format(total);
                                        }
                                
                                        // Panggil fungsi untuk menghitung subtotal saat halaman dimuat
                                        calculateSubtotal();
                                    });
                                </script>
                            </div>
                    
                            <!-- Metode Pembayaran -->
                            <div class="payment-method">
                                <h4>Metode Pembayaran</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment-method" id="dp" value="dp">
                                    <label class="form-check-label" for="dp">DP</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment-method" id="full-payment" value="full">
                                    <label class="form-check-label" for="full-payment">Langsung Lunas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
                <button type="submit" class="btn custom-btn col-12">Submit</button>
            </div>
        </div> --}}

        <!-- CSS untuk button submit -->
        <style>
            .custom-btn {
                background-color: #fff;
                border-color: #ce1212;
                color: #ce1212;
            }

            .custom-btn:hover {
                background-color: #ce1212;
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



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (Session::has('success'))
            Swal.fire({
                title: 'Pesanan Berhasil!',
                text: 'Menunggu konfirmasi dari admin!',
                icon: 'success',
                showCancelButton: true,
                confirmButtonText: 'Lihat Pesanan Saya',
                cancelButtonText: 'Kembali ke Halaman Utama',
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                // Redirect to "Lihat Pesanan Saya"
                window.location.href = '/user/order';
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                // Redirect to "Kembali ke Halaman Utama"
                window.location.href = '/user';
                }
            });
        @endif
    </script>
</body>

</html>
