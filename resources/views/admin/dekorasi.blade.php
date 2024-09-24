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

                        <li class="sidebar-item has-sub active">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Features</span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item">
                                    <a href="/admin/gedung">Gedung</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="/admin/maincourse">Katering</a>
                                </li>
                                <li class="submenu-item active">
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
                    <h1>Dekorasi</h1>
                    <br>
                </header>
                <div class="card">
                    <form action="{{ route('dekorasi.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <section class="section">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_dekorasi">Nama Dekorasi</label>
                                            <input name="nama_dekorasi" type="text" class="form-control" id="nama_dekorasi" required>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="deskripsi_dekorasi">Deskripsi</label>
                                            <textarea name="deskripsi_dekorasi" id="deskripsi_dekorasi" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_dekorasi">Harga Dekorasi</label>
                                            <input name="harga_dekorasi" type="text" class="form-control" id="harga_dekorasi" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="foto_dekorasi">Foto Dekorasi</label>
                                            <input type="file" class="form-control" id="foto_dekorasi" name="foto_dekorasi">
                                        </div>

                                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block form-control">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                    <div class="card-body">
                        <div class="card-header" style="background: #435ebe;color: #fff;text-align: center">
                            List Dekorasi
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">ID</th>
                                        <th style="text-align: center">Nama Dekorasi</th>
                                        <th style="text-align: center">Harga</th>
                                        <th style="text-align: center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dekorasi as $dek)
                                        <tr>
                                            <td style="text-align: center">{{ $dek->id_dekorasi }}</td>
                                            <td style="text-align: center">{{ $dek->nama_dekorasi }}</td>
                                            <td style="text-align: center">{{ $dek->harga_dekorasi }}</td>
                                            <td style="text-align: center">
                                                <div class="btn-group" role="group">
                                                    <button class="btn btn-primary" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#xlarge{{ $dek->id_dekorasi }}">
                                                        <article id="eye">
                                                            <dt class="the-icon"><span
                                                                    class="fa-fw select-all fas"></span></dt>
                                                        </article>
                                                    </button>
                                                    <!--Extra Large Modal -->
                                                    <div class="modal fade text-left w-100"
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
                                                                        <div class="col-md-4">
                                                                            <img src="{{ asset('storage/' . $dek->foto_dekorasi) }}" alt="{{ $dek->nama_dekorasi }}" class="img-fluid">
                                                                        </div>
                                                                        <div class="col-md-4" style="text-align: left">
                                                                            <p><b style="color: #435ebe">ID Paket : </b>{{ $dek->id_dekorasi }}</p>
                                                                            <p><b style="color: #435ebe">Nama Dekorasi : </b>{{ $dek->nama_dekorasi }}</p>
                                                                            <p><b style="color: #435ebe">Harga : </b>{{ $dek->harga_dekorasi }}</p>
                                                                            <p><b style="color: #435ebe">Deskripsi : </b>{{ $dek->deskripsi_dekorasi }}</p>
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
                                                        data-bs-target="#exampleModalCenter{{ $dek->id_dekorasi }}">
                                                        <article id="pen-square">
                                                            <dt class="the-icon"><span
                                                                    class="fa-fw select-all fas"></span></dt>
                                                        </article>
                                                    </button>
                                                    <!--Extra Large Modal -->
                                                    <div class="modal fade"
                                                        id="exampleModalCenter{{ $dek->id_dekorasi }}" tabindex="-1"
                                                        role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle{{ $dek->id_dekorasi }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalCenterTitle{{ $dek->id_dekorasi }}">
                                                                        Edit Data Dekorasi</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action={{ route('dekorasi.update', ['id' => $dek->id_dekorasi]) }}
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method ('PUT')
                                                                        <section class="section">
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group" style="text-align: left">
                                                                                                <label for="nama_dekorasi">Nama Dekorasi</label>
                                                                                                <input name="nama_dekorasi" type="text" class="form-control" id="nama_dekorasi" value="{{ $dek->nama_dekorasi }}">
                                                                                            </div>
                                                                                        
                                                                                            <div class="form-group" style="text-align: left">
                                                                                                <label for="deskripsi_dekorasi">Deskripsi</label>
                                                                                                <textarea name="deskripsi_dekorasi" id="deskripsi_dekorasi" class="form-control">{{ $dek->deskripsi_dekorasi }}</textarea>
                                                                                            </div>
                                                                                            
                                                                                            <div class="form-group" style="text-align: left">
                                                                                                <label for="harga_dekorasi">Harga Dekorasi</label>
                                                                                                <input name="harga_dekorasi" type="text" class="form-control" id="harga_dekorasi" value="{{ $dek->harga_dekorasi }}">
                                                                                            </div>
                                                                
                                                                                            <div class="form-group">
                                                                                                <label for="foto_dekorasi" style="text-align: left">Foto Dekorasi</label>
                                                                                                <input type="file" class="form-control" id="foto_dekorasi" name="foto_dekorasi">
                                                                                                @if($dek->foto_dekorasi)
                                                                                                    <img src="{{ asset('storage/' . $dek->foto_dekorasi) }}" alt="Foto Dekorasi" class="img-fluid mt-2" width="200">
                                                                                                @endif
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
                                                    {{-- <form action="{{ url('admin/CRUDVendor/' . $dek->id) }}">
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
