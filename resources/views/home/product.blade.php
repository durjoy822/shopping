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
                            <h1>Product</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current"><a href="product.html">Product</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Product Section Start -->
        <section class="product-page">
            <div class="container-lg">
                <div class="row g-3 g-xl-4 view-product">
                    <div class="col-md-7">
                        <div class="slider-box sticky off-50 position-sticky">
                            <div class="row g-2">
                                <div class="col-2">
                                    <div class="thumbnail-box">
                                        <div class="swiper thumbnail-img-box thumbnailSlider2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="img">
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-1.jpg" alt="img">
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-2.jpg" alt="img">
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-3.jpg" alt="img">
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-1.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-10 ratio_square">
                                    <div class="swiper mainslider2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="img">
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-1.jpg" alt="img">
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-2.jpg" alt="img">
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-3.jpg" alt="img">
                                            </div>

                                            <div class="swiper-slide">
                                                <img class="bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="img">
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
                                <h2>Women’s long sleeve shirt</h2>
                                <div class="option rating-option">
                                    <ul class="rating p-0">
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i class="fill" data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span>120 Rating</span>
                                </div>

                                <div class="option price"><span> $200.00 </span> <del>$300.00</del></div>

                                <div class="option">
                                    <p class="content-color">
                                        100% Cotton Indigo shirt with western yoke. Apt for casual outings, this shirt will keep you comfortable and stylish all day long.Indigo shirt with western yoke. Apt for casual
                                        outings
                                    </p>
                                </div>

                                <div class="option-side">
                                    <div class="option">
                                        <div class="title-box4">
                                            <h4 class="heading">Your Brand Color:<span class="bg-theme-blue"></span></h4>
                                        </div>
                                        <ul class="filter-color">
                                            <li>
                                                <div class="color-box bg-theme-pink"></div>
                                            </li>
                                            <li class="active">
                                                <div class="color-box bg-theme-yellow"></div>
                                            </li>
                                            <li>
                                                <div class="color-box bg-theme-orange"></div>
                                            </li>
                                            <li>
                                                <div class="color-box bg-theme-blue"></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="option">
                                        <div class="title-box4">
                                            <h4 class="heading">Quantity: <span class="bg-theme-blue"></span></h4>
                                        </div>
                                        <div class="plus-minus">
                                            <i class="sub" data-feather="minus"></i>
                                            <input type="number" value="1" min="1" max="10">
                                            <i class="add" data-feather="plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="option size">
                                    <div class="title-box4">
                                        <h4 class="heading">Size: <span class="bg-theme-blue"></span></h4>
                                        <span class="size-chart" data-bs-toggle="modal" data-bs-target="#sizeChart">Size Chart</span>
                                    </div>
                                    <ul class="size-list">
                                        <li class="active">S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                    </ul>
                                </div>

                                <div class="option sale-details">
                                    <div class="title-box4">
                                        <h4 class="heading">Sale End In <span class="bg-theme-blue"></span></h4>
                                    </div>
                                    <ul class="timer">
                                        <li><span class="days time-value"></span> <span class="timer-label">Days</span></li>
                                        <li><span class="hours time-value"></span> <span class="timer-label">Hours</span></li>
                                        <li><span class="minutes time-value"></span> <span class="timer-label">Minute</span></li>
                                        <li><span class="seconds time-value"></span> <span class="timer-label">Seconds</span></li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <a href="javascript:void(0)" class="btn-solid btn-sm addtocart-btn">Add To Cart </a>
                                    <a href="javascript:void(0)" class="btn-outline btn-sm wishlist-btn">Add To Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabs Start -->
                <div class="description-box">
                    <div class="row gy-4">
                        <div class="col-12">
                            <!-- Tabs Filter Start -->
                            <ul class="nav nav-pills nav-tabs2 row-tab" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="description-tab" data-bs-toggle="pill" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">
                                        Description
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="specification-tab" data-bs-toggle="pill" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="false">
                                        Specification
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="seller-tab" data-bs-toggle="pill" data-bs-target="#seller" type="button" role="tab" aria-controls="seller" aria-selected="false">Seller</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="pill" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">
                                        Review <span>3</span>
                                    </button>
                                </li>
                            </ul>
                            <!-- Tabs Filter End -->
                        </div>

                        <div class="col-12">
                            <!-- Tab Content Start -->
                            <div class="tab-content" id="pills-tabContent">
                                <!-- Description Tab Content Start -->
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="details-product">
                                        <p>
                                            The Model is wearing a white blouse from our stylist's collection, see the image for a mock-up of what the actual blouse would look like.it has text written on it in a black
                                            glass is a heady concoction of madness mixed with a hint of wicked along with several bursts of outrageousness and a tingling spiciness of twisted humour bottled up in
                                            intriguing grandeur cursive language which looks great on a white color.
                                        </p>

                                        <div class="title-box4 mb-3 mt-4">
                                            <h4 class="heading mt-0">Comfort: <span class="bg-theme-blue"></span></h4>
                                        </div>

                                        <p>
                                            Glass is a heady concoction of madness mixed with a hint of wicked along with several bursts of wicked along with several bursts outrageousness and a tingling spiciness of
                                            twisted humour bottled up in intriguing grandeur
                                        </p>

                                        <div class="row g-3 g-lg-4 ratio_landscape mb-3">
                                            <div class="col-md-4">
                                                <div class="frame-wrap">
                                                    <video class="video-tag" loop="" autoplay="" muted="">
                                                        <source src="{{asset('frontendAsset')}}/assets/video/clothing.mp4" type="video/mp4">
                                                        <source src="{{asset('frontendAsset')}}/assets/video/clothing.ogg" type="video/ogg">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="speciation-summery">
                                                    <ul class="general-summery">
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span> Madness mixed with a hint of wicked along</span>
                                                        </li>
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span>Tingling spiciness of twisted humour bottled up in intriguing grandeur</span>
                                                        </li>
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span>Comfortable and stylish all day long.Indigo shirt with western yoke</span>
                                                        </li>
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span>Intriguing grandeur cursive language which looks great on a white color.</span>
                                                        </li>
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span>Synthetic fibres like rayon. It's light in weight and is soft </span>
                                                        </li>
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span>Minima possums, pariah's sed, quasi provident dolorous molesting</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <p>
                                            Smart rich stretch viscose green yellow poly- blend fabric spaghetti straps figure-skimming fit. Tops shift shape rich fabric relaxed fitting size true black gold zip virgin
                                            wool. Stretch lining hemline above knee burgundy satin finish concealed zip small buttons rayon.
                                        </p>

                                        <div class="title-box4 mb-3 mt-4">
                                            <h4 class="heading mt-0">Material Details <span class="bg-theme-blue"></span></h4>
                                        </div>
                                        <p>
                                            Glass is a heady concoction of madness mixed with a hint of wicked along with several bursts of wicked along with several bursts outrageousness and a tingling spiciness of
                                            twisted humour bottled up in intriguing grandeur
                                        </p>
                                        <p>
                                            Structured chic panels power party flattering ultimate trim back pencil silhouette perfect look. Best seller signature waist cut pockets cotton-mix navy blue tailoring elegant
                                            cashmere. Stretch lining hemline above knee burgundy satin finish concealed zip small buttons rayon. Tops shift shape rich fabric relaxed fitting size true black gold zip
                                            virgin wool. Stretch lining hemline above knee burgundy satin finish concealed zip small buttons rayon.
                                        </p>
                                        <div class="row row g-3 g-lg-4">
                                            <div class="col-md-8 order-2 order-md-1">
                                                <div class="speciation-summery">
                                                    <ul class="general-summery">
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span>Tingling spiciness of twisted humour bottled up in intriguing grandeur</span>
                                                        </li>
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span>Comfortable and stylish all day long.Indigo shirt with western yoke</span>
                                                        </li>
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span>Intriguing grandeur cursive language which looks great on a white color.</span>
                                                        </li>
                                                        <li>
                                                            <i data-feather="check-circle"></i>
                                                            <span>Synthetic fibres like rayon. It's light in weight and is soft </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Description Tab Content End -->

                                <!-- Specification Tab Content Start -->
                                <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                                    <div class="specification-wrap">
                                        <p class="font-md content-color">
                                            The Model is wearing a white blouse from our stylist's collection, see the image for a mock-up of what the actual blouse would look like.it has text written on it in a black
                                            cursive language which looks great on a white color.
                                        </p>
                                        <div class="table-responsive">
                                            <table class="specification-table table striped">
                                                <tr>
                                                    <th>Product Dimensions</th>
                                                    <td>15 x 15 x 3 cm; 250 Grams</td>
                                                </tr>
                                                <tr>
                                                    <th>Date First Available</th>
                                                    <td>5 April 2021</td>
                                                </tr>
                                                <tr>
                                                    <th>Manufacturer‏</th>
                                                    <td>Aditya Birla Fashion and Retail Limited</td>
                                                </tr>
                                                <tr>
                                                    <th>ASIN</th>
                                                    <td>B06Y28LCDN</td>
                                                </tr>
                                                <tr>
                                                    <th>Item model number</th>
                                                    <td>AMKP317G04244</td>
                                                </tr>
                                                <tr>
                                                    <th>Department</th>
                                                    <td>Men</td>
                                                </tr>
                                                <tr>
                                                    <th>Item Weight</th>
                                                    <td>250 G</td>
                                                </tr>
                                                <tr>
                                                    <th>Item Dimensions LxWxH</th>
                                                    <td>15 x 15 x 3 Centimeters</td>
                                                </tr>
                                                <tr>
                                                    <th>Net Quantity</th>
                                                    <td>1 U</td>
                                                </tr>
                                                <tr>
                                                    <th>Included Components‏</th>
                                                    <td>1-T-shirt</td>
                                                </tr>
                                                <tr>
                                                    <th>Generic Name</th>
                                                    <td>T-shirt</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Specification Tab Content End -->

                                <!-- Seller Tab Content Start -->
                                <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                                    <div class="seller-info">
                                        <div class="seller-details">
                                            <div class="seller-logo-wrap">
                                                <div class="img-box">
                                                    <img src="{{asset('frontendAsset')}}/assets/icons/png/seller.png" alt="seller">
                                                </div>
                                                <div class="seller-content">
                                                    <h5>Supreme Seller</h5>
                                                    <div class="rating-box">
                                                        <ul class="rating p-0 mb">
                                                            <li>
                                                                <i class="fill" data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fill" data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fill" data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fill" data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fill" data-feather="star"></i>
                                                            </li>
                                                        </ul>
                                                        <span>(105 Rating)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="review-rated">
                                                <li>
                                                    <span>Delivery Time</span>
                                                    <span>100%</span>
                                                </li>
                                                <li>
                                                    <span>Response</span>
                                                    <span>90%</span>
                                                </li>
                                                <li>
                                                    <span>Rating</span>
                                                    <span>95%</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="addres-box">
                                            <p>
                                                <span class="contact"><i data-feather="map-pin"></i>Address :</span> <span class="contact-info"> 1418 Riverwood Drive, Suite 3245 Cottonwood, CA 96052, United States </span>
                                            </p>
                                            <p>
                                                <span class="contact"><i data-feather="phone"></i>Contact Number :</span> <span class="contact-info"> 2545-3566-4525-4525 </span>
                                            </p>

                                            <p class="info">
                                                Supreme Seller is the world famous seller for quality and service classified by and how they are connected residences and land. Connected residences owned by a single entity
                                                leased out, or owned separately with an agreement covering the either a single family or multifamily structure that is available for occupation or for non-business purposes.
                                                relationship between units and common areas. Different types of housing tenure can be used for the same physical type.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Seller Tab Content End -->

                                <!-- Review Tab Content Start -->
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="review-section">
                                        <div class="row gy-4 gy-md-5 g-4 g-xxl-5">
                                            <div class="col-md-8 col-xxl-7 order-2 order-md-1">
                                                <div class="review-left">
                                                    <div class="title-box4">
                                                        <h4 class="heading">Customers Q & A <span class="bg-theme-blue"></span></h4>
                                                    </div>
                                                    <div class="question-wrap">
                                                        <div class="comment-box">
                                                            <div class="img-box">
                                                                <img src="{{asset('frontendAsset')}}/assets/images/avatar/avatar.jpg" alt="avatar">
                                                            </div>
                                                            <div class="avatar-content">
                                                                <div class="name-box">
                                                                    <div class="user-info">
                                                                        <h5><i data-feather="user"></i> Anne R. Allen</h5>
                                                                        <span> <i data-feather="clock"></i> Aug 29, 2022</span>
                                                                    </div>
                                                                    <div class="action-box ms-auto">
                                                                        <ul class="rating p-0 mb d-none d-xl-flex">
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                        </ul>
                                                                        <a href="#replaySection" class="replay-btn"><i data-feather="corner-up-left"></i> Replay</a>
                                                                    </div>
                                                                </div>
                                                                <p>
                                                                    Khaki cotton blend military jacket flattering fit mock horn buttons and patch pockets showerproof black lightgrey. Printed lining patch pockets jersey blazer built
                                                                    in pocket square wool casual quilted jacket without hood azure.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="comment-box replay-comment">
                                                            <div class="img-box">
                                                                <img src="{{asset('frontendAsset')}}/assets/images/avatar/avatar2.jpg" alt="avatar">
                                                            </div>
                                                            <div class="avatar-content">
                                                                <div class="name-box">
                                                                    <div class="user-info">
                                                                        <h5><i data-feather="user"></i> Francisco M. Clifton</h5>
                                                                        <span> <i data-feather="clock"></i> July 15, 2022</span>
                                                                    </div>
                                                                    <div class="action-box ms-auto">
                                                                        <ul class="rating p-0 mb d-none d-xl-flex">
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"></i>
                                                                            </li>
                                                                        </ul>
                                                                        <a href="#replaySection" class="replay-btn"><i data-feather="corner-up-left"></i> Replay</a>
                                                                    </div>
                                                                </div>
                                                                <p>
                                                                    Iconic style heritage brand outerwear collection lightweight showerproof material full zip fastening adjustable sleeves. Khaki cotton blend military jacket
                                                                    flattering fit mock horn buttons and patch pockets showerproof black lightgrey.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="comment-box">
                                                            <div class="img-box">
                                                                <img src="{{asset('frontendAsset')}}/assets/images/avatar/avatar4.jpg" alt="avatar">
                                                            </div>
                                                            <div class="avatar-content">
                                                                <div class="name-box">
                                                                    <div class="user-info">
                                                                        <h5><i data-feather="user"></i> Jacquelyn R. Planet</h5>
                                                                        <span> <i data-feather="clock"></i> August 20, 2022</span>
                                                                    </div>
                                                                    <div class="action-box ms-auto">
                                                                        <ul class="rating p-0 mb d-none d-xl-flex">
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fill" data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i data-feather="star"></i>
                                                                            </li>
                                                                        </ul>
                                                                        <a href="#replaySection" class="replay-btn"><i data-feather="corner-up-left"></i> Replay</a>
                                                                    </div>
                                                                </div>
                                                                <p>Capsule wardrobe double breasted jacket chic lightweight contemporary luxury cotton-and-linen blend tucks at the back.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Reply From Section Start -->
                                                <div class="replay-form round-wrap-content top-space" id="replaySection">
                                                    <div class="title-box4">
                                                        <h4 class="heading">Leave a Comment<span class="bg-theme-blue"></span></h4>
                                                    </div>

                                                    <form action="javascript:void(0)" class="custom-form form-pill">
                                                        <div class="row g-3 g-sm-4">
                                                            <div class="col-sm-6">
                                                                <div class="input-box">
                                                                    <label for="name">Full Name</label>
                                                                    <input name="name" id="name" type="text" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="input-box">
                                                                    <label for="email">Email Address</label>
                                                                    <input name="email" id="email" type="email" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="input-box">
                                                                    <label for="comment">Comments</label>
                                                                    <textarea class="form-control" id="comment" cols="30" rows="5"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 text-end">
                                                                <button class="post-button btn btn-solid btn-sm mb-line">Post Comment <i class="arrow"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Reply From Section End -->
                                            </div>

                                            <div class="col-md-4 col-xxl-5 order-1 order-md-2">
                                                <div class="review-right sticky">
                                                    <div class="customer-rating">
                                                        <div class="title-box4">
                                                            <h4 class="heading">Customers Review<span class="bg-theme-blue"></span></h4>
                                                        </div>

                                                        <div class="global-rating">
                                                            <div>
                                                                <h5>4.5</h5>
                                                            </div>

                                                            <div>
                                                                <h6>Average Ratings</h6>
                                                                <ul class="rating p-0 mb">
                                                                    <li>
                                                                        <i class="fill" data-feather="star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fill" data-feather="star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fill" data-feather="star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fill" data-feather="star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i data-feather="star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <span>(12)</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <ul class="rating-progess">
                                                            <li>
                                                                <h5>5 Star</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <h5>78%</h5>
                                                            </li>
                                                            <li>
                                                                <h5>4 Star</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <h5>62%</h5>
                                                            </li>
                                                            <li>
                                                                <h5>3 Star</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 44%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <h5>44%</h5>
                                                            </li>
                                                            <li>
                                                                <h5>2 Star</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <h5>30%</h5>
                                                            </li>
                                                            <li>
                                                                <h5>1 Star</h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 18%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <h5>18%</h5>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Review Tab Content End -->
                            </div>
                            <!-- Tab Content End -->
                        </div>
                    </div>
                </div>
                <!-- Tabs End -->
            </div>
        </section>
        <!-- Product Section End -->

        <!-- New Arrived Section Start -->
        <section class="pt-0 ratio_asos">
            <div class="container-lg">
                <div class="title-box4">
                    <h4 class="heading font-2xl">YOU MAY ALSO LIKE… <span class="bg-theme-blue"></span></h4>
                </div>

                <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img-box">
                                    <!-- Thumbnail -->
                                    <ul class="thumbnail-img">
                                        <li class="active thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-1.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-2.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-3.jpg" alt="thumbnail"></li>
                                    </ul>

                                    <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/new-arrived/1.jpg" alt="product"> </a>

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
                                        <li>
                                            <a href="compare.html"><i data-feather="repeat"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn"> <i data-feather="shopping-bag"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Chow Tai Folk</p>
                                        <h5>Flannel shirt jacket</h5>
                                        <span>$190.00</span> <del>$240.00</del>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img-box">
                                    <!-- Thumbnail -->
                                    <ul class="thumbnail-img">
                                        <li class="active thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-1.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-2.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-3.jpg" alt="thumbnail"></li>
                                    </ul>

                                    <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/new-arrived/2.jpg" alt="product"> </a>

                                    <!-- Arrow label -->
                                    <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-sun"> NEW</span> </span>

                                    <!-- Rating -->
                                    <div class="rating">
                                        <span>4.5 <i data-feather="star"></i> </span>
                                        <span>150</span>
                                    </div>

                                    <!-- Option -->
                                    <ul class="option-wrap">
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist-btn">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i data-feather="repeat"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn"> <i data-feather="shopping-bag"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Adidas</p>
                                        <h5>Go walk joy walking shoes</h5>
                                        <span>$90.00</span><del>$150.00</del>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img-box">
                                    <!-- Thumbnail -->
                                    <ul class="thumbnail-img">
                                        <li class="active thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-1.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-2.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-3.jpg" alt="thumbnail"></li>
                                    </ul>

                                    <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/new-arrived/3.jpg" alt="product"> </a>

                                    <!-- Arrow label -->
                                    <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-sun"> NEW</span> </span>

                                    <!-- Rating -->
                                    <div class="rating">
                                        <span>4.5 <i data-feather="star"></i> </span>
                                        <span>152</span>
                                    </div>

                                    <!-- Option -->
                                    <ul class="option-wrap">
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist-btn">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i data-feather="repeat"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn"> <i data-feather="shopping-bag"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>FableStreet</p>
                                        <h5>Comfort Loose Fit Trousers</h5>
                                        <span>$120.00</span> <del>$140.00</del>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img-box">
                                    <!-- Thumbnail -->
                                    <ul class="thumbnail-img">
                                        <li class="active thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-1.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-2.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-3.jpg" alt="thumbnail"></li>
                                    </ul>

                                    <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/new-arrived/4.jpg" alt="product"> </a>

                                    <!-- Rating -->
                                    <div class="rating">
                                        <span>4.3 <i data-feather="star"></i> </span>
                                        <span>146</span>
                                    </div>

                                    <!-- Option -->
                                    <ul class="option-wrap">
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist-btn">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i data-feather="repeat"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn"> <i data-feather="shopping-bag"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>T-Shirts</p>
                                        <h5>Crew Neck T-shirt</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img-box">
                                    <!-- Thumbnail -->
                                    <ul class="thumbnail-img">
                                        <li class="active thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-1.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-2.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-3.jpg" alt="thumbnail"></li>
                                    </ul>

                                    <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/new-arrived/5.jpg" alt="product"> </a>

                                    <!-- Arrow label -->
                                    <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-sun"> NEW</span> </span>

                                    <!-- Rating -->
                                    <div class="rating">
                                        <span>4.4 <i data-feather="star"></i> </span>
                                        <span>90</span>
                                    </div>

                                    <!-- Option -->
                                    <ul class="option-wrap">
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist-btn">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i data-feather="repeat"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn"> <i data-feather="shopping-bag"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Cartier</p>
                                        <h5>Ecosmart hooded sweatshirt</h5>
                                        <span>$220.00</span> <del>$230.00</del>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img-box">
                                    <!-- Thumbnail -->
                                    <ul class="thumbnail-img">
                                        <li class="active thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-1.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-2.jpg" alt="thumbnail"></li>
                                        <li class="thumb"><img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7-3.jpg" alt="thumbnail"></li>
                                    </ul>

                                    <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/new-arrived/3.jpg" alt="product"> </a>

                                    <!-- Arrow label -->
                                    <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-sun"> NEW</span> </span>

                                    <!-- Rating -->
                                    <div class="rating">
                                        <span>4.5 <i data-feather="star"></i> </span>
                                        <span>152</span>
                                    </div>

                                    <!-- Option -->
                                    <ul class="option-wrap">
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist-btn">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i data-feather="repeat"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn"> <i data-feather="shopping-bag"></i> </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>FableStreet</p>
                                        <h5>Comfort Loose Fit Trousers</h5>
                                        <span>$120.00</span> <del>$140.00</del>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- New Arrived Section End -->
    </main>
@endsection
