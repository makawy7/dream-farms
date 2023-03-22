<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/admin') }}/images/brand/logo-white.png" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('assets/admin') }}/images/brand/icon-white.png" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('assets/admin') }}/images/brand/icon-dark.png" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('assets/admin') }}/images/brand/logo-dark.png" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('admin.dashboard') }}"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fa fa-gears"></i><span class="side-menu__label">Settings</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side1" class="d-flex active" data-bs-toggle="tab"><i
                                                    class="fe fe-monitor me-2"></i>
                                                <p>Home</p>
                                            </a></li>
                                        <li><a href="#side2" data-bs-toggle="tab" class="d-flex"><i
                                                    class="fe fe-message-square me-2"></i>
                                                <p>Chat</p>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side13">
                                        <ul class="sidemenu-list">
                                            <li><a href="{{ route('admin.settings.general') }}" class="slide-item">
                                                    General</a></li>
                                            <li><a href="shop.html" class="slide-item"> Addresses</a></li>
                                            <li><a href="shop.html" class="slide-item"> Phone Numbers</a></li>
                                            <li><a href="shop.html" class="slide-item"> Working Days</a></li>
                                            <li><a href="shop.html" class="slide-item"> Location</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>
