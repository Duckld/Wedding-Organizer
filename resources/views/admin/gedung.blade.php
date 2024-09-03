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
                            <ul class="submenu ">
                                <li class="submenu-item">
                                    <a href="/admin/maincourse">Katering</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="/admin/gedung">Gedung</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="/admin/dekorasi">Dekorasi</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="/admin/dokumentasi">Dokumentasi</a>
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
                    <h1>Gedung</h1>
                    <br>
                </header>
                <div class="card">
                    <form action="{{ route('gedung.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <section class="section">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_gedung">Nama Gedung</label>
                                            <input name="nama_gedung" type="text" class="form-control" id="nama_gedung" required>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="tipe_gedung">Tipe Gedung</label>
                                            <select class="form-select" name="tipe_gedung" required>
                                                <option value=""> </option>
                                                <option value="Indoor">Indoor</option>
                                                <option value="Outdoor">Outdoor</option>
                                                <option value="Indoor & Outdoor">Indoor & Outdoor</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_gedung">Alamat Gedung</label>
                                            <textarea name="alamat_gedung" id="alamat_gedung" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kapasitas_gedung">Kapasitas Gedung</label>
                                            <input name="kapasitas_gedung" type="text" class="form-control" id="kapasitas_gedung" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="status_gedung">Status Gedung</label>
                                            <select class="form-select" name="status_gedung" required>
                                                <option value=""> </option>
                                                <option value="Tersedia">Tersedia</option>
                                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="harga_sewa_gedung">Harga Sewa</label>
                                            <input name="harga_sewa_gedung" type="text" class="form-control" id="harga_sewa_gedung" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="deskripsi_gedung">Deskripsi Gedung</label>
                                            <textarea name="deskripsi_gedung" id="deskripsi_gedung" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="foto_gedung">Foto Gedung</label>
                                            <input type="file" class="form-control" id="foto_gedung" name="foto_gedung">
                                        </div>

                                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block form-control">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                    <div class="card-body">
                        <div class="card-header" style="background: #435ebe;color: #fff;text-align: center">
                            List Gedung
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">ID</th>
                                        <th style="text-align: center">Nama Gedung</th>
                                        <th style="text-align: center">Harga Sewa</th>
                                        <th style="text-align: center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gedung as $gd)
                                        <tr>
                                            <td style="text-align: center">{{ $gd->id_gedung }}</td>
                                            <td style="text-align: center">{{ $gd->nama_gedung }}</td>
                                            <td style="text-align: center">{{ $gd->harga_sewa_gedung }}</td>
                                            <td style="text-align: center">
                                                <div class="btn-group" role="group" style="text-align: left">
                                                    <button class="btn btn-primary" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#xlarge{{ $gd->id_gedung }}">
                                                        <article id="eye">
                                                            <dt class="the-icon"><span
                                                                    class="fa-fw select-all fas"></span></dt>
                                                        </article>
                                                    </button>
                                                    <!--Extra Large Modal -->
                                                    <div class="modal fade text-left w-100"
                                                        id="xlarge{{ $gd->id_gedung }}" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel16" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel16">Detail
                                                                        Gedung</h4>
                                                                </div>
                                                                <div class="modal-body col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <img src="{{ asset('storage/' . $gd->foto_gedung) }}" alt="{{ $gd->nama_gedung }}" class="img-fluid">
                                                                        </div>

                                                                        <div class="col-md-8">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p><b style="color: #435ebe">ID Paket : </b>{{ $gd->id_gedung }}</p>
                                                                                    <p><b style="color: #435ebe">Nama Gedung : </b>{{ $gd->nama_gedung }}</p>
                                                                                    <p><b style="color: #435ebe">Tipe Gedung : </b>{{ $gd->tipe_gedung }}</p>
                                                                                    <p><b style="color: #435ebe">Alamat : </b>{{ $gd->alamat_gedung }}</p>
                                                                                </div>
        
                                                                                <div class="col-md-6">
                                                                                    <p><b style="color: #435ebe"> </b></p>
                                                                                    <p><b style="color: #435ebe">Kapasitas Gedung : </b>{{ $gd->kapasitas_gedung }}</p>
                                                                                    <p><b style="color: #435ebe">Status Gedung : </b>{{ $gd->status_gedung }}</p>
                                                                                    <p><b style="color: #435ebe">Harga Sewa : </b>{{ $gd->harga_sewa_gedung }}</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <p><b style="color: #435ebe">Deskripsi : </b>{{ $gd->deskripsi_gedung }}</p>
                                                                            </div>
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
                                                        data-bs-target="#exampleModalCenter{{ $gd->id_gedung }}">
                                                        <article id="pen-square">
                                                            <dt class="the-icon"><span
                                                                    class="fa-fw select-all fas"></span></dt>
                                                        </article>
                                                    </button>
                                                    <!--Extra Large Modal -->
                                                    <div class="modal fade"
                                                        id="exampleModalCenter{{ $gd->id_gedung }}" tabindex="-1"
                                                        role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle{{ $gd->id_gedung }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalCenterTitle{{ $gd->id_gedung }}">
                                                                        Edit Data Gedung</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action={{ route('gedung.update', ['id' => $gd->id_gedung]) }}
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method ('PUT') 
                                                                        <section class="section">
                                                                           <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label for="nama_gedung">Nama Gedung</label>
                                                                                                <input name="nama_gedung" type="text" class="form-control" id="nama_gedung" value="{{ $gd->nama_gedung }}" required>
                                                                                            </div>
                                                                    
                                                                                            <div class="form-group">
                                                                                                <label for="tipe_gedung">Tipe Gedung</label>
                                                                                                <select class="form-select" name="tipe_gedung" required>
                                                                                                    <option value="{{ $gd->nama_gedung }}">{{ $gd->tipe_gedung }}</option>
                                                                                                    <option value="Indoor">Indoor</option>
                                                                                                    <option value="Outdoor">Outdoor</option>
                                                                                                    <option value="Indoor & Outdoor">Indoor & Outdoor</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="alamat_gedung">Alamat Gedung</label>
                                                                                                <textarea name="alamat_gedung" id="alamat_gedung" class="form-control">{{ $gd->alamat_gedung }}</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label for="kapasitas_gedung">Kapasitas Gedung</label>
                                                                                                <input name="kapasitas_gedung" type="text" class="form-control" id="kapasitas_gedung" value="{{ $gd->kapasitas_gedung }}" required>
                                                                                            </div>
                                                                                            
                                                                                            <div class="form-group">
                                                                                                <label for="status_gedung">Status Gedung</label>
                                                                                                <select class="form-select" name="status_gedung" required>
                                                                                                    <option value="{{ $gd->status_gedung }}">{{ $gd->status_gedung }}</option>
                                                                                                    <option value="Tersedia">Tersedia</option>
                                                                                                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                                                                                                </select>
                                                                                            </div>
                                                    
                                                                                            <div class="form-group">
                                                                                                <label for="harga_sewa_gedung">Harga Sewa</label>
                                                                                                <input name="harga_sewa_gedung" type="text" class="form-control" id="harga_sewa_gedung" value="{{ $gd->harga_sewa_gedung }}" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label for="deskripsi_gedung">Deskripsi Gedung</label>
                                                                                                <textarea name="deskripsi_gedung" id="deskripsi_gedung" class="form-control">{{ $gd->deskripsi_gedung }}</textarea>
                                                                                            </div>
                                                    
                                                                                            <div class="form-group" style="text-align: center">
                                                                                                <label for="foto_gedung">Foto Menu</label>
                                                                                                <input type="file" class="form-control" id="foto_gedung" name="foto_gedung">
                                                                                                @if($gd->foto_gedung)
                                                                                                    <img src="{{ asset('storage/' . $gd->foto_gedung) }}" alt="Foto Gedung" class="img-fluid mt-2" width="200">
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
                                                    {{-- <form action="{{ url('admin/CRUDVendor/' . $gd->id) }}">
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
