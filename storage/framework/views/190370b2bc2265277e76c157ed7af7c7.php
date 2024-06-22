<?php $__env->startSection('title'); ?>
    Detail Program
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            DETAIL
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            DETAIL PROGRAM
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>



    <div class="row">
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
                            <h5>Belum Ada Berita Acara</h5>
                            <p class="mb-0">

                            </p>
                        </div>
                        <div class="tab-pane" id="arrow-profile" role="tabpanel">
                            <h6>Use a color palette</h6>
                            <table class="table table-striped">
<thead>
<tr>
<th scope="col">No</th>
<th scope="col">Nama</th>
<th scope="col">Jumlah</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Bobby Davis</td>
<td><span class="badge bg-success">Confirmed</span></td>
</tr>

</tbody>
</table>
                        </div>

                    </div>
                </div><!-- end card-body -->
            </div>
    </div>


    <!--end add modal-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/js/pages/job-list.init.js')); ?>"></script>

    <!-- App js -->
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\default\resources\views/apps-job-lists.blade.php ENDPATH**/ ?>