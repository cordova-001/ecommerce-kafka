@extends('layout.app')
@section('content')
<div class="nk-content ">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Product Details</h3>
                            <div class="nk-block-des text-soft">
                                
                            </div>
                        </div>
                        
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card">
                        <div class="card-inner">
                            <div class="row pb-5">
                                <div class="col-lg-6">
                                    <div class="product-gallery me-xl-1 me-xxl-5">
                                        <div class="slider-init" id="sliderFor" data-slick='{"arrows": false, "fade": true, "asNavFor":"#sliderNav", "slidesToShow": 1, "slidesToScroll": 1}'>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-a.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-g.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-d.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-h.jpg" class="rounded w-100" alt="">
                                            </div>
                                            <div class="slider-item rounded">
                                                <img src="./images/product/lg-e.jpg" class="rounded w-100" alt="">
                                            </div>
                                        </div><!-- .slider-init -->
                                        <div class="slider-init slider-nav" id="sliderNav" data-slick='{"arrows": false, "slidesToShow": 5, "slidesToScroll": 1, "asNavFor":"#sliderFor", "centerMode":true, "focusOnSelect": true, 
                "responsive":[ {"breakpoint": 1539,"settings":{"slidesToShow": 4}}, {"breakpoint": 768,"settings":{"slidesToShow": 3}}, {"breakpoint": 420,"settings":{"slidesToShow": 2}} ]
            }'>
                                            
                                        </div><!-- .slider-nav -->
                                    </div><!-- .product-gallery -->
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="product-info mt-5 me-xxl-5">
                                        <h4 class="product-price text-primary">$78.00 </h4>
                                        <h2 class="product-title">Classy Modern Smart watch</h2>
                                        <div class="product-rating">
                                            
                                        </div><!-- .product-rating -->
                                        <div class="product-excrept text-soft">
                                            <p class="lead">I must explain to you how all this mistaken idea of denoun cing ple praising pain was born and I will give you a complete account of the system, and expound the actual teaching.</p>
                                        </div>
                                        <div class="product-meta">
                                            <ul class="d-flex g-3 gx-5">
                                                <li>
                                                    <div class="fs-14px text-muted">Type</div>
                                                    <div class="fs-16px fw-bold text-secondary">Watch</div>
                                                </li>
                                                <li>
                                                    <div class="fs-14px text-muted">Model Number</div>
                                                    <div class="fs-16px fw-bold text-secondary">Forerunner 290XT</div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        
                                        <div class="product-meta">
                                            <ul class="d-flex flex-wrap ailgn-center g-2 pt-1">
                                                
                                                <li>
                                                    <button class="btn btn-primary">Add to Cart</button>
                                                </li>
                                                <li class="ms-n1">
                                                    <button class="btn btn-icon btn-trigger text-primary"><em class="icon ni ni-heart"></em></button>
                                                </li>
                                            </ul>
                                        </div><!-- .product-meta -->
                                    </div><!-- .product-info -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <hr class="hr border-light">
                            
                        </div>
                    </div>
                </div><!-- .nk-block -->
                
            </div>
        </div>
    </div>
</div>
@endsection