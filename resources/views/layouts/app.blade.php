<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tuk Indonesia LMS | @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href={{asset("public/assets/images/logo-tuk-icon.png")}} />

    <link rel="stylesheet" href={{asset("public/assets/css/backend.min.css")}}>
    <link rel="stylesheet" href={{asset("public/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css")}}>
    <link rel="stylesheet" href={{asset("public/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css")}}>
    <link rel="stylesheet" href={{asset("public/assets/vendor/remixicon/fonts/remixicon.css")}}>
    <link rel="stylesheet" href={{asset("public/assets/vendor/%40icon/dripicons/dripicons.css")}}>

    <link rel='stylesheet' href={{asset('public/assets/vendor/fullcalendar/core/main.css')}} />
    <link rel='stylesheet' href={{asset('public/assets/vendor/fullcalendar/daygrid/main.css')}} />
    <link rel='stylesheet' href={{asset('public/assets/vendor/fullcalendar/timegrid/main.css')}} />
    <link rel='stylesheet' href={{asset('public/assets/vendor/fullcalendar/list/main.css')}} />
    <link rel="stylesheet" href={{asset("public/assets/vendor/mapbox/mapbox-gl.css")}}>
</head>

<body class=" color-light ">
    <!-- loader Start -->
    {{-- <div id="loading">
        <div id="loading-center">
        </div>
    </div> --}}
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="{{ url('/') }}" class="header-logo">
                  <img src={{asset("public/assets/images/logo-tuk-putih.jpg")}} class="img-fluid rounded-normal" alt="logo">
              </a>
                <div class="iq-menu-bt-sidebar">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        @forelse($adminMenu as $adm)
                            <li class=" ">
                                @if (count($adm->menu_children) > 0)
                                    <a href="#id-{{ $adm->id }}" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="{{ $adm->menu_icon }} iq-arrow-left"></i>
                                        <span>{{ $adm->menu_name }}</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="id-{{ $adm->id }}" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        @foreach ($adm->menu_children as $admchild)
                                            <li class=" ">
                                                <a href="{{ route($admchild->menu_route) }}">
                                                    <i class="{{ $admchild->menu_icon }}"></i><span>{{ $admchild->menu_name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <a href="{{route($adm->menu_route)}}" class="">
                                        <i class="{{ $adm->menu_icon }} iq-arrow-left"></i><span>{{ $adm->menu_name }}</span>
                                    </a>
                                @endif
                            </li>
                        @empty
                        <li class=" ">
                            <a href="index.html" class="">
                                  <i class="las la-home iq-arrow-left"></i><span>Beranda</span>
                              </a>
                        </li>
                        @endforelse
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="index.html" class="header-logo">
                            <img src={{asset("public/assets/images/logo.png")}} class="img-fluid rounded-normal" alt="logo">
                        </a>
                    </div>
                    <div class="iq-search-bar device-search">
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-mail-line"></i>
                                        <span class="bg-primary count-mail"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="cust-title p-3">
                                                    <h5 class="mb-0">All Messages</h5>
                                                </div>
                                                <div class="p-3">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src={{asset("public/assets/images/user/01.jpg")}} alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Barry Emma Watson <small class="badge badge-success float-right">New</small></h6>
                                                                <small class="float-left font-size-12">12:00 PM</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src={{asset("public/assets/images/user/02.jpg")}} alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                                <small class="float-left font-size-12">20 Apr</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src={{asset("public/assets/images/user/03.jpg")}} alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Why do we use it? <small class="badge badge-success float-right">New</small></h6>
                                                                <small class="float-left font-size-12">1:24 PM</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src={{asset("public/assets/images/user/04.jpg")}} alt="04">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Variations Passages <small class="badge badge-success float-right">New</small></h6>
                                                                <small class="float-left font-size-12">5:45 PM</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src={{asset("public/assets/images/user/05.jpg")}} alt="05">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                                <small class="float-left font-size-12">1 day ago</small>
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
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-notification-line"></i>
                                        <span class="bg-primary dots"></span>
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
                                                                <img class="avatar-40 rounded-small" src={{asset("public/assets/images/user/01.jpg")}} alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Emma Watson Barry <small class="badge badge-success float-right">New</small></h6>
                                                                <p class="mb-0">95 MB</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src={{asset("public/assets/images/user/02.jpg")}} alt="02">
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
                                                                <img class="avatar-40 rounded-small" src={{asset("public/assets/images/user/03.jpg")}} alt="03">
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
                                                                <img class="avatar-40 rounded-small" src={{asset("public/assets/images/user/04.jpg")}} alt="04">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">New Mail from Fenny <small class="badge badge-success float-right">New</small></h6>
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
                                <li class="nav-item iq-full-screen"><a href="#" class="" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                                <li class="caption-content">
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
                                                                <h4>{{ Auth::user()->name }}</h4>
                                                                <p class="mb-1">Adminstrator</p>
                                                            </div>
                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Keluar</a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                        <div class="profile-details my-4">
                                                            <a href="../app/user-profile.html"
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
                                                            <a href="../app/user-account-setting.html"
                                                                class="iq-sub-card bg-success-light rounded-small p-2">
                                                                <div class="media align-items-center">
                                                                    <div class="rounded iq-card-icon-small">
                                                                        <i class="ri-account-box-line"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Pengaturan Akun</h6>
                                                                        <p class="mb-0 font-size-12">Mengatur Akun Saya.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="../app/user-privacy-setting.html"
                                                                class="iq-sub-card bg-info-light rounded-small p-2">
                                                                <div class="media align-items-center">
                                                                    <div class="rounded iq-card-icon-small">
                                                                        <i class="ri-lock-line"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Pengaturan Privasi</h6>
                                                                        <p class="mb-0 font-size-12">Mengontrol Pengaturan Privasi.</p>
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
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex align-items-center justify-content-between welcome-content">
                            @yield('header')
                            <div class="btn-group btn-group-toggle">
                              <a class="button btn btn-warning mr-2 button-icon rounded-small" target="_blank" href="#"><i class="ri-download-2-line m-0"></i></a>
                              <a class="button btn btn-info mr-2 button-icon rounded-small" target="_blank" href="#"><i class="ri-add-line m-0"></i></a>
                              <a class="button btn btn-primary button-icon" target="_blank" href="#"><i class="ri-drag-move-2-line"></i>Website</a>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#" class="text-danger">Tuk Indonesia LMS</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <script src={{asset("public/assets/js/backend-bundle.min.js")}}></script>

    <!-- Flextree Javascript-->
    <script src={{asset("public/assets/js/flex-tree.min.js")}}></script>
    <script src="public/assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src={{asset("public/assets/js/table-treeview.js")}}></script>

    <!-- Masonary Gallery Javascript -->
    <script src="public/assets/js/masonry.pkgd.min.js"></script>
    <script src={{asset("public/assets/js/imagesloaded.pkgd.min.js")}}></script>

    <!-- Mapbox Javascript -->
    <script src={{asset("public/assets/js/mapbox-gl.js")}}></script>
    <script src={{asset("public/assets/js/mapbox.js")}}></script>

    <!-- Fullcalender Javascript -->
    <script src={{asset('public/assets/vendor/fullcalendar/core/main.js')}}></script>
    <script src={{asset('public/assets/vendor/fullcalendar/daygrid/main.js')}}></script>
    <script src={{asset('public/assets/vendor/fullcalendar/timegrid/main.js')}}></script>
    <script src={{asset('public/assets/vendor/fullcalendar/list/main.js')}}></script>

    <!-- SweetAlert JavaScript -->
    <script src={{asset("public/assets/js/sweetalert.js")}}></script>

    <!-- Vectoe Map JavaScript -->
    <script src={{asset("public/assets/js/vector-map-custom.js")}}></script>

    <!-- Chart Custom JavaScript -->
    <script src={{asset("public/assets/js/customizer.js")}}></script>

    <!-- Chart Custom JavaScript -->
    <script src={{asset("public/assets/js/chart-custom.js")}}></script>

    <!-- slider JavaScript -->
    <script src={{asset("public/assets/js/slider.js")}}></script>

    <!-- app JavaScript -->
    <script src={{asset("public/assets/js/app.js")}}></script>
</body>

</html>
