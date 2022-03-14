{{-- @if (Auth::user()->can($menu->can) || (isset($menu->restringido) && !$menu->restringido)) --}}
<li
    class="{{ navExpanded($menu->submenu ?? []) }} {{ hasParent(count($menu->submenu ?? [])) }}{{ hasSubmenu(count($menu->submenu ?? [])) ? activeAll($menu->submenu ?? []) : navActive($menu->url) }}">
    <a class="nav-link" href="{{ hasSubmenu(count($menu->submenu ?? [])) ? '#' : "$menu->url" }}">
        <i class="{{ $menu->icon }}" aria-hidden="true"></i>
        <span>{{ $menu->name }}</span>
    </a>
    @if (count($menu->submenu ?? []) > 0)
        @include('layouts.partials.submenu', [
            'submenu' => $menu->submenu,
        ])
    @endif
</li>
{{-- @endif --}}
