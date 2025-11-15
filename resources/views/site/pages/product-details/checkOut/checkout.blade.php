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
                <form action="#">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <textarea name="address" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email">
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
                                                <i class="fa-solid fa-bangladeshi-taka-sign"></i> {{ $item['price'] }}.00
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span><i class="fa-solid fa-bangladeshi-taka-sign"></i>{{$total}}</span></div>
                                <div class="checkout__order__total">Total <span><i class="fa-solid fa-bangladeshi-taka-sign"></i>{{$total}}</span></div>
                                
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
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

@section('scripts')
    <script>
        $(document).ready(function() {

            // Quantity Update
           $('body').on('click', '.qtybtn', function() {
            var row = $(this).closest('tr');
            var productId = row.data('id');
            var btn = $(this);

            var oldValue = parseInt(btn.parent().find('input').val()) || 0;

            if (btn.hasClass('inc')) {
                var newVal = oldValue + 1;
            } else {
                var newVal = Math.max(1, oldValue - 1); 
            }

            btn.parent().find('input').val(newVal);

            var quantity = row.find('.cart-lavel').val();

            $.ajax({
                url: "{{ route('cart.update') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_id: productId,
                    quantity: quantity,
                    type: 'update'
                },
                success: function(response) {
                    $('#cart-product').html(response.html);
                    $('.subtotal-amount').text(response.total + ".00");
                    $('.total-amount').text(response.total + ".00");
                    $('.navbar-cart-total').text(response.total + ".00");
                }
            });
        });


            // Remove Product
            $('body').on('click', '.remove-product', function() {
                var row = $(this).closest('tr');
                var productId = row.data('id');

                $.ajax({
                    url: "{{ route('cart.update') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId,
                        type: 'delete'
                    },
                    success: function(response) {
                        $('#cart-product').html(response.html);
                    },

                });
            });

        });
    </script>
@endsection


<!-- Footer Section Begin -->
@include('site.layout.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->
@include('site.layout.footerlink')
