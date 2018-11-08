<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
<style type="text/css">
	.feature-attribute:hover {
		cursor: pointer;
	}

	.carrito-checkbox {
		display: block;
		position: relative;
		padding-left: 25px;
		margin-bottom: 10px;
		cursor: pointer;
		font-size: 14px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	.carrito-checkbox input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
	}

	.checkmark {
		cursor: pointer;
		position: absolute;
		top: 0;
		left: 0;
		padding: 3px;
		margin-top: 2px;
		height: 15px;
		width: 15px;
		border: solid 1px #74c68366;;
		background-color: #fff;
	}

	.carrito-checkbox:hover input ~ .checkmark {
		border-color: #74c68366;
	}

	.carrito-checkbox input:checked ~ .checkmark {
		background-color: #74c683;
	}

	;

	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}

	/* Show the checkmark when checked */
	.carrito-checkbox input:checked ~ .checkmark:after {
		display: block;
		color: white;
	}

	/* Style the checkmark/indicator */
	.carrito-checkbox .checkmark:after {
		left: 9px;
		top: 5px;
		width: 5px;
		height: 10px;
		border: solid white;
		border-width: 0 3px 3px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
	}
</style>
</head>
<body>

<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category'); ?>
	<?php $this->load->view('landing/resources/head_menu'); ?>


	<?php if (empty($products)) : ?>
		<div class="container">
			<div class="row">
				<div class="gap-large"></div>
				<h2 class="text-center">Oops! Sorry, we couldn't find products on this section.</h2>
				<p class="text-muted text-sm text-center">You can browse for more product <a href="<?= base_url(); ?>">Find
						product</a></p>
			</div>
		</div>
	<?php else : ?>
		<div class="container">
			<div class="row">
				<header class="page-header">
					<ol class="breadcrumb page-breadcrumb">
						<li><a href="<?= base_url(); ?>">Home</a>
						</li>
						<li class="active"><?= ucwords($searched); ?>
						</li>
					</ol>
					<ul class="category-selections clearfix">
						<ul class="category-selections clearfix">
							<li><span class="category-selections-sign">Sort by :</span>
								<select name="order" class="category-selections-select">
									<option selected>Newest First</option>
									<option>Best Sellers</option>
									<option>Trending Now</option>
									<option>Best Raited</option>
									<option>Price : Lowest First</option>
									<option>Price : Highest First</option>
									<option>Title : A - Z</option>
									4
									<option>Title : Z - A</option>
								</select>
							</li>
						</ul>
					</ul>
				</header>
			</div>
			<div class="gap"></div>
			<div class="row">
				<div class="col-md-3">
					<aside class="category-filters">
						<div class="category-filters-section">
							<h3 class="widget-title-sm custom-widget-text">Category</h3>
							<ul class="cateogry-filters-list">
								<li></li>
								<?php foreach ($sub_categories as $category) : ?>
									<li>
										<a href="<?= base_url('catalog/' . urlify($category->name)); ?>">
											<?= $category->name; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="category-filters-section">
							<h3 class="widget-title-sm custom-widget-text">Price</h3>
							<input type="text" id="price-slider"/>
							<input type="hidden" id="hidden_minimum_price" name="">
							<input type="hidden" id="hidden_maximum_price" name="">
						</div>
						<?php if (!empty($brands)): ?>
							<div class="category-filters-section">
								<h3 class="widget-title-sm custom-widget-text">Brand</h3>
								<?php foreach ($brands as $brand) : ?>
									<div class="carrito-checkbox">
										<label class="tree-input">

											<input class="filter" type="checkbox" data-type="brand_name"
												   name="filterset"
												   data-value="<?= trim($brand->brand_name); ?>"><?= ucfirst($brand->brand_name); ?>
											<span class="checkmark"></span>
											<span class="category-filters-amount">(<?= $brand->brand_count; ?>)</span>
										</label>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
						<?php if (!empty($colours)) : ?>
							<div class="category-filters-section">
								<h3 class="widget-title-sm custom-widget-text">Main Colour</h3>
								<?php foreach ($colours as $colour) : ?>
									<div class="carrito-checkbox">
										<label class="tree-input">
											<input class="filter" type="checkbox" data-type="main_colour"
												   name="filterset"
												   data-value="<?= trim($colour->colour_name); ?>"/><?= ucfirst($colour->colour_name); ?>
											<span class="checkmark"></span>
											<span class="category-filters-amount">(<?= $colour->colour_count; ?>)</span>
										</label>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
						<!-- Features -->
						<div class="category-filters-section">
							<?php foreach ($features

							as $feature => $feature_value) : ?>
							<div class="accordion" id="<?= trim($feature); ?>">
								<div class="panel no-outline feature-attribute">
									<div class="panel-header feature-attribute">
										<div class="panel-title" data-toggle="collapse"
											 data-target="#<?= trim($feature) . '-1'; ?>" aria-expanded="true"
											 aria-controls="<?= trim($feature) . '-1'; ?>">
											<h3 class="widget-title-sm custom-widget-text tree-root">
												<?= preg_replace("/[^A-Za-z 0-9]/", ' ', $feature); ?>
											</h3>
										</div>
									</div>
									<div id="<?= trim($feature) . '-1'; ?>" class="collapse"
										 aria-labeledby="<?= $feature; ?>" data-parent="#<?= trim($feature); ?>">
										<div class="panel-body">
											<?php foreach ($feature_value as $key => $value) : ?>
												<div class="carrito-checkbox">
													<label class="tree-input">
														<input class="filter" type="checkbox" name="filterset"
															   data-type="<?= trim($feature); ?>"
															   data-value="<?= trim(preg_replace("/[^A-Za-z0-9-]/", '_', $value)) ?>"/><?= $value; ?>
														<span class="checkmark"></span>
													</label>
												</div>

											<?php endforeach; ?>
										</div>
									</div>
									<hr class="tree-line"/>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</aside>
				</div>
				<div class="col-md-9">
					<div id="processing"
						 style="display:none;position: center;top: 0;left: 0;width: auto;height: auto%;background: #f4f4f4;z-index: 99;">
						<div class="text"
							 style="position: absolute;top: 35%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">
							<img src="<?= base_url('assets/landing/load.gif'); ?>" alt="Processing...">
							Processing your request. <strong
								style="color: rgba(2.399780888618386%,61.74193548387097%,46.81068368248487%,0.843);">Please
								Wait! </strong>
						</div>
					</div>

					<div id="category_body">
						<div class="cat-notify">
							<p class="n-head"><?= $searched; ?></p>
							<p class="n-body"><strong><?= number_format(count($products)) . ' results'; ?></strong></p>
						</div>

						<div class="row filter_data" data-gutter="15">
							<?php foreach ($products as $product) : ?>
								<div class="col-md-3 clearfix">
									<div class="product">
										<?php if (!empty($product->discount_price)): ?>
											<ul class="product-labels">
												<li><?= get_discount($product->sale_price, $product->discount_price); ?></li>

											</ul>
										<?php endif; ?>
										<div class="product-img-wrap">
											<img class="product-img"
												 data-src="<?= base_url('data/products/' . $product->id . '/' . $product->image_name); ?>"
												 src="<?= base_url('data/products/' . $product->id . '/' . $product->image_name); ?>"
												 alt="<?= $product->product_name; ?>"
												 title="<?= $product->product_name; ?>">
										</div>
										<a class="product-link" title="<?= $product->product_name ?>"
										   href="<?= base_url(urlify($product->product_name, $product->id)); ?>"></a>
										<div class="product-caption">
											<ul class="product-caption-rating">
												<li class="rated"><i class="fa fa-star"></i>
												</li>
												<li class="rated"><i class="fa fa-star"></i>
												</li>
												<li class="rated"><i class="fa fa-star"></i>
												</li>
												<li class="rated"><i class="fa fa-star"></i>
												</li>
												<li class="rated"><i class="fa fa-star"></i>
												</li>
												<span
													class="text-sm pull-right"><strong>Seller: </strong><?= $product->first_name; ?></span>
											</ul>
											<h5 class="cs-title"><?= word_limiter(ucwords($product->product_name), 7, '...'); ?></h5>
											<div class="product-caption-price">
												<?php if (!empty($product->discount_price)) : ?>
													<span>
													<span
														class="cs-price-tl"><?= ngn($product->discount_price); ?></span>
														<span
															class="cs-price-tl-discount"><sup><?= ngn($product->sale_price); ?> </sup></span>
													</span>
												<?php else : ?>
													<span
														class="cs-price-tl"><?= ngn($product->sale_price); ?> </span>
												<?php endif; ?>
												<span class="pull-right category-favorite"><i class="fa fa-heart"></i> &nbsp;</span>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<?= $pagination ?>
							</div>
						</div>
					</div>
				</div>
				<div class="gap"></div>
			</div>
		</div>
	<?php endif; ?>
	<div class="gap"></div>
	<!--comment-->
	<?php $this->load->view('landing/resources/footer'); ?>
</div>
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/ionrangeslider.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript"
		src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script>
	let base_url = "<?= base_url(); ?>";
	let current_url = "<?= current_url()?>";
</script>
<script src="<?= base_url('assets/landing/js/search.js'); ?>"></script>
<script>
	$("#price-slider").ionRangeSlider({
		min: 1000,
		max: 50000,
		type: 'double',
		prefix: "&#8358;",
		prettify: false,
		hasGrid: true
	});
	$(document).ready(function () {
		let _category_body = $('#category_body');

		function doReplaceState(url) {
			let state = {current_url: url},
				title = "Carrito MarketPlace";
			history.replaceState(state, title, url);
		}

		function load_page(url) {
			$(_category_body).load(`${url} #category_body`, function (response, status, xhr) {
				if (status === "error") {
					let msg = "Sorry but there was an error: ";
					alert(msg + xhr.status + " " + xhr.statusText);
				}

				doReplaceState(url);

				$('#processing').hide();
				$(_category_body).show();
			});
		}

		let url = '';
		let filter_string = '';
		$('.filter').change(function () {
			if ($('input[name=filterset]').is(':checked')) {
				let filter_list = {};
				url = '';
				filter_string = '';
				$(_category_body).hide();
				$('#processing').show();
				let items = $('input[name=filterset]:checked');

				items.each(function () {
					let value = $(this).data('value');
					let key = $(this).data('type');

					if (filter_list[key]) {
						if (jQuery.inArray(value, filter_list[key]) !== -1) {
						} else {
							filter_list[key].push(value)
						}
					} else {
						filter_list[key] = [value];
					}
					url = '';
					jQuery.each(filter_list, function (obj) {
						filter_string = '';
						jQuery.each(filter_list[obj], function (id, values) {
							if (filter_string === '') {
								filter_string += values;
							} else {
								filter_string += ',' + values;
							}
						});
						if (url === '') {
							url += `?${obj}=${filter_string}`
						} else {
							url += `&${obj}=${filter_string}`
						}
					});
					load_page(url);

				});
			} else {
				load_page(current_url);
			}
		});
	});
</script>
</body>
</html>