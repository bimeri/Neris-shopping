<!-- ****** Header Area Start ****** -->
<header class="header_area bg-img background-overlay-white" style="background-image: url(img/new/acapo.jpg);">
    <!-- Top Header Area Start -->
    <div class="top_header_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-end">

                <div class="col-12 col-lg-7">
                    <div class="top_single_area d-flex align-items-center">
                        <!-- Logo Area -->
                        <div class="top_logo">
                            <a href="#"><img src="{{ URL::asset('img/p.png') }}" alt="" width="150" height="150"></a>
                        </div>

                        <!-- Cart & Menu Area -->
                        <div class="header-cart-menu d-flex align-items-center ml-auto">
                            <!-- Cart Area -->
                            <div class="cart">
                                @if(Auth::check())
                                    {!! $cart !!}
                                @else
                                    <a href="{{ route('loginPage') }}" id="header-cart-btn"><i class="fa fa-lock w3-hover-text-red w3-medium"></i> Sign in</a>
                                @endif
                            </div>
                            <div class="header-right-side-menu ml-15">
                                <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Top Header Area End -->
    <div class="main_header_area" >
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 d-md-flex justify-content-between">
                    <!-- Header Social Area -->
                    <div class="header-social-area">
                        <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="https:www.facebook.com/profile.php?100070803320972"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Menu Area -->
                    <div class="main-menu-area">
                        <nav class="navbar navbar-expand-lg align-items-start">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                            <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item @if(Request::is('/')) active @endif"><a class="nav-link" href="{{ route('landingPage') }}">Home</a></li>
                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                            <a class="dropdown-item" href="{{ route('landingPage') }}">Home</a>
                                            <a class="dropdown-item" href="shop.html">Shop</a>
                                            <a class="dropdown-item" href="product-details.html">Product Details</a>
                                            <a class="dropdown-item" href="cart.html">Cart</a>
                                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                                        </div>
                                    </li> --}}
                                    <li class="nav-item @if(Request::is('about-us')) active @endif"><a class="nav-link" href="{{route('aboutus.page')}}">About Us</a></li>
                                    <li class="nav-item @if(Request::is('purchase-procedure')) active @endif"><a class="nav-link" href="{{route('purchase.page')}}">Purchase Procedure</a></li>
                                    <li class="nav-item @if(Request::is('shipping')) active @endif"><a class="nav-link" href="{{route('shipping.page')}}">Shipping</a></li>
                                    <li class="nav-item @if(Request::is('health')) active @endif"><a class="nav-link" href="{{ route('health.page') }}">Health Guarantee</a></li>
                                    <li class="nav-item @if(Request::is('contact-us')) active @endif"><a class="nav-link" href="{{ route('contact.page') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Help Line -->
                    <div class="help-line">
                        <a href="tel:+17179370305"><i class="ti-headphone-alt"></i> +17179370305</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ****** Header Area End ****** -->
