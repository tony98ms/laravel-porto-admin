<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="{{ route('index') }}" class="logo">
            <img src="{{ asset('image/logo_d.png') }}" width="75" height="35" alt="Porto Admin" />
        </a>

        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
            data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>

    </div>

    <!-- start: search & user box -->
    <div class="header-right">
        <div id="userbox" class="userbox">
            <a href="#" data-bs-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{ Avatar::create(Auth::user()->name)->setChars(2) }}" alt="Joseph Doe"
                        class="rounded-circle"
                        data-lock-picture="{{ Avatar::create(Auth::user()->name)->setChars(2) }}" />
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name">{{ Auth::user()->name }}</span>
                    {{-- <span class="role">Administrator</span> --}}
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled mb-2">
                    <li class="ms-4">
                        <span class="role float-lg-left"><b>Roles: </b>
                            @foreach (Auth::user()->roles as $rol)
                                {{ $rol->description }}{{ $loop->last ? '' : ',' }}
                            @endforeach
                        </span>
                    </li>
                    <li class="divider"></li>
                    {{-- <li>
                        <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                class="bx bx-user-circle"></i> My Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i>
                            Lock Screen</a>
                    </li> --}}
                    <li>
                        <a role="menuitem" tabindex="-1" class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();    document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off text-danger"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<!-- end: header -->
