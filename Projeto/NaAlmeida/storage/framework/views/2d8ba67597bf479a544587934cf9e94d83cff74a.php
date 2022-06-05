

<?php $__env->startSection('content'); ?>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <a href="<?php echo e(route('products.show', $product->id)); ?>" >
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false">
                                <!-- <title>Placeholder</title> -->
                                <!-- <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text> -->
                            </img>
                        </a>

                        <div class="card-body">
                            <p class="card-text"><?php echo e($product->name); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group" >
                                    <button type="button" style="border-color:#FA6699; background-color: #FA6699" class="btn btn-sm btn-outline-secondary" >
                                        <i class="bi bi-bag-plus-fill" style="background-color: #FA6699;"></i>
                                    </button>
                                    <!-- <a type="button" href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-sm btn-outline-secondary">Edit</a> -->
                                </div>
                                <small class="text-muted">R$ <?php echo e($product->value_av); ?>,00</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Samsung\Documents\GitHub\2021-02-atividades-naalmeida98\Projeto\NaAlmeida\resources\views/products/products.blade.php ENDPATH**/ ?>