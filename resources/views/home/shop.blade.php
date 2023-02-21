@extends('home.layout.master')
@section('content')
    <!-- Main Start -->
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <main class="main">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="banner">
                <img class="bg-img bg-top" src="{{ asset('frontendAsset') }}/assets/images/inner-page/banner-p.jpg"
                    alt="banner">

                <div class="container-lg">
                    <div class="breadcrumb-box">
                        <div class="heading-box">
                            <h1>Shop</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current"><a href="shop-left-sidebar.html">Shop</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Shop Section Start -->
        <section class="shop-page">
            <div class="container-lg">
                <div class="row gy-4 g-lg-3 g-xxl-4">
                    <div class="col-4 col-xl-3 sidebar-controll sidebar-responsive">
                        <div class="sidebar-inner sticky">
                            <div class="back-box d-flex d-lg-none">
                                <span>Back</span>
                                <span><i data-feather="x"></i></span>
                            </div>

                            <div class="search-box reverse">
                                <input class="form-control" type="search" placeholder="Search here...">
                                <span class="search">
                                    <i data-feather="search"></i>
                                </span>
                            </div>

                            <div class="row gy-3 gx-0 g-lg-4">
                                <div class="col-12">
                                    <div class="sidebar-box">
                                        <div class="title-box4">
                                            <h4 class="heading">Applied Filters <span class="bg-theme-blue"></span></h4>
                                        </div>
                                        <ul class="tags">
                                            <li>
                                                <a href="javascript:void(0)"> T-Shirt <i data-feather="x"></i> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> Handbags <i data-feather="x"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> Trends <i data-feather="x"></i> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> Fashion <i data-feather="x"></i> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> Designer <i data-feather="x"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="sidebar-box">
                                        <div class="title-box4">
                                            <h4 class="heading">Filter <span class="bg-theme-blue"></span></h4>
                                        </div>

                                        <div class="range-slider">
                                            <div class="price-input">
                                                <div class="field">
                                                    <span>Min <strong class="theme-color"> $</strong></span>
                                                    <input class="form-control input-min" type="number" value="2500">
                                                </div>
                                                <div class="separator">-</div>
                                                <div class="field">
                                                    <span>Max <strong class="theme-color"> $</strong></span>
                                                    <input class="form-control input-max" type="number" value="7500">
                                                </div>
                                            </div>
                                            <div class="slider">
                                                <div class="progress"></div>
                                            </div>
                                            <div class="range-input">
                                                <input type="range" class="range-min" min="0" max="10000"
                                                    value="2500" step="100">
                                                <input type="range" class="range-max" min="0" max="10000"
                                                    value="7500" step="100">
                                            </div>
                                        </div>

                                        <div class="filter-option">
                                            <h5>Color</h5>

                                            <div class="filter-content">
                                                <ul class="filter-color color-filter-check">
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox" checked="">
                                                            <span class="checkbox__checkmark bg-theme-pink"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox">
                                                            <span class="checkbox__checkmark bg-theme-yellow"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox">
                                                            <span class="checkbox__checkmark bg-theme-orange"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox">
                                                            <span class="checkbox__checkmark bg-theme-blue"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="filter-option">
                                            <h5>Brands</h5>

                                            <div class="filter-content">
                                                <ul class="filter-check">
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox" checked="">
                                                            <span class="checkbox__checkmark"></span>
                                                            <span class="checkbox__body">Zera <span> 25</span></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox">
                                                            <span class="checkbox__checkmark"></span>
                                                            <span class="checkbox__body">Allen Solly <span>15</span></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox">
                                                            <span class="checkbox__checkmark"></span>
                                                            <span class="checkbox__body">Louis Philippe Sport
                                                                <span>8</span></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox">
                                                            <span class="checkbox__checkmark"></span>
                                                            <span class="checkbox__body">H&M <span>25</span></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox">
                                                            <span class="checkbox__checkmark"></span>
                                                            <span class="checkbox__body">Fila <span>12</span></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox">
                                                            <span class="checkbox__checkmark"></span>
                                                            <span class="checkbox__body">Puma <span>32</span></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="checkboxes style-1">
                                                            <input type="checkbox">
                                                            <span class="checkbox__checkmark"></span>
                                                            <span class="checkbox__body">Nike <span>14</span></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sidebar-box">
                                        <div class="title-box4">
                                            <h4 class="heading">Categories <span class="bg-theme-blue"></span></h4>
                                        </div>
                                        <ul class="catagories-side">
                                            @foreach($category as $cat)
{{--                                            <li>--}}
{{--                                                <a href="shop-left-sidebar.html">--}}
{{--                                                    <span>--}}
{{--                                                        <i data-feather="arrow-right"></i>--}}
{{--                                                        {{$cat->name}}--}}
{{--                                                    </span>--}}
{{--                                                    <span class="notification">32</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}

                                                <div class="dropdown"  class="catagories-side">
                                                    <span class=""  data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i data-feather="arrow-right"></i>
                                                        {{$cat->name}}
                                                    </span>
                                                    <ul class="dropdown-menu">
                                                        @foreach($subCat as $subCats)
                                                        <li><span class="dropdown" value="{{$subCats->id}}" >{{$subCats->name}}</span></li>
                                                        @endforeach
                                                    </ul>
                                                    </span>
                                                    <span class="notification">32</span>
                                                    </a>
                                                </div>

                                            @endforeach
{{--                                            <li>--}}
{{--                                                <a href="shop-left-sidebar.html">--}}
{{--                                                    <span>--}}
{{--                                                        <i data-feather="arrow-right"></i>--}}
{{--                                                        Trends--}}
{{--                                                    </span>--}}
{{--                                                    <span class="notification">32</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <a href="shop-left-sidebar.html">--}}
{{--                                                    <span>--}}
{{--                                                        <i data-feather="arrow-right"></i>--}}
{{--                                                        Designer--}}
{{--                                                    </span>--}}
{{--                                                    <span class="notification">5</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <a href="shop-left-sidebar.html">--}}
{{--                                                    <span>--}}
{{--                                                        <i data-feather="arrow-right"></i>--}}
{{--                                                        Swimwear--}}
{{--                                                    </span>--}}
{{--                                                    <span class="notification">15</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
                                                <a href="shop-left-sidebar.html">
                                                    <span>
                                                        <i data-feather="arrow-right"></i>
                                                        Handbags
                                                    </span>
                                                    <span class="notification">6</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sidebar-box">
                                        <div class="title-box4">
                                            <h4 class="heading">Most Popular <span class="bg-theme-blue"></span></h4>
                                        </div>
                                        <div class="new-wrap">
                                            <a href="product.html" class="new-product">
                                                <div class="img-box">
                                                    <img src="{{ asset('frontendAsset') }}/assets/images/fashion/product/front/2.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="content-box">
                                                    <p>Regular Fit</p>
                                                    <h5>Slim Fit Plastic Coat</h5>
                                                    <span>$150.00</span> <del>$250.00</del>
                                                </div>
                                            </a>

                                            <a href="product.html" class="new-product">
                                                <div class="img-box">
                                                    <img src="{{ asset('frontendAsset') }}/assets/images/fashion/product/front/6.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="content-box">
                                                    <p>Regular Fit</p>
                                                    <h5>Slim Fit Plastic Coat</h5>
                                                    <span>$150.00</span> <del>$250.00</del>
                                                </div>
                                            </a>

                                            <a href="product.html" class="new-product">
                                                <div class="img-box">
                                                    <img src="{{ asset('frontendAsset') }}/assets/images/fashion/product/front/8.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="content-box">
                                                    <p>Regular Fit</p>
                                                    <h5>Slim Fit Plastic Coat</h5>
                                                    <span>$150.00</span> <del>$250.00</del>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sidebar-box">
                                        <div class="title-box4">
                                            <h4 class="heading">Offers<span class="bg-theme-blue"></span></h4>
                                        </div>

                                        <div class="banner-img">
                                            <img class="bg-img"
                                                src="{{ asset('frontendAsset') }}/assets/images/fashion/banner/banner3.jpg"
                                                alt="banner">

                                            <div class="sale-card">
                                                <div class="sale-card-wrap">
                                                    <div class="offer">
                                                        <span> Summer Sale </span>
                                                        <h5>
                                                            70 <span><span class="percent">%</span> <span class="off">
                                                                    OFF</span> </span>
                                                        </h5>
                                                    </div>
                                                    <a href="shop-categories.html" class="shop-btn bg-theme-sun">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <div class="row gy-5 gx-0">
                            <div class="col-12 order-2 order-lg-1">
                                <div class="round-wrap-content p-0 overflow-hidden">
                                    <!-- Banner Start -->
                                    <div class="sub-banner">
                                        <img class="bg-img img-fluid"
                                            src="{{ asset('frontendAsset') }}/assets/images/inner-page/banner2.jpg"
                                            alt="banner">
                                        <div class="heading-box">
                                            <div class="title-box4">
                                                <h2 class="heading">New Collection <span class="bg-theme-blue"></span>
                                                </h2>
                                                <h2 class="heading">Summer Sale <span class="bg-theme-blue"></span></h2>
                                            </div>
                                            <h4>Sale Offer</h4>
                                            <p>A-line short sleeves above the knee red elastance peplum detail wool pink
                                                lining statement sophistication jersey tweed white.</p>
                                            <a href="shop-left-sidebar.html" class="btn-solid btn-sm mb-line">Shop Now <i
                                                    class="arrow"></i> </a>
                                        </div>
                                    </div>
                                    <!-- Banner End -->
                                </div>
                            </div>

                            <div class="col-12 order-1 order-lg-2">
                                <div class="shop-product">
                                    <div class="top-header-wrap">
                                        <button class="filter-btn btn-solid btn-sm mb-line d-flex d-lg-none">Filter <i
                                                class="arrow"></i></button>

                                        <div class="grid-option-wrap">
                                            <div class="select-options">
                                                <div class="select-menu">
                                                    <div class="dropdown select-dropdown">
                                                        <button class="select-showval" id="sortProduct"><span>24 Page Per
                                                                View</span> <i data-feather="chevron-down"></i></button>
                                                        <ul class="onhover-show-div select-vallist">
                                                            <li class="select-list">Alphabetical A-Z</li>
                                                            <li class="select-list">Alphabetical Z-A</li>
                                                            <li class="select-list">$ High To Low</li>
                                                            <li class="select-list">Date, Old To New</li>
                                                            <li class="select-list">Date, New To Old</li>
                                                        </ul>
                                                    </div>
                                                    <div class="dropdown select-dropdown small-dropdown">
                                                        <button class="select-showval" id="featureProduct"><span>Select
                                                                Feature</span> <i data-feather="chevron-down"></i></button>
                                                        <ul class="onhover-show-div select-vallist">
                                                            <li class="select-list">Jeans</li>
                                                            <li class="select-list">T-shirt</li>
                                                            <li class="select-list">Shirt</li>
                                                            <li class="select-list">Jacket</li>
                                                            <li class="select-list">Hoodie</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="filter-option-grid d-none d-sm-flex">
                                                <li class="nav-item d-none d-sm-flex">
                                                    <button class="nav-link" data-grid="2">
                                                        <svg>
                                                            <use
                                                                xlink:href="{{ asset('frontendAsset') }}/assets/icons/svg/1.svg#grid-2">
                                                            </use>
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li class="nav-item d-none d-sm-flex">
                                                    <button class="nav-link" data-grid="3">
                                                        <svg>
                                                            <use
                                                                xlink:href="{{ asset('frontendAsset') }}/assets/icons/svg/1.svg#grid-3">
                                                            </use>
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li class="nav-item d-none d-xl-flex">
                                                    <button class="nav-link active" data-grid="4">
                                                        <svg>
                                                            <use
                                                                xlink:href="{{ asset('frontendAsset') }}/assets/icons/svg/1.svg#grid-4">
                                                            </use>
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li class="nav-item d-none d-sm-flex">
                                                    <button class="nav-link" data-grid="list">
                                                        <svg>
                                                            <use
                                                                xlink:href="{{ asset('frontendAsset') }}/assets/icons/svg/1.svg#grid-list">
                                                            </use>
                                                        </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product-tab-content">
                                        <div
                                            class="view-option row g-3 g-xl-4 ratio_asos row-cols-2 row-cols-sm-3 row-cols-xl-4 grid-section">
                                            @foreach ($products as $product)
                                                <div>
                                                    <div class="product-card">
                                                        <div class="img-box">
                                                            <!-- Thumbnail -->
                                                            <ul class="thumbnail-img">
                                                                <li class="active thumb"><img
                                                                        src="{{ asset($product->image_one) }}"
                                                                        alt="thumbnail"></li>
                                                                <li class="thumb"><img
                                                                        src="{{ asset($product->image_two) }}"
                                                                        alt="thumbnail"></li>
                                                                <li class="thumb"><img
                                                                        src="{{ asset($product->image_three) }}"
                                                                        alt="thumbnail"></li>
                                                                <li class="thumb"><img
                                                                        src="{{ asset($product->image_one) }}"
                                                                        alt="thumbnail"></li>
                                                            </ul>

                                                            <a href="{{ route('product',['id'=>$product->id]) }}" class="primary-img"><img
                                                                    class="img-fluid bg-img"
                                                                    src="{{ asset($product->image_one) }}"
                                                                    alt="product"> </a>

                                                            <!-- Rating -->
                                                            <div class="rating">
                                                                <span>4.5 <i data-feather="star"></i> </span>
                                                                <span>185</span>
                                                            </div>

                                                            <!-- Option -->
                                                            <ul class="option-wrap">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                                        <i data-feather="heart"></i>
                                                                    </a>
                                                                </li>
{{--                                                                <li>--}}
{{--                                                                    <a href="{{ route('compare') }}"><i--}}
{{--                                                                            data-feather="repeat"></i></a>--}}
{{--                                                                </li>--}}
                                                                <li>
                                                                    <a href="{{ route('all.details', ['id' => $product->id]) }}"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#viewModal{{$product->id}}">
                                                                        <i data-feather="eye"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=" {{route('bag',['id'=>$product->id])}} " class="addtocart-btn"> <i
                                                                            data-feather="shopping-bag"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- Content Box -->
                                                        <div class="content-box">
                                                            <a href="product.html">
                                                                <p>Chopard</p>
                                                                <h5>{{ $product->name }}</h5>
                                                                <span>{{ $product->price }} TK </span>
                                                                <del>{{ $product->old_price }}Tk </del>
                                                                <p class="details truncate-3">
                                                                    Wardrobe stylish fitted long sleeves pleats texture
                                                                    fabric mini neckline cobalt blue. Best seller signature
                                                                    waist cut pockets cotton-mix navy blue tailoring elegant
                                                                    cashmere.Tops shift shape rich fabric relaxed fitting
                                                                    size true black gold zip virgin wool.
                                                                </p>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                class="btn btn-solid btn-sm mb-line addtocart-btn">Add To
                                                                Cart <i class="arrow"></i> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="pagination-wrap mt-4 justify-content-center">
                                        <ul class="pagination">
                                            <li>
                                                <a href="javascript:void(0)" class="prev"> &laquo;</a>
                                            </li>
                                            <li><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)" class="active">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)" class="next"> &raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop Section End -->
    </main>
    <!-- Main End -->



    {{--    product modal --}}
    @foreach ($products as $product)
        <div class="modal view-product fade" id="viewModal{{$product->id}}" tabindex="-1" aria-labelledby="viewModal{{$product->id}}"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <span class="close-modal d-none d-md-block" data-bs-toggle="modal" data-bs-target="#viewModal{{$product->id}}"><i
                                data-feather="x"></i></span>
                        <div class="row gy-4 g-md-0">
                            <div class="col-md-7">
                                <div class="slider-box">
                                    <span class="close-modal d-md-none" data-bs-toggle="modal"
                                        data-bs-target="#viewModal{{$product->id}}"><i data-feather="x"></i></span>
                                    <div class="row g-2">
                                        <div class="col-2">
                                            <div class="thumbnail-box">
                                                <div class="swiper thumbnail-img-box thumbnailSlider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset($product->image_one) }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset($product->image_two) }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset($product->image_three) }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-10 ratio_square">
                                            <div class="swiper mainslider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img class="bg-img"
                                                            src="{{ asset($product->image_one) }}"
                                                            alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="bg-img"
                                                            src="{{ asset($product->image_two) }}"
                                                            alt="img">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="bg-img"
                                                            src="{{ asset($product->image_three) }}"
                                                            alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="product-detail-box">
                                    <div class="product-option">
                                        <h4>{{ $product->name }}</h4>
                                        <div class="option price">
                                            <h5>Price</h5>
                                            <span> {{ $product->price }} tk</span> <del>{{ $product->old_price }} tk</del>
                                        </div>
                                        <div class="option">
                                            <h5>Product Description</h5>
                                            <p class="content-color">{{$product->details}}</p>
                                        </div>
                                        <div class="option">
                                            <h5>Your Brand Color:</h5>
                                            <ul class="color-list">
                                                <li class="bg-theme-p-1 active"></li>
                                                <li class="bg-theme-p-2"></li>
                                                <li class="bg-theme-p-3"></li>
                                            </ul>
                                        </div>
                                        <div class="option">
                                            <h5>Size:</h5>
                                            <ul class="size-list">
                                                <li class="active">S</li>
                                                <li>M</li>
                                                <li>L</li>
                                                <li>XL</li>
                                            </ul>
                                        </div>
                                        <div class="option">
                                            <h5>Quantity:</h5>
                                            <div class="plus-minus">
                                                <i class="sub" data-feather="minus"></i>
                                                <input type="number" value="1" min="1" max="10">
                                                <i class="add" data-feather="plus"></i>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#viewModal" class="btn-solid btn-sm addtocart-btn">Add To
                                                Cart </a>
                                            <a href="product.html" class="btn-outline btn-sm">View Full</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
