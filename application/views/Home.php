<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Majestic | Fashion Shop</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?= base_url() ?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/linearicons.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/nouislider.min.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/ion.rangeSlider.css" />
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/ion.rangeSlider.skinFlat.css" />
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/owlcarousel2-2.3.4/dist/assets/owl.carousel.min.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/owlcarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
            <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <script src="<?= base_url() ?>assets/js/vendor/jquery-2.2.4.min.js" type="text/javascript"></script>
            <script defer src="<?= base_url() ?>assets/plugin/owlcarousel2-2.3.4/dist/owl.carousel.min.js"></script>
            
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <header class="header_area sticky-header">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
          <div class="container"><a class="navbar-brand d-inline-flex" href="<?= base_url() ?>"><img class="d-inline-block" src="<?= base_url() ?>assets/img/gallery/logo.png" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">Majestic</span></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="<?= base_url("Product?Filter=women") ?>">Women</a></li>
					 	    <li class="nav-item px-2"><a class="nav-link fw-medium" href="<?= base_url("Product?Filter=men") ?>">Men</a></li>
						    <li class="nav-item px-2"><a class="nav-link fw-medium" href="<?= base_url("Product") ?>">Product</a></li>
					  	  <li class="nav-item px-2"><a class="nav-link fw-medium" href="<?= base_url('Contact') ?>">Outlet</a></li>
              </ul>
              <form class="d-flex">
                  <a class="text-1000" href="<?= base_url('Contact') ?>">
                  <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                  </svg>
                  </a>
                  <a class="text-1000" href="<?= base_url('Cart') ?>">
                  <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                  </svg>
                  </a>
                  <a class="text-1000" href="<?= base_url('User') ?>">
                  <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  </a>
                  <a class="text-1000" href="<?= base_url('Wishlist') ?>">
                  <svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                  </svg>
                  </a>
              </form>
              <form class="form-inline mt-2" method="post" action="<?= base_url("Product") ?>">
                <div class="input-group">
                  <input type="text" class="form-control" name="keyword" placeholder="Search Product" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Product'">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="bi bi-search"></i></button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main class="main" id="top">
      <section class="py-11 bg-light-gradient border-bottom border-white border-5">
        <div class="bg-holder overlay overlay-light" style="background-image:url(<?= base_url() ?>assets/img/gallery/header-bg.png);background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-12 mb-10">
              <div class="d-flex align-items-center flex-column">
                <h1 class="fw-normal"> With an outstanding style, only for you</h1>
                <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Exclusively designed for you</h1>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="header" style="margin-top: -23rem !important;">

        <div class="container">
          <div class="row g-0">
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"> <img class="img-fluid" src="<?= base_url() ?>assets/img/gallery/her.png" width="790" alt="..." />
                <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-lg btn-light" href="#!">For Her</a></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"> <img class="img-fluid" src="<?= base_url() ?>assets/img/gallery/him.png" width="790" alt="..." />
                <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-lg btn-light" href="#!">For Him </a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <style>
        .prd-bottom {
        position: relative;
        background-color: #F5F5F5;
        }
        .prd-bottom .social-info {
          position: relative;
          display: inline-block;
          width: 35px;
          -webkit-transition: all 0.3s ease 0s;
          -moz-transition: all 0.3s ease 0s;
          -o-transition: all 0.3s ease 0s;
          transition: all 0.3s ease 0s;
          overflow: hidden; }
          .prd-bottom .social-info span {
            position: relative;
            height: 30px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            background: #828bb2;
            border-radius: 50%;
            display: inline-block;
            color: #fff;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            z-index: 1; }
          .prd-bottom .social-info span:after {
              position: absolute;
              left: 0;
              top: 0;
              height: 100%;
              width: 100%;
              content: "";
              border-radius: 50%;
              opacity: 0;
              visibility: hidden;
              z-index: -1; }
          .prd-bottom .social-info .hover-text {
            position: absolute;
            left: 0;
            top: 3px;
            width: 100px;
            left: -40px;
            text-transform: uppercase;
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-size: 12px;
            color: #222222;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            opacity: 0;
            visibility: hidden; }
          .prd-bottom .social-info:hover {
            width: 115px; }
          .prd-bottom .social-info:hover span:after {
              opacity: 1;
              visibility: visible; }
          .prd-bottom .social-info:hover .hover-text {
              opacity: 1;
              visibility: visible;
              left: 40px; }
      </style>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Best Deals</h5>
            </div>
            <div class="col-12">
                    <div class="row owl-carousel  align-items-center g-2">
                      <?php  
                      foreach($Product as $p) : 
                      if($p->promo != null ) : ?>
                      <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0"> 
                        <div class="card card-span text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" src="<?= base_url('upload/product/') . $p->img ?>" width="750px" height="350px"  alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                            <div class="fw-bold">
                              <span class="text-600 me-2 text-decoration-line-through">
                                <script>
                                    money = <?= $p->price ?>;
                                    document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                </script>
                              </span>
                              <span class="text-primary">
                                <script>
                                    promo = <?= $p->promo ?>;
                                    document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                </script>
                              </span>
                            </div>
                          </div>
                          </a>
                          <div class="prd-bottom">
                          <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                            <span class="bi bi-cart"></span>
                            <p class="hover-text">add to bag</p>
                          </a>
                          <a href="#" class="social-info">
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
                      <?php endif;
                      endforeach; ?>
                    </div>
            </div>
            <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row h-100 g-0">
            <div class="col-md-6">
              <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                <h4 class="text-800">Exclusive collection 2021</h4>
                <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Be exclusive</h1>
                <p class="mb-5 fs-1">The best everyday option in a Super Saver range within a reasonable price. It is our responsibility to keep you 100 percent stylish. Be smart &amp; , trendy with us.</p>
                <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="#" role="button">Explore</a></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/outfit.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Outfit
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row h-100 g-2 py-1">
            <div class="col-md-4">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/vanity-bag.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Vanity Bags
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/hat.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">Hats
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/high-heels.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="#!" role="button">High Heels
                      <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fs-3 fs-lg-5 lh-sm mb-3">Checkout New Arrivals</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselNewArrivals" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/full-body.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Flat Hill Slingback</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/formal-coat.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Ocean Blue Ring</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/ocean-blue.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Brown Leathered Wallet</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/sweater.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Silverside Wristwatch</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/full-body.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Flat Hill Slingback</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/formal-coat.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Ocean Blue Ring</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/ocean-blue.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Brown Leathered Wallet</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/sweater.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Silverside Wristwatch</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/full-body.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Flat Hill Slingback</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/formal-coat.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Ocean Blue Ring</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/ocean-blue.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Brown Leathered Wallet</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/sweater.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Silverside Wristwatch</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/full-body.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Flat Hill Slingback</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/formal-coat.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Ocean Blue Ring</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/ocean-blue.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Brown Leathered Wallet</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/sweater.png" alt="..." />
                          <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                            <h6 class="text-primary">$175</h6>
                            <p class="text-400 fs-1">Jumper set for Women</p>
                            <h4 class="text-light">Silverside Wristwatch</h4>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselNewArrivals" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselNewArrivals" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="categoryWomen">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Shop By Category</h5>
            </div>
            <div class="col-12">
              <nav>
                <div class="nav nav-tabs majestic-tabs mb-4 justify-content-center" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-women-tab" data-bs-toggle="tab" data-bs-target="#nav-women" type="button" role="tab" aria-controls="nav-women" aria-selected="true">For Women</button>
                  <button class="nav-link" id="men" id="nav-men-tab" data-bs-toggle="tab" data-bs-target="#nav-men" type="button" role="tab" aria-controls="nav-men" aria-selected="false">For Men</button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
                    <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab-women" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-wtshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-wtshirt" type="button" role="tab" aria-controls="pills-wtshirt" aria-selected="true">T-Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-dresses-tab" data-bs-toggle="pill" data-bs-target="#pills-dresses" type="button" role="tab" aria-controls="pills-dresses" aria-selected="false">Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wshoes-tab" data-bs-toggle="pill" data-bs-target="#pills-wshoes" type="button" role="tab" aria-controls="pills-wshoes" aria-selected="false">Shoes</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wwatch-tab" data-bs-toggle="pill" data-bs-target="#pills-wwatch" type="button" role="tab" aria-controls="pills-wwatch" aria-selected="false">Watch </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wsunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-wsunglasses" type="button" role="tab" aria-controls="pills-wsunglasses" aria-selected="false">Sunglasses </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wbagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-wbagpacks" type="button" role="tab" aria-controls="pills-wbagpacks" aria-selected="false">Bagpacks </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContentWomen">
                      <div class="tab-pane fade" id="pills-dresses" role="tabpanel" aria-labelledby="pills-dresses-tab">
                        <div class="carousel slide" id="carouselCategoryDresses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                                <?php foreach($Product as $p) : 
                                if($p->filter == "Women") :
                                  if($p->category == "Shirt" ) :
                                    if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                  <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                    <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                      <div class="card-img-overlay ps-0"> </div>
                                      <div class="card-body ps-0 bg-200">
                                        <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                        <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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
                                <?php 
                                  endif ;
                                endif ;
                                endforeach ; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                        <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                                <?php foreach($Product as $p) : 
                                if($p->filter == "Women") :
                                  if($p->category == "T Shirt" ) :
                                    if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                        <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                  endif ;
                                endif ;
                                endforeach ; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wshoes" role="tabpanel" aria-labelledby="pills-wshoes-tab">
                        <div class="carousel slide" id="carouselCategoryWShoes" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                                <?php foreach($Product as $p) : 
                                if($p->filter == "Women") :
                                if($p->category == "Shoes" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                        <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>                                    
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                              
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wwatch" role="tabpanel" aria-labelledby="pills-wwatch-tab">
                        <div class="carousel slide" id="carouselCategoryWwatch" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                              <?php foreach($Product as $p) : 
                                if($p->filter == "Women") :
                                if($p->category == "Watch" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                      <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wsunglasses" role="tabpanel" aria-labelledby="pills-wsunglasses-tab">
                        <div class="carousel slide" id="carouselCategoryWSunglasses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                                <?php foreach($Product as $p) : 
                                if($p->filter == "Women") :
                                if($p->category == "Sunglasses" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                      <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-wbagpacks" role="tabpanel" aria-labelledby="pills-wbagpacks-tab">
                        <div class="carousel slide" id="carouselCategoryWBagpacks" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                                <?php foreach($Product as $p) : 
                                if($p->filter == "Women") :
                                if($p->category == "Bagpacks" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                      <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-men" role="tabpanel" aria-labelledby="nav-men-tab">
                    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab-men" role="tablist">
                      <li class="nav-item"  role="presentation">
                        <button class="nav-link active" id="pills-tshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-tshirt" type="button" role="tab" aria-controls="pills-tshirt" aria-selected="true">T-Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shirt-tab" data-bs-toggle="pill" data-bs-target="#pills-shirt" type="button" role="tab" aria-controls="pills-shirt" aria-selected="false">Shirt</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shoes-tab" data-bs-toggle="pill" data-bs-target="#pills-shoes" type="button" role="tab" aria-controls="pills-shoes" aria-selected="false">Shoes</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-watch-tab" data-bs-toggle="pill" data-bs-target="#pills-watch" type="button" role="tab" aria-controls="pills-watch" aria-selected="false">Watch </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-sunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-sunglasses" type="button" role="tab" aria-controls="pills-sunglasses" aria-selected="false">Sunglasses </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-bagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-bagpacks" type="button" role="tab" aria-controls="pills-bagpacks" aria-selected="false">Bagpacks </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContentMen">
                      <div class="tab-pane fade show active" id="pills-tshirt" role="tabpanel" aria-labelledby="pills-tshirt-tab">
                        <div class="carousel slide" id="carouselCategoryTshirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                                <?php foreach($Product as $p) : 
                                if($p->filter == "Men") :
                                if($p->category == "T Shirt" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                      <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-shirt" role="tabpanel" aria-labelledby="pills-shirt-tab">
                        <div class="carousel slide" id="carouselCategoryShirt" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                                <?php foreach($Product as $p) : 
                                if($p->filter == "Men") :
                                if($p->category == "Shirt" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                      <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-shoes" role="tabpanel" aria-labelledby="pills-shoes-tab">
                        <div class="carousel slide" id="carouselCategoryShoes" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                              <?php foreach($Product as $p) : 
                                if($p->filter == "Men") :
                                if($p->category == "Shoes" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                      <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-watch" role="tabpanel" aria-labelledby="pills-watch-tab">
                        <div class="carousel slide" id="carouselCategoryWatch" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                                <?php foreach($Product as $p) : 
                                if($p->filter == "Men") :
                                if($p->category == "Watch" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                      <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-sunglasses" role="tabpanel" aria-labelledby="pills-sunglasses-tab">
                        <div class="carousel slide" id="carouselCategorySunglasses" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                                <?php foreach($Product as $p) : 
                                if($p->filter == "Men") :
                                if($p->category == "Sunglasses" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                      <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                      <div class="tab-pane fade" id="pills-bagpacks" role="tabpanel" aria-labelledby="pills-bagpacks-tab">
                        <div class="carousel slide" id="carouselCategoryBagpacks" data-bs-touch="false" data-bs-interval="false">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                              <div class="row owl-carousel h-100 align-items-center g-2">
                              <?php foreach($Product as $p) : 
                                if($p->filter == "Men") :
                                if($p->category == "Bagpacks" ) :
                                if($p->promo != null) { $text = 'text-decoration-line-through' ;} else { $text = 'null' ;}
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-3 mb-md-0 h-100">
                                  <div class="card card-span h-100 text-white"><a href="<?= base_url('Product/single_product/') . $p->id_product ?>"><img class="" width="600px" height="250px" src="<?= base_url('upload/product/') . $p->img ?>" alt="..." />
                                    <div class="card-img-overlay ps-0"> </div>
                                    <div class="card-body ps-0 bg-200">
                                      <h5 class="fw-bold text-1000 text-truncate"><?= $p->name ?></h5>
                                      <div class="fw-bold">
                                          <span class="text-600 me-2 <?= $text ?>">
                                            <script>
                                                money = <?= $p->price ?>;
                                                document.write(`Rp ${money.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                          <span class="text-primary">
                                            <script>
                                                promo = <?= $p->promo ?>;
                                                document.write(`Rp ${promo.toLocaleString("id-ID")}`);
                                            </script>
                                          </span>
                                        </div>
                                      </div>
                                      </a>
                                      <div class="prd-bottom">
                                        <a href="<?= base_url('Cart/add_to_cart/') . $p->id_product ?>" class="social-info">
                                          <span class="bi bi-cart"></span>
                                          <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info">
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

                                <?php 
                                endif ;
                                endif ;
                                endforeach ; ?>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-dark" href="#!">View All </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="collection">

        <div class="container">
          <div class="row h-100 gx-2">
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/urban.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="p-5 p-md-2 p-xl-5">
                    <h1 class="fs-md-4 fs-lg-7 text-light">Urban Stories </h1>
                    <h5 class="fs-2 text-light">collection</h5>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/country.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient">
                  <div class="p-5 p-md-2 p-xl-5 d-flex flex-column flex-end-center align-items-baseline h-100">
                    <h1 class="fs-md-4 fs-lg-7 text-light">Urban Stories </h1>
                    <h5 class="fs-2 text-light">collection</h5>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section>
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Best Sellers</h5>
            </div>
            <div class="col-12">
              <div class="carousel slide" id="carouselBestSellers" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/handbag.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Marie Claire Handbag</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$399</span><span class="text-danger">$365</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/earrings.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red Gem Earrings</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$489</span><span class="text-danger">$466</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/lathered-wristwatch.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Black Leathered Wristwatch</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$799</span><span class="text-danger">$745</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/tie.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red-White Stripped Tie</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$299</span><span class="text-danger">$243</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/handbag.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Marie Claire Handbag</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$399</span><span class="text-danger">$365</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/earrings.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red Gem Earrings</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$489</span><span class="text-danger">$466</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/lathered-wristwatch.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Black Leathered Wristwatch</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$799</span><span class="text-danger">$745</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/tie.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red-White Stripped Tie</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$299</span><span class="text-danger">$243</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/handbag.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Marie Claire Handbag</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$399</span><span class="text-danger">$365</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/earrings.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red Gem Earrings</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$489</span><span class="text-danger">$466</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/lathered-wristwatch.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Black Leathered Wristwatch</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$799</span><span class="text-danger">$745</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/tie.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red-White Stripped Tie</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$299</span><span class="text-danger">$243</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/handbag.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Marie Claire Handbag</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$399</span><span class="text-danger">$365</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/earrings.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red Gem Earrings</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$489</span><span class="text-danger">$466</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/lathered-wristwatch.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Black Leathered Wristwatch</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$799</span><span class="text-danger">$745</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="<?= base_url() ?>assets/img/gallery/tie.png" alt="..." />
                          <div class="card-img-overlay ps-0"> </div>
                          <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">Red-White Stripped Tie</h5>
                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$299</span><span class="text-danger">$243</span></div>
                          </div><a class="stretched-link" href="#"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBestSellers" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBestSellers" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="row h-100 g-0">
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/summer.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient rounded-0">
                  <div class="p-5 p-md-2 p-xl-5 d-flex flex-column flex-end-center align-items-baseline h-100">
                    <h1 class="fs-md-4 fs-lg-7 text-light">Summer of '21 </h1>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-md-6 h-100">
              <div class="row h-100 g-0">
                <div class="col-md-6 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/sunglasses.png" alt="..." />
                    <div class="card-img-overlay bg-dark-gradient rounded-0">
                      <div class="p-5 p-xl-5 p-md-0">
                        <h3 class="text-light">Sunglasses</h3>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/footwear.png" alt="..." />
                    <div class="card-img-overlay bg-dark-gradient rounded-0">
                      <div class="p-5 p-xl-5 p-md-0">
                        <h3 class="text-light">Footwear</h3>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/hat-black-border.png" alt="..." />
                    <div class="card-img-overlay bg-dark-gradient rounded-0">
                      <div class="p-5 p-xl-5 p-md-0">
                        <h3 class="text-light">Hat</h3>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/watches.png" alt="..." />
                    <div class="card-img-overlay bg-dark-gradient rounded-0">
                      <div class="p-5 p-xl-5 p-md-0">
                        <h3 class="text-light">Watches</h3>
                      </div>
                    </div><a class="stretched-link" href="#!"> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row h-100 g-0">
            <div class="col-md-6">
              <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Gentle Formal Looks </h1>
                <p class="mb-5 fs-1">We provide the top formal apparel package to make your job look confident and comfortable. Stay connect.</p>
                <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="#!" role="button">Explore Collection</a></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="<?= base_url() ?>assets/img/gallery/sharp-dress.png" alt="..." /><a class="stretched-link" href="#!"></a></div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 pb-8">

        <div class="container-fluid container-lg">
          <div class="row h-100 g-2 justify-content-center">
            <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
              <div class="card card-span text-white h-100"><img class="img-card h-100" src="<?= base_url() ?>assets/img/gallery/shoes-blog-1.png" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                  <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img src="<?= base_url() ?>assets/img/gallery/author-1.png" width="60" alt="..." />
                    <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i data-feather="eye"> </i><span class="text-900 ms-2">35</span></span><span class="text-900 text-center"><i data-feather="heart"> </i><span class="text-900 ms-2">23</span></span><span class="text-900 text-center"><i data-feather="corner-up-right"> </i><span class="text-900 ms-2">14</span></span></div>
                  </div>
                  <h6 class="text-900 mt-3">Kelly Hudson . <span class="fw-normal">Fashion actiKelly Hudson . </span></h6>
                  <h3 class="fw-bold text-1000 mt-5 text-truncate">How important are shoes in your style?</h3>
                  <p class="text-900 mt-3">Is it possible to assess a person just on the basis of their footwear? Obviously, nobody should criticize, but certainly, shoes say a lot about someone. It matters for the outsiders that we meet every day...</p><a class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!" role="button">Read more
                    <svg class="bi bi-arrow-right-short hover-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
              <div class="card card-span text-white h-100"><img class="img-card h-100" src="<?= base_url() ?>assets/img/gallery/fashion-blog-2.png" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                  <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img src="<?= base_url() ?>assets/img/gallery/author-2.png" width="60" alt="..." />
                    <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i data-feather="eye"> </i><span class="text-900 ms-2">35</span></span><span class="text-900 text-center"><i data-feather="heart"> </i><span class="text-900 ms-2">23</span></span><span class="text-900 text-center"><i data-feather="corner-up-right"> </i><span class="text-900 ms-2">14</span></span></div>
                  </div>
                  <h6 class="text-900 mt-3">Rotondwa Johnny . <span class="fw-normal">Fashion activist </span></h6>
                  <h3 class="fw-bold text-1000 mt-5 text-truncate">Fashion trend forecast for Summer 2021</h3>
                  <p class="text-900 mt-3">While the fashion industry has had a calm year, this season has seen some beautiful pieces. Over the previous several weeks, commanding coats, and elegant face masks have ruled Fashion Weeks...</p><a class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!" role="button">Read more
                    <svg class="bi bi-arrow-right-short hover-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
              <div class="card card-span text-white h-100"><img class="img-card h-100" src="<?= base_url() ?>assets/img/gallery/spring-dress-blog-3.png" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                  <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img src="<?= base_url() ?>assets/img/gallery/author-3.png" width="60" alt="..." />
                    <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i data-feather="eye"> </i><span class="text-900 ms-2">35</span></span><span class="text-900 text-center"><i data-feather="heart"> </i><span class="text-900 ms-2">23</span></span><span class="text-900 text-center"><i data-feather="corner-up-right"> </i><span class="text-900 ms-2">14</span></span></div>
                  </div>
                  <h6 class="text-900 mt-3">Martin . <span class="fw-normal">Fashion activist </span></h6>
                  <h3 class="fw-bold text-1000 mt-5 text-truncate">Spring exclusive collection for Men &amp; Women</h3>
                  <p class="text-900 mt-3">Explore the first real-time photographic fashion magazine NOWFASHION to broadcast exclusive live fashion shows. Some of the most beautiful spring collection i want to share. See the....</p><a class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!" role="button">Read more
                    <svg class="bi bi-arrow-right-short hover-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-11" id="outlet">
        <div class="bg-holder overlay overlay-0" style="background-image:url(<?= base_url() ?>assets/img/gallery/cta.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="carousel slide carousel-fade" id="carouseCta" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-12">
                        <div class="text-light text-center py-2">
                          <h5 class="display-4 fw-normal text-400 fw-normal mb-4">visit our Outlets in</h5>
                          <h1 class="display-1 text-white fw-normal mb-8">London</h1><a class="btn btn-lg text-light fs-1" href="#!" role="button">See Addresses
                            <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-12">
                        <div class="text-light text-center py-2">
                          <h5 class="display-4 fw-normal text-400 fw-normal mb-4">visit our Outlets in</h5>
                          <h1 class="display-1 text-white fw-normal mb-8">Bristol</h1><a class="btn btn-lg text-light fs-1" href="#!" role="button">See Addresses
                            <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center g-2">
                      <div class="col-12">
                        <div class="text-light text-center py-2">
                          <h5 class="display-4 fw-normal text-400 fw-normal mb-4">visit our Outlets in</h5>
                          <h1 class="display-1 text-white fw-normal mb-8">Birmingham</h1><a class="btn btn-lg text-light fs-1" href="#!" role="button">See Addresses
                            <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouseCta" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouseCta" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <footer class="py-0 pt-7 bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-6 col-lg-2 mb-3">
                <h5 class="lh-lg fw-bold text-white">Company Info</h5>
                <ul class="list-unstyled mb-md-4 mb-lg-0">
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">About Us</a></li>
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">Affiliate</a></li>
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">Fashion Blogger</a></li>
                </ul>
              </div>
              <div class="col-6 col-lg-2 mb-3">
                <h5 class="lh-lg fw-bold text-white">Help &amp; Support</h5>
                <ul class="list-unstyled mb-md-4 mb-lg-0">
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">Shipping Info</a></li>
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">Refunds</a></li>
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">How to Order</a></li>
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">How to Track</a></li>
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">Size Guides</a></li>
                </ul>
              </div>
              <div class="col-6 col-lg-2 mb-3">
                <h5 class="lh-lg fw-bold text-white">Customer Care</h5>
                <ul class="list-unstyled mb-md-4 mb-lg-0">
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">Contact Us</a></li>
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">Payment Methods</a></li>
                  <li class="lh-lg"><a class="text-white text-decoration-none" href="#!">Bonus Point</a></li>
                </ul>
              </div>
              <div class="col-sm-12 col-lg-auto ms-auto">
                <h5 class="lh-lg fw-bold text-white">Signup For The Latest News</h5>
                <div class="row input-group-icon mb-5">
                  <div class="col-12">
                    <input class="form-control input-box" type="email" placeholder="Enter Email" aria-label="email" />
                    <svg class="bi bi-arrow-right-short input-box-icon" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="#424242" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                    </svg>
                  </div>
                </div>
                <p class="text-white">
                  <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                  </svg><span class="text-white">+3930219390</span>
                </p>
                <p class="text-white">
                  <svg class="feather feather-mail me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg><span class="text-white">something@gmail.com</span>
                </p>
              </div>
            </div>
            <div class="border-bottom border-3"></div>
            <div class="row flex-center my-3">
              <div class="col-md-6 order-1 order-md-0">
                <p class="my-2 text-white text-center text-md-start"> Made with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#EB6453" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="text-white" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
                </p>
              </div>
              <div class="col-md-6">
                <div class="text-center text-md-end"><a href="#!"><span class="me-4 text-white bi bi-facebook"></span></a><a href="#!"> <span class="me-4 text-white bi bi-instagram"></span></a><a href="#!"> <span class="me-4 text-white bi bi-youtube"></span></a><a href="#!"> <span class="me-4 text-white bi bi-twitter"></span></a></div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
  
        </footer>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script>
        $(document).ready(function(){
          var owl = $(".owl-carousel");
          owl.owlCarousel({
                autoWidth: false,
                autoHeight: false,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                }
          });
        });
    </script>
    <script src="<?= base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.sticky.js"></script>
    <script src="<?= base_url() ?>assets/js/nouislider.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?= base_url() ?>assets/js/gmaps.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="<?= base_url() ?>assets/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>