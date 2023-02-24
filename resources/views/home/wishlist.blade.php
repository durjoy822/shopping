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
                    @foreach($wishlists as $product)
                    <div class="col">
                        <div class="product-card product-wishlist">
                            @php $wishlist_img = \App\Models\product::find($product->product_id); @endphp
                            <div class="img-box">
                                <a href="{{ route('product',['id'=>$product->product_id]) }}" class="primary-img"><img class="img-fluid bg-img" src="{{asset($wishlist_img->image_one)}}" alt="product"> </a>
                                <!-- Rating -->
                                <div class="rating">
                                    <span>4.5 <i data-feather="star"></i> </span>
                                    <span>136</span>
                                </div>

                                <!-- Delete Button -->
                                <form action="{{route('wishlist.delete')}}" method="post">@csrf
                                    <input type="hidden" value="{{$product->id}}" name="id">
                                <button  class="delete-button"><i data-feather="x"></i></button>
                                </form>
                            </div>
                            <div class="content-wrap">
                                <!-- Content Box -->
                                <div class="content-box">
                                    <a href="product.html">
                                        <p>Christian Louboutin</p>
                                        <h5>{{$product->name}}</h5>
                                        <span>{{$product->price}} TK</span>
                                    </a>
                                </div>
                                <div class="mov-to-bag">
                                    <a href="{{route('bag',['id'=>$product->product_id])}}" class="btn btn-outline btn-sm addtocart-btn">Move To Cart <i class="arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </section>
        <!-- Wishlist Section End -->
    </main>
@endsection
