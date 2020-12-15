@extends('layouts.fe')
@section('content')
    <div class="col-lg-12 pt-5 pb-5">
        <div class="container">
            <div class="card-transparent card-block card-stretch card-height rounded">
                <div class="newrealease-contens">
                <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                    <li class="item">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/new_realeases/01.jpg")}} class="img-fluid w-100 rounded" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/new_realeases/02.jpg")}} class="img-fluid w-100 rounded" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/new_realeases/03.jpg")}} class="img-fluid w-100 rounded" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/new_realeases/04.jpg")}} class="img-fluid w-100 rounded" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/new_realeases/05.jpg")}} class="img-fluid w-100 rounded" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/new_realeases/06.jpg")}} class="img-fluid w-100 rounded" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/new_realeases/07.jpg")}} class="img-fluid w-100 rounded" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/new_realeases/08.jpg")}} class="img-fluid w-100 rounded" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="javascript:void(0);">
                            <img src={{asset("public/assets/images/book-image/new_realeases/09.jpg")}} class="img-fluid w-100 rounded" alt="">
                        </a>
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
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/01.jpg" alt=""></a>
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
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/02.jpg" alt=""></a>
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
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/03.jpg" alt=""></a>
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
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/04.jpg" alt=""></a>
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
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/05.jpg" alt=""></a>
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
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/06.jpg" alt=""></a>
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
                                    <a href="javascript:void(0);"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/07.jpg" alt=""></a>
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
                                    <a href="javascript:void(0);"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/08.jpg" alt=""></a>
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
                                    <a href="javascript:void(0);"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/09.jpg" alt=""></a>
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
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/10.jpg" alt=""></a>
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
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/11.jpg" alt=""></a>
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
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/book-image/browse-books/12.jpg" alt=""></a>
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
                        <h2 class="mb-0">Deretan Penulis</h2>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <a class="button btn btn-danger mr-2 button-icon rounded-small" target="_blank" href="{{ route('book-search') }}"><i class="ri-add-line m-0"></i> Cari Penulis</a>
                        <a class="button btn btn-warning button-icon" target="_blank" href="{{ route('book-search') }}"><i class="ri-drag-move-2-line"></i>Selengkapnya</a>
                    </div>
                    </div>
                </div>
            </div>
            <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/01.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Brandon Guidelines</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/02.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Hugh Millie-Yate</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">432</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/03.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Nathaneal Down</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">5471</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/04.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Thomas R. Toe</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">8764</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/05.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Druid Wensleydale</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">8987</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/06.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Natalya Undgrowth</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/07.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Desmond Eagle</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">4324</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/08.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Lurch Schpellchek</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">012</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/09.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Natalya Undgrowth</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/10.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Natalya Undgrowth</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/11.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Natalya Undgrowth</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                </div>
                </li>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                <div class="icon iq-icon-box mr-3">
                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded" src="public/assets/images/user/01.jpg" alt=""></a>
                </div>
                <div class="mt-1">
                    <h6>Natalya Undgrowth</h6>
                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
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
                        <h2 class="mb-0">Kategori Buku Terbaru</h2>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <a class="button btn btn-danger mr-2 button-icon rounded-small" target="_blank" href="{{ route('book-search') }}"><i class="ri-add-line m-0"></i> Cari Kategori</a>
                        <a class="button btn btn-warning button-icon" target="_blank" href="{{ route('book-search') }}"><i class="ri-drag-move-2-line"></i>Selengkapnya</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-5 pr-xl-0">
                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="public/assets/images/page-img/featured-book.png" alt=""></a>
                </div>
                <div class="col-sm-7 mt-3 mt-sm-0">
                <h4 class="mb-2">Casey Christie night book into find...</h4>
                <p class="mb-2">Author: Gheg origin</p>
                <div class="mb-2 d-block">
                    <span class="font-size-12 text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>
                </div>
                <span class="mb-3 d-block">Lorem Ipsum is simply dummy test in find a of the printing and typeset ing industry into end.</span>
                <button type="submit" class="btn btn-primary learn-more">Learn More</button>
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
                        <h2 class="mb-0">Deretan Paling Banyak Dibaca</h2>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <a class="button btn btn-danger mr-2 button-icon rounded-small" target="_blank" href="{{ route('book-search') }}"><i class="ri-add-line m-0"></i> Cari Buku</a>
                        <a class="button btn btn-warning button-icon" target="_blank" href="{{ route('book-search') }}"><i class="ri-drag-move-2-line"></i>Selengkapnya</a>
                    </div>
                    </div>
                </div>
            </div>
            <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                <li class="col-md-4">
                <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void();">
                            <img src="public/assets/images/book-image/favorite/01.jpg" class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                        <p class="mb-2">Author : Pedro Araez</p>
                        <div class="d-flex justify-content-between align-items-center font-size-13">
                            <span>Reading</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                            <span class="bg-primary" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="{{ route('book-search') }}">Read Now<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
                </li>
                <li class="col-md-4">
                <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void();">
                            <img src="public/assets/images/book-image/favorite/02.jpg" class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">Casey Christie night book into find...</h5>
                        <p class="mb-2">Author : Michael klock</p>
                        <div class="d-flex justify-content-between align-items-center font-size-13">
                            <span>Reading</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                            <span class="bg-danger" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="{{ route('book-search') }}">Read Now<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
                </li>
                <li class="col-md-4">
                <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void();">
                            <img src="public/assets/images/book-image/favorite/03.jpg" class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">The Secret to English Busy People..</h5>
                        <p class="mb-2">Author : Daniel Ace</p>
                        <div class="d-flex justify-content-between align-items-center font-size-13">
                            <span>Reading</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                            <span class="bg-info" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="{{ route('book-search') }}">Read Now<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
                </li>
                <li class="col-md-4">
                <div class="d-flex align-items-center">
                    <div class="col-5 p-0 position-relative">
                        <a href="javascript:void();">
                            <img src="public/assets/images/book-image/favorite/04.jpg" class="img-fluid rounded w-100" alt="">
                        </a>
                    </div>
                    <div class="col-7">
                        <h5 class="mb-2">The adventures of Robins books...</h5>
                        <p class="mb-2">Author : Luka Afton</p>
                        <div class="d-flex justify-content-between align-items-center font-size-13">
                            <span>Reading</span>
                            <span class="mr-4">78%</span>
                        </div>
                        <div class="iq-progress-bar-linear d-inline-block w-100 mb-3">
                            <div class="iq-progress-bar">
                            <span class="bg-success" data-percent="78"></span>
                            </div>
                        </div>
                        <a href="{{ route('book-search') }}">Read Now<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
