@extends('home.layout.master')
@section('content')
    <!-- Main Start -->
    <main class="main">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="banner">
                <img class="bg-img bg-top" src="../assets/images/inner-page/banner-p.jpg" alt="banner">

                <div class="container-lg">
                    <div class="breadcrumb-box">
                        <div class="heading-box">
                            <h1>Checkout</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li><a href="{{ route('shop') }}">Shop</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li><a href="{{ route('cart') }}">Cart</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current"><a href="{{ route('check.out') }}">Checkout</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Checkout Section Start -->
        <section class="checkout">
            <div class="container-lg">
                <div class="row g-3 g-sm-4 cart">
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="address-wrap">
                            <div class="title-box2">
                                <h2 class="heading-2">Select Delivery Address</h2>
                            </div>

                            <div class="row g-3 g-md-4">
                                <div class="col-12 col-xl-6">
                                    <div class="address-box add-new d-flex flex-column gap-2 align-items-center justify-content-center"
                                        data-bs-toggle="modal" data-bs-target="#addNewAddress">
                                        <span class="plus-icon"><i data-feather="plus"></i></span>
                                        <h4 class="theme-color font-xl fw-500">Add New Address</h4>
                                    </div>
                                </div>

                                @foreach ($shippings as $ship)
                                    <div class="col-12 col-xl-6">
                                        <div class="address-box">
                                            <div class="radio-box">
                                                <div>
                                                    <input class="radio-input" type="radio"
                                                        id="radio{{ $loop->iteration }}" name="shipping_address"
                                                        value="{{ $ship->id }}" {{ $loop->first ? 'checked' : '' }}
                                                        onchange="updatePayLink()">
                                                    <label class="radio-label"
                                                        for="radio{{ $loop->iteration }}">{{ $ship->city }}</label>
                                                </div>
                                                <span class="badges badges-pill badges-theme">Home</span>
                                                <div class="option-wrap">
                                                    <span class="edit" data-bs-toggle="modal"
                                                        data-bs-target="#edditAddress">
                                                        <i data-feather="edit"></i>
                                                    </span>
                                                    <span class="delet ms-0" data-bs-toggle="modal"
                                                        data-bs-target="#conformation">
                                                        <i data-feather="trash"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="address-detail">
                                                <p class="content-color font-default">{{ $ship->address }}</p>
                                                <p class="content-color font-default">{{ $ship->state }}
                                                    {{ $ship->postal_code }}</p>
                                                <span class="content-color font-default">Mobile: <span
                                                        class="title-color font-default fw-500">
                                                        {{ $ship->phone }}</span></span>
                                                <span class="content-color font-default mt-1">Delivery: <span
                                                        class="title-color font-default fw-500">
                                                        2 March</span></span>
                                                <span class="content-color font-default mt-1">Cash on Delivery: <span
                                                        class="title-color font-default fw-500">
                                                        Available</span></span>
                                            </div>
                                            <!-- rest of the address box code -->
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4 col-xl-3">
                        <div class="summery-wrap">
                            <div class="cart-wrap grand-total-wrap">
                                <div>
                                    <div class="order-summery-box">
                                        @php $product_count = \App\Models\Cart::where('user_id',Auth::user()->id)->sum('quantity'); @endphp
                                        <h5 class="cart-title">Price Details (<span class="text-warning">
                                                {{ $product_count }} Items</span> )</h5>
                                        <ul class="order-summery">
                                            <li>
                                                <span>Bag total</span>
                                                <span>{{ \App\Models\Cart::where('user_id', Auth::user()->id)->sum('total_price') }}
                                                    TK</span>
                                            </li>

                                            <li>
                                                <span>Bag savings</span>
                                                <span class="theme-color">0.00 TK</span>
                                            </li>

                                            {{--                                            <li> --}}
                                            {{--                                                <span>Coupon Discount</span> --}}
                                            {{--                                                <a href="javascript:void(0)" class="font-danger">Apply Coupon</a> --}}
                                            {{--                                            </li> --}}

                                            <li>
                                                <span>Delivery</span>
                                                <span>50.00 TK</span>
                                            </li>

                                            <li class="pb-0">
                                                <span>Total Amount</span>
                                                <span>{{ App\Models\Cart::where('user_id', Auth::user()->id)->sum('total_price') + 50.0 }}
                                                    TK</span>
                                            </li>
                                        </ul>
                                        <div class="row g-3 mt-2">
                                            <div class="col-6 col-md-12">
                                                <a href="{{ route('payment.method') }}" class="btn-solid checkout-btn"
                                                    id="pay">Proceed To Pay <i class="arrow"></i></a>
                                            </div>
                                            <div class="col-6 col-md-12">
                                                <a href="shop-left-sidebar.html"
                                                    class="btn-outline w-100 justify-content-center checkout-btn"> Back To
                                                    Shop </a>
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
    <!-- Main End -->
    <!-- Add New Address Modal Start -->
    <div class="modal fade addnew-address" id="addNewAddress" tabindex="-1" aria-labelledby="addNewAddressLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewAddressLabel">Add New Address</h5>
                    <span class="close-modal" data-bs-dismiss="modal"><i data-feather="x"></i></span>
                </div>

                <div class="modal-body full-grid-mobile">
                    <form action="{{ route('shipping.add') }}" method="post" class="custom-form form-pill">@csrf
                        <div class="row g-3 g-md-4">
                            <div class="col-12">
                                <div class="input-box">
                                    <label for="name">Full Name</label>
                                    <input class="form-control" type="text" required="" name="name"
                                        id="name">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" required="" name="email"
                                        id="email">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="mobile">Mobile No:</label>
                                    <input class="form-control" maxlength="11" type="number" required=""
                                        name="phone" maxlength="10" id="mobile">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-box">
                                    <label for="address1">Address</label>
                                    <input class="form-control" type="text" required="" name="address"
                                        id="address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-box">
                                    <label for="address1">State</label>
                                    <input class="form-control" type="text" required="" name="state"
                                        id="address">
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="input-box">
                                    <label for="country">Country</label>
                                    <select class="form-select form-control" name="country" id="country">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4">
                                <div class="input-box">
                                    <label for="city">City/Town</label>
                                    <select class="form-select form-control" name="city" id="city">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Pabna">Pabna</option>
                                        <option value="Kustia">Kustia</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Kulna">Kulna </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-box">
                                    <label for="zip">Zip Code</label>
                                    <input class="form-control" maxlength="5" type="number" required=""
                                        name="zip" id="zip">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="btn-box">
                                <button type="button" class="btn btn-outline rounded-pill" data-bs-dismiss="modal"
                                    aria-label="Close">Close</button>
                                <button type="submit" class="btn btn-solid line-none rounded-pill">Save Address <i
                                        class="arrow"></i></button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- Add New Address Modal End -->

    <!-- Edit Address Modal Start -->
    <div class="modal fade addnew-address" id="edditAddress" tabindex="-1" aria-labelledby="edditAddressLabel"
        aria-hidden="true">
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
                                    <input class="form-control" type="text" value="Nadine Vogt" required=""
                                        name="name2" id="name2">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="email2">Email</label>
                                    <input class="form-control" type="email" value="nadinevogt@roze.come"
                                        required="" name="email2" id="email2">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-box">
                                    <label for="mobile2">Mobile No:</label>
                                    <input maxlength="9" class="form-control" type="number" value="4237720570"
                                        required="" name="mobile2" id="mobile2">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-box">
                                    <label for="address3">Address1</label>
                                    <input class="form-control" type="text" value="385 Happy Hollow Road"
                                        required="" name="address3" id="address3">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-box">
                                    <label for="address4">Address2</label>
                                    <input class="form-control" type="text" value="Wilmington, NC 28412"
                                        required="" name="address4" id="address4">
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
                                    <label for="city2">City</label>
                                    <select class="form-select form-control" id="city2">
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
                                    <input class="form-control" maxlength="6" type="number" value="32525"
                                        required="" name="zip2" id="zip2">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <div class="btn-box">
                        <button type="button" class="btn btn-outline rounded-pill" data-bs-dismiss="modal"
                            aria-label="Close">Close</button>
                        <button type="button" class="btn btn-solid line-none rounded-pill">Save Changes <i
                                class="arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Address Modal End -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the first radio button and set it as checked
            const firstRadio = document.querySelector('input[name="shipping_address"]');
            firstRadio.checked = true;

            // Get the value of the first radio button and set it as the value of the pay button
            const payButton = document.querySelector('#pay');
            payButton.href += `?shipping_address=${firstRadio.value}`;

            // Add event listener to radio buttons to update the value of the pay button
            const radioButtons = document.querySelectorAll('input[name="shipping_address"]');
            radioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    payButton.href =
                        `${payButton.href.split('?')[0]}?shipping_address=${this.value}`;
                });
            });
        });
    </script>
@endsection
