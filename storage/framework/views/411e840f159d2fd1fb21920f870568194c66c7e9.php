<?php
    $cart_added = [];
?>
<div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
        <?php
            $product_url = route('product', $product->slug);
            if ($product->auction_product == 1) {
                $cart = get_user_cart();
                if (isset($cart) && count($cart) > 0) {
                    $cart_added = $cart->pluck('product_id')->toArray();
                }
                $product_url = route('auction-product', $product->slug);
            }
        ?>
        <!-- Image -->
        <a href="<?php echo e($product_url); ?>" class="d-block h-100">
            <img class="lazyload mx-auto img-fit has-transition"
                src="<?php echo e($product->thumbnail != null ? my_asset($product->thumbnail->file_name) : static_asset('assets/img/placeholder.jpg')); ?>"
                alt="<?php echo e($product->getTranslation('name')); ?>" title="<?php echo e($product->getTranslation('name')); ?>"
                onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>';">
        </a>
        <!-- Discount percentage tag -->
        <?php if(discount_in_percentage($product) > 0): ?>
            <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center"
                style="padding-top:2px;padding-bottom:2px;">-<?php echo e(discount_in_percentage($product)); ?>%</span>
        <?php endif; ?>
        <!-- Wholesale tag -->
        <?php if($product->wholesale_product): ?>
            <span class="absolute-top-left fs-11 text-white fw-700 px-2 lh-1-8 ml-1 mt-1"
                style="background-color: #455a64; <?php if(discount_in_percentage($product) > 0): ?> top:25px; <?php endif; ?>">
                <?php echo e(translate('Wholesale')); ?>

            </span>
        <?php endif; ?>
        <?php if($product->auction_product == 0): ?>
            <!-- wishlisht & compare icons -->
        
            <!-- add to cart -->
            <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center <?php if(in_array($product->id, $cart_added)): ?> active <?php endif; ?>"
                href="javascript:void(0)"
                <?php if(Auth::check()): ?> onclick="showAddToCartModal(<?php echo e($product->id); ?>)" <?php else: ?> onclick="showLoginModal()" <?php endif; ?>>
                <span class="cart-btn-text">
                    <?php echo e(translate('Add to Cart')); ?>

                </span>
                <br>
                <span><i class="las la-2x la-shopping-cart"></i></span>
            </a>
        <?php endif; ?>
        <?php if(
            $product->auction_product == 1 &&
                $product->auction_start_date <= strtotime('now') &&
                $product->auction_end_date >= strtotime('now')): ?>
            <!-- Place Bid -->
            <?php
                $highest_bid = $product->bids->max('amount');
                $min_bid_amount = $highest_bid != null ? $highest_bid + 1 : $product->starting_bid;
            ?>
            <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center <?php if(in_array($product->id, $cart_added)): ?> active <?php endif; ?>"
                href="javascript:void(0)" onclick="bid_single_modal(<?php echo e($product->id); ?>, <?php echo e($min_bid_amount); ?>)">
                <span class="cart-btn-text"><?php echo e(translate('Place Bid')); ?></span>
                <br>
                <span><i class="las la-2x la-gavel"></i></span>
            </a>
        <?php endif; ?>
    </div>

    <div class="p-2 p-md-3 text-left">
        <!-- Product name -->
        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center" style="color:black;">
            <a href="<?php echo e($product_url); ?>" class="d-block text-reset hov-text-primary"
                title="<?php echo e($product->getTranslation('name')); ?>"><?php echo e($product->getTranslation('name')); ?></a>
        </h3>
        <div class="fs-14 d-flex justify-content-center mt-3">
            <?php if($product->auction_product == 0): ?>
                <!-- Previous price -->
                <?php if(home_base_price($product) != home_discounted_base_price($product)): ?>
                    <div class="disc-amount has-transition">
                        <del class="fw-400 text-secondary mr-1" ><?php echo e(home_base_price($product)); ?></del>
                    </div>
                <?php endif; ?>
                <!-- price -->
                <div class="">
                    <span class="fw-700 text-primary"><?php echo e(home_discounted_base_price($product)); ?></span>
                </div>
            <?php endif; ?>
            <?php if($product->auction_product == 1): ?>
                <!-- Bid Amount -->
                <div class="">
                    <span class="fw-700 text-primary"><?php echo e(single_price($product->starting_bid)); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH D:\xm\htdocs\kolzo\kolzo\resources\views/frontend/partials/product_box_1.blade.php ENDPATH**/ ?>