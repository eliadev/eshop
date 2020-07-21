<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Right Left</title>
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/font-awesome.min.css" rel="stylesheet">
      <link href="assets/css/ionicons.min.css" rel="stylesheet">
      <link href="assets/css/helper.min.css" rel="stylesheet">
      <link href="assets/css/plugins.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <header>
         <div class="header-main sticky pt-sm-10 pb-sm-10 pt-md-10 pb-md-10">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-3 col-md-6 col-6">
                     <div class="logo">
                        <a href="index.html">
                        <img src="assets/img/logo/logo.png" width="250" alt="Brand logo">
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-6 d-none d-lg-block">
                     <div class="main-header-inner">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li class="active"><a href="index.html">Home</a></li>
                                 <li class=""><a href="about.html">About Us</a></li>
                                 <li class=""><a href="products.html">Products</a></li>
                                 <li class=""><a href="contact.html">Contact Us</a></li>
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
                                    <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg"
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
                                    <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg"
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
                        <div class="settings-top">
                           <div class="settings-btn">
                              <i class="ion-android-settings"></i>
                           </div>
                           <ul class="settings-list">
                              <li>
                                 my account <i class="fa fa-angle-down"></i>
                                 <ul>
                                    <li><a href="#">my account</a></li>
                                    <li><a href="#">login</a></li>
                                    <li><a href="#">register</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
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
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="checkout-page-wrapper pt-100 pb-90 pt-sm-58 pb-sm-54">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="checkoutaccordion" id="checkOutAccordion">
                            <div class="card">
                                <h3>Returning Customer? <span data-toggle="collapse" data-target="#logInaccordion">Click Here To Login</span></h3>
                                <div id="logInaccordion" class="collapse" data-parent="#checkOutAccordion">
                                    <div class="card-body">
                                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                        <div class="login-reg-form-wrap mt-20">
                                            <div class="row">
                                                <div class="col-lg-7 m-auto">
                                                    <form action="#" method="post">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="single-input-item">
                                                                    <input type="email" placeholder="Enter your Email" required />
                                                                </div>
                                                            </div>
        
                                                            <div class="col-md-12">
                                                                <div class="single-input-item">
                                                                    <input type="password" placeholder="Enter your Password" required />
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="single-input-item">
                                                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                                                <div class="remember-meta">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="rememberMe" required />
                                                                        <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                                                    </div>
                                                                </div>
        
                                                                <a href="#" class="forget-pwd">Forget Password?</a>
                                                            </div>
                                                        </div>
        
                                                        <div class="single-input-item">
                                                            <button class="check-btn sqr-btn">Login</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="card">
                                <h3>Have A Coupon? <span data-toggle="collapse" data-target="#couponaccordion">Click Here To Enter Your Code</span></h3>
                                <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                                    <div class="card-body">
                                        <div class="cart-update-option">
                                            <div class="apply-coupon-wrapper">
                                                <form action="#" method="post" class=" d-block d-md-flex">
                                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                                    <button class="check-btn sqr-btn">Apply Coupon</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h2>Billing Details</h2>
                            <div class="billing-form-wrap">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label for="f_name" class="required">First Name</label>
                                                <input type="text" id="f_name" placeholder="First Name" required />
                                            </div>
                                        </div>
        
                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label for="l_name" class="required">Last Name</label>
                                                <input type="text" id="l_name" placeholder="Last Name" required />
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="single-input-item">
                                        <label for="email" class="required">Email Address</label>
                                        <input type="email" id="email" placeholder="Email Address" required />
                                    </div>
        
                                    <div class="single-input-item">
                                        <label for="com-name">Company Name</label>
                                        <input type="text" id="com-name" placeholder="Company Name" />
                                    </div>
        
                                    <div class="single-input-item">
                                        <label for="country" class="required">Country</label>
                                        <select name="country nice-select" id="country">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="India">India</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="England">England</option>
                                            <option value="London">London</option>
                                            <option value="London">London</option>
                                            <option value="Chaina">China</option>
                                        </select>
                                    </div>
        
                                    <div class="single-input-item">
                                        <label for="street-address" class="required mt-20">Street address</label>
                                        <input type="text" id="street-address" placeholder="Street address Line 1" required />
                                    </div>
        
                                    <div class="single-input-item">
                                        <input type="text"  placeholder="Street address Line 2 (Optional)" />
                                    </div>
        
                                    <div class="single-input-item">
                                        <label for="town" class="required">Town / City</label>
                                        <input type="text" id="town"  placeholder="Town / City" required />
                                    </div>
        
                                    <div class="single-input-item">
                                        <label for="state">State / Divition</label>
                                        <input type="text" id="state"  placeholder="State / Divition" />
                                    </div>
        
                                    <div class="single-input-item">
                                        <label for="postcode" class="required">Postcode / ZIP</label>
                                        <input type="text" id="postcode"  placeholder="Postcode / ZIP" required />
                                    </div>
        
                                    <div class="single-input-item">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone"  placeholder="Phone" />
                                    </div>
        
                                    <div class="checkout-box-wrap">
                                        <div class="single-input-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="create_pwd">
                                                <label class="custom-control-label" for="create_pwd">Create an account?</label>
                                            </div>
                                        </div>
                                        <div class="account-create single-form-row">
                                            <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                            <div class="single-input-item">
                                                <label for="pwd" class="required">Account Password</label>
                                                <input type="password" id="pwd"  placeholder="Account Password" required />
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="checkout-box-wrap">
                                        <div class="single-input-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ship_to_different">
                                                <label class="custom-control-label" for="ship_to_different">Ship to a different address?</label>
                                            </div>
                                        </div>
                                        <div class="ship-to-different single-form-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="single-input-item">
                                                        <label for="f_name_2" class="required">First Name</label>
                                                        <input type="text" id="f_name_2" placeholder="First Name" required />
                                                    </div>
                                                </div>
        
                                                <div class="col-md-6">
                                                    <div class="single-input-item">
                                                        <label for="l_name_2" class="required">Last Name</label>
                                                        <input type="text" id="l_name_2" placeholder="Last Name" required />
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="single-input-item">
                                                <label for="email_2" class="required">Email Address</label>
                                                <input type="email" id="email_2" placeholder="Email Address" required />
                                            </div>
        
                                            <div class="single-input-item">
                                                <label for="com-name_2">Company Name</label>
                                                <input type="text" id="com-name_2" placeholder="Company Name" />
                                            </div>
        
                                            <div class="single-input-item">
                                                <label for="country_2" class="required">Country</label>
                                                <select name="country" id="country_2">
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="India">India</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="England">England</option>
                                                    <option value="London">London</option>
                                                    <option value="London">London</option>
                                                    <option value="Chaina">Chaina</option>
                                                </select>
                                            </div>
        
                                            <div class="single-input-item">
                                                <label for="street-address_2" class="required mt-20">Street address</label>
                                                <input type="text" id="street-address_2" placeholder="Street address Line 1" required />
                                            </div>
        
                                            <div class="single-input-item">
                                                <input type="text"  placeholder="Street address Line 2 (Optional)" />
                                            </div>
        
                                            <div class="single-input-item">
                                                <label for="town_2" class="required">Town / City</label>
                                                <input type="text" id="town_2"  placeholder="Town / City" required />
                                            </div>
        
                                            <div class="single-input-item">
                                                <label for="state_2">State / Divition</label>
                                                <input type="text" id="state_2"  placeholder="State / Divition" />
                                            </div>
        
                                            <div class="single-input-item">
                                                <label for="postcode_2" class="required">Postcode / ZIP</label>
                                                <input type="text" id="postcode_2"  placeholder="Postcode / ZIP" required />
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="single-input-item">
                                        <label for="ordernote">Order Note</label>
                                        <textarea name="ordernote" id="ordernote" cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-6">
                        <div class="order-summary-details mt-md-26 mt-sm-26">
                            <h2>Your Order Summary</h2>
                            <div class="order-summary-content mb-sm-4">
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="single-product.html">Suscipit Vestibulum <strong> × 1</strong></a></td>
                                                <td>$165.00</td>
                                            </tr>
                                            <tr>
                                                <td><a href="single-product.html">Ami Vestibulum suscipit <strong> × 4</strong></a></td>
                                                <td>$165.00</td>
                                            </tr>
                                            <tr>
                                                <td><a href="single-product.html">Vestibulum suscipit <strong> × 2</strong></a></td>
                                                <td>$165.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td><strong>$400</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td class="d-flex justify-content-center">
                                                    <ul class="shipping-type">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="flatrate" name="shipping" class="custom-control-input" checked />
                                                                <label class="custom-control-label" for="flatrate">Flat Rate: $70.00</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="freeshipping" name="shipping" class="custom-control-input" />
                                                                <label class="custom-control-label" for="freeshipping">Free Shipping</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>
                                                <td><strong>$470</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Order Payment Method -->
                                <div class="order-payment-method">
                                    <div class="single-payment-method show">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cashon" name="paymentmethod" value="cash" class="custom-control-input" checked  />
                                                <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="cash">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="directbank" name="paymentmethod" value="bank" class="custom-control-input" />
                                                <label class="custom-control-label" for="directbank">Direct Bank Transfer</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="bank">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account..</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="checkpayment" name="paymentmethod" value="check" class="custom-control-input" />
                                                <label class="custom-control-label" for="checkpayment">Pay with Check</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="check">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="paypalpayment" name="paymentmethod" value="paypal" class="custom-control-input" />
                                                <label class="custom-control-label" for="paypalpayment">Paypal <img src="assets/img/paypal-card.jpg" class="img-fluid paypal-card" alt="Paypal" /></label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="paypal">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </div>
                                    <div class="summary-footer-area">
                                        <div class="custom-control custom-checkbox mb-14">
                                            <input type="checkbox" class="custom-control-input" id="terms" required />
                                            <label class="custom-control-label" for="terms">I have read and agree to the website <a
                                                href="index.html">terms and conditions.</a></label>
                                        </div>
                                        <button type="submit" class="check-btn sqr-btn">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
                              <a href="index.html">
                              <img src="assets/img/logo/logo.png" width="250" alt="">
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
      <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
      <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
      <script src="assets/js/vendor/popper.min.js"></script>
      <script src="assets/js/vendor/bootstrap.min.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/ajax-mail.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>