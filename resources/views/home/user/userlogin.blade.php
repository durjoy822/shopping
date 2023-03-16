
@include('home.layout.head')
<!-- Head End -->

<!-- Body Start -->

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
                        <h5>LOGIN <span class="bg-theme-blue"></span></h5>
                        <p class="font-md content-color">How do i get access order,wishlist and recomendation ?</p>

                        <form action="{{route('user.login')}}" method="post" class="custom-form form-pill">@csrf
                            <div class="input-box">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" required="" name="email" id="email">
                                @if ($errors->has('email'))
                                    <span class="error text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="input-box">
                                <label for="password">Password</label>
                                <div class="icon-input">
                                    <input class="form-control" type="password" required="" name="password" id="password">
                                    <img class="showHidePassword" src="{{asset('frontendAsset')}}/assets/icons/svg/eye-1.svg" alt="eye">
                                    @if ($errors->has('password'))
                                        <span class="error text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <a class="forgot-link" href="{{route('user.forgot.pass')}}">Forgot Password?</a>

                            <button type="submit" class="btn-solid rounded-pill line-none">Signin <i class="arrow"></i></button>
                            <a href="{{route('home')}}" class="btn-solid rounded-pill line-none btn-outline mt-3 d-flex justify-content-center">Home <i class="arrow"></i></a>
                        </form>

                        <span class="backto-link font-default content-color text-decoration-none">If you are new, <a class="text-decoration-underline theme-color" href="{{route('register')}}"> Create Now </a> </span>
                        <span class="line"><span>Or </span> </span>
                        <div class="link-group">
                            <a href="https://www.google.com/" class="button-link"><img src="{{asset('frontendAsset')}}/assets/icons/png/google.png" alt="google"> Sign in </a>
                            <a href="https://www.facebook.com/" class="button-link"><img src="{{asset('frontendAsset')}}/assets/icons/png/fb.png" alt="facebook"> Sign in </a>
                        </div>
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
<!-- Body End -->

<!-- Html End -->
