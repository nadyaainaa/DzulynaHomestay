<header id="header-sticky" class="header-1">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="sticky-logo">
                    <a href="{{ route('homepage') }}">
                       <img src="{{ asset('assets/img/logo/white-logo.svg') }}" alt="logo-img">
                    </a>
                </div>
                <div class="header-left">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown active menu-thumb">
                                        <a href="{{ route('homepage') }}">
                                            Home
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu has-homemenu">
                                            <li class="border-none">
                                                <div class="row g-4">
                                                    <div class="col-xl-2 homemenu">
                                                        <div class="homemenu-thumb">
                                                           <img src="{{ asset('assets/img/header/home-1.jpg') }}" alt="img">
                                                            <div class="demo-button">
                                                                <a href="#" class="theme-btn">Multi Page</a>
                                                                <a href="#" class="theme-btn">One Page</a>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-content text-center">
                                                            <h4 class="homemenu-title">
                                                                Home 01
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2  homemenu">
                                                        <div class="homemenu-thumb">
                                                           <img src="{{ asset('assets/img/header/home-2.jpg') }}" alt="img">
                                                            <div class="demo-button">
                                                                <a href="#" class="theme-btn">Multi Page</a>
                                                                <a href="#" class="theme-btn">One Page</a>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-content text-center">
                                                            <h4 class="homemenu-title">
                                                                Home 02
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 homemenu">
                                                        <div class="homemenu-thumb">
                                                           <img src="{{ asset('assets/img/header/home-3.jpg') }}" alt="img">
                                                            <div class="demo-button">
                                                                <a href="#" class="theme-btn">Multi Page</a>
                                                                <a href="#" class="theme-btn">One Page</a>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-content text-center">
                                                            <h4 class="homemenu-title">
                                                                Home 03
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 homemenu">
                                                        <div class="homemenu-thumb">
                                                           <img src="{{ asset('assets/img/header/home-4.jpg') }}" alt="img">
                                                            <div class="demo-button">
                                                                <a href="#" class="theme-btn">Multi Page</a>
                                                                <a href="#" class="theme-btn">One Page</a>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-content text-center">
                                                            <h4 class="homemenu-title">
                                                                Home 04
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 homemenu">
                                                        <div class="homemenu-thumb">
                                                           <img src="{{ asset('assets/img/header/home-5.jpg') }}" alt="img">
                                                            <div class="demo-button">
                                                                <a href="#" class="theme-btn">Multi Page</a>
                                                                <a href="#" class="theme-btn">One Page</a>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-content text-center">
                                                            <h4 class="homemenu-title">
                                                                Home 05
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 homemenu">
                                                        <div class="homemenu-thumb">
                                                           <img src="{{ asset('assets/img/header/home-6.jpg') }}" alt="img">
                                                            <div class="demo-button">
                                                                <a href="#" class="theme-btn">Multi Page</a>
                                                                <a href="#" class="theme-btn">One Page</a>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-content text-center">
                                                            <h4 class="homemenu-title">
                                                                Home 06
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown active d-xl-none">
                                        <a href="{{ route('index') }}" class="border-none">
                                            Home
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="#">Home 01</a></li>
                                            <li><a href="#">Home 02</a></li>
                                            <li><a href="#">Home 03</a></li>
                                            <li><a href="#">Home 04</a></li>
                                            <li><a href="#">Home 05</a></li>
                                            <li><a href="#">Home 06</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Services
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Service Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-dropdown">
                                        <a href="{{ route('news') }}">
                                            Pages
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li class="has-dropdown">
                                                <a href="{{ route('projectDetails') }}">
                                                    Projects
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Projects</a></li>
                                                    <li><a href="#">Project Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#">
                                                    Team
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Team</a></li>
                                                    <li><a href="#">Team Details</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="#">Pricing Table</a></li>
                                            <li><a href="#">errorPage Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Blog
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="#">Blog </a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">

                    <div class="header-button">
                        <a href="#" class="theme-btn bg-2">Get A Quote</a>
                    </div>
                    <div class="header__hamburger d-xl-block my-auto">
                        <div class="sidebar__toggle">
                            <i class="far fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>