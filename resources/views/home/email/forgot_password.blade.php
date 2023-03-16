@include('home.layout.head')
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

<!-- Main Start -->
<div class="main">
    <section class="page-body p-0">
        <div class="row g-0 ratio_asos">
            <div class="order-2 order-lg-1 col-lg-5">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" class="text-danger">×</span>
                        </button>
                    </div>
                @endif
                <div class="content-box">
                    <div>
                        <h5>FORGOT PASSWORD <span class="bg-theme-blue"></span></h5>
                        <p class="font-md content-color">Online Supermarket for all your daily needs.</p>

                        <form action="{{route('reset.pass.link.submit')}}" method="post" class="custom-form form-pill">
                            @csrf
                            <div class="input-box">
                                <label for="email">Email</label>
                                <input class="form-control" type="email"  value="{{old('email')}}" name="email" id="email">
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>

                            <button type="submit" class="btn-solid rounded-pill line-none">Send reset password link <i class="arrow"></i></button>
                        </form>
                        <a href="{{route('login')}}" class="backto-link font-default theme-color">Back to login</a>
                    </div>
                </div>
            </div>
            <div class="order-1 order-lg-2 col-lg-7">
                <div class="img-box">
                    <img class="bg-img" src="{{asset('frontendAsset')}}/assets/images/inner-page/banner.jpg" alt="banner">
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Main End -->
@include('home.layout.script')

