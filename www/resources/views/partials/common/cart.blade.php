@php
    $cartItemsCount = Cart::instance('default')->count();
@endphp

@if ( $cartItemsCount > 0)
    <span class="cart-count">
        <span>{{$cartItemsCount}}</span>
    </span>
@endif
