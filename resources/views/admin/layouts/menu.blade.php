<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    {{ __('Dashboard') }}
                </a>
                <a class="nav-link " href="{{ route('admin.category') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                    {{ __('Categories') }}
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>
                <a class="nav-link " href="{{ route('admin.products') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
                    {{ __('Products') }}
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                <a class="nav-link " href="{{ route('admin.orders') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-check"></i></div>
                    {{ __('Orders') }}
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>
                <a class="nav-link " href="{{ route('admin.faq') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    {{ __('FAQ') }}
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>

                <a class="nav-link " href="{{ route('admin.users') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    {{ __('Customers') }}
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>
                <a class="nav-link " href="{{ route('admin.subscribers') }}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    {{ __('Subscribers') }}
                    <div class="sb-sidenav-collapse-arrow"></div>
                </a>
                <a class="nav-link" href="{{ route('admin.aboutUs') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                    {{ __('About-Us') }}
                </a>
            </div>
        </div>
    </nav>
</div>
