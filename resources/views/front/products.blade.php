@extends('layouts.header')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="shop-main-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2 order-lg-1">
                        <div class="sidebar-wrapper mt-md-100 mt-sm-48">
                            
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>category</h3>
                                </div>
                                <div class="sidebar-body">
                                    <ul class="price-container">
                                        <li class="active"> 
                                            <label class="checkbox-container">
                                                Cat 1 (10)
                                                <input type="checkbox" name="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li> 
                                            <label class="checkbox-container">
                                                Cat 2 (16)
                                                <input type="checkbox" name="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li> 
                                            <label class="checkbox-container">
                                                Cat 3 (10)
                                                <input type="checkbox" name="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li> 
                                            <label class="checkbox-container">
                                                Cat 4 (9)
                                                <input type="checkbox" name="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>price</h3>
                                </div>
                                <div class="sidebar-body">
                                    <ul class="price-container">
                                        <li class="active"> 
                                            <label class="radio-container">
                                                $20.00 - $21.00
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li> 
                                            <label class="radio-container">
                                                $26.00 - $30.00
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li> 
                                            <label class="radio-container">
                                                $48.00 - $50.00
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li> 
                                            <label class="radio-container">
                                                    $100.00 - $200.00
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li> 
                                            <label class="radio-container">
                                                    $200.00 - $500.00
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>popular product</h3>
                                </div>
                                <div class="sidebar-body">
                                    <div class="popular-item-inner">
                                        <div class="popular-item">
                                            <div class="pop-item-thumb">
                                                <a href="product-details.hrtml">
                                                    <img src="assets/img/product/product-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="pop-item-des">
                                                <h4><a href="product-details.html">Product Title</a></h4>
                                                <span class="pop-price">$50.00</span>
                                            </div>
                                        </div> 
                                        <div class="popular-item">
                                            <div class="pop-item-thumb">
                                                <a href="product-details.hrtml">
                                                    <img src="assets/img/product/product-7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="pop-item-des">
                                                <h4><a href="product-details.html">Product Title</a></h4>
                                                <span class="pop-price">$50.00</span>
                                            </div>
                                        </div> 
                                        <div class="popular-item">
                                            <div class="pop-item-thumb">
                                                <a href="product-details.hrtml">
                                                    <img src="assets/img/product/product-8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="pop-item-des">
                                                <h4><a href="product-details.html">Product Title</a></h4>
                                                <span class="pop-price">$50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                        <div class="shop-product-wrapper">
                            <div class="shop-product-wrap grid row">
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="product-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                                             
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-description text-center">
                                            <div class="manufacturer">
                                                <p><a href="product-details.html">Category Title</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h3><a href="product-details.html">Product Title</a></h3>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$100.00</span>
                                                <span class="old-price"><del>$120.00</del></span>
                                            </div>
                                            <div class="product-btn">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="product-list-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                  
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="#">Category Title</a></h4>
                                            <h3><a href="product-details.html">Crown Summit Backpacks</a></h3>
                                           
                                            <div class="pricebox">
                                                <span class="regular-price">$70.00</span>
                                                <span class="old-price"><del>$90.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit.</p>
                                            <div class="product-btn product-btn__color">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="product-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                       
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-description text-center">
                                            <div class="manufacturer">
                                                <p><a href="product-details.html">Category Title</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h3><a href="product-details.html">Product Title</a></h3>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$100.00</span>
                                                <span class="old-price"><del>$120.00</del></span>
                                            </div>
                                            <div class="product-btn">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="product-list-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                  
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="#">Category Title</a></h4>
                                            <h3><a href="product-details.html">Crown Summit Backpacks</a></h3>
                                            
                                            <div class="pricebox">
                                                <span class="regular-price">$70.00</span>
                                                <span class="old-price"><del>$90.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit.</p>
                                            <div class="product-btn product-btn__color">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                                
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="product-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
           
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-description text-center">
                                            <div class="manufacturer">
                                                <p><a href="product-details.html">Category Title</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h3><a href="product-details.html">Product Title</a></h3>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$100.00</span>
                                            </div>
                                            <div class="product-btn">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="product-list-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
     
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="#">Category Title</a></h4>
                                            <h3><a href="product-details.html">Crown Summit Backpacks</a></h3>
 
                                            <div class="pricebox">
                                                <span class="regular-price">$70.00</span>
                                                <span class="old-price"><del>$90.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit.</p>
                                            <div class="product-btn product-btn__color">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="product-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                       
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
         
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-description text-center">
                                            <div class="manufacturer">
                                                <p><a href="product-details.html">Category Title</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h3><a href="product-details.html">Product Title</a></h3>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$100.00</span>
                                                <span class="old-price"><del>$120.00</del></span>
                                            </div>
                                            <div class="product-btn">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="product-list-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-8.jpg" alt="product image">
                                            </a>
                                            
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
      
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="#">Category Title</a></h4>
                                            <h3><a href="product-details.html">Crown Summit Backpacks</a></h3>
                                            
                                            <div class="pricebox">
                                                <span class="regular-price">$70.00</span>
                                                <span class="old-price"><del>$90.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit.</p>
                                            <div class="product-btn product-btn__color">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="product-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            <div class="box-label">
                                             
                                                
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-description text-center">
                                            <div class="manufacturer">
                                                <p><a href="product-details.html">Category Title</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h3><a href="product-details.html">Product Title</a></h3>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$100.00</span>
                                                <span class="old-price"><del>$120.00</del></span>
                                            </div>
                                            <div class="product-btn">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="product-list-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>

                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="#">Category Title</a></h4>
                                            <h3><a href="product-details.html">Crown Summit Backpacks</a></h3>
                                            
                                            <div class="pricebox">
                                                <span class="regular-price">$70.00</span>
                                                <span class="old-price"><del>$90.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit.</p>
                                            <div class="product-btn product-btn__color">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="product-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>

                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-description text-center">
                                            <div class="manufacturer">
                                                <p><a href="product-details.html">Category Title</a></p>
                                            </div>
                                            <div class="product-name">
                                                <h3><a href="product-details.html">Product Title</a></h3>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$100.00</span>
                                                <span class="old-price"><del>$120.00</del></span>
                                            </div>
                                            <div class="product-btn">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="product-list-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/1.jpg" alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label new">
                                                    <span>new</span>
                                                </div>
                                                <div class="product-label discount">
                                                    <span>-5%</span>
                                                </div>
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>

                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="ion-ios-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="#">Category Title</a></h4>
                                            <h3><a href="product-details.html">Crown Summit Backpacks</a></h3>
                                            
                                            <div class="pricebox">
                                                <span class="regular-price">$70.00</span>
                                                <span class="old-price"><del>$90.00</del></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit.</p>
                                            <div class="product-btn product-btn__color">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="paginatoin-area text-center mt-18">
                            <ul class="pagination-box">
                                <li><a class="Previous" href="#">Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="Next" href="#"> Next </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection