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

                        <li class="sidebar-item has-sub  active">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Features</span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item">
                                    <a href="/admin/gedung">Gedung</a>
                                </li>
                                <li class="submenu active has-sub">
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
                    <h1>Katering</h1>
                    <br>
                </header>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="maincourse-tab" data-bs-toggle="tab" href="#maincourse"
                                    role="tab" aria-controls="maincourse" aria-selected="true">MainCourse</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="dishes-tab" data-bs-toggle="tab" href="#dishes"
                                    role="tab" aria-controls="dishes" aria-selected="false">Dishes</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="maincourse" role="tabpanel"
                                aria-labelledby="maincourse-tab">
                                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <section class="section">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="nama_paket_maincourse">Nama Paket</label>
                                                        <input name="nama_paket_maincourse" type="text" class="form-control" id="nama_paket_maincourse" required>
                                                    </div>
                            
                                                    <div class="form-group">
                                                        <label for="deskripsi_makanan">Deskripsi Makanan</label>
                                                        <textarea name="deskripsi_makanan" id="deskripsi_makanan" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="harga_paket">Harga Paket</label>
                                                        <input name="harga_paket" type="text" class="form-control" id="harga_paket" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="foto_menu">Foto Thumbnail</label>
                                                        <input type="file" class="form-control" id="foto_menu" name="foto_menu">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="multiple_foto">Foto Lainnya</label>
                                                        <input type="file" class="form-control" id="multiple_foto" name="multiple_foto[]" multiple>
                                                    </div>

                                                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block form-control">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                                <div class="card">
                                    <div class="card-header" style="background: #435ebe;color: #fff;text-align: center">
                                        List MainCourse
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">Nama Paket</th>
                                                    <th style="text-align: center">Harga</th>
                                                    <th style="text-align: center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($maincourse as $mc)
                                                    <tr>
                                                        <td style="text-align: center">{{ $mc->id_maincourse }}</td>
                                                        <td style="text-align: center">{{ $mc->nama_paket_maincourse }}</td>
                                                        <td style="text-align: center">{{ $mc->harga_paket }}</td>
                                                        <td style="text-align: center">
                                                            <div class="btn-group" role="group">
                                                                <button class="btn btn-primary" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#xlarge{{ $mc->id_maincourse }}">
                                                                    <article id="eye">
                                                                        <dt class="the-icon"><span
                                                                                class="fa-fw select-all fas"></span></dt>
                                                                    </article>
                                                                </button>
                                                                <!--Extra Large Modal -->
                                                                <div class="modal fade text-left w-100"
                                                                    id="xlarge{{ $mc->id_maincourse }}" tabindex="-1" role="dialog"
                                                                    aria-labelledby="myModalLabel16" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel16">Detail
                                                                                    Menu Main Course</h4>
                                                                            </div>
                                                                            <div class="modal-body col-md-12">
                                                                                <div class="row">
                                                                                    <div class="images-gallery col-md-4">
                                                                                        @if($mc->foto_menu)
                                                                                            <a href="#" class="open-second-modal" data-bs-toggle="modal" data-bs-target="#secondModal{{ $mc->id_maincourse }}">
                                                                                                <img src="{{ asset('storage/' . $mc->foto_menu) }}" alt="Foto Menu" class="img-thumbnail">
                                                                                            </a>

                                                                                            <!-- Modal Kedua (Gambar dalam Detail Menu) -->
                                                                                            <div class="modal fade" id="secondModal{{ $mc->id_maincourse }}" tabindex="-1" aria-labelledby="myModalLabelSecond" aria-hidden="true" role="dialog">
                                                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-body">
                                                                                                            <img src="{{ asset('storage/'. $mc->foto_menu) }}" alt="Foto Menu" class="img-thumbnail">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        @else
                                                                                            <p>Tidak ada Foto Thumbnail</p>
                                                                                        @endif
                                                                                        @if($mc->images->count() > 0)
                                                                                            <div class="row">
                                                                                                @foreach($mc->images as $image)
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
                                                                                                                    <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
                                                                                                                        <!-- Carousel Indicators -->
                                                                                                                        <ol class="carousel-indicators">
                                                                                                                            @foreach($mc->images as $index => $image)
                                                                                                                                <li data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                                                                                                            @endforeach
                                                                                                                        </ol>
                                                                                                                
                                                                                                                        <!-- Carousel Inner (Images) -->
                                                                                                                        <div class="carousel-inner">
                                                                                                                            @foreach($mc->images as $index => $image)
                                                                                                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                                                                                    <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block w-100 img-thumbnail" alt="Foto Tambahan">
                                                                                                                                    {{-- <div class="carousel-caption d-none d-md-block">
                                                                                                                                        <h5>Slide {{ $index + 1 }}</h5>
                                                                                                                                        <p>Ini adalah foto tambahan ke-{{ $index + 1 }}</p>
                                                                                                                                    </div> --}}
                                                                                                                                </div>
                                                                                                                            @endforeach
                                                                                                                        </div>
                                                                                                                
                                                                                                                        <!-- Carousel Controls (Previous/Next) -->
                                                                                                                        <a class="carousel-control-prev" href="#carouselExampleCaptions3" role="button" data-bs-slide="prev">
                                                                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                                                            <span class="visually-hidden">Previous</span>
                                                                                                                        </a>
                                                                                                                        <a class="carousel-control-next" href="#carouselExampleCaptions3" role="button" data-bs-slide="next">
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

                                                                                        
                                                                                        <!-- Tampilkan Foto Multiple dari MainCourseImage -->
                                                                                        {{-- @if($mc->images->count() > 0)
                                                                                            <div class="row">
                                                                                                @foreach($mc->images as $image)
                                                                                                    <div class="col-md-12">
                                                                                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Foto Tambahan" class="img-thumbnail">
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        @else
                                                                                            <p>Tidak ada foto tambahan</p>
                                                                                        @endif --}}
                                                                                    </div>
                                                                                    <div class="col-md-4" style="text-align: left">
                                                                                        <p><b style="color: #435ebe">ID Paket : </b>{{ $mc->id_maincourse }}</p>
                                                                                        <p><b style="color: #435ebe">Nama Paket Main Course : </b>{{ $mc->nama_paket_maincourse }}</p>
                                                                                        <p><b style="color: #435ebe">Harga : </b>{{ $mc->harga_paket }}</p>
                                                                                        <p>
                                                                                            <b style="color: #435ebe">Deskripsi :</b><br>
                                                                                            {!! str_replace(["\r\n", "\n", "\r"], '', nl2br(e($mc->deskripsi_makanan))) !!}
                                                                                        </p>
                                                                                        
                                                                                        
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
                                                                </div>
                                                                <button class="btn btn-warning" type="button" style="border-top-right-radius: 4px; border-bottom-right-radius: 4px"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModalCenter{{ $mc->id_maincourse }}">
                                                                    <article id="pen-square">
                                                                        <dt class="the-icon"><span
                                                                                class="fa-fw select-all fas"></span></dt>
                                                                    </article>
                                                                </button>
                                                                <!--Extra Large Modal -->
                                                                <div class="modal fade"
                                                                    id="exampleModalCenter{{ $mc->id_maincourse }}" tabindex="-1"
                                                                    role="dialog"
                                                                    aria-labelledby="exampleModalCenterTitle{{ $mc->id_maincourse }}"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalCenterTitle{{ $mc->id_maincourse }}">
                                                                                    Edit Data Main Course</h5>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form
                                                                                    action={{ route('admin.update', ['id_maincourse' => $mc->id_maincourse]) }}
                                                                                    method="POST" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method ('PUT')
                                                                                    <section class="section">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group" style="text-align: left">
                                                                                                            <label for="nama_paket_maincourse">Nama Paket</label>
                                                                                                            <input name="nama_paket_maincourse" type="text" class="form-control" id="nama_paket_maincourse" value="{{ $mc->nama_paket_maincourse }}">
                                                                                                        </div>
                                                                                                    
                                                                                                        <div class="form-group" style="text-align: left">
                                                                                                            <label for="deskripsi_makanan">Deskripsi Makanan</label>
                                                                                                            <textarea name="deskripsi_makanan" id="deskripsi_makanan" class="form-control">{{ $mc->deskripsi_makanan }}</textarea>
                                                                                                        </div>
                                                                                                        
                                                                                                        <div class="form-group" style="text-align: left">
                                                                                                            <label for="harga_paket">Harga Paket</label>
                                                                                                            <input name="harga_paket" type="text" class="form-control" id="harga_paket" value="{{ $mc->harga_paket }}">
                                                                                                        </div>
                                                                            
                                                                                                        <div class="form-group">
                                                                                                            <label for="foto_menu" style="text-align: left">Foto Thumbnail</label>
                                                                                                            <input type="file" class="form-control" id="foto_menu" name="foto_menu">
                                                                                                            @if($mc->foto_menu)
                                                                                                                <img src="{{ asset('storage/' . $mc->foto_menu) }}" alt="Foto Menu" class="img-thumbnail" width="200">
                                                                                                            @endif
                                                                                                        </div>

                                                                                                        <div class="form-group">
                                                                                                            <label for="multiple_foto" style="text-align: left">Foto Lainnya</label>
                                                                                                            <input type="file" class="form-control" id="multiple_foto" name="multiple_foto[]" multiple>
                                                                                                            <div class="d-flex justify-content-center">
                                                                                                                @if($mc->images->count() > 0)
                                                                                                                    <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel" style="width: 200px">
                                                                                                                        <!-- Carousel Indicators -->
                                                                                                                        <ol class="carousel-indicators">
                                                                                                                            @foreach($mc->images as $index => $image)
                                                                                                                                <li data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                                                                                                            @endforeach
                                                                                                                        </ol>
                                                                                                                
                                                                                                                        <!-- Carousel Inner (Images) -->
                                                                                                                        <div class="carousel-inner">
                                                                                                                            @foreach($mc->images as $index => $image)
                                                                                                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                                                                                    <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block w-100 img-thumbnail" alt="Foto Tambahan">
                                                                                                                                    {{-- <div class="carousel-caption d-none d-md-block">
                                                                                                                                        <h5>Slide {{ $index + 1 }}</h5>
                                                                                                                                        <p>Ini adalah foto tambahan ke-{{ $index + 1 }}</p>
                                                                                                                                    </div> --}}
                                                                                                                                </div>
                                                                                                                            @endforeach
                                                                                                                        </div>
                                                                                                                
                                                                                                                        <!-- Carousel Controls (Previous/Next) -->
                                                                                                                        <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-bs-slide="prev">
                                                                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                                                            <span class="visually-hidden">Previous</span>
                                                                                                                        </a>
                                                                                                                        <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-bs-slide="next">
                                                                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                                                            <span class="visually-hidden">Next</span>
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                @else
                                                                                                                    <p>Tidak ada foto tambahan</p>
                                                                                                                @endif
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit"
                                                                                            class="btn btn-outline-primary btn-lg btn-block form-control">Update</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dishes" role="tabpanel"
                                aria-labelledby="dishes-tab">
                                <form action="{{ route('admin.storeD') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <section class="section">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="nama_paket_dishes">Nama Paket</label>
                                                        <input name="nama_paket_dishes" type="text" class="form-control" id="nama_paket_dishes" required>
                                                    </div>
                            
                                                    <div class="form-group">
                                                        <label for="deskripsi_makanan">Deskripsi Makanan</label>
                                                        <textarea name="deskripsi_makanan" id="deskripsi_makanan" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="harga_paket">Harga Paket</label>
                                                        <input name="harga_paket" type="text" class="form-control" id="harga_paket" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="foto_menu">Foto Thumbnail</label>
                                                        <input type="file" class="form-control" id="foto_menu" name="foto_menu">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="multiple_foto">Foto Lainnya</label>
                                                        <input type="file" class="form-control" id="multiple_foto" name="multiple_foto[]" multiple>
                                                    </div>

                                                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block form-control">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                                <div class="card">
                                    <div class="card-header" style="background: #435ebe;color: #fff;text-align: center">
                                        List MainCourse
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">Nama Paket</th>
                                                    <th style="text-align: center">Harga</th>
                                                    <th style="text-align: center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($dishes as $ds)
                                                    <tr>
                                                        <td style="text-align: center">{{ $ds->id_dishes }}</td>
                                                        <td style="text-align: center">{{ $ds->nama_paket_dishes }}</td>
                                                        <td style="text-align: center">{{ $ds->harga_paket }}</td>
                                                        <td style="text-align: center">
                                                            <div class="btn-group" role="group">
                                                                <button class="btn btn-primary" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#xlarge{{ $ds->id_dishes }}">
                                                                    <article id="eye">
                                                                        <dt class="the-icon"><span
                                                                                class="fa-fw select-all fas"></span></dt>
                                                                    </article>
                                                                </button>
                                                                <!--Extra Large Modal -->
                                                                <div class="modal fade text-left w-100"
                                                                    id="xlarge{{ $ds->id_dishes }}" tabindex="-1" role="dialog"
                                                                    aria-labelledby="myModalLabel16" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel16">Detail
                                                                                    Menu Dishes</h4>
                                                                            </div>
                                                                            <div class="modal-body col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        @if($ds->foto_menu)
                                                                                            <img src="{{ asset('storage/' . $ds->foto_menu) }}" alt="Foto Menu" class="img-thumbnail">
                                                                                        @else
                                                                                            <p>Tidak ada Foto Thumbnail</p>
                                                                                        @endif
                                                                                        @if($ds->images->count() > 0)
                                                                                            <div class="row">
                                                                                                @foreach($ds->images as $image)
                                                                                                    <div class="col-md-4">
                                                                                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Foto Tambahan" width="500px" class="img-thumbnail">
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        @else
                                                                                            <p>Tidak ada foto tambahan</p>
                                                                                        @endif
                                                                                        
                                                                                        <!-- Tampilkan Foto Multiple dari MainCourseImage -->
                                                                                        {{-- @if($mc->images->count() > 0)
                                                                                            <div class="row">
                                                                                                @foreach($mc->images as $image)
                                                                                                    <div class="col-md-12">
                                                                                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Foto Tambahan" class="img-thumbnail">
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        @else
                                                                                            <p>Tidak ada foto tambahan</p>
                                                                                        @endif --}}
                                                                                    </div>
                                                                                    <div class="col-md-4" style="text-align: left">
                                                                                        <p><b style="color: #435ebe">ID Paket : </b>{{ $ds->id_dishes }}</p>
                                                                                        <p><b style="color: #435ebe">Nama Paket Dishes : </b>{{ $ds->nama_paket_dishes }}</p>
                                                                                        <p><b style="color: #435ebe">Harga : </b>{{ $ds->harga_paket }}</p>
                                                                                        <p>
                                                                                            <b style="color: #435ebe">Deskripsi :</b><br>
                                                                                            {!! str_replace(["\r\n", "\n", "\r"], '', nl2br(e($ds->deskripsi_makanan))) !!}
                                                                                        </p>
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
                                                                </div>
                                                                <button class="btn btn-warning" type="button" style="border-top-right-radius: 4px; border-bottom-right-radius: 4px"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModalCenter{{ $ds->id_dishes }}">
                                                                    <article id="pen-square">
                                                                        <dt class="the-icon"><span
                                                                                class="fa-fw select-all fas"></span></dt>
                                                                    </article>
                                                                </button>
                                                                <!--Extra Large Modal -->
                                                                <div class="modal fade"
                                                                    id="exampleModalCenter{{ $ds->id_dishes }}" tabindex="-1"
                                                                    role="dialog"
                                                                    aria-labelledby="exampleModalCenterTitle{{ $ds->id_dishes }}"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalCenterTitle{{ $ds->id_dishes }}">
                                                                                    Edit Data Dishes</h5>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form
                                                                                    action={{ route('admin.updateD', ['id_dishes' => $ds->id_dishes]) }}
                                                                                    method="POST" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method ('PUT')
                                                                                    <section class="section">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group" style="text-align: left">
                                                                                                            <label for="nama_paket_dishes">Nama Paket</label>
                                                                                                            <input name="nama_paket_dishes" type="text" class="form-control" id="nama_paket_dishes" value="{{ $ds->nama_paket_dishes }}">
                                                                                                        </div>
                                                                                                    
                                                                                                        <div class="form-group" style="text-align: left">
                                                                                                            <label for="deskripsi_makanan">Deskripsi Makanan</label>
                                                                                                            <textarea name="deskripsi_makanan" id="deskripsi_makanan" class="form-control">{{ $ds->deskripsi_makanan }}</textarea>
                                                                                                        </div>
                                                                                                        
                                                                                                        <div class="form-group" style="text-align: left">
                                                                                                            <label for="harga_paket">Harga Paket</label>
                                                                                                            <input name="harga_paket" type="text" class="form-control" id="harga_paket" value="{{ $ds->harga_paket }}">
                                                                                                        </div>
                                                                            
                                                                                                        <div class="form-group">
                                                                                                            <label for="foto_menu">Foto Menu</label>
                                                                                                            <input type="file" class="form-control" id="foto_menu" name="foto_menu">
                                                                                                            @if($ds->foto_menu)
                                                                                                                <img src="{{ asset('storage/' . $mc->foto_menu) }}" alt="Foto Menu" class="img-thumbnail" width="200">
                                                                                                            @endif
                                                                                                        </div>

                                                                                                        <div class="form-group">
                                                                                                            <label for="multiple_foto" style="text-align: left">Foto Lainnya</label>
                                                                                                            <input type="file" class="form-control" id="multiple_foto" name="multiple_foto[]" multiple>
                                                                                                            <div class="d-flex justify-content-center">
                                                                                                                @if($ds->images->count() > 0)
                                                                                                                    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel" style="width: 200px">
                                                                                                                        <!-- Carousel Indicators -->
                                                                                                                        <ol class="carousel-indicators">
                                                                                                                            @foreach($ds->images as $index => $image)
                                                                                                                                <li data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                                                                                                            @endforeach
                                                                                                                        </ol>
                                                                                                                
                                                                                                                        <!-- Carousel Inner (Images) -->
                                                                                                                        <div class="carousel-inner">
                                                                                                                            @foreach($ds->images as $index => $image)
                                                                                                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                                                                                    <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block w-100 img-thumbnail" alt="Foto Tambahan">
                                                                                                                                    {{-- <div class="carousel-caption d-none d-md-block">
                                                                                                                                        <h5>Slide {{ $index + 1 }}</h5>
                                                                                                                                        <p>Ini adalah foto tambahan ke-{{ $index + 1 }}</p>
                                                                                                                                    </div> --}}
                                                                                                                                </div>
                                                                                                                            @endforeach
                                                                                                                        </div>
                                                                                                                
                                                                                                                        <!-- Carousel Controls (Previous/Next) -->
                                                                                                                        <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-bs-slide="prev">
                                                                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                                                            <span class="visually-hidden">Previous</span>
                                                                                                                        </a>
                                                                                                                        <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-bs-slide="next">
                                                                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                                                            <span class="visually-hidden">Next</span>
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                @else
                                                                                                                    <p>Tidak ada foto tambahan</p>
                                                                                                                @endif
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit"
                                                                                            class="btn btn-outline-primary btn-lg btn-block form-control">Update</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <form action="{{ url('admin/CRUDVendor/' . $ds->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger" type="submit">
                                                                        <article id="trash-alt">
                                                                            <dt class="the-icon"><span
                                                                                    class="fa-fw select-all fas"></span></dt>
                                                                        </article>
                                                                    </button>
                                                                </form> --}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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

    {{-- pop up foto --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Menangani tumpang tindih modal
            var modalTriggers = document.querySelectorAll('.open-second-modal');

            modalTriggers.forEach(function(trigger) {
                trigger.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah aksi default anchor link
                    var secondModalTarget = this.getAttribute('data-bs-target');

                    // Tutup modal pertama
                    var bootstrapModal = bootstrap.Modal.getInstance(currentModal);
                    bootstrapModal.hide();

                    // Tunggu modal pertama tertutup lalu buka modal kedua
                    currentModal.addEventListener('hidden.bs.modal', function() {
                        var secondModal = new bootstrap.Modal(document.querySelector(secondModalTarget));
                        secondModal.show();
                    }, { once: true });
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var modalTriggers = document.querySelectorAll('.open-image-modal');

            modalTriggers.forEach(function(trigger) {
                trigger.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah aksi default anchor link
                    var secondModalTarget = this.getAttribute('data-bs-target');

                    // Jika ada modal terbuka, tutup modal tersebut sebelum membuka yang baru
                    if (currentModal) {
                        var bootstrapModal = bootstrap.Modal.getInstance(currentModal);
                        bootstrapModal.hide();

                        currentModal.addEventListener('hidden.bs.modal', function() {
                            var secondModal = new bootstrap.Modal(document.querySelector(secondModalTarget));
                            secondModal.show();
                        }, { once: true });
                    } else {
                        var secondModal = new bootstrap.Modal(document.querySelector(secondModalTarget));
                        secondModal.show();
                    }
                });
            });
        });
    </script>
</body>

</html>
