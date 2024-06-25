@extends('layouts.master')
@section('title') @lang('translation.pricing') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') LIST @endslot
        @slot('title')LIST PROGRAM @endslot
    @endcomponent
    <div class="row justify-content-center mt-4">
        <div class="col-lg-5">
            <div class="text-center mb-4">
                <h4 class="fw-semibold fs-22">DAFTAR PROGRAM KAMI</h4>


            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-xxl-3 col-lg-4">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                    <div class="mb-3">
                        <img class="img-thumbnail" width="100%" src="http://127.0.0.1:8000/build/images/small/img-3.jpg" data-holder-rendered="true">
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Target</h5>

                        </div>
                        <div class="ms-auto">
                            <h4 class="month mb-0">Rp. 1.000.000 <small class="fs-13 text-muted"></small></h4>

                        </div>
                    </div>
<p class="text-muted">Program ini ditujukan untuk individu yang ingin memulai dan terbiasa dengan alat kami.</p>
                    <div class="mb-3">
                        <h5 class="mb-0 fw-semibold">Nama Program</h5>
                        <p class="text-muted">Program Dasar</p>
                    </div>

                    <div class="mb-3">
                        <h5 class="mb-0 fw-semibold">Saldo Saat Ini</h5>
                        <p class="text-muted">Rp. 0</p>
                    </div>

                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-info w-100 mb-3">Lihat Info</a>
                        <a href="javascript:void(0);" class="btn btn-success w-100">Donasi</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
 <div class="col-xxl-3 col-lg-4">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                      <div class="mb-3">
                        <img class="img-thumbnail" width="100%" src="http://127.0.0.1:8000/build/images/small/img-3.jpg" data-holder-rendered="true">
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Target</h5>

                        </div>
                        <div class="ms-auto">
                            <h4 class="month mb-0">Rp. 1.000.000 <small class="fs-13 text-muted"></small></h4>

                        </div>
                    </div>
<p class="text-muted">Program ini ditujukan untuk individu yang ingin memulai dan terbiasa dengan alat kami.</p>
                    <div class="mb-3">
                        <h5 class="mb-0 fw-semibold">Nama Program</h5>
                        <p class="text-muted">Program Dasar</p>
                    </div>

                    <div class="mb-3">
                        <h5 class="mb-0 fw-semibold">Saldo Saat Ini</h5>
                        <p class="text-muted">Rp. 0</p>
                    </div>

                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-info w-100 mb-3">Lihat Info</a>
                        <a href="javascript:void(0);" class="btn btn-success w-100">Donasi</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
 <div class="col-xxl-3 col-lg-4">
            <div class="card pricing-box">
                <div class="card-body bg-light m-2 p-4">
                      <div class="mb-3">
                        <img class="img-thumbnail" width="100%" src="http://127.0.0.1:8000/build/images/small/img-3.jpg" data-holder-rendered="true">
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="mb-0 fw-semibold">Target</h5>

                        </div>
                        <div class="ms-auto">
                            <h4 class="month mb-0">Rp. 1.000.000 <small class="fs-13 text-muted"></small></h4>

                        </div>
                    </div>
<p class="text-muted">Program ini ditujukan untuk individu yang ingin memulai dan terbiasa dengan alat kami.</p>
                    <div class="mb-3">
                        <h5 class="mb-0 fw-semibold">Nama Program</h5>
                        <p class="text-muted">Program Dasar</p>
                    </div>

                    <div class="mb-3">
                        <h5 class="mb-0 fw-semibold">Saldo Saat Ini</h5>
                        <p class="text-muted">Rp. 0</p>
                    </div>

                    <div class="mt-3 pt-2">
                        <a href="javascript:void(0);" class="btn btn-info w-100 mb-3">Lihat Info</a>
                        <a href="javascript:void(0);" class="btn btn-success w-100">Donasi</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

    </div><!--end row-->








@endsection
@section('script')
    <script src="{{ URL::asset('build/js/pages/pricing.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
