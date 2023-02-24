@extends('home.layout.master')
@section('content')
    <main class="main">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="banner">
                <img class="bg-img bg-top" src="{{ asset('frontendAsset') }}/assets/images/inner-page/banner-p.jpg" alt="banner">

                <div class="container-lg">
                    <div class="breadcrumb-box">
                        <div class="heading-box">
                            <h1>Checkout</h1>
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
                            <li><a href="cart.html">Cart</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current"><a href="address.html">Checkout</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Checkout Section Start -->
        <section class="checkout">
            <div class="container-lg">
                <div class="row g-4 g-md-3 g-xxl-5 cart">
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="title-box2">
                            <h2 class="heading-2">Payment Options</h2>
                            <button class="btn-outline btn-sm btn" data-bs-toggle="modal" data-bs-target="#addNewcard">Add Card</button>
                        </div>
                        <!-- Payment Section Start -->
                        <div class="payment-section">
                            <div class="accordion" id="accordionExample">
                                <!-- Accordion Start -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button font-md title-color" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Select Card <span><i data-feather="chevron-right"></i></span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row g-3 filter-row">
                                                <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <div class="filter-col radio-box">
                                                        <input class="radio-input" checked="" type="radio" name="card" id="card1" value="option1">
                                                        <label class="radio-label content-color" for="card1"><span class="font-md"> 9800 XXXX XXXX 0545 <img class="payment-card" src="{{ asset('frontendAsset') }}/assets/icons/png/1.png" alt="card"> </span></label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <div class="filter-col radio-box">
                                                        <input class="radio-input" type="radio" name="card" id="card2" value="option1">
                                                        <label class="radio-label content-color" for="card2">
                                                            <span class="font-md"> 6580 XXXX XXXX 2562 <img class="payment-card" src="{{ asset('frontendAsset') }}/assets/icons/png/2.png" alt="card"> </span></label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <div class="filter-col radio-box">
                                                        <input class="radio-input" type="radio" name="card" id="card3" value="option1">
                                                        <label class="radio-label content-color" for="card3">
                                <span class="font-md">
                                  5125 XXXX XXXX 6262 <img class="payment-card discovery" src="{{ asset('frontendAsset') }}/assets/icons/png/5.png" alt="card">
                                  <img class="payment-card discovery-w" src="{{ asset('frontendAsset') }}/assets/icons/png/discover-w.png" alt="card">
                                </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion End -->

                                <!-- Accordion Start -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button font-md title-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Net Banking <span><i data-feather="chevron-right"></i></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body net-banking">
                                            <div class="row">
                                                <!-- Net Banking Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio1" id="c-bank" value="option1" checked="">
                                                    <label class="radio-label" for="c-bank">Industrial Bank </label>
                                                </div>
                                                <!-- Net Banking Option End -->

                                                <!-- Net Banking Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio1" id="con-bank" value="option1">
                                                    <label class="radio-label" for="con-bank">Construction Bank Corp.</label>
                                                </div>
                                                <!-- Net Banking Option End -->

                                                <!-- Net Banking Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio1" id="agr-bank" value="option1">
                                                    <label class="radio-label" for="agr-bank"> Agricultural Bank</label>
                                                </div>
                                                <!-- Net Banking Option End -->

                                                <!-- Net Banking Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio1" id="hsbc-bank" value="option1">
                                                    <label class="radio-label" for="hsbc-bank"> HSBC Holdings </label>
                                                </div>
                                                <!-- Net Banking Option End -->

                                                <!-- Net Banking Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio1" id="a-bank" value="option1">
                                                    <label class="radio-label" for="a-bank">Bank of America</label>
                                                </div>
                                                <!-- Net Banking Option End -->

                                                <!-- Net Banking Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio1" id="jpm-moro" value="option1">
                                                    <label class="radio-label" for="jpm-moro">JPMorgan Chase & Co.</label>
                                                </div>
                                                <!-- Net Banking Option End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion End -->

                                <!-- Accordion Start -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button font-md title-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Wallet/UPI <span><i data-feather="chevron-right"></i></span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <!-- Wallet Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio2" id="adyen" value="option1" checked="">
                                                    <label class="radio-label" for="adyen">Adyen </label>
                                                </div>
                                                <!-- Wallet Option End -->

                                                <!-- Wallet Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio2" id="airtel-money" value="option1">
                                                    <label class="radio-label" for="airtel-money"> Airtel Money</label>
                                                </div>
                                                <!-- Wallet Option End -->

                                                <!-- Wallet Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio2" id="alliedWallet" value="option1">
                                                    <label class="radio-label" for="alliedWallet"> AlliedWallet </label>
                                                </div>
                                                <!-- Wallet Option End -->

                                                <!-- Wallet Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio2" id="apple-Pay" value="option1">
                                                    <label class="radio-label" for="apple-Pay"> Apple Pay </label>
                                                </div>
                                                <!-- Wallet Option End -->

                                                <!-- Wallet Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio2" id="brinks" value="option1">
                                                    <label class="radio-label" for="brinks"> Brinks </label>
                                                </div>
                                                <!-- Wallet Option End -->

                                                <!-- Wallet Option Start -->
                                                <div class="input-box radio-box col-6">
                                                    <input class="radio-input" type="radio" name="radio2" id="cardFree" value="option1">
                                                    <label class="radio-label" for="cardFree">CardFree</label>
                                                </div>
                                                <!-- Wallet Option End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion End -->

                                <!-- Accordion Start -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button font-md title-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Cash on Delivery <span><i data-feather="chevron-right"></i></span>
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body cash">
                                            <ul class="filter-row">
                                                <li class="filter-col active">
                                                    <div class="input-box mb-0 radio-box">
                                                        <input class="radio-input" type="radio" checked="" name="cash" id="cash" value="option1">
                                                        <label class="radio-label" for="cash">
                                                            Cash on Delivery <svg><use xlink:href="{{ asset('frontendAsset') }}/assets/icons/svg/_sprite.svg#cash"></use></svg>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion End -->
                            </div>
                        </div>
                        <!-- Payment Section End -->
                    </div>

                    <div class="col-md-5 col-lg-4 col-xl-3">
                        <div class="summery-wrap">
                            <div class="coupon-box">
                                <h5 class="cart-title">Coupon</h5>
                                <div class="text-wrap">
                                    <h4><i data-feather="tag"></i> Apply Coupon</h4>
                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm">Apply</a>
                                </div>

                                <p class="content-color font-md mb-0"><a href="login.html" class="theme-color">Login</a> to see best coupon for you</p>
                            </div>
                            <div class="cart-wrap grand-total-wrap">
                                <div>
                                    <div class="order-summery-box">
                                        <h5 class="cart-title">Price Details (3 Items)</h5>
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
                                                <a href="javascript:void(0)" class="font-danger">Apply Coupon</a>
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
                                        <div class="row g-3 mt-2">
                                            <div class="col-6 col-md-12">
                                                <a href="order-success.html" class="btn-solid checkout-btn">Place Order <i class="arrow"></i></a>
                                            </div>
                                            <div class="col-6 col-md-12">
                                                <a href="shop-left-sidebar.html" class="btn-outline w-100 justify-content-center checkout-btn"> Back To Shop </a>
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
        <!-- Checkout Section End -->
    </main>
@endsection