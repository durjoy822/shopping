
@include('admin.layout.head')
<!-- login page start-->
<div class="container-fluid p-0">
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-danger">×</span>
            </button>
        </div>
    @endif
    <div class="row m-0">
        <div class="col-12 p-0">
            <!-- Sign Up Section Start -->
            <div class="login-section">
                <div class="materialContainer">
                    <div class="box">
                        <div class="login-title">
                            <h2>Reset password</h2>
                        </div>
                        <form action="{{route('reset.password')}}" method="post">@csrf
                            <input type="hidden" name="token" value="{{$token}}">
                        <div class="input">
                            <label for="emailname">Inter regiester Email Address</label>
                            <input type="text" name="email" id="emailname" value="{{old('email')}}">
                            <div style="margin-top: 67px">
                                <span class="text-danger">@error('email'){{$message}}@enderror </span>
                            </div>
                        </div>

                        <div class="input">
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="pass">
                            <div style="margin-top: 67px">
                                <span class="text-danger">@error('password'){{$message}}@enderror </span>
                            </div>
                        </div>

                        <div class="input">
                            <label for="compass">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="compass">
                            <div style="margin-top: 67px">
                                <span class="text-danger">@error('password_confirmation'){{$message}}@enderror </span>
                            </div>
                        </div>

                        <div class="button login">
                            <button >
                                <span>Update</span>
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login page End -->

@include('admin.layout.script')
