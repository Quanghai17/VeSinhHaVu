

<?php $__env->startSection('content'); ?>
    
    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div style="padding: 60px 3px;" class="breadcrumb">
                        <div class="section-headline white-headline text-center">
                            <h3><?php echo e($staticdatas->title); ?></h3>
                        </div>
                        <ul>
                            <li class="home-bread">Trang Chủ</li>
                            <li>Chi Tiết Về Dịch Vụ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!-- End services Area -->
    <div class="single-services-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="page-head-left">
                        <!-- strat single area -->
                        <div class="single-page-head">
                            <div class="left-menu">
                                <ul>
                                    <li class="active"><a href="#">Trang Chủ</a></li>
                                    <?php $__currentLoopData = $service01; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('service.detail',$item->slug)); ?>"><?php echo e($item->title); ?></a></li>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>

                        <!-- strat single area -->

                        <!-- strat single area -->
                        <div class="single-page-head">
                            <div class="clients-support">
                                <div class="support-img">
                                    <img src="<?php echo e(asset('assets/img/service/ser1.jpg')); ?>" alt="">
                                    <div class="support-text">
                                        <h4>Điện Thoại Liên Hệ</h4>
                                        <a><i class="icon icon-phone"></i><?php echo e(setting('site.phone')); ?></a>
                                        <p>Hỗ trợ 24/24
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End left sidebar -->
                <!-- Start service page -->
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-page">
                                <div class="page-img elec-page">
                                    <img src="<?php echo e(Voyager::image( $staticdatas->image )); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- strat single page -->
                        <!-- single-well end-->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="single-well">
                              <a href="#">
                                  <h3><?php echo e($staticdatas->title); ?></h3>
                              </a>
                              <p><?php echo $staticdatas->body; ?></p>
                          </div>
                      </div>
                    </div>
                    <!-- end Row -->
                    <div class="row mar-row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="single-page">
                                <div class="page-img elec-page">
                                    <img src="img/service/2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="single-well">
                                <a href="#">

                                </a>
                                <p></p>

                            </div>
                        </div>
                        <!-- End single page -->
                    </div>
                    <!-- end Row -->

                    <!-- end Row -->
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\havu\resources\views/frontend/service/detail.blade.php ENDPATH**/ ?>