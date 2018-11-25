<?php $this->load->view('landing/resources/head_base'); ?>
<style>
	.custom-card {
		background: #fff;
		padding-top: 8px;
		padding-bottom: 8px;
		margin-bottom: 2px;
		-webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
		box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
	}

	.margin-0 {
		margin: 0;
	}

	.redirect-text {
		font-size: 13px;
		color: #49A251;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	}

	.seller-name {
		font-size: 12px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		color: #292929;
		margin-bottom: 2px;
	}

	.product-name {
		font-size: 14px;
		color: #030303;
		font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-weight: 600;
	}

	.rating-count {
		position: relative;
		bottom: 9px;
		right: 2px;
		color: #dda61d;
		font-size: 14px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	}

	.rating-total-count {
		position: relative;
		bottom: 2px;
		color: #6b57ff;
		font-size: 12px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	}

	.product-price {
		font-size: 21px;
		font-weight: 700;
		color: #55a455;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		position: relative;
		top: -8px;
	}

	.product-price > span {
		float: right;
		padding: 10px;
		background: #c9ffd3;
		color: #55a455;
		font-weight: 600;
		font-size: 15px;
	}

	.product-discount-price {x
		font-size: 13px;
		font-weight: 600;
		color: #b0b0b0;
		text-decoration: line-through;
		font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
		position: relative;
		top: -18px;
	}

	.variation-option {
		font-size: 12px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		color: #242424;
		outline: 1px solid #d0d0d0;
		padding: 3px;
		width: 100%;
		text-align: center;
	}

	.option-disabled {
		color: #bebebe;
		text-decoration: line-through;
	}

	.variation-option-list {
		margin-top: -3px;
	}

	.buy-btn {
		margin-top: 3px;
		background: #468c46;
		color: #fff;
		padding: 13px;
	}

	.block-title {
		color: #468c46;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		font-size: 13px;
	}

	.block-title > span {
		float: right;
		color: #2e2e2e;
	}

	.wishlist-cta {
		text-align: center;
		margin-top: 4px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		font-size: 13px;
	}

	.delivery-text {
		font-size: 13px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		position: relative;
		top: 2px;
		left: 10px;
	}

	.body_text {
		font-size: 13px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		position: relative;
	}

	.product-image {
		width: 200px;
		height: 260px;
	}

	.text-break {
		margin-bottom: -6px;
		padding-top: 8px;
		padding-bottom: 8px;
		color: #000;
		font-weight: 500
	}

	.comment-date {
		color: #777;
		font-size: 12px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	}

	.comment-title {
		color: #333;
		font-size: 14px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	}

	.comment-detail {
		color: #404040;
		font-size: 13px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		position: relative;
		top: -5px;
	}

	.comment-line {

		margin-top: -10px;
		margin-bottom: 16px;
	}

	.comment-block {
		margin-top: ;
	}

	.rating-btn {
		background: #468c46;
		color: #fff;
		padding: 13px;
	}
</style>
</head>
<body style="background: #e5e5e5">
<div class="global-wrapper clearfix" id="global-wrapper" style="margin-bottom: 3px;">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category'); ?>
	<?php $this->load->view('landing/resources/head_menu'); ?>
</div>

<!--Top menu back button-->
<div class="custom-card">
	<div class="container">
		<p class="margin-0"><img src="<?= base_url('assets/landing/svg/back.svg'); ?>" alt="Back button"
								 style="height: 14px; width: 14px; margin-right: 8px;"><span class="redirect-text">Go back to Electronics</span>
		</p>
	</div>
</div>

<!--Gallery section-->
<div class="custom-card">
	<div class="container">
		<div class="owl-carousel">
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
			<img class="product-image" src="<?= base_url('assets/landing/img/test_slider/1.png'); ?> "/>
		</div>
	</div>
</div>

<!--Main Description card-->
<div class="custom-card">
	<div class="container">
		<p class="seller-name">Sokoya Philip</p>
		<p class="product-name">Hp Laptop core i5 7th generation - Black</p>
		<div style="margin-top: 4px; margin-left: 2px">
			<span class="rating-count">5/5</span>
			<ul style="display: inline-block" class="product-caption-rating">
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<span style="margin-left: 5px;" class="rating-total-count">(8 ratings)</span>
			</ul>
		</div>
		<p class="product-price">&#8358; 45,000 <span>-10%</span></p>
		<p class="product-discount-price">&#8358; 55,000</p>

	</div>
</div>

<!--Buy Card-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<p class="block-title">Buy Now <span>&#8358; 45,000</span></p>
		<div class="row">
			<div class="col-md-7">
				<p class="custom-product-page-option-title">Quantity:</p>
				<ul>
					<li class="product-page-qty-item">
						<button type="button"
								class="product-page-qty product-page-qty-minus">-
						</button>
						<input data-range="10" name="quantity"
							   id="quan"
							   class="product-page-qty product-page-qty-input quantity"
							   type="text"
							   value="1"/>
						<button type="button"
								class="product-page-qty product-page-qty-plus">+
						</button>
					</li>
				</ul>
			</div>

		</div>

		<div class="row" style="margin-top: 10px;">

			<div class="col-xs-12">
				<p class="custom-product-page-option-title">Color: </p>
				<div class="row variation-option-list">
					<div class="col-xs-3"><p class="variation-option option-disabled">Red</p></div>
					<div class="col-xs-3"><p class="variation-option">Black</p></div>
					<div class="col-xs-3"><p class="variation-option option-disabled">Green</p></div>
					<div class="col-xs-3"><p class="variation-option">Gold</p></div>
					<div class="col-xs-3"><p class="variation-option">Yellow</p></div>
					<div class="col-xs-3"><p class="variation-option">Silver</p></div>
				</div>
			</div>

		</div>
		<button class="btn btn-block buy-btn">
			Add to Cart
		</button>
		<p class="wishlist-cta">Save to Wishlist</p>
	</div>
</div>

<!--Delivery Information Card-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<p class="block-title">Delivery Information</p>
		<div class="row">
			<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
				<img src="<?= base_url('assets/landing/svg/delivery-truck.svg'); ?>" alt="Delivery Truck"
					 style="height: 30px; width: 35px;">
			</div>
			<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
				<p class="delivery-text">Onitsha Market delivery available, get it within 5 business days of order</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
				<img src="<?= base_url('assets/landing/svg/return.svg'); ?>" alt="Delivery Truck"
					 style="height: 30px; width: 35px;">
			</div>
			<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
				<p class="delivery-text">Free 7 day return if available</p>
			</div>
		</div>
		<div class="row" style="margin-top: 14px;">
			<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
				<img src="<?= base_url('assets/landing/svg/warranty.svg'); ?>" alt="Warranty"
					 style="height: 30px; width: 35px;">
			</div>
			<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
				<p class="delivery-text" style="position: relative; top: -5px;">This product has the following warranty
					: Repair by vendor
					<br/>
					<a href="javascript:void(0)">Learn more</a>
				</p>
			</div>
		</div>
	</div>
</div>

<!--Section Title [Overview]-->
<div class="container"><p class="text-break" style="">Overview</p></div>

<!--Product Description Card-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<p class="block-title close-panel" data-target="title_vl" style="margin-top: 5px;">Product Shop <span
				style="color: #4c4c4c !important; float: right"><i
					class="fa fa-minus close-panel"
					aria-hidden="true"
					data-target="title_vl"></i></span></p>
		<p class="body_text" id="title_vl">Fouani Nigeria, Trendy Woman Ltd, SEOLAK</p>
		<hr/>
		<p class="block-title close-panel" data-target="description_vl">Product Description <span
				style="color: #4c4c4c !important; float: right"><i
					class="fa fa-minus close-panel"
					aria-hidden="true"
					data-target="description_vl"></i></span></p>
		<p id="description_vl" class="body_text">
			There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
			some form, by injected humour, or randomised words which don't look even slightly believable. If you are
			going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
			middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
			necessary, making this the first true generator on the Internet.
		</p>
		<hr/>
		<p class="block-title close-panel" data-target="box_vl">What you will find in the box <span
				style="color: #4c4c4c !important; float: right"><i
					class="fa fa-plus close-panel"
					aria-hidden="true"
					data-target="box_vl"></i></span></p>
		<p class="body_text" style="display: none" id="box_vl">
			There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
			some form, by injected humour, or randomised words which don't look even slightly believable. If you are
			going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
			middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
			necessary, making this the first true generator on the Internet.
		</p>
	</div>
</div>

<!--Section Title [Full Specifications]-->
<div class="container"><p class="text-break" style="">Full Specifications</p></div>

<!--Product Specification Card-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Specification</th>
				<th>Details</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Ram</td>
				<td>8GB</td>
			</tr>
			<tr>
				<td>Screen Size</td>
				<td>16 Inches</td>
			</tr>
			<tr>
				<td>OS</td>
				<td>Windows</td>
			</tr>
			<tr>
				<td>Storage</td>
				<td>1TB</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>

<!--Section Title [Ratings and Reviews]-->
<div class="container"><p class="text-break" style="">Ratings and Reviews</p></div>

<!--Product Ratings And Reviews-->
<div class="custom-card" style="margin-top: 5px;">
	<div class="container">
		<p class="block-title" style="margin-top: 5px;">Total Ratings</p>
		<div style="margin-top: 4px; margin-left: 2px">
			<span class="rating-count">5/5</span>
			<ul style="display: inline-block" class="product-caption-rating">
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<span style="margin-left: 5px;" class="rating-total-count">(8 ratings)</span>
			</ul>
		</div>
		<hr style="margin-top: -4px;"/>
		<p class="block-title" style="margin-top: 5px;">All Reviews</p>
		<div class="comment-block">
			<ul style="display: inline-block" class="product-caption-rating">
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>

			</ul>
			<span style="float: right;" class="comment-date">22 November 2018</span>
		</div>
		<p class="comment-title">Great Product</p>
		<p class="comment-detail">This is a great product I can't stop using it</p>
		<hr class="comment-line"/>
		<div class="comment-block">
			<ul style="display: inline-block" class="product-caption-rating">
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>

			</ul>
			<span style="float: right;" class="comment-date">22 November 2018</span>
		</div>
		<p class="comment-title">Lovely System</p>
		<p class="comment-detail">Wonderful system my grand daughter loves it </p>
		<hr class="comment-line"/>
		<div class="comment-block">
			<ul style="display: inline-block" class="product-caption-rating">
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>
				<li class="rated"><i class="fa fa-star"></i></li>

			</ul>
			<span style="float: right;" class="comment-date">22 November 2018</span>
		</div>
		<p class="comment-title">Good Battery</p>
		<p class="comment-detail">Excellent battery service, lasts longer than my previous systems</p>
		<hr class="comment-line"/>
	</div>
</div>
<button class="btn btn-block rating-btn">View all reviews</button>


<!--Scripts-->
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/custom.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/search.js'); ?>"></script>
<script>
	// owl carousel initialization
	$(document).ready(function () {

		$('.close-panel').on('click', function () {
			let target = $(this).data('target');
			if ($(this).hasClass('fa')) {
				$(this).toggleClass("fa-minus fa-plus");
				$(`#${target}`).toggle()
			}
			$(this).find('.fa').toggleClass("fa-minus fa-plus");
			$(`#${target}`).toggle()

		});

		$(".owl-carousel").owlCarousel({
			items: 1,
			lazyLoad: true,
			loop: true,
		});
	});
</script>
<?php $this->load->view('landing/resources/footer'); ?>
</body>
</html>