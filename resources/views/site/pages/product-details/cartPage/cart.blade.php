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
                  
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span class="subtotal-amount">৳ {{ $total }}.00</span></li>
                            <li>Total <span class="total-amount">৳ {{ $total }}.00</span></li>
                        </ul>
                        <a  href="{{ route('checkout.page') }}" class=" btn primary-btn w-100">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
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
