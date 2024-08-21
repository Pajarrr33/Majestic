<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="bg-holder overlay overlay-light" style="background-image:url(<?= base_url() ?>assets/img/gallery/header-bg.png);background-size:cover;">
	</div>
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
			<div class="col-first">
				<h1>Order</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
					<a href="category.html">Profile<span class="bi bi-arrow-right"></span></a>
                    <a href="">Order</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<style>
		@media screen and (max-width:767px)
		{
			.img_product {
				width: 50px;
				height: 50px;
			}

			.product_name {
				max-width: 209px;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			}

			.product_price {
				margin-left: -4.25rem;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			}

			.btn_product {
				margin-left: -4.25rem;
				padding: 0.25rem 1rem 0.25rem 1rem;
				display: inline-block;
			}

			.btn_buy {
				margin-left: auto;
			}
		}
	</style>

<section>
    <div class="container bg-light">
        <div class="row text-center">
            <?php $paid = ''; $sent = ''; $done = ''; $processed = ''; if($this->uri->segment(3) == 'paid') { $paid = 'text-danger'; } elseif($this->uri->segment(3) == 'processed') { $processed = 'text-danger'; } elseif($this->uri->segment(3) == 'sent') { $sent = 'text-danger'; } elseif($this->uri->segment(3) == 'done') { $done = 'text-danger'; }?>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <a href="<?= base_url('User/order/paid') ?>">
                    <h5 class="mt-3 mb-3 <?= $paid ?>">Already Paid</h5>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <a href="<?= base_url('User/order/processed') ?>">
                    <h5 class="mt-3 mb-3 <?= $processed ?>">Processed</h5>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <a href="<?= base_url('User/order/sent') ?>">
                    <h5 class="mt-3 mb-3 <?= $sent ?>">Sent</h5>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <a href="<?= base_url('User/order/done') ?>">
                    <h5 class="mt-3 mb-3 <?= $done ?>">Done</h5>
                </a>
            </div>
        </div>

        <div class="row mt-3 g-2">
            <?php if(empty($Order)) : ?>
				<div class="col-xl-12 col-lg-12 col-md-12 text-center mt-5 mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="no_orders" width="150px" height="150px" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>.no_orders{fill:#f1f2f4}</style><path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16h48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16h48v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm48 112c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H128c-8.8 0-16 7.2-16 16zm0 64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H128c-8.8 0-16 7.2-16 16zm-6.3 71.8L82.1 335.9c-1.4 5.4-2.1 10.9-2.1 16.4c0 35.2 28.8 63.7 64 63.7s64-28.5 64-63.7c0-5.5-.7-11.1-2.1-16.4l-23.5-88.2c-3.7-14-16.4-23.8-30.9-23.8H136.6c-14.5 0-27.2 9.7-30.9 23.8zM128 336h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H128c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                    <h5 class="mt-3">No orders yet</h5>
                </div>
			<?php endif ; ?>
            <?php foreach($Order as $o) : ?>	
			<div class="col-lg-12 mb-2 border rounded">
				<ul class="mr-3">
					<a href="<?= base_url('Confirmation/index/' . $o->id) ?>">
						<li class="d-flex border-bottom mt-3">
							<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="d-inline-block mr-2 bi bi-bag" viewBox="0 0 16 16">
								<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
							</svg>
							<div class="d-inline-block">
								<h6 class="mb-0">Shop</h6>
								<p class="mt-0">
                                    <?php
                                    $input_datetime_str = $o->created ;

                                    $month_names = array(
                                        "",         // Placeholder for index 0
                                        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                                        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                                    );

                                    $input_datetime = new DateTime($input_datetime_str);

                                    $day = $input_datetime->format('d');
                                    $month = $month_names[(int)$input_datetime->format('m')];
                                    $year = $input_datetime->format('Y');

                                    $output_date_str = $day . " " . $month . " " . $year;

                                    echo $output_date_str;
                                    ?>

                                </p>
							</div>
							<div class="d-inline-block text-right ml-auto mr-0">
                                <?php if($this->uri->segment(3) == 'paid') : ?>
								<div class="alert alert-warning pt-2 pb-2 pl-2 pr-2" role="alert">
								    Already Paid
								</div>
                                <?php endif; ?>
                                <?php if($this->uri->segment(3) == 'processed') : ?>
								<div class="alert alert-info pt-2 pb-2 pl-2 pr-2" role="alert">
								    Processed
								</div>
                                <?php endif; ?>
                                <?php if($this->uri->segment(3) == 'sent') : ?>
								<div class="alert alert-info pt-2 pb-2 pl-2 pr-2" role="alert">
								    Sent
								</div>
                                <?php endif; ?>
                                <?php if($this->uri->segment(3) == 'done') : ?>
								<div class="alert alert-success pt-2 pb-2 pl-2 pr-2" role="alert">
								    Done
								</div>
                                <?php endif; ?>
							</div>
						</li>
					</a>
                    <?php $totalproduct = 0; foreach($Order_items as $ordi) : foreach($Product as $p) :?>
						<?php if($o->id == $ordi->order_id && $ordi->product_id == $p->id_product) : ?>
							<?php $totalproduct+= $ordi->quantity ;?>
						<?php endif ; ?>
					<?php endforeach; endforeach;?>
                    <?php $i=0; foreach($Order_items as $ordi) : foreach($Product as $p) :?>
					<?php if($o->id == $ordi->order_id && $ordi->product_id == $p->id_product && $i == 0)  : ?>
					<li class="d-flex mt-3">
						<div class="d-inline-block mr-3">
							<img class="img_product" src="<?= base_url('upload/product/' . $p->img) ?>" alt="Card image cap" width="150px" height="150px">
						</div>
						<div class="d-inline-block">
							<h5 class="product_name"><?= $p->name ?></h5>
							<p><?= $totalproduct ?> Total Items</p>
							<h5 class="product_price">
                            <script>
                                $(document).ready(function(){
                                    var total = (<?= $o->total ?>);
                                    var currency = 'Rp ' + total.toLocaleString("id-ID")
                                        $(".product_price").html(currency);
                                });
                            </script>
							</h5>
                            <?php if($this->uri->segment(3) == 'done') : ?>
							<a href="" class="btn_product btn btn-outline-dark">Riview</a>
							<a href="" class="btn_product btn_buy btn btn-outline-dark">Buy Again</a>
                            <?php endif ?>
							<?php if($this->uri->segment(3) == 'sent') : ?>
							<a href="<?= base_url('User/confirm/' . $o->id) ?>" class="btn_product btn btn-outline-dark" onclick="showConfirmation(event, '<?= base_url('User/confirm/' . $o->id) ?>')">Done</a>
							<?php endif ; ?>
						</div>
					</li>
                    <?php $i++ ?>
					<?php endif ;?>
					<?php endforeach; endforeach;?>
				</ul>
			</div>
            <?php endforeach ; ?>
        </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function showConfirmation(event, url) {
  event.preventDefault(); // Prevent the default link behavior
  
  // Show the SweetAlert confirmation dialog
  Swal.fire({
    icon: 'warning',
    title: 'Are You Sure?',
    text: 'This Order will be marked as done and you cant complain about it.',
    showCancelButton: true,
    confirmButtonText: 'Yes!',
    cancelButtonText: 'No',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      // If the user confirms, navigate to the provided URL
      window.location.href = url;
    }
  });
}
</script>