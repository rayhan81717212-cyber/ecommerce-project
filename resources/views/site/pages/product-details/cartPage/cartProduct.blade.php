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
                        <i class="fa-solid fa-bangladeshi-taka-sign fs-4"></i> {{ $item['price'] }}
                        </td>
                        <td class="shoping__cart__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" name='quantity' value="{{ $item['quantity'] ?? 0 }}" class="cart-lavel">
                                </div>
                            </div>
                        </td>
                        <td class="shoping__cart__total">
                            @php
                                $quantity = $item['quantity'] ?? 0;
                            @endphp
                         <i class="fa-solid fa-bangladeshi-taka-sign fs-4"></i> {{ $item['price'] *  $quantity }}
                        </td>
                        <td class="shoping__cart__item__close">
                            <button class="btn btn-danger btn-sm remove-product"><i class="fa-solid fa-x"></i></button>
                        </td>
                    </tr>
                @endforeach
            
        </tbody>
    </table>
@endif