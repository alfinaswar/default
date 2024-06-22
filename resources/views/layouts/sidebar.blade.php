<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>@lang('translation.menu')</span></li>
 <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('dashboard')}}">
                        <i class="ri-honour-line"></i> <span>Dashboard</span>
                    </a>
                </li>
 <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('list-program')}}">
                        <i class="ri-honour-line"></i> <span>List Program</span>
                    </a>
                </li>
 <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('detail-program')}}">
                        <i class="ri-honour-line"></i> <span>Detail Program</span>
                    </a>
                </li>
 <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('status-pembayaran')}}">
                        <i class="ri-honour-line"></i> <span>Status Pembayaran</span>
                    </a>
                </li>
 <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('bukti-pembayaran')}}">
                        <i class="ri-honour-line"></i> <span>Bukti Pembayaran</span>
                    </a>
                </li>
 <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('sertifikat')}}">
                        <i class="ri-honour-line"></i> <span>Sertifikat</span>
                    </a>
                </li>
 <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('template-create')}}">
                        <i class="ri-honour-line"></i> <span>Template Create</span>
                    </a>
                </li>

                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
