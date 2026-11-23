<div id="navbarSpacer" aria-hidden="true"></div>
<nav id="navbar">
    <div class="navbar-inner" id="navbarInner">
        <a class="brand" href="{{ route('index') }}">
            <img src="{{asset(assetLink().'/images/marin/logo.png')}}" alt="" />
        </a>
        <button class="hamburger" id="hamburger" onclick="toggleMobile()">
            <i class="fas fa-bars"></i>
        </button>
        @if($menu = menu('Header Menus'))
        <ul class="nav-links" id="navLinks">
            <button class="mob-close" onclick="closeMobileNav()">&times;</button>
            @foreach($menu->subMenus as $menu)
            <li class="has-dropdown">
                <a href="{{ asset($menu->menuLink()) }}">
                    {{ $menu->menuName() }} @if($menu->subMenus->count())
                    <span class="arrow">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                    @endif
                </a>

                @if($menu->subMenus->count())
                <ul class="dropdown">
                    @foreach($menu->subMenus as $sub)
                    <li>
                        <a href="{{ asset($sub->menuLink()) }}"> {{ $sub->menuName() }} </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach

            <li>
                <a
                    href="{{asset(assetLink().'/images/marin/MARINE Square Company Profile (1)_compressed.pdf')}}"
                    target="_blank"
                    class="nav-contact-btn"
                >
                    Company Profile
                </a>
            </li>
        </ul>
        @endif
    </div>
</nav>
<div class="nav-overlay" id="navOverlay" onclick="closeMobileNav()"></div>
