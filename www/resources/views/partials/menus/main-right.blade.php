<ul>
    @guest
        <li><a href="{{ route('register') }}">Sign Up</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
    @else
        <li><a href="{{route('users.edit')}}">My Account</a></li>
        <li><a href="{{route('logout')}}" onclick="mainRightLogout"></a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endguest

    <li>
        <a href="{{route('cart.index')}}">
            Cart 
            @include('partials.common.cart')
        </a>
    </li>

</ul>

@push('scripts')
    function mainRightLogout() {
        event.preventDefault(); document.getElementById('logout-form').submit();
    }
@endpush
