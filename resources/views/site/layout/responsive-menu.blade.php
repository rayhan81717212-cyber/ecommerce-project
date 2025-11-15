<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{ url('/') }}"><img src="{{ asset('site-asset/img/logo.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i> <span>{{ count(session('cart', [])) }}</span></a></li>
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
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
                <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
                    @if (Route::has('login'))
                        <nav class="d-flex items-center justify-end gap-4">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="inline-block px-4 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="inline-block px-4 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                                >
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="inline-block px-4 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
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
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>