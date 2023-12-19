<div class="aiz-category-menu bg-white border-top " id="category-sidebar" style="width:270px;border-radius:15px;">
    <ul class="list-unstyled categories no-scrollbar mb-0 text-left" style="">
        <?php $__currentLoopData = get_level_zero_categories()->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $category_name = $category->getTranslation('name');
            ?>
            <li class="category-nav-element border border-top-0" data-id="<?php echo e($category->id); ?>" style="height:35px;">
                <a href="<?php echo e(route('products.category', $category->slug)); ?>"
                    class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                    <img class="cat-image lazyload mr-2 opacity-60" src="<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>"
                        data-src="<?php echo e(uploaded_asset($category->icon)); ?>" width="16" alt="<?php echo e($category_name); ?>"
                        onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>';">
                    <span class="cat-name has-transition"><?php echo e($category_name); ?></span>
                </a>
                
                <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                    <div class="c-preloader text-center absolute-center">
                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                    </div>
                </div>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH D:\xm\htdocs\kolzo\kolzo\resources\views/frontend/partials/category_menu.blade.php ENDPATH**/ ?>