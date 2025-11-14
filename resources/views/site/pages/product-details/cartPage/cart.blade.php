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
<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <form action="{{ route('order.post') }}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table" id="cart-product">
                        @include('site.pages.product-details.cartPage.cartProduct')

                    </div>
                    <a class=" site-btn-border rounded" href="{{ url('/') }}">Continue Shopting</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn-border">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        @php
                            $total = 0;
                            foreach ($cart as $item) {
                                $quantity = $item['quantity'] ?? 0;
                                $total += $item['price'] * $quantity;
                            }
                        @endphp
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>{{ $total }}.00</span></li>
                            <li>Total <span>{{ $total }}.00</span></li>
                        </ul>
                        <button class=" btn primary-btn w-100">PROCEED TO CHECKOUT</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<!-- Shoping Cart Section End -->
<!-- Product Details Section End -->

@section('scripts')
    <script>
        $(document).ready(function() {

            // Quantity Update
            $('body').on('click', '.qtybtn', function() {
                var row = $(this).closest('tr');
                var productId = row.data('id');
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
                    },

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
