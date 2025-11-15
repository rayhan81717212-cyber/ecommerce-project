<!-- Header Section Begin -->
<header class="header" style="width: 100%">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> rayhan81717212@gmail.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__auth">
                            @if (Route::has('login'))
                                <nav class="d-flex items-center justify-end g-4">
                                    @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                            Dashboard
                                        </a>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="inline-block px-4 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                                            Log in
                                        </a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="inline-block px-4 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
            <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo.jpg') }}" alt="" width="100" height="60" class="rounded"></a>
                </div>
            </div>
            <div class="col-lg-6 nav-area">
                <div class="hero__search d-flex justify-content-center align-items-center">
                        <div class="hero__search__form text-center">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                    </div>
                
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i> <span class="fs-6">{{ count(session('cart', [])) }}</span></a></li>
                    </ul>
                    <div class="header__cart__price">Total Amount: 
                        <span>
                            @php
                                $cart = session('cart', []);
                                @endphp

                                @if (!empty($cart))
                                    @php $total = 0; @endphp
                                    @foreach ($cart as $item)
                                        @php
                                            $quantity = $item['quantity'] ?? 0; 
                                            $subTotal = $item['price'] * $quantity;
                                            $total += $subTotal;
                                            $total = $total ?? null;
                                        @endphp
                                    @endforeach
                                    <span class="navbar-cart-total">{{ $total }}.00</span>
                                @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero hero-normal" style="width: 100%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3  nav-area">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit &amp; Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter &amp; Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya &amp; Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu text-right">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="./shop-grid.html">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
                </div>
                <div class="col-lg-2  nav-area ">
                    <div class="d-flex justify-content-lg-end justify-content-center align-items-end pb-lg-0 pb-4">
                        <!-- Phone Icon -->
                        <div class="mr-2">
                            <i class="fa fa-phone fa-lg"></i>
                        </div>

                        <!-- Phone Text -->
                        <div class="text-lg-right text-center">
                            <h5 class="mb-0">+01705675623</h5>
                            <small>support 24/7 time</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!-- Hero Section End -->

