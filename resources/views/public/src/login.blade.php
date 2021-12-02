@extends('welcome')
@section('title', 'Login')
@section('content')
<div class="row">
    <div class="w3-white w3-round-large cc">
        <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if(count($errors) > 0)
                            <center>
                                <div class="w3-container w3-margin-bottom w3-text-red animate__animated animate__shakeX red-text w3-card-8 w3-margin-top materialize-red lighten-4" style="display: block; position: relative; z-index: 30">
                                    <span onclick="this.parentElement.style.display='none'" class="close right w3-padding-16 w3-margin-top" style="cursor: pointer">x</span>
                                    <ul id="error" class="w3-margin w3-padding">
                                        @foreach($errors->all() as $error)
                                            <li style="text-align: center;">{{ $error }} </li>
                                        @endforeach
                                        <center><i class="mdi-action-thumb-down" style="font-size: 25px;"></i></center>
                                    </ul>
                                </div>
                            </center>
                        @endif
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h5 class="center w3-large font bold">Sign In</h5>
                                <p>Enter your credentials to sign in if you already have an account</p>
                            </div>
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="email1">Email Address <span>*</span></label>
                                        <input type="email" name="email" class="form-control" id="email1" min="0" value="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="password1">Password <span>*</span></label>
                                        <input type="password" name="password" class="form-control" id="password1" value="">
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember" value="{{ old('rememberMe') }}"/>
                                            <span class="w3-text-blue">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label>
                                            <span class="w3-text-blue">Forgot password</span> <i class="fa fa-lock w3-text-red"></i>
                                        </label>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="submit" class="btn karl-checkout-btn" value="Sign in">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto w3-border w3-round-medium">
                        <div class="order-details-confirmations">
                            <div class="cart-page-heading">
                                <h5 class="center bold w3-large font">Registration</h5>
                                <p>Please fill the form bellow to register</p>
                            </div>
                            <form action="{{ route('user.register') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="full_name">Full Name <span>*</span></label>
                                        <input type="text" name="full_name" class="form-control" id="full_name" value="{{ old('full_name') }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="company">Email</label>
                                        <input type="email" name="email" class="form-control" id="company" value="{{ old('email') }}">
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="country">Country <span>*</span></label>
                                        {!! $countries !!}
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="region">Region <span>*</span></label>
                                        <input type="text" name="region" class="form-control mb-3" id="street_address" value="{{ old('region') }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="city">Town/City <span>*</span></label>
                                        <input type="text" name="state" class="form-control" id="city" value="{{ old('state') }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="postcode">Postcode <span>*</span></label>
                                        <input type="text" name="postal_code" class="form-control" id="postcode" value="{{ old('postal_code') }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">Phone No <span>*</span></label>
                                        <input type="number" name="contact" class="form-control" id="phone_number" min="0" value=""{{ old('contact') }}>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Date of birth <span>*</span></label>
                                        <input type="date" name="date_of_birth" class="form-control" id="dob" value="{{ old('date_of_birth') }}">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Gender <span>*</span></label>
                                        <select id="country" name="gender" class="form-control">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="femail">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Password <span>*</span></label>
                                        <input type="password" name="password" class="form-control" id="dob" value="{{ old('password') }}">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Confirm Password <span>*</span></label>
                                        <input type="password" name="confirm_password" class="form-control" id="dob" value="{{ old('confirm_password') }}">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Upload Profile (optional) <span>*</span></label>
                                        <div class="btn">
                                            <input type="file" name="profile_image" value="{{ old('profile_image') }}" id="imgInp">
                                          </div>
                                          <div class="file-path-wrapper">
                                              <img id="blah" src="#" alt="upload profile" height="40" width="100%"/>
                                            {{-- <input class="file-path validate" name="profile" value="{{ old('profile_image') }}" type="text" placeholder="uplaod profile"> --}}
                                          </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox d-block mb-2">
                                            <input type="checkbox" name="terms_and_services" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Terms and conitions</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-block">
                                            <input type="checkbox" name="subscribe" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Subscribe to our newsletter</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="submit" class="btn karl-checkout-btn" value="Sign up">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->
    </div>
</div>
@endsection
