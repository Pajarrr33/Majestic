<link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-5 mb-5">
                        <div class="row order_d_inner" id="content">
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                                <div class="details_item">
                                    <h4>Order Info</h4>
                                    <ul class="list">
                                        <?php foreach($Order as $ord) : ?>
                                        <li><a href="#"><span>Order number</span> : <?= $ord->inv_number ?></a></li>
                                        <li><a href="#"><span>Date</span> : <?= $ord->created ?></a></li>
                                        <li><a href="#"><span>Total</span> : <script>
                                                money = <?= $ord->total ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script> </a></li>
                                        <li><a href="#"><span>Payment Status</span> : 
                                        <?php 
                                        if($ord->status == 1) { echo "Not Paid Yet" ;} 
                                        elseif($ord->status == 2) { echo "In Progress" ;} 
                                        elseif($ord->status == 3) { echo "Already Paid" ;}  
                                        elseif($ord->status == 0) { echo "The purchase has been canceled due to problems with the provider or Payment Gateway" ;}
                                        elseif($ord->status == 4) { echo "The Purchase has been canceled By merchant" ;}
                                        ?>
                                        </a></li>
                                        <li style="text-transform: uppercase;"><a href="#"><span style="text-transform: none;">Payment method</span> : <?= $ord->payment ?></a></li>
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
                        <div class="modal-footer mb-5 mt-3">
                            <?php if($Order[0]->status == 3) : ?>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Process<?= $Order[0]->id ?>">Process This Order</button>
                            <?php endif ; ?>
                            <?php if($Order[0]->status == 9) : ?>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Shipping<?= $Order[0]->id ?>">Insert Delivery Receipt</button>
                            <?php endif ; ?>
                            <a href="<?= base_url('admin/Orders') ?>" class="btn btn-secondary mr-3">Return to previous page</a>
                        </div>
                    </div>
                </main> 
                
                
<!-- Modal -->
<?php foreach($Order as $o) : ?>
<div class="modal fade" id="Process<?= $o->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Processing Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <h5>Are You sure to process this order? </h5> 
            </div>
            <div class="col-lg-12 mb-2 border rounded mt-3">
				<ul class="mr-3">
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
						</li>
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
						</div>
					</li>
                    <?php $i++ ?>
					<?php endif ;?>
					<?php endforeach; endforeach;?>
				</ul>
			</div>
        </div>
      </div>
      <form action="<?= base_url('admin/Orders/processing/' . $o->id) ?>">
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="sumbit" class="btn btn-primary">Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach ?>

<!-- Modal -->
<?php foreach($Order as $o) : ?>
<div class="modal fade" id="Shipping<?= $o->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delivery Receipt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/Orders/shipping/' . $o->id) ?>" method="post">
            <div class="form-group">
                <div class="d-flex">
                    <label for="resi" class="d-inline-block mr-1">Receipt</label>
                    <?= form_error('resi', '<p class="text-danger d-inline-block">','<?p>'); ?>
                </div>
                <input type="text" class="form-control" name="resi" id="resi" placeholder="Enter the delivery receipt">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="sumbit" class="btn btn-primary">Sumbit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>