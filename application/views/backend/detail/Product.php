<?php foreach($Product as $p) : ?>
<link rel="stylesheet" href="<?= base_url('assets/css/') ?>main.css">
<link href="<?= base_url('assets') ?>/css/styles.css" rel="stylesheet" />
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-5">DETAIL DATA PRODUCT</h4>
                            <div class="product_image_area" style="padding-top: 2rem;">
                                <div class="container">
                                    <div class="row s_product_inner">
                                        <div class="col-lg-6">
                                            <div class="s_Product_carousel">
                                                <div class="single-prd-item">
                                                    <img width="450px" height="486px" class="img-fluid" src="<?= base_url('upload/product/') . $p->img ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 offset-lg-1">
                                            <div class="s_product_text">
                                                <h3><?= $p->name ?></h3>
                                                <h2>
                                                    <script>
                                                        const money = <?= $p->price ?>;
                                                        document.write(`Rp.${money.toLocaleString("id-ID")}`);
                                                    </script> 
                                                </h2>
                                                <ul class="list">
                                                    <li><a class="active" href="#"><span>Perfect For</span> : <?= $p->filter ?></a></li>
                                                    <li><a class="active" href="#"><span>Category</span> : <?= $p->category ?></a></li>
                                                    <li><a href="#"><span>Availibility</span> : <?= $p->stock ?></a></li>
                                                </ul>
                                                <p><?= $p->short_desc ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section class="product_description_area" style="margin-bottom:0; padding-bottom:0;">
                                <div class="container">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div>
                                            <?= $p->full_desc ?>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="modal-footer mb-5 mt-3">
                                    <a href="<?= base_url('admin/Product') ?>" class="btn btn-secondary mr-3">Return to previous page</a>
                            </div>
                    </div>
                </main>
<?php endforeach ; ?>