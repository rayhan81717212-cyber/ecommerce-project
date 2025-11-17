 @if (session('cart', []))
    <table>
        <thead>
            <tr>
                <th class="shoping__product">Products</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        
                @foreach($cart as $key => $item)
                    <tr data-id="{{ $key }}">
                        <td class="shoping__cart__item">
                            <img src="{{ asset('storage/'.$item["photo"]) }}" alt="" width="100">
                            <h5>{{ $item['name'] }}</h5>
                        </td>
                        <td class="shoping__cart__price">
                        ৳ {{ $item['price'] }}
                        </td>
                        <td class="shoping__cart__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <span class="dec qtybtn">-</span>
                                    <input type="text" name="quantity" value="{{ $item['quantity'] ?? 1 }}" class="cart-lavel">
                                    <span class="inc qtybtn">+</span>
                                </div>
                            </div>
                        </td>
                        <td class="shoping__cart__total">
                            @php
                                $quantity = $item['quantity'] ?? 0;
                            @endphp
                         ৳ {{ $item['price'] *  $quantity }}.00
                        </td>
                        <td class="shoping__cart__item__close">
                            <button type="button" class="btn btn-danger btn-sm remove-product"><i class="fa-solid fa-x"></i></button>
                        </td>
                    </tr>
                @endforeach
            
        </tbody>
    </table>
@endif