<!DOCTYPE html>
<!-- Html start -->
<html lang="en">
<!-- Head Start -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="oslo">
    <meta name="keywords" content="oslo">
    <meta name="author" content="oslo">
    <link rel="icon" href="{{asset('frontendAsset')}}/assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('frontendAsset')}}/assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="{{asset('frontendAsset')}}/assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('frontendAsset')}}/assets/images/favicon/favicon.png">
    <meta name="theme-color" content="#0f8fac">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Oslo">
    <meta name="msapplication-TileImage" content="{{asset('frontendAsset')}}/assets/images/favicon/favicon.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Oslo | Home</title>

    <!-- Google Jost Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2-9?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Google Monsterrat Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2-10?family=Montserrat:wght@800&display=swap" rel="stylesheet">

    <!-- Google Leckerli Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2-11?family=Leckerli+One&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('frontendAsset')}}/assets/css/vendors/bootstrap.css">

    <!-- Wow Animation Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontendAsset')}}/assets/css/vendors/wow-animate.css">

    <!-- Swiper Slider Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontendAsset')}}/assets/css/vendors/swiper-bundle.min.css">

    <!-- Style Css -->
    <link id="change-link" rel="stylesheet" type="text/css" href="{{asset('frontendAsset')}}/assets/css/style.css">
</head>
<!-- Head End -->

<!-- Body Start -->
<body>
<!-- Loader Start -->
<div class="loader-wrapper">
    <div class="loader animate">
        <span>O</span>
        <span>S</span>
        <span>L</span>
        <span>O</span>
    </div>
</div>
<!-- Loader End -->

<!-- Overlay -->
<a href="javascript:void(0)" class="overlay-general overlay-common"></a>
<!-- Header Start -->
<header class="header-common">
    <!-- Top Header -->
    <div class="top-header">
        <p class="marquee"><span> Summer sale for all swim suits - off 50%! Shop Now</span></p>
    </div>
    <div class="container-lg">
        <div class="nav-wrap">
            <!-- Navigation Start -->
            <nav class="navigation">
                <div class="nav-section">
                    <div class="header-section">
                        <div class="navbar navbar-expand-xl navbar-light navbar-sticky p-0">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu" aria-controls="primaryMenu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a href="index.html" class="logo-link">
                                <img class="logo logo-dark" src="{{asset('frontendAsset')}}/assets/images/logos/logo.png" alt="logo">
                                <img class="logo logo-light" src="{{asset('frontendAsset')}}/assets/images/logos/logo-w.png" alt="logo">
                            </a>
                            <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5 class="mt-1 mb-0">Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>

                                <div class="offcanvas-body">
                                    <!-- Menu-->
                                    <ul class="navbar-nav">
                                        <!-- Home -->
                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                                            <div class="dropdown-menu home-menu">
                                                <div class="row g-4">
                                                    <div class="col-xl-2 mega-box">
                                                        <a class="home-box" href="index.html">
                                                            <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/demo-img/demo1.jpg" alt="home1">
                                                            <span>Fashion Demo</span>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-2 mega-box">
                                                        <a class="home-box" href="index-2.html">
                                                            <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/demo-img/demo2.jpg" alt="home2">
                                                            <span>Bag Demo</span>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-2 mega-box">
                                                        <a class="home-box" href="index-3.html">
                                                            <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/demo-img/demo3.jpg" alt="home3">
                                                            <span>Grocery Demo</span>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-2 mega-box">
                                                        <a class="home-box" href="index-4.html">
                                                            <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/demo-img/demo4.jpg" alt="home4">
                                                            <span>Furniture Demo</span>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-2 mega-box">
                                                        <a class="home-box" href="index-5.html">
                                                            <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/demo-img/demo5.jpg" alt="home5">
                                                            <span>Watch Demo</span>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-2 mega-box">
                                                        <a class="home-box" href="index-6.html">
                                                            <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/demo-img/demo6.jpg" alt="home6">
                                                            <span>Shoes Demo</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Shop -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-column">
                                                    <a class="dropdown-item" href="shop-categories.html">Shop Categories</a>
                                                    <a class="dropdown-item" href="shop-filter.html">Shop Filter</a>
                                                    <a class="dropdown-item" href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                                    <a class="dropdown-item" href="shop-masanory.html">Shop Masonry</a>
                                                    <a class="dropdown-item" href="shop-no-sidebar.html">Shop No Sidebar</a>
                                                    <a class="dropdown-item" href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                    <a class="dropdown-item" href="shop-top-filter.html">Shop Top Filter</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Product -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Product</a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-column">
                                                    <a class="dropdown-item" href="product-four-image.html">Product 4 Images</a>
                                                    <a class="dropdown-item" href="product-slider.html">Product Slider </a>
                                                    <a class="dropdown-item" href="product-sticky.html">Product Sticky</a>
                                                    <a class="dropdown-item" href="product-three-column.html">Product 3 Column</a>
                                                    <a class="dropdown-item" href="product-video-img.html">Product Video</a>
                                                    <a class="dropdown-item" href="product.html">Product Simple</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Oslo Plus -->
                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Oslo Plus</a>
                                            <div class="dropdown-menu mega-element-menu">
                                                <div class="row g-4">
                                                    <div class="col-xl-3">
                                                        <div class="link-box">
                                                            <h5>Portfolio Pages</h5>
                                                            <div class="dropdown-column">
                                                                <a class="dropdown-item" href="portfolio-2-grid.html">Portfolio 2 Grid</a>
                                                                <a class="dropdown-item" href="portfolio-2-grid-masonry.html">Portfolio 2 Grid Masonry</a>
                                                                <a class="dropdown-item" href="portfolio-3-grid.html">Portfolio 3 Grid <span class="badge bg-theme-theme">Hot</span></a>
                                                                <a class="dropdown-item" href="portfolio-3-grid-masonry.html">Portfolio 3 Grid Masonry</a>
                                                                <a class="dropdown-item" href="portfolio-4-grid.html">Portfolio 4 Grid</a>
                                                                <a class="dropdown-item" href="portfolio-4-grid-masonry.html">Portfolio 4 Grid Masonry</a>
                                                                <a class="dropdown-item" href="portfolio-no-space-masonry.html">Portfolio No Space Masonry</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3">
                                                        <div class="link-box">
                                                            <h5>Elements Pages</h5>
                                                            <div class="dropdown-column">
                                                                <a class="dropdown-item" href="banner-element.html">Banner Element</a>
                                                                <a class="dropdown-item" href="brand-element.html">Brand Element</a>
                                                                <a class="dropdown-item" href="button-element.html">Button Element </a>
                                                                <a class="dropdown-item" href="categories-element.html">Categories Element</a>
                                                                <a class="dropdown-item" href="collection-banner-element.html">Collection Banner Element</a>
                                                                <a class="dropdown-item" href="home-element.html">Home Banner Element</a>
                                                                <a class="dropdown-item" href="instagram-element.html">Instagram Element <span class="badge bg-theme-sun2">New</span></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3">
                                                        <div class="link-box">
                                                            <h5>Elements Pages</h5>
                                                            <div class="dropdown-column">
                                                                <a class="dropdown-item" href="offer-banner-element.html">Offer Banner Element</a>
                                                                <a class="dropdown-item" href="brand-element.html">Brand Element <span class="badge bg-theme-theme">Hot</span></a>
                                                                <a class="dropdown-item" href="product-card-element.html">Product Card Element</a>
                                                                <a class="dropdown-item" href="seller-element.html">Seller Section Element</a>
                                                                <a class="dropdown-item" href="service-element.html">Service Section Element</a>
                                                                <a class="dropdown-item" href="tabs-element.html">Tabs Element</a>
                                                                <a class="dropdown-item" href="title-element.html">Title Element</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3 d-none d-xl-block">
                                                        <div class="link-box">
                                                            <div class="menu-img">
                                                                <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/demo-img/menu-bg.jpg" alt="img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Pages -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-column">
                                                    <a class="dropdown-item" href="404.html">404</a>
                                                    <a class="dropdown-item" href="about-us.html">About Us </a>
                                                    <a class="dropdown-item" href="address.html">Address</a>
                                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                                    <a class="dropdown-item" href="compare.html">Compare</a>
                                                    <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                                    <a class="dropdown-item" href="faqs.html">Faqs</a>
                                                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                                    <a class="dropdown-item" href="login.html">Login</a>
                                                    <a class="dropdown-item" href="order-success.html">Order Success</a>
                                                    <a class="dropdown-item" href="otp.html">Otp</a>
                                                    <a class="dropdown-item" href="payment.html">Payment</a>
                                                    <a class="dropdown-item" href="register.html">Register</a>
                                                    <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                                    <a class="dropdown-item" href="search.html">Search</a>
                                                    <a class="dropdown-item" href="user-dashboard.html">User Dashboard</a>
                                                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Blog -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-column">
                                                    <a class="dropdown-item" href="blog-detail.html">Blog Details</a>
                                                    <a class="dropdown-item" href="blog-grid.html">Blog Grid </a>
                                                    <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navigation End -->

            <!-- Menu Right Start  -->
            <div class="menu-right">
                <div class="select-menu">
                    <div class="dropdown select-dropdown">
                        <button id="unitSelected"><span>USD</span> <i data-feather="chevron-down"></i></button>
                        <ul class="onhover-show-div">
                            <li class="unit">USD</li>
                            <li class="unit">EUR</li>
                            <li class="unit">INR</li>
                            <li class="unit">CNY</li>
                        </ul>
                    </div>
                    <div class="dropdown select-dropdown" id="translate">
                        <button id="languageSelected"><span>English</span> <i data-feather="chevron-down"></i></button>
                        <ul class="onhover-show-div">
                            <li class="lang">English</li>
                            <li class="lang">Chinese</li>
                            <li class="lang">Arabic</li>
                            <li class="lang">Russian</li>
                        </ul>
                    </div>
                </div>

                <!-- Icon Menu Start -->
                <ul class="icon-menu">
                    <li>
                        <button class="search-button"><i data-feather="search"></i></button>
                        <!-- Search Input Start -->
                        <div class="search-full">
                            <div class="input-group">
                    <span class="input-group-text">
                      <i data-feather="search"></i>
                    </span>
                                <input type="text" class="form-control search-type" placeholder="Search here..">
                                <span class="input-group-text close-search">
                      <i data-feather="x"></i>
                    </span>
                            </div>

                            <!-- Suggestion Start -->
                            <div class="search-suggestion">
                                <ul>
                                    <li>
                                        <div class="product-cart media">
                                            <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                            <div class="media-body">
                                                <a href="javascript:void(0)">
                                                    <h6>Women’s long sleeve Jacket</h6>
                                                </a>
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
                                                <p class="mb-0 mt-1">$280.00</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-cart media">
                                            <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/5.jpg" class="img-fluid blur-up lazyload" alt="">
                                            <div class="media-body">
                                                <a href="javascript:void(0)">
                                                    <h6>Shirt short mini dresses</h6>
                                                </a>
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
                                                <p class="mb-0 mt-1">$35.00</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Suggestion Start -->
                        </div>
                        <!-- Search Input End -->
                    </li>

                    <li class="user">
                        <div class="dropdown user-dropdown">
                            <a href="javascript:void(0)"><i data-feather="user"></i></a>
                            <ul class="onhover-show-div">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <div class="dropdown whislist-dropdown">
                            <a href="javascript:void(0)"><i data-feather="heart"></i> <span class="notification-label">0</span></a>
                            <div class="onhover-show-div">
                                <a href="wishlist.html"> <img src="{{asset('frontendAsset')}}/assets/icons/svg/box.svg" class="img-fluid" alt="box"> </a>
                                <div class="content">
                                    <a href="wishlist.html">
                                        <h6>Your wishlist empty !!</h6>
                                        <p>explore more and shortlist items.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Cart Menu Start -->
                    <li>
                        <div class="dropdown shopingbag">
                            <a href="javascript:void(0)" class="cart-button"><i data-feather="shopping-bag"></i> <span class="notification-label">3</span></a>
                            <a href="javascript:void(0)" class="overlay-cart overlay-common"></a>
                            <div class="onhover-cart-dropdown">
                                <div class="onhover-show-div">
                                    <div class="dropdown-header">
                                        <div class="control">
                                            <a href="cart.html">Shopping Cart</a>
                                            <button class="back-cart"><i data-feather="arrow-right"></i></button>
                                        </div>
                                    </div>

                                    <div class="card-wrap custom-scroll">
                                        <!-- Cart Item Start -->
                                        <div class="cart-card media">
                                            <a href="product.html"> <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/8.jpg" class="img-fluid" alt="product"> </a>
                                            <div class="media-body">
                                                <a href="product.html"> <h6>Concrete Jungle Pack</h6></a>
                                                <span>$120.00</span>
                                                <div class="plus-minus">
                                                    <i class="sub" data-feather="minus"></i>
                                                    <input type="number" value="1" min="1" max="10">
                                                    <i class="add" data-feather="plus"></i>
                                                </div>
                                            </div>
                                            <button class="remove-cart"><i data-feather="x"></i></button>
                                        </div>
                                        <!-- Cart Item End -->

                                        <!-- Cart Item Start -->
                                        <div class="cart-card media">
                                            <a href="product.html"> <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/9.jpg" class="img-fluid" alt="product"> </a>
                                            <div class="media-body">
                                                <a href="product.html"> <h6>Concrete Jungle Pack</h6></a>
                                                <span>$120.00</span>
                                                <div class="plus-minus">
                                                    <i class="sub" data-feather="minus"></i>
                                                    <input type="number" value="1" min="1" max="10">
                                                    <i class="add" data-feather="plus"></i>
                                                </div>
                                            </div>
                                            <button class="remove-cart"><i data-feather="x"></i></button>
                                        </div>
                                        <!-- Cart Item End -->

                                        <!-- Cart Item Start -->
                                        <div class="cart-card media">
                                            <a href="product.html"> <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" class="img-fluid" alt="product"> </a>
                                            <div class="media-body">
                                                <a href="product.html"> <h6>Concrete Jungle Pack</h6></a>
                                                <span>$120.00</span>
                                                <div class="plus-minus">
                                                    <i class="sub" data-feather="minus"></i>
                                                    <input type="number" value="1" min="1" max="10">
                                                    <i class="add" data-feather="plus"></i>
                                                </div>
                                            </div>
                                            <button class="remove-cart"><i data-feather="x"></i></button>
                                        </div>
                                        <!-- Cart Item End -->
                                    </div>
                                    <div class="dropdown-footer">
                                        <div class="freedelevery">
                                            <p class="terms-condition">FREE SHIPPING! Continue Shopping to add more product to you cart and receive free shipping for orders over <strong>$500</strong></p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
                                            </div>
                                        </div>
                                        <div class="total-price">
                                            <span>Total</span>
                                            <span>$450</span>
                                        </div>

                                        <div class="btn-group block-group">
                                            <a href="cart.html" class="btn-solid">View Cart</a>
                                            <a href="payment.html" class="btn-outline">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Cart Menu End -->
                </ul>
                <!-- Icon Menu End -->
            </div>
            <!-- Menu Right End  -->
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Main Start -->
<main class="main">
    <!-- Home Banner Section Start -->
    <section class="home-slider-common ratio_40 p-0">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <!-- Slide Start -->
                <div class="swiper-slide">
                    <div class="banner">
                        <div>
                            <img class="bg-img img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/banner/banner1.jpg" alt="banner">
                        </div>
                        <!-- Banner Image Left -->
                        <img class="img-fluid banner-left-img" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-1.png" alt="">

                        <div class="content-box">
                            <h1 class="heading">
                                Find your <strong> Latest</strong> <span> Collection <img class="shape" src="{{asset('frontendAsset')}}/assets/svg/shape.svg" alt="shape"></span> of favorite <strong>Styles</strong> here
                            </h1>
                            <p>We try to provide the best for our customers and try to make sure we always provide the best service for you.</p>
                            <a href="shop-left-sidebar.html" class="btn-solid">SHOP <i class="arrow"></i></a>
                        </div>

                        <!-- Banner Image Right -->
                        <img class="img-fluid banner-right-img" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-2.png" alt="">

                        <!-- Card Box Start -->
                        <div class="card-box">
                            <div class="card-wrap">
                                <div class="card card1">
                                    <div class="img-wrap">
                                        <a href="product.html"> <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-c2.png" alt="card"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="product.html">
                                            <h5>Winter Jacket <span>Oozio Style</span></h5>
                                            <h6>$120.00</h6></a>
                                    </div>
                                </div>

                                <div class="card card2">
                                    <div class="img-wrap">
                                        <a href="product.html"> <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-c1.png" alt="card"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="product.html">
                                            <h5>Women’s shirt <span>Bluezone</span></h5>
                                            <h6>$110.00</h6></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Box Start -->
                    </div>
                </div>
                <!-- Slide End -->

                <!-- Slide Start -->
                <div class="swiper-slide">
                    <div class="banner">
                        <div>
                            <img class="bg-img img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/banner/banner1.jpg" alt="banner">
                        </div>
                        <!-- Banner Image Left -->
                        <img class="img-fluid banner-left-img" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-1.png" alt="">

                        <div class="content-box">
                            <h1 class="heading">
                                Find your <strong> Latest</strong> <span> Collection <img class="shape" src="{{asset('frontendAsset')}}/assets/svg/shape.svg" alt="shape"></span> of favorite <strong>Styles</strong> here
                            </h1>
                            <p>We try to provide the best for our customers and try to make sure we always provide the best service for you.</p>
                            <a href="shop-left-sidebar.html" class="btn-solid">SHOP <i class="arrow"></i></a>
                        </div>

                        <!-- Banner Image Right -->
                        <img class="img-fluid banner-right-img" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-2.png" alt="">

                        <!-- Card Box Start -->
                        <div class="card-box">
                            <div class="card-wrap">
                                <div class="card card1">
                                    <div class="img-wrap">
                                        <a href="product.html"> <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-c2.png" alt="card"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="product.html">
                                            <h5>Winter Jacket <span>Oozio Style</span></h5>
                                            <h6>$120.00</h6></a>
                                    </div>
                                </div>

                                <div class="card card2">
                                    <div class="img-wrap">
                                        <a href="product.html"> <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-c1.png" alt="card"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="product.html">
                                            <h5>Women’s shirt <span>Bluezone</span></h5>
                                            <h6>$110.00</h6></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Box Start -->
                    </div>
                </div>
                <!-- Slide End -->

                <!-- Slide Start -->
                <div class="swiper-slide">
                    <div class="banner">
                        <div>
                            <img class="bg-img img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/banner/banner1.jpg" alt="banner">
                        </div>
                        <!-- Banner Image Left -->
                        <img class="img-fluid banner-left-img" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-1.png" alt="">

                        <div class="content-box">
                            <h1 class="heading">
                                Find your <strong> Latest</strong> <span> Collection <img class="shape" src="{{asset('frontendAsset')}}/assets/svg/shape.svg" alt="shape"></span> of favorite <strong>Styles</strong> here
                            </h1>
                            <p>We try to provide the best for our customers and try to make sure we always provide the best service for you.</p>
                            <a href="shop-left-sidebar.html" class="btn-solid">SHOP <i class="arrow"></i></a>
                        </div>

                        <!-- Banner Image Right -->
                        <img class="img-fluid banner-right-img" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-2.png" alt="">

                        <!-- Card Box Start -->
                        <div class="card-box">
                            <div class="card-wrap">
                                <div class="card card1">
                                    <div class="img-wrap">
                                        <a href="product.html"> <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-c2.png" alt="card"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="product.html">
                                            <h5>Winter Jacket <span>Oozio Style</span></h5>
                                            <h6>$120.00</h6></a>
                                    </div>
                                </div>

                                <div class="card card2">
                                    <div class="img-wrap">
                                        <a href="product.html"> <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/slider/banner1-c1.png" alt="card"> </a>
                                    </div>
                                    <div class="content">
                                        <a href="product.html">
                                            <h5>Women’s shirt <span>Bluezone</span></h5>
                                            <h6>$110.00</h6></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Box Start -->
                    </div>
                </div>
                <!-- Slide End -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Home Banner Section End -->

    <!-- Categories Section Start -->
    <div class="catagories-section">
        <div class="swiper home-catagories-slider">
            <div class="swiper-wrapper mb-0">
                <div class="swiper-slide">
                    <div class="catagories">
                        <img class="leaf-shape" src="{{asset('frontendAsset')}}/assets/svg/leaf.svg" alt="leaf">
                        <a href="shop-left-sidebar.html">
                            <div class="img-wrap">
                                <img src="{{asset('frontendAsset')}}/assets/icons/svg/jeans.svg" alt="jeans">
                            </div>
                            <div class="btn-box">
                                <span class="catagories-name"> Jeans </span>
                                <div class="btn-special">SHOP <i class="arrow"></i></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="catagories">
                        <img class="leaf-shape" src="{{asset('frontendAsset')}}/assets/svg/leaf.svg" alt="leaf">
                        <a href="shop-left-sidebar.html">
                            <div class="img-wrap">
                                <img src="{{asset('frontendAsset')}}/assets/icons/svg/coat.svg" alt="jeans">
                            </div>
                            <div class="btn-box">
                                <span class="catagories-name"> Coats & Jackets</span>
                                <div class="btn-special">SHOP <i class="arrow"></i></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="catagories">
                        <img class="leaf-shape" src="{{asset('frontendAsset')}}/assets/svg/leaf.svg" alt="leaf">
                        <a href="shop-left-sidebar.html">
                            <div class="img-wrap">
                                <img src="{{asset('frontendAsset')}}/assets/icons/svg/dress.svg" alt="jeans">
                            </div>
                            <div class="btn-box">
                                <span class="catagories-name"> Dresses </span>
                                <div class="btn-special">SHOP <i class="arrow"></i></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="catagories">
                        <img class="leaf-shape" src="{{asset('frontendAsset')}}/assets/svg/leaf.svg" alt="leaf">
                        <a href="shop-left-sidebar.html">
                            <div class="img-wrap">
                                <img src="{{asset('frontendAsset')}}/assets/icons/svg/skirt.svg" alt="jeans">
                            </div>
                            <div class="btn-box">
                                <span class="catagories-name"> Skirt </span>
                                <div class="btn-special">SHOP <i class="arrow"></i></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="catagories">
                        <img class="leaf-shape" src="{{asset('frontendAsset')}}/assets/svg/leaf.svg" alt="leaf">
                        <a href="shop-left-sidebar.html">
                            <div class="img-wrap">
                                <img src="{{asset('frontendAsset')}}/assets/icons/svg/full.svg" alt="jeans">
                            </div>
                            <div class="btn-box">
                                <span class="catagories-name">Jumpsuits & Playsuits </span>
                                <div class="btn-special">SHOP <i class="arrow"></i></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="catagories">
                        <img class="leaf-shape" src="{{asset('frontendAsset')}}/assets/svg/leaf.svg" alt="leaf">
                        <a href="shop-left-sidebar.html">
                            <div class="img-wrap">
                                <img src="{{asset('frontendAsset')}}/assets/icons/svg/jaket.svg" alt="jeans">
                            </div>
                            <div class="btn-box">
                                <span class="catagories-name">Hoodies & Sweatshirts </span>
                                <div class="btn-special">SHOP <i class="arrow"></i></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="catagories">
                        <img class="leaf-shape" src="{{asset('frontendAsset')}}/assets/svg/leaf.svg" alt="leaf">
                        <a href="shop-left-sidebar.html">
                            <div class="img-wrap">
                                <img src="{{asset('frontendAsset')}}/assets/icons/svg/jaket.svg" alt="jeans">
                            </div>
                            <div class="btn-box">
                                <span class="catagories-name">Hoodies & Sweatshirts </span>
                                <div class="btn-special">SHOP <i class="arrow"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <!-- Offer Section Start -->
    <section class="offer-section pb-0">
        <div class="container-lg">
            <div class="row g-4 g-lg-6">
                <div class="col-6 col-sm-3">
                    <div class="offer">
                        <h5 class="offer-heading">
                            GET 20% OFF
                            <span class="bg-theme-pink"></span>
                        </h5>
                        <p>ON ORDERS OVER $20*</p>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="offer">
                        <h5 class="offer-heading">
                            GET 23% OFF
                            <span class="bg-theme-yellow"></span>
                        </h5>
                        <p>ON ORDERS OVER $50*</p>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="offer">
                        <h5 class="offer-heading">
                            GET 47% OFF
                            <span class="bg-theme-orange"></span>
                        </h5>
                        <p>ON ORDERS OVER $99*</p>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="offer">
                        <h5 class="offer-heading">
                            Code : CODE09
                            <span class="bg-theme-blue"></span>
                        </h5>
                        <p>Apply Code and get Discount</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer Section End -->

    <!-- Detail Card Section Start -->
    <section class="detail-card-section ratio_asos pb-0 wow-section-overflow">
        <div class="container-lg">
            <div class="top-heading">
                <h2><strong>Fashion</strong> is not necessarily about labels. It's not <strong>about brands.</strong> " It's about something else that comes from within you."</h2>
                <span>Ralph Lauren</span>
            </div>
            <div class="row gy-4 g-2 g-sm-3 g-xl-4">
                <div class="col-6 col-md-3 col-lg-3 span3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="detail-card">
                        <div class="img-wrap">
                            <a href="shop-left-sidebar.html"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/1.jpg" alt="product"></a>
                        </div>
                        <div class="content-box">
                            <a href="shop-left-sidebar.html">
                                <h3>Standard-fit sleeveless midi dress</h3>
                                <p>You have to stay true to your heritage; that's what your brand is about.</p></a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-3 span3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="detail-card">
                        <div class="img-wrap">
                            <a href="shop-left-sidebar.html"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/2.jpg" alt="product"></a>
                        </div>
                        <div class="content-box">
                            <a href="shop-left-sidebar.html">
                                <h3>Casual Indigo Blue Jeans Jacket</h3>
                                <p>Tops shift shape rich fabric relaxed fitting size true black gold zip virgin wool.</p></a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-3 span3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="detail-card">
                        <div class="img-wrap">
                            <a href="shop-left-sidebar.html"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/3.jpg" alt="product"></a>
                        </div>
                        <div class="content-box">
                            <a href="shop-left-sidebar.html">
                                <h3>Montes Loremous A Cosmopolite</h3>
                                <p>Statement sophistication jersey tweed midi flattering comfortable details yellow.</p></a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3 col-lg-3 span3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="detail-card">
                        <div class="img-wrap">
                            <a href="shop-left-sidebar.html"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/4.jpg" alt="product"></a>
                        </div>
                        <div class="content-box">
                            <a href="shop-left-sidebar.html">
                                <h3>Women’s long sleeve red Jacket</h3>
                                <p>Best seller signature waist cut pockets cotton-mix red tailoring elegant cashmere.</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Detail Card Section End -->

    <!-- Top Product Section Start -->
    <section class="pb-0">
        <div class="container-lg">
            <div class="title-box">
                <h2 class="unique-heading">TOP COLLECTION</h2>
                <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
                <p>A conscious collection made entirely from food crop waste, recycled cotton, other more sustainable materials.</p>
            </div>

            <!-- Tabs Start -->
            <div class="nav-tabs-star">
                <!-- Tabs Filter Start -->
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="woman-tab" data-bs-toggle="pill" data-bs-target="#woman" type="button" role="tab" aria-controls="woman" aria-selected="true">Women</button>
                    </li>

                    <li><i data-feather="star"></i></li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="man-tab" data-bs-toggle="pill" data-bs-target="#man" type="button" role="tab" aria-controls="man" aria-selected="false">Man</button>
                    </li>

                    <li><i data-feather="star"></i></li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="kids-tab" data-bs-toggle="pill" data-bs-target="#kids" type="button" role="tab" aria-controls="kids" aria-selected="false">Kids</button>
                    </li>
                </ul>
                <!-- Tabs Filter End -->

                <!-- Tab Content Start -->
                <div class="tab-content ratio_asos" id="pills-tabContent">
                    <!-- Women Tab Content Start -->
                    <div class="tab-pane fade show active" id="woman" role="tabpanel" aria-labelledby="woman-tab">
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/5.jpg" alt="product"> </a>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>245</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Chopard</p>
                                                <h5>Shirt short mini dresses</h5>
                                                <span>$120.00</span> <del>$150.00</del>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/6.jpg" alt="product"> </a>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>165</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html" data-bs-toggle="modal"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>C & A</p>
                                                <h5>Shirt short mini dresses</h5>
                                                <span>$140.00</span>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="product"> </a>

                                            <!-- Arrow label -->
                                            <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-sun"> NEW</span> </span>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>215</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Bluezone</p>
                                                <h5>Women’s long sleeve shirt</h5>
                                                <span>$100.00</span> <del>$140.00</del>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/8.jpg" alt="product"> </a>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>136</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Christian Louboutin</p>
                                                <h5>Concrete Jungle Pack</h5>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/9.jpg" alt="product"> </a>

                                            <!-- Arrow label -->
                                            <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-theme"> NEW</span> </span>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>149</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Oozio Style</p>
                                                <h5>Lightweight water-resistant jacket</h5>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/9.jpg" alt="product"> </a>

                                            <!-- Arrow label -->
                                            <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-theme"> NEW</span> </span>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>149</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Oozio Style</p>
                                                <h5>Lightweight water-resistant jacket</h5>
                                                <span>$220.00</span> <del>$230.00</del>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Women Tab Content End -->

                    <!-- Man Tab Content Start -->
                    <div class="tab-pane fade" id="man" role="tabpanel" aria-labelledby="man-tab">
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/5.jpg" alt="product"> </a>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>245</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Chopard</p>
                                                <h5>Shirt short mini dresses</h5>
                                                <span>$120.00</span> <del>$150.00</del>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/6.jpg" alt="product"> </a>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>165</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>C & A</p>
                                                <h5>Shirt short mini dresses</h5>
                                                <span>$140.00</span>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="product"> </a>

                                            <!-- Arrow label -->
                                            <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-sun"> NEW</span> </span>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>215</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Bluezone</p>
                                                <h5>Women’s long sleeve shirt</h5>
                                                <span>$100.00</span> <del>$140.00</del>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/8.jpg" alt="product"> </a>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>136</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Christian Louboutin</p>
                                                <h5>Concrete Jungle Pack</h5>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/9.jpg" alt="product"> </a>

                                            <!-- Arrow label -->
                                            <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-theme"> NEW</span> </span>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>149</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Oozio Style</p>
                                                <h5>Lightweight water-resistant jacket</h5>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/9.jpg" alt="product"> </a>

                                            <!-- Arrow label -->
                                            <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-theme"> NEW</span> </span>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>149</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Oozio Style</p>
                                                <h5>Lightweight water-resistant jacket</h5>
                                                <span>$220.00</span> <del>$230.00</del>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Man Tab Content End -->

                    <!-- Kids Tab Content Start -->
                    <div class="tab-pane fade" id="kids" role="tabpanel" aria-labelledby="kids-tab">
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/5.jpg" alt="product"> </a>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>245</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Chopard</p>
                                                <h5>Shirt short mini dresses</h5>
                                                <span>$120.00</span> <del>$150.00</del>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/6.jpg" alt="product"> </a>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>165</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html" data-bs-toggle="modal"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>C & A</p>
                                                <h5>Shirt short mini dresses</h5>
                                                <span>$140.00</span>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="product"> </a>

                                            <!-- Arrow label -->
                                            <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-sun"> NEW</span> </span>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>215</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Bluezone</p>
                                                <h5>Women’s long sleeve shirt</h5>
                                                <span>$100.00</span> <del>$140.00</del>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/8.jpg" alt="product"> </a>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>136</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Christian Louboutin</p>
                                                <h5>Concrete Jungle Pack</h5>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/9.jpg" alt="product"> </a>

                                            <!-- Arrow label -->
                                            <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-theme"> NEW</span> </span>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>149</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Oozio Style</p>
                                                <h5>Lightweight water-resistant jacket</h5>
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

                                            <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/9.jpg" alt="product"> </a>

                                            <!-- Arrow label -->
                                            <span class="arrow-label-wrap"> <span class="arrow-label bg-theme-theme"> NEW</span> </span>

                                            <!-- Rating -->
                                            <div class="rating">
                                                <span>4.5 <i data-feather="star"></i> </span>
                                                <span>149</span>
                                            </div>

                                            <!-- Option -->
                                            <ul class="option-wrap">
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Wishlist">
                                                    <a href="javascript:void(0)" class="wishlist-btn">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Compare">
                                                    <a href="compare.html"><i data-feather="repeat"></i></a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="View Product">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="My Cart">
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-bag"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Content Box -->
                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Oozio Style</p>
                                                <h5>Lightweight water-resistant jacket</h5>
                                                <span>$220.00</span> <del>$230.00</del>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kids Tab Content End -->
                </div>
                <!-- Tab Content End -->
            </div>
            <!-- Tabs End -->
        </div>
    </section>
    <!-- Top Product Section End -->

    <!-- Special Product Section Start -->
    <section class="special-product pb-0 wow-section-overflow">
        <div class="container-lg">
            <div class="title-box">
                <h2 class="unique-heading">SPECIAL PRODUCTS</h2>
                <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
                <p>Structured chic panels power party flattering ultimate trim back pencil silhouette perfect look.</p>
            </div>

            <div class="row g-2 g-lg-3 g-xxl-4">
                <div class="col-md-4 col-xl-5">
                    <div class="row g-2 g-lg-3">
                        <div class="col-12 ratio2_3 span3 wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="product-box">
                                <a href="shop-left-sidebar.html" class="img-wrap">
                                    <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/category/1.jpg" alt="product">
                                </a>

                                <div class="catagories-small-label">
                                    <a href="shop-left-sidebar.html">
                                        <span>Best Brand</span>
                                        <h3>man-dressed-shirt-lies</h3></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 ratio_asos span3 wow fadeInLeft" data-wow-delay="0.7s">
                            <div class="product-box">
                                <a href="shop-left-sidebar.html" class="img-wrap">
                                    <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/category/2.jpg" alt="product">
                                </a>

                                <div class="catagories-small-label">
                                    <a href="shop-left-sidebar.html">
                                        <span>All Collection</span>
                                        <h3>Accessories</h3></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 ratio_asos span3 wow fadeInLeft" data-wow-delay="0.8s">
                            <div class="product-box">
                                <a href="shop-left-sidebar.html" class="img-wrap">
                                    <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/category/3.jpg" alt="product">
                                </a>
                                <div class="catagories-small-label">
                                    <a href="shop-left-sidebar.html">
                                        <span>Top Brand</span>
                                        <h3>Woman Tops</h3></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-xl-5 ratio_124 span3 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="product-box">
                        <a href="shop-left-sidebar.html" class="img-wrap">
                            <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/category/4.jpg" alt="product">
                        </a>

                        <div class="catagories-large-label">
                            <a href="shop-left-sidebar.html">
                                <span>Going Out Collection</span>
                                <h3>GOING ON COLLECTION</h3>

                                <ul class="timer">
                                    <li><span class="days time-value"></span> <span class="timer-label">Days</span></li>
                                    <li><span class="hours time-value"></span> <span class="timer-label">Hours</span></li>
                                    <li><span class="minutes time-value"></span> <span class="timer-label">Minute</span></li>
                                    <li><span class="seconds time-value"></span> <span class="timer-label">Seconds</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xl-2">
                    <div class="row g-2 g-lg-3 ratio_163">
                        <div class="col-6 col-md-12 span3 wow fadeInRight" data-wow-delay="0.7s">
                            <div class="product-box">
                                <a href="shop-left-sidebar.html" class="img-wrap">
                                    <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/category/5.jpg" alt="product">
                                </a>

                                <div class="catagories-small-label">
                                    <a href="shop-left-sidebar.html">
                                        <span>Best Collection</span>
                                        <h3>Woman Bag</h3></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-12 span3 wow fadeInRight" data-wow-delay="0.7s">
                            <div class="product-box">
                                <a href="shop-left-sidebar.html" class="img-wrap">
                                    <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/category/6.jpg" alt="product">
                                </a>

                                <div class="catagories-small-label">
                                    <a href="shop-left-sidebar.html">
                                        <span>New Style</span>
                                        <h3>Casual Collection</h3></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Product Section End -->

    <!-- New Arrived Section Start -->
    <section class="pb-0 ratio_asos">
        <div class="container-lg">
            <div class="title-box">
                <h2 class="unique-heading">NEW ARRIVALS</h2>
                <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
                <p>The best ways to change your summer wardrobe into autumn wardrobe.</p>
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

    <!-- Just For You Section Start -->
    <div class="sub-banner section-t-space ratio_asos">
        <div class="sub-banner">
            <img class="bg-img img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/banner/banner2.jpg" alt="banner">

            <div class="content-box">
                <div class="heading-wrap">
                    <span class="span-1">New Arrivals</span>
                    <span class="span-2">JUST </span>
                    <span class="span-3">FOR</span>
                    <span class="span-4">You</span>
                </div>
                <a href="javascript:void(0)" class="site-button">www.oslo.com
                    <img class="pointer" src="{{asset('frontendAsset')}}/assets/icons/svg/pointer.svg" alt="pointer">
                </a>
            </div>
        </div>
    </div>
    <!-- Just For You Section End -->

    <!-- Brand We Love Section Start -->
    <section class="brand-section pb-0 pan3 wow fadeInUp wow-section-overflow" data-wow-delay="0.3s">
        <div class="container-lg">
            <div class="title-box">
                <h2 class="unique-heading">BRAND WE LOVE</h2>
                <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
                <p>Shop our best sellers from emerging and established brands all over the globe</p>
            </div>
            <div class="section-wrap">
                <div class="row gy-4 gy-sm-5 g-0 g-lg-4">
                    <div class="col-lg-5 ratio_94">
                        <div class="brand-wrap">
                            <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/banner/banner3.jpg" alt="banner">

                            <div class="sale-card">
                                <div class="sale-card-wrap">
                                    <div class="sale-name bg-theme-sun">
                                        <h5>Man Fashion</h5>
                                    </div>

                                    <div class="sale-title">
                                        <h3 class="mega">MEGA SALE</h3>
                                        <span>GET SPECIAL DISCOUNT</span>
                                    </div>

                                    <div class="offer">
                                        <span class="upto"> <span> UP TO</span></span>
                                        <h5>
                                            70 <span><span class="percent">%</span> <span class="off"> OFF</span> </span>
                                        </h5>
                                    </div>

                                    <div class="code">
                                        <p>FOR SELECTED ITEMS</p>
                                        <h5>USE CODE: ABCDE098</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="card-box row g-3 g-sm-4">
                            <div class="col-sm-6">
                                <div class="card-wrap">
                                    <h5 class="title-line"><span> New Arrival</span></h5>

                                    <div class="product-card-side product-side2">
                                        <div class="img-wrap">
                                            <a href="product.html">
                                                <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/2.jpg" alt="bag">
                                            </a>
                                        </div>

                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Chopard</p>
                                                <h5 class="truncate-2">Shirt short mini dress</h5>
                                                <span>$130.00</span> <del>$200.00</del>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-card-side product-side2">
                                        <div class="img-wrap">
                                            <a href="product.html">
                                                <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/4.jpg" alt="bag">
                                            </a>
                                        </div>

                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>C & A</p>
                                                <h5 class="truncate-2">Women's Long sleeve shirt</h5>
                                                <span>$210.00</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-card-side product-side2">
                                        <div class="img-wrap">
                                            <a href="product.html">
                                                <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/3.jpg" alt="bag">
                                            </a>
                                        </div>

                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Christian</p>
                                                <h5 class="truncate-2">Concrete jungle Pack</h5>
                                                <span>$220.00</span> <del>$250.00</del>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card-wrap">
                                    <h5 class="title-line"><span>Featured </span></h5>

                                    <div class="product-card-side product-side2">
                                        <div class="img-wrap">
                                            <a href="product.html">
                                                <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/6.jpg" alt="bag">
                                            </a>
                                        </div>

                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Oozio Style</p>
                                                <h5 class="truncate-2">Water resistant jacket</h5>
                                                <span>$140.00</span> <del>$180.00</del>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-card-side product-side2">
                                        <div class="img-wrap">
                                            <a href="product.html">
                                                <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="bag">
                                            </a>
                                        </div>

                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Chow Tai Folk</p>
                                                <h5 class="truncate-2">Flannel shirt jacket</h5>
                                                <span>$210.00</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-card-side product-side2">
                                        <div class="img-wrap">
                                            <a href="product.html">
                                                <img class="img-fluid" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/8.jpg" alt="bag">
                                            </a>
                                        </div>

                                        <div class="content-box">
                                            <a href="product.html">
                                                <p>Adidas</p>
                                                <h5 class="truncate-2">Comfort Trousers</h5>
                                                <span>$160.00</span> <del>$220.00</del>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand We Love Section End -->

    <!-- Instagram Section Start -->
    <section class="intagram-section pb-0">
        <div class="container-lg">
            <div class="title-box">
                <h2 class="unique-heading">AVONE ON INSTAGRAM</h2>
                <span class="title-divider1"><span class="squre"></span><span class="squre"></span></span>
                <p>Elegance isn't solely defined by what you wear. It's how you carry yourself, how you speak, what you read.</p>
            </div>
        </div>

        <div class="swiper instagram-slider ratio_94">
            <div class="swiper-wrapper">
                <!-- Slide Start -->
                <div class="swiper-slide">
                    <div class="intagram-card">
                        <div class="img-box">
                            <a href="javascript:void(0)">
                                <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/instagram/1.jpg" alt="instagram">
                            </a>
                            <div class="on-hover">
                                <div class="content-box">
                      <span class="share">
                        <span><i data-feather="plus"></i></span> SHARE
                      </span>

                                    <div class="option-box">
                                        <p>New Offer- 45% Discount</p>
                                        <h5>Moonlight Bay Knit</h5>
                                        <span class="price">$120</span>

                                        <div class="control">
                                            <a href="wishlist.html">
                                                <i data-feather="heart"></i>
                                            </a>
                                            <a href="cart.html">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </div>
                                        <a href="shop-left-sidebar.html" class="btn-special">SHOP <i class="arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide End -->

                <!-- Slide Start -->
                <div class="swiper-slide">
                    <div class="intagram-card">
                        <div class="img-box">
                            <a href="javascript:void(0)">
                                <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/instagram/2.jpg" alt="instagram">
                            </a>
                            <div class="on-hover">
                                <div class="content-box">
                      <span class="share">
                        <span><i data-feather="plus"></i></span> SHARE
                      </span>

                                    <div class="option-box">
                                        <p>New Offer- 45% Discount</p>
                                        <h5>Moonlight Bay Knit</h5>
                                        <span class="price">$120</span>

                                        <div class="control">
                                            <a href="wishlist.html">
                                                <i data-feather="heart"></i>
                                            </a>
                                            <a href="cart.html">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </div>
                                        <a href="shop-left-sidebar.html" class="btn-special">SHOP <i class="arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide End -->

                <!-- Slide Start -->
                <div class="swiper-slide">
                    <div class="intagram-card">
                        <div class="img-box">
                            <a href="javascript:void(0)">
                                <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/instagram/3.jpg" alt="instagram">
                            </a>
                            <div class="on-hover">
                                <div class="content-box">
                      <span class="share">
                        <span><i data-feather="plus"></i></span> SHARE
                      </span>

                                    <div class="option-box">
                                        <p>New Offer- 45% Discount</p>
                                        <h5>Moonlight Bay Knit</h5>
                                        <span class="price">$120</span>

                                        <div class="control">
                                            <a href="wishlist.html">
                                                <i data-feather="heart"></i>
                                            </a>
                                            <a href="cart.html">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </div>
                                        <a href="shop-left-sidebar.html" class="btn-special">SHOP <i class="arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide End -->

                <!-- Slide Start -->
                <div class="swiper-slide">
                    <div class="intagram-card">
                        <div class="img-box">
                            <a href="javascript:void(0)">
                                <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/instagram/4.jpg" alt="instagram">
                            </a>
                            <div class="on-hover">
                                <div class="content-box">
                      <span class="share">
                        <span><i data-feather="plus"></i></span> SHARE
                      </span>

                                    <div class="option-box">
                                        <p>New Offer- 45% Discount</p>
                                        <h5>Moonlight Bay Knit</h5>
                                        <span class="price">$120</span>

                                        <div class="control">
                                            <a href="wishlist.html">
                                                <i data-feather="heart"></i>
                                            </a>
                                            <a href="cart.html">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </div>
                                        <a href="shop-left-sidebar.html" class="btn-special">SHOP <i class="arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide End -->

                <!-- Slide Start -->
                <div class="swiper-slide">
                    <div class="intagram-card">
                        <div class="img-box">
                            <a href="javascript:void(0)">
                                <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/instagram/5.jpg" alt="instagram">
                            </a>
                            <div class="on-hover">
                                <div class="content-box">
                      <span class="share">
                        <span><i data-feather="plus"></i></span> SHARE
                      </span>

                                    <div class="option-box">
                                        <p>New Offer- 45% Discount</p>
                                        <h5>Moonlight Bay Knit</h5>
                                        <span class="price">$120</span>

                                        <div class="control">
                                            <a href="wishlist.html">
                                                <i data-feather="heart"></i>
                                            </a>
                                            <a href="cart.html">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </div>
                                        <a href="shop-left-sidebar.html" class="btn-special">SHOP <i class="arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide End -->

                <!-- Slide Start -->
                <div class="swiper-slide">
                    <div class="intagram-card">
                        <div class="img-box">
                            <a href="javascript:void(0)">
                                <img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/instagram/3.jpg" alt="instagram">
                            </a>
                            <div class="on-hover">
                                <div class="content-box">
                      <span class="share">
                        <span><i data-feather="plus"></i></span> SHARE
                      </span>

                                    <div class="option-box">
                                        <p>New Offer- 45% Discount</p>
                                        <h5>Moonlight Bay Knit</h5>
                                        <span class="price">$120</span>

                                        <div class="control">
                                            <a href="wishlist.html">
                                                <i data-feather="heart"></i>
                                            </a>
                                            <a href="cart.html">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </div>
                                        <a href="shop-left-sidebar.html" class="btn-special">SHOP <i class="arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide End -->
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Service Section start -->
    <section class="service-section">
        <div class="container-lg">
            <div class="row g-3 g-md-4 g-lg-0">
                <div class="col-6 col-lg-3">
                    <div class="service-box">
                        <div class="media">
                            <svg>
                                <use xlink:href="{{asset('frontendAsset')}}/assets/icons/svg/service/_sprite.svg#truck"></use>
                            </svg>
                            <div class="media-body">
                                <h5>Free Shipping</h5>
                                <span>From all orders over $200</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="service-box">
                        <div class="media">
                            <svg>
                                <use xlink:href="{{asset('frontendAsset')}}/assets/icons/svg/service/_sprite.svg#component"></use>
                            </svg>
                            <div class="media-body">
                                <h5>FREE RETURNS</h5>
                                <span>Return money within 30 days</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="service-box">
                        <div class="media">
                            <svg>
                                <use xlink:href="{{asset('frontendAsset')}}/assets/icons/svg/service/_sprite.svg#dollar"></use>
                            </svg>
                            <div class="media-body">
                                <h5>SECURE SHOPPING</h5>
                                <span>You're in safe hands</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="service-box">
                        <div class="media">
                            <svg>
                                <use xlink:href="{{asset('frontendAsset')}}/assets/icons/svg/service/_sprite.svg#thum"></use>
                            </svg>
                            <div class="media-body">
                                <h5>OVER 10,000 STYLES</h5>
                                <span>We have everything you need</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->
</main>
<!-- Main End -->

<!-- Document Footer Start -->
<footer class="footer-document ratio_asos mb-xxl">
    <div class="bg-footer-l">
        <img src="{{asset('frontendAsset')}}/assets/images/fashion/banner/bg-footer-l.png" alt="banner">
    </div>
    <div class="bg-footer-r">
        <img src="{{asset('frontendAsset')}}/assets/images/fashion/banner/bg-footer-r.png" alt="banner">
    </div>
    <div>
        <div class="container-lg">
            <div class="main-footer">
                <div class="row gy-3 gy-md-4 gy-xl-0">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="content-box">
                            <img class="logo" src="{{asset('frontendAsset')}}/assets/images/logos/logo-w.png" alt="logo-white">
                            <ul>
                                <li><i data-feather="map-pin"></i> <span> 1418 Riverwood Drive, Suite 3245 Cottonwood, CA 96052, United States </span></li>
                                <li>
                                    <i data-feather="phone"></i><a class="nav" href="tel:185659635"><span> + 185659635 </span></a>
                                </li>
                                <li>
                                    <i data-feather="mail"></i><a class="nav" href="mailto:fashion098@gmail.com"><span> fashion098@gmail.com </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="nav-footer col-lg-2 col-md-4 order-md-3 order-lg-2">
                        <div class="nav content-box d-md-block">
                            <h5 class="heading-footer">Shop By</h5>
                            <ul>
                                <li><a class="nav" href="shop-left-sidebar.html">New In </a></li>
                                <li><a class="nav" href="shop-left-sidebar.html">Women </a></li>
                                <li><a class="nav" href="shop-left-sidebar.html">Men </a></li>
                                <li><a class="nav" href="shop-left-sidebar.html">Shoes</a></li>
                                <li><a class="nav" href="shop-left-sidebar.html">Bags & Accessories </a></li>
                                <li><a class="nav" href="shop-left-sidebar.html">Top Brands </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nav-footer col-xl-2 col-lg-3 col-md-4 order-md-4 order-lg-3">
                        <div class="nav d-md-block content-box">
                            <h5 class="heading-footer">Information</h5>
                            <ul>
                                <li><a class="nav" href="index.html">Home </a></li>
                                <li><a class="nav" href="shop-left-sidebar.html">Shop </a></li>
                                <li><a class="nav" href="about-us.html">About Us</a></li>
                                <li><a class="nav" href="blog-detail.html">Blog </a></li>
                                <li><a class="nav" href="contact-us.html">Contact </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nav-footer col-xl-2 col-lg-3 col-md-4 order-md-5 order-lg-4">
                        <div class="nav d-md-block content-box">
                            <h5 class="heading-footer">Get Help</h5>
                            <ul>
                                <li><a class="nav" href="user-dashboard.html">Your Orders </a></li>
                                <li><a class="nav" href="user-dashboard.html">Your Account </a></li>
                                <li><a class="nav" href="user-dashboard.html">Track Order</a></li>
                                <li><a class="nav" href="wishlist.html">Your Wishlist</a></li>
                                <li><a class="nav" href="search.html">Search</a></li>
                                <li><a class="nav" href="faqs.html">Faqs</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-lg-4 order-md-2 order-lg-5">
                        <div class="content-box">
                            <h5 class="heading-footer">Follow Us</h5>
                            <div class="follow-wrap">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/"> <img src="{{asset('frontendAsset')}}/assets/icons/svg/social/fb.svg" alt="fb"> </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/accounts/login/?source=auth_switcher"> <img src="{{asset('frontendAsset')}}/assets/icons/svg/social/inta.svg" alt="fb"> </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/i/flow/login"> <img src="{{asset('frontendAsset')}}/assets/icons/svg/social/tw.svg" alt="fb"> </a>
                                    </li>
                                    <li>
                                        <a href="https://in.pinterest.com/"> <img src="{{asset('frontendAsset')}}/assets/icons/svg/social/pint.svg" alt="fb"> </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="subscribe-box">
                                <h5>Newsletter Sign Up</h5>
                                <p>Receive our latest updates about our products & promotions.</p>
                            </div>

                            <form action="javascript:void(0)" class="footer-form">
                                <input required="" type="email" class="form-control" placeholder="Your email address">
                                <button type="submit" class="btn-solid">SUBMIT <i class="arrow"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sub-footer">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <a href="javascript:void(0)"> <img src="{{asset('frontendAsset')}}/assets/icons/png/1.png" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <img src="{{asset('frontendAsset')}}/assets/icons/png/2.png" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <img src="{{asset('frontendAsset')}}/assets/icons/png/3.png" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <img src="{{asset('frontendAsset')}}/assets/icons/png/4.png" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0">© 2022, OSLO Template. Made with heart by Pixelstrap</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Document Footer End -->

<!-- Mobile Menu Footer Start -->
<footer class="mobile-menu-footer d-sm-none">
    <ul>
        <li>
            <a href="index.html" class="active">
                <i data-feather="home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="search.html" class="search-link">
                <i data-feather="search"></i>
                <span>Search</span>
            </a>
        </li>
        <li>
            <a href="cart.html">
                <i data-feather="shopping-bag"></i>
                <span>Cart</span>
            </a>
        </li>
        <li>
            <a href="wishlist.html">
                <i data-feather="heart"></i>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
            <a href="user-dashboard.html">
                <i data-feather="user"></i>
                <span>Account</span>
            </a>
        </li>
    </ul>
</footer>
<!-- Mobile Menu Footer End -->

<!-- Notification Start -->
<div class="notification-wrap addToCart">
    <div class="notification">
        <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/1.jpg" alt="product">
        <div>
            <h5>Added To Cart</h5>
        </div>
    </div>
</div>
<!-- Notification End -->

<!-- Notification Start -->
<div class="notification-wrap addToWishlist">
    <div class="notification">
        <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/1.jpg" alt="product">
        <div>
            <h5>Added To Wishlist</h5>
        </div>
    </div>
</div>
<!-- Notification End -->

<!-- View Product Modal Start -->
<div class="modal view-product fade" id="viewModal" tabindex="-1" aria-labelledby="viewModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <span class="close-modal d-none d-md-block" data-bs-toggle="modal" data-bs-target="#viewModal"><i data-feather="x"></i></span>
                <div class="row gy-4 g-md-0">
                    <div class="col-md-7">
                        <div class="slider-box">
                            <span class="close-modal d-md-none" data-bs-toggle="modal" data-bs-target="#viewModal"><i data-feather="x"></i></span>
                            <div class="row g-2">
                                <div class="col-2">
                                    <div class="thumbnail-box">
                                        <div class="swiper thumbnail-img-box thumbnailSlider">
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
                                    <div class="swiper mainslider">
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
                                <h4>Women’s long sleeve shirt</h4>
                                <div class="option price">
                                    <h5>Price</h5>
                                    <span> $200.00 </span> <del>$300.00</del>
                                </div>
                                <div class="option">
                                    <h5>Product Description</h5>
                                    <p class="content-color">100% Cotton Indigo shirt with western yoke. Apt for casual outings, this shirt will keep you comfortable and stylish all day long.</p>
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
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#viewModal" class="btn-solid btn-sm addtocart-btn">Add To Cart </a>
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
<!-- View Product Modal End -->

<!-- Cookies Section Start -->
<div class="cookie-bar cookies-bar-1 left-cookies">
    <img src="{{asset('frontendAsset')}}/assets/png/cookie.png" alt="cookies">
    <div class="content">
        <h5>Cookies Consent</h5>
        <p>This website use cookies to ensure you get the best experience on our website.</p>
        <div class="cookie-buttons">
            <button class="btn-solid btn-sm mb-line cookies-accept">Accept <i class="arrow"></i></button>
            <a href="javascript:void(0)" class="btn-solid btn-sm btn-outline cookies-accept">Learn more</a>
        </div>
    </div>
</div>
<!-- Cookie Section End -->

<!-- Tap To Top Button Start -->
<div class="tap-to-top-box hide">
    <button class="tap-to-top-button"><i data-feather="chevrons-up"></i></button>
</div>
<!-- Tap To Top Button End -->

<!-- Bootstrap Js -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- Feather Icon -->
<script src="{{asset('frontendAsset')}}/assets/js/feather/feather.min.js"></script>

<!-- Swiper Slider Js -->
<script src="{{asset('frontendAsset')}}/assets/js/swiper-slider/swiper-bundle.min.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/swiper-slider/swiper-custom.min.js"></script>

<!-- Timer Js -->
<script src="{{asset('frontendAsset')}}/{{asset('frontendAsset')}}/assets/js/timer.js"></script>

<!-- Header Sticky js  -->
<script src="{{asset('frontendAsset')}}/assets/js/sticky-header.js"></script>

<!-- Active Class js  -->
<script src="{{asset('frontendAsset')}}/assets/js/active-class.js"></script>

<!-- Wow Js -->
<script src="{{asset('frontendAsset')}}/assets/js/wow.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/wow-custom.js"></script>

<!-- Script Js -->
<script src="{{asset('frontendAsset')}}/assets/js/script.js"></script>

<!-- Theme Settings Js -->
<script src="{{asset('frontendAsset')}}/assets/js/theme-setting.js"></script>
</body>
<!-- Body End -->
</html>
<!-- Html End -->

