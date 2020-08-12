@extends('layouts.header')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="{!! route('front.products') !!}">Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="product-details-wrapper pt-100 pb-14 pt-sm-58">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider mb-20 slider-arrow-style slider-arrow-style__style-2">
									@foreach($product->getMedia('gallery') as $media )
										<div class="pro-large-img img-zoom" id="img1">
                                            <img src="{{ $product->getFirstMediaUrl('product') }}" alt="" />
                                        </div>
                                        <div class="pro-large-img img-zoom" id="img1">
                                            <img src="{!! url($media->getUrl()) !!}" alt="" />
                                        </div>
									@endforeach
                                    </div>
                                    <div class="pro-nav slick-padding2 slider-arrow-style slider-arrow-style__style-2">
									@foreach($product->getMedia('gallery') as $media )
                                        <div class="pro-nav-thumb"><img src="{{ $product->getFirstMediaUrl('product') }}" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="{!! url($media->getUrl()) !!}" alt="" /></div>
									@endforeach
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des pt-md-98 pt-sm-58">
                                        <h3>{{ $product->name }}</h3>
                                        
                                        <div class="pricebox">
                                            <span class="regular-price">${{ $product->price }}</span>
                                        </div>
                                        <p>{!! $product->description !!}</p>
                                        <div class="quantity-cart-box d-flex align-items-center mb-24">
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </div>
                                            <div class="product-btn product-btn__color">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="availability mb-20">
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
                        <div class="product-details-reviews pt-98 pt-sm-58">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">Description</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_two">Information</a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p>{!! $product->description !!}</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>#</td>
                                                            <th>Attribute</th>
															<th>Value</th>
															<th>Quantity</th>
															<th>Price</th>
                                                        </tr>
														@foreach($product->productAttributes as $key => $productAttribute)
                                                        <tr>
                                                            <td>{{ $key }}</td>
                                                            <td>{{ $productAttribute->attribute->name }}</td>
                                                            <td>{{ $productAttribute->value }}</td>
                                                            <td>{{ $productAttribute->quantity }}</td>
                                                            <td>{{ $productAttribute->price }}</td>
                                                        </tr>
														@endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="tab_three">
                                                <form action="#" class="review-form">
                                                    <h5>1 review for <span>Chaz Kangeroo Hoodies</span></h5>
                                                    <div class="total-reviews">
                                                        <div class="rev-avatar">
                                                            <img src="{{asset('assets/img/about/avatar.jpg')}}" alt="">
                                                        </div>
                                                        <div class="review-box">
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            </div>
                                                            <div class="post-author">
                                                                <p><span>admin -</span> 30 Nov, 2018</p>
                                                            </div>
                                                            <p>Aliquam fringilla euismod risus ac bibendum. Sed sit amet sem varius ante feugiat lacinia. Nunc ipsum nulla, vulputate ut venenatis vitae, malesuada ut mi. Quisque iaculis, dui congue placerat pretium, augue erat accumsan lacus</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span> Your Name</label>
                                                            <input type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span> Your Email</label>
                                                            <input type="email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                                            <textarea class="form-control" required></textarea>
                                                            <div class="help-block pt-10"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span> Rating</label>
                                                            &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                            <input type="radio" value="1" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="2" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="3" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="4" name="rating">
                                                            &nbsp;
                                                            <input type="radio" value="5" name="rating" checked>
                                                            &nbsp;Good
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="sqr-btn" type="submit">Continue</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="page-section pt-100 pt-sm-58">
                            <div class="section-title text-center pb-44">
                                <p>The latest products</p>
                                <h2>related products</h2>
                            </div>
                            <div class="releted-product spt slick-padding slick-arrow-style">
							@foreach($relatedProducts as $relatedProduct)
                                <div class="product-item mb-20">
                                    <div class="product-thumb">
                                        <a href="{{ route('front.product.show', [$relatedProduct->id, $relatedProduct->slug]) }}">
                                            <img src="{{ $relatedProduct->getFirstMediaUrl('product') }}" alt="{{ $relatedProduct->name }}">
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
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="ion-ios-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-description text-center">
                                        <div class="manufacturer">
                                            <p><a href="#">Category Title</a></p>
                                        </div>
                                        <div class="product-name">
                                            <h3><a href="{{ route('front.product.show', [$relatedProduct->id, $relatedProduct->slug]) }}">{{ $relatedProduct->name }}</a></h3>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$100.00</span>
                                            <span class="old-price"><del>${{ $relatedProduct->price }}</del></span>
                                        </div>
                                        <div class="product-btn">
                                            <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
							@endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-wrapper pt-md-16 pb-md-86 pb-sm-44">
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
                                    <h3>featured</h3>
                                </div>
                                <div class="sidebar-body">
                                    <div class="popular-item-inner popular-item-inner__style-2">
                                        <div class="popular-item">
                                            <div class="pop-item-thumb">
                                                <a href="product-details.hrtml">
                                                    <img src="{{asset('assets/img/1.jpg')}}" alt="">
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
                                                    <img src="{{asset('assets/img/1.jpg')}}" alt="">
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
                                                    <img src="{{asset('assets/img/1.jpg')}}" alt="">
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
                </div>
            </div>
        </div>
    </main>
@endsection