

<?php $__env->startSection('content'); ?>

<div class="h-100 bg-cover bg-center py-5 d-flex align-items-center" style="background-image: url(<?php echo e(uploaded_asset(get_setting('seller_login_page_bg'))); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-4 mx-auto">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="mb-5 text-center">
                            <?php if(get_setting('system_logo_black') != null): ?>
                                <img src="<?php echo e(uploaded_asset(get_setting('system_logo_black'))); ?>" class="mw-100 mb-4" height="40">
                            <?php else: ?>
                                <img src="<?php echo e(static_asset('assets/img/logo.png')); ?>" class="mw-100 mb-4" height="40">
                            <?php endif; ?>
                            <h1 class="fs-20 fs-md-24 fw-700 text-primary"><?php echo e(translate('Welcome Back !')); ?></h1>
                            <h5 class="fs-14 fw-400 text-dark"><?php echo e(translate('Login To Your Seller Account')); ?></h5>
                        </div>
                        <form class="pad-hor" method="POST" role="form" action="<?php echo e(route('seller.login.submit')); ?>">
                            <?php echo csrf_field(); ?>
                            <!-- Email or Phone -->
                            <div class="form-group">
                                <label for="email" class="fs-12 fw-500 text-secondary"><?php echo e(translate('Email')); ?></label>
                                <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> rounded-0" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(translate('johndoe@example.com')); ?>" name="email" id="email" autocomplete="off">
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                                
                            <!-- password -->
                                               <div class="input-group border border-gray border-1">
                                              <input type="password" name="password" id="password" class="border-0 form-control" placeholder="Password" aria-label="Password" aria-describedby="toggle-password">
                                              <button class="btn border-0 opacity-50" type="button" id="toggle-password">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" {...props}><path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5s-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3z"></path></svg>

                                              </button>
                                            </div>

                            <div class="row mb-2">
                                <!-- Remember Me -->
                                <div class="col-6">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <span class="has-transition fs-12 fw-400 text-gray-dark hov-text-primary"><?php echo e(translate('Remember Me')); ?></span>
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                                <!-- Forgot password -->
                                <div class="col-6 text-right">
                                    <a href="<?php echo e(route('password.request')); ?>" class="text-reset fs-12 fw-400 text-gray-dark hov-text-primary"><u><?php echo e(translate('Forgot password?')); ?></u></a>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="mb-4 mt-4">
                                <button type="submit" class="btn btn-primary btn-block fw-700 fs-14 rounded-4"><?php echo e(translate('Login')); ?></button>
                            </div>
                        </form>
                        <?php if(env("DEMO_MODE") == "On"): ?>
                            <div class="mt-4">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>seller@example.com</td>
                                            <td>123456</td>
                                            <td><button class="btn btn-info btn-xs" onclick="autoFill()"><?php echo e(translate('Copy')); ?></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function autoFill(){
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#toggle-password').click(function() {
      const passwordInput = $('#password');
      const passwordFieldType = passwordInput.attr('type');
      
      if (passwordFieldType === 'password') {
        passwordInput.attr('type', 'text');
        $('#toggle-password i').removeClass('bi-eye').addClass('bi-eye-slash');
      } else {
        passwordInput.attr('type', 'password');
        $('#toggle-password i').removeClass('bi-eye-slash').addClass('bi-eye');
      }
    });
  });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xm\htdocs\kolzo\kolzo\resources\views/frontend/seller_login.blade.php ENDPATH**/ ?>