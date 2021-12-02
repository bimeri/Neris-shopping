@extends('welcome')
@section('title', 'Contact')
@section('content')
<div class="row">
    <div class="w3-white w3-round-large cc">
    <h2 class="center w3-large double font">Contact Us</h2>
        <div>
            <div class="row">
                <div class="col-md-7">
                    <iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Newbury+Street,+Boston,+MA,+United+States&amp;aq=1&amp;oq=NewBoston,+MA,+United+States&amp;sll=42.347238,-71.084011&amp;sspn=0.014099,0.033023&amp;ie=UTF8&amp;hq=Newbury+Street,+Boston,+MA,+United+States&amp;t=m&amp;ll=42.348994,-71.088248&amp;spn=0.001388,0.006276&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe>
                    <div class="absoluteBlk">
                        <div class="w3-margin-left">
                            <h4>Contact Details</h4>
                                <h5 class="w3-text-orange">
                                    2601 Mission St.<br/>
                                    Utah<br/><br/>
                                    17179370305
                                    {{-- emilianomaltipoo@gmail.com --}}
                                    <br/>
                                    ﻿Tel +17 072 347 361<br/>
                                    {{--  Fax 123-456-5679<br/>  --}}
                                </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <form action="{{ route('send.email') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="first_name">Name <span>*</span></label>
                                <input type="text" class="form-control" id="first_name" value="" required>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="email_address">Email Address <span>*</span></label>
                                <input type="email" class="form-control" id="email_address" value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="postcode">Subject <span>*</span></label>
                                <input type="text" class="form-control" id="postcode" value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="phone_number">Message <span>*</span></label>
                                <textarea rows="3" id="textarea" maxlength="50" name="message" class="form-control" min="0" value="" required></textarea>
                            </div>

                            <div class="col-12 mb-15">
                                <input type="submit" class="btn karl-checkout-btn" value="Place Order">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
