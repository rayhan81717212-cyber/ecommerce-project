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
  <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="{{ route('order.place') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}">
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}">
                                        @error('last_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" name="city" value="{{ old('city') }}" id="city">
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text" name="country" value="{{ old('country') }}">
                                @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <textarea name="address" class="form-control" rows="3">{{old('address')}}</textarea>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul class="list-group">
                                    @foreach ($cart as $key => $item)
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                @if (!empty($item['photo']))
                                                    <img src="{{ asset('storage/'.$item['photo']) }}" alt="{{ $item['name'] }}" class="me-3 rounded" width="50" height="50">
                                                @endif
                                                <span>{{ $item['name'] }}</span>
                                            </div>
                                            <span class="fw-bold">
                                                ৳ {{ $item['price'] }}.00
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal: <span id="subtotal">
                                    ৳ {{ $total }}</span>
                                </div>
                                <div class="checkout__order__shipping">Shipping: 
                                    <span id="shipping_amount">
                                        ৳ 0
                                    </span>
                                    <input type="hidden" id="shipping_fee" name="shipping_fee" value="0">
                                </div>
                                <div class="checkout__order__total">Total: 
                                    <span id="grand_total"> 
                                        ৳ {{ $total }}
                                    </span>
                                </div>
                                
                                <div class="checkout__input__checkbox">
                                    <label for="cod">
                                        Cash On Delivery
                                        <input type="radio" id="cod" name="payment_method" value="cod" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                
                                <button type="submit" class="btn primary-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
<!-- Product Details Section End -->



<!-- Footer Section Begin -->
@include('site.layout.footer')
<!-- Footer Section End -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    let subtotal = parseFloat("{{ $total }}"); 
    const shippingAmountField = document.getElementById('shipping_amount'); 
    const grandTotalField = document.getElementById('grand_total');
    const cityInput = document.getElementById('city');
    const shippingInput = document.getElementById('shipping_fee'); 

    function updateShipping() {
        let city = cityInput.value.toLowerCase().trim();
        let shipping = 0;

        if(city === 'narayanganj') {
            shipping = 100;
        } else if(city === 'dhaka') {
            shipping = 200;
        } else if(city === '') {
            shipping = 0;
        } else {
            shipping = 500;
        }

        shippingAmountField.innerText = shipping; 
        shippingInput.value = shipping;           
        grandTotalField.innerText = subtotal + shipping;
    }

    updateShipping();
    cityInput.addEventListener('input', updateShipping);
});


</script>


<!-- Js Plugins -->
@include('site.layout.footerlink')
