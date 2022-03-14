<div class="inner-wrapper">
    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">
        <div class="sidebar-header">
            <div class="sidebar-title">
                Empresa pública del agua.
            </div>
            <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html"
                data-fire-event="sidebar-left-toggle">
                <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <div class="nano has-scrollbar">
            <div class="nano-content" tabindex="0" style="right: -17px;">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        @foreach ($sideBar->menu as $menu)
                            @include('layouts.partials.menuHorizontal', [
                                'menu' => $menu,
                            ])
                        @endforeach
                    </ul>
                </nav>
            </div>
            <script>
                // Maintain Scroll Position
                if (typeof localStorage !== 'undefined') {
                    if (localStorage.getItem('sidebar-left-position') !== null) {
                        var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                        sidebarLeft.scrollTop = initialPosition;
                    }
                }
            </script>
            <div class="nano-pane" style="opacity: 1; visibility: visible;">
                <div class="nano-slider" style="height: 20px; transform: translate(0px, 0px);">
                </div>
            </div>
        </div>
    </aside>
    <!-- end: sidebar -->
    <section role="main" class="content-body">
        <header class="page-header">
            <h2> @yield('breadcrumb_title', 'Inicio') </h2>
            <div class="right-wrapper text-end">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{ route('index') }}">
                            <i class="bx bx-home-alt"></i> Inicio
                        </a>
                    </li>
                    @yield('breadcrumb_content')
                </ol>
                <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
            </div>
        </header>
        @yield('content')
        <!-- start: page -->
        <!-- end: page -->
    </section>
</div>
