<div class="card-columns">
    <?php $__currentLoopData = \App\Utility\CategoryUtility::get_immediate_children_ids($category->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $first_level_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card shadow-none border-0">
            <ul class="list-unstyled mb-3">
                <li class="fs-14 fw-700 mb-3">
                    <a class="text-reset hov-text-primary" href="<?php echo e(route('products.category', get_single_category($first_level_id)->slug)); ?>"><?php echo e(get_single_category($first_level_id)->getTranslation('name')); ?></a>
                </li>
                <?php $__currentLoopData = \App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $second_level_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="mb-2 fs-14 pl-2">
                        <a class="text-reset hov-text-primary" href="<?php echo e(route('products.category', get_single_category($second_level_id)->slug)); ?>"><?php echo e(get_single_category($second_level_id)->getTranslation('name')); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH D:\xm\htdocs\kolzo\kolzo\resources\views/frontend/partials/category_elements.blade.php ENDPATH**/ ?>