@extends('home.layout.master')
@section('content')
    <!-- Main Start -->
    <main class="main">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="banner">
                <img class="bg-img bg-top" src="{{asset('frontendAsset')}}/assets/images/inner-page/banner-p.jpg" alt="banner">

                <div class="container-lg">
                    <div class="breadcrumb-box">
                        <div class="heading-box">
                            <h1>My Wishlist</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>

                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>

                            <li class="current"><a href="{{route('wishlist')}}">Wishlist</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Wishlist Section Start -->
        <section class="section-b-space wishlist-page">
            <div class="container-lg">
                <div class="row g-3 g-3 g-xxl-4 ratio_asos row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6">
                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/8.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>4.5 <i data-feather="star"></i> </span>
                                    <span>136</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Concrete Jungle Pack</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/1.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>3.5 <i data-feather="star"></i> </span>
                                    <span>126</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Women Strap White</h5>
                                        <span>$150.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/2.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>4.0 <i data-feather="star"></i> </span>
                                    <span>130</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Blue Jacket For Men</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/3.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>2.5 <i data-feather="star"></i> </span>
                                    <span>115</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Yellow T-Shirt</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/5.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>2.1 <i data-feather="star"></i> </span>
                                    <span>90</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Short Sleeve Dress</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>2.2 <i data-feather="star"></i> </span>
                                    <span>92</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Long Sleeve Dress</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/9.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>4.6 <i data-feather="star"></i> </span>
                                    <span>139</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Winter Blue jacket</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/2.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>4.2 <i data-feather="star"></i> </span>
                                    <span>132</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Blue Jacket Trending</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/5.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>2.5 <i data-feather="star"></i> </span>
                                    <span>126</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Short Sleeve Pattern Dress</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/6.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>4.0 <i data-feather="star"></i> </span>
                                    <span>129</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Red Short Sleeve Dress</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/7.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>3.5 <i data-feather="star"></i> </span>
                                    <span>122</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>Long Sleeve Dress</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="product-card product-wishlist">
                            <div class="img-box">
                                <a href="product.html" class="primary-img"><img class="img-fluid bg-img" src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/8.jpg" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>2.5 <i data-feather="star"></i> </span>
                                    <span>132</span>
                                </div>

                                <!-- Delete Button -->
                                <button class="delete-button"><i data-feather="x"></i></button>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>There Button Suite</h5>
                                        <span>$120.00</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Wishlist Section End -->
    </main>
@endsection
