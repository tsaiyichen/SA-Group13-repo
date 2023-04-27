<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="description" content="">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Title -->
     <title>carbon</title>

     <!-- Favicon -->
     <link rel="icon" href="img/core-img/favicon.ico">

     <!-- Core Stylesheet -->
     <link rel="stylesheet" href="style.css">

 </head>

 <body>
     <!-- Preloader -->
     <div class="preloader d-flex align-items-center justify-content-center">
         <div class="preloader-circle"></div>
         <div class="preloader-img">
             <img src="img/core-img/leaf.png" alt="">
         </div>
     </div>

     <!-- ##### Header Area Start ##### -->
     <header class="header-area">
         <!-- ***** Navbar Area ***** -->
         <div class="alazea-main-menu">
             <div class="classy-nav-container breakpoint-off">
                 <div class="container">
                     <!-- Menu -->
                     <nav class="classy-navbar justify-content-between" id="alazeaNav">

                         <!-- Nav Brand -->
                         <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                         <!-- Navbar Toggler -->
                         <div class="classy-navbar-toggler">
                             <span class="navbarToggler"><span></span><span></span><span></span></span>
                         </div>

                         <!-- Menu -->
                         <div class="classy-menu">

                             <!-- Close Button -->
                             <div class="classycloseIcon">
                                 <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                             </div>

                             <!-- Navbar Start -->
                             <div class="classynav">
                                 <ul>
                                     <li><a href="index.html">Home</a></li>
                                     <li><a href="about.html">About</a></li>
                                     <li><a href="#">Pages</a>
                                         <ul class="dropdown">
                                             <li><a href="index.html">Home</a></li>
                                             <li><a href="about.html">About</a></li>
                                             <li><a href="shop.html">Shop</a>
                                                 <ul class="dropdown">
                                                     <li><a href="shop.html">Shop</a></li>
                                                     <li><a href="shop-details.html">Shop Details</a></li>
                                                     <li><a href="cart.html">Shopping Cart</a></li>
                                                     <li><a href="checkout.html">Checkout</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="portfolio.html">Portfolio</a>
                                                 <ul class="dropdown">
                                                     <li><a href="portfolio.html">Portfolio</a></li>
                                                     <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="blog.html">Blog</a>
                                                 <ul class="dropdown">
                                                     <li><a href="blog.html">Blog</a></li>
                                                     <li><a href="single-post.html">Blog Details</a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="contact.html">Contact</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="shop.html">Shop</a></li>
                                     <li><a href="portfolio.html">Portfolio</a></li>
                                     <li><a href="contact.html">Contact</a></li>
                                 </ul>

                                 <!-- Search Icon -->
                                 <div id="searchIcon">
                                     <i class="fa fa-search" aria-hidden="true"></i>
                                 </div>

                             </div>
                             <!-- Navbar End -->
                         </div>
                     </nav>

                     <!-- Search Form -->
                     <div class="search-form">
                         <form action="#" method="get">
                             <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                             <button type="submit" class="d-none"></button>
                         </form>
                         <!-- Close Icon -->
                         <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <!-- ##### Header Area End ##### -->

     <!-- ##### Breadcrumb Area Start ##### -->
     <div class="breadcrumb-area">
         <!-- Top Breadcrumb Area -->
         <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
             <h2>歷史紀錄</h2>
         </div>

         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>首頁</a></li>
                             <li class="breadcrumb-item active" aria-current="page">歷史紀錄</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
     <!-- ##### Breadcrumb Area End ##### -->

     <!-- ##### Single Product Details Area Start ##### -->
     <section class="single_product_details_area mb-50">
         <div class="produts-details--content mb-50">
             <div class="container">
                <canvas id="myChart"></canvas>
                <script src="theChart.js"></script>
             </div>
         </div>


     </section>
     <!-- ##### Single Product Details Area End ##### -->

     <!-- ##### Related Product Area Start ##### -->

     <!-- ##### All Javascript Files ##### -->
     <!-- jQuery-2.2.4 js -->
     <script src="js/jquery/jquery-2.2.4.min.js"></script>
     <!-- Popper js -->
     <script src="js/bootstrap/popper.min.js"></script>
     <!-- Bootstrap js -->
     <script src="js/bootstrap/bootstrap.min.js"></script>
     <!-- All Plugins js -->
     <script src="js/plugins/plugins.js"></script>
     <!-- Active js -->
     <script src="js/active.js"></script>
 </body>

 </html>