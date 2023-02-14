@extends('home.layout.master')
@section('content')
    <main class="main">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="banner">
                <img class="bg-img bg-top" src="{{asset('frontendAsset')}}/assets/images/inner-page/banner-p.jpg" alt="banner">

                <div class="container-lg">
                    <div class="breadcrumb-box">
                        <div class="heading-box">
                            <h1>Compare</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li><a href="shop-left-sidebar.html">Shop</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current"><a href="compare.html">Compare</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Compare Section Start -->
        <section>
            <div class="container-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="comparemodal-body">
                            <div class="table-wrapper table-responsive ratio_asos">
                                <table class="table table-compare">
                                    <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th class="remove">Remove</th>
                                        <th class="remove">Remove</th>
                                        <th class="remove">Remove</th>
                                        <th class="remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="table-product-details">
                                        <td></td>

                                        <td>
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a class="w-100" href="javascript:void(0)">
                                                        <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/1.jpg" class="img-fluid bg-img" alt="">
                                                    </a>
                                                </div>

                                                <div class="product-details">
                                                    <div class="product-title">
                                                        <a href="javascript:void(0)">
                                                            <h6 class="truncate">Standard-fit sleeveless midi dress</h6>
                                                        </a>
                                                    </div>
                                                    <span class="font-light">$89.99</span> <del class="theme-color">$100.00</del>
                                                    <p class="content-color truncate-2">
                                                        Stretch lining hemline above knee burgundy satin finish concealed zip small buttons rayon. Leather detail shoulder contrasting color contour stunning silhouette working
                                                        peplum.
                                                    </p>
                                                    <a class="theme-color" href="product.html">More Details...</a>

                                                    <a href="javascript:void(0)" class="addtocart-btn btn-solid btn-sm">Add To Cart<i class="arrow"></i></a>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a class="w-100" href="javascript:void(0)">
                                                        <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/2.jpg" class="img-fluid bg-img" alt="">
                                                    </a>
                                                </div>

                                                <div class="product-details">
                                                    <div class="product-title">
                                                        <a href="javascript:void(0)">
                                                            <h6 class="truncate">Casual Indigo Shirt</h6>
                                                        </a>
                                                    </div>
                                                    <span class="font-light">$100.99</span> <del class="theme-color">$150.00</del>
                                                    <p class="content-color truncate-2">
                                                        Wardrobe stylish fitted long sleeves pleats texture fabric mini neckline cobalt blue. Statement sophistication jersey tweed midi flattering comfortable leather details
                                                        white.
                                                    </p>
                                                    <a class="theme-color" href="product.html">More Details...</a>

                                                    <a href="javascript:void(0)" class="addtocart-btn btn-solid btn-sm">Add To Cart<i class="arrow"></i></a>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a class="w-100" href="javascript:void(0)">
                                                        <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/3.jpg" class="img-fluid bg-img" alt="">
                                                    </a>
                                                </div>

                                                <div class="product-details">
                                                    <div class="product-title">
                                                        <a href="javascript:void(0)">
                                                            <h6 class="truncate">Montes lorenzo's A Cosmopolite</h6>
                                                        </a>
                                                    </div>
                                                    <span class="font-light">$120.00</span> <del class="theme-color">$140.00</del>
                                                    <p class="content-color truncate-2">
                                                        Rock wolf double washed heavy cotton mix made in white iron do not wash stamp. Crew neckline modal animal print regular fit lace embellishment seam detail pretty
                                                        turquoise.
                                                    </p>
                                                    <a class="theme-color" href="product.html">More Details...</a>

                                                    <a href="javascript:void(0)" class="addtocart-btn btn-solid btn-sm">Add To Cart<i class="arrow"></i></a>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="product-box">
                                                <div class="product-image">
                                                    <a class="w-100" href="javascript:void(0)">
                                                        <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/4.jpg" class="img-fluid bg-img" alt="">
                                                    </a>
                                                </div>

                                                <div class="product-details">
                                                    <div class="product-title">
                                                        <a href="javascript:void(0)">
                                                            <h6 class="truncate">Women’s long sleeve Jacket</h6>
                                                        </a>
                                                    </div>
                                                    <span class="font-light">$150.00</span> <del class="theme-color">$200.00</del>
                                                    <p class="content-color truncate-2">Khaki cotton blend military jacket flattering fit mock horn buttons and patch pockets showerproof black lightgrey.</p>
                                                    <a class="theme-color" href="product.html">More Details...</a>

                                                    <a href="javascript:void(0)" class="addtocart-btn btn-solid btn-sm">Add To Cart<i class="arrow"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Customer Rating</td>
                                        <td>
                                            <div class="d-flex align-items-center my0">
                                                <ul class="rating">
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li><i data-feather="star"></i></li>
                                                    <li><i data-feather="star"></i></li>
                                                </ul>

                                                <span class="font-light ms-2">(22 reviews)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center my0">
                                                <ul class="rating">
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li><i data-feather="star"></i></li>
                                                </ul>

                                                <span class="font-light ms-2">(26 reviews)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center my0">
                                                <ul class="rating">
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li><i data-feather="star"></i></li>
                                                </ul>

                                                <span class="font-light ms-2">(24 reviews)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center my0">
                                                <ul class="rating">
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li class="fill"><i data-feather="star"></i></li>
                                                    <li><i data-feather="star"></i></li>
                                                    <li><i data-feather="star"></i></li>
                                                </ul>

                                                <span class="font-light ms-2">(18 reviews)</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>BRAND</td>
                                        <td>Zara</td>
                                        <td>Allen Solly</td>
                                        <td>H&M</td>
                                        <td>Nike</td>
                                    </tr>

                                    <tr>
                                        <td>Generic Name</td>
                                        <td>T-Shirt</td>
                                        <td>Shirt</td>
                                        <td>Jackets</td>
                                        <td>Blazers</td>
                                    </tr>

                                    <tr>
                                        <td>Department</td>
                                        <td>Men</td>
                                        <td>Men</td>
                                        <td>Men</td>
                                        <td>Men</td>
                                    </tr>

                                    <tr>
                                        <td>Manufacturer</td>
                                        <td>PAGE INDUSTRIES LIMITED</td>
                                        <td>PAGE INDUSTRIES LIMITED</td>
                                        <td>Serenata Lifestyle Pvt. Ltd.</td>
                                        <td>Serenata Lifestyle Pvt. Ltd.</td>
                                    </tr>

                                    <tr>
                                        <td>color</td>
                                        <td>Black, Yellow, Marron</td>
                                        <td>Blue, Cream, Black</td>
                                        <td>Military Color</td>
                                        <td>Black, Gold</td>
                                    </tr>

                                    <tr>
                                        <td>Date First Available</td>
                                        <td>28 July 2015</td>
                                        <td>25 March 2022</td>
                                        <td>25 February 2017</td>
                                        <td>27 April 2021</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Compare Section End -->
    </main>
@endsection
