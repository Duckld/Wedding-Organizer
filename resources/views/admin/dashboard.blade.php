<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/dist/assets/vendors/iconly/bold.css">
    
    <link rel="stylesheet" href="/assets/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/dist/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/dist/assets/images/favicon.svg" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="/assets/dist/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active">
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
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="/admin/maincourse">Katering</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/admin/gedung">Gedung</a>
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
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
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
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
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
                                                <img src="/assets/dist/assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, John!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                            Settings</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                            Wallet</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Vertical Layout with Navbar</h3>
                                <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="col-12 col-lg-9">
                                <div class="row">
                                    <div class="col-6 col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-3 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="stats-icon purple">
                                                            <i class="iconly-boldWallet"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="text-muted font-semibold">Pendapatan</h6>
                                                        <h6 class="font-extrabold mb-0">112.000</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-3 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="stats-icon blue">
                                                            <i class="iconly-boldBuy"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="text-muted font-semibold">Total Order</h6>
                                                        <h6 class="font-extrabold mb-0">183.000</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-3 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="stats-icon green">
                                                            <i class="iconly-boldAdd-User"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="text-muted font-semibold">Registerasi User</h6>
                                                        <h6 class="font-extrabold mb-0">80.000</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-3 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="stats-icon red">
                                                            <i class="iconly-boldBookmark"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="text-muted font-semibold">Saved Post</h6>
                                                        <h6 class="font-extrabold mb-0">112</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Bar Chart</h4>
                                            </div>
                                            <div class="card-body">
                                                <div id="bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-xl-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Profile Visit</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                                style="width:10px">
                                                                <use
                                                                    xlink:href="/assets/dist/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                            </svg>
                                                            <h5 class="mb-0 ms-3">Europe</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-0">862</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="chart-europe"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                                                style="width:10px">
                                                                <use
                                                                    xlink:href="/assets/dist/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                            </svg>
                                                            <h5 class="mb-0 ms-3">America</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-0">375</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="chart-america"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                                style="width:10px">
                                                                <use
                                                                    xlink:href="/assets/dist/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                            </svg>
                                                            <h5 class="mb-0 ms-3">Indonesia</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-0">1025</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="chart-indonesia"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Testimoni</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-lg">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama</th>
                                                                <th>Pesan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="col-3">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar avatar-md">
                                                                            <img src="/assets/dist/assets/images/faces/5.jpg">
                                                                        </div>
                                                                        <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                                    </div>
                                                                </td>
                                                                <td class="col-auto">
                                                                    <p class=" mb-0">Congratulations on your graduation!</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-3">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar avatar-md">
                                                                            <img src="/assets/dist/assets/images/faces/2.jpg">
                                                                        </div>
                                                                        <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                                    </div>
                                                                </td>
                                                                <td class="col-auto">
                                                                    <p class=" mb-0">Wow amazing design! Can you make another
                                                                        tutorial for
                                                                        this design?</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card">
                                    <div class="card-body py-4 px-5">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl">
                                                <img src="/assets/dist/assets/images/faces/1.jpg" alt="Face 1">
                                            </div>
                                            <div class="ms-3 name">
                                                <h5 class="font-bold">John Duck</h5>
                                                <h6 class="text-muted mb-0">@johnducky</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Pesan Terbaru</h4>
                                    </div>
                                    <div class="card-content pb-4">
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="avatar avatar-lg">
                                                <img src="/assets/dist/assets/images/faces/4.jpg">
                                            </div>
                                            <div class="name ms-4">
                                                <h5 class="mb-1">Hank Schrader</h5>
                                                <h6 class="text-muted mb-0">@johnducky</h6>
                                            </div>
                                        </div>
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="avatar avatar-lg">
                                                <img src="/assets/dist/assets/images/faces/5.jpg">
                                            </div>
                                            <div class="name ms-4">
                                                <h5 class="mb-1">Dean Winchester</h5>
                                                <h6 class="text-muted mb-0">@imdean</h6>
                                            </div>
                                        </div>
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="avatar avatar-lg">
                                                <img src="/assets/dist/assets/images/faces/1.jpg">
                                            </div>
                                            <div class="name ms-4">
                                                <h5 class="mb-1">John Dodol</h5>
                                                <h6 class="text-muted mb-0">@dodoljohn</h6>
                                            </div>
                                        </div>
                                        <div class="px-4">
                                            <button type="button" class='btn btn-block btn-xl btn-light-primary font-bold mt-3' data-bs-toggle="modal"
                                            data-bs-target="#defaultSize">Semua Pesan Masuk</button>
                                        </div>
                                        
                                        <div class="modal fade text-left" id="defaultSize" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel18">Pesan
                                                        </h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="recent-message d-flex px-4 py-3">
                                                            <div class="avatar avatar-lg">
                                                                <img src="/assets/dist/assets/images/faces/4.jpg">
                                                            </div>
                                                            <div class="name ms-4">
                                                                <a href="#"></a>
                                                                <h5  class="mb-1">Hank Schrader</h5>
                                                                <h6 class="text-muted mb-0">@johnducky</h6>
                                                            </div>
                                                        </div>
                                                        <div class="recent-message d-flex px-4 py-3">
                                                            <div class="avatar avatar-lg">
                                                                <img src="/assets/dist/assets/images/faces/5.jpg">
                                                            </div>
                                                            <div class="name ms-4">
                                                                <h5 class="mb-1">Dean Winchester</h5>
                                                                <h6 class="text-muted mb-0">@imdean</h6>
                                                            </div>
                                                        </div>
                                                        <div class="recent-message d-flex px-4 py-3">
                                                            <div class="avatar avatar-lg">
                                                                <img src="/assets/dist/assets/images/faces/1.jpg">
                                                            </div>
                                                            <div class="name ms-4">
                                                                <h5 class="mb-1">John Dodol</h5>
                                                                <h6 class="text-muted mb-0">@dodoljohn</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Visitors Profile</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-visitors-profile"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
    <script src="/assets/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/dist/assets/js/bootstrap.bundle.min.js"></script>

    <!-- {{-- script bar --}} -->
    <script>
        var options = {
            chart: {
                type: 'bar',
                height: 350
            },
            series: [{
                name: 'Pendapatan',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94, 100] // Data untuk Pendapatan
            }, {
                name: 'Pengeluaran',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41, 55] // Data untuk Pengeluaran
            }],
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'] // Label pada sumbu X
            },
            yaxis: {
                title: {
                    text: 'Rp (Juta)' // Label pada sumbu Y
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "Rp " + val + " Juta"
                    }
                }
            },
            colors: ['#00E396', '#FF5733']
        };

        var chart = new ApexCharts(document.querySelector("#bar"), options);
        chart.render();
    </script>

    <script src="/assets/dist/assets/js/pages/dashboard.js"></script>

    <script src="/assets/dist/assets/js/main.js"></script>
</body>

</html>