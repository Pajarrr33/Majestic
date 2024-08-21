

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="bg-holder overlay overlay-light" style="background-image:url(assets/img/gallery/header-bg.png);background-size:cover;">
	</div>
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
			<div class="col-first">
				<h1>Profile</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
					<a href="category.html">Profile</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->


	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-lg-12 col-xl-12 col-md-12 col-sm-12">
				  <div class="card">
					<div class="rounded-top text-white d-flex flex-row" style="background-color: lightgray; height:200px;">
					  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
						<img src="<?= base_url('upload/pp/') . $User['image'] ?>"
						  alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
						  style="width: 150px; z-index: 1">
						<a href="<?= base_url('User/update_profile/') ?>" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
						  style="z-index: 1; color:#212121;" onmouseover="this.style.color='white'" onmouseout="this.style.color='#212121'">
						  Edit profile
						</a>
					  </div>
					  <div class="ms-3" style="margin-top: 130px;">
						<h5><?= $User['nama'] ?></h5>
						<p><?= $User['email'] ?></p>
					  </div>
					</div>
					<div class="p-4 text-black" style="background-color: #f8f9fa;">
					  <div class="d-flex justify-content-end text-center py-1">
					  </div>
					</div>
					<div class="container mt-5">
						<div class="d-flex justify-content-between mb-4">
							<p class="lead fw-normal mb-0">Recent Shop</p>
					  	</div>
					  	<div class="row mt-3 mb-5">
							<div class="col-lg-3 col-md-3 col-sm-6 text-center">
								<a href="<?= base_url('User/order/paid') ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
									<path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
								</svg>
								<p>Already Paid</p>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 text-center">
								<a href="<?= base_url('User/order/processed') ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
									<path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
								</svg>
								<p>Processed</p>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 text-center">
								<a href="<?= base_url('User/order/sent') ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
									<path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
								</svg>
								<p>Already Sent</p>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 text-center">
								<a href="<?= base_url('User/order/done') ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
									<path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
								</svg>
								<p>Done</p>
								</a>
							</div>
					  	</div>
					</div>
					  <div class="card-body p-4 text-black">
					  <div class="mb-5">
							<div class="row">
								<div class="col-lg-12 d-flex">
									<p class="d-inline-block lead fw-normal mb-1">Adress</p>
									<a href="<?= base_url('User/add_adress/') ?>" class="btn btn-success d-inline-block ml-auto"><i class="bi bi-plus"></i> Add Adress</a>
								</div>
							</div>
							<div class="row">
								<?php if(empty($Adress)) : ?>
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="alert alert-light " role="alert">
											You have not set an address!, Please Set First
										</div>
									</div>
								<?php endif ; ?>	
								<?php foreach($Adress as $a) : ?>
								<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
									<div class="border rounded">
										<ul class="mr-3">
											<li class="d-flex border-bottom mt-3 pb-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="d-inline-block bi bi-house" viewBox="0 0 16 16">
													<path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
												</svg>
												<h5 class="d-flex align-items-center ml-3 d-inline-block"><?= $a->address_name ?></h5>
											</li>
											<li class="mt-3">
												<h5><?= $a->name ?></h5>
												<p class="border-bottom pb-2"><?= $a->phone ?> / <?= $a->email ?></p>
												<p><?= $a->province ?>, <?= $a->distrik ?>, <?= $a->street ?></p>
												<a href="<?= base_url('User/update_adress/' . $a->id) ?>" class="mt-3 btn btn-outline-dark btn-block">Edit Address</a>
											</li>
										</ul>
									</div>
								</div>
								<?php endforeach ; ?>
							</div>
					  </div>
						<div class="col-lg-6">
							<a class="btn btn-secondary" href="<?= base_url('Login/logout') ?>" style="color:#212121; background-color:#E2E3E5; border-color:#E2E3E5;" >Logout</a>
						</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</section>
	
	<!--================End Login Box Area =================-->

