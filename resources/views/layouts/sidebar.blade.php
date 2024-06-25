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
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span>Program</span><span class="badge badge-pill bg-danger"></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('list-program')}}" target="_blank" class="nav-link">List Program</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('detail-program')}}" target="_blank" class="nav-link">Detail Program</a>
                            </li>

                        </ul>
                    </div>
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
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span>Template Create</span><span class="badge badge-pill bg-danger"></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('template-create')}}" target="_blank" class="nav-link">Create</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('template-create')}}" target="_blank" class="nav-link">Read</a>
                            </li>

                        </ul>
                    </div>
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
