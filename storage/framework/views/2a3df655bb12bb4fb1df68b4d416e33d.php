<?php $__env->startSection('title'); ?>
    Landing
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        


        <body data-bs-spy="scroll" data-bs-target="#navbar-example">

            <!-- Begin page -->
            <div class="layout-wrapper landing">
                <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="index">
                            <img src="<?php echo e(URL::asset('build/images/logo-dark.png')); ?>" class="card-logo card-logo-dark"
                                alt="logo dark" height="17">
                            <img src="<?php echo e(URL::asset('build/images/logo-light.png')); ?>" class="card-logo card-logo-light"
                                alt="logo light" height="17">
                        </a>
                        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#hero">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tentangkami">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#visimisi">Visi & Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#program">Program</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#fasilitas">Fasilitas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#kontak">Kontak</a>
                                </li>
                            </ul>

                            <div class="">
                                <a href="auth-signin-basic"
                                    class="btn btn-link fw-medium text-decoration-none text-dark">Sign
                                    in</a>
                                <a href="auth-signup-basic" class="btn btn-primary">Sign Up</a>
                            </div>
                        </div>

                    </div>
                </nav>
                <!-- end navbar -->
                <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

                <!-- start hero section -->
                <section class="section pb-0 hero-section" id="hero">
                    <div class="bg-overlay bg-overlay-pattern"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-sm-10">
                                <div class="text-center mt-lg-5 pt-5">
                                    <h1 class="display-6 fw-semibold mb-3 lh-base">Selamat datang di website kami <span class="text-success">Khiznatuna </span></h1>
                                    <p class="lead text-muted lh-base">Velzon is a fully responsive, multipurpose and
                                        premium Bootstrap 5 Admin & Dashboard Template built in multiple frameworks.</p>

                                    <div class="d-flex gap-2 justify-content-center mt-4">
                                        <a href="auth-signup-basic" class="btn btn-primary">Get Started <i
                                                class="ri-arrow-right-line align-middle ms-1"></i></a>
                                        <a href="pages-pricing" class="btn btn-danger">View Plans <i
                                                class="ri-eye-line align-middle ms-1"></i></a>
                                    </div>
                                </div>

                                <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                                    <div class="demo-img-patten-top d-none d-sm-block">
                                        <img src="<?php echo e(URL::asset('build/images/landing/img-pattern.png')); ?>"
                                            class="d-block img-fluid" alt="...">
                                    </div>
                                    <div class="demo-img-patten-bottom d-none d-sm-block">
                                        <img src="<?php echo e(URL::asset('build/images/landing/img-pattern.png')); ?>"
                                            class="d-block img-fluid" alt="...">
                                    </div>
                                    <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                        <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                            <div class="carousel-item active" data-bs-interval="2000">
                                                <img src="<?php echo e(URL::asset('build/images/landing/gambar1.png')); ?>"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="<?php echo e(URL::asset('build/images/demos/saas.png')); ?>"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="<?php echo e(URL::asset('build/images/demos/material.png')); ?>"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="<?php echo e(URL::asset('build/images/demos/minimal.png')); ?>"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="<?php echo e(URL::asset('build/images/demos/creative.png')); ?>"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="<?php echo e(URL::asset('build/images/demos/modern.png')); ?>"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="<?php echo e(URL::asset('build/images/demos/interactive.png')); ?>"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                    <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 1440 120">
                            <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                                <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <!-- end shape -->
                </section>
                <!-- end hero section -->

                <!-- start client section -->
                <div class="pt-5 mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="text-center mt-5">


                                    <!-- Swiper -->
                                    <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="<?php echo e(URL::asset('build/images/clients/amazon.svg')); ?>"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="<?php echo e(URL::asset('build/images/clients/walmart.svg')); ?>"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="<?php echo e(URL::asset('build/images/clients/lenovo.svg')); ?>"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="<?php echo e(URL::asset('build/images/clients/paypal.svg')); ?>"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="<?php echo e(URL::asset('build/images/clients/shopify.svg')); ?>"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="<?php echo e(URL::asset('build/images/clients/verizon.svg')); ?>"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end client section -->

                <!-- start services -->
                <section class="section" id="tentangkami">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h1 class="mb-3 ff-secondary fw-semibold lh-base">Tentang Kami</h1>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sunt dolorum officia molestiae odio omnis, quisquam expedita excepturi sapiente id cum ex harum doloribus delectus eum consequatur sed? Reprehenderit, numquam.</p>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div class="d-flex p-3">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                                <i class="ri-pencil-ruler-2-line fs-36"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-18">Detail Tentang Kami</h5>
                                        <p class="text-muted my-3 ff-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab nostrum magnam natus dolore, temporibus optio consequuntur itaque beatae, a aspernatur in, laboriosam molestias maiores repudiandae minus animi fugiat dignissimos expedita.</p>
                                        <div>
                                            <a href="#" class="fs-13 fw-medium">Learn More <i
                                                    class="ri-arrow-right-s-line align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-4">
                                <div class="d-flex p-3">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                                <i class="ri-palette-line fs-36"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-18">Detail Tentang Kami</h5>
                                        <p class="text-muted my-3 ff-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab nostrum magnam natus dolore, temporibus optio consequuntur itaque beatae, a aspernatur in, laboriosam molestias maiores repudiandae minus animi fugiat dignissimos expedita.</p>
                                        <div>
                                            <a href="#" class="fs-13 fw-medium">Learn More <i
                                                    class="ri-arrow-right-s-line align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-4">
                                <div class="d-flex p-3">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                                <i class="ri-lightbulb-flash-line fs-36"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="flex-grow-1">
                                        <h5 class="fs-18">Detail Tentang Kami</h5>
                                        <p class="text-muted my-3 ff-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab nostrum magnam natus dolore, temporibus optio consequuntur itaque beatae, a aspernatur in, laboriosam molestias maiores repudiandae minus animi fugiat dignissimos expedita.</p>
                                        <div>
                                            <a href="#" class="fs-13 fw-medium">Learn More <i
                                                    class="ri-arrow-right-s-line align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end col -->


                            <!-- end col -->
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end services -->
                <!-- start features -->
                <section class="section" id="visimisi">
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="text-muted">
                                    <h5 class="fs-12 text-uppercase text-success">Visi dan Misi</h5>
                                    <h4 class="mb-3">Visi</h4>
                                    <p class="mb-4 ff-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit quod maxime! Eveniet dolorem similique iure sit neque amet maxime molestias consequuntur, repellendus in perspiciatis. Doloremque recusandae voluptatibus soluta fugiat.</p>

                                    <div class="row">
                                        <h4 class="mb-3">Misi</h4>
                                        <div class="col-sm-5">
                                            <div class="vstack gap-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">

                                                        <div class="avatar-xs icon-effect">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <h5 class="fs-14 mb-0">Misi 1</h5>

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="fs-14 mb-0">Misi 2</h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="fs-14 mb-0">Misi 2</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="vstack gap-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="fs-14 mb-0">Misi 2</h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="fs-14 mb-0">Misi 2</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <a href="index" class="btn btn-primary">Learn More <i
                                                class="ri-arrow-right-line align-middle ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                                <div>
                                    <img src="<?php echo e(URL::asset('build/images/landing/features/img-2.png')); ?>"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end features -->

                <!-- start plan -->
                <section class="section bg-light" id="program">
                    <div class="bg-overlay bg-overlay-pattern"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">Program Unggulan Kami</h3>
                                    <p class="text-muted mb-4">Deskripsi Program Unggulan Kami dari Khiznatuna</p>


                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">
                                    <div class="card-body p-4 m-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">Pgrogram 1</h5>
                                                <p class="text-muted mb-0">For Startup</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>Rp. </small></sup><span
                                                    class="ff-secondary fw-bold">100.000</span> <span
                                                    class="fs-13 text-muted">Target</span></h1>

                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            Upto <b>3</b> Projects
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            Upto <b>299</b> Customers
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            Scalable Bandwidth
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <b>5</b> FTP Login
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                           <div class="col-lg-4">
                                <div class="card plan-box mb-0">
                                    <div class="card-body p-4 m-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">Pgrogram 1</h5>
                                                <p class="text-muted mb-0">For Startup</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>Rp. </small></sup><span
                                                    class="ff-secondary fw-bold">100.000</span> <span
                                                    class="fs-13 text-muted">Target</span></h1>

                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            Upto <b>3</b> Projects
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            Upto <b>299</b> Customers
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            Scalable Bandwidth
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <b>5</b> FTP Login
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">
                                    <div class="card-body p-4 m-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">Pgrogram 1</h5>
                                                <p class="text-muted mb-0">For Startup</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>Rp. </small></sup><span
                                                    class="ff-secondary fw-bold">100.000</span> <span
                                                    class="fs-13 text-muted">Target</span></h1>

                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            Upto <b>3</b> Projects
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            Upto <b>299</b> Customers
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            Scalable Bandwidth
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <b>5</b> FTP Login
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end plan -->

                <!-- start faqs -->

                <!-- end faqs -->

                <!-- start review -->

                <!-- end review -->

                <!-- start counter -->

                <!-- end counter -->

                <!-- start Work Process -->
                <section class="section" id="fasilitas">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">Fasilitas</h3>
                                    <p class="text-muted mb-4 ff-secondary">In an ideal world this website wouldn’t exist,
                                        a client would
                                        acknowledge the importance of having web copy before the Proin vitae ipsum vel ex
                                        finibus semper design starts.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row text-center">
                            <div class="col-lg-4">
                                <div class="process-card mt-4">
                                    <div class="process-arrow-img d-none d-lg-block">
                                        <img src="<?php echo e(URL::asset('build/images/landing/process-arrow-img.png')); ?>"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="avatar-sm icon-effect mx-auto mb-4">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                           <i class="fas fa-tasks"></i>
                                        </div>
                                    </div>

                                    <h5>Banyak Program Pilihan</h5>
                                    <p class="text-muted ff-secondary">The profession and the employer and your desire to
                                        make your mark.</p>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-4">
                                <div class="process-card mt-4">
                                    <div class="process-arrow-img d-none d-lg-block">
                                        <img src="<?php echo e(URL::asset('build/images/landing/process-arrow-img.png')); ?>"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="avatar-sm icon-effect mx-auto mb-4">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                            <i class="ri-user-follow-line"></i>
                                        </div>
                                    </div>

                                    <h5>Profesional</h5>
                                    <p class="text-muted ff-secondary">The most important aspect of beauty was, therefore,
                                        an inherent part.</p>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-4">
                                <div class="process-card mt-4">
                                    <div class="avatar-sm icon-effect mx-auto mb-4">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                            <i class="far fa-credit-card"></i>
                                        </div>
                                    </div>

                                    <h5>Fleksibel</h5>
                                    <p class="text-muted ff-secondary">We quickly learn to fear and thus automatically
                                        avoid potentially.</p>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end Work Process -->

                <!-- start team -->

                <!-- end team -->

                <!-- start contact -->
                <section class="section" id="contact">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                                    <p class="text-muted mb-4 ff-secondary">We thrive when coming up with innovative ideas
                                        but also
                                        understand that a smart concept should be supported with faucibus sapien odio
                                        measurable
                                        results.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div>
                                    <div class="mt-4">
                                        <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                                        <div class="ff-secondary fw-semibold">4461 Cedar Street Moro, <br />AR 72368</div>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>
                                        <div class="ff-secondary fw-semibold">2467 Swick Hill Street <br />New Orleans, LA
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                                        <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-8">

                                    <img src="<?php echo e(asset('images/contact-us.png')); ?>" width="100%">

                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end contact -->

                <!-- start cta -->

                <!-- end cta -->

                <!-- Start footer -->
                <footer class="custom-footer bg-dark py-5 position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 mt-4">
                                <div>
                                    <div>
                                        <img src="<?php echo e(URL::asset('build/images/logo-light.png')); ?>" alt="logo light"
                                            height="17">
                                    </div>
                                    <div class="mt-4 fs-13">
                                        <p>Premium Multipurpose Admin & Dashboard Template</p>
                                        <p class="ff-secondary">You can build any type of web application like eCommerce,
                                            CRM, CMS, Project
                                            management apps, Admin Panels, etc using Velzon.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 ms-lg-auto">
                                <div class="row">
                                    <div class="col-sm-4 mt-4">
                                        <h5 class="text-white mb-0">Company</h5>
                                        <div class="text-muted mt-3">
                                            <ul class="list-unstyled ff-secondary footer-list">
                                                <li><a href="pages-profile">About Us</a></li>
                                                <li><a href="pages-gallery">Gallery</a></li>
                                                <li><a href="apps-projects-overview">Projects</a></li>
                                                <li><a href="pages-timeline">Timeline</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-4">
                                        <h5 class="text-white mb-0">Apps Pages</h5>
                                        <div class="text-muted mt-3">
                                            <ul class="list-unstyled ff-secondary footer-list">
                                                <li><a href="pages-pricing">Calendar</a></li>
                                                <li><a href="apps-mailbox">Mailbox</a></li>
                                                <li><a href="apps-chat">Chat</a></li>
                                                <li><a href="apps-crm-deals">Deals</a></li>
                                                <li><a href="apps-tasks-kanban">Kanban Board</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-4">
                                        <h5 class="text-white mb-0">Support</h5>
                                        <div class="text-muted mt-3">
                                            <ul class="list-unstyled ff-secondary footer-list">
                                                <li><a href="pages-faqs">FAQ</a></li>
                                                <li><a href="pages-faqs">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row text-center text-sm-start align-items-center mt-5">
                            <div class="col-sm-6">

                                <div>
                                    <p class="copy-rights mb-0">
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> © Velzon - Themesbrand
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end mt-3 mt-sm-0">
                                    <ul class="list-inline mb-0 footer-social-link">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-facebook-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-github-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-linkedin-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-google-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-dribbble-line"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end footer -->

                <!--start back-to-top-->
                <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
                    <i class="ri-arrow-up-line"></i>
                </button>
                <!--end back-to-top-->

            </div>
            <!-- end layout wrapper -->

        </body>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('build/js/pages/landing.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\default\resources\views/landing.blade.php ENDPATH**/ ?>