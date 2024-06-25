@extends('layouts.master')
@section('title') @lang('translation.details') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') invoices @endslot
@slot('title') Status Pembayaran @endslot
@endcomponent
<div class="row justify-content-center">

        <div class="col-xxl-9">
            <div class="card" id="demo">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card-header border-bottom-dashed p-4">
                                                            <div class="mt-4">

                            </div>
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <img src="https://khizanatuna.id/build/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="17">
                                    <img src="https://khizanatuna.id/build/images/logo-light.png" class="card-logo card-logo-light" alt="logo light" height="17">
                                    <div class="mt-sm-5 mt-4">
                                        <h6 class="text-muted text-uppercase fw-semibold">Alamat</h6>
                                        <p class="text-muted mb-1" id="address-details">Gontor, Kec. Mlarak, Kabupaten
                                            Ponorogo, Jawa Timur</p>
                                        <p class="text-muted mb-0" id="zip-code"><span>Kode Pos:</span> 63472</p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 mt-sm-0 mt-3">
                                    <h6><span class="text-muted fw-normal">Email:</span>
                                        <span id="email">khizanatuna@unida.gontor.ac.id</span>
                                    </h6>
                                    <h6><span class="text-muted fw-normal">Website:</span> <a href="khizanatuna.id" class="link-primary" target="_blank" id="website">khizanatuna.id</a></h6>
                                    <h6 class="mb-0"><span class="text-muted fw-normal">Contact No: </span><span id="contact-no"> 085648887170</span></h6>
                                </div>
                            </div>
                        </div><!--end card-header-->
                    </div><!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold fs-13">Invoice No</p>
                                    <h5 class="fs-15 mb-0">59af49a5-d5cf-4358-8efe-645c9e5f0f0e</h5>
                                </div><!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold fs-13">Tanggal Dibuat</p>
                                    <h5 class="fs-15 mb-0"><span id="invoice-date">14 May, 2024</span>
                                        <small class="text-muted" id="invoice-time">13:35</small>
                                    </h5>
                                </div><!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold fs-13">Payment Status</p>
                                                                                <span class="badge bg-success-subtle text-success fs-12" id="payment-status">Paid</span>
                                                                        </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4 border-top border-top-dashed">
                            <div class="row g-3">
                                <div class="col-6">
                                    <h6 class="text-muted text-uppercase fw-semibold mb-3 fs-13">Detail Donatur</h6>
                                    <p class="fw-medium mb-2" id="billing-name">Moch. Nasheh Annafii</p>
                                    <p class="text-muted mb-1" id="billing-address-line-1">
                                        nashehannafii@gmail.com</p>
                                    <p class="text-muted mb-1"><span>Kontak : </span><span id="billing-phone-no">085219370971</span></p>
                                    <p class="text-muted mb-0"><span>Jenis Donatur : </span><span id="billing-tax-no">alumni</span>
                                    </p>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                    <thead>
                                        <tr class="table-active">
                                            <th scope="col" style="width: 50px;">#</th>
                                            <th scope="col">Nama Program</th>
                                            <th scope="col">Jenis</th>
                                            <th scope="col" class="text-end">Besaran</th>
                                        </tr>
                                    </thead>
                                    <tbody id="products-list">
                                        <tr>
                                            <th scope="row">01</th>
                                            <td class="text-start">
                                                <span class="fw-medium">Pembangunan Museum Gontor</span>
                                            </td>
                                            <td>wakaf</td>
                                            <td class="text-end">
                                                Rp. 50,000
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                            <div class="border-top border-top-dashed mt-2">
                                <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-end">
                                                Rp. 50,000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Biaya Admin Bank Bank Muamalat</td>
                                            <td class="text-end">
                                                Rp. 0
                                            </td>
                                        </tr>
                                                                                                                            <tr>
                                                <td>Admin Aplikasi</td>
                                                <td class="text-end">
                                                    Rp. 0
                                                </td>
                                            </tr>
                                                                                                                                <tr>
                                                <td>Admin Bank Mumalat Indonesia</td>
                                                <td class="text-end">
                                                    Rp. 0
                                                </td>
                                            </tr>
                                                                                                                            <tr class="border-top border-top-dashed fs-15">
                                            <th scope="row">Total</th>
                                            <th class="text-end">
                                                Rp. 50,000
                                            </th>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                            <div class="mt-3">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3 fs-13">Detail Pembayaran :</h6>
                                <p class="text-muted mb-1">Metode Pembayaran: <span class="fw-medium" id="payment-method">Bank Mumalat Indonesia (bmi)</span>
                                </p>
                                                                        <span class="badge bg-success-subtle text-success fs-12" id="payment-status">Paid</span>
                                                                                                        <p class="text-muted mb-1">Dibayar Tanggal: <span class="fw-medium" id="card-number"></span>
                                    </p>
                                                                <p class="text-muted">Total :<span id="card-total-amount">Rp. 50,000</span>
                                </p>
                            </div>

                            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                                <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end row-->
    </div>
<!--end row-->
@endsection
@section('script')
<script src="{{ URL::asset('build/js/pages/invoicedetails.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
