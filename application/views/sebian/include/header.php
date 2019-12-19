<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SEBIAN - Multi Purpose eCommerce HTML5 Template</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,SEBIAN Multi Purpose Care,eCommerce,SEBIAN - Multi Purpose eCommerce HTML5 Template">
<meta name="description" content="SEBIAN - Multi Purpose eCommerce HTML5 Template">
<meta name="author" content="M_Adnan">

<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!--MAIN STYLE-->
<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css">
<!-- <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- ADD YOUR OWN STYLING HERE. AVOID TO USE STYLE.CSS AND MAIN.CSS. IT WILL BE HELPFUL FOR YOU IN FUTURE UPDATES -->
<link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/rs-plugin/css/settings.css" media="screen" />

<!-- JavaScripts -->
<script src="<?= base_url() ?>assets/js/modernizr.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Page Wrap -->
<div id="wrap"> 
 <!-- Header -->
  <header class="header"> 
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container"> 
        <!-- Language -->
        <div class="language"> <a href="#." class="active">EN</a> <a href="#.">FR</a> <a href="#.">GE</a> </div>
        <div class="top-links">
          <ul>
            <li><a href="#.">MY ACCOUNT</a></li>
            <li><?= anchor("sebian_controller/wishlistview" , 'MY WISHLIST' );?></li>
            <li class="font-montserrat">CURRENCY:
              <select class="selectpicker">
                <option>USD</option>
                <option>EURO</option>
              </select>
            </li>
          </ul>
          <!-- Social Icons -->
          <ul class="social_icons">
            <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
            <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
            <li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
            <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
            <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Logo -->
    <div class="container">
      <div class="logo"> <a href="index.html"><img src="<?= base_url() ?>assets/images/logo.png" alt=""></a> </div>
    </div>
    <div class="sticky">
      <div class="container"> 
        <!-- Nav -->
        <nav class="webimenu"> 
          <!-- MENU BUTTON RESPONSIVE -->
          <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
          <ul class="ownmenu">
            <li class="active"><a href="<?= base_url(); ?>">HOME</a>
            </li>
            <li><a href="12-contact.html">PAGES</a>
            </li>
            <li class="meganav"><a href="02-shop-sidebar-right.html">SHOP</a> 
              <!--======= MEGA MENU =========-->
            </li>
            <li class="meganav"><a href="index.html">LOOKBOOK</a> 
              <!--======= MEGA MENU =========-->
            </li>
            <li><a href="08-01-blog-mansory.html">BLOG</a>
            </li>
            <ul class="dropdown">
              <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID </a>
              </li>
              <li><a href="09-01-portfolio-grid.html">PORTFOLIO Default </a>
                <ul class="dropdown">
                  <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                  <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                  <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                </ul>
              </li>
              <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
              <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
              <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
              <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
              <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
            </ul>
            </li>
            <li><a href="04-contact-01.html">CONTACT</a>
            </li>
            <!--======= Shopping Cart =========-->
            <li class="shop-cart"><a href="#."><i class="fa fa-shopping-cart"></i></a> <span class="numb">2</span>
              <ul class="dropdown">
                <?php foreach ($this->cart->contents() as $cartdata) {?>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="<?= base_url() ?>assets/images/product/<?= $cartdata['image'] ?>" alt="..."> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading"><?= $cartdata['name'] ?></h6>
                      <span class="price"><?= $cartdata['price'] ?></span> <span class="qty">QTY: <?= $cartdata['qty'] ?></span> </div>
                  </div>
                </li>
                <?php } ?>
                <li class="no-padding no-border">
                  <h5 class="text-center">SUBTOTAL: 258.00 USD</h5>
                </li>
                <li class="no-padding no-border">
                  <div class="row">
                    <div class="col-xs-6"> <a href="#." class="btn btn-small">VIEW CART</a></div>
                    <div class="col-xs-6 "> <a href="#." class="btn btn-1 btn-small">CHECK OUT</a></div>
                  </div>
                </li>
              </ul>
            </li>



             <li class="shop-cart"><a href="#."><i class="fa fa-user"></i></a> <span class="numb">2</span>
              <ul>
                <style>
      .sty{
        background-color: lightskyblue;
      }
        .sty input{
          width: 50%;
          height: 40px;
          border-radius: 3px;
          border: 1px solid lightgrey;
          background-color: lightgray;
          font: 16px arial;
          outline: none;
        }
      </style>
                <?= form_open("sebian_controller/trackorderview") ?>
      <div class="sty">
          <input type="text" placeholder="  Track_NO..." name="track">
          <button class="btn btn-primary">Find</button>
      </div><!--sty-->
      </form>
              </ul>
            </li>
            <!--======= SEARCH ICON =========-->
            <li class="search-nav"><a href="#."><i class="fa fa-search"></i></a>
              <ul class="dropdown">
                <li class="row">
                  <div class="col-sm-4 no-padding">
                    <select class="selectpicker">
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                    </select>
                  </div>
                  <div class="col-sm-8 no-padding">
                    <input type="search" class="form-control" placeholder="Search Here">
                    <button type="submit"> <i class="fa fa-search"></i> </button>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- Header End --> 