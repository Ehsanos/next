<?php $__env->startSection('content'); ?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('assets/css/cart.css')); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

<?php if($sum>0): ?>

    <div class="container mt-lg-5">
        <h1 class="text-black-50"><?php echo e(lang('cart_name')); ?></h1>


    </div>

    <div class="shopping-cart">

        <div class="column-labels">
            <label class="product-details"><?php echo e(lang('code')); ?></label>
            <label class="product-image"><?php echo e(lang('img_product')); ?></label>
            <label class="product-details"><?php echo e(lang('name')); ?></label>
            <label class="product-details"><?php echo e(lang('packing')); ?></label>
            <label class="product-price"><?php echo e(lang('price_one')); ?></label>
            <label class="product-quantity"><?php echo e(lang('Quantity')); ?></label>
            <label class="product-removal"><?php echo e(lang('')); ?></label>
            <label class="product-line-price"><?php echo e(lang('one_price')); ?></label>
        </div>

        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <div class="product">
                <div class="product-details">
                    <div class="product-title"><?php echo e($item->products->code); ?></div>

                </div>

                <div class="product-image">
                    <a href="<?php echo e(route('langs.product_details',$item->products->id)); ?>">
                        <img src="<?php echo e($item->products->getFirstMediaUrl('products')); ?>">
                    </a>
                </div>
                <div class="product-details">
                    <div class="product-title"><?php echo e(getTrans($item->products,'name')); ?></div>

                </div>

                <div class="product-details">
                    <div class="product-title"><?php echo e($item->products->pakcing); ?></div>

                </div>
                <div class="product-price"><?php echo e($item->products->price); ?></div>

                <div class="product-quantity d-flex">
                    <form action="<?php echo e(route('langs.addToCart')); ?>" method="post" class="d-flex">
                        <?php echo csrf_field(); ?>
                        <input type="number" onchange="change(<?php echo e($loop->index); ?>)" class="inqress "
                               value="<?php echo e($item->quantity); ?>" min="1" name="num">
                        <input hidden value="<?php echo e($item->products->id); ?>" name="product">

                        

                        <button type="submit" id="update-<?php echo e($loop->index); ?>" class="btn update"
                                style="color: green; display: none">
                            <i class="fas fa-refresh"></i>
                        </button>
                    </form>
                </div>


                <div class="product-removal">
                    <a class="remove-product fa fa-trash py-2 text-decoration-none"
                       href="<?php echo e(route('langs.delCart',$item->id)); ?>">
                    </a>
                </div>
                <div class="product-line-price"><?php echo e($item->price); ?></div>


            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <div class="totals">
            <div class="totals-item">
                <label><?php echo e(lang('total')); ?></label>
                <div class="totals-value" id="cart-subtotal"><?php echo e($sum); ?></div>
            </div>
        </div>
        <form action="<?php echo e(route('langs.create_order')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php if($sum>0): ?>


                <input hidden name="user" value="<?php echo e(auth()->user()->id); ?>"></input>
                <button type="submit" class="checkout btn-sign"><?php echo e(lang('Offer_Price')); ?> </button>
        <?php endif; ?>
    </div>
    </form>
<?php else: ?>
    <div class="container d-flex align-items-center justify-content-center">
        <img height="80%" width="60%" src="<?php echo e(asset('assets/img/empty-cart.gif')); ?>">

    </div>
<?php endif; ?>

<script src="<?php echo e(asset('assets/js/cart.js')); ?>">
</script>

<script>
    const a = document.querySelector('.inqress');
    const btnn = document.getElementsByClassName('update');

    function change(e) {
        document.getElementById('update-' + e).style.display = "block"
    }

</script>


</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/cart.blade.php ENDPATH**/ ?>