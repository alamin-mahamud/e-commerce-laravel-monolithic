<ul>
    @foreach($menuItems as $menuItem)
        @if ($menuItem->title === 'Follow Me:')
            <li>{{ $menuItem->title }}</li>
        @endif
        <li><a href="{{ $menuItem->link() }}"><i class="fa {{ $menuItem->title }}"></i></a></li>
    @endforeach
</ul>
