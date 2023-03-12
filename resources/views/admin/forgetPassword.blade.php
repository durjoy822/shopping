@include('admin.layout.head')
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="text-danger">×</span>
        </button>
    </div>
@endif
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <div class="login-title">
                <h2>Forgot Password</h2>
            </div>
            <form action="{{route('forget.password.submit')}}" method="post">@csrf
            <div class="input">
                <label for="emailname">Enter Email Address</label>
                <input type="email" name="email" class="is-invalid" value="{{old ('email')}}" id="emailname" >
                <div style="margin-top: 67px">
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                </div>
            </div>
            <div class="button login button-1">
                <button >
                    <span>Send</span>
                    <i class="fa fa-check"></i>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
@include('admin.layout.script')
