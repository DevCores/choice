    @foreach($items as $menu_item)
        <a href="{{ $menu_item->link() }}" target="_blank" class="navlink w-inline-block">
            <div class="nav-text-footer">{{ $menu_item->title }}</div>
        </a>
    @endforeach