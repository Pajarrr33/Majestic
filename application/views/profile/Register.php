

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="bg-holder overlay overlay-light" style="background-image:url(<?= base_url() ?>assets/img/gallery/header-bg.png);background-size:cover;">
	</div>
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
			<div class="col-first">
				<h1>Register</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
					<a href="category.html">Register</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Register Your Account</h3>
						<form class="row login_form" action="<?= basename('User/Register') ?>" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password1" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password2" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Register</button>
								<a href="<?= base_url('User') ?>">Already Have an Account?</a>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_box_img" style="margin-left: -30px;">
						<img class="img-fluid" src="<?= base_url() ?>assets/img/gallery/him.png" alt="">
						<div class="hover">
							<h4>Have you visited our website before?</h4>
							<p>Log in with your  account</p>
							<a class="primary-btn" href="<?= base_url('Login') ?>">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	