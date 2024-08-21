
	<script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-mDL9nMOV_jcpSruW"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="bg-holder overlay overlay-light" style="background-image:url(<?= base_url() ?>assets/img/gallery/header-bg.png);background-size:cover;">
		</div>
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
						<a href="category.html">Confirmation</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<style>
		@media screen and (max-width:767px)
		{
			.btn-outline-secondary {
				margin-bottom: 2rem;
			}
		}

		@media print {
			.banner-area,nav,header,footer,.not_print * {
				display: none;
			}
			.succed {
				text-align: center;
			}
		}

		button:disabled,button[disabled]
		{
			background-color: #212121;
		}
	</style>

	<!--================Order Details Area =================-->
	<form id="payment-form" method="post" action="<?=base_url('Checkout/finish/')?>">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
	  <input type="hidden" name="id" value="<?= $Order[0]->id ?>">
    </form>
	
	<section class="order_details section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-10 col-sm-6 succeed">
					<?php if($Order[0]->status == 1) : ?>
					<h3 class="title_confirmation">Thank you. Your order has been received</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 2) : ?>
					<h3 class="text-warning text-center title_confirmation">Please Finish Your Payment</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 3) : ?>
					<h3 class="text-center title_confirmation">Order Has been payed please wait for a moment for the seller to process your order</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 4) : ?>
					<h3 class="text-danger text-center title_confirmation">Problem with Payment Provider or FDS</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 5) : ?>
					<h3 class="text-danger text-center title_confirmation">Canceled by the merchant please wait for a refund</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 6) : ?>
					<h3 class="text-danger text-center title_confirmation">Expired please make another order</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 7) : ?>
					<h3 class="text-danger text-center title_confirmation">Failure Please Try Again</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 8) : ?>
					<h3 class="text-primary text-center title_confirmation">Already Refunded or will be refunded soon</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 9) : ?>
					<h3 class="text-center title_confirmation">Already Process By Merchant Wait for a delivery Receipt</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 10) : ?>
					<h3 class="text-center title_confirmation">Already sent By Merchant check the delivery receipt to tracking your order</h3>
					<?php endif ; ?>
					<?php if($Order[0]->status == 11) : ?>
					<h3 class="text-center title_confirmation">Order Complete</h3>
					<?php endif ; ?>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 mx-auto not_print">
					<button type="button" class="btn btn-outline-secondary" id="print"><i class="bi bi-printer"></i></button>
				</div>
			</div>
			<div class="row order_d_inner" id="content">
				<div class="col-lg-4 col-md-4 col-sm-12 mt-2">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<?php foreach($Order as $ord) : ?>
							<li><a href="#"><span>Order number</span> : <?= $ord->inv_number ?></a></li>
							<li><a href="#"><span>Date</span> : 
							<?php
                                    $inputDate = $ord->created;
                                    $inputFormat = "Y-m-d H:i:s";
                                    $outputFormat = "l j F Y H:i";

                                    // Parse the input date
                                    $dateTime = DateTime::createFromFormat($inputFormat, $inputDate);

                                    // Format the date in the desired output format
                                    $outputDate = $dateTime->format($outputFormat);

                                    // Get the timezone abbreviation manually
                                    $timezoneAbbreviation = "WIB";

                                    echo $outputDate . " " . $timezoneAbbreviation;
                                    ?>
							</a></li>
							<li><a href="#"><span>Total</span> : <script>
                                    money = <?= $ord->total ?>;
                                    document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                </script> </a></li>
							<li><a href="#"><span>Payment Status</span> : 
							<?php 
							if($ord->status == 1) { echo "Not Paid Yet" ;} 
							elseif($ord->status == 2) { echo "In Progress" ;} 
							elseif($ord->status == 3) { echo "Already Paid" ;}  
							elseif($ord->status == 4) { echo "FDS Problem" ;}
							elseif($ord->status == 5) { echo "Canceled" ;}
							elseif($ord->status == 6) { echo "Expired" ;}
							elseif($ord->status == 7) { echo "Failure" ;}
							elseif($ord->status == 8) { echo "Refund" ;}
							else { echo "Already Paid" ;}
							?>
							</a></li>
							<li style="text-transform: uppercase;"><a href="#"><span style="text-transform: none;">Payment method</span> : <?= $ord->payment ?></a></li>
							<?php if($ord->status >= 10) : ?>
							<li><a href="#"><span style="text-transform: none;">Delivery Receipt </span> : <?= $ord->receipt ?></a></li>
							<?php endif ; ?>
							<?php endforeach ; ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 mt-2">
					<div class="details_item">
						<h4>Billing Address</h4>
						<ul class="list">
							<li><a href="#"><span>Name</span> : Majestic</a></li>
							<li><a href="#"><span>Phone</span> : 098522665029</a></li>
							<li><a href="#"><span>Email</span> : majesticfashionid@gmail.com </a></li>
							<li><a href="#"><span>Address </span> : D.I Yogyakarta, Kota Yogyakarta, Golo indah Gg 1 No 14</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 mt-2">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<?php foreach($Customer as $c) : ?>
							<li><a href="#"><span>Name </span> : <?= $c->name ?></a></li>
							<li><a href="#"><span>Phone </span> : <?= $c->phone ?></a></li>
							<li><a href="#"><span>Email </span> : <?= $c->email ?></a></li>
							<li><a href="#"><span>Address </span> : <?= $c->address ?></a></li>
							<li><a href="#"><span>Expedition </span> : <?= $Order[0]->courier ?></a></li>
							<?php endforeach ; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table" id="content">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($Order_items as $ordi) :  foreach($Product as $p) :?>
							<?php if($p->id_product == $ordi->product_id) : ?>
							<tr>
								<td>
									<p><?= $p->name ?></p>
								</td>
								<td>
									<h5>x<?= $ordi->quantity ?></h5>
								</td>
								<td>
									<p><script>
                                    sub_total = <?= $ordi->sub_total ?>;
                                    document.write(`Rp ${sub_total.toLocaleString("id-ID")}`);
                                </script></p>
								</td>
							</tr>
							<?php endif ; endforeach ;  endforeach ;?>
							<?php foreach($Order as $ord) : ?>
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p><script>
                                    money = <?= $ord->sub_total ?>;
                                    document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                </script></p>
								</td>
							</tr>
							
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p><script>
                                    shipping = <?= $ord->shipping ?>;
                                    document.write(`Rp ${shipping.toLocaleString("id-ID")}`);
                                </script></p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p><script>
                                    total = <?= $ord->total ?>;
                                    document.write(`Rp ${total.toLocaleString("id-ID")}`);
                                </script></p>
								</td>
							</tr>
							<?php endforeach ; ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php if($Order[0]->status < 3 || $Order[0]->status == 7) : ?>
			<button id="pay-button" class="btn btn-primary mt-5" data-snap="<?= $Order[0]->snap_token ?>" data-id="<?= $Order[0]->id ?>" data-amount="<?= $Order[0]->total ?>">Pay!</button>
			<?php endif ; ?>
		</div>
	</section>
	<!--================End Order Details Area =================-->

	<script>
		const printBtn =  document.getElementById('print');

		printBtn.addEventListener('click' , function() {
			print();
		})
	</script>

<script type="text/javascript">
   $(document).ready(function(){
	var total = $("#pay-button").attr("data-amount");
	var id = $("#pay-button").attr("data-id");
	var token = $("#pay-button").attr("data-snap");
	if(token == "")
	{
		$.ajax({
			url: '<?= base_url() ?>Checkout/token/',
			cache: false,
			data: { total: total,id:id},

			success: function(data) {
			//location = data;

			console.log('token = '+data);

			var resultType = document.getElementById('result-type');
			var resultData = document.getElementById('result-data');

			function changeResult(type,data){
				$("#result-type").val(type);
				$("#result-data").val(JSON.stringify(data));
				//resultType.innerHTML = type;
				//resultData.innerHTML = JSON.stringify(data);
			}

			window.snap.pay(data, {
				
				onSuccess: function(result){
				changeResult('success', result);
				console.log(result.status_message);
				console.log(result);
				$("#payment-form").submit();
				},
				onPending: function(result){
				changeResult('pending', result);
				console.log(result.status_message);
				$("#payment-form").submit();
				},
				onError: function(result){
				changeResult('error', result);
				console.log(result.status_message);
				$("#payment-form").submit();
				}
			});
		}
		});
	}
	else
	{
		$('#pay-button').click(function (event) {
			window.snap.pay(token);
		})
	}
   })

</script>