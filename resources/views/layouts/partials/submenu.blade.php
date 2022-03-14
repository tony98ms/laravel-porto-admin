<!-- Submenus  de Elementos -->
<ul class="nav nav-children" style="">
    @foreach ($submenu as $menu)
        @if (Auth::user()->can($menu->can) || (isset($menu->restringido) && !$menu->restringido))
            <li
                class="{{ navExpanded($menu->submenu ?? []) }} {{ hasParent(count($menu->submenu ?? [])) }}{{ hasSubmenu(count($menu->submenu ?? [])) ? activeAll($menu->submenu ?? []) : navActive($menu->url) }}">
                <a class="nav-link"
                    href="{{ request()->is(!empty($menu->route) ? route($menu->route) : $menu->url)? '#': (!empty($menu->route)? route($menu->route): '#') }}">
                    <i class="{{ $menu->icon }}" aria-hidden="true"></i>
                    <span class="text-wrap">{{ $menu->name }}</span>
                </a>
                @if (isset($menu->submenu) && count($menu->submenu) > 0)
                    @include('layouts.partials.submenu', [
                        'submenu' => $menu->submenu,
                    ])
                @endif
            </li>
        @endif
    @endforeach
</ul>
