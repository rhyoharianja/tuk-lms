@extends('layouts.fe')
@section('content')
    <div class="col-lg-12 p-0" style="margin-top: -60px !important;">
        <div class="card-transparent" style="margin-bottom: 0px !important;">
            <div class="card-body p-0">
                <div class="profile-image position-relative">
                   <img src="{{asset("public/assets/images/sample-profile.png")}}" class="img-fluid rounded w-100" alt="">
                </div>
                <div class="profile-overly">
                    <h3>{{Auth::user()->name}}</h3>
                   <span>Member Aktif</span>
                </div>
             </div>
        </div>
    </div>
    <div class="col-lg-12 pt-5 pb-5 bg-white-tuk">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                       <div class="card-body text-center">
                          <svg width="36" height="48" viewBox="0 0 36 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path
                                d="M9.10495 33.9964C8.29026 33.1817 8.71495 33.4114 6.74995 32.8855C5.85838 32.6464 5.07463 32.1871 4.36588 31.6367L0.112441 42.0655C-0.299122 43.0752 0.469629 44.1721 1.559 44.1308L6.4987 43.9424L9.8962 47.5311C10.6462 48.3224 11.9624 48.0758 12.374 47.0661L17.2537 35.1017C16.2375 35.668 15.1096 35.9999 13.9434 35.9999C12.1153 35.9999 10.3978 35.2883 9.10495 33.9964V33.9964ZM35.8875 42.0655L31.634 31.6367C30.9253 32.188 30.1415 32.6464 29.25 32.8855C27.2746 33.4142 27.7078 33.1836 26.895 33.9964C25.6021 35.2883 23.8837 35.9999 22.0556 35.9999C20.8893 35.9999 19.7615 35.6671 18.7453 35.1017L23.625 47.0661C24.0365 48.0758 25.3537 48.3224 26.1028 47.5311L29.5012 43.9424L34.4409 44.1308C35.5303 44.1721 36.299 43.0742 35.8875 42.0655V42.0655ZM24.6562 31.8749C26.0887 30.4171 26.2528 30.5427 28.2928 29.9867C29.595 29.6314 30.6131 28.5955 30.9618 27.2699C31.6631 24.6074 31.4812 24.9289 33.3946 22.9808C34.3481 22.0105 34.7203 20.5958 34.3715 19.2702C33.6712 16.6096 33.6703 16.9808 34.3715 14.3174C34.7203 12.9917 34.3481 11.5771 33.3946 10.6067C31.4812 8.65862 31.6631 8.97925 30.9618 6.31768C30.6131 4.99206 29.595 3.95612 28.2928 3.60081C25.679 2.88737 25.994 3.07393 24.0787 1.12487C23.1253 0.154558 21.735 -0.225129 20.4328 0.130183C17.82 0.842683 18.1846 0.843621 15.5671 0.130183C14.2649 -0.225129 12.8746 0.153621 11.9212 1.12487C10.0078 3.073 10.3228 2.88737 7.70807 3.60081C6.40588 3.95612 5.38776 4.99206 5.03901 6.31768C4.33869 8.97925 4.51963 8.65862 2.60619 10.6067C1.65275 11.5771 1.27963 12.9917 1.62932 14.3174C2.32963 16.9761 2.33057 16.6049 1.62932 19.2692C1.28057 20.5949 1.65275 22.0096 2.60619 22.9808C4.51963 24.9289 4.33776 24.6074 5.03901 27.2699C5.38776 28.5955 6.40588 29.6314 7.70807 29.9867C9.8062 30.5586 9.96276 30.4686 11.3437 31.8749C12.584 33.1377 14.5162 33.3636 16.0068 32.4205C16.6029 32.0421 17.2944 31.8411 18.0004 31.8411C18.7065 31.8411 19.3979 32.0421 19.994 32.4205C21.4837 33.3636 23.4159 33.1377 24.6562 31.8749ZM9.15557 16.4961C9.15557 11.5246 13.1156 7.49425 18 7.49425C22.8843 7.49425 26.8443 11.5246 26.8443 16.4961C26.8443 21.4677 22.8843 25.498 18 25.498C13.1156 25.498 9.15557 21.4677 9.15557 16.4961V16.4961Z"
                                fill="#4788ff" />
                          </svg>
                          <h2 class="mb-2 mt-3 text-primary">42+</h2>
                          <h4>Rating Baca</h4>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                       <div class="card-body text-center">
                          <svg width="36" height="48" viewBox="0 0 36 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path
                                d="M9.10495 33.9964C8.29026 33.1817 8.71495 33.4114 6.74995 32.8855C5.85838 32.6464 5.07463 32.1871 4.36588 31.6367L0.112441 42.0655C-0.299122 43.0752 0.469629 44.1721 1.559 44.1308L6.4987 43.9424L9.8962 47.5311C10.6462 48.3224 11.9624 48.0758 12.374 47.0661L17.2537 35.1017C16.2375 35.668 15.1096 35.9999 13.9434 35.9999C12.1153 35.9999 10.3978 35.2883 9.10495 33.9964V33.9964ZM35.8875 42.0655L31.634 31.6367C30.9253 32.188 30.1415 32.6464 29.25 32.8855C27.2746 33.4142 27.7078 33.1836 26.895 33.9964C25.6021 35.2883 23.8837 35.9999 22.0556 35.9999C20.8893 35.9999 19.7615 35.6671 18.7453 35.1017L23.625 47.0661C24.0365 48.0758 25.3537 48.3224 26.1028 47.5311L29.5012 43.9424L34.4409 44.1308C35.5303 44.1721 36.299 43.0742 35.8875 42.0655V42.0655ZM24.6562 31.8749C26.0887 30.4171 26.2528 30.5427 28.2928 29.9867C29.595 29.6314 30.6131 28.5955 30.9618 27.2699C31.6631 24.6074 31.4812 24.9289 33.3946 22.9808C34.3481 22.0105 34.7203 20.5958 34.3715 19.2702C33.6712 16.6096 33.6703 16.9808 34.3715 14.3174C34.7203 12.9917 34.3481 11.5771 33.3946 10.6067C31.4812 8.65862 31.6631 8.97925 30.9618 6.31768C30.6131 4.99206 29.595 3.95612 28.2928 3.60081C25.679 2.88737 25.994 3.07393 24.0787 1.12487C23.1253 0.154558 21.735 -0.225129 20.4328 0.130183C17.82 0.842683 18.1846 0.843621 15.5671 0.130183C14.2649 -0.225129 12.8746 0.153621 11.9212 1.12487C10.0078 3.073 10.3228 2.88737 7.70807 3.60081C6.40588 3.95612 5.38776 4.99206 5.03901 6.31768C4.33869 8.97925 4.51963 8.65862 2.60619 10.6067C1.65275 11.5771 1.27963 12.9917 1.62932 14.3174C2.32963 16.9761 2.33057 16.6049 1.62932 19.2692C1.28057 20.5949 1.65275 22.0096 2.60619 22.9808C4.51963 24.9289 4.33776 24.6074 5.03901 27.2699C5.38776 28.5955 6.40588 29.6314 7.70807 29.9867C9.8062 30.5586 9.96276 30.4686 11.3437 31.8749C12.584 33.1377 14.5162 33.3636 16.0068 32.4205C16.6029 32.0421 17.2944 31.8411 18.0004 31.8411C18.7065 31.8411 19.3979 32.0421 19.994 32.4205C21.4837 33.3636 23.4159 33.1377 24.6562 31.8749ZM9.15557 16.4961C9.15557 11.5246 13.1156 7.49425 18 7.49425C22.8843 7.49425 26.8443 11.5246 26.8443 16.4961C26.8443 21.4677 22.8843 25.498 18 25.498C13.1156 25.498 9.15557 21.4677 9.15557 16.4961V16.4961Z"
                                fill="#fe721c" />
                          </svg>
                          <h2 class="mb-2 mt-3 text-warning">42+</h2>
                          <h4>Review Baca</h4>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                       <div class="card-body text-center">
                          <svg width="60" height="48" viewBox="0 0 60 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path
                                d="M23.9091 24.5297C24.495 25.1156 25.4447 25.1156 26.0306 24.5297L27.0909 23.4694C27.6769 22.8834 27.6769 21.9338 27.0909 21.3478L23.7422 18L27.09 14.6512C27.6759 14.0653 27.6759 13.1156 27.09 12.5297L26.0297 11.4694C25.4437 10.8834 24.4941 10.8834 23.9081 11.4694L18.4387 16.9387C17.8528 17.5247 17.8528 18.4744 18.4387 19.0603L23.9091 24.5297V24.5297ZM32.91 23.4703L33.9703 24.5306C34.5563 25.1166 35.5059 25.1166 36.0919 24.5306L41.5613 19.0613C42.1472 18.4753 42.1472 17.5256 41.5613 16.9397L36.0919 11.4703C35.5059 10.8844 34.5563 10.8844 33.9703 11.4703L32.91 12.5306C32.3241 13.1166 32.3241 14.0662 32.91 14.6522L36.2578 18L32.91 21.3488C32.3241 21.9347 32.3241 22.8844 32.91 23.4703V23.4703ZM58.5 39H35.7694C35.7 40.8572 34.3903 42 32.7 42H27C25.2478 42 23.9044 40.3622 23.9278 39H1.5C0.675 39 0 39.675 0 40.5V42C0 45.3 2.7 48 6 48H54C57.3 48 60 45.3 60 42V40.5C60 39.675 59.325 39 58.5 39ZM54 4.5C54 2.025 51.975 0 49.5 0H10.5C8.025 0 6 2.025 6 4.5V36H54V4.5ZM48 30H12V6H48V30Z"
                                fill="#37e6b0" />
                          </svg>
                          <h2 class="mb-2 mt-3 text-success">3+ years </h2>
                          <h4>Lama Member</h4>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                       <div class="card-body text-center">
                          <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path
                                d="M35.3676 11.2517C34.8398 11.2372 34.3256 11.3198 33.8438 11.4898V7.03125C33.8438 4.70503 31.9512 2.8125 29.625 2.8125C29.0759 2.8125 28.5517 2.91909 28.0701 3.11072C27.5821 1.32047 25.9428 0 24 0C22.0572 0 20.4179 1.32047 19.9299 3.11072C19.4483 2.91909 18.9241 2.8125 18.375 2.8125C16.0488 2.8125 14.1562 4.70503 14.1562 7.03125V11.4895C13.6747 11.3198 13.1607 11.2372 12.6324 11.2517C10.3711 11.3136 8.53125 13.2316 8.53125 15.5272V48H36.6562V41.2395L38.5637 36.4704C39.1643 34.9689 39.4688 33.3877 39.4688 31.7705V15.5272C39.4688 13.2316 37.6289 11.3136 35.3676 11.2517V11.2517ZM11.3438 45.1875V42.375H33.8438V45.1875H11.3438ZM36.6562 31.7705C36.6562 33.0283 36.4194 34.2581 35.9523 35.4261L34.2979 39.5625H11.3438V15.5272C11.3438 14.7405 11.9564 14.0837 12.7095 14.0631C13.0926 14.0504 13.4561 14.1937 13.7305 14.4607C14.0051 14.7278 14.1563 15.0858 14.1563 15.4687V21.9843H16.9688V7.03125C16.9688 6.25584 17.5997 5.625 18.3751 5.625C19.1505 5.625 19.7813 6.25584 19.7813 7.03125V21.9844H22.5938V4.21875C22.5938 3.44334 23.2247 2.8125 24.0001 2.8125C24.7755 2.8125 25.4063 3.44334 25.4063 4.21875V21.9844H28.2188V7.03125C28.2188 6.25584 28.8497 5.625 29.6251 5.625C30.4005 5.625 31.0313 6.25584 31.0313 7.03125V24.1714C24.712 24.8732 19.7812 30.2467 19.7812 36.75H22.5938C22.5938 31.3222 27.0097 26.9062 32.4375 26.9062H33.8438V15.4688C33.8438 15.0859 33.995 14.7278 34.2696 14.4608C34.544 14.1938 34.9067 14.0508 35.2906 14.0632C36.0436 14.0838 36.6562 14.7406 36.6562 15.5273V31.7705Z"
                                fill="#ff4b4b" />
                          </svg>
                          <h2 class="mb-2 mt-3 text-danger">424+</h2>
                          <h4>Lapor Buku</h4>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card card-block card-stretch card-height">
                       <div class="card-header">
                          <div class="header-title">
                             <h4 class="card-title">Penulis Yang Diminati</h4>
                          </div>
                       </div>
                       <div class="card-body">
                          <ul class="list-inline p-0 m-0">
                            <li class="d-flex align-items-center mb-3">
                                    <img src="{{asset('public/assets/images/user//01.jpg')}}" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                    <div class="pl-3">
                                       <h6>Rodney Artichoke</h6>
                                       <p class="text-body mb-0">United States</p>
                                    </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <img src={{asset("public/assets/images/user//05.jpg")}} alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                   <h6>Chaplain Mondover</h6>
                                   <p class="text-body mb-0">Bangladesh</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <img src={{asset("public/assets/images/user//04.jpg")}} alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                   <h6>Max Conversion</h6>
                                   <p class="text-body mb-0">United States</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <img src={{asset("public/assets/images/user//03.jpg")}} alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                   <h6>Caspian Bellevedere</h6>
                                   <p class="text-body mb-0">Germany</p>
                                </div>
                            </li>
                          </ul>
                       </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card card-block card-stretch card-height">
                       <div class="card-header">
                          <div class="header-title">
                             <h4 class="card-title">Sedang Dibaca</h4>
                          </div>
                       </div>
                       <div class="card-body">
                          <ul class="list-inline p-0 m-0">
                            <li class="d-flex align-items-center mb-3">
                                <img src="{{asset('public/assets/images/book-image/browse-books/04.jpg')}}" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                    <h6>Take On The Risk</h6>
                                    <p class="text-body mb-0">George Strong</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <img src="{{asset('public/assets/images/book-image/browse-books/05.jpg')}}" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                    <h6>Absteact On Background</h6>
                                    <p class="text-body mb-0">Ichae Semos</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <img src="{{asset('public/assets/images/book-image/browse-books/04.jpg')}}" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                    <h6>Take On The Risk</h6>
                                    <p class="text-body mb-0">George Strong</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <img src="{{asset('public/assets/images/book-image/browse-books/05.jpg')}}" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                <div class="pl-3">
                                    <h6>Absteact On Background</h6>
                                    <p class="text-body mb-0">Ichae Semos</p>
                                </div>
                            </li>
                          </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 pt-5 pb-5 bg-white-tuk">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <h2 class="mb-0">Buku Populer</h2>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <a class="button btn btn-danger mr-2 button-icon rounded-small" target="_blank" href="#"><i class="ri-add-line m-0"></i> Cari Buku</a>
                        <a class="button btn btn-warning button-icon" target="_blank" href="#"><i class="ri-drag-move-2-line"></i>Selengkapnya</a>
                    </div>
                    </div>
                </div>
            </div>
            <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/01.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">The Word Books Day..</h6>
                            <p class="font-size-13 line-height mb-1">Paul Molive</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="price d-flex align-items-center">
                            <span class="pr-1 old-price">$99</span>
                            <h6><b>$89</b></h6>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/02.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">The catcher in the Rye</h6>
                            <p class="font-size-13 line-height mb-1">Anna Sthesia</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="price d-flex align-items-center">
                            <span class="pr-1 old-price">$89</span>
                            <h6><b>$79</b></h6>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/03.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Little Black Book</h6>
                            <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="price d-flex align-items-center">
                            <span class="pr-1 old-price">$100</span>
                            <h6><b>$89</b></h6>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/04.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Take The Risk Book</h6>
                            <p class="font-size-13 line-height mb-1">Smith goal</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="price d-flex align-items-center">
                            <span class="pr-1 old-price">$120</span>
                            <h6><b>$99</b></h6>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/05.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">The Raze Night Book </h6>
                            <p class="font-size-13 line-height mb-1">Paige Turner</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="price d-flex align-items-center">
                            <span class="pr-1 old-price">$150</span>
                            <h6><b>$129</b></h6>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/06.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Find the Wave Book..</h6>
                            <p class="font-size-13 line-height mb-1">Barb Ackue</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="price d-flex align-items-center">
                            <span class="pr-1 old-price">$120</span>
                            <h6><b>$100</b></h6>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <h2 class="mb-0">Bacaan Terfavorit</h2>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <a class="button btn btn-danger mr-2 button-icon rounded-small" target="_blank" href="#"><i class="ri-add-line m-0"></i> Cari Buku</a>
                        <a class="button btn btn-warning button-icon" target="_blank" href="#"><i class="ri-drag-move-2-line"></i>Selengkapnya</a>
                    </div>
                    </div>
                </div>
            </div>
            <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                <li class="col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void();">
                        <img src={{asset("public/assets/images/book-image/favorite/05.jpg")}} class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                        <p class="mb-2">Author : Pedro Araez</p>
                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                            <span>Reading</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                                <span class="bg-primary" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="#">Read Now<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void();">
                        <img src={{asset("public/assets/images/book-image/favorite/06.jpg")}} class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">Casey Christie night book into find...</h5>
                        <p class="mb-2">Author : Michael klock</p>
                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                            <span>Reading</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                                <span class="bg-danger" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="#">Read Now<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void();">
                        <img src={{asset("public/assets/images/book-image/favorite/07.jpg")}} class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">The Secret to English Busy People..</h5>
                        <p class="mb-2">Author : Daniel Ace</p>
                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                            <span>Reading</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                                <span class="bg-info" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="#">Read Now<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void();">
                        <img src={{asset("public/assets/images/book-image/favorite/08.jpg")}} class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">The adventures of Robins books...</h5>
                        <p class="mb-2">Author : Luka Afton</p>
                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                            <span>Reading</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                                <span class="bg-success" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="#">Read Now<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
