<!-- ****** Footer Area Start ****** -->
<footer class="footer_area">
    <div class="container">
        <div class="row">
            <!-- Single Footer Area Start -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single_footer_area">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ URL::asset('img/pp.jpg') }}" alt="" width="100" height="100"></a>
                    </div>
                    <div class="copywrite_text d-flex align-items-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i>  &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
            <!-- Single Footer Area Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <div class="single_footer_area">
                    <ul class="footer_widget_menu">
                        <li><a href="{{route('aboutus.page')}}">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="{{ route('contact.page') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- Single Footer Area Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <div class="single_footer_area">
                    <ul class="footer_widget_menu">
                        <li><a href="#">My Account</a></li>
                        <li><a href="{{route('shipping.page')}}">Shipping</a></li>
                        <li><a href="#">Our Policies</a></li>
                        <li><a href="#">Afiliates</a></li>
                    </ul>
                </div>
            </div>
            <!-- Single Footer Area Start -->
            <div class="col-12 col-lg-5">
                <div class="single_footer_area">
                    <div class="footer_heading mb-30">
                        <h6>Subscribe to our newsletter</h6>
                    </div>
                    <div class="subscribtion_form">
                        <form action="{{ route('subscribe') }}" method="post">
                            @csrf
                            <input type="email" name="email" class="mail" placeholder="Your email here" required>
                            <button type="submit" class="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>

        <!-- Footer Bottom Area Start -->
        <div class="footer_bottom_area">
            <div class="row">
                <div class="col-12">
                    <div class="footer_social_area text-center">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="https:www.facebook.com/profile.php?100070803320972"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="w3-margin w3-jumbo" target="_blank" href="https://api.whatsapp.com/send?phone=17179370305&text=Hello Dr. Micheal Adonis, I really like you product as seen on your website, will like to have some" style="width: 12%; position: fixed; bottom: 3px; left: 10px; z-index: 10003"><i class="fa fa-whatsapp w3-text-green w3-jumbo center" style="justify-content:center; display: flex"></i></a>
</footer>
<!-- ****** Footer Area End ****** -->
