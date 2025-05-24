<header id="header-sticky" class="header-2">
    <div class="container">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="sticky-logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/img/dzl2.png') }}" alt="logo-img" class="logo-2"  style="max-height: 50px;" >
                   </a>
                </div>
                <div class="header-left">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('homepage') }}">Home</a>
                                    </li>
                                    <li class="has-dropdown active menu-thumb">
                                        <a href="{{ route('index') }}">
                                        List Homestay
                                        <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('house1') }}">House 1 : Teluk Intan</a></li>
                                            <li><a href="{{ route('house2') }}">House 2 : Bagan Datuk </a></li>
                                            <li><a href="{{ route('house3') }}">House 3 : Sg.Tiang</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('homepage') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">Feedback</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage') }}">
                                            Contact
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="https://www.facebook.com/profile.php?id=100091556442878">Facebook</a></li>
                                            <li><a href="#">Whatsapp</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    @if(Auth::check())
                        <!-- If user is logged in -->
                        <div class="dropdown">
                            <button class="theme-btn bg-2 dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Hi, {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li>
                                    View Profile
                                    {{-- <a class="dropdown-item" href="{{ route('profile') }}">View Profile</a> --}}
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Sign Out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <!-- If user is NOT logged in -->
                        <div class="header-button">
                            <a href="{{ route('login') }}" class="theme-btn bg-2">Sign In</a>
                        </div>
                    @endif
                
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="far fa-bars"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</header>