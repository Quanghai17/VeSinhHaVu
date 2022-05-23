<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?php echo e($pageMeta['meta_description'] ?? setting('site.description')); ?>" />
    <meta name="content" content="<?php echo e($pageMeta['meta_content'] ?? setting('site.content')); ?>" />

    <title><?php echo e($pageMeta['title'] ?? setting('site.title')); ?></title>

    <link rel="shortcut icon" href="<?php echo e(\TCG\Voyager\Facades\Voyager::image(setting('site.logo'))); ?>" type="image/png">

    <meta property="og:image"
        content="<?php echo e(\TCG\Voyager\Facades\Voyager::image($pageMeta['image'] ?? setting('site.logo'))); ?>" />
    <meta property="og:url" content="<?php echo e(\Request::fullUrl()); ?>" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="<?php echo e($pageMeta['title'] ?? setting('site.title')); ?>" />
    <meta property="og:description" content="<?php echo e($pageMeta['meta_description'] ?? setting('site.description')); ?>" />
    <meta property="og:content" content="<?php echo e($pageMeta['meta_content'] ?? setting('site.content')); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- GOOGLE WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <!-- END OF GOOGLE WEB FONTS -->
    <link rel="shortcut icon" type="image/x-icon" href='<?php echo e(asset('assets/img/logo/favicon.png')); ?>'>

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/bootstrap.min.css')); ?>'>
    <!-- owl.carousel css -->
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/owl.carousel.css')); ?>'>
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/owl.transitions.css')); ?>'>
    <!-- meanmenu css -->
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/meanmenu.min.css')); ?>'>
    <!-- font-awesome css -->
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/font-awesome.min.css')); ?>'>
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/flaticon.css')); ?>'>
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/icon.css')); ?>'>
    <!-- magnific css -->
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/magnific.min.css')); ?>'>
    <!-- venobox css -->
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/venobox.css')); ?>'>
    <!-- style css -->
    <link rel="stylesheet" href='<?php echo e(asset('assets/style.css')); ?>'>
    <!-- responsive css -->
    <link rel="stylesheet" href='<?php echo e(asset('assets/css/responsive.css')); ?>'>

    <!-- modernizr css -->
    <script src='<?php echo e(asset('assets/js/vendor/modernizr-2.8.3.min.js')); ?>'></script>
    <!-- BOOTSTRAP & STYLES -->
    <!-- hostline zalo, facebook -->
    <link href='<?php echo e(asset('assets/css/custom.css')); ?>' rel='stylesheet' type='text/css' media='all' />

    <style>
        #layout-page-main img {
            width: 100%;
            height: auto;
        }

    </style>
    <?php echo $__env->yieldContent('style'); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JY7GDVCWWB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JY7GDVCWWB');
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Website",
            "title": "<?php echo e($pageMeta['title'] ?? setting('site.title')); ?>",
            "description": "<?php echo e($pageMeta['meta_description'] ?? setting('site.description')); ?>",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "<?php echo e(setting('site.address')); ?>"
            },
            "telephone": "<?php echo e(setting('site.phone')); ?>",
            "email": "<?php echo e(setting('site.email')); ?>"
        }
    </script>
</head>

<body>

    <?php echo $__env->make('frontend.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('frontend.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="hotline-phone-ring-wrap float-icon-hotline">
        <ul class="left-icon hotline">
            <div class="hotline-phone-ring">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div>
                <div class="hotline-phone-ring-img-circle"><a href="tel:<?php echo e(setting('site.phone')); ?>"
                        class="pps-btn-img">
                        <img src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50" loading="lazy">
                    </a></div>
            </div>
            <div class="hotline-bar">
                <a class="text-hotline" href="tel:<?php echo e(setting('site.phone')); ?>">
                    <?php echo e(setting('site.phone')); ?>

                </a>
            </div>
            </li>
        </ul>
    </div>


    <!-- JAVASCRIPT FILES -->

    <script src='<?php echo e(asset('assets/scripts/bootstrap.min.js?v=233')); ?>' type='text/javascript'></script>
    <script src='<?php echo e(asset('assets/js/vendor/jquery-1.12.4.min.js')); ?>'></script>
    <!-- bootstrap js -->
    <script src='<?php echo e(asset('assets/js/bootstrap.min.js')); ?>'></script>
    <!-- owl.carousel js -->
    <script src='<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>'></script>
    <!-- Counter js -->
    <script src='<?php echo e(asset('assets/js/jquery.counterup.min.js')); ?>'></script>
    <!-- waypoint js -->
    <script src='<?php echo e(asset('assets/js/waypoints.js')); ?>'></script>
    <!-- isotope js -->
    <script src='<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>'></script>
    <!-- stellar js -->
    <script src='<?php echo e(asset('assets/js/jquery.stellar.min.js')); ?>'></script>
    <!-- magnific js -->
    <script src='<?php echo e(asset('assets/js/magnific.min.js')); ?>'></script>
    <!-- venobox js -->
    <script src='<?php echo e(asset('assets/js/venobox.min.js')); ?>'></script>
    <!-- meanmenu js -->
    <script src='<?php echo e(asset('assets/js/jquery.meanmenu.js')); ?>'></script>
    <!-- Form validator js -->
    <script src='<?php echo e(asset('assets/js/form-validator.min.js')); ?>'></script>
    <!-- plugins js -->
    <script src='<?php echo e(asset('assets/js/plugins.js')); ?>'></script>
    <!-- main js -->
    <script src='<?php echo e(asset('assets/js/main.js')); ?>'></script>

    <script>
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) $('.scroll-top').fadeIn();
            else $('.scroll-top').fadeOut();
          });
          $('.scroll-top').click(function () {
            $('body,html').animate({scrollTop: 0}, 'slow');
          });
        });
      </script>
      <!-- end JAVASCRIPT scroll-top -->
      <script>
        $('.count').each(function () {
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, {
            duration: 1000,
            easing: 'swing',
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
    
      </script>
      <script>
        // Instantiate the Bootstrap carousel
        $('.multi-item-carousel').carousel({
          interval: false
        });
    
        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $('.multi-item-carousel .item').each(function () {
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
    
          if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
          } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
          }
        });
      </script>
      <!-- END OF JAVASCRIPT FILES -->
    
      <!-- Messenger Plugin chat Code -->
      <div id="fb-root"></div>
    
      <!-- Your Plugin chat code -->
      <div id="fb-customer-chat" class="fb-customerchat">
      </div>
    
      <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", <?php echo e(setting('site.facebook_page_id')); ?>);
        chatbox.setAttribute("attribution", "biz_inbox");
      </script>
    
      <!-- Your SDK code -->
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v12.0'
          });
        };
    
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
    
      <?php echo $__env->yieldContent('js'); ?>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\havu\resources\views/frontend/layouts/default.blade.php ENDPATH**/ ?>