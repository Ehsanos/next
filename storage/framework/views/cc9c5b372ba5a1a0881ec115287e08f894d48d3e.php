<?php $__env->startSection('content'); ?>



        <div class="top-content-slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo e($loop->index); ?>"
                            <?php if($loop->first): ?> class="active" <?php endif; ?>></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                </ol>
                <div class="carousel-inner">

                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php if($loop->first): ?>active <?php endif; ?>">

                            <div class="top-content-slider w-100 img-div"
                                 style="background: url('<?php echo e($slide->getFirstMediaUrl('slider')); ?>') center / cover no-repeat;">

                                <div class=" w-100 ">
                                    <div class="slide_style_right">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-12 text-center align-self-center slide-text">
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <a class="carousel-control-prev h-50" href="#myCarousel" role="button" data-slide="prev"><span
                        class="carousel-control-prev-icon" aria-hidden="true"></span><span
                        class="sr-only">Previous</span></a><a class="carousel-control-next h-50" href="#myCarousel"
                                                              role="button" data-slide="next"><span
                        class="carousel-control-next-icon" aria-hidden="true"></span><span
                        class="sr-only">Next</span></a>
            </div>
        </div>



    <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2" <?php if($style): ?> style="background-color:<?php echo e($style->primary); ?>" <?php endif; ?>>
        <div class="container">
            <div class="container">
                

                

                
                
                
                
                
                
                
                
                




                

                
                <div class="">
                    <div class="row py-2">
                        <div class="col p-0">
                            <div class="px-3">
                                <h2 class="text-dark"><?php echo e(lang('catalog')); ?></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-6 col-lg-4 mb-4">
                                <div class="product-main border py-1">
                                    <div class="product-img border-bottom mb-1">
                                        <div class="p-2"><img class="img-fluid"
                                                              src="<?php echo e($catalog->getFirstMediaUrl('catalogs')); ?>"></div>
                                    </div>
                                    <div class="product-desc px-3">
                                        <h5 class="text-dark m-0 py-1"><?php echo e(getTrans($catalog,'name')); ?></h5>
                                        <p class="text-dark m-0 py-2"><?php echo e(getTrans($catalog,'description')); ?></p>
                                    </div>
                                    <div class="product-btn px-3 py-2"><a type="button"
                                                                          class="text-decoration-none products-details"
                                                                          href="<?php echo e(Storage::url($catalog->file)); ?>"><?php echo e(lang('download')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                </div>
            </div>

        </div>
        <div class=" mt-2">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#" class="badge badge-dark tags-div py-2 px-2"><?php echo e($tag->name); ?></a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/Catalog.blade.php ENDPATH**/ ?>