<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h4 class="mt-5">ORDERS</h4>
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="myTable" class="table mt-3">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Transaction No</th>
                            <th scope="col">Invoice Number</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ; foreach($Orders as $o) : if($o->status == 1 || $o->status == 6) { continue; }?>
                            <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $o->transaction_id ?></td>
                            <td><?= $o->inv_number ?></td>
                            <td> <?php
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
                                    ?></td>
                            <td>
                                <?php if($o->status == 2) : ?>
                                <div class="alert alert-secondary" role="alert">Not Paid Yet</div>
                                <?php endif ?>
                                <?php if($o->status == 3) : ?>
                                <div class="alert alert-warning" role="alert">Already Paid</div>
                                <?php endif ?>
                                <?php if($o->status == 4) : ?>
                                <div class="alert alert-danger" role="alert">Cancel By Payment Provider Or Midtrans FDS</div>
                                <?php endif ?>
                                <?php if($o->status == 5) : ?>
                                <div class="alert alert-danger" role="alert">Cancel By Merchant</div>
                                <?php endif ?>
                                <?php if($o->status == 8) : ?>
                                <div class="alert alert-info" role="alert">Refund</div>
                                <?php endif ?>
                                <?php if($o->status == 9) : ?>
                                <div class="alert alert-primary" role="alert">On Process</div>
                                <?php endif ?>
                                <?php if($o->status == 10) : ?>
                                <div class="alert alert-success" role="alert">Sent To Buyer</div>
                                <?php endif ?>
                                <?php if($o->status == 11) : ?>
                                <div class="alert alert-success" role="alert">Done</div>
                                <?php endif ?>
                            </td>
                            <td>
                                <a class="btn btn-outline-success" href="<?= base_url('admin/Orders/orders_detail/') . $o->id ?>"><i class="bi bi-search"></i></a>
                                <?php if($o->status == 3) : ?>
                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#Process<?= $o->id ?>"><i class="bi bi-check2"></i></button>
                                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#Shipping<?= $o->id ?>" disabled><i class="bi bi-truck"></i></button>
                                <?php endif ; ?>
                                <?php if($o->status == 9) : ?>
                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#Process<?= $o->id ?>" disabled><i class="bi bi-check2"></i></button>
                                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#Shipping<?= $o->id ?>"><i class="bi bi-truck"></i></button>
                                <?php endif ; ?>  
                            </td>
                            </tr>
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                    </div>
                </main> 
                

<!-- Modal -->
<?php foreach($Orders as $o) : ?>
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
<?php foreach($Orders as $o) : ?>
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