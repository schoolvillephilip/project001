<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<div class="navbar-before mobile-hidden">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="navbar-before-sign">Everything You Need is theBox</p>
				</div>
				<div class="col-md-6">
					<ul class="nav navbar-nav navbar-right navbar-right-no-mar">
						<li><a href="#">About Us</a>
						</li>
						<li><a href="#">Blog</a>
						</li>
						<li><a href="#">Contact Us</a>
						</li>
						<li><a href="#">FAQ</a>
						</li>
						<li><a href="#">Wishlist</a>
						</li>
						<li><a href="#">Help</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
		<h3 class="widget-title">Member Login</h3>
		<p>Welcome back, friend. Login to get started</p>
		<hr/>
		<form>
			<div class="form-group">
				<label>Email or Username</label>
				<input class="form-control" type="text"/>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="text"/>
			</div>
			<div class="checkbox">
				<label>
					<input class="i-check" type="checkbox"/>Remeber Me</label>
			</div>
			<input class="btn btn-primary" type="submit" value="Sign In"/>
		</form>
		<div class="gap gap-small"></div>
		<ul class="list-inline">
			<li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
			</li>
			<li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
			</li>
		</ul>
	</div>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<!-- Start your conytainer class here get reference from the theme -->
	<div class="container">
		<div class="row ">
			<div class="col-md-8 col-md-offset-2 ">
				<div class="box-lg" style="margin-top: 14px;">
					<div class="row" data-gutter="60">
						<div class="col-md-12" style="margin-bottom: 40px;">
							<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
								Reset Password</h3>
							<form autocorrect="off" autocomplete="off" id="reset-form">
								<div class="form-group">
									<label>Email Address*</label>
									<input class="form-control" type="email" name="resetemail" id="resetemail"/>
								</div>
								<input class="carrito_btn_sign col-md-12 col-sm-12 col-xs-12" type="submit"
									   value="Reset Password"/>
							</form>
							<div class="form_end">
								<a href="#" onclick="window.history.back();">Never mind</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gap gap-small"></div>

	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
<script>
	$('document').ready(function () {
		/* validation */
		$("#reset-form").validate({
			rules:
				{
					resetemail: {
						required: true,
						email: true
					},
				},
			messages:
				{
					resetemail: "Enter a Valid Email",
				},
			submitHandler: submitForm
		});


		function submitForm() {
			let data = $("#reset-form").serialize();

			$.ajax({

				type: 'POST',
				url: 'reset/process',
				data: data,

				success: function (data) {
					if (data.status === "success") {

						console.log("Success")

					}
					else if (data === "error") {
						console.log("Error")
					}
					else {
						console.log("An unknown error occurred")
					}
				}
			});
			return false;
		}

	});


</script>
</body>
</html>
