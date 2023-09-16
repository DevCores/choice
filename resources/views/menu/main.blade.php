    @foreach($items as $menu_item)
        <a href="{{ $menu_item->link() }}" aria-current="page" class="navlink w-inline-block w--current">
            <div class="nav-text">{{ $menu_item->title }}</div>
        </a>
    @endforeach