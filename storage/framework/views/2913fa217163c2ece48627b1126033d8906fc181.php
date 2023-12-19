
<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-xl-10 mx-auto">
		<h6 class="fw-600"><?php echo e(translate('Home Page Settings')); ?></h6>

		
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate('Home Slider')); ?></h6>
			</div>
			<div class="card-body">
				<div class="alert alert-info">
					<?php echo e(translate('We have limited banner height to maintain UI. We had to crop from both left & right side in view for different devices to make it responsive. Before designing banner keep these points in mind.')); ?>
				</div>
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label><?php echo e(translate('Photos & Links')); ?></label>
						<div class="home-slider-target">
							<input type="hidden" name="types[]" value="home_slider_images">
							<input type="hidden" name="types[]" value="home_slider_links">
							<?php if(get_setting('home_slider_images') != null): ?>
								<?php $__currentLoopData = json_decode(get_setting('home_slider_images'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="row gutters-5">
										<div class="col-md-5">
											<div class="form-group">
												<div class="input-group" data-toggle="aizuploader" data-type="image">
					                                <div class="input-group-prepend">
					                                    <div class="input-group-text bg-soft-secondary font-weight-medium"><?php echo e(translate('Browse')); ?></div>
					                                </div>
					                                <div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
													<input type="hidden" name="types[]" value="home_slider_images">
					                                <input type="hidden" name="home_slider_images[]" class="selected-files" value="<?php echo e(json_decode(get_setting('home_slider_images'), true)[$key]); ?>">
					                            </div>
					                            <div class="file-preview box sm">
					                            </div>
				                            </div>
										</div>
										<div class="col-md">
											<div class="form-group">
												<input type="hidden" name="types[]" value="home_slider_links">
												<input type="text" class="form-control" placeholder="http://" name="home_slider_links[]" value="<?php echo e(json_decode(get_setting('home_slider_links'), true)[$key]); ?>">
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group">
												<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
													<i class="las la-times"></i>
												</button>
											</div>
										</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</div>
						<button
							type="button"
							class="btn btn-soft-secondary btn-sm"
							data-toggle="add-more"
							data-content='
							<div class="row gutters-5">
								<div class="col-md-5">
									<div class="form-group">
										<div class="input-group" data-toggle="aizuploader" data-type="image">
											<div class="input-group-prepend">
												<div class="input-group-text bg-soft-secondary font-weight-medium"><?php echo e(translate('Browse')); ?></div>
											</div>
											<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
											<input type="hidden" name="types[]" value="home_slider_images">
											<input type="hidden" name="home_slider_images[]" class="selected-files">
										</div>
										<div class="file-preview box sm">
										</div>
									</div>
								</div>
								<div class="col-md">
									<div class="form-group">
										<input type="hidden" name="types[]" value="home_slider_links">
										<input type="text" class="form-control" placeholder="http://" name="home_slider_links[]">
									</div>
								</div>
								<div class="col-md-auto">
									<div class="form-group">
										<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
											<i class="las la-times"></i>
										</button>
									</div>
								</div>
							</div>'
							data-target=".home-slider-target">
							<?php echo e(translate('Add New')); ?>
						</button>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
					</div>
				</form>
			</div>
		</div>

		
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate("Today's deal")); ?></h6>
			</div>
			<div class="card-body">
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label class="col-from-label"><?php echo e(translate("Large Banner")); ?></label>
						<div class="input-group " data-toggle="aizuploader" data-type="image">
							<div class="input-group-prepend">
								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
							</div>
							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
							<input type="hidden" name="types[]" value="todays_deal_banner">
							<input type="hidden" name="todays_deal_banner" value="<?php echo e(get_setting('todays_deal_banner')); ?>" class="selected-files">
						</div>
						<div class="file-preview box"></div>
					</div>
					<div class="form-group">
						<label class="col-from-label"><?php echo e(translate("Small Banner")); ?></label>
						<div class="input-group " data-toggle="aizuploader" data-type="image">
							<div class="input-group-prepend">
								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
							</div>
							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
							<input type="hidden" name="types[]" value="todays_deal_banner_small">
							<input type="hidden" name="todays_deal_banner_small" value="<?php echo e(get_setting('todays_deal_banner_small')); ?>" class="selected-files">
						</div>
						<div class="file-preview box"></div>
					</div>
					<div class="form-group">
						<label class="col-from-label"><?php echo e(translate("Products background color")); ?></label>
						<input type="hidden" name="types[]" value="todays_deal_bg_color">
						<input type="text" class="form-control" placeholder="#3d4666" name="todays_deal_bg_color" value="<?php echo e(get_setting('todays_deal_bg_color')); ?>">
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
					</div>
				</form>
			</div>
		</div>

		
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate('Home Banner 1 (Max 3)')); ?></h6>
			</div>
			<div class="card-body">
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label><?php echo e(translate('Banner & Links')); ?></label>
						<div class="home-banner1-target">
							<input type="hidden" name="types[]" value="home_banner1_images">
							<input type="hidden" name="types[]" value="home_banner1_links">
							<?php if(get_setting('home_banner1_images') != null): ?>
								<?php $__currentLoopData = json_decode(get_setting('home_banner1_images'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="row gutters-5">
										<div class="col-md-5">
											<div class="form-group">
												<div class="input-group" data-toggle="aizuploader" data-type="image">
					                                <div class="input-group-prepend">
					                                    <div class="input-group-text bg-soft-secondary font-weight-medium"><?php echo e(translate('Browse')); ?></div>
					                                </div>
					                                <div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
													<input type="hidden" name="types[]" value="home_banner1_images">
					                                <input type="hidden" name="home_banner1_images[]" class="selected-files" value="<?php echo e(json_decode(get_setting('home_banner1_images'), true)[$key]); ?>">
					                            </div>
					                            <div class="file-preview box sm">
					                            </div>
				                            </div>
										</div>
										<div class="col-md">
											<div class="form-group">
												<input type="hidden" name="types[]" value="home_banner1_links">
												<input type="text" class="form-control" placeholder="http://" name="home_banner1_links[]" value="<?php echo e(json_decode(get_setting('home_banner1_links'), true)[$key]); ?>">
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group">
												<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
													<i class="las la-times"></i>
												</button>
											</div>
										</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</div>
						<button
							type="button"
							class="btn btn-soft-secondary btn-sm"
							data-toggle="add-more"
							data-content='
							<div class="row gutters-5">
								<div class="col-md-5">
									<div class="form-group">
										<div class="input-group" data-toggle="aizuploader" data-type="image">
											<div class="input-group-prepend">
												<div class="input-group-text bg-soft-secondary font-weight-medium"><?php echo e(translate('Browse')); ?></div>
											</div>
											<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
											<input type="hidden" name="types[]" value="home_banner1_images">
											<input type="hidden" name="home_banner1_images[]" class="selected-files">
										</div>
										<div class="file-preview box sm">
										</div>
									</div>
								</div>
								<div class="col-md">
									<div class="form-group">
										<input type="hidden" name="types[]" value="home_banner1_links">
										<input type="text" class="form-control" placeholder="http://" name="home_banner1_links[]">
									</div>
								</div>
								<div class="col-md-auto">
									<div class="form-group">
										<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
											<i class="las la-times"></i>
										</button>
									</div>
								</div>
							</div>'
							data-target=".home-banner1-target">
							<?php echo e(translate('Add New')); ?>
						</button>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
					</div>
				</form>
			</div>
		</div>

		
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate('Home Banner 2 (Max 3)')); ?></h6>
			</div>
			<div class="card-body">
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label><?php echo e(translate('Banner & Links')); ?></label>
						<div class="home-banner2-target">
							<input type="hidden" name="types[]" value="home_banner2_images">
							<input type="hidden" name="types[]" value="home_banner2_links">
							<?php if(get_setting('home_banner2_images') != null): ?>
								<?php $__currentLoopData = json_decode(get_setting('home_banner2_images'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="row gutters-5">
										<div class="col-md-5">
											<div class="form-group">
												<div class="input-group" data-toggle="aizuploader" data-type="image">
					                                <div class="input-group-prepend">
					                                    <div class="input-group-text bg-soft-secondary font-weight-medium"><?php echo e(translate('Browse')); ?></div>
					                                </div>
					                                <div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
													<input type="hidden" name="types[]" value="home_banner2_images">
					                                <input type="hidden" name="home_banner2_images[]" class="selected-files" value="<?php echo e(json_decode(get_setting('home_banner2_images'), true)[$key]); ?>">
					                            </div>
					                            <div class="file-preview box sm">
					                            </div>
				                            </div>
										</div>
										<div class="col-md">
											<div class="form-group">
												<input type="hidden" name="types[]" value="home_banner2_links">
												<input type="text" class="form-control" placeholder="http://" name="home_banner2_links[]" value="<?php echo e(json_decode(get_setting('home_banner2_links'), true)[$key]); ?>">
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group">
												<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
													<i class="las la-times"></i>
												</button>
											</div>
										</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</div>
						<button
							type="button"
							class="btn btn-soft-secondary btn-sm"
							data-toggle="add-more"
							data-content='
							<div class="row gutters-5">
								<div class="col-md-5">
									<div class="form-group">
										<div class="input-group" data-toggle="aizuploader" data-type="image">
											<div class="input-group-prepend">
												<div class="input-group-text bg-soft-secondary font-weight-medium"><?php echo e(translate('Browse')); ?></div>
											</div>
											<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
											<input type="hidden" name="types[]" value="home_banner2_images">
											<input type="hidden" name="home_banner2_images[]" class="selected-files">
										</div>
										<div class="file-preview box sm">
										</div>
									</div>
								</div>
								<div class="col-md">
									<div class="form-group">
										<input type="hidden" name="types[]" value="home_banner2_links">
										<input type="text" class="form-control" placeholder="http://" name="home_banner2_links[]">
									</div>
								</div>
								<div class="col-md-auto">
									<div class="form-group">
										<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
											<i class="las la-times"></i>
										</button>
									</div>
								</div>
							</div>'
							data-target=".home-banner2-target">
							<?php echo e(translate('Add New')); ?>
						</button>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
					</div>
				</form>
			</div>
		</div>

		
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate('Home Banner 3 (Max 3)')); ?></h6>
			</div>
			<div class="card-body">
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label><?php echo e(translate('Banner & Links')); ?></label>
						<div class="home-banner3-target">
							<input type="hidden" name="types[]" value="home_banner3_images">
							<input type="hidden" name="types[]" value="home_banner3_links">
							<?php if(get_setting('home_banner3_images') != null): ?>
								<?php $__currentLoopData = json_decode(get_setting('home_banner3_images'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="row gutters-5">
										<div class="col-md-5">
											<div class="form-group">
												<div class="input-group" data-toggle="aizuploader" data-type="image">
					                                <div class="input-group-prepend">
					                                    <div class="input-group-text bg-soft-secondary font-weight-medium"><?php echo e(translate('Browse')); ?></div>
					                                </div>
					                                <div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
													<input type="hidden" name="types[]" value="home_banner3_images">
					                                <input type="hidden" name="home_banner3_images[]" class="selected-files" value="<?php echo e(json_decode(get_setting('home_banner3_images'), true)[$key]); ?>">
					                            </div>
					                            <div class="file-preview box sm">
					                            </div>
				                            </div>
										</div>
										<div class="col-md">
											<div class="form-group">
												<input type="hidden" name="types[]" value="home_banner3_links">
												<input type="text" class="form-control" placeholder="http://" name="home_banner3_links[]" value="<?php echo e(json_decode(get_setting('home_banner3_links'), true)[$key]); ?>">
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group">
												<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
													<i class="las la-times"></i>
												</button>
											</div>
										</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</div>
						<button
							type="button"
							class="btn btn-soft-secondary btn-sm"
							data-toggle="add-more"
							data-content='
							<div class="row gutters-5">
								<div class="col-md-5">
									<div class="form-group">
										<div class="input-group" data-toggle="aizuploader" data-type="image">
											<div class="input-group-prepend">
												<div class="input-group-text bg-soft-secondary font-weight-medium"><?php echo e(translate('Browse')); ?></div>
											</div>
											<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
											<input type="hidden" name="types[]" value="home_banner3_images">
											<input type="hidden" name="home_banner3_images[]" class="selected-files">
										</div>
										<div class="file-preview box sm">
										</div>
									</div>
								</div>
								<div class="col-md">
									<div class="form-group">
										<input type="hidden" name="types[]" value="home_banner3_links">
										<input type="text" class="form-control" placeholder="http://" name="home_banner3_links[]">
									</div>
								</div>
								<div class="col-md-auto">
									<div class="form-group">
										<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
											<i class="las la-times"></i>
										</button>
									</div>
								</div>
							</div>'
							data-target=".home-banner3-target">
							<?php echo e(translate('Add New')); ?>
						</button>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
					</div>
				</form>
			</div>
		</div>

		
		<?php if(addon_is_activated('auction')): ?>
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate('Auction Banner')); ?></h6>
			</div>
			<div class="card-body">
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					
					<div class="form-group">
						<div class="input-group" data-toggle="aizuploader" data-type="image">
							<div class="input-group-prepend">
								<div class="input-group-text bg-soft-secondary font-weight-medium"><?php echo e(translate('Browse')); ?></div>
							</div>
							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
							<input type="hidden" name="types[]" value="auction_banner_image">
							<input type="hidden" name="auction_banner_image" class="selected-files" value="<?php echo e(get_setting('auction_banner_image')); ?>">
						</div>
						<div class="file-preview box sm">
						</div>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
					</div>
				</form>
			</div>
		</div>
		<?php endif; ?>

		
		<?php if(get_setting('coupon_system') == 1): ?>
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate('Coupon Section')); ?></h6>
			</div>
			<div class="card-body">
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label><?php echo e(translate('Background Color')); ?></label>
						<input type="hidden" name="types[]" value="cupon_background_color">
						<input type="text" class="form-control" placeholder="#292933" name="cupon_background_color" value="<?php echo e(get_setting('cupon_background_color')); ?>">
					</div>
					<div class="form-group">
						<label><?php echo e(translate('Title')); ?></label>
						<input type="hidden" name="types[]" value="cupon_title">
						<input type="text" class="form-control" placeholder="<?php echo e(translate('Title')); ?>" name="cupon_title" value="<?php echo e(get_setting('cupon_title')); ?>">
					</div>
					<div class="form-group">
						<label><?php echo e(translate('Subtitle')); ?></label>
						<input type="hidden" name="types[]" value="cupon_subtitle">
						<input type="text" class="form-control" placeholder="<?php echo e(translate('Subtitle')); ?>" name="cupon_subtitle" value="<?php echo e(get_setting('cupon_subtitle')); ?>">
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
					</div>
				</form>
			</div>
		</div>
		<?php endif; ?>

		
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate('Home Categories')); ?></h6>
			</div>
			<div class="card-body">
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label><?php echo e(translate('Categories')); ?></label>
						<div class="home-categories-target">
							<input type="hidden" name="types[]" value="home_categories">
							<?php if(get_setting('home_categories') != null): ?>
								<?php $__currentLoopData = json_decode(get_setting('home_categories'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="row gutters-5">
										<div class="col">
											<div class="form-group">
												<select class="form-control aiz-selectpicker" name="home_categories[]" data-live-search="true" data-selected=<?php echo e($value); ?> required>
													<?php $__currentLoopData = \App\Models\Category::where('parent_id', 0)->with('childrenCategories')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($category->id); ?>"><?php echo e($category->getTranslation('name')); ?></option>
														<?php $__currentLoopData = $category->childrenCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<?php echo $__env->make('categories.child_category', ['child_category' => $childCategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                            </select>
											</div>
										</div>
										<div class="col-auto">
											<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
												<i class="las la-times"></i>
											</button>
										</div>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</div>
						<button
							type="button"
							class="btn btn-soft-secondary btn-sm"
							data-toggle="add-more"
							data-content='<div class="row gutters-5">
								<div class="col">
									<div class="form-group">
										<select class="form-control aiz-selectpicker" name="home_categories[]" data-live-search="true" required>
											<?php $__currentLoopData = \App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($category->id); ?>"><?php echo e($category->getTranslation('name')); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>
								<div class="col-auto">
									<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
										<i class="las la-times"></i>
									</button>
								</div>
							</div>'
							data-target=".home-categories-target">
							<?php echo e(translate('Add New')); ?>
						</button>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
					</div>
				</form>
			</div>
		</div>

		
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate('Classified Ads Banner')); ?></h6>
			</div>
			<div class="card-body">
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label><?php echo e(translate('Large Banner')); ?></label>
						<div class="input-group " data-toggle="aizuploader" data-type="image">
							<div class="input-group-prepend">
								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
							</div>
							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
							<input type="hidden" name="types[]" value="classified_banner_image">
							<input type="hidden" name="classified_banner_image" value="<?php echo e(get_setting('classified_banner_image')); ?>" class="selected-files">
						</div>
						<div class="file-preview box"></div>
					</div>
					<div class="form-group">
						<label><?php echo e(translate('Small Banner')); ?></label>
						<div class="input-group " data-toggle="aizuploader" data-type="image">
							<div class="input-group-prepend">
								<div class="input-group-text bg-soft-secondary"><?php echo e(translate('Browse')); ?></div>
							</div>
							<div class="form-control file-amount"><?php echo e(translate('Choose File')); ?></div>
							<input type="hidden" name="types[]" value="classified_banner_image_small">
							<input type="hidden" name="classified_banner_image_small" value="<?php echo e(get_setting('classified_banner_image_small')); ?>" class="selected-files">
						</div>
						<div class="file-preview box"></div>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary"><?php echo e(translate('Update')); ?></button>
					</div>
				</form>
			</div>
		</div>

		
		<div class="card">
			<div class="card-header">
				<h6 class="mb-0"><?php echo e(translate('Top 12')); ?></h6>
			</div>
			<div class="card-body">
				<form action="<?php echo e(route('business_settings.update')); ?>" method="POST" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					
					<div class="form-group row">
						<label class="col-md-2 col-from-label"><?php echo e(translate('Top Brands (Max 12)')); ?></label>
						<div class="col-md-10">
							<input type="hidden" name="types[]" value="top_brands">
							<select name="top_brands[]" class="form-control aiz-selectpicker" multiple data-max-options="12" data-live-search="true" data-selected="<?php echo e(get_setting('top_brands')); ?>">
								<?php $__currentLoopData = \App\Models\Brand::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($brand->id); ?>"><?php echo e($brand->getTranslation('name')); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
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

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
		$(document).ready(function(){
		    AIZ.plugins.bootstrapSelect('refresh');
		});
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xm\htdocs\kolzo\kolzo\resources\views/backend/website_settings/pages/home_page_edit.blade.php ENDPATH**/ ?>