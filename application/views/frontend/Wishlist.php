    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
		<div class="bg-holder overlay overlay-light" style="background-image:url(<?= base_url() ?>assets/img/gallery/header-bg.png);background-size:cover;">
        </div>
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
                <div class="col-first">
                    <h1>Wishlist</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
                        <a href="category.html">Wishlist</a>
                    </nav>
                </div>
            </div>
        </div>
	</section>
	<!-- End Banner Area -->

    <style>
        .img_wishlist{
            width: 150px;
            height: 150px;
        }

        .price {
            margin-top: 0.5rem;
        }

        .cart_button {
            margin-top: 3rem;
        }

        .wishlist{
            background-color: white;
        }


        @media screen and (min-width:768px) and (max-width:1023px)
        {
            .img_wishlist{
            width: 120px;
            height: 120px;
            }

            h3{
                margin-left: 2rem;
            }

            .cart_button {
            margin-top: 1rem;
            margin-left: 2rem;
            }

            .price {
            margin-top: 0.5rem;
            margin-left: 2rem;
            }
        }

        @media screen and (max-width:767px)
        {
            .img_wishlist{
            width: 370px;
            height: 370px;
            }

            h3{
                margin-top: 1rem;
                margin-left: 0.25rem;
            }

            .price {
                margin-top: 0.5rem;
                margin-left: 0.25rem;
            }

            .cart_button {
                margin-top: 2rem;
                margin-left: 0.25rem;
            }
        }
    </style>

    <section>
        <div class="container" >
            <h1>Wishlist Item</h1>
            <div class="row mt-5 wishlist">
            <?php $no=1; foreach($User as $s) : ?>
                <?php foreach($Wishlist as $w) : ?>
                    <?php if($s->id == $w->id_customer) : ?>
                        <?php $no++ ?>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                        <img class="img_wishlist mt-5" src="<?= base_url('upload/product/') . $w->img ?>" alt="Product">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <h3 class="mt-5"><?= $w->name ?></h3>
                            <div class="price">
                                <p>
                                    <script>
                                        money = <?= $w->price ?>;
                                        document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                    </script>
                                </p>
                            </div>
                            <div class="cart_button mb-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="#" class="btn btn-outline-success"><i class="bi bi-cart"></i> Add To Cart</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach ; ?>
            <?php endforeach ; ?>
            <?php if($no == 1) : ?>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="alert alert-light " role="alert">
                        Your Cart is empty! Please add product first
                        <?php $no++ ?>
                    </div>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </section>