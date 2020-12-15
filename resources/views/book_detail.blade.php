@extends('layouts.fe')
@section('content')
    <div class="col-sm-12 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                    <div class="card-body p-0">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <ul id="description-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/01.jpg")}} class="img-fluid rounded w-100" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/02.jpg")}} class="img-fluid rounded w-100" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/03.jpg")}} class="img-fluid rounded w-100" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/04.jpg")}} class="img-fluid rounded w-100" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/05.jpg")}} class="img-fluid rounded w-100" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/06.jpg")}} class="img-fluid rounded w-100" alt="">
                                    </a>
                                </li>
                                </ul>
                            </div>
                            <div class="col-9">
                                <ul id="description-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/01.jpg")}} class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/02.jpg")}} class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/03.jpg")}} class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/04.jpg")}} class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/05.jpg")}} class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                    <img src={{asset("public/assets/images/book-image/book-dec/06.jpg")}} class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body p-0">
                            <h3 class="mb-3">A Casey Christi night books in the raza Dakota Krout</h3>
                            <div class="price d-flex align-items-center font-weight-500 mb-2">
                                <p class="font-size-20 pr-2 old-price">126 Dilihat</p>
                            </div>
                            <div class="mb-3 d-block">
                                <span class="font-size-20 text-warning">
                                <i class="fa fa-star mr-1"></i>
                                <i class="fa fa-star mr-1"></i>
                                <i class="fa fa-star mr-1"></i>
                                <i class="fa fa-star mr-1"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <span class="mb-4 pb-4 iq-border-bottom d-block">Monterhing in the best book testem ipsum is simply dtest in find in a of the printing and typeseting industry into to end.in find in a of the printing and typeseting industry in find to make it all done into end.</span>
                            <div class="text-danger mb-4">Penulis: <span class="text-body">Jhone Steben</span></div>
                            <div class="mb-4 d-flex align-items-center">
                                <a href="#" class="btn btn-warning view-more mr-2">Tambah Di Wishlist</a>
                            <a href="{{ route('book-read')}}" class="btn btn-danger view-more mr-2">Baca Buku</a>
                            </div>
                            <div class="iq-social d-flex align-items-center">
                                <h5 class="mr-2">Share:</h5>
                                <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                    <li>
                                    <a href="#" class="avatar-40 rounded bg-white text-red  mr-2 facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                    <a href="#" class="avatar-40 rounded bg-white text-red  mr-2 twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                    <a href="#" class="avatar-40 rounded bg-white text-red mr-2 youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                                    </li>
                                    <li >
                                    <a href="#" class="avatar-40 rounded bg-white text-red  pinterest"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
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
                        <h2 class="mb-0">Buku Terkait</h2>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <a class="button btn btn-danger mr-2 button-icon rounded-small" target="_blank" href="#"><i class="ri-add-line m-0"></i> Cari Buku</a>
                        <a class="button btn btn-warning button-icon" target="_blank" href="#"><i class="ri-drag-move-2-line"></i>Selengkapnya</a>
                    </div>
                    </div>
                </div>
            </div>
            <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                <li class="col-md-3">
                    <div class="row align-items-center">
                    <div class="col-5">
                        <div class="position-relative image-overlap-shadow">
                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/01.jpg")}} alt=""></a>
                            <div class="view-book">
                                <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 pl-0">
                        <h6 class="mb-2">The Book of treasure Island find...</h6>
                        <p class="text-body">Penulis : Tara Zona</p>
                        <a href="#" tabindex="-1">Baca<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="row align-items-center">
                    <div class="col-5">
                        <div class="position-relative image-overlap-shadow">
                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/02.jpg")}} alt=""></a>
                            <div class="view-book">
                                <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 pl-0">
                        <h6 class="mb-2">Set For Lifr Being Scott Trench..</h6>
                        <p class="text-body">Penulis : Anna Rexia</p>
                        <a href="#"  tabindex="-1">Baca<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="row align-items-center">
                    <div class="col-5">
                        <div class="position-relative image-overlap-shadow">
                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/03.jpg")}} alt=""></a>
                            <div class="view-book">
                                <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 pl-0">
                        <h6 class="mb-2">A Birth and Evolutions of the Soul...</h6>
                        <p class="text-body">Penulis : Bill Emia</p>
                        <a href="#" tabindex="-1">Baca<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="row align-items-center">
                    <div class="col-5">
                        <div class="position-relative image-overlap-shadow">
                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/04.jpg")}} alt=""></a>
                            <div class="view-book">
                                <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 pl-0">
                        <h6 class="mb-2">The Nature of world Beautiful Places.</h6>
                        <p class="text-body">Penulis : Hal Appeno</p>
                        <a href="#" tabindex="-1">Baca<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="row align-items-center">
                    <div class="col-5">
                        <div class="position-relative image-overlap-shadow">
                            <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/05.jpg")}} alt=""></a>
                            <div class="view-book">
                                <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 pl-0">
                        <h6 class="mb-2">The mackup magazine find books..</h6>
                        <p class="text-body">Penulis : Zack Lee</p>
                        <a href="#" tabindex="-1">Baca<i class="ri-arrow-right-s-line"></i></a>
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
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">The Word Books Day..</h6>
                            <p class="font-size-13 line-height mb-1">Paul Molive</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="las la-share-square la-lg text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="las la-hand-holding-heart la-lg text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/02.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">The catcher in the Rye</h6>
                            <p class="font-size-13 line-height mb-1">Anna Sthesia</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="las la-share-square la-lg text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="las la-hand-holding-heart la-lg text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/03.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Little Black Book</h6>
                            <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="las la-share-square la-lg text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="las la-hand-holding-heart la-lg text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void(0);"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/04.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Take The Risk Book</h6>
                            <p class="font-size-13 line-height mb-1">Smith goal</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="las la-share-square la-lg text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="las la-hand-holding-heart la-lg text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void(0);"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/05.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">The Raze Night Book </h6>
                            <p class="font-size-13 line-height mb-1">Paige Turner</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="las la-share-square la-lg text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="las la-hand-holding-heart la-lg text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void(0);"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/trendy-books/06.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-white">View Book</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Find the Wave Book..</h6>
                            <p class="font-size-13 line-height mb-1">Barb Ackue</p>
                            <div class="d-block">
                                <span class="font-size-13 text-warning star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="iq-product-action">
                            <a href="javascript:void();"><i class="las la-share-square la-lg text-primary"></i></a>
                            <a href="javascript:void();" class="ml-2"><i class="las la-hand-holding-heart la-lg text-danger"></i></a>
                        </div>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12 pt-5 pb-5 bg-white-tuk">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <h2 class="mb-0">Buku Favorit</h2>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <a class="button btn btn-danger mr-2 button-icon rounded-small" target="_blank" href="#"><i class="ri-add-line m-0"></i> Cari Buku</a>
                        <a class="button btn btn-warning button-icon" target="_blank" href="#"><i class="ri-drag-move-2-line"></i>Selengkapnya</a>
                    </div>
                    </div>
                </div>
            </div>
            <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                <li class="col-md-4">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/favorite/01.jpg")}} class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                        <p class="mb-2">Penulis : Pedro Araez</p>
                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13 mb-2">
                            <span>Sedang Dibaca</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                                <span class="bg-danger" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="#">Baca<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/favorite/02.jpg")}} class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">Casey Christie night book into find...</h5>
                        <p class="mb-2">Penulis : Michael klock</p>
                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13 mb-2">
                            <span>Sedang Dibaca</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                                <span class="bg-danger" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="#">Baca<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/favorite/03.jpg")}} class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">The Secret to English Busy People..</h5>
                        <p class="mb-2">Penulis : Daniel Ace</p>
                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13 mb-2">
                            <span>Sedang Dibaca</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                                <span class="bg-info" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="#">Baca<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/favorite/04.jpg")}} class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">The adventures of Robins books...</h5>
                        <p class="mb-2">Penulis : Luka Afton</p>
                        <div class="d-flex justify-content-between align-items-center text-dark font-size-13 mb-2">
                            <span>Sedang Dibaca</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                                <span class="bg-success" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="#">Baca<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
