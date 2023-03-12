@include('admin.layout.head')
<div class="container-fluid p-0">
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-danger">×</span>
            </button>
        </div>
    @endif
        @if (Session::has('warning'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('warning') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-danger">×</span>
            </button>
        </div>
    @endif
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-section">
                <div class="materialContainer">
                    <div class="box">
                        <div class="login-title">
                            <h2>Login</h2>
                        </div>
                        <form action="{{route('admin.auth')}}" method="post"> @csrf
                        <div class="input">
                            <label for="name">Username</label>
                            <input type="email" name="email" id="name" required>
                            <span class="spin"></span>
                        </div>

                        <div class="input">
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="pass" required>
                            <span class="spin"></span>
                        </div>

                        <a href="{{route('login.forget.password')}}" class="pass-forgot">Forgot your password?</a>

                        <div class="button login">
                            <button onclick="location.href = 'index.html';">
                                <span>Log In</span>
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                        </form>
                        <p class="sign-category">
                            <span>Or sign in with</span>
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

                        <p>Not a member? <a href="{{route('admin.register')}}" class="theme-color">Sign up now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layout.script')
