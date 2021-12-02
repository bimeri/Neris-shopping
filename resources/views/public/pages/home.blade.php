@extends('welcome')
@section('title', 'Home')
@section('content')
<!-- ****** Top Discount Area Start ****** -->
<div class="w3-row">
    <div class="w3-container">
        <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area w3-blue">
                <h5 >Free Shipping &amp; Returns</h5>
                <h6><a href="#">BUY NOW</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for early ordered Herbs</h5>
                <h6>USE CODE: Colorlib</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for Second purchase</h5>
                <h6>USE CODE: Colorlib</h6>
            </div>
        </section>
    </div>
</div>
<!-- ****** Top Discount Area End ****** -->

<!-- ****** Welcome Slides Area Start ****** -->
<section class="welcome_area">
    <div class="welcome_slides owl-carousel">
        <!-- Single Slide Start -->
        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/new/acapo.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="welcome_slide_text">
                            <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                            <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2>
                            <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide Start -->
        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/new/bana.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="welcome_slide_text">
                            <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Explore more on E-Doctor Herbs</h6>
                            <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer Collection</h2>
                            <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide Start -->
        <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/new/banner-1.png);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="welcome_slide_text">
                            <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Welcome to the Top Herb seller</h6>
                            <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Original Quality</h2>
                            <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Welcome Slides Area End ****** -->

<!-- ****** Top Catagory Area Start ****** -->
<section class="top_catagory_area d-md-flex clearfix">
    <!-- Single Catagory -->
    <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/new/onsale/wana-mango.png);">
        <div class="catagory-content">
            <h6>On Accesories</h6>
            <h2>Sale 30%</h2>
            <a href="#" class="btn karl-btn">SHOP NOW</a>
        </div>
    </div>
    <!-- Single Catagory -->
    <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/new/onsale/wax.jpg);">
        <div class="catagory-content">
            <h6>in Bags excepting the new collection</h6>
            <h2>Designer bags</h2>
            <a href="#" class="btn karl-btn">SHOP NOW</a>
        </div>
    </div>
</section>
<!-- ****** Top Catagory Area End ****** -->

<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>New Arrivals</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="karl-projects-menu mb-100">
        <div class="text-center portfolio-menu">
            {!! $categories !!}
        </div>
    </div>

    <div class="container">
        <div class="row karl-new-arrivals">
            {!! $items !!}
        </div>
    </div>
</section>
<!-- ****** New Arrivals Area End ****** -->

 <!-- ****** Offer Area Start ****** -->
 <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(img/new/hybrid.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-end justify-content-end">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                    <h2>Green herm <span class="karl-level">Hot</span></h2>
                    <p>* Free shipping until 25 Dec 2021</p>
                    <div class="offer-product-price">
                        <h3><span class="regular-price">$299.90</span> $249.90</h3>
                    </div>
                    <a href="#" class="btn karl-btn mt-30">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Offer Area End ****** -->
@include('public.src.includes.testimonial')
@endsection
