

<?php $__env->startSection('content'); ?>
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Chi Tiết Bài Viết</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Trang Chủ</li>
                        <li><?php echo e($title); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!--Blog Area Start-->
<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <div class=" blog-page-details">
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                   <!-- single-blog start -->
                    <article class="blog-post-wrapper">
                        <div class="blog-banner">
                            <a href="#" class="blog-images">
                                <img style="width: 750px; height: 462x" src="<?php echo e(Voyager::image( $blog->image )); ?>" alt="">
                            </a>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="date-type">
                                        <?php echo e(date_format($blog->created_at,"d/m/Y H:i:s")); ?>

                                    </span>
                                    
                                    </span>
                                </div>
                                <a href="#"><h4><?php echo e($title); ?></h4></a>
                                <p><?php echo $blog->body; ?>.</p>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                    
                    <!-- single-blog end -->
                </div>
                <!-- End main column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="left-head-blog">
                        <div class="left-blog-page">
                            <!-- search option start -->
                            <form action="#">
                                <div class="blog-search-option">
                                    <input type="text" placeholder="Search...">
                                    <button class="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="left-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>Bài Viết Liên Quan</h4>
                                <div class="recent-post">
                                    <!-- start single post -->
                                    <?php $__currentLoopData = $recentPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="<?php echo e(route('show.detail', $rep->slug)); ?>">
                                                <img src="<?php echo e(Voyager::image( $rep->image )); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="<?php echo e(route('show.detail', $rep->slug)); ?>"><?php echo e($rep->title); ?></a></p>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- End single post -->
                                </div>
                            </div>
                            <!-- recent end -->
                        </div>
                    </div>
                </div>
                <!-- End left sidebar -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
    <!-- Blog Post __________________________ -->
   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\havu\resources\views/frontend/recruit/blogDetail.blade.php ENDPATH**/ ?>