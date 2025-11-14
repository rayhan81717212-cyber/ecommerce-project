@include('site.layout.headerlink')
{{-- <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div> --}}

<!-- Humberger Begin -->
@include('site.layout.responsive-menu')
<!-- Humberger End -->

@include('site.layout.nav-area')


    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            
                            @if ($product->photo !== null)
                                <a data-fancybox="gallery" href="{{ asset('storage/' . $product->photo) }}">
                                    <img class="product__details__pic__item--large" 
                                    src="{{ asset('storage/' . $product->photo) }}" 
                                    alt="{{ $product->name }}" style="width: 70%; height: 80%">
                                </a>
                            @else
                                <div>
                                    <h1>Photo Messing</h1>
                                </div>
                            @endif
                                
                           

                        </div>
                         <div class="product__details__pic__slider owl-carousel">
                            @foreach($product->gallery as $img)
                                <img 
                                    data-imgbigurl="{{ asset('storage/' . $img->photo) }}" 
                                    src="{{ asset('storage/' . $img->photo) }}" 
                                    alt="Gallery Image"
                                >
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="product__details__text">
                        <h3>{{$product->name}}</h3>
                        <div class="product__details__price">
                            @if ($product->discount_price)
                                <div class="d-flex justify-content-start align-items-center">
                                    <h6 class="text-danger mx-1 fs-4" style="font-weight: 700;">
                                        <del><i class="fa-solid fa-bangladeshi-taka-sign fs-4"></i> {{$product->price }}</del>
                                    </h6>
                                    <h5 class="mx-1" style="font-weight: 700;">
                                        <i class="fa-solid fa-bangladeshi-taka-sign fs-4"></i>{{$product->discount_price }}
                                    </h5>
                                </div>
                            @else
                                <h5  style="font-weight: 700;">
                                    <i class="fa-solid fa-bangladeshi-taka-sign fs-4"></i> {{ $product->price }}
                                </h5>
                            @endif
                        </div>
                        {{-- product Details --}}
                        <table class="table table-bordered">
                            <tbody>
                                    <tr>
                                    <th>Featured Products</th>
                                    <td>{{ $product->short_description }}</td>
                                    </tr>
                                    <tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>{{ $product->brand_name }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <ul>
                            <li><b>Availability</b> 
                                <span>
                                    @if ($product->stock_quantity == 0)
                                        <span class="badge bg-danger"> Stock Out</span>
                                    @elseif ($product->stock_quantity <= 10)
                                        <span class="badge bg-warning">Low Stock</span>
                                    @else
                                        <span class="badge bg-success">In Stock</span>
                                    @endif
                                </span>
                            </li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                        <form action="{{ route('add-to-cart', $product->id) }}" method="post">
                            @csrf
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="number" name="quantity" value="1" min="1">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn primary-btn">ADD TO CART</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Ratings & Reviews </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Reviews Submit </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p style="text-align: justify; line-height: 2">
                                        {{ $product->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Review</h6>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->



<!-- Footer Section Begin -->
@include('site.layout.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->
@include('site.layout.footerlink')
