<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.pricing'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> LIST <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>LIST PROGRAM <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
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








<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/js/pages/pricing.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\default\resources\views/list-program.blade.php ENDPATH**/ ?>