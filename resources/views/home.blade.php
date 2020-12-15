@extends('layouts.app')

@section('title', 'Beranda');

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Halaman Utama</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">utama</li>
        </ul>
        </nav>
    </div>
@endsection

@section('content')
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card card-block card-stretch card-height">
        <div class="card-body iq-total-content">
            <div class="top-block d-flex align-items-center justify-content-between">
                <p class="mb-1">Jumlah Pengunjung</p>
                <span class="badge badge-danger rounded-normal">23<i class="ri-arrow-down-s-fill"></i></span>
            </div>
            <h4><span class="counter">1370</span></h4>
            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                <div class="iq-progress-bar bg-danger-light mt-3 iq-progress-bar-icon">
                    <span class="bg-danger iq-progress progress-1" data-percent="67">
                    <span class="progress-text text-danger">67%</span>
                    </span>
                </div>
                <div id="total-chart-01" class="ml-4"></div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card card-block card-stretch card-height">
        <div class="card-body iq-total-content">
            <div class="top-block d-flex align-items-center justify-content-between">
                <p class="mb-1">Total Buku</p>
                <span class="badge badge-success rounded-normal">12<i class="ri-arrow-up-s-fill"></i></span>
            </div>
            <h4><span class="counter">2000</span></h4>
            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                <div class="iq-progress-bar progress-2 bg-success-light mt-3 iq-progress-bar-icon">
                    <span class="bg-success" data-percent="79">
                    <span class="progress-text text-success">79%</span>
                    </span>
                </div>
                <div id="total-chart-02" class="ml-4"></div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card card-block card-stretch card-height">
        <div class="card-body iq-total-content">
            <div class="top-block d-flex align-items-center justify-content-between">
                <p class="mb-1">Total Pembaca</p>
                <span class="badge badge-primary rounded-normal">10<i class="ri-arrow-up-s-fill"></i></span>
            </div>
            <h4><span class="counter">589</span></h4>
            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                <div class="iq-progress-bar progress-3 bg-primary-light mt-3 iq-progress-bar-icon">
                    <span class="bg-primary" data-percent="81">
                    <span class="progress-text text-primary">81%</span>
                    </span>
                </div>
                <div id="total-chart-03" class="ml-4"></div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card card-block card-stretch card-height">
        <div class="card-body iq-total-content">
            <div class="top-block d-flex align-items-center justify-content-between">
                <p class="mb-1">Total Member</p>
                <span class="badge badge-warning rounded-normal">8<i class="ri-arrow-up-s-fill"></i></span>
            </div>
            <h4><span class="counter">370</span></h4>
            <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                <div class="iq-progress-bar progress-4 bg-warning-light mt-3 iq-progress-bar-icon">
                    <span class="bg-warning" data-percent="34">
                    <span class="progress-text text-warning">34%</span>
                    </span>
                </div>
                <div id="total-chart-04" class="ml-4"></div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card card-block card-stretch card-height">
           <div class="card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Pengguna Terkini</h4>
              </div>
              <div class="card-header-toolbar d-flex align-items-center">
                 <div class="dropdown">
                    <span class="dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown">
                    <i class="ri-more-2-fill"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                       <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                       <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                       <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                       <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                       <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                    </div>
                 </div>
              </div>
           </div>
           <div class="card-body">
              <div class="table-responsive">
                 <table class="table mb-0 table-borderless tbl-server-info">
                    <thead>
                       <tr class="text-primary">
                          <th scope="col">#</th>
                          <th scope="col">Pengguna</th>
                          <th scope="col">ID Pengguna</th>
                          <th scope="col">Tanggal Bergabung</th>
                          <th scope="col">Wishlist</th>
                          <th scope="col">Status</th>
                       </tr>
                    </thead>
                    <tbody>
                       <tr>
                          <td>1</td>
                          <td>
                             <div class="d-flex align-items-center">
                                <img src={{asset("public/assets/images/user//01.jpg")}} alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                   <h6>Rodney Artichoke</h6>
                                   <p class="text-body mb-0">United States</p>
                                </div>
                             </div>
                          </td>
                          <td>#836729267</td>
                          <td>05-02-2020</td>
                          <td>10</td>
                          <td>
                             <div class="badge badge-success">Aktif</div>
                          </td>
                       </tr>
                       <tr>
                          <td>2</td>
                          <td>
                             <div class="d-flex align-items-center">
                                <img src={{asset("public/assets/images/user//02.jpg")}} alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                   <h6>Dominic L. Ement</h6>
                                   <p class="text-body mb-0">India</p>
                                </div>
                             </div>
                          </td>
                          <td>#948947392</td>
                          <td>09-02-2020</td>
                          <td>2</td>
                          <td>
                             <div class="badge badge-warning">Belum Verifikasi</div>
                          </td>
                       </tr>
                       <tr>
                          <td>3</td>
                          <td>
                             <div class="d-flex align-items-center">
                                <img src={{asset("public/assets/images/user//03.jpg")}} alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                   <h6>Caspian Bellevedere</h6>
                                   <p class="text-body mb-0">Germany</p>
                                </div>
                             </div>
                          </td>
                          <td>#927351323</td>
                          <td>16-02-2020</td>
                          <td>6</td>
                          <td>
                             <div class="badge badge-danger">Di Banned</div>
                          </td>
                       </tr>
                       <tr>
                          <td>4</td>
                          <td>
                             <div class="d-flex align-items-center">
                                <img src={{asset("public/assets/images/user//04.jpg")}} alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                   <h6>Max Conversion</h6>
                                   <p class="text-body mb-0">United States</p>
                                </div>
                             </div>
                          </td>
                          <td>#253427834</td>
                          <td>27-02-2020</td>
                          <td>8</td>
                          <td>
                             <div class="badge badge-success">Aktif</div>
                          </td>
                       </tr>
                       <tr>
                          <td>5</td>
                          <td>
                             <div class="d-flex align-items-center">
                                <img src={{asset("public/assets/images/user//05.jpg")}} alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                   <h6>Chaplain Mondover</h6>
                                   <p class="text-body mb-0">Bangladesh</p>
                                </div>
                             </div>
                          </td>
                          <td>#736292697</td>
                          <td>19-02-2020</td>
                          <td>23</td>
                          <td>
                             <div class="badge badge-success">Aktif</div>
                          </td>
                       </tr>
                    </tbody>
                 </table>
              </div>
           </div>
        </div>
    </div>
@endsection
