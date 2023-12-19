

<?php $__env->startSection('content'); ?>
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item has-transition opacity-50 hov-opacity-100">
                        <a class="text-reset" href="<?php echo e(route('home')); ?>"><?php echo e(translate('Home')); ?></a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        "<?php echo e(translate('Register your shop')); ?>"
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="pt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-md-8 mx-auto">
                <h1 class="fw-700 fs-20 fs-md-24 text-dark text-center mb-3"><?php echo e(translate('Register Your Shop')); ?></h1>
                <form id="shop" class="" action="<?php echo e(route('shops.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="bg-white border mb-4">
                        <div class="fs-15 fw-600 p-3">
                            <?php echo e(translate('Personal Info')); ?>
                        </div>
                        <div class="p-3">
                            <div class="form-group">
                                <label><?php echo e(translate('Your Name')); ?> <span class="text-primary">*</span></label>
                                <input type="text" class="form-control rounded-0<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(translate('Name')); ?>" name="name" required>
                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label><?php echo e(translate('Your Email')); ?> <span class="text-primary">*</span></label>
                                <input type="email" class="form-control rounded-0<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(translate('Email')); ?>" name="email" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label><?php echo e(translate('Your Password')); ?> <span class="text-primary">*</span></label>
                                <input type="password" class="form-control rounded-0<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('password')); ?>" placeholder="<?php echo e(translate('Password')); ?>" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label><?php echo e(translate('Repeat Password')); ?> <span class="text-primary">*</span></label>
                                <input type="password" class="form-control rounded-0" placeholder="<?php echo e(translate('Confirm Password')); ?>" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border mb-4">
                        <div class="fs-15 fw-600 p-3">
                            <?php echo e(translate('Basic Info')); ?>
                        </div>
                        <div class="p-3">
                            <div class="form-group">
                                <label><?php echo e(translate('Shop Name')); ?> <span class="text-primary">*</span></label>
                                <input type="text" class="form-control rounded-0<?php echo e($errors->has('shop_name') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('shop_name')); ?>" placeholder="<?php echo e(translate('Shop Name')); ?>" name="shop_name" required>
                                <?php if($errors->has('shop_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('shop_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label><?php echo e(translate('Address')); ?> <span class="text-primary">*</span></label>
                                <input type="text" class="form-control mb-3 rounded-0<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('address')); ?>" placeholder="<?php echo e(translate('Address')); ?>" name="address" required>
                                <?php if($errors->has('address')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <?php if(get_setting('google_recaptcha') == 1): ?>
                        <div class="form-group mt-2 mx-auto row">
                            <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
                        </div>
                    <?php endif; ?>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary fw-600 rounded-0"><?php echo e(translate('Register Your Shop')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
    // making the CAPTCHA  a required field for form submission
    $(document).ready(function(){
        $("#shop").on("submit", function(evt)
        {
            var response = grecaptcha.getResponse();
            if(response.length == 0)
            {
            //reCaptcha not verified
                alert("please verify you are humann!");
                evt.preventDefault();
                return false;
            }
            //captcha verified
            //do the rest of your validations here
            $("#reg-form").submit();
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xm\htdocs\kolzo\kolzo\resources\views/frontend/seller_form.blade.php ENDPATH**/ ?>