
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="bg-holder overlay overlay-light" style="background-image:url(assets/img/gallery/header-bg.png);background-size:cover;">
        </div>
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <script>
        function updateCartItem(obj,rowid){
            $.get("<?= base_url('Cart/updateItemQty/') ?>" , 
            {rowid:rowid, qty:obj.value}, 
                function(resp) {
                    if(resp== 'ok'){
                        location.reload()
                    }
                })
            }

    </script>

    <style>
        input[type=number]::-webkit-inner-spin-button {
            opacity: 1;
            padding: 1px 6px;
            width: 25px;
            height: 30px;
        }
    </style>

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <?php if(empty($cart)) : ?>
                            <tr>
                                <th colspan="4">
                                    <div class="alert alert-light " role="alert">
                                       Your Cart is empty! Please add product first
                                    </div>
                                </th>
                            </tr>
                            <?php endif ; ?>
                            <?php if(!empty($cart)) : ?>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                            <?php endif ; ?>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $price = 1;
                            $tambah = 1;
                            $kurang = 1;
                            $total = 1;
                            foreach($cart as $c) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" id="check" name="check"> 
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="<?= base_url('upload/product/') . $c['img'] ?>" alt="" width="152px" height="102px">
                                        </div>
                                        <div class="media-body">
                                            <a href="#">
                                            <p><?= $c['name'] ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>
                                    <script>
                                        money = <?= $c['price']  ?>;
                                        document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                    </script>
                                    </h5>
                                    <input type="hidden" name="price" value="<?= $c['price'] ?>">
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="number" name="qty" id="<?= $no ?>" maxlength="12" value="<?= $c['qty'] ?>" title="Quantity" onchange="updateCartItem(this, '<?= $c['rowid']; ?>')"
                                            class="input-text qty">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="<?= $total ?>">
                                    </h5>
                                </td>
                                <td>
                                    <?= $c['weight'] ?>
                                </td>
                                <td><a href="<?= base_url('Cart/delete_item/') . $c['rowid'] ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                            <!--- SCRIPT FOR LIVE CALCULATING -->
                            <script>         
                            $(document).ready(function(){
                                var totalcost= (<?= $c['price'] ?>) * (<?= $c['qty'] ?>)
                                var currency = 'Rp ' + totalcost.toLocaleString("id-ID")
                                    $("." + <?= $total ?>).html(currency);

                                $("#" + <?= $no ?>).on('keyup',function(){
                                    var qty = Math.max(1,$("#" + <?= $no ?>).val()) 
                                    $("#" + <?= $no ?>).val(qty)
                                })

                                $("#" + <?= $tambah ?> + ", #" + "<?= $kurang ?>").on('click',function(){
                                    var qty = Math.max(1,$("#" + <?= $no ?>).val()) 
                                    $("#" + <?= $no ?>).val(qty)
                                })
                                
                            });

                            

                           
                            </script>
                            <?php $no++ ; $tambah++; $kurang++; $total++;
                            endforeach ; ?>
                            <?php if(!empty($cart)) : ?>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="<?= base_url('Product') ?>">Continue Shopping</a>
                                        <a class="primary-btn" href="<?= base_url('Checkout') ?>">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endif ; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->