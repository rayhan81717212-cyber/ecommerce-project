@include('site.layout.headerlink')
{{-- <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div> --}}

<!-- Humberger Begin -->
@include('site.layout.responsive-menu')
<!-- Humberger End -->

@include('site.layout.nav-area')

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                                @foreach ($categories as $item)
                                    <li class="{{ isset($currentCategory) && $currentCategory->id == $item->id ? 'active' : '' }}">
                                        <a href="{{ route('shop.category', $item->id) }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Large
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Medium
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Small
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Tiny
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
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
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->




<!-- Footer Section Begin -->
@include('site.layout.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->
@include('site.layout.footerlink')
