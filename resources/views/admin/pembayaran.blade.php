<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/dist/assets/vendors/fontawesome/all.min.css">
    <style>
        .fontawesome-icons {
            text-align: center;
        }

        article dl {
            background-color: rgba(0, 0, 0, .02);
            padding: 20px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }
    </style>

    <link rel="stylesheet" href="/assets/dist/assets/vendors/choices.js/choices.min.css" />

    <link rel="stylesheet" href="/assets/dist/assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="{{ asset('assets/dist/assets/vendors/sweetalert2/sweetalert2.min.css') }}">

    <link rel="stylesheet" href="/assets/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/dist/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/dist/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="/assets/dist/assets/images/logo/logo.png" alt="Logo"
                                    srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="/admin" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Features</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item ">
                                    <a href="/admin/gedung">Gedung</a>
                                </li>
                                <li class="submenu-item has-sub">
                                    <a href="/admin/maincourse">Katering</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="/admin/dekorasi">Dekorasi</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="/admin/dokumentasi">Dokumentasi</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="/admin/hiburan">Hiburan</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="/admin/bridalstyle">Bridalstyle</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="/admin/souvenir">Souvenir</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="/admin/undangan">Undangan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin/order" class='sidebar-link'>
                                <i class="bi bi-box-seam"></i>
                                <span>Order</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a href="/admin/pembayaran" class='sidebar-link'>
                                <i class="bi bi-cash-stack"></i>
                                <span>Pembayaran</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bi bi-envelope bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Mail</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No new mail</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notifications</h6>
                                        </li>
                                        <li><a class="dropdown-item">No notification available</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">John Ducky</h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('assets/dist/assets/images/faces/1.jpg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, John!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="icon-mid bi bi-gear me-2"></i>
                                            Settings</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="icon-mid bi bi-wallet me-2"></i>
                                            Wallet</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">
                <header>
                    <h1>Pembayaran</h1>
                    <br>
                </header>
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">#</th>
                                        <th>ID Pembayaran</th>
                                        <th>ID Pemesanan</th>
                                        <th>Jumlah Pembayaran</th>
                                        <th>Status Pembayaran</th>
                                        <th style="text-align: center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pemesanan as $pm)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>a</td>
                                        <td>{{$pm->id_pemesanan}}</td>
                                        <td>Rp.{{ number_format($pm->total_biaya, 0, ',', '.') }}</td>
                                        <td><span class="badge bg-light-danger">Belum Lunas</span></td>
                                        <td style="text-align: center">
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-primary" type="button">
                                                    {{-- data-bs-toggle="modal"
                                                    data-bs-target="#xlarge{{ $dek->id_dekorasi }} --}}
                                                    <article id="eye">
                                                        <dt class="the-icon"><span
                                                                class="fa-fw select-all fas"></span></dt>
                                                    </article>
                                                </button>
                                                <!--Extra Large Modal -->
                                                {{-- <div class="modal fade text-left w-100"
                                                    id="xlarge{{ $dek->id_dekorasi }}" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel16" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel16">Detail
                                                                    Dekorasi</h4>
                                                            </div>
                                                            <div class="modal-body col-md-12">
                                                                <div class="row">
                                                                    <div class="images-gallery col-md-4">
                                                                        @if($dek->foto_dekorasi)
                                                                            <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $dek->id_dekorasi }}">
                                                                                <img src="{{ asset('storage/' . $dek->foto_dekorasi) }}" alt="Foto Menu" class="img-thumbnail">
                                                                            </a>

                                                                            <!-- Modal Kedua (Gambar dalam Detail Menu) -->
                                                                            <div class="modal fade" id="secondModal{{ $dek->id_dekorasi }}" tabindex="-1" aria-labelledby="myModalLabelSecond" aria-hidden="true" role="dialog">
                                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-body">
                                                                                            <img src="{{ asset('storage/'. $dek->foto_dekorasi) }}" alt="Foto Menu" class="img-thumbnail">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <p>Tidak ada Foto Thumbnail</p>
                                                                        @endif
                                                                        @if($dek->images->count() > 0)
                                                                            <div class="row">
                                                                                @foreach($dek->images as $image)
                                                                                    <div class="col-md-4">
                                                                                        <!-- Gambar Kecil -->
                                                                                        <a href="#" class="open-image-modal" data-bs-toggle="modal" data-bs-target="#imageModal{{ $loop->index }}">
                                                                                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Foto Tambahan" width="500px" class="img-thumbnail">
                                                                                        </a>
                                                                                    </div>

                                                                                    <!-- Modal untuk Gambar -->
                                                                                    <div class="modal fade" id="imageModal{{ $loop->index }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $loop->index }}" aria-hidden="true" role="dialog">
                                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-body">
                                                                                                    <!-- Gambar di Modal -->
                                                                                                    <div id="carouselDekorasi" class="carousel slide" data-bs-ride="carousel">
                                                                                                        <!-- Carousel Indicators -->
                                                                                                        <ol class="carousel-indicators">
                                                                                                            @foreach($dek->images as $index => $image)
                                                                                                                <li data-bs-target="#carouselDekorasi" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                                                                                            @endforeach
                                                                                                        </ol>
                                                                                                
                                                                                                        <!-- Carousel Inner (Images) -->
                                                                                                        <div class="carousel-inner">
                                                                                                            @foreach($dek->images as $index => $image)
                                                                                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                                                                    <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block w-100 img-thumbnail" alt="Foto Tambahan">
                                                                                                                    ***<div class="carousel-caption d-none d-md-block">
                                                                                                                        <h5>Slide {{ $index + 1 }}</h5>
                                                                                                                        <p>Ini adalah foto tambahan ke-{{ $index + 1 }}</p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            @endforeach
                                                                                                        </div>
                                                                                                
                                                                                                        <!-- Carousel Controls (Previous/Next) -->
                                                                                                        <a class="carousel-control-prev" href="#  " role="button" data-bs-slide="prev">
                                                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                                            <span class="visually-hidden">Previous</span>
                                                                                                        </a>
                                                                                                        <a class="carousel-control-next" href="#carouselDekorasi" role="button" data-bs-slide="next">
                                                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                                            <span class="visually-hidden">Next</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        @else
                                                                            <p>Tidak ada foto tambahan</p>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-md-4" style="text-align: left">
                                                                        <p><b style="color: #435ebe">ID Paket : </b>{{ $dek->id_dekorasi }}</p>
                                                                        <p><b style="color: #435ebe">Nama Dekorasi : </b>{{ $dek->nama_dekorasi }}</p>
                                                                        <p><b style="color: #435ebe">Harga : </b>{{ $dek->harga_dekorasi }}</p>
                                                                        <p><b style="color: #435ebe">Deskripsi : </b> <br>
                                                                            {!! str_replace(["\r\n", "\n", "\r"], '', nl2br(e($dek->deskripsi_dekorasi))) !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-primary ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Close</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <button class="btn btn-warning" type="button" style="border-top-right-radius: 4px; border-bottom-right-radius: 4px">
                                                    {{-- data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalCenter{{ /*$dek->id_dekorasi*/ }}" --}}
                                                    <article id="pen-square">
                                                        <dt class="the-icon"><span
                                                                class="fa-fw select-all fas"></span></dt>
                                                    </article>
                                                </button>
                                                <button class="btn btn-success" type="submit">
                                                    <article id="invoice">
                                                        <dt class="the-icon"><span class="fa-fw select-all fas fa-file-invoice"></span></dt>
                                                    </article>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                                by <a href="https://ahmadsaugi.com">Saugi</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/dist/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/dist/assets/vendors/fontawesome/all.min.js') }}"></script>

    <script src="{{ asset('assets/dist/assets/js/extensions/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/dist/assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('assets/dist/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{ asset('assets/dist/assets/js/main.js') }}"></script>

    <script>
        @if (Session::has('success'))
            Swal.fire({
                title: "Berhasil!",
                // text: "You clicked the button!",
                icon: "success"
            });
        @endif
    </script>
</body>

</html>
