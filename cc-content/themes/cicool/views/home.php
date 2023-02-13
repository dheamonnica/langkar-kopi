<?= get_header(); ?>

<body id="page-top">
   <script src="<?= theme_asset(); ?>/store/monetization.js" type="text/javascript"></script>
   <script>
      (function () {
         if (typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
         }
      })();
   </script>
   <script>
      (function () {
         if (typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
         }
      })();
   </script>
   <script>
      (function () {
         if (typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
         }
      })();
   </script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'UA-149859901-1');
   </script>
   <script>
      window.ga = window.ga || function () { (ga.q = ga.q || []).push(arguments) }; ga.l = +new Date;
      ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
      ga('require', 'eventTracker');
      ga('require', 'outboundLinkTracker');
      ga('require', 'urlChangeTracker');
      ga('send', 'pageview');
   </script>
   <script async src='<?= theme_asset(); ?>/store/autotrack.js'></script>
   <meta name="robots" content="noindex">

   <header>
      <div class="header">
         <script src="<?= theme_asset(); ?>/store/jquery.vide.min.js"></script>
         <div class="container">
            <div class="logo">
               <?php
               $logo = get_option('logo');
               if ($logo) {
                  $logo = 'uploads/setting/' . get_option('logo');
               } else {
                  $logo = 'asset/img/Log02.png';
               }

               if (!is_file(FCPATH . '/' . $logo)) {
                  $logo = 'asset/img/Log02.png';
               }
               ?>
               <img src="<?= base_url($logo) ?>">
            </div>


            <div class="nav-top">
               <nav class="navbar navbar-default">
                  <div class="navbar-header nav_2">
                     <!-- <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                        data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button> -->
                  </div>

               </nav>
               <div class="cart">
                  <span class="fa fa-shopping-cart my-cart-icon"><span
                        class="badge badge-notify my-cart-badge"></span></span>

               </div>
               <div class="cart">
                  <a href="<?= base_url('administrator/login') ?>"><span class="fa fa-sign-in"
                        style="position: absolute !important;font-size: 1.5em;color: #039445;"></span></a>

               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <a href="kitchen.html"> <img class="bg-slide" src="https://dummyimage.com/1080x735/000/fff"
                     alt="First slide"></a>
            </div>
            <div class="item">
               <a href="care.html"> <img class="bg-slide " src="https://dummyimage.com/1080x735/000/fff"
                     alt="Second slide"></a>
            </div>
            <div class="item">
               <a href="hold.html"><img class="bg-slide " src="https://dummyimage.com/1080x735/000/fff"
                     alt="Third slide"></a>
            </div>
         </div>
      </div>
      <!-- /.carousel -->
      <!--content-->
      <div class="product">
         <div class="container">
            <div class="spec ">
               <h3>MENU</h3>
               <div class="ser-t">
                  <b></b>
                  <span><i></i></span>
                  <b class="line"></b>
               </div>
            </div>

            <div class=" con-w3l">
               <?php foreach ($produks as $produk): ?>
                  <div class="col-md-3 pro-1">
                     <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                           <img src="<?= BASE_URL . 'uploads/produk/' . $produk->photo; ?>" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                           <div class="women">
                              <h6>
                                 <?= _ent($produk->nama_produk); ?>
                              </h6>
                           </div>
                           <div class="mid-2">
                              <p><em class="item_price">Rp.
                                    <?= _ent(number_format($produk->harga, 0, '.', '.')); ?>
                                 </em></p>

                              <div class="clearfix"></div>
                           </div>
                           <div class="add add-2">
                              <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?= _ent($produk->id); ?>"
                                 data-name="<?= _ent($produk->nama_produk); ?>"
                                 data-summary="<?= get_user_data('email') ?>" data-price="<?= _ent($produk->harga); ?>"
                                 data-quantity="1" data-image="<?= BASE_URL . 'uploads/produk/' . $produk->photo; ?>">Add
                                 to
                                 Cart</button>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>

            </div>
         </div>
         <!--footer-->
         <div class="footer">
            <div class="container">

               <div class="clearfix"></div>
               <div class="footer-bottom">
                  <h2><a href="index-2.html"></b>
                        <?= get_option('site_name'); ?><span>
                           <?= get_option('slogan'); ?>
                        </span>
                     </a>
                  </h2>
                  <ul class="bg-ig social-fo">
                     <li><a href="<?= get_option('instagram'); ?>"><i class="fa fa-instagram"
                              aria-hidden="true"></i></a></li>
                     <li><a href="<?= get_option('site_name'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     </li>
                     <li><a href="<?= get_option('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </li>
                  </ul>
                  <div class=" address">
                     <div class="col-md-12 fo-grid1">
                        <p><i class="fa fa-home" aria-hidden="true"></i>
                           <?= get_option('address'); ?>
                        </p>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
               <div class="copy-right">
                  <p> &copy; 2022. All rights reserved.</p>
               </div>
            </div>
         </div>

         <!-- //footer-->
         <!-- smooth scrolling -->
         <!-- for bootstrap working -->
         <script src="<?= theme_asset(); ?>/store/bootstrap.js"></script>
         <!-- //for bootstrap working -->
         <script type='text/javascript' src="<?= theme_asset(); ?>/store/jquery.mycart.js"></script>
         <script type="text/javascript">
            $(function () {

               var goToCartIcon = function ($addTocartBtn) {
                  var $cartIcon = $(".my-cart-icon");
                  var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({ "position": "fixed", "z-index": "999" });
                  $addTocartBtn.prepend($image);
                  var position = $cartIcon.position();
                  $image.animate({
                     top: position.top,
                     left: position.left
                  }, 500, "linear", function () {
                     $image.remove();
                  });
               }

               $('.my-cart-btn').myCart({
                  classCartIcon: 'my-cart-icon',
                  classCartBadge: 'my-cart-badge',
                  affixCartIcon: true,
                  checkoutCart: function (products) {
                     $.each(products, function () {
                        console.log(this);
                        $.ajax({
                           url: '<?= base_url('administrator/transaksi/add_save') ?>',
                           type: 'POST',
                           dataType: 'json',
                           data: this,
                        })
                           .done(function (res) {
                              if (res.success) {
                              } else {
                              }
                           })
                     });
                  },
                  clickOnAddToCart: function ($addTocart) {
                     goToCartIcon($addTocart);
                  },
                  getDiscountPrice: function (products) {
                     var total = 0;
                     $.each(products, function () {
                        total += this.quantity * this.price;
                     });
                     return total * 1;
                  }
               });

            });
         </script>

         <div id="v-w3layouts"></div>
   </header>
   <?= get_footer(); ?>