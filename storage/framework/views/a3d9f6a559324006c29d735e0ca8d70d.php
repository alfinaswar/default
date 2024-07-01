<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu" style="background-color: #116530;">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('build/images/logo-sm.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('build/images/logo-dark.png')); ?>" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('build/images/logo-sm.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('build/images/logo-light.png')); ?>" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav" >
                <li class="menu-title"><span><?php echo app('translator')->get('translation.menu'); ?></span></li>
                <li class="nav-item" >
                    <a class="nav-link menu-link" href="<?php echo e(route('landing')); ?>"  style="color:#ffffff">
                        <i class="ri-honour-line"></i> <span>Landing</span>
                    </a>
                </li>
                <li class="menu-title"><span><?php echo app('translator')->get('translation.menu'); ?></span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('dashboard')); ?>" style="color:#ffffff">
                        <i class="ri-honour-line"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts" style="color:#ffffff">
                        <i class="ri-layout-3-line"></i> <span>Program</span><span
                            class="badge badge-pill bg-danger"></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('list-program')); ?>" target="_blank" class="nav-link">List Program</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('detail-program')); ?>" target="_blank" class="nav-link">Detail
                                    Program</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('status-pembayaran')); ?>" style="color:#ffffff">
                        <i class="ri-honour-line"></i> <span>Status Pembayaran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('bukti-pembayaran')); ?>" style="color:#ffffff">
                        <i class="ri-honour-line"></i> <span>Bukti Pembayaran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('sertifikat')); ?>" style="color:#ffffff">
                        <i class="ri-honour-line"></i> <span>Sertifikat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts" style="color:#ffffff">
                        <i class="ri-layout-3-line"></i> <span>Template Create</span><span
                            class="badge badge-pill bg-danger"></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('template-create')); ?>" target="_blank" class="nav-link" >Create</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('template-table')); ?>" target="_blank" class="nav-link" >Read</a>
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
<!-- Left Sideba  r End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH C:\laragon\www\default\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>