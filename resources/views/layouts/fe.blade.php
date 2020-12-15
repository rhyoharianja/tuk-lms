<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tuk Indonesia LMS</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href={{asset("public/assets/images/logo-tuk-icon.png")}} />

        <link rel="stylesheet" href={{asset("public/assets/css/backend.min.css")}}>
        <link rel="stylesheet" href={{asset("public/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css")}}>
        <link rel="stylesheet" href={{asset("public/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css")}}>
        <link rel="stylesheet" href={{asset("public/assets/vendor/remixicon/fonts/remixicon.css")}}>
        <link rel="stylesheet" href={{asset("public/assets/vendor/%40icon/dripicons/dripicons.css")}}>
    </head>
    <body class="tuk-wrapper">
        <!-- loader Start -->
        <div id="loading">
                <div id="loading-center">
                </div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper bg-h-full l-horizontal overflow-hidden">
            <div class="header-style-1 iq-top-navbar shadow">
                <div class="container iq-navbar-custom">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar c-navbar navbar-expand-lg navbar-light px-0 tuk">
                                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                                    <i class="ri-menu-line wrapper-menu"></i>
                                    <a href="{{ url('/') }}" class="header-logo">
                                        <img src={{asset("public/assets/images/logo-tuk-putih.jpg")}} class="img-fluid rounded-normal" alt="logo">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="iq-menu-horizontal">
                                        <nav class="iq-sidebar-menu">
                                            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                                                <a href="{{ url('/') }}" class="header-logo">
                                                    <img src={{asset("assets/images/logo.png")}} class="img-fluid rounded-normal" alt="logo">
                                                </a>
                                                <div class="iq-menu-bt-sidebar">
                                                    <i class="las la-bars wrapper-menu"></i>
                                                </div>
                                            </div>
                                            <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                                                <li>
                                                    <a href="{{ url('/') }}">
                                                        <i class="las la-home iq-arrow-left"></i><span>Beranda</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="{{ route('book-search') }}">
                                                        <i class="lab la-jira iq-arrow-left"></i><span>Cari Buku</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="lab la-elementor iq-arrow-left"></i><span>Media</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('faq') }}">
                                                        <i class="lab la-elementor iq-arrow-left"></i><span>FAQ</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                            aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                                            <i class="ri-menu-3-line th-line"></i>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav navbar-list align-items-center">

                                                <li class="nav-item nav-icon search-content">
                                                    <a href="#" class="search-toggle text-gray rounded" id="dropdownSearch" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                                        <form action="#" class="searchbox p-2">
                                                            <div class="form-group mb-0 position-relative">
                                                                <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                                                <a href="#" class="search-link"><i class="ri-search-line"></i></a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li class="nav-item nav-icon dropdown">
                                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-notification-line"></i>
                                                        <span class="bg-danger"></span>
                                                    </a>
                                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="card shadow-none m-0">
                                                            <div class="card-body p-0 ">
                                                                <div class="cust-title p-3">
                                                                    <h5 class="mb-0">All Notifications</h5>
                                                                </div>
                                                                <div class="p-3">
                                                                    <a href="#" class="iq-sub-card">
                                                                        <div class="media align-items-center">
                                                                            <div class="">
                                                                                <img class="avatar-40 rounded-small" src={{asset("assets/images/user/01.jpg")}}
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="media-body ml-3">
                                                                                <h6 class="mb-0">Emma Watson Barry <small
                                                                                        class="badge badge-success float-right">New</small>
                                                                                </h6>
                                                                                <p class="mb-0">95 MB</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" class="iq-sub-card">
                                                                        <div class="media align-items-center">
                                                                            <div class="">
                                                                                <img class="avatar-40 rounded-small" src={{asset("assets/images/user/02.jpg")}}
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="media-body ml-3">
                                                                                <h6 class="mb-0 ">New customer is join</h6>
                                                                                <p class="mb-0">Cyst Barry</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" class="iq-sub-card">
                                                                        <div class="media align-items-center">
                                                                            <div class="">
                                                                                <img class="avatar-40 rounded-small" src={{asset("assets/images/user/03.jpg")}}
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="media-body ml-3">
                                                                                <h6 class="mb-0 ">Two customer is left</h6>
                                                                                <p class="mb-0">Cyst Barry</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" class="iq-sub-card">
                                                                        <div class="media align-items-center">
                                                                            <div class="">
                                                                                <img class="avatar-40 rounded-small" src="public/assets/images/user/04.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="media-body ml-3">
                                                                                <h6 class="mb-0 ">New Mail from Fenny <small
                                                                                        class="badge badge-success float-right">New</small>
                                                                                </h6>
                                                                                <p class="mb-0">Cyst Barry</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#" role="button">
                                                                    <div class="dd-icon"><i class="las la-arrow-right mr-0"></i></div>
                                                                    View All
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="caption-content">
                                                    @guest
                                                    <a href="{{ route('login') }}" class="iq-user-toggle">
                                                        <i class="las la-sign-in-alt tuk-login-btn rounded"></i>
                                                    </a>
                                                    @else
                                                    <a href="#" class="iq-user-toggle">
                                                        <img src={{asset("public/assets/images/user/1.jpg")}} class="img-fluid rounded" alt="user">
                                                    </a>
                                                    <div class="iq-user-dropdown">
                                                        <div class="card">
                                                            <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                                                <div class="header-title">
                                                                    <h4 class="card-title mb-0">Profil Pengguna</h4>
                                                                </div>
                                                                <div class="close-data text-right badge badge-danger cursor-pointer"><i
                                                                        class="ri-close-fill"></i></div>
                                                            </div>
                                                            <div class="data-scrollbar" data-scroll="4">
                                                                <div class="card-body">
                                                                    <div class="profile-header">
                                                                        <div class="cover-container text-center">
                                                                            <img src={{asset("public/assets/images/user/1.jpg")}} alt="profile-bg"
                                                                                class="rounded img-fluid avatar-80">
                                                                            <div class="profile-detail mt-3">
                                                                            <h4>{{Auth::user()->name}}</h4>
                                                                                <p class="mb-1">Adminstrator</p>
                                                                            </div>
                                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Keluar</a>
                                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                @csrf
                                                                            </form>
                                                                        </div>
                                                                        <div class="profile-details my-4">
                                                                            <a href="{{ route('user-profile') }}"
                                                                                class="iq-sub-card bg-primary-light rounded-small p-2">
                                                                                <div class="media align-items-center">
                                                                                    <div class="rounded iq-card-icon-small">
                                                                                        <i class="ri-file-user-line"></i>
                                                                                    </div>
                                                                                    <div class="media-body ml-3">
                                                                                        <h6 class="mb-0 ">Profil Saya</h6>
                                                                                        <p class="mb-0 font-size-12">Lihat Detail Profil Saya.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="../app/user-profile-edit.html"
                                                                                class="iq-sub-card bg-danger-light rounded-small p-2">
                                                                                <div class="media align-items-center">
                                                                                    <div class="rounded iq-card-icon-small">
                                                                                        <i class="ri-profile-line"></i>
                                                                                    </div>
                                                                                    <div class="media-body ml-3">
                                                                                        <h6 class="mb-0 ">Ubah Profil</h6>
                                                                                        <p class="mb-0 font-size-12">Mengubah Data Profil.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="{{ route('user-wishlist') }}"
                                                                                class="iq-sub-card bg-success-light rounded-small p-2">
                                                                                <div class="media align-items-center">
                                                                                    <div class="rounded iq-card-icon-small">
                                                                                        <i class="ri-account-box-line"></i>
                                                                                    </div>
                                                                                    <div class="media-body ml-3">
                                                                                        <h6 class="mb-0 ">Pengaturan Wishlist</h6>
                                                                                        <p class="mb-0 font-size-12">Mengatur Wishlist Buku Saya.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="{{ route('user-review') }}"
                                                                                class="iq-sub-card bg-info-light rounded-small p-2">
                                                                                <div class="media align-items-center">
                                                                                    <div class="rounded iq-card-icon-small">
                                                                                        <i class="ri-lock-line"></i>
                                                                                    </div>
                                                                                    <div class="media-body ml-3">
                                                                                        <h6 class="mb-0 ">Pengaturan Review</h6>
                                                                                        <p class="mb-0 font-size-12">Mengontrol Pengaturan Review.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="personal-details">
                                                                            <h5 class="card-title mb-3 mt-3">Detail Pengguna</h5>
                                                                            <div class="row align-items-center mb-2">
                                                                                <div class="col-sm-6">
                                                                                    <h6>Tanggal Lahir</h6>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <p class="mb-0">03 Maret 1998</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row align-items-center mb-2">
                                                                                <div class="col-sm-6">
                                                                                    <h6>Alamat</h6>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <p class="mb-0">Jakarta Selatan</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row align-items-center mb-2">
                                                                                <div class="col-sm-6">
                                                                                    <h6>Telepon</h6>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <p class="mb-0">(021)987 543 201</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row align-items-center mb-2">
                                                                                <div class="col-sm-6">
                                                                                    <h6>Email</h6>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <p class="mb-0"><a href="http://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="53113221212a13362b323e233f367d303c3e">[email&#160;protected]</a></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row align-items-center mb-2">
                                                                                <div class="col-sm-6">
                                                                                    <h6>Twitter</h6>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <p class="mb-0">@catika</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row align-items-center mb-2">
                                                                                <div class="col-sm-6">
                                                                                    <h6>Facebook</h6>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <p class="mb-0">@cantika</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-3"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endguest
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tuk-container">
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- Wrapper End-->
        <footer class="iq-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        Copyright 2020 <a href="#">Tuk Indonesia</a> All Rights Reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- Backend Bundle JavaScript -->
       <script src={{asset("public/assets/js/backend-bundle.min.js")}}></script>

        <!-- slider JavaScript -->
        <script src={{asset("public/assets/js/slider.js")}}></script>

        <!-- app JavaScript -->
        <script src={{asset("public/assets/js/app.js")}}></script>
    </body>
</html>
