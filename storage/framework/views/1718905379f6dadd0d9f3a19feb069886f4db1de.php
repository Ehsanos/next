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

                            <div class="top-content-slider w-100 ">
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
                    class="sr-only">Previous</span></a>
            <a class="carousel-control-next h-50" href="#myCarousel"
                                                          role="button" data-slide="next"><span
                    class="carousel-control-next-icon" aria-hidden="true"></span><span
                    class="sr-only">Next</span></a>
        </div>
    </div>


<div class="container mt-5">

    <div class="row clearfix">
        <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card agent">
                <div class="agent-avatar">
                    <a class="agent-name " href="agent-profile.html">
                        <img src="<?php echo e($agent->getFirstMediaUrl('users')); ?>" class="img-fluid " alt="">
                    </a>
                </div>
                <div class="agent-content">
                    <div class="agent-name agent-color">
                        <h4><a class="agent-color" href="agent-profile.html"><?php echo e($agent->name); ?></a></h4>
                        <span class="agent-color"><?php echo e(getTrans($agent,'name')); ?></span>
                    </div>
                    <ul class="agent-contact-details">
                        <li><i class="zmdi zmdi-phone"></i><span><?php echo e($agent->phone); ?></span></li>
                        <li><i class="zmdi zmdi-email"></i><?php echo e($agent->email); ?></li>
                    </ul>
                    <ul class="social-icons">
                        <li><a class="facebook agent-color" href="<?php echo e($agent->facebook); ?>"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a class="twitter agent-color" href="<?php echo e($agent->twitter); ?>"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a class="gplus agent-color" href="<?php echo e($agent->insegram); ?>"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a class="linkedin agent-color" href="<?php echo e($agent->instegram); ?>"><i class="zmdi zmdi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>













</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/agents.blade.php ENDPATH**/ ?>