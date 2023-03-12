@include('home.layout.head')
<div class="main">
    <section class="page-body p-0">
        <div class="row g-0 ratio_asos">
            <div class="order-2 order-lg-1 col-lg-5">
                <div class="content-box">
                    <div>
                        <h5>RESET PASSWORD <span class="bg-theme-blue"></span></h5>
                        <p class="font-md content-color">Online Supermarket for all your daily needs.</p>

                        <form action="login.html" class="custom-form form-pill">
                            <div class="input-box">
                                <label for="password">Current Password</label>
                                <div class="icon-input">
                                    <input class="form-control" type="password" required="" name="password" id="password">
                                    <img class="showHidePassword" src="../assets/icons/svg/eye-1.svg" alt="eye">
                                </div>
                            </div>
                            <div class="input-box">
                                <label for="password2">New Password</label>
                                <div class="icon-input">
                                    <input class="form-control" type="password" required="" name="password" id="password2">
                                    <img class="showHidePassword" src="../assets/icons/svg/eye-1.svg" alt="eye">
                                </div>
                            </div>
                            <div class="input-box">
                                <label for="password3">Confirm Password</label>
                                <div class="icon-input">
                                    <input class="form-control" type="password" required="" name="password" id="password3">
                                    <img class="showHidePassword" src="../assets/icons/svg/eye-1.svg" alt="eye">
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
                    <img class="bg-img" src="../assets/images/inner-page/banner.jpg" alt="banner">
                </div>
            </div>
        </div>
    </section>
</div>
@include('home.layout.script')
