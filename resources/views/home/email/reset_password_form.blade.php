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
                @if (Session::has('warning'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('warning') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" class="text-danger">×</span>
                        </button>
                    </div>
                @endif
                <div class="content-box">
                    <div>
                        <h5>RESET PASSWORD <span class="bg-theme-blue"></span></h5>
                        <p class="font-md content-color">Online Supermarket for all your daily needs.</p>

                        <form action="{{route('reset.pass.submit')}}" method="post" class="custom-form form-pill">
                            @csrf
                            <input type="hidden" value="{{$token}}" name="token">
                            <div class="input-box">
                                <label for="password">Your regiester email Address</label>
                                <div class="icon-input">
                                    <input class="form-control" type="email"  name="email" id="password">
                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <label for="password2">New Password</label>
                                <div class="icon-input">
                                    <input class="form-control" type="password"  name="password" id="password2">
                                    <img class="showHidePassword" src="{{asset('frontendAsset')}}/assets/icons/svg/eye-1.svg" alt="eye">
                                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <label for="password3">Confirm Password</label>
                                <div class="icon-input">
                                    <input class="form-control" type="password" name="password_confirmation" id="password3">
                                    <img class="showHidePassword" src="{{asset('frontendAsset')}}/assets/icons/svg/eye-1.svg" alt="eye">
                                    <span class="text-danger">@error('password_confirmation'){{$message}}@enderror</span>
                                </div>
                            </div>

                            <button type="submit" class="btn-solid rounded-pill line-none">Submit<i class="arrow"></i></button>
                            <a href="index.html" class="btn-solid rounded-pill line-none btn-outline mt-3 d-flex justify-content-center">Home <i class="arrow"></i></a>
                        </form>
                        <a href="login.html" class="backto-link font-default content-color">Back to login</a>
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
