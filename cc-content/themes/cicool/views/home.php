<?= get_header(); ?>
<body id="page-top">
<script src="<?= theme_asset(); ?>/store/monetization.js" type="text/javascript"></script>
      <script>
         (function(){
         	if(typeof _bsa !== 'undefined' && _bsa) {
           		// format, zoneKey, segment:value, options
           		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
           	}
         })();
      </script>
      <script>
         (function(){
         if(typeof _bsa !== 'undefined' && _bsa) {
         	// format, zoneKey, segment:value, options
         	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
         }
         })();
      </script>
      <script>
         (function(){
         	if(typeof _bsa !== 'undefined' && _bsa) {
           		// format, zoneKey, segment:value, options
           		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
           	}
         })();
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-149859901-1');
      </script>
      <script>
         window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
         ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
         ga('require', 'eventTracker');
         ga('require', 'outboundLinkTracker');
         ga('require', 'urlChangeTracker');
         ga('send', 'pageview');
      </script>
      <script async src='<?= theme_asset(); ?>/store/autotrack.js'></script>
      <meta name="robots" content="noindex">

     <header>
     <!-- <a href="offer.html"><img src="<?= theme_asset(); ?>/img/asset/download.png" class="img-head" alt=""></a> -->
         <div class="header">
         <script src="<?= theme_asset(); ?>/store/jquery.vide.min.js"></script>
            <div class="container">
               <div class="logo">
               <?php 
               $logo =  get_option('logo');
               if ($logo) {
               $logo = 'uploads/setting/'. get_option('logo');
               } else {
               $logo = 'asset/img/Log02.png';
               }

               if (!is_file(FCPATH .'/'. $logo)) {
               $logo = 'asset/img/Log02.png';
               }
               ?>
                  <img src="<?= base_url($logo) ?>">
               </div>

               <!-- <div class="head-t">
                  <ul class="card">
                     <li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
                     <li><a href="login.html" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                     <li><a href="register.html" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
                     <li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
                     <li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
                  </ul>
               </div>
               <div class="header-ri">
                  <ul class="social-top">
                     <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                     <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                     <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                     <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
                  </ul>
               </div> -->
               <div class="nav-top">
                  <nav class="navbar navbar-default">
                     <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                     </div>
                     <!-- <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav ">
                           <li class=" active"><a href="index-2.html" class="hyper "><span>Home</span></a></li>
                           <li class="dropdown ">
                              <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Kitchen<b class="caret"></b></span></a>
                              <ul class="dropdown-menu multi">
                                 <div class="row">
                                    <div class="col-sm-3">
                                       <ul class="multi-column-dropdown">
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
                                          <li><a href="kitchen.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-3">
                                       <ul class="multi-column-dropdown">
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Snacks</a></li>
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Spices</a></li>
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Biscuit &amp; Cookie</a></li>
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweets</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-3">
                                       <ul class="multi-column-dropdown">
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
                                          <li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-3 w3l">
                                       <a href="kitchen.html"><img src="<?= theme_asset(); ?>/img/asset/me.png" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
                              <ul class="dropdown-menu multi multi1">
                                 <div class="row">
                                    <div class="col-sm-3">
                                       <ul class="multi-column-dropdown">
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Ayurvedic </a></li>
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Baby Care</a></li>
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-3">
                                       <ul class="multi-column-dropdown">
                                          <li><a href="care.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Oral Care</a></li>
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-3">
                                       <ul class="multi-column-dropdown">
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
                                          <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-3 w3l">
                                       <a href="care.html"><img src="<?= theme_asset(); ?>/img/asset/me1.png" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Household<b class="caret"></b></span></a>
                              <ul class="dropdown-menu multi multi2">
                                 <div class="row">
                                    <div class="col-sm-3">
                                       <ul class="multi-column-dropdown">
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-3">
                                       <ul class="multi-column-dropdown">
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-3">
                                       <ul class="multi-column-dropdown">
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
                                          <li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>
                                       </ul>
                                    </div>
                                    <div class="col-sm-3 w3l">
                                       <a href="hold.html"><img src="<?= theme_asset(); ?>/img/asset/me2.png" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div>
                              </ul>
                           </li>
                           <li><a href="codes.html" class="hyper"> <span>Codes</span></a></li>
                           <li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
                        </ul>
                     </div> -->
                  </nav>
                  <div class="cart" >
                     <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
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
                  <a href="kitchen.html"> <img class="bg-slide" src="<?= theme_asset(); ?>/img/Slide1.jpeg" alt="First slide"></a>
               </div>
               <div class="item">
                  <a href="care.html"> <img class="bg-slide " src="<?= theme_asset(); ?>/img/Slide2.jpeg" alt="Second slide"></a>
               </div>
               <div class="item">
                  <a href="hold.html"><img class="bg-slide " src="<?= theme_asset(); ?>/img/Slide3.jpeg" alt="Third slide"></a>
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
               <?php foreach($produks as $produk): ?>
                  <div class="col-md-3 pro-1">
                     <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                        <img src="<?= BASE_URL . 'uploads/produk/' . $produk->gambar_produk; ?>" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                           <div class="women">
                              <h6><?= _ent($produk->nama_produk); ?></h6>
                           </div>
                           <div class="mid-2">
                              <p ><em class="item_price">Rp.<?= _ent($produk->harga_produk); ?></em></p>
                              
                              <div class="clearfix"></div>
                           </div>
                           <div class="add add-2">
                              <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?= _ent($produk->id_produk); ?>" data-name="<?= _ent($produk->nama_produk); ?>" data-summary="summary 1" data-price="<?= _ent($produk->harga_produk); ?>" data-quantity="1" data-image="<?= BASE_URL . 'uploads/produk/' . $produk->gambar_produk; ?>">Add to Cart</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; ?>

               <div class=" con-w3l">
               <?php foreach($produks as $produk): ?>
                  <div class="col-md-3 pro-1">
                     <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                        <img src="<?= BASE_URL . 'uploads/produk/' . $produk->gambar_produk; ?>" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                           <div class="women">
                              <h6><?= _ent($produk->nama_produk); ?></h6>
                           </div>
                           <div class="mid-2">
                              <p ><em class="item_price">Rp.<?= _ent($produk->harga_produk); ?></em></p>
                              
                              <div class="clearfix"></div>
                           </div>
                           <div class="add add-2">
                              <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?= _ent($produk->id_produk); ?>" data-name="<?= _ent($produk->nama_produk); ?>" data-summary="summary 1" data-price="<?= _ent($produk->harga_produk); ?>" data-quantity="1" data-image="<?= BASE_URL . 'uploads/produk/' . $produk->gambar_produk; ?>">Add to Cart</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; ?>
                
                  <div class=" con-w3l">
               <?php foreach($produks as $produk): ?>
                  <div class="col-md-3 pro-1">
                     <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                        <img src="<?= BASE_URL . 'uploads/produk/' . $produk->gambar_produk; ?>" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                           <div class="women">
                              <h6><?= _ent($produk->nama_produk); ?></h6>
                           </div>
                           <div class="mid-2">
                              <p ><em class="item_price">Rp.<?= _ent($produk->harga_produk); ?></em></p>
                              
                              <div class="clearfix"></div>
                           </div>
                           <div class="add add-2">
                              <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?= _ent($produk->id_produk); ?>" data-name="<?= _ent($produk->nama_produk); ?>" data-summary="summary 1" data-price="<?= _ent($produk->harga_produk); ?>" data-quantity="1" data-image="<?= BASE_URL . 'uploads/produk/' . $produk->gambar_produk; ?>">Add to Cart</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; ?>
                  <div class="clearfix"></div>
               </div>
               </div>
            </div>
         </div>
         <!--footer-->
         <div class="footer">
            <div class="container">
               <!-- <div class="col-md-3 footer-grid">
                  <h3>About Us</h3>
                  <p>Nam libero tempore, cum soluta nobis est eligendi 
                     optio cumque nihil impedit quo minus id quod maxime 
                     placeat facere possimus.
                  </p>
               </div>
               <div class="col-md-3 footer-grid ">
                  <h3>Menu</h3>
                  <ul>
                     <li><a href="index-2.html">Home</a></li>
                     <li><a href="kitchen.html">Kitchen</a></li>
                     <li><a href="care.html">Personal Care</a></li>
                     <li><a href="hold.html">Household</a></li>
                     <li><a href="codes.html">Short Codes</a></li>
                     <li><a href="contact.html">Contact</a></li>
                  </ul>
               </div>
               <div class="col-md-3 footer-grid ">
                  <h3>Customer Services</h3>
                  <ul>
                     <li><a href="shipping.html">Shipping</a></li>
                     <li><a href="terms.html">Terms & Conditions</a></li>
                     <li><a href="faqs.html">Faqs</a></li>
                     <li><a href="contact.html">Contact</a></li>
                     <li><a href="offer.html">Online Shopping</a></li>
                  </ul>
               </div>
               <div class="col-md-3 footer-grid">
                  <h3>My Account</h3>
                  <ul>
                     <li><a href="login.html">Login</a></li>
                     <li><a href="register.html">Register</a></li>
                     <li><a href="wishlist.html">Wishlist</a></li>
                  </ul>
               </div> -->
               <div class="clearfix"></div>
               <div class="footer-bottom">
                  <h2 ><a href="index-2.html"></b>Langkar Kopi<span>The Best Coffee Shop</span></a></h2>
                  <!-- <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p> -->
                  <ul class="bg-ig social-fo">
                     <li><a href="#" class=" face"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     <!-- <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                     <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li> -->
                  </ul>
                  <div class=" address">
                     <div class="col-md-12 fo-grid1">
                        <p><i class="fa fa-home" aria-hidden="true"></i>Jalan Nangka Raya, tanjung barat - jakarta selatan</p>
                     </div>
                     <!-- <div class="col-md-4 fo-grid1">
                        <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>
                     </div>
                     <div class="col-md-4 fo-grid1">
                        <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
                     </div> -->
                     <div class="clearfix"></div>
                  </div>
               </div>
               <div class="copy-right">
                  <p> &copy; 2022 HARUS WISUDA!!!</p>
               </div>
            </div>
         </div>

         <!-- //footer-->
         <!-- smooth scrolling -->
         <script type="text/javascript">
            $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */								
            // $().UItoTop({ easingType: 'easeOutQuart' });
            });
         </script>
         <!-- <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> -->
         <!-- //smooth scrolling -->
         <!-- for bootstrap working -->
         <script src="<?= theme_asset(); ?>/store/bootstrap.js"></script>
         <!-- //for bootstrap working -->
         <script type='text/javascript' src="<?= theme_asset(); ?>/store/jquery.mycart.js"></script>
         <script type="text/javascript">
            $(function () {
            
              var goToCartIcon = function($addTocartBtn){
                var $cartIcon = $(".my-cart-icon");
                var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
                $addTocartBtn.prepend($image);
                var position = $cartIcon.position();
                $image.animate({
                  top: position.top,
                  left: position.left
                }, 500 , "linear", function() {
                  $image.remove();
                });
              }
            
              $('.my-cart-btn').myCart({
                classCartIcon: 'my-cart-icon',
                classCartBadge: 'my-cart-badge',
                affixCartIcon: true,
                checkoutCart: function(products) {
                  $.each(products, function(){
                    console.log(this);
                  });
                },
                clickOnAddToCart: function($addTocart){
                  goToCartIcon($addTocart);
                },
                getDiscountPrice: function(products) {
                  var total = 0;
                  $.each(products, function(){
                    total += this.quantity * this.price;
                  });
                  return total * 1;
                }
              });
            
            });
         </script>

         <!-- product -->
         <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Moong(1 kg)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$1.50</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of1.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Sunflower Oil(5 kg)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$9.00</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="images/of1.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of2.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Kabuli Chana(1 kg)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$2.00</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of3.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Soya Chunks(1 kg)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$3.50</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="images/of3.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of4.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Lays(100 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.70</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of5.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Kurkure(100 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.70</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of6.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Popcorn(250 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$1.00</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of7.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Nuts(250 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$3.50</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of8.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Banana(6 pcs)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$1.50</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of9.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Onion(1 kg)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.70</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of10.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Bitter Gourd(1 kg)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$1.00</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of11.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Apples(1 kg)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$3.50</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of12.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Honey(500 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$6.00</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of13.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Chocos(250 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$4.50</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of14.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Oats(1 kg)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$3.50</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of15.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Bread(500 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.80</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of16.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Moisturiser(500 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.80</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="17" data-name="Moisturiser" data-summary="summary 17" data-price="0.80" data-quantity="1" data-image="images/of16.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of17.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Lady Finger(250 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.80</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="18" data-name="Lady Finger" data-summary="summary 18" data-price="0.80" data-quantity="1" data-image="images/of17.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of18.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Satin Ribbon Red(1 pc)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.80</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="19" data-name="Satin Ribbon Red" data-summary="summary 19" data-price="0.80" data-quantity="1" data-image="images/of18.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of19.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Grapes  </h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.80</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="20" data-name="Grapes" data-summary="summary 20" data-price="0.80" data-quantity="1" data-image="images/of19.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of20.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Clips(1 pack)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.80</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="21" data-name="Clips" data-summary="summary 21" data-price="0.80" data-quantity="1" data-image="images/of20.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of21.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Conditioner</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.80</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="22" data-name="Conditioner" data-summary="summary 22" data-price="0.80" data-quantity="1" data-image="images/of21.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of22.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Cleaner(250 kg)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.80</span>
                           <div class="clearfix"></div>
                        </div>
                        <!-- komen aja ga uah ngoding -->
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="23" data-name="Cleaner" data-summary="summary 23" data-price="0.80" data-quantity="1" data-image="images/of22.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product -->
         <div class="modal fade" id="myModal24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content modal-info">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                  </div>
                  <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                        <div class="item">
                           <img src="<?= theme_asset(); ?>/img/asset/of23.png" class="img-responsive" alt="">
                        </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                        <h3>Gel(150 g)</h3>
                        <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                        <div class="price_single">
                           <span class="reducedfrom ">$0.80</span>
                           <div class="clearfix"></div>
                        </div>
                        
                        <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                        <div class="add-to">
                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="24" data-name="Gel" data-summary="summary 24" data-price="0.80" data-quantity="1" data-image="images/of23.png">Add to Cart</button>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
         <div id = "v-w3layouts"></div>
   </header>
   <?= get_footer(); ?>