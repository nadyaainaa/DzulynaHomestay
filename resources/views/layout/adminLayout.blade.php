<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
  <!-- [Head] start -->

  <head>
    <title>Admin Dzulyna</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Datta Able is trending dashboard template made using Bootstrap 5 design framework. Datta Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets/img/dzl.png') }}" type="image/png" />
    

     <!-- [Font] Family -->
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/fonts/phosphor/duotone/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/fonts/tabler-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/fonts/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/fonts/material.css') }}" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/css/style.css') }}" id="main-style-link" />
    @stack('styles')
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/main.min.css" rel="stylesheet" />


  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
  <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
    <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header flex items-center py-4 px-6 h-header-height">
      <a href="../dashboard/index.html" class="b-brand flex items-center gap-3">
        <!-- ========   Change your logo from here   ============ -->
         <img src="{{ asset('assets/img/dzl2.png') }}" alt="logo-img" class="logo-2"  style="max-height: 50px;" >
      </a>
    </div>
    <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Navigation</label>
        </li>
       
        <li class="pc-item">
          <a href="{{ route('admin.dashboard')}}" class="pc-link">
            <span class="pc-micon">
              <i data-feather="home"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{ route('admin.bookings')}}" class="pc-link">
            <span class="pc-micon">
              <i data-feather="list"></i>
            </span>
            <span class="pc-mtext">List of Bookings</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{ route('admin.availability')}}" class="pc-link">
            <span class="pc-micon">
              <i data-feather="calendar"></i>
            </span>
            <span class="pc-mtext">Homestay Availability</span>
          </a>
        </li>
        {{-- <li class="pc-item pc-caption">
          <label>UI Components</label>
          <i data-feather="feather"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="{{ asset('assets/admin-assets/elements/bc_color.html')}}" class="pc-link">
            <span class="pc-micon"> <i data-feather="edit"></i></span>
            <span class="pc-mtext">Color</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="{{ asset('assets/admin-assets/elements/bc_typography.html')}}" class="pc-link">
            <span class="pc-micon"> <i data-feather="type"></i></span>
            <span class="pc-mtext">Typography</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="{{ asset('assets/admin-assets/elements/icon-feather.html')}}" class="pc-link">
            <span class="pc-micon"> <i data-feather="feather"></i></span>
            <span class="pc-mtext">Icons</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i data-feather="monitor"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#" class="pc-link" target="_blank">
            <span class="pc-micon"> <i data-feather="lock"></i></span>
            <span class="pc-mtext">Login</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#" target="_blank">
            <span class="pc-micon"> <i data-feather="user-plus"></i></span>
            <span class="pc-mtext">Register</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Other</label>
          <i data-feather="sidebar"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="align-right"></i> </span><span
              class="pc-mtext">Menu levels</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="#" class="pc-link">
            <span class="pc-micon">
              <i data-feather="sidebar"></i>
            </span>
            <span class="pc-mtext">Sample page</span>
          </a>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper flex max-sm:px-[15px] px-[25px] grow"><!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse max-lg:hidden lg:inline-flex">
      <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="sidebar-hide">
        <i data-feather="menu"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup lg:hidden">
      <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="mobile-collapse">
        <i data-feather="menu"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-2 py-1">
          <input type="search" class="form-control !border-0 !shadow-none" placeholder="Search here. . ." />
        </form>
      </div>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
    
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="settings"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item">
          <i class="ti ti-user"></i>
          <span>My Account</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-settings"></i>
          <span>Settings</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-headset"></i>
          <span>Support</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-lock"></i>
          <span>Lock Screen</span>
        </a>
    
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="dropdown-item">
            <i class="ti ti-power"></i>
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
    </li>
    
    <li class="dropdown pc-h-item header-user-profile">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" data-pc-auto-close="outside" aria-expanded="false">
        <i data-feather="user"></i>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown p-2 overflow-hidden">
        <div class="dropdown-header flex items-center justify-between py-4 px-5 bg-primary-500">
          <div class="flex mb-1 items-center">
            <div class="shrink-0">
              <img src="{{ asset('assets/admin-assets/images/user/avatar-2.jpg')}}" alt="user-image" class="w-10 rounded-full" />
            </div>
            <div class="grow ms-3">
              <h6 class="mb-1 text-white">Carson Darrin 🖖</h6>
              <span class="text-white">carson.darrin@company.io</span>
            </div>
          </div>
        </div>
        <div class="dropdown-body py-4 px-5">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-setting-outline"></use>
                </svg>
                <span>Settings</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-share-bold"></use>
                </svg>
                <span>Share</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-lock-outline"></use>
                </svg>
                <span>Change Password</span>
              </span>
            </a>
            <div class="grid my-3">
              <button class="btn btn-primary flex items-center justify-center">
                <svg class="pc-icon me-2 w-[22px] h-[22px]">
                  <use xlink:href="#custom-logout-1-outline"></use>
                </svg>
                Logout
              </button>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div></div>
</header>
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="page-header-title">
              <h5 class="mb-0 font-medium">Dzulyna Homestay</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        @yield('content')
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid mx-10">
        <div class="grid grid-cols-12 gap-1.5">
          <div class="col-span-12 sm:col-span-6 my-1">
            <p class="m-0"></p>
              <a href="https://codedthemes.com/" class="text-theme-bodycolor dark:text-themedark-bodycolor hover:text-primary-500 dark:hover:text-primary-500" target="_blank">CodedThemes</a>
              , Built with ♥ for a smoother web presence.
            </p>
          </div>
          <div class="col-span-12 sm:col-span-6 my-1 justify-self-end">
                   <p class="inline-block max-sm:mr-3 sm:ml-2">Distributed by <a href="https://themewagon.com" target="_blank">Themewagon</a></p>
          </div>
        </div>
      </div>
    </footer>
 
    <!-- Required Js -->
    <script src="{{ asset('assets/admin-assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/admin-assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin-assets/js/icon/custom-icon.js') }}"></script>
    <script src="{{ asset('assets/admin-assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin-assets/js/component.js') }}"></script>
    <script src="{{ asset('assets/admin-assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/admin-assets/js/script.js') }}"></script>
    <script>
    document.documentElement.setAttribute('data-theme', 'light');
    localStorage.setItem('theme', 'light');
    </script>

      
    <script src="https://cdn.botpress.cloud/webchat/v2.5/inject.js"></script>
    <script src="https://files.bpcontent.cloud/2025/05/26/14/20250526140156-IUMWIE1G.js"></script>

    <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
    </div>

     @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/main.min.js"></script>

    <script>
      layout_change('false');
    </script>
     
    
    <script>
      layout_theme_sidebar_change('dark');
    </script>
    
     
    <script>
      change_box_container('false');
    </script>
     
    <script>
      layout_caption_change('true');
    </script>
     
    <script>
      layout_rtl_change('false');
    </script>
     
    <script>
      preset_change('preset-1');
    </script>
     
    <script>
      main_layout_change('vertical');
    </script>
    

  </body>
  <!-- [Body] end -->
</html>
