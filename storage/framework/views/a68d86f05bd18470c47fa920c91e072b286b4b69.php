

<?php $__env->startSection('content'); ?>

<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Chi Tiết Sản Phẩm</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Trang Chủ</li>
                        <li>Sản Phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Start project Area -->
    <div class="project-Details-page area-padding">
        <div class="container">
          <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="project-inner">
                        <div class="project-image">
                            <img style="width: 555px; height: 453px" src="<?php echo e(Voyager::image( $product->image )); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="project-history">
                        <h3><?php echo e($product->name); ?></h3>
                        <div class="project-name">
                            <ul>
                                <li><span>Giá </span>: <?php echo e(number_format($product->price)); ?>đ</li>
                                <li><span>Mô tả </span> : <?php echo e($product->excerpt); ?></li>
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           <div class="row mar-row">  
                <div class="col-md-10 col-sm-6 col-xs-12">
                    <div class="project-details">
                        <h3><?php echo e($product->name); ?></h3> 
                        <p><?php echo $product->body; ?></p>
                        <ul class="marker-list">
                            <li>Lares dolor sit amet.</li>
                            <li>Animi vero excepturi magnam.</li>
                            <li>ducimus adipisci voluptas.</li>
                            <li>consectetur adipisicing elit.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End main content -->
    </div>
    <!-- Start project Area -->
    <div class="project-area gray-bg area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Sản Phẩm Khác</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project-related">
                    <!-- single-awesome-project start -->
                    <?php $__currentLoopData = $recentProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$rcProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="project-single">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="<?php echo e(Voyager::image( $rcProduct->image )); ?>">
                                        <img style="width: 360px; height: 339px" src="<?php echo e(Voyager::image( $rcProduct->image )); ?>" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4><a href="<?php echo e(route('product.show', $rcProduct->slug)); ?>"><?php echo e($rcProduct->name); ?> </a></h4>
                                                <span><?php echo e(number_format($rcProduct->price)); ?>đ</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>		
            </div>	
        </div>
        <!-- End main content -->
    </div>
    <!-- End project Area -->

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\havu\resources\views/frontend/product/productDetail.blade.php ENDPATH**/ ?>