

<?php $__env->startSection('content'); ?>
    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div style="padding: 60px 3px;" class="breadcrumb">
                        <div class="section-headline white-headline text-center">
                            <h3>Giới Thiệu</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Trang Chủ</li>
                            <li>Thông Tin Về Chúng Tôi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-page-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-image">
                        
                        <img src="<?php echo e(Voyager::image($about->image)); ?>" alt="">
                    </div>
                </div>
                <!-- column end -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-content">
                        <h4><?php echo e($about->title); ?></h4>
                        <p><?php echo $about->body; ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end -->
    <!-- Start-About-feature-area -->
    <!-- End-About-feature-area -->
    <!-- Team area start -->
    <div class="team-area area-padding">
        <div class="container">
            <!-- section head -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Đội Ngũ Của Chúng Tôi</h3>
                        <p>Luôn Đặt Chất Lượng Lên Hàng Đầu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-member text-center">
                    <!-- Single team member -->
                    <?php $__currentLoopData = $personnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img style="width: 200px; height: 200px"
                                            src="<?php echo e(Voyager::image($personnel->image)); ?>" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h4><a href="#"><?php echo e($personnel->name); ?></a></h4>
                                    <p><?php echo e($personnel->position); ?></p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end -->
    <!-- Start testimonials Area -->
    
    <!-- End testimonials end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\havu\resources\views/frontend/aboutUs/index.blade.php ENDPATH**/ ?>