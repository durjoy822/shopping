<header class="header-common">
    <!-- Top Header -->
    <div class="top-header">
        <p class="marquee"><span> Summer sale for all swim suits - off 50%! Shop Now</span></p>
    </div>
    <div class="container-lg">
        <div class="nav-wrap">
            <!-- Navigation Start -->
            <nav class="navigation">
                <div class="nav-section">
                    <div class="header-section">
                        <div class="navbar navbar-expand-xl navbar-light navbar-sticky p-0">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu" aria-controls="primaryMenu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a href="index.html" class="logo-link">
                                <img class="logo logo-dark" src="{{asset('frontendAsset')}}/assets/images/logos/logo.png" alt="logo">
                                <img class="logo logo-light" src="{{asset('frontendAsset')}}/assets/images/logos/logo-w.png" alt="logo">
                            </a>
                            <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5 class="mt-1 mb-0">Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>

                                <div class="offcanvas-body">
                                    <!-- Menu-->
                                    <ul class="navbar-nav">
                                        <!-- Home -->
                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle" href="{{route('home')}}">Home</a>
                                        </li>

                                        <!-- Shop -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{route('shop')}}" >Shop</a>
{{--                                            <div class="dropdown-menu">--}}
{{--                                                <div class="dropdown-column">--}}
{{--                                                    <a class="dropdown-item" href="shop-categories.html">Shop Categories</a>--}}
{{--                                                    <a class="dropdown-item" href="shop-filter.html">Shop Filter</a>--}}
{{--                                                    <a class="dropdown-item" href="shop-left-sidebar.html">Shop Left Sidebar</a>--}}
{{--                                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>--}}
{{--                                                    <a class="dropdown-item" href="shop-masanory.html">Shop Masonry</a>--}}
{{--                                                    <a class="dropdown-item" href="shop-no-sidebar.html">Shop No Sidebar</a>--}}
{{--                                                    <a class="dropdown-item" href="shop-right-sidebar.html">Shop Right Sidebar</a>--}}
{{--                                                    <a class="dropdown-item" href="shop-top-filter.html">Shop Top Filter</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </li>

                                        <!-- Product -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Product</a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-column">
                                                    <a class="dropdown-item" href="product-four-image.html">Product 4 Images</a>
                                                    <a class="dropdown-item" href="product-slider.html">Product Slider </a>
                                                    <a class="dropdown-item" href="product-sticky.html">Product Sticky</a>
                                                    <a class="dropdown-item" href="product-three-column.html">Product 3 Column</a>
                                                    <a class="dropdown-item" href="product-video-img.html">Product Video</a>
                                                    <a class="dropdown-item" href="product.html">Product Simple</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Pages -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-column">
                                                    <a class="dropdown-item" href="404.html">404</a>
                                                    <a class="dropdown-item" href="about-us.html">About Us </a>
                                                    <a class="dropdown-item" href="address.html">Address</a>
                                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                                    <a class="dropdown-item" href="compare.html">Compare</a>
                                                    <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                                    <a class="dropdown-item" href="faqs.html">Faqs</a>
                                                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                                    <a class="dropdown-item" href="login.html">Login</a>
                                                    <a class="dropdown-item" href="order-success.html">Order Success</a>
                                                    <a class="dropdown-item" href="otp.html">Otp</a>
                                                    <a class="dropdown-item" href="payment.html">Payment</a>
                                                    <a class="dropdown-item" href="register.html">Register</a>
                                                    <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                                    <a class="dropdown-item" href="search.html">Search</a>
                                                    <a class="dropdown-item" href="user-dashboard.html">User Dashboard</a>
                                                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Blog -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-column">
                                                    <a class="dropdown-item" href="blog-detail.html">Blog Details</a>
                                                    <a class="dropdown-item" href="blog-grid.html">Blog Grid </a>
                                                    <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navigation End -->

            <!-- Menu Right Start  -->
            <div class="menu-right">
                <div class="select-menu">
                    <div class="dropdown select-dropdown">
                        <button id="unitSelected"><span>USD</span> <i data-feather="chevron-down"></i></button>
                        <ul class="onhover-show-div">
                            <li class="unit">USD</li>
                            <li class="unit">EUR</li>
                            <li class="unit">INR</li>
                            <li class="unit">CNY</li>
                        </ul>
                    </div>
                    <div class="dropdown select-dropdown" id="translate">
                        <button id="languageSelected"><span>English</span> <i data-feather="chevron-down"></i></button>
                        <ul class="onhover-show-div">
                            <li class="lang">English</li>
                            <li class="lang">Chinese</li>
                            <li class="lang">Arabic</li>
                            <li class="lang">Russian</li>
                        </ul>
                    </div>
                </div>

                <!-- Icon Menu Start -->
                <ul class="icon-menu">
                    <li>
                        <button class="search-button"><i data-feather="search"></i></button>
                        <!-- Search Input Start -->
                        <div class="search-full">
                            <div class="input-group">
                    <span class="input-group-text">
                      <i data-feather="search"></i>
                    </span>
                                <input type="text" class="form-control search-type" placeholder="Search here..">
                                <span class="input-group-text close-search">
                      <i data-feather="x"></i>
                    </span>
                            </div>

                            <!-- Suggestion Start -->
                            <div class="search-suggestion">
                                <ul>
                                    <li>
                                        <div class="product-cart media">
                                            <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                            <div class="media-body">
                                                <a href="javascript:void(0)">
                                                    <h6>Women’s long sleeve Jacket</h6>
                                                </a>
                                                <ul class="rating p-0 mb">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-0 mt-1">$280.00</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-cart media">
                                            <img src="{{asset('frontendAsset')}}/assets/images/fashion/product/front/5.jpg" class="img-fluid blur-up lazyload" alt="">
                                            <div class="media-body">
                                                <a href="javascript:void(0)">
                                                    <h6>Shirt short mini dresses</h6>
                                                </a>
                                                <ul class="rating p-0">
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fill" data-feather="star"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-0 mt-1">$35.00</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Suggestion Start -->
                        </div>
                        <!-- Search Input End -->
                    </li>

                    <li class="user">
                        <div class="dropdown user-dropdown">
                            <a href="javascript:void(0)"><i data-feather="user"></i></a>
                            <ul class="onhover-show-div">

                                @if(\Auth::check())
                                    <li><a href="{{route('user.dashboard')}}">Profile</a></li>
                                    <li><a href="{{route('user.logout')}}">Logout</a></li>
                                @else
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                @endif
                            </ul>
                        </div>
                    </li>

                    <li>

                        <div class="dropdown whislist-dropdown">
                            @if(Auth::check())
                            @php $wishlist_count = \App\Models\Wishlist::where('User_id',Auth::user()->id)->count(); @endphp
                            <a href="{{route('wishlist')}}"><i data-feather="heart"></i> <span class="notification-label">{{$wishlist_count}}</span></a>
                                @if($wishlist_count=='')
                            <div class="onhover-show-div">
                                <a href="{{route('wishlist')}}"> <img src="{{asset('frontendAsset')}}/assets/icons/svg/box.svg" class="img-fluid" alt="box"> </a>
                                <div class="content">
                                    <a href="{{route('wishlist')}}">
                                        <h6>Your wishlist empty !!</h6>
                                        <p>explore more and shortlist items.</p>
                                    </a>
                                </div>
                            </div>
                            @endif

                        </div>
                    </li>
                @endif
                    <!-- Cart Menu Start -->
                    <li>
                        <div class="dropdown shopingbag">
                            <a href="javascript:void(0)" class="cart-button"><i data-feather="shopping-bag"></i>
                            @if(Auth::check())
                                @php $product_count = \App\Models\Cart::where('user_id',Auth::user()->id)->sum('quantity'); @endphp
                                <span class="notification-label">{{$product_count}}</span></a>
                            @endif
                            <a href="javascript:void(0)" class="overlay-cart overlay-common"></a>
                            <div class="onhover-cart-dropdown">
                                <div class="onhover-show-div">
                                    <div class="dropdown-header">
                                        <div class="control">
                                            <a href="cart.html">Shopping Cart</a>
                                            <button class="back-cart"><i data-feather="arrow-right"></i></button>
                                        </div>
                                    </div>

                                    <div class="card-wrap custom-scroll">
                                        <!-- Cart Item Start -->
                                        @php $product = \App\Models\Cart::where('user_id',Auth::id())->get(); @endphp
                                    @foreach($product as $item)
                                            @php $p = \App\Models\Product::find($item->product_id); @endphp
                                        <div class="cart-card media">
                                            <a > <img src="{{asset($p->image_one)}}" class="img-fluid" alt="product"> </a>
                                            <div class="media-body">
                                                <a> <h6>{{$p->name}}</h6></a>
                                                <span>{{$item->price}} TK</span>
                                                <div> Quantity : {{$item->quantity}}</div>
                                            </div>
                                           <a href="{{route('bag.delete',['id'=>$item->id])}}"><button class="remove-cart"><i data-feather="x"></i></button></a>
                                        </div>
                                    @endforeach
                                        <!-- Cart Item End -->
                                    </div>
                                    <div class="dropdown-footer">
                                        <div class="freedelevery">
                                            <p class="terms-condition">FREE SHIPPING! Continue Shopping to add more product to you cart and receive free shipping for orders over <strong>$500</strong></p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
                                            </div>
                                        </div>
                                        <div class="total-price">
                                            <span>Total</span>
                                            <span>$450</span>
                                        </div>

                                        <div class="btn-group block-group">
                                            <a href="{{route('cart')}}" class="btn-solid">View Cart</a>
                                            <a href="payment.html" class="btn-outline">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Cart Menu End -->
                </ul>
                <!-- Icon Menu End -->
            </div>
            <!-- Menu Right End  -->
        </div>
    </div>
</header>
