@extends('home.layout.master')
@section('content')
    <!-- Main Start -->
    <main class="main">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="banner">
                <img class="bg-img bg-top" src="{{ asset('frontendAsset') }}/assets/images/inner-page/banner-p.jpg" alt="banner">

                <div class="container-lg">
                    <div class="breadcrumb-box">
                        <div class="heading-box">
                            <h1>User Dashboard</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>

                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>

                            <li class="current"><a href="user-dashboard.html">User Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Dashboard Start -->
        <section class="user-dashboard">
            <div class="container-lg">
                <div class="row g-3 g-xl-4 tab-wrap">
                    <div class="col-lg-4 col-xl-3 sticky">
                        <button class="setting-menu btn-solid btn-sm d-lg-none">Setting Menu <i class="arrow"></i></button>
                        <div class="side-bar">
                            <span class="back-side d-lg-none"> <i data-feather="x"></i></span>
                            <div class="profile-box">
                                <div class="img-box">
                                    <img class="img-fluid" src="{{ asset('frontendAsset') }}/assets/images/avatar/avatar.jpg" alt="user">
                                    <div class="edit-btn">
                                        <i data-feather="edit"></i>
                                        <input class="updateimg" type="file" name="img">
                                    </div>
                                </div>

                                <div class="user-name">
                                    <h5>{{$user->name}}</h5>
                                    <h6>{{$user->email}}</h6>
                                </div>
                            </div>

                            <ul class="nav nav-tabs nav-tabs2" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">
                                        Dashboard
                                        <span><i data-feather="chevron-right"></i></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">
                                        Orders
                                        <span><i data-feather="chevron-right"></i></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="wishlist.html" class="nav-link">
                                        Wishlist
                                        <span><i data-feather="chevron-right"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="savedAddress-tab" data-bs-toggle="tab" data-bs-target="#savedAddress" type="button" role="tab" aria-controls="savedAddress" aria-selected="false">
                                        Saved Address
                                        <span><i data-feather="chevron-right"></i></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">
                                        Saved Card
                                        <span><i data-feather="chevron-right"></i></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        Profile
                                        <span><i data-feather="chevron-right"></i></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab" aria-controls="security" aria-selected="false">
                                        Security
                                        <span><i data-feather="chevron-right"></i></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <div class="right-content tab-content" id="myTabContent">
                            <!-- User Dashboard Start -->
                            <div class="tab-pane show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-tab">
                                    <div class="title-box3">
                                        <h3>Welcome Back {{$user->name}}</h3>
                                        <p>
                                            Welcome back Josephin water, here you can customize your profile and also track your order also, you can access your saved address and card. if you want change setting you can
                                            do it from here
                                        </p>
                                    </div>

                                    <div class="row g-0 option-wrap">
                                        <div class="col-sm-6 col-xl-4">
                                            <a href="javascript:void(0)" data-class="orders" class="tab-box">
                                                <img src="{{ asset('frontendAsset') }}/assets/icons/svg/1.svg" alt="shopping bag">
                                                <h5>Orders</h5>
                                                <p>See order history of previous orders</p>
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <a href="wishlist.html" data-class="wishlist" class="tab-box">
                                                <img src="{{ asset('frontendAsset') }}/assets/icons/svg/2.svg" alt="wishlist">
                                                <h5>Wishlist</h5>
                                                <p>Your Wishlist expire within 24h please complete Checkout</p>
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <a href="javascript:void(0)" data-class="savedAddress" class="tab-box">
                                                <img src="{{ asset('frontendAsset') }}/assets/icons/svg/3.svg" alt="address">
                                                <h5>Saved Address</h5>
                                                <p>You saved 3 address for delivery</p>
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <a href="javascript:void(0)" data-class="payment" class="tab-box">
                                                <img src="{{ asset('frontendAsset') }}/assets/icons/svg/4.svg" alt="payment">
                                                <h5>Payment</h5>
                                                <p>Check your payment option there are 3 option added</p>
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <a href="javascript:void(0)" data-class="profile" class="tab-box">
                                                <img src="{{ asset('frontendAsset') }}/assets/icons/svg/5.svg" alt="profile">
                                                <h5>Profile</h5>
                                                <p>Complete your profile details there are some Information missing</p>
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <a href="javascript:void(0)" data-class="security" class="tab-box">
                                                <img src="{{ asset('frontendAsset') }}/assets/icons/svg/6.svg" alt="security">
                                                <h5>Security</h5>
                                                <p>Please don't share any one your email or password</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- User Dashboard End -->

                            <!-- Order Tabs Start -->
                            <div class="tab-pane" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="cart-wrap order-content">
                                    <div class="title-box3">
                                        <h3>My Orders</h3>
                                        <p>H thanks for placing a delivery order with Oslo! Your order should be home with you in soon</p>
                                    </div>

                                    <div class="order-wraper">
                                        <div class="order-box">
                                            <div class="order-header">
                                                <span><i data-feather="box"></i></span>
                                                <div class="order-content">
                                                    <h5 class="order-status success">Delivered</h5>
                                                    <p>Place July 15 2022 and Delivered on July 18 2022</p>
                                                </div>
                                            </div>

                                            <div class="order-info">
                                                <div class="product-details" data-productdetail="product-detail">
                                                    <div class="img-box"><img src="{{ asset('frontendAsset') }}/assets/images/fashion/product/front/4.jpg" alt="product"></div>
                                                    <div class="product-content">
                                                        <h5>Women’s long sleeve Jacket</h5>
                                                        <p class="truncate-3">
                                                            Versatile sporty slogans short sleeve quirky laid back orange lux hoodies vests pins badges. Versatile sporty slogans short sleeve quirky laid back orange lux hoodies
                                                            vests pins badges. Cutting edge crops stone transparent.
                                                        </p>
                                                        <span>Prize : <span>$120.00</span></span>
                                                        <span>Size : <span>M</span></span>
                                                        <span>Order Id : <span>edf125qa1d35</span></span>
                                                    </div>
                                                </div>

                                                <div class="rating-box">
                                                    <span>Rate Product : </span>
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="order-box">
                                            <div class="order-header">
                                                <span><i data-feather="box"></i></span>
                                                <div class="order-content">
                                                    <h5 class="order-status success">Delivered</h5>
                                                    <p>Place July 15 2022 and Delivered on July 18 2022</p>
                                                </div>
                                            </div>

                                            <div class="order-info">
                                                <div class="product-details" data-productdetail="product-detail">
                                                    <div class="img-box"><img src="{{ asset('frontendAsset') }}/assets/images/fashion/product/front/5.jpg" alt="product"></div>
                                                    <div class="product-content">
                                                        <h5>Women’s long sleeve Jacket</h5>
                                                        <p class="truncate-3">
                                                            Tunic knitted stretch leather spaghetti straps triangle top patterned panelled purple blush. Versatile sporty slogans short sleeve quirky laid back orange lux hoodies
                                                            vests pins badges.
                                                        </p>
                                                        <span>Prize : <span>$120.00</span></span>
                                                        <span>Size : <span>M</span></span>
                                                        <span>Order Id : <span>edf125qa1d35</span></span>
                                                    </div>
                                                </div>

                                                <div class="rating-box">
                                                    <span>Rate Product : </span>
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="order-box">
                                            <div class="order-header">
                                                <span><i data-feather="box"></i></span>
                                                <div class="order-content">
                                                    <h5 class="order-status success">Delivered</h5>
                                                    <p>Place July 15 2022 and Delivered on July 18 2022</p>
                                                </div>
                                            </div>

                                            <div class="order-info">
                                                <div class="product-details" data-productdetail="product-detail">
                                                    <div class="img-box"><img src="{{ asset('frontendAsset') }}/assets/images/fashion/product/front/6.jpg" alt="product"></div>
                                                    <div class="product-content">
                                                        <h5>Women’s long sleeve Jacket</h5>
                                                        <p class="truncate-3">
                                                            Pop top sporty stripe trims mesh inserts denim turtle neck casual white cotton button silver.Back print tattoo graphics printed expensive photos colors sun psychedelic
                                                            super casual tag.
                                                        </p>
                                                        <span>Prize : <span>$120.00</span></span>
                                                        <span>Size : <span>M</span></span>
                                                        <span>Order Id : <span>edf125qa1d35</span></span>
                                                    </div>
                                                </div>

                                                <div class="rating-box">
                                                    <span>Rate Product : </span>
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Tabs End -->

                            <!-- Order Detail Tab Start -->
                            <div class="tab-pane" id="orders-details" role="tabpanel" aria-labelledby="orders-details">
                                <div class="order-detail-wrap order-content">
                                    <div class="row g-3 g-md-4">
                                        <div class="col-12">
                                            <div class="order-summery-wrap mt-0 order-data">
                                                <div class="banner-box">
                                                    <div class="media">
                                                        <div class="img">
                                                            <i data-feather="package"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h2>Order Delivered</h2>
                                                            <span class="font-sm">Delivered On July 15 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-details">
                                                <div class="img-box"><img src="{{ asset('frontendAsset') }}/assets/images/fashion/product/front/4.jpg" alt="product"></div>
                                                <div class="product-content">
                                                    <h5>Women’s long sleeve Jacket</h5>
                                                    <p class="truncate-3">
                                                        Versatile sporty slogans short sleeve quirky laid back orange lux hoodies vests pins badges. Versatile sporty slogans short sleeve quirky laid back orange lux hoodies
                                                        vests pins badges. Cutting edge crops stone transparent.
                                                    </p>
                                                    <span>Prize : <span>$120.00</span></span>
                                                    <span>Size : <span>M</span></span>
                                                    <span>Order Id : <span>edf125qa1d35</span></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="order-data summery-wrap">
                                                <div class="order-summery-box">
                                                    <h5 class="cart-title">Price Details (1 Quantity)</h5>
                                                    <ul class="order-summery">
                                                        <li>
                                                            <span>Bag total</span>
                                                            <span>$220.00</span>
                                                        </li>

                                                        <li>
                                                            <span>Bag savings</span>
                                                            <span class="theme-color">-$20.00</span>
                                                        </li>

                                                        <li>
                                                            <span>Coupon Discount</span>
                                                            <a href="offer.html" class="font-danger">$120.00</a>
                                                        </li>

                                                        <li>
                                                            <span>Delivery</span>
                                                            <span>$50.00</span>
                                                        </li>

                                                        <li class="pb-0">
                                                            <span>Total Amount</span>
                                                            <span>$270.00</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="row gy-3 gy-sm-0 g-3 g-md-4">
                                                <div class="col-sm-6">
                                                    <div class="order-data general-details">
                                                        <!-- Payment Method Start -->
                                                        <div class="payment-method mt-0">
                                                            <h5 class="cart-title">Payment Method</h5>
                                                            <div class="payment-box">
                                                                <img src="{{ asset('frontendAsset') }}/assets/icons/png/1.png" alt="card">
                                                                <span class="font-sm title-color"> **** **** **** 6502</span>
                                                            </div>
                                                        </div>
                                                        <!-- Payment Method End -->

                                                        <button class="btn-solid mb-line btn-sm mt-4">Get Invoice <i class="arrow"></i></button>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="order-data general-details">
                                                        <!-- Contact Start -->
                                                        <div class="payment-method mt-0">
                                                            <h5 class="cart-title">Contact Us</h5>

                                                            <div class="payment-box">
                                                                <i data-feather="phone"></i>
                                                                <span class="font-sm title-color">
                                    <a class="content-color fw-500" href="tel:2554-4454-5646">2554-4454-5646</a>
                                  </span>
                                                            </div>

                                                            <div class="payment-box mt-3">
                                                                <i data-feather="phone"></i>
                                                                <span class="font-sm title-color">
                                    <a class="content-color fw-500" href="tel:5452-2545-2154">5452-2545-2154</a>
                                  </span>
                                                            </div>

                                                            <div class="payment-box mt-3">
                                                                <i data-feather="mail"></i>
                                                                <span class="font-sm title-color">
                                    <a class="content-color fw-500" href="mailto:someone@example.com">someone@example.com</a>
                                  </span>
                                                            </div>
                                                        </div>
                                                        <!-- Contact End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="order-data general-details">
                                                <!-- Address Section Start -->
                                                <div class="address-ordered p-0">
                                                    <h5 class="cart-title">Order Address</h5>
                                                    <div class="address">
                                                        <h5 class="font-default title-color">Nadine Vogt <span class="badges badges-pill badges-theme">Home</span></h5>
                                                        <p class="font-default content-color"><i data-feather="map-pin"></i> 1418 Riverwood Drive, Suite 3245 Cottonwood, CA 96052, United States</p>
                                                    </div>
                                                </div>
                                                <!-- Address Section End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Detail Tab End -->

                            <!-- Saved Address Tabs Start -->
                            <div class="tab-pane" id="savedAddress" role="tabpanel" aria-labelledby="savedAddress-tab">
                                <div class="address-tab">
                                    <div class="title-box3">
                                        <h3>Your Saved Address</h3>
                                        <p>here is your saved address, from here you can easily add or modify your address</p>
                                    </div>

                                    <div class="row g-3 g-md-4">
                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                            <div class="address-box checked">
                                                <div class="radio-box">
                                                    <div>
                                                        <input class="radio-input" type="radio" checked="" id="radio1" name="radio1">
                                                        <label class="radio-label" for="radio1">Abigail</label>
                                                    </div>
                                                    <span class="badges badges-pill badges-theme">Home</span>
                                                    <div class="option-wrap">
                                                        <span class="edit" data-bs-toggle="modal" data-bs-target="#edditAddress"><i data-feather="edit"></i></span>
                                                        <span class="delet ms-0" data-bs-toggle="modal" data-bs-target="#conformation"><i data-feather="trash"></i></span>
                                                    </div>
                                                </div>
                                                <div class="address-detail">
                                                    <p class="content-color font-default">3385 Happy Hollow Road Wilmington, NC 28412</p>
                                                    <p class="content-color font-default">United State,325014</p>
                                                    <span class="content-color font-default">Mobile: <span class="title-color font-default fw-500"> 423-772-0570</span></span>
                                                    <span class="content-color font-default mt-1">Delivery: <span class="title-color font-default fw-500"> 2 March</span></span>
                                                    <span class="content-color font-default mt-1">Cash on Delivery: <span class="title-color font-default fw-500"> Available</span></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                            <div class="address-box">
                                                <div class="radio-box">
                                                    <div>
                                                        <input class="radio-input" type="radio" id="radio3" name="radio1">
                                                        <label class="radio-label" for="radio3">Freddy J. Burns</label>
                                                    </div>
                                                    <span class="badges badges-pill badges-theme">Home</span>
                                                    <div class="option-wrap">
                                                        <span class="edit" data-bs-toggle="modal" data-bs-target="#edditAddress"><i data-feather="edit"></i></span>
                                                        <span class="delet ms-0" data-bs-toggle="modal" data-bs-target="#conformation"><i data-feather="trash"></i></span>
                                                    </div>
                                                </div>
                                                <div class="address-detail">
                                                    <p class="content-color font-default">198 Terry Lane Orlando, FL 32809</p>
                                                    <p class="content-color font-default">Germany,254685</p>
                                                    <span class="content-color font-default">Mobile: <span class="title-color font-default fw-500"> 353-582-5870</span></span>

                                                    <span class="content-color font-default mt-1">Delivery: <span class="title-color font-default fw-500"> 4 March</span></span>
                                                    <span class="content-color font-default mt-1">Cash on Delivery: <span class="title-color font-default fw-500"> Available</span></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                            <div class="address-box">
                                                <div class="radio-box">
                                                    <div>
                                                        <input class="radio-input" type="radio" id="radio2" name="radio1">
                                                        <label class="radio-label" for="radio2">Nadine Vogt</label>
                                                    </div>
                                                    <span class="badges badges-pill badges-theme">Office</span>
                                                    <div class="option-wrap">
                                                        <span class="edit" data-bs-toggle="modal" data-bs-target="#edditAddress"><i data-feather="edit"></i></span>
                                                        <span class="delet ms-0" data-bs-toggle="modal" data-bs-target="#conformation"><i data-feather="trash"></i></span>
                                                    </div>
                                                </div>
                                                <div class="address-detail">
                                                    <p class="content-color font-default">Wachaustrasse 22 8045 WEINITZEN</p>
                                                    <p class="content-color font-default">Austria,35546</p>
                                                    <span class="content-color font-default">Mobile: <span class="title-color font-default fw-500"> 454-254-3654</span></span>
                                                    <span class="content-color font-default mt-1">Delivery: <span class="title-color font-default fw-500"> 5 March</span></span>
                                                    <span class="content-color font-default mt-1">Cash on Delivery: <span class="title-color font-default fw-500">Not Available</span></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                            <div class="address-box add-new d-flex flex-column gap-2 align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#addNewAddress">
                                                <span class="plus-icon"><i data-feather="plus"></i></span>
                                                <h4 class="theme-color font-xl fw-500">Add New Address</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Saved Address Tabs End -->

                            <!-- Payment Tabs Start -->
                            <div class="tab-pane" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                                <div class="payment-tab">
                                    <div class="d-flex align-items-start align-items-sm-center justify-content-between title-box3">
                                        <div>
                                            <h3>Your Saved Card</h3>
                                            <p>here is your saved card, from here you can easily add or modify your card</p>
                                        </div>
                                        <button class="btn btn-outline btn-sm white-space-no" data-bs-toggle="modal" data-bs-target="#addNewcard">Add Card</button>
                                    </div>

                                    <div class="payment-section">
                                        <div class="row g-3 g-xl-4">
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="payment-card bg-theme-blue border-color-blue">
                                                    <div class="bank-info">
                                                        <img class="bank" src="{{ asset('frontendAsset') }}/assets/icons/png/bank1.png" alt="bank1">
                                                        <div class="card-type">
                                                            <img class="bank-card" src="{{ asset('frontendAsset') }}/assets/icons/png/1.png" alt="card">
                                                        </div>
                                                    </div>

                                                    <div class="card-details">
                                                        <span>Card Number</span>
                                                        <h5>6458 50XX XXXX 0851</h5>
                                                    </div>

                                                    <div class="card-details-wrap">
                                                        <div class="card-details">
                                                            <span>Name On Card</span>
                                                            <h5>Josephin water</h5>
                                                        </div>

                                                        <div class="text-center card-details">
                                                            <span>Validity</span>
                                                            <h5>XX/XX</h5>
                                                        </div>
                                                    </div>

                                                    <div class="btn-box">
                                                        <span data-bs-toggle="modal" data-bs-target="#editCard"> <i data-feather="edit"></i></span>
                                                        <span data-bs-toggle="modal" data-bs-target="#conformation"><i data-feather="trash"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="payment-card bg-theme-orange border-color-orange">
                                                    <div class="bank-info">
                                                        <img class="bank" src="{{ asset('frontendAsset') }}/assets/icons/png/bank2.png" alt="bank1">
                                                        <div class="card-type">
                                                            <img class="bank-card" src="{{ asset('frontendAsset') }}/assets/icons/png/2.png" alt="card">
                                                        </div>
                                                    </div>

                                                    <div class="card-details">
                                                        <span>Card Number</span>
                                                        <h5>2564 75XX XXXX 3545</h5>
                                                    </div>

                                                    <div class="card-details-wrap">
                                                        <div class="card-details">
                                                            <span>Name On Card</span>
                                                            <h5>Josephin water</h5>
                                                        </div>
                                                        <div class="text-center card-details">
                                                            <span>Validity</span>
                                                            <h5>XX/XX</h5>
                                                        </div>
                                                    </div>

                                                    <div class="btn-box">
                                                        <span data-bs-toggle="modal" data-bs-target="#editCard"><i data-feather="edit"></i></span>
                                                        <span data-bs-toggle="modal" data-bs-target="#conformation"><i data-feather="trash"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="payment-card bg-theme-yellow border-color-yellow">
                                                    <div class="bank-info">
                                                        <img class="bank" src="{{ asset('frontendAsset') }}/assets/icons/png/bank3.png" alt="bank1">
                                                        <div class="card-type">
                                                            <img class="bank-card" src="{{ asset('frontendAsset') }}/assets/icons/png/5.png" alt="card">
                                                        </div>
                                                    </div>

                                                    <div class="card-details">
                                                        <span>Card Number</span>
                                                        <h5>8564 34XX XXXX 9564</h5>
                                                    </div>

                                                    <div class="card-details-wrap">
                                                        <div class="card-details">
                                                            <span>Name On Card</span>
                                                            <h5>Josephin water</h5>
                                                        </div>
                                                        <div class="text-center card-details">
                                                            <span>Validity</span>
                                                            <h5>XX/XX</h5>
                                                        </div>
                                                    </div>

                                                    <div class="btn-box">
                                                        <span data-bs-toggle="modal" data-bs-target="#editCard"><i data-feather="edit"> </i></span>
                                                        <span data-bs-toggle="modal" data-bs-target="#conformation"><i data-feather="trash"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Payment Tabs End -->

                            <!-- Profile Tabs Start -->
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="profile">
                                    <div class="title-box3">
                                        <h3>Basics Information</h3>
                                    </div>

                                    <form action="javascript:void(0)" class="custom-form form-pill">
                                        <div class="row g-3 g-xl-4">
                                            <div class="col-sm-6">
                                                <div class="input-box">
                                                    <label for="fullname">Full Name</label>
                                                    <input class="form-control" id="fullname" name="fullname" type="text" value="Josephin water">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-box">
                                                    <label for="email">Email</label>
                                                    <input class="form-control" id="email" name="email" type="email" value="Josephin.water@gmail.com">
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="input-box">
                                                    <label for="mobile">Mobile</label>
                                                    <input maxlength="10" class="form-control" id="mobile" name="mobile" type="number" value="9645823465">
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="input-box">
                                                    <label for="gender">Gender</label>
                                                    <select name="gender" id="gender" class="form-control">
                                                        <option selected="">Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="input-box">
                                                    <label for="location">Location</label>
                                                    <select name="location" id="location" class="form-control">
                                                        <option selected="">london</option>
                                                        <option>United State</option>
                                                        <option>India</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-box">
                                                    <label for="photo">Profile Photo</label>
                                                    <input class="form-control" id="photo" name="photo" accept="application/pdf" type="file">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-box">
                                                    <label for="address1">Address 1</label>
                                                    <input class="form-control" id="address1" name="address1" type="text" value="123, Main Str.">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-box">
                                                    <label for="address2">Address 1</label>
                                                    <input class="form-control" id="address2" name="address2" type="text" value="123, Main Str.">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-box">
                                                    <label for="al-mobile">Alternate Mobile</label>
                                                    <input maxlength="10" class="form-control" id="al-mobile" name="al-mobile" type="number" value="7565441862">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-box">
                                                    <label for="hint-name">Nick Name</label>
                                                    <input class="form-control" id="hint-name" name="hint-name" type="text" value="Josephin ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-box">
                                            <button class="btn-outline btn-sm">Cancel</button>
                                            <button class="btn-solid btn-sm">Save Changes <i class="arrow"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Profile Tabs End -->

                            <!-- Security Tabs Start -->
                            <div class="tab-pane" id="security" role="tabpanel" aria-labelledby="security-tab">
                                <div class="privacy-tab">
                                    <div class="privacy box">
                                        <div class="title-box3">
                                            <h3>Privacy</h3>
                                        </div>

                                        <div class="setting-option">
                                            <div class="content-box">
                                                <h6 class="font-roboto">Allows others to see my profile</h6>
                                                <p class="font-roboto">all peoples will be able to see my profile.</p>
                                            </div>
                                            <label class="switch"> <input checked="" type="checkbox" name="chk1" value="option1" class="setting-check"><span class="switch-state"></span> </label>
                                        </div>

                                        <div class="setting-option mt-3">
                                            <div class="content-box">
                                                <h6 class="font-roboto">Who has save this profile only that people see my profile</h6>
                                                <p class="font-roboto">all peoples will not be able to see my profile.</p>
                                            </div>
                                            <label class="switch"> <input type="checkbox" name="chk2" value="option1" class="setting-check"><span class="switch-state"></span> </label>
                                        </div>

                                        <button class="btn-solid btn-sm">Save Changes <i class="arrow"></i></button>
                                    </div>

                                    <div class="account-box">
                                        <div class="title-box3">
                                            <h3>Account settings</h3>
                                        </div>

                                        <div class="setting-option">
                                            <div class="content-box">
                                                <h6 class="font-roboto">Deleting Your Account Will Permanently</h6>
                                                <p class="font-roboto">Once your account is deleted, you will be logged out and will be unable to log in back.</p>
                                            </div>
                                            <label class="switch"> <input type="checkbox" name="chk3" value="option2" class="setting-check" checked=""><span class="switch-state"></span> </label>
                                        </div>

                                        <div class="setting-option mt-3">
                                            <div class="content-box">
                                                <h6 class="font-roboto">Deleting Your Account Will Temporary</h6>
                                                <p class="font-roboto">Once your account is deleted, you will be logged out and you will be create new account.</p>
                                            </div>
                                            <label class="switch"> <input type="checkbox" name="chk4" value="option4" class="setting-check"><span class="switch-state"></span> </label>
                                        </div>

                                        <button class="btn-solid btn-sm">Save Changes <i class="arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Security Tabs End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard End -->
    </main>
    <!-- Add New Address Modal Start -->
    <div class="modal fade addnew-address" id="addNewAddress" tabindex="-1" aria-labelledby="addNewAddressLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewAddressLabel">Add New Address</h5>
                    <span class="close-modal" data-bs-dismiss="modal"><i data-feather="x"></i></span>
                </div>

                <div class="modal-body full-grid-mobile">
                    <form action="javascript:void(0)" class="custom-form form-pill">
                        <div class="row g-3 g-md-4">
                            <div class="col-12">
                                <div class="input-box">
                                    <label for="name">Full Name</label>
                                    <input class="form-control" type="text" required="" name="name" id="name">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="email2">Email</label>
                                    <input class="form-control" type="email" required="" name="email" id="email2">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="mobile2">Mobile No:</label>
                                    <input maxlength="9" class="form-control" type="number" required="" name="mobile2" id="mobile2">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-box">
                                    <label for="address3">Address1</label>
                                    <input class="form-control" type="text" required="" name="address3" id="address3">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-box">
                                    <label for="address4">Address2</label>
                                    <input class="form-control" type="text" required="" name="address4" id="address4">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4">
                                <div class="input-box">
                                    <label for="country">Country</label>
                                    <select class="form-select form-control" id="country">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option>United States</option>
                                        <option>India</option>
                                        <option>America</option>
                                        <option>South America</option>
                                        <option>Dubai</option>
                                        <option>Hong Kong</option>
                                        <option>Indonesia</option>
                                        <option>Pakistan</option>
                                        <option>Saudi Arabia</option>
                                        <option>China</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4">
                                <div class="input-box">
                                    <label for="city2">City</label>
                                    <select class="form-select form-control" id="city2">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option>Almaty</option>
                                        <option>India</option>
                                        <option>America</option>
                                        <option>South America</option>
                                        <option>Dubai</option>
                                        <option>Hong Kong</option>
                                        <option>Indonesia</option>
                                        <option>Pakistan</option>
                                        <option>Saudi Arabia</option>
                                        <option>China</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-box">
                                    <label for="zip">Zip Code</label>
                                    <input maxlength="4" class="form-control" type="number" required="" name="zip" id="zip">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <div class="btn-box">
                        <button type="button" class="btn btn-outline rounded-pill" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        <button type="button" class="btn btn-solid line-none rounded-pill">Add Address <i class="arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add New Address Modal End -->

    <!-- Edit Address Modal Start -->
    <div class="modal fade addnew-address" id="edditAddress" tabindex="-1" aria-labelledby="edditAddressLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edditAddressLabel">Edit Address</h5>
                    <span class="close-modal" data-bs-dismiss="modal"><i data-feather="x"></i></span>
                </div>

                <div class="modal-body full-grid-mobile">
                    <form action="javascript:void(0)" class="custom-form form-pill">
                        <div class="row g-3 g-md-4">
                            <div class="col-12">
                                <div class="input-box">
                                    <label for="name2">Full Name</label>
                                    <input class="form-control" type="text" value="Nadine Vogt" required="" name="name2" id="name2">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="email3">Email</label>
                                    <input class="form-control" type="email" value="nadinevogt@roze.come" required="" name="email3" id="email3">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="mobile3">Mobile No:</label>
                                    <input maxlength="9" class="form-control" type="number" value="4237720570" required="" name="mobile3" id="mobile3">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-box">
                                    <label for="address5">Address1</label>
                                    <input class="form-control" type="text" value="385 Happy Hollow Road" required="" name="address5" id="address5">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-box">
                                    <label for="address6">Address2</label>
                                    <input class="form-control" type="text" value="Wilmington, NC 28412" required="" name="address6" id="address6">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4">
                                <div class="input-box">
                                    <label for="country2">Country</label>
                                    <select class="form-select form-control" id="country2">
                                        <option selected="" disabled="" value="">United State</option>
                                        <option>United States</option>
                                        <option>India</option>
                                        <option>America</option>
                                        <option>South America</option>
                                        <option>Dubai</option>
                                        <option>Hong Kong</option>
                                        <option>Indonesia</option>
                                        <option>Pakistan</option>
                                        <option>Saudi Arabia</option>
                                        <option>China</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4">
                                <div class="input-box">
                                    <label for="city">City</label>
                                    <select class="form-select form-control" id="city">
                                        <option selected="" disabled="" value="">Los Angeles</option>
                                        <option>Almaty</option>
                                        <option>India</option>
                                        <option>America</option>
                                        <option>South America</option>
                                        <option>Dubai</option>
                                        <option>Hong Kong</option>
                                        <option>Indonesia</option>
                                        <option>Pakistan</option>
                                        <option>Saudi Arabia</option>
                                        <option>China</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-box">
                                    <label for="zip2">Zip Code</label>
                                    <input maxlength="4" class="form-control" type="number" value="3252" required="" name="zip2" id="zip2">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <div class="btn-box">
                        <button type="button" class="btn btn-outline rounded-pill" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        <button type="button" class="btn btn-solid line-none rounded-pill">Edit Address <i class="arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Address Modal End -->

    <!-- Action Conformation Start -->
    <div class="modal fade action-conform" id="conformation" tabindex="-1" aria-labelledby="conformationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="conformationLabel">Are You Sure ?</h5>
                    <span class="close-modal" data-bs-dismiss="modal"><i data-feather="x"></i></span>
                </div>
                <div class="modal-body">
                    <p class="font-md">The permission for the use/group, preview is inherited from the object, object will create a new permission for this object</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-solid btn-sm line-none" data-bs-dismiss="modal">Remove <i class="arrow"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Action Conformation End -->

    <!-- Add Card Modal Start -->
    <div class="modal fade addnewcard" id="addNewcard" tabindex="-1" aria-labelledby="addNewcard" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewAddressLabel2">Add New Card</h5>
                    <span class="close-modal" data-bs-dismiss="modal"><i data-feather="x"></i></span>
                </div>

                <div class="modal-body">
                    <form action="javascript:void(0)" class="custom-form form-pill">
                        <div class="row g-3 g-md-4">
                            <div class="col-12">
                                <div class="input-box">
                                    <label for="name3">Card Holder Name</label>
                                    <input class="form-control" type="text" required="" name="name3" id="name3">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-box">
                                    <label for="card-number2">Card Number</label>
                                    <input maxlength="16" class="form-control" type="number" required="" name="card-number2" id="card-number2">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="ex-date">Expiry Date</label>
                                    <div class="icon-input">
                                        <input class="form-control" type="text" required="" name="ex-date" id="ex-date">
                                        <i data-feather="calendar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="cv">CV</label>
                                    <input maxlength="3" class="form-control" type="number" required="" name="cv" id="cv">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <div class="btn-box">
                        <button type="button" class="btn btn-outline rounded-pill" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        <button type="button" class="btn btn-solid line-none rounded-pill" data-bs-dismiss="modal" aria-label="Close">Add Card <i class="arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Card Modal End -->

    <!-- Edit Card Modal Start -->
    <div class="modal fade addnewcard" id="editCard" tabindex="-1" aria-labelledby="editCard" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewAddressLabel3">Edit Card</h5>
                    <span class="close-modal" data-bs-dismiss="modal"><i data-feather="x"></i></span>
                </div>

                <div class="modal-body">
                    <form action="javascript:void(0)" class="custom-form form-pill">
                        <div class="row g-3 g-md-4">
                            <div class="col-12">
                                <div class="input-box">
                                    <label for="name4">Card Holder Name</label>
                                    <input value="Josephin water" class="form-control" type="text" required="" name="name4" id="name4">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-box">
                                    <label for="card-number">Card Number</label>
                                    <input value="6458502535450851" class="form-control" type="number" required="" name="card-number" id="card-number">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="ex-date2">Expiry Date</label>
                                    <div class="icon-input">
                                        <input value="05/30" class="form-control" type="text" required="" name="ex-date2" id="ex-date2">
                                        <i data-feather="calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-box">
                                    <label for="cv2">CV</label>
                                    <input value="456" class="form-control" type="number" required="" name="cv2" id="cv2">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <div class="btn-box">
                        <button type="button" class="btn btn-outline rounded-pill" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        <button type="button" class="btn btn-solid line-none rounded-pill" data-bs-dismiss="modal" aria-label="Close">Edit Card <i class="arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Card Modal End -->

    <!-- Tap To Top Button Start -->
    <div class="tap-to-top-box hide">
        <button class="tap-to-top-button"><i data-feather="chevrons-up"></i></button>
    </div>
    <!-- Tap To Top Button End -->

@endsection
