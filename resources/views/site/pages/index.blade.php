@include('site.layout.headerlink')
{{-- <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div> --}}

<!-- Humberger Begin -->
@include('site.layout.responsive-menu')
<!-- Humberger End -->

@include('site.layout.nav-area')

<div class="banner-section" style="width: 100%">
    <div class="container-fluid">
        <div class="row  p-0">
            <div class="col-12 p-0">
                @foreach ($banner as $item)
                    <div class="hero__item set-bg" style="width: 100%" data-setbg="{{ asset('storage/'.$item->photo) }}">
                        <div class="hero__text">
                            <span>Phone 16 Pro</span>
                            <h2>6.3 inch OLED Screen  |  Super Retina XDR display <br>
                                Dynamic Island  |  1000 nits max brightness</h2>
                            <p>Upcomming</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>

<!-- Categories Section Begin -->
<section class="categories mt-4" style="width:100%">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach ($brand as $item)
                    <div class="col-lg-3 d-flex justify-content-center">
                        <div class="categories__item" style="width:200px; height:200px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                            <img src="{{ asset('storage/'.$item->logo) }}" style="width:50%; height:auto; object-fit: contain;">
                            <h5 style="text-align:center; margin-top:10px;"><a href="#">{{$item->name}}</a></h5>
                        </div>
                    </div>
                  @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
            </div>
        </div>
        <div class="row g-3 featured__filter d-flex justify-content-center">
            @foreach ($products as $product)
                @if ($product->status !== 'Inactive')
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-2 mix oranges">
                            <a href="{{ route('product-show', $product->id) }}">
                                <div class="card card-items  m-0 position-relative h-100  ">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg">
                                            <img src="{{ asset('storage/' . $product->photo) }}" alt="">
                                        </div>
                                        <div class="featured__item__text px-2">
                                            <h6>{{ $product->name }}</h6>
                                        </div>
                                    </div>
                                    <div class="mt-auto mb-2 text-center">
                                        @if ($product->discount_price)
                                            <div class="d-flex justify-content-center align-items-center">
                                                <h6 class="text-danger mx-1 fs-4" style="font-weight: 700;">
                                                    <del>৳
                                                        {{ $product->price }}</del>
                                                </h6>
                                                <h5 class="mx-1" style="font-weight: 700;">
                                                    ৳ {{ $product->discount_price }}
                                                </h5>
                                            </div>
                                        @else
                                            <h5 class="text-center" style="font-weight: 700;">
                                                ৳ {{ $product->price }}
                                            </h5>
                                        @endif
                                        <h6 class="mt-1">{{ $product->brand_name }}</h6>
                                    </div>

                                    <a href="{{ route('product-show', $product->id) }}" class="btn btn-color mt-auto">View
                                        Details</a>
                                </div>
                            </a>
                        </div>
                @endif
            @endforeach
        </div>

        {{-- <div class="mt-4">
            {{ $products->links('pagination::bootstrap-5') }}
        </div> --}}
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="site-asset/img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="site-asset/img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="site-asset/img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->



<!-- Footer Section Begin -->
@include('site.layout.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->
@include('site.layout.footerlink')
