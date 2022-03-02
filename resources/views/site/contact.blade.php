@extends('layout.main')

@section('title', 'liên hệ')

@section('contact')
      <!-- contact area start -->
      <div class="contact-area mtb-60px">
                <div class="container">
                    <div class="contact-map mb-10">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-row-2">
                        <div class="col-lg-4 col-md-5 mb-lm-30px">
                            <div class="contact-info-wrap">
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="ion-android-call"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p><a href="tel://0123456789">0123456789</a></p>
                                        <p><a href="tel://0123456789">0123456789</a></p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="ion-android-globe"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p><a href="mailto://urname@email.com">demo@example.com</a></p>
                                        <p><a href="mailto://urwebsitenaem.com">demo@example.com</a></p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="ion-android-pin"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p>Address goes here,</p>
                                        <p>Address goes here,</p>
                                    </div>
                                </div>
                                <div class="contact-social">
                                    <h3>Follow Us</h3>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="contact-form">
                                <div class="contact-title mb-30">
                                    <h2>Get In Touch</h2>
                                </div>
                                <form class="contact-form-style" id="contact-form" action="http://whizthemes.com/nazmul/php/mail.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input name="name" placeholder="Name*" type="text" />
                                        </div>
                                        <div class="col-lg-6">
                                            <input name="email" placeholder="Email*" type="email" />
                                        </div>
                                        <div class="col-lg-12">
                                            <input name="subject" placeholder="Subject*" type="text" />
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="message" placeholder="Your Message*"></textarea>
                                            <button class="submit" type="submit">SEND</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact area end -->
@stop()