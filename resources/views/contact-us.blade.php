<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>eTabeb Contact US</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
        
    <!--====== lineicons CSS ======-->
    <link rel="stylesheet" href="assets/css/lineicons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body dir="{{app()->getLocale()=='en' ? 'ltr' : 'rtl' }}" style="{{app()->getLocale()=='en' ? 'text-align: left!important' :  'text-align: right!important' }};

;">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->

    <header class="header-area">
    @include('header')
    </header>

    <!--====== HEADER PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->
    

    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->
    

    <!--====== ABOUT PART ENDS ======-->
    
    
    <!--====== DOWNLOAD PART START ======-->
    
  


    <section id="why" class="services-area pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-25">
                    <br> <br>
                        <h3 class="title">{{__('messages.contact1')}}</h3>
                        <p class="text">{!!__('messages.contact2')!!}</p>


                        <ul class="contact-list">
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-phone"></i> <a dir="ltr"   href="tel:966920023452"> +966 9200 23452 </a></p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><a href="mailto:info@etabeb.com"><i class="lni lni-envelope"></i> info@etabeb.com</a></p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><a   href="https://www.etabeb.com/"><i class="lni lni-world"></i> www.etabeb.com</a></p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-map"></i>
                                            
                                            {{__('messages.footer2')}}
                                           </p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                            </ul> <!-- contact list -->
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
       
        </div> <!-- container -->
    </section>
    
    
    <!--====== DOWNLOAD PART ENDS ======-->
    
    <!--====== PART START ======-->
    
    <footer id="footer" class="footer-area">
        
        <div class="footer-shape shape-1"></div>
        <div class="footer-shape shape-2"></div>
        <div class="footer-shape shape-3"></div>
        <div class="footer-shape shape-4"></div>
        <!-- <div class="footer-shape shape-5"></div> -->
        <!-- <div class="footer-shape shape-6"></div> -->
        <div class="footer-shape shape-7"></div>
        <div class="footer-shape shape-8">
            <img class="svg" src="assets/images/footer-shape.svg" alt="Shape">
        </div>
        
        <div class="footer-widget pt-30 pb-80" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <a class="logo" href="#" >
                                <img src="assets/images/eTabeb.comPrimaryTransparent.png" alt="Logo">
                            </a>
                            <p class="text">
                                {{__('messages.footer1')}}
                            </p>
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/eTabeb.co"><i class="lni lni-facebook"></i></a></li>
                                <li><a  target="_blank" href="https://twitter.com/etabeb?lang=en"><i class="lni lni-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/etabeb/?hl=en"><i class="lni lni-instagram"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/channel/UCusdq14mMoGejfSNzAvqB-A"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div> 
                  <!-- <div class="col-lg-5 col-md-6">
                        <div class="footer-link d-flex flex-wrap">
                           <div class="footer-link-wrapper mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Links</h4>
                                </div>
                                <ul class="link">
                                    <li><a class="" href="#">Home</a></li>
                                    <li><a class="" href="#">Features</a></li>
                                    <li><a class="" href="#">Testimonial</a></li>
                                    <li><a class="" href="#">Pricing</a></li>
                                    <li><a class="" href="#">Contact</a></li>
                                </ul>
                            </div>    
                            
                            <div class="footer-link-wrapper mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Support</h4>
                                </div>
                                <ul class="link">
                                    <li><a class="" href="#">FAQ</a></li>
                                    <li><a class="" href="#">Privacy Policy</a></li>
                                    <li><a class="" href="#">Terms Of Use</a></li>
                                    <li><a class="" href="#">Legal</a></li>
                                    <li><a class="" href="#">Site Map</a></li>
                                </ul>
                            </div>    
                            
                        </div> 
                    </div> -->
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-contact mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">{{__('messages.footer4')}}</h4>
                            </div>
                            <ul class="contact-list">
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-phone"></i> <a dir="ltr"   href="tel:966920023452"> +966 9200 23452 </a></p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><a href="mailto:info@etabeb.com"><i class="lni lni-envelope"></i> info@etabeb.com</a></p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><a   href="https://www.etabeb.com/"><i class="lni lni-world"></i> www.etabeb.com</a></p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-map"></i>
                                            
                                            {{__('messages.footer2')}}
                                           </p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                            </ul> <!-- contact list -->
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       <center>

                       <div class="copyright  ">
                            <div class="copyright-text text-center">
                                <p class="text">{{__('messages.footer3')}}© <a rel="nofollow" href="https://etabeb.com">eTabeb.com</a> 2024</p>
                            </div> 

                        </div> <!-- copyright -->
                    </center>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->
    
    <!--====== PART START ======-->
    
<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div> 
            </div>
        </div>
    </section>
-->
    
    <!--====== PART ENDS ======-->
    




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    
    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>
    
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
</body>

</html>
