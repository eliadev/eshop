@extends('layouts.header')
@section('content')
      <div class="hero-area">
         <div class="hero-slider-active slider-arrow-style slick-dot-style hero-dot">
            <div class="hero-single-slide hero-2 hero-2__style-4 d-flex align-items-center" style="background-image: url(assets/img/slider/slide-7.jpg);">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <div class="slider-content text-center">
                           <h3>Right Left Shop</h3>
                           <h1>big sale<br>50% off</h1>
                           <a href="shop-grid-left-sidebar.html" class="slider-btn slider-btn__2">shop now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="hero-single-slide hero-2 hero-2__style-4 d-flex align-items-center" style="background-image: url(assets/img/slider/slide-8.jpg);">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <div class="slider-content text-center ml-auto">
                           <h3>december 15-30, 2018</h3>
                           <h1>run way mega sale<br>up to 80% off</h1>
                           <a href="shop-grid-left-sidebar.html" class="slider-btn slider-btn__2">shop now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="page-section pt-100 pb-14 pt-sm-60 pb-sm-0">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section-title text-center pb-44">
                     <p>The latest featured products</p>
                     <h2>Featured products</h2>
                  </div>
               </div>
            </div>
            <div class="row spt slick-arrow-style">
				@foreach($products as $product)
				<div class="col-md-3 col-12">
					<div class="product-item mb-20">
						<div class="product-thumb">
							<a href="{{ route('front.product.show', [$product->id, $product->slug]) }}">
								<img src="{{ $product->getFirstMediaUrl('product') }}" alt="{{ $product->name }}">
							</a>
							<div class="box-label">
								<div class="product-label new">
									<span>new</span>
								</div>
							</div>
							<div class="product-action-link">
								<div class="product-action-link">
									<a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span></a>
									<a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="ion-ios-shuffle"></i></a>
								</div>
							</div>
						</div>
						<div class="product-description text-center">
							<div class="manufacturer">
							   <p><a href="#">Category Name</a></p>
							</div>
							<div class="product-name">
							   <h3><a href="{{ route('front.product.show', [$product->id, $product->slug]) }}">{{ $product->name }}</a></h3>
							</div>
							<div class="price-box">
								<span class="regular-price">$60.00</span>
								<span class="old-price"><del>${{ $product->price }}</del></span>
							</div>
							<div class="product-btn">
								<a class="buttons parallelogram" href="#"><i class="ion-bag"></i>Add to cart</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
            </div>
         </div>
      </div>
      <div class="banner-feature-area theme-color-4 pt-62 pb-60 pt-sm-56 pb-sm-20">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="banner-single-feature text-center mb-sm-30">
                     <i class="ion-paper-airplane"></i>
                     <h4>FREE DELIVERY</h4>
                     <p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempo</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="banner-single-feature text-center mb-sm-30">
                     <i class="ion-ios-time-outline"></i>
                     <h4>365-DAY HOME TRIAL</h4>
                     <p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempo</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="banner-single-feature text-center mb-sm-30">
                     <i class="ion-trophy"></i>
                     <h4>LIFETIME WARRANTY</h4>
                     <p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempo</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  <div class="modal" id="quick_view">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <div class="product-details-inner">
                     <div class="row">
                        <div class="col-lg-5 col-md-5">
                           <div class="product-large-slider mb-20 slider-arrow-style slider-arrow-style__style-2">
                              <div class="pro-large-img">
                                 <img src="assets/img/product/product-details-img1.jpg" alt="" />
                              </div>
                              <div class="pro-large-img">
                                 <img src="assets/img/product/product-details-img2.jpg" alt=""/>
                              </div>
                              <div class="pro-large-img">
                                 <img src="assets/img/product/product-details-img3.jpg" alt=""/>
                              </div>
                              <div class="pro-large-img">
                                 <img src="assets/img/product/product-details-img4.jpg" alt=""/>
                              </div>
                              <div class="pro-large-img">
                                 <img src="assets/img/product/product-details-img4.jpg" alt=""/>
                              </div>
                           </div>
                           <div class="pro-nav slick-padding2 slider-arrow-style slider-arrow-style__style-2">
                              <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img1.jpg" alt="" /></div>
                              <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg" alt="" /></div>
                              <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg" alt="" /></div>
                              <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg" alt="" /></div>
                              <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img5.jpg" alt="" /></div>
                           </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                           <div class="product-details-des pt-sm-30">
                              <h3>Product Title</h3>
                              <div class="pricebox">
                                 <span class="regular-price">$160.00</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                 Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst.
                              </p>
                              <div class="quantity-cart-box d-flex align-items-center mb-24">
                                 <div class="quantity">
                                    <div class="pro-qty"><input type="text" value="1"></div>
                                 </div>
                                 <div class="product-btn product-btn__color">
                                    <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                 </div>
                              </div>
                              <div class="availability mb-16">
                                 <h5>Availability:</h5>
                                 <span>in stock</span>
                              </div>
                              <div class="share-icon">
                                 <h5>share:</h5>
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection