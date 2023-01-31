<!DOCTYPE html>
<!-- Html start -->
<html lang="en">
  <!-- Head Start -->
@include('home.layout.head')
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
 @include('home.layout.header')
    <!-- Header End -->

    <!-- Main Start -->
   @yield('content')
    <!-- Main End -->
{{--footer start --}}
    @include('home.layout.footer')
{{--    footer end--}}
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
    @include('home.layout.product_modal')
    <!-- View Product Modal End -->

    <!-- Cookies Section Start -->
   @include('home.layout.cookis')
    <!-- Cookie Section End -->

    <!-- Tap To Top Button Start -->
    <div class="tap-to-top-box hide">
      <button class="tap-to-top-button"><i data-feather="chevrons-up"></i></button>
    </div>
    <!-- Tap To Top Button End -->


@include('home.layout.script')
  </body>
  <!-- Body End -->
</html>
<!-- Html End -->
