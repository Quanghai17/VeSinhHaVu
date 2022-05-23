

<?php $__env->startSection('content'); ?>



<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Dịch Vụ Vệ Sinh</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Trang Chủ</li>
                        <li>Tất cả dịch vụ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- service area start -->
<div class="services-area services-4 area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Dịch Vụ Của Chúng Tôi</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="all-services">
                <!-- Start services -->
                <?php $__currentLoopData = $staticdatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staticdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service">
                       
                        <a class="service-image" href="<?php echo e(route('service.detail', $staticdata->slug)); ?>">
                            <img style="width: 369px; height: 244px" src="<?php echo e(Voyager::image( $staticdata->image )); ?>" alt="">
                        </a>
                        <div class="service-content">
                            <h4><?php echo e($staticdata->title); ?></h4>
                            <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  overflow: hidden;"><?php echo e($staticdata->meta_description); ?></p>
                            <a class="service-btn" href="<?php echo e(route('service.detail', $staticdata->slug)); ?>">Đọc Thêm</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\havu\resources\views/frontend/service/index.blade.php ENDPATH**/ ?>