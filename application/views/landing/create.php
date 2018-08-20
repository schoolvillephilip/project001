<?php $this->load->view('landing/resources/head_base'); ?>
<style>

	.well {
		padding: 5px;
		font: 12px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
	}

</style>
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
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<!-- Start your conytainer class here get reference from the theme -->
	<div class="container">
		<div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box-lg" style="margin-top: 14px;">
                    <h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
                        Create An Account</h3>
                    <?= form_open('', 'autocorrect="off", id="register-form"'); ?>
                    <div class="alert-notif"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First Name*</label>
                                    <input class="form-control" type="text" name="signupfirstname" placeholder="First name" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname_name">Last Name*</label>
                                    <input class="form-control" type="text" name="signuplastname" placeholder="Last Name" required />
                                </div>
                            </div>  
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number*</label>
                            <input class="form-control" type="number" name="signup-phone" name="phone" placeholder="08022334455" required />
                        </div>
                        <div class="form-group">
                            <label>Email Address*</label>
                            <input class="form-control" type="text" id="signup-email" name="signupemail" placeholder="Email Address" required/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password*</label>
                                    <input class="form-control" type="password" id="signup-password" name="signuppassword" placeholder="Password" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Repeat Password*</label>
                                    <input class="form-control" type="password" id="signup-repeat-password" name="signuprepeatpassword" placeholder="Confirm Password" required/>
                                </div>
                            </div>
                        </div>
                        <div class="well text-center">
                            <div class="checkbox">
                                <label>
                                    <input class="i-check" type="checkbox"/>
                                    I agree to Carrito <a href="#">Terms & Conditions</a> | <a href="#">
                                        Policy.</a></label>
                            </div>
                        </div>
                        <input class="carrito_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
                               value="Create Account"/>
                    <?= form_close(); ?>
                    <br />
                    <div class="form_end">
                        <a href="<?= base_url('account'); ?>">Already Have An Account</a>
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
	// Carrito signUp validation
	$('document').ready(function () {
		/* validation */
		$("#register-form").validate({
			rules:
				{
					signupemail: {
						required: true,
						email: true
					},
					signuppassword: {
						required: true,
						minlength: 8,
						maxlength: 15
					},
					signuprepeatpassword: {
						required: true,
						equalTo: '#signup-password'
					},
				},
			messages:
				{

					signuppassword: {
						required: "Provide a Password",
						minlength: "Password Needs To Be Minimum of 8 Characters"
					},
					signupemail: "Enter a Valid Email",
					signuprepeatpassword: {
						required: "Retype Your Password",
						equalTo: "Password Mismatch! Retype"
					}
				},
			submitHandler: submitForm
		});

		// Carrito form submit
		function submitForm() {
			let data = $("#register-form").serialize();

			$.ajax({

				type: 'POST',
				url: base_url + 'account/signup_process',
				data: data,

				success: function (data) {
                    // console.log(data);
					if (data.status === "success") {
                        // $('.alert-notif').slideDown().html('<p>' + data.message + '</p>').slideUp();
                        alert(data.message);
						console.log("Success")

					}
					else if (data.status === "error") {
						// $('.alert-notif').slideDown().html('<p>' + data.message + '</p>').slideUp();
                        alert(data.message);
                        // console.log("Error")
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
