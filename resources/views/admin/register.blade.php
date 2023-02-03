@include('admin.layout.head')
@section('title')
    admin_register
@endsection
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <!-- Sign Up Section Start -->
            <div class="login-section">
                <div class="materialContainer">
                    <div class="box">
                        <div class="login-title">
                            <h2>Register</h2>
                        </div>
                    <form action="{{route('admin.new')}}" method="post" >
                        @csrf
                        <div class="input">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{old('name')}}" id="name">
                            <span class="spin"></span>
                        </div>
                        @error('name')
                        <span class="alert alert-danger text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input">
                            <label for="emailname">Email Address</label>
                            <input type="text" name="email" value="{{old('email')}}" id="emailname">
                            <div class="spin"></div>
                            @error('email')
                            <span class="alert alert-danger text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input">
                            <label for="pass">Password</label>
                            <input type="password" name="password" value="{{old('password')}}" id="pass">
                            <span class="spin"></span>
                            @error('password')
                            <p class="spin1 text-danger py-4" style="">{{$message}}</p>                            @enderror
                        </div>

                        <div class="input">
                            <label for="compass">Confirm Password</label>
                            <input type="password" value="{{old('confirm_pass')}}" name="confirm_pass" id="compass">
                            <span class="spin"></span>
                            @error('confirm_pass')
                            <p class="spin1 text-danger py-4" style="">{{$message}}</p>
{{--                            <span class="alert alert-danger text-danger">{{$message}}</span>--}}
                            @enderror
                        </div>

                        <div class="button login">
                            <button onclick="location.href = 'index.html';">
                                <span>Sign Up</span>
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                    </form>
                        <p class="sign-category">
                            <span>Or sign up with</span>
                        </p>

                        <div class="row gx-md-3 gy-3">
                            <div class="col-md-6">
                                <a href="javascript:void(0)">
                                    <div class="social-media fb-media">
                                        <img src="{{asset('admin/assets/images/facebook.png')}}" class="img-fluid blur-up lazyload" alt="">
                                        <h6>Facebook</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="javascript:void(0)">
                                    <div class="social-media google-media">
                                        <img src="{{asset('admin/assets/images/google.png')}}" class="img-fluid blur-up lazyload" alt="">
                                        <h6>Google</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <p>
                            <a href="{{route('admin.login')}}" class="theme-color">Already have an account?</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Sign Up Section End -->
        </div>
    </div>
</div>
@include('admin.layout.script')
