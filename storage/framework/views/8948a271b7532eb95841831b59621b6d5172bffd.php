

<?php $__env->startSection('content'); ?>

    <div class="row">
    	<div class="col-lg-8 mx-auto">
    		<div class="card">
    			<div class="card-header">
    				<h6 class="fw-600 mb-0"><?php echo e(translate('General')); ?></h6>
    			</div>
    			<div class="card-body">
    				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST">
    					<?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label"><?php echo e(translate('Frontend Website Name')); ?></label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="website_name">
        	                    <input type="text" name="website_name" class="form-control" placeholder="<?php echo e(translate('Website Name')); ?>" value="<?php echo e(get_setting('website_name')); ?>">
                            </div>
                        </div>
    	                <div class="form-group row">
    	                    <label class="col-md-3 col-from-label"><?php echo e(translate('Site Motto')); ?></label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="site_motto">
        	                    <input type="text" name="site_motto" class="form-control" placeholder="<?php echo e(translate('Best eCommerce Website')); ?>" value="<?php echo e(get_setting('site_motto')); ?>">
                            </div>
    	                </div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Site Icon')); ?></label>
                            <div class="col-md-8">
        						<div class="input-group " data-toggle="aizuploader" data-type="image">
        							<div class="input-group-prepend">
        								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
        							</div>
        							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
                                    <input type="hidden" name="types[]" value="site_icon">
        							<input type="hidden" name="site_icon" value="<?php echo e(get_setting('site_icon')); ?>" class="selected-files">
        						</div>
        						<div class="file-preview box"></div>
        						<small class="text-muted"><?php echo e(translate('Website favicon. 32x32 .png')); ?></small>
                            </div>
    					</div>
    	                <div class="form-group row">
    	                    <label class="col-md-3 col-from-label"><?php echo e(translate('Website Base Color')); ?></label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="base_color">
        	                    <input type="text" name="base_color" class="form-control" placeholder="#377dff" value="<?php echo e(get_setting('base_color')); ?>">
        						<small class="text-muted"><?php echo e(translate('Hex Color Code')); ?></small>
                            </div>
    	                </div>
    	                <div class="form-group row">
    	                    <label class="col-md-3 col-from-label"><?php echo e(translate('Website Base Hover Color')); ?></label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="base_hov_color">
        	                    <input type="text" name="base_hov_color" class="form-control" placeholder="#377dff" value="<?php echo e(get_setting('base_hov_color')); ?>">
        						<small class="text-muted"><?php echo e(translate('Hex Color Code')); ?></small>
                            </div>
    	                </div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Customer Login page Image')); ?></label>
                            <div class="col-md-8">
        						<div class="input-group " data-toggle="aizuploader" data-type="image">
        							<div class="input-group-prepend">
        								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
        							</div>
        							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
                                    <input type="hidden" name="types[]" value="login_page_image">
        							<input type="hidden" name="login_page_image" value="<?php echo e(get_setting('login_page_image')); ?>" class="selected-files">
        						</div>
        						<div class="file-preview box"></div>
                            </div>
    					</div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Customer Register page Image')); ?></label>
                            <div class="col-md-8">
        						<div class="input-group " data-toggle="aizuploader" data-type="image">
        							<div class="input-group-prepend">
        								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
        							</div>
        							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
                                    <input type="hidden" name="types[]" value="register_page_image">
        							<input type="hidden" name="register_page_image" value="<?php echo e(get_setting('register_page_image')); ?>" class="selected-files">
        						</div>
        						<div class="file-preview box"></div>
                            </div>
    					</div>
						<?php if(get_setting('vendor_system_activation') == 1): ?>
							<div class="form-group row">
								<label class="col-md-3 col-from-label"><?php echo e(translate('Seller Login page Background')); ?></label>
								<div class="col-md-8">
									<div class="input-group " data-toggle="aizuploader" data-type="image">
										<div class="input-group-prepend">
											<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
										</div>
										<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
										<input type="hidden" name="types[]" value="seller_login_page_bg">
										<input type="hidden" name="seller_login_page_bg" value="<?php echo e(get_setting('seller_login_page_bg')); ?>" class="selected-files">
									</div>
									<div class="file-preview box"></div>
								</div>
							</div>
						<?php endif; ?>
						<?php if(addon_is_activated('delivery_boy')): ?>
							<div class="form-group row">
								<label class="col-md-3 col-from-label"><?php echo e(translate('Delivery Boy Login page Background')); ?></label>
								<div class="col-md-8">
									<div class="input-group " data-toggle="aizuploader" data-type="image">
										<div class="input-group-prepend">
											<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
										</div>
										<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
										<input type="hidden" name="types[]" value="delivery_boy_login_page_bg">
										<input type="hidden" name="delivery_boy_login_page_bg" value="<?php echo e(get_setting('delivery_boy_login_page_bg')); ?>" class="selected-files">
									</div>
									<div class="file-preview box"></div>
								</div>
							</div>
						<?php endif; ?>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Flash Deal Banner large')); ?></label>
                            <div class="col-md-8">
        						<div class="input-group " data-toggle="aizuploader" data-type="image">
        							<div class="input-group-prepend">
        								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
        							</div>
        							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
                                    <input type="hidden" name="types[]" value="flash_deal_banner">
        							<input type="hidden" name="flash_deal_banner" value="<?php echo e(get_setting('flash_deal_banner')); ?>" class="selected-files">
        						</div>
        						<div class="file-preview box"></div>
                            </div>
    					</div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Flash Deal Banner Small')); ?></label>
                            <div class="col-md-8">
        						<div class="input-group " data-toggle="aizuploader" data-type="image">
        							<div class="input-group-prepend">
        								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
        							</div>
        							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
                                    <input type="hidden" name="types[]" value="flash_deal_banner_small">
        							<input type="hidden" name="flash_deal_banner_small" value="<?php echo e(get_setting('flash_deal_banner_small')); ?>" class="selected-files">
        						</div>
        						<div class="file-preview box"></div>
                            </div>
    					</div>
    					<div class="text-right">
    						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
    					</div>
                    </form>
    			</div>
    		</div>
    		<div class="card">
    			<div class="card-header">
    				<h6 class="fw-600 mb-0"><?php echo e(translate('Global SEO')); ?></h6>
    			</div>
    			<div class="card-body">
    				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
    					<?php echo csrf_field(); ?>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Meta Title')); ?></label>
                            <div class="col-md-8">
        						<input type="hidden" name="types[]" value="meta_title">
        						<input type="text" class="form-control" placeholder="<?php echo e(translate('Title')); ?>" name="meta_title" value="<?php echo e(get_setting('meta_title')); ?>">
                            </div>
    					</div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Meta description')); ?></label>
                            <div class="col-md-8">
        						<input type="hidden" name="types[]" value="meta_description">
        						<textarea class="resize-off form-control" placeholder="<?php echo e(translate('Description')); ?>" name="meta_description"><?php echo e(get_setting('meta_description')); ?></textarea>
                            </div>
    					</div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Keywords')); ?></label>
                            <div class="col-md-8">
        						<input type="hidden" name="types[]" value="meta_keywords">
        						<textarea class="resize-off form-control" placeholder="<?php echo e(translate('Keyword, Keyword')); ?>" name="meta_keywords"><?php echo e(get_setting('meta_keywords')); ?></textarea>
        						<small class="text-muted"><?php echo e(translate('Separate with coma')); ?></small>
                            </div>
    					</div>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Meta Image')); ?></label>
                            <div class="col-md-8">
        						<div class="input-group " data-toggle="aizuploader" data-type="image">
        							<div class="input-group-prepend">
        								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
        							</div>
        							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
        							<input type="hidden" name="types[]" value="meta_image">
        							<input type="hidden" name="meta_image" value="<?php echo e(get_setting('meta_image')); ?>" class="selected-files">
        						</div>
        						<div class="file-preview box"></div>
                            </div>
    					</div>
    					<div class="text-right">
    						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
    					</div>
    				</form>
    			</div>
    		</div>
            <div class="card">
    			<div class="card-header">
    				<h6 class="fw-600 mb-0"><?php echo e(translate('Cookies Agreement')); ?></h6>
    			</div>
    			<div class="card-body">
    				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
    					<?php echo csrf_field(); ?>
    					<div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Cookies Agreement Text')); ?></label>
                            <div class="col-md-8">
        						<input type="hidden" name="types[]" value="cookies_agreement_text">
        						<textarea name="cookies_agreement_text" rows="4" class="aiz-text-editor form-control" data-buttons='[["font", ["bold"]],["insert", ["link"]]]'><?php echo e(get_setting('cookies_agreement_text')); ?></textarea>
                            </div>
    					</div>
                        <div class="form-group row">
    						<label class="col-md-3 col-from-label"><?php echo e(translate('Show Cookies Agreement?')); ?></label>
    						<div class="col-md-8">
    							<label class="aiz-switch aiz-switch-success mb-0">
    								<input type="hidden" name="types[]" value="show_cookies_agreement">
    								<input type="checkbox" name="show_cookies_agreement" <?php if( get_setting('show_cookies_agreement') == 'on'): ?> checked <?php endif; ?>>
    								<span></span>
    							</label>
    						</div>
    					</div>
    					<div class="text-right">
    						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
    					</div>
    				</form>
    			</div>
    		</div>
            <div class="card">
    			<div class="card-header">
    				<h6 class="fw-600 mb-0"><?php echo e(translate('Website Popup')); ?></h6>
    			</div>
    			<div class="card-body">
    				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
    					<?php echo csrf_field(); ?>
    					<div class="form-group row">
                            <label class="col-md-3 col-from-label"><?php echo e(translate('Show website popup?')); ?></label>
                            <div class="col-md-8">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="hidden" name="types[]" value="show_website_popup">
                                    <input type="checkbox" name="show_website_popup" <?php if( get_setting('show_website_popup') == 'on'): ?> checked <?php endif; ?>>
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label"><?php echo e(translate('Popup content')); ?></label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="website_popup_content">
                                <textarea name="website_popup_content" rows="4" class="aiz-text-editor form-control" ><?php echo e(get_setting('website_popup_content')); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label"><?php echo e(translate('Show Subscriber form?')); ?></label>
                            <div class="col-md-8">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="hidden" name="types[]" value="show_subscribe_form">
                                    <input type="checkbox" name="show_subscribe_form" <?php if( get_setting('show_subscribe_form') == 'on'): ?> checked <?php endif; ?>>
                                    <span></span>
                                </label>
                            </div>
                        </div>
    					<div class="text-right">
    						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
    					</div>
    				</form>
    			</div>
    		</div>
            <div class="card">
                <div class="card-header">
                    <h6 class="fw-600 mb-0"><?php echo e(translate('Custom Script')); ?></h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label"><?php echo e(translate('Header custom script - before </head>')); ?></label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="header_script">
                                <textarea name="header_script" rows="4" class="form-control" placeholder="<script>&#10;...&#10;</script>"><?php echo e(get_setting('header_script')); ?></textarea>
                                <small><?php echo e(translate('Write script with <script> tag')); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label"><?php echo e(translate('Footer custom script - before </body>')); ?></label>
                            <div class="col-md-8">
                                <input type="hidden" name="types[]" value="footer_script">
                                <textarea name="footer_script" rows="4" class="form-control" placeholder="<script>&#10;...&#10;</script>"><?php echo e(get_setting('footer_script')); ?></textarea>
                                <small><?php echo e(translate('Write script with <script> tag')); ?></small>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
    	</div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xm\htdocs\kolzo\kolzo\resources\views/backend/website_settings/appearance.blade.php ENDPATH**/ ?>