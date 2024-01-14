<?php $__env->startSection('content'); ?>

    <main <?php if($style): ?> style="background-color:<?php echo e($style->primary); ?>" <?php endif; ?>>
        
        <?php if(Session::has('message')): ?>

            <div class="w-25" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
            </div>
        <?php endif; ?>
        <header class="mt-1">
            <div class="top-content">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">








                    <div class="carousel-inner">

                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item <?php if($loop->first): ?>active <?php endif; ?>">
                                <a <?php if($slide->cats): ?> href="<?php echo e(route('langs.fofo',$slide->cats)); ?>" <?php else: ?> href="<?php echo e($slide->url); ?>" <?php endif; ?> >
                                    <div class="h-75 w-100"
                                         style="background: url('<?php echo e($slide->getFirstMediaUrl('slider')); ?>') center / cover no-repeat;">

                                <div class="h-75 w-100 ">

                                    <?php if(app()->getLocale()=='ar'): ?>
                                        <div class="slide_style_left">
                                            <div class="row justify-content-center align-items-center">
                                                <div
                                                    class="col-12 text-center align-self-center slide-text mt-5">

                                                    <p class="animate__animated animate__fadeInUp px-4 mt-5"><?php echo e(getTrans($slide,'discrption')); ?></p>
                                                </div>

                                            </div>
                                        </div>

                                    <?php else: ?>
                                        <div class="slide_style_right">
                                            <div class="row justify-content-center align-items-center">
                                                <div
                                                    class="col-12 text-center align-self-center slide-text  mt-5">

                                                    <p class="animate__animated animate__fadeInUp px-4 mt-5"><?php echo e(getTrans($slide,'discrption')); ?></p>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                                </a>
                    </div>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"><span
                        class="carousel-control-prev-icon" aria-hidden="true"></span><span
                        class="sr-only">Previous</span></a><a class="carousel-control-next" href="#myCarousel"
                                                              role="button" data-slide="next"><span
                        class="carousel-control-next-icon" aria-hidden="true"></span><span
                        class="sr-only">Next</span></a>
            </div>
            </div>
        </header>


        
        <section class="d-flex flex-column justify-content-center align-items-center  sections-s">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div id="sections" class="owl-carousel">

                            <?php $__currentLoopData = $prodcuts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-3 product-item" onmouseover="show(this)" onmouseleave="hide(this)">
                                    <div class="adding-hidden" id="add">
                                        <form action="<?php echo e(route('langs.addToCart')); ?>" method="post">
                                            <?php echo csrf_field(); ?>


                                            <input hidden value="<?php echo e($product->id); ?>" name="product">
                                            <input hidden type="number" min="0" value="1" name="num">
                                            <button type="submit" class="btn">
                                                <i class="fas fa-plus-circle icn"></i>
                                            </button>
                                        </form>

                                    </div>

                                    <a class="text-decoration-none"
                                                                  href="<?php echo e(route('langs.product_details',[$product])); ?>">
                                        <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="img-fluid rounded-img"
                                                                          src="<?php echo e($product->getFirstMediaUrl('products')); ?>">
                                            </div>
                                            <div class="card-body after">
                                                <p class="card-text sub-text-color"><?php echo e(getTrans($product,'name')); ?></p>
                                                
                                            </div>
                                        </div>
                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        
        <section class="d-flex flex-column justify-content-center align-items-center pb-5 products">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-9">
                        <div id="products" class="owl-carousel py-4">


                            <?php $__currentLoopData = $catigories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-3 product-item"><a class="text-decoration-none"
                                                                  href="<?php echo e(route('langs.fofo',$cat)); ?>">
                                        <div class="card cards-shadown cards-hover  w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="rounded-img"
                                                                          src="<?php echo e($cat->getFirstMediaUrl('categories')); ?>">
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text sub-text-color"><?php echo e($cat->name); ?></p>
                                                
                                            </div>
                                        </div>
                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>


        
        <section class="wrapper-numbers">

            <div class="container">
                <div class="row countup text-center">
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-box-open" aria-hidden="true"></i></p>
                        <p><span class="count replay"><?php echo e($statics[1]->number); ?></span></p>
                        <h2><?php echo e($statics[1]->discrption); ?></h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-th" aria-hidden="true"></i></p>
                        <p><span class="count replay"><?php echo e($statics[3]->number); ?></span></p>
                        <h2><?php echo e($statics[3]->discrption); ?></h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-bookmark" aria-hidden="true"></i></p>
                        <p><span class="count replay"><?php echo e($statics[2]->number); ?></span></p>
                        <h2><?php echo e($statics[2]->discrption); ?></h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fa fa-user" aria-hidden="true"></i></p>
                        <p><span class="count replay"><?php echo e($statics[0]->number); ?></span></p>
                        <h2><?php echo e($statics[0]->discrption); ?></h2>
                    </div>
                </div>
            </div>
        </section>


        <section class="d-flex flex-column justify-content-center align-items-center pt-5 sec-news">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div id="news" class="owl-carousel py-4">

                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-3 product-item"><a class="text-decoration-none"
                                                                  href="<?php echo e(route('langs.showPost',['post'=>$new])); ?>">
                                        <div class="card cards-shadown cards-hover my-5 w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="img-fluid rounded-img"
                                                                          src="<?php echo e($new->getFirstMediaUrl('posts')); ?>">
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text sub-text-color"><?php echo getTrans($new,'tilte'); ?></p>
                                                
                                            </div>
                                        </div>
                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                    <div class="col-12 py-4">
                        <div class="text-center"><a class="more-news py-3 px-5 text-decoration-none"
                                                    href="<?php echo e(route('langs.news')); ?>"><?php echo e(lang('more_news')); ?></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="info pb-4 pt-5">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6">
                        <div class="d-md-none">
                            <iframe allowfullscreen="" frameborder="0"
                                    src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%"
                                    height="100%"></iframe>
                        </div>
                        <div class="d-none d-md-block position-absolute" style="top: 0;left: 0;right: 0;bottom: 0;">
                            <iframe src="<?php echo e($settings->map); ?>" width="600" height="450" style="border:0;"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div>
                            <form class="bg-white border rounded shadow p-3 p-sm-4 p-lg-5" method="post"
                                  style="background: var(--bs-body-bg);" action="<?php echo e(route('sub')); ?>">
                                <?php echo csrf_field(); ?>
                                <h3 class="font-weight-bold text-center text-black-50 mb-3"><?php echo e(lang('call_us')); ?></h3>
                                <div class="mb-3"><input class="form-control" type="text" name="name"
                                                         placeholder="<?php echo e(lang('name')); ?>">
                                </div>
                                <div class="mb-3"><input class="form-control" type="email" name="email"
                                                         placeholder="<?php echo e(lang('email')); ?>"></div>
                                <div class="mb-3"><textarea class="form-control" name="message"
                                                            placeholder="<?php echo e(lang('message')); ?>"
                                                            rows="6"></textarea></div>
                                <div class="mb-3">
                                    <button class="btn btn-primary btn-sign" type="submit"><?php echo e(lang('send')); ?></button>
                                </div>
                                <div><?php echo htmlFormSnippet(); ?></div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/index.blade.php ENDPATH**/ ?>