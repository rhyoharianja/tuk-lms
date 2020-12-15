@extends('layouts.fe')
@section('content')
    <div class="col-lg-12 pt-5 pb-5">
        <div class="card-transparent">
            <div class="d-block text-center">
                <h2 class="mb-3">Form Pencarian Buku</h2>
                <div class="w-100 iq-search-filter">
                    <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                        <li class="search-menu-opt">
                        <div class="iq-dropdown">
                            <div class="form-group mb-0">
                                <select class="form-control form-search-control border-0" id="exampleFormControlSelect1">
                                    <option selected="">Semua</option>
                                    <option>A Books</option>
                                    <option>the Sun</option>
                                    <option>Harsh book</option>
                                    <option>People book</option>
                                    <option>the Fog</option>
                                </select>
                            </div>
                        </div>
                        </li>
                        <li class="search-menu-opt">
                        <div class="iq-dropdown">
                            <div class="form-group mb-0">
                                <select class="form-control form-search-control border-0" id="exampleFormControlSelect2">
                                    <option selected="">Tipe</option>
                                    <option>General</option>
                                    <option>History</option>
                                    <option>Horror</option>
                                    <option>Fantasy</option>
                                    <option>Literary</option>
                                    <option>Manga</option>
                                </select>
                            </div>
                        </div>
                        </li>
                        <li class="search-menu-opt">
                        <div class="iq-dropdown">
                            <div class="form-group mb-0">
                                <select class="form-control form-search-control border-0" id="exampleFormControlSelect3">
                                    <option selected="">Tahun</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </select>
                            </div>
                        </div>
                        </li>
                        <li class="search-menu-opt">
                        <div class="iq-dropdown">
                            <div class="form-group mb-0">
                                <select class="form-control form-search-control border-0" id="exampleFormControlSelect4">
                                    <option selected="">Penulis</option>
                                    <option>Milesiy Yor</option>
                                    <option>Ira Membrit</option>
                                    <option>Anna Mull</option>
                                    <option>John Smith</option>
                                    <option>David King</option>
                                    <option>Kusti Franti</option>
                                </select>
                            </div>
                        </div>
                        </li>
                        <li class="search-menu-opt">
                        <div class="iq-search-bar search-book d-flex align-items-center">
                            <form action="#" class="searchbox">
                                <input type="text" class="text search-input" placeholder="Ketik Kata Kunci">
                            </form>
                            <button type="submit" class="btn btn-danger bt-search-data ml-2">Cari Buku</button>
                        </div>
                        </li>
                    </ul>
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
                        <h2 class="mb-0">Buku Terpopuler</h2>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <a class="button btn btn-danger mr-2 button-icon rounded-small" target="_blank" href="{{ route('book-search') }}"><i class="ri-add-line m-0"></i> Cari Buku</a>
                        <a class="button btn btn-warning button-icon" target="_blank" href="{{ route('book-search') }}"><i class="ri-drag-move-2-line"></i>Selengkapnya</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/01.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">Reading on the World</h6>
                                    <p class="font-size-13 line-height mb-1">Jhone Steben</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/02.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">The Catcher in the Rye</h6>
                                    <p class="font-size-13 line-height mb-1">Fritz Wold</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/03.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">Little Black Book</h6>
                                    <p class="font-size-13 line-height mb-1">John Klok</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/04.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">Take On The Risk</h6>
                                    <p class="font-size-13 line-height mb-1">George Strong</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/05.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">Absteact On Background</h6>
                                    <p class="font-size-13 line-height mb-1">Ichae Semos</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/06.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <h6 class="mb-1">Find The Wave Book</h6>
                                        <p class="font-size-13 line-height mb-1">Fidel Martin</p>
                                        <div class="d-block line-height">
                                            <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void(0);"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/07.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">See the More Story</h6>
                                    <p class="font-size-13 line-height mb-1">Jules Boutin</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void(0);"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/08.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">The Wikde Book</h6>
                                    <p class="font-size-13 line-height mb-1">Kusti Franti</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent mb-lg-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void(0);"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/09.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">Conversion Erik Routley</h6>
                                    <p class="font-size-13 line-height mb-1">Argele Intili</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="iq-product-action">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent mb-md-0 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/10.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">The Leo Dominica</h6>
                                    <p class="font-size-13 line-height mb-1">Henry Jurk</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent mb-sm-0 mb-md-0 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/11.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">By The Editbeth Jat</h6>
                                    <p class="font-size-13 line-height mb-1">David King</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <div class="card card-block card-stretch card-height browse-bookcontent mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('public/assets/images/book-image/browse-books/12.jpg')}}" alt=""></a>
                                <div class="view-book">
                                    <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="mb-2">
                                    <h6 class="mb-1">The Crucial Decade</h6>
                                    <p class="font-size-13 line-height mb-1">Attilio Marzi</p>
                                    <div class="d-block line-height">
                                        <span class="font-size-11 text-warning star">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 pt-5 pb-5">
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
            <ul id="similar-slider" class="list-inline p-0 mb-0 row">
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/01.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">The Raze Night Book</h6>
                            <p class="font-size-13 line-height mb-1">Tara Zona</p>
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
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/02.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Set For Life Book..</h6>
                            <p class="font-size-13 line-height mb-1">Anna Rexia</p>
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
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/03.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Through the Breaking</h6>
                            <p class="font-size-13 line-height mb-1">Bill Emia</p>
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
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/04.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Wild Beautiful Places</h6>
                            <p class="font-size-13 line-height mb-1">Hal Appeno</p>
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
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/05.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">The Mockup Magazine</h6>
                            <p class="font-size-13 line-height mb-1">Zack Lee</p>
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
                        <a href="javascript:void();"><img class="img-fluid rounded w-100" src={{asset("public/assets/images/book-image/similar-books/06.jpg")}} alt=""></a>
                        <div class="view-book">
                            <a href="{{ route('book-detail') }}" class="btn btn-sm btn-danger">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">
                            <h6 class="mb-1">Every Book Of travel</h6>
                            <p class="font-size-13 line-height mb-1">Moe Fugga</p>
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
