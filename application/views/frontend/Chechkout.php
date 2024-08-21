
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="bg-holder overlay overlay-light" style="background-image:url(<?= base_url() ?>assets/img/gallery/header-bg.png);background-size:cover;">
        </div>
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
                        <a href="category.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    
    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <?php if(!$this->session->userdata('email')) : ?>
            <div class="returning_customer">
                <div class="check_title">
                    <h2>Returning Customer? <a href="<?= base_url('User') ?>">Click here to login</a></h2>
                </div>
                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                    customer, please proceed to the Billing & Shipping section.</p>
            </div>
            <?php endif ; ?>
            <div class="cupon_area">
                <div class="check_title">
                    <h2>Have a coupon? <a href="#">Click here to enter your code</a></h2>
                </div>
                <input type="text" placeholder="Enter coupon code">
                <a class="tp_btn" href="#">Apply Coupon</a>
            </div>
            <?php if(!empty($error_msg)){ ?>
            <div class="col-md-12">
                <div class="alert alert-danger"><?php echo $error_msg; ?></div>
            </div>
            <?php } ?>

            <?php if($Adress != null) : ?>
                <div class="row">
                <?php foreach($Adress as $a) : ?>
					<div class="col-lg-6 col-md-6 col-sm-12 mt-3 mb-3 user-adress-<?= $a->id ?>">
						<div class="border rounded border-light bg-white">
						    <ul class="mr-3">
                                <li class="d-flex border-bottom mt-3 pb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="d-inline-block bi bi-house" viewBox="0 0 16 16">
                                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                    </svg>
                                    <h5 class="d-flex align-items-center ml-3 d-inline-block"><?= $a->address_name ?></h5>
                                    <div class="ml-auto check_list" style="display: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-check2" viewBox="0 0 16 16">
                                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </div>
                                </li>
                                <li class="mt-3">
                                    <h5><?= $a->name ?></h5>
                                    <p class="border-bottom pb-2"><?= $a->phone ?> / <?= $a->email ?></p>
                                    <p><?= $a->province ?>, <?= $a->distrik ?>, <?= $a->street ?></p>
                                </li>
							</ul>
						</div>
					</div>
                    <script>
                     $(document).ready(function(){
                        $(".user-adress-<?= $a->id ?>").click(function(){
                            $(".user-adress-<?= $a->id ?>").off("click");
                            $(".user-adress-<?= $a->id ?> .border").removeClass("border-light");
                            $(".user-adress-<?= $a->id ?>").addClass("user-adress-active-<?= $a->id ?>");
                            $(".user-adress-<?= $a->id ?> .border").addClass("border-success");
                            $(".user-adress-<?= $a->id ?> .check_list").show();
                            $(".user-adress-<?= $a->id ?> .check_list").css("display", "inline-block");
                            $(".user-adress-<?= $a->id ?>").removeClass("user-adress-<?= $a->id ?>");
                        })
                        $(document).on("click",".user-adress-active-<?= $a->id ?>",function(){
                            alert("kontol");
                            $(".user-adress-active-<?= $a->id ?> .border").removeClass("border-success");
                            $(".user-adress-active-<?= $a->id ?> .border").addClass("border-light");
                            $(".user-adress-active-<?= $a->id ?> .check_list").css("display", "none");
                            $(".user-adress-active-<?= $a->id ?>").addClass("user-adress-<?= $a->id ?>")
                            $(".user-adress-<?= $a->id ?>").on("click");
                            $(".user-adress-active-<?= $a->id ?>").removeClass("user-adress-active-<?= $a->id ?>");
                        })
                     })
                    </script>
				<?php endforeach ; ?>
                </div>    
            <?php endif; ?>
            
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-7">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" method="post">
                            
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name" placeholder="Full Name">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="number" class="form-control" id="number" name="number" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 form-group example-select province">
                               <select class="form-control" name="province" id="exampleFormControlSelect1">
                                    <option value="">Select Province</option>
                                    <?php foreach($province->rajaongkir->results as $p) :?>
                                    <option value="<?= $p->province_id ?>" id="province"><?= $p->province ?></option>
                                    <?php endforeach ; ?>
                               </select>
                            </div>

                            <input type="hidden" name="input_province" value="">
                            
                            <div class="col-md-6 form-group example-select city">
                               <select class="form-control" name="distrik" >
                                    <option value="" id="city">Select Distrik</option>
                               </select>
                            </div>

                            <input type="hidden" name="input_distrik" value="">

                            <div class="col-md-6 form-group example-select courier">
                               <select class="form-control" name="courier" >
                                    <option value="" id="courier">Select Courier</option>
                                    <option value="jne" id="courier">JNE</option>
                                    <option value="pos" id="courier">POS</option>
                                    <option value="tiki" id="courier">TIKI</option>
                               </select>
                            </div>

                            <div class="col-md-6 form-group example-select courier-option">
                               <select class="form-control" name="courier-option" >
                                    <option value="" id="courier-option">Select Courier Option</option>
                               </select>
                            </div>

                            <input type="hidden" name="input_courier">
                            
                            <input type="hidden" name="shipping" value="">

                            <div class="col-md-12 form-group p_star">
                               <input type="text" class="form-control" name="street" id="street" placeholder="Enter Your Street">
                            </div>

                            <button type="sumbit" name="placeorder" class="primary-btn .place_order">Place Order</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                
                                <?php $total=1; $totalweight = 0; foreach($cartItems as $c) : ?>
                                <li><a href="#"><?= $c['name'] ?> <span class="middle">x <?= $c['qty'] ?></span> <span class="last <?= $total ?>" ><?= $c['total'] ?></span></a></li>
                                <script>
                                    $(document).ready(function(){
                                        var totalcost= (<?= $c['price'] ?>) * (<?= $c['qty'] ?>)
                                        var currency = 'Rp ' + totalcost.toLocaleString("id-ID")
                                            $("." + <?= $total ?>).html(currency);
                                    });
                                </script>
                                <?php $totalweight+= $c['weight'] ;?>
                                <?php $total++; endforeach ; ?>
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Subtotal
                                        <span class="subtotal">
                                            <?= $this->cart->total() ?>
                                            <script>
                                                $(document).ready(function(){
                                                    var subtotal= (<?= $this->cart->total() ?>)
                                                    var currency = 'Rp ' + subtotal.toLocaleString("id-ID")
                                                        $(".subtotal").html(currency);
                                                });
                                            </script>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Shipping 
                                        <span class="shipping"> - </span>
                                    </a>
                                </li>
                                <li><a href="#">Total <span class="total"> - </span></a></li>
                            </ul>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $("select[name=province]").on("change" , function(){
                var id_province = $("select[name=province]").find(":selected").val();
                var province = $("select[name=province]").find(":selected").text();
                $("input[name=input_province]").val(province)
                $.ajax({
                    type:'POST',
                    url: '<?= base_url("Rajaongkir/distrik"); ?>',
                    data: { 'id_province' : id_province},
                    success: function(response)
                    {
                        $("select[name=distrik]").append(response)
                    },
                    error: function()
                    {

                    }
                })
            })

            $("select[name=distrik]").on("change" , function(){
                var distrik = $("select[name=distrik]").find(":selected").text();
                $("input[name=input_distrik]").val(distrik)
            })

            $("select[name=courier]").on("change" , function(){
                var id_distrik = $("select[name=distrik]").find(":selected").val();
                var courier = $("select[name=courier]").find(":selected").val();
                var weight = <?= $totalweight ?>;
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url("Rajaongkir/cost"); ?>',
                    data: { 'id_distrik' : id_distrik , 'courier' : courier , 'weight' : weight},
                    success: function(response)
                    {
                        $("select[name=courier-option]").append(response)
                    },
                    error: function(request, status, error)
                    {
                        alert(request.responseText)
                    }
                })
            })

            $("select[name=courier-option]").on("change" , function(){
                var courier = $("select[name=courier]").find(":selected").text();
                var courier_choice =  $("select[name=courier-option]").find(":selected").text();
                var expedision = courier + " " + courier_choice
                var courier_option = $("select[name=courier-option]").find(":selected").val();
                var subtotal= (<?= $this->cart->total() ?>)
                var convert = Number(courier_option)
                var calculation = subtotal + convert
                var total = 'Rp ' + calculation.toLocaleString("id-ID")
                var cost = 'Rp ' + convert.toLocaleString("id-ID")
                $(".shipping").html(cost);
                $(".total").html(total)
                $("input[name=shipping]").val(convert)
                $("input[name=input_courier]").val(expedision)
            })

        })
    </script>
    <!--================End Checkout Area =================-->
