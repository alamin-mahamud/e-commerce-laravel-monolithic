<ul>
    @foreach($items as $menuItem)
        <li>
            <a href="{{$menuItem->link()}}">
                {{$menuItem->title}}

                @if ($menuItem->title === 'Cart')
                    @include('partials.common.cart')
                @endif
            </a>
        </li>
    @endforeach
</ul>
