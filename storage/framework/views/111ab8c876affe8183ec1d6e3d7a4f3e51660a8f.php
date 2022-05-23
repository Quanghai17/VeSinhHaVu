


<?php $__env->startSection('content'); ?>

<div class="page-area">
    <div class="breadcumb-overlay" style="background-image: url()"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="padding: 60px 3px;" class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Sản Phẩm Của Chúng Tôi</h3>
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

    

    <div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <div class="blog-grid">
                    <!-- Start single blog -->
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="<?php echo e(route('product.show', $product->slug)); ?>">
                                    <img style="width: 300px; height: 290px" src="<?php echo e(Voyager::image( $product->image )); ?>" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                               <div class="blog-title">
                                   <div class="blog-meta">
                                        <span class="date-type">
                                            <?php echo e(number_format($product->price)); ?>đ
                                        </span>
                                        
                                    </div>
                                    <a href="<?php echo e(route('product.show', $product->slug)); ?>">
                                        <h4><?php echo e($product->name); ?></h4>
                                    </a>
                                </div>
                                <div class="blog-text">
                                    <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  overflow: hidden;"><?php echo e($product->excerpt); ?></p>
                                    <a class="blog-btn" href="<?php echo e(route('product.show', $product->slug)); ?>">Xem Chi Tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-pagination">
                        <?php echo e($products->links('frontend.layouts.partials.paginate')); ?>

                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\havu\resources\views/frontend/product/index.blade.php ENDPATH**/ ?>