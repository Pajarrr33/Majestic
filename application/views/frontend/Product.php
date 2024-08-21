

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="bg-holder overlay overlay-light" style="background-image:url(<?= base_url() ?>assets/img/gallery/header-bg.png);background-size:cover;">
        </div>
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
                <div class="col-first">
                    <h1>Product</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
                        <a href="category.html">Product</a>
                    </nav>
                </div>
            </div>
        </div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select name="filter">
							<?php if($filter == null) : ?>
							<option value="">Filter</option>
							<option value="women">Women</option>
							<option value="men">Men</option>
							<?php endif; ?>
							<?php if($filter == "women") : ?>
							<option value="women">Women</option>
							<option value="men">Men</option>
							<?php endif ; ?>
							<?php if($filter == "men") : ?>
							<option value="men">Men</option>
							<option value="women">Women</option>
							<?php endif ; ?>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select name="category">
							<?php if($category == null) : ?>
							<option value="">Category</option>
							<option value="T Shirt">T Shirt</option>
							<option value="Shirt">Shirt</option>
							<option value="Shoes">Shoes</option>
							<option value="Watch">Watch</option>
							<option value="Sunglasses">Sunglasses</option>
							<option value="Bagpacks">Bagpacks</option>
							<?php endif ; ?>
							<?php if($category == "T Shirt") : ?>
							<option value="T Shirt">T Shirt</option>
							<option value="Shirt">Shirt</option>
							<option value="Shoes">Shoes</option>
							<option value="Watch">Watch</option>
							<option value="Sunglasses">Sunglasses</option>
							<option value="Bagpacks">Bagpacks</option>
							<?php endif ; ?>
							<?php if($category == "Shirt") : ?>
							<option value="Shirt">Shirt</option>
							<option value="T Shirt">T Shirt</option>
							<option value="Shoes">Shoes</option>
							<option value="Watch">Watch</option>
							<option value="Sunglasses">Sunglasses</option>
							<option value="Bagpacks">Bagpacks</option>
							<?php endif ; ?>
							<?php if($category == "Shoes") : ?>
							<option value="Shoes">Shoes</option>
							<option value="T Shirt">T Shirt</option>
							<option value="Shirt">Shirt</option>
							<option value="Watch">Watch</option>
							<option value="Sunglasses">Sunglasses</option>
							<option value="Bagpacks">Bagpacks</option>
							<?php endif ; ?>
							<?php if($category == "Watch") : ?>
							<option value="Watch">Watch</option>
							<option value="T Shirt">T Shirt</option>
							<option value="Shirt">Shirt</option>
							<option value="Shoes">Shoes</option>
							<option value="Sunglasses">Sunglasses</option>
							<option value="Bagpacks">Bagpacks</option>
							<?php endif ; ?><?php if($category == "Sunglasses") : ?>
							<option value="Sunglasses">Sunglasses</option>
							<option value="T Shirt">T Shirt</option>
							<option value="Shirt">Shirt</option>
							<option value="Shoes">Shoes</option>
							<option value="Watch">Watch</option>
							<option value="Bagpacks">Bagpacks</option>
							<?php endif ; ?><?php if($category == "Bagpacks") : ?>
							<option value="Bagpacks">Bagpacks</option>
							<option value="T Shirt">T Shirt</option>
							<option value="Shirt">Shirt</option>
							<option value="Shoes">Shoes</option>
							<option value="Watch">Watch</option>
							<option value="Sunglasses">Sunglasses</option>
							<?php endif ; ?>
						</select>
					</div>
					<?php echo $this->pagination->create_links(); ?>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<?php if(empty($Product)) : ?>
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="alert alert-light " role="alert">
								The product you are looking for does not exist! Try searching using other keywords!
							</div>
						</div>
						<?php endif ; ?>
						<!-- single product -->
						<?php foreach($Product as $p) : ?>
						<?php if($p->promo == null) {$promo = null ;} else { $promo = 'l-through'; } ?>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="single-product">
								<a href="<?= base_url('Product/single_product/') . $p->id_product ?>">
								<img class="" width="287" height="287" src="<?= base_url('upload/product/') . $p->img ?>" alt="">
								<div class="product-details">
									<h6><?= $p->name ?></h6></a>
									<div class="price">
										<?php if($p->promo != null) : ?>
										<h6>
											<script>
                                                money = <?= $p->promo ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
										</h6>
										<h6 class="<?= $promo ?>">
											<script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
										</h6>
										<?php endif ; ?>
										<?php if($p->promo == null) : ?>
										<h6 class="<?= $promo ?>">
											<script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
										</h6>
										<?php endif ; ?>
									</div>
									<div class="prd-bottom">
										<a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
											<span class="bi bi-cart"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="<?= base_url('Wishlist/add_to_wishlist/') . $p->id_product ?>" class="social-info">
											<span class="bi bi-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="<?= base_url('Product/single_product/') . $p->id_product ?>" class="social-info">
											<span class="bi bi-arrow-right"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach ?>
					</div>
				</section>
				<!-- End Best Seller -->
			</div>
		</div>
	</div>

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= base_url() ?>assets/img/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= base_url() ?>assets/img/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= base_url() ?>assets/img/r3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= base_url() ?>assets/img/r5.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= base_url() ?>assets/img/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= base_url() ?>assets/img/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= base_url() ?>assets/img/r9.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= base_url() ?>assets/img/r10.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="<?= base_url() ?>assets/img/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
		$(document).ready(function(){
			$("select[name=filter]").on("change",function(){
				var filter = $("select[name=filter]").find(":selected").val();
				var category = $("select[name=category]").find(":selected").val();
				if(category == "") {
					window.location.replace("http://localhost/majestic/Product?Filter=" + filter);
				} else {
					window.location.replace("http://localhost/majestic/Product?Filter=" + filter + "&Category=" + category);
				}
			})

			$("select[name=category]").on("change",function(){
				var filter = $("select[name=filter]").find(":selected").val();
				var category = $("select[name=category]").find(":selected").val();
				if(filter == "") {
					window.location.replace("http://localhost/majestic/Product?Category=" + category);
				} else {
					window.location.replace("http://localhost/majestic/Product?Filter=" + filter + "&Category=" + category);
				}
			})
		})
	</script>
	<!-- End related-product Area -->
