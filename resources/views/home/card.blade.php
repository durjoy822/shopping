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
                            <h1>Cart</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li><a href="{{route('shop')}}">Shop</a></li>
                            <li>
                                <a href="javascript:void(0)"><i data-feather="chevron-right"></i></a>
                            </li>
                            <li class="current"><a href="{{'cart'}}">Cart</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Cart Section Start -->
        <section class="section-b-space card-page">
            <div class="container-lg">
                <div class="row g-3 g-md-4 cart">
                    <div class="col-md-7 col-lg-8">
                        <div class="cart-wrap">
                            <div class="items-list">
                                <table class="table cart-table m-md-0 table-responsive">
                                    <thead>
                                    <tr>
                                        <th class="d-none d-sm-table-cell">PRODUCT</th>
                                        <th class="d-none d-sm-table-cell">PRICE</th>
                                        <th class="d-none d-lg-table-cell">QUANTITY</th>
                                        <th class="d-none d-xl-table-cell">TOTAL</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($cartItem as $item)
                                    <tr>
                                        <td>
                                            @php $p = \App\Models\Product::find($item->product_id); @endphp
                                            <div class="product-detail">
                                                <img class="pr-img" src="{{asset($p->image_one)}}" alt="image">
                                                <div class="details">
                                                    <h4 class="title-color font-default2">{{$p->name}}</h4>
                                                    <span class="sold-by">Sold By: <span>Roger Group</span> </span>
                                                    <span class="size gap-2 d-flex">Size : <span>M</span> </span>
                                                    <span class="size gap-2 d-flex d-sm-none">Price : <span>$120.00</span> </span>
                                                    <div class="plus-minus mt-2 d-inline-flex d-lg-none">
                                                        <i class="sub" data-feather="minus"></i>
                                                        <input type="number" value="1" min="1" max="10">
                                                        <i class="add" data-feather="plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="price d-none d-sm-table-cell">{{$item->price}} TK</td>
                                        <td class="d-none d-lg-table-cell">
                                            <form action="{{route('bag.update',$item->id)}}" method="post">@csrf
                                                <input type="hidden" value="{{$item->product_id}}" name="product_id">
                                            <div class="plus-minus">
                                                <i class="sub" data-feather="minus"></i>
                                                <input type="number" value="{{$item->quantity}}" name="qty" min="1" max="10">
                                                <i class="add" data-feather="plus"></i>
                                               <button class="btn btn-primary btn-sm mb-1" type="submit" value="update">update</button>
                                            </div>
                                            </form>
                                        </td>
                                        <td class="total d-none d-xl-table-cell">{{$item->total_price}} Tk</td>
                                    </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <div class="summery-wrap">
{{--                            <div class="coupon-box">--}}
{{--                                <h5 class="cart-title">Coupon</h5>--}}
{{--                                <div class="text-wrap">--}}
{{--                                    <h4><i data-feather="tag"></i> Apply Coupon</h4>--}}
{{--                                    <a href="javascript:void(0)" class="btn btn-outline btn-sm">Apply</a>--}}
{{--                                </div>--}}

{{--                                <p class="content-color font-md mb-0"><a href="login.html" class="theme-color">Login</a> to see best coupon for you</p>--}}
{{--                            </div>--}}
                            <div class="cart-wrap grand-total-wrap">
                                <div>
                                    <div class="order-summery-box">
                                        @php $product_count = \App\Models\Cart::where('user_id',Auth::user()->id)->sum('quantity'); @endphp
                                        <h5 class="cart-title">Price Details ( <span class="text-warning"> {{ $product_count }} Item </span>) </h5>
                                        <ul class="order-summery">

                                            <li>
                                                <span>Bag total</span>
                                                <span>{{\App\Models\Cart::where('user_id',Auth::user()->id)->sum('total_price')}} TK</span>
                                            </li>

                                            <li>
                                                <span>Bag savings</span>
                                                <span class="theme-color ">0.00 Tk</span>
                                            </li>

{{--                                            <li>--}}
{{--                                                <span>Coupon Discount</span>--}}
{{--                                                <a href="javascript:void(0)" class="font-danger">Apply Coupon</a>--}}
{{--                                            </li>--}}

                                            <li>
                                                <span>Delivery</span>
                                                <span> 50.00 TK</span>
                                            </li>

                                            <li class="pb-0">
                                                <span>Total Amount</span>
                                                <span>{{App\Models\Cart::where('user_id',Auth::user()->id)->sum('total_price')+50.00}}TK</span>
                                            </li>
                                        </ul>
                                        <div class="row g-3 mt-2">
                                            <div class="col-6 col-md-12">
                                                <a href="{{route('check.out')}}" class="btn-solid checkout-btn">Checkout <i class="arrow"></i></a>
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
        <!-- Cart Section End -->
    </main>
    <!-- Main End -->
@endsection
