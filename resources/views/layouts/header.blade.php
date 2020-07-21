<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Right Left</title>
      <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/helper.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
   </head>
   <body>
      <header>
         <div class="header-main sticky pt-sm-10 pb-sm-10 pt-md-10 pb-md-10">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-3 col-md-6 col-6">
                     <div class="logo">
                        <a href="/">
                        <img src="{{asset('assets/img/logo/logo.png')}}" width="250" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-6 d-none d-lg-block">
                     <div class="main-header-inner">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li class="active"><a href="/">Home</a></li>
                                 <li class=""><a href="#">About Us</a></li>
                                 <li class=""><a href="{!! route('front.products') !!}">Products</a></li>
                                 <li class=""><a href="#">Contact Us</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-6 ml-auto">
                     <div class="header-setting-option">
                        <div class="search-wrap">
                           <button type="submit" class="search-trigger"><i class="ion-ios-search-strong"></i></button>
                        </div>
                        <div class="header-mini-cart">
                           <div class="mini-cart-btn">
                              <i class="ion-bag"></i>
                              <span class="cart-notification">2</span>
                           </div>
                           <ul class="cart-list">
                              <li>
                                 <div class="cart-img">
                                    <a href="product-details.html"><img src="{{asset('assets/img/cart/cart-1.jpg')}}"
                                       alt=""></a>
                                 </div>
                                 <div class="cart-info">
                                    <h4><a href="product-details.html">simple product 09</a></h4>
                                    <span>$60.00</span>
                                 </div>
                                 <div class="del-icon">
                                    <i class="fa fa-times"></i>
                                 </div>
                              </li>
                              <li>
                                 <div class="cart-img">
                                    <a href="product-details.html"><img src="{{asset('assets/img/cart/cart-2.jpg')}}"
                                       alt=""></a>
                                 </div>
                                 <div class="cart-info">
                                    <h4><a href="product-details.html">virtual product 10</a></h4>
                                    <span>$50.00</span>
                                 </div>
                                 <div class="del-icon">
                                    <i class="fa fa-times"></i>
                                 </div>
                              </li>
                              <li class="mini-cart-price">
                                 <span class="subtotal">subtotal : </span>
                                 <span class="subtotal-price ml-auto">$110.00</span>
                              </li>
                              <li class="checkout-btn">
                                 <a href="#">checkout</a>
                              </li>
                           </ul>
                        </div>
						@guest
						<div class="settings-top">
                           <a href="{{ route('front.login') }}">
                              <i class="fa fa-user"></i>Login
                           </a>
                        </div>
						@endguest
						@auth
                        <div class="settings-top">
                           <div class="settings-btn">
                              <i class="ion-android-settings"></i>
                           </div>
                           <ul class="settings-list">
                              <li>
                                 <i class="fa fa-user"></i> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                 <ul>
                                    <li><a href="{{ route('front.profile.show', [Auth::user()->id, Auth::user()->slug]) }}">My Account</a></li>
                                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
									</li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
						@endauth
                     </div>
                  </div>
                  <div class="col-12 d-block d-lg-none">
                     <div class="mobile-menu"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="box-search-content search_active block-bg close__top">
            <form class="minisearch" action="#">
               <div class="field__search">
                  <input type="text" placeholder="Search Our Catalog">
                  <div class="action">
                     <a href="#"><i class="fa fa-search"></i></a>
                  </div>
               </div>
            </form>
            <div class="close__wrap">
               <span>close</span>
            </div>
         </div>
      </header>   
	@yield('content')
	
	<footer>
         <div class="newsletter-area bg-gray pt-64 pb-64 pt-sm-56 pb-sm-58">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="newsletter-inner">
                        <div class="newsletter-title">
                           <h3>newsletter signup</h3>
                        </div>
                        <div class="newsletter-box">
                           <form id="mc-form">
                              <input type="email" id="mc-email" autocomplete="off" placeholder="Your Email address">
                              <button class="newsletter-btn" id="mc-submit"><i class="ion-android-send"></i></button>
                           </form>
                        </div>
                     </div>
                     <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div>
                        <div class="mailchimp-success"></div>
                        <div class="mailchimp-error"></div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 ml-auto">
                     <div class="social-share-area">
                        <h3> follow us</h3>
                        <div class="social-icon">
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-youtube"></i></a>
                           <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-widget-area pt-62 pb-56 pb-md-26 pt-sm-56 pb-sm-20">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="footer-widget">
                        <div class="footer-widget-title">
                           <h3>shipping and delivery</h3>
                        </div>
                        <div class="footer-widget-body">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                        <div class="footer-widget-title mt-20">
                           <h3>payment method</h3>
                        </div>
                        <div class="footer-widget-body">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6">
                     <div class="footer-widget">
                        <div class="footer-widget-title">
                           <h3>useful link</h3>
                        </div>
                        <div class="footer-widget-body">
                           <ul class="useful-link">
                              <li><a href="#">Delivery</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">About us</a></li>
                              <li><a href="#">Terms & Conditions</a></li>
                              <li><a href="#">best sales</a></li>
                              <li><a href="#">wishlist</a></li>
                              <li><a href="#">my account</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6">
                     <div class="footer-widget">
                        <div class="footer-widget-title">
                           <h3>our company</h3>
                        </div>
                        <div class="footer-widget-body">
                           <ul class="useful-link">
                              <li><a href="#">Delivery</a></li>
                              <li><a href="#">Terms & Conditions</a></li>
                              <li><a href="#">About us</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">contact us</a></li>
                              <li><a href="#">site map</a></li>
                              <li><a href="#">login</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="footer-widget">
                        <div class="footer-widget-title">
                           <div class="footer-logo">
                              <a href="/">
                              <img src="{{asset('assets/img/logo/logo.png')}}" width="250" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="footer-widget-body">
                           <ul class="address-box">
                              <li>
                                 <span>ADDRESS:</span>
                                 <p>Beirut - Lebanon</p>
                              </li>
                              <li>
                                 <span>call us now:</span>
                                 <p>+961 70 666 777</p>
                              </li>
                              <li>
                                 <span>email:</span>
                                 <p><a href="#">info@rightleft.com</a></p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom-area">
            <div class="container">
               <div class="bdr-top pt-18 pb-18">
                  <div class="row align-items-center">
                     <div class="col-md-12 order-2 order-md-1">
                        <div class="copyright-text center">
                           <p>2020 &copy; copyright. All Rights Reserved</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="scroll-top not-visible">
         <i class="fa fa-angle-up"></i>
      </div>
      <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
      <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
      <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/js/plugins.js')}}"></script>
      <script src="{{asset('assets/js/ajax-mail.js')}}"></script>
      <script src="{{asset('assets/js/main.js')}}"></script>
   </body>
</html>