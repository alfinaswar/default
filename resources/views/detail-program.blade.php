@extends('layouts.master')
@section('title')
    Detail Program
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            DETAIL
        @endslot
        @slot('title')
            DETAIL PROGRAM
        @endslot
    @endcomponent



    <div class="row">
    <div class="card">
    <div class="card-body">
        <div class="container">
           <div class="row">
               <div class="col-4">
                <img src="{{asset('images/FOOD.png')}}" alt="" class="img-fluid" height="100%">
               </div>
               <div class="col-8">
                      <div class="card joblist-card">
            <div class="card-body">
                <div class="d-flex mb-4">
                    <div class="avatar-sm">
                        <div class="avatar-title bg-light rounded"> <img src="build/images/companies/img-3.png" alt=""
                                class="avatar-xxs companyLogo-img"> </div>
                    </div>
                    <div class="ms-3 flex-grow-1"> <img src="build/images/small/img-2.jpg" alt=""
                            class="d-none cover-img"> <a href="#!">
                            <h5 class="job-title">Detail Program</h5>
                        </a>
                        <p class="company-name text-muted mb-0">Data yang Dibutuhkan</p>
                    </div>
                    <div> <button type="button" class="btn btn-ghost-primary btn-icon custom-toggle"
                            data-bs-toggle="button"> <span class="icon-on"><i class="ri-bookmark-line"></i></span> <span
                                class="icon-off"><i class="ri-bookmark-fill"></i></span> </button> </div>
                </div>

                <div><span class="badge bg-primary-subtle text-primary me-1" style="font-size: 15px;">Ayo Berwakaf</span></div>
                <div class="mt-3">
                    <h5 class="mb-0 fw-semibold">Deskripsi</h5>
                    <p class="text-muted">Program ini bertujuan untuk mengumpulkan dana untuk kegiatan sosial. Mari berwakaf dan berkontribusi pada kegiatan ini.</p>
                </div>
                <div class="mt-3">
                    <h5 class="mb-0 fw-semibold">Tab Berita dan Laporan Penggunaan</h5>
                    <p class="text-muted">Lihat berita dan laporan penggunaan dana untuk program ini.</p>
                </div>
            </div>
            <span class="text-danger text-end fw-bold">Progres saat ini 70%</span>
            <div class="progress progress-xl mb-2">

                                <div class="progress-bar bg-danger" role="progressbar"
                                    style="width: 10%;" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100">

                                </div>
            </div>
            <div class="card-footer border-top-dashed">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <div><i class="ri-calculator-line align-bottom me-1"></i> <span class="dana-terkumpul">Rp. 1.000.000</span></div>
                    <div><i class="ri-calculator-line align-bottom me-1"></i> <span class="dana-kurang">Rp. 500.000</span></div>
                    <div><i class="ri-time-line align-bottom me-1"></i> <span class="waktu">2 Bulan</span></div>
                    <div><a href="#!" class="btn btn-primary viewjob-list">Donasi Sekarang <i
                                class="ri-arrow-right-line align-bottom ms-1"></i></a></div>
                </div>
            </div>
        </div>
               </div>

           </div>
        </div>

    </div>
    </div>


        <div class="card">
                <div class="card-body">

                    <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#arrow-overview" role="tab" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                                <span class="d-none d-sm-block">Berita Acara</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#arrow-profile" role="tab" aria-selected="false" tabindex="-1">
                                <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                                <span class="d-none d-sm-block">Laporan Penggunaan</span>
                            </a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active show" id="arrow-overview" role="tabpanel">
                               <div class="row">
        <div class="col-xxl-3 col-lg-4">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">

                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Berita Acara</h5>

                        </div>

                    </div>

<p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium rem numquam officia ex tempore animi sint eaque hic, deleniti tempora quod, ea perspiciatis doloribus reiciendis porro ab itaque blanditiis. Alias?</p>

                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-success w-100">Donasi</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="col-xxl-3 col-lg-4">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">

                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Berita Acara</h5>

                        </div>

                    </div>

<p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium rem numquam officia ex tempore animi sint eaque hic, deleniti tempora quod, ea perspiciatis doloribus reiciendis porro ab itaque blanditiis. Alias?</p>

                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-success w-100">Donasi</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="col-xxl-3 col-lg-4">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">

                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Berita Acara</h5>

                        </div>

                    </div>

<p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium rem numquam officia ex tempore animi sint eaque hic, deleniti tempora quod, ea perspiciatis doloribus reiciendis porro ab itaque blanditiis. Alias?</p>

                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-success w-100">Donasi</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

    </div><!--end row-->

                        </div>
                        <div class="tab-pane" id="arrow-profile" role="tabpanel">
                            <div class="row">
            <div class="col-xxl-3 col-sm-4 project-card">
            <div class="card card-height-100">
                <div class="card-body">
                    <div class="d-flex flex-column h-100">
                        <div class="d-flex">
                            <div class="flex-grow-1">

                            </div>
                            <div class="flex-shrink-0">
                                <div class="d-flex gap-1 align-items-center">
                                    <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                        <span class="avatar-title bg-transparent fs-15">
                                            <i class="ri-star-fill"></i>
                                        </span>
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-warning-subtle rounded p-2">
                                        <img src="http://127.0.0.1:8000/build/images/brands/slack.png" alt="" class="img-fluid p-1">
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-body">Catatan Laporan Penggunaan</a></h5>
                                <p class="text-muted text-truncate-two-lines mb-3">deksripsi</p>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="mt-auto">
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1">
                                    <div>Total Pengeluaran: Rp 34.000.000</div>
                                </div>
                            </div>
                            <div class="progress progress-sm animated-progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div>
                            <div class="progress progress-sm animated-progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div>
                    </div>

                </div>
                <!-- end card body -->
                <div class="card-footer bg-transparent border-top-dashed py-2">
                    <div class="d-flex align-items-center">

                        <div class="flex-shrink-0">
                            <div class="text-muted">
                                <i class="ri-calendar-event-fill me-1 align-bottom"></i> 10 Jul, 2021
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end card footer -->
            </div>
            <!-- end card -->
        </div>
                    <div class="col-xxl-3 col-sm-4 project-card">
            <div class="card card-height-100">
                <div class="card-body">
                    <div class="d-flex flex-column h-100">
                        <div class="d-flex">
                            <div class="flex-grow-1">

                            </div>
                            <div class="flex-shrink-0">
                                <div class="d-flex gap-1 align-items-center">
                                    <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                        <span class="avatar-title bg-transparent fs-15">
                                            <i class="ri-star-fill"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-warning-subtle rounded p-2">
                                        <img src="http://127.0.0.1:8000/build/images/brands/slack.png" alt="" class="img-fluid p-1">
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-body">Catatan Laporan Penggunaan</a></h5>
                                <p class="text-muted text-truncate-two-lines mb-3">deskripsi</p>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="mt-auto">
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1">
                                    <div>Total Pengeluaran: Rp 34.000.000</div>
                                </div>
                            </div>
                            <div class="progress progress-sm animated-progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div>
                            <div class="progress progress-sm animated-progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div>
                    </div>

                </div>
                <!-- end card body -->
                <div class="card-footer bg-transparent border-top-dashed py-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="text-muted">
                                <i class="ri-calendar-event-fill me-1 align-bottom"></i> 10 Jul, 2021
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end card footer -->
            </div>
            <!-- end card -->
        </div>
                    <div class="col-xxl-3 col-sm-4 project-card">
            <div class="card card-height-100">
                <div class="card-body">
                    <div class="d-flex flex-column h-100">
                        <div class="d-flex">
                            <div class="flex-grow-1">

                            </div>
                            <div class="flex-shrink-0">
                                <div class="d-flex gap-1 align-items-center">
                                    <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                        <span class="avatar-title bg-transparent fs-15">
                                            <i class="ri-star-fill"></i>
                                        </span>
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-warning-subtle rounded p-2">
                                        <img src="http://127.0.0.1:8000/build/images/brands/slack.png" alt="" class="img-fluid p-1">
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-body">Catatan Laporan Penggunaan</a></h5>
                                <p class="text-muted text-truncate-two-lines mb-3">deksripsi</p>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1">
                                    <div>Total Pengeluaran: Rp 34.000.000</div>
                                </div>
                            </div>
                            <div class="progress progress-sm animated-progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div>
                    </div>

                </div>
                <!-- end card body -->
                <div class="card-footer bg-transparent border-top-dashed py-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="text-muted">
                                <i class="ri-calendar-event-fill me-1 align-bottom"></i> 10 Jul, 2021
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end card footer -->
            </div>
            <!-- end card -->
        </div>
                            </div>
                        </div>

                    </div>
                </div><!-- end card-body -->
            </div>
    </div>


    <!--end add modal-->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/job-list.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
