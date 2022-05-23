

<?php $__env->startSection('content'); ?>

<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Thông Tin Tuyển Dụng</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Trang Chủ</li>
                        <li>Tuyển Dụng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <div class="blog-grid">
                <?php $__currentLoopData = $recruits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $recruit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Start single blog -->
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="<?php echo e(route('show.detail', $recruit->slug)); ?>">
                                <img style="width: 396px; height: 240px" src="<?php echo e(Voyager::image( $recruit->image )); ?>" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                           <div class="blog-title">
                               <div class="blog-meta">
                                    <span class="date-type">
                                        <?php echo e(date_format($recruit->created_at,"d/m/Y H:i:s")); ?>

                                    </span>
                                   
                                    </span>
                                </div>
                                <a href="<?php echo e(route('blog.detail', $recruit->slug)); ?>">
                                    <h4><?php echo e($recruit->title); ?></h4>
                                </a>
                            </div>
                            <div class="blog-text">
                                <p><?php echo e($recruit->excerpt); ?></p>
                                <a class="blog-btn" href="<?php echo e(route('blog.detail', $recruit->slug)); ?>">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- End single blog -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog-pagination">
                   <ul class="pagination">
                       <li><a href="#">&lt;</a></li>
                       <li class="active"><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">&gt;</a></li>
                   </ul>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!--Blog Area Start-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\havu\resources\views/frontend/recruit/index.blade.php ENDPATH**/ ?>