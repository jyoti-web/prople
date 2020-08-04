<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/dealer.css">
	<script src="<?php echo get_template_directory_uri()?>/js/modernizr.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/pace.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/Helvetica-Font/Helvetica-Bold.ttf"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top" class="pace-done menu-is-open" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="300">
<div id="wrapper" class="hfeed">
<header class="s-header">
      <div class="header-logo">
        <a class="site-logo" href="index.html">
          <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Homepage">
        </a>
      </div>
      <div class="phone_ico">
        <a href="tel:8333325001"><i class="fa fa-phone fa-flip-horizontal" style="font-size:22px;color:#ec312e"></i></a>
      </div>
      <div class="phone"><a href="tel:8333325001">833.DEAL.001</a> 
      </div>
      <nav id="menu">
	    <div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <h3>DealerShop</h3>
          <ul class="header-nav__list">
            <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
            <li><a class="smoothscroll"  href="#product" title="product">Products & Services</a></li>
            <li><a class="smoothscroll"  href="#about" title="about">Our Difference</a></li>
            <li><a class="smoothscroll"  href="#partners" title="partners">Partnerships</a></li>
            <li><a class="smoothscroll"  href="#location" title="location">Locations</a></li>
            <li><a class="smoothscroll"  href="#history" title="history">History</a></li>
            <li><a class="smoothscroll"  href="#leadership" title="services">Who We Are</a></li>
            <li><a class="smoothscroll"  href="#news" title="works">News</a></li>
            <li><a class="smoothscroll"  href="#member" title="contact">Become a Member</a></li>
            <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
            <li><a class="smoothscroll"  href="#tos" title="contact">Terms & Conditions</a></li>
          </ul>
          <ul class="header-nav__social">
            <li>
              <a href="https://www.facebook.com/dealershopusa" target="blank"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
              <a href="https://twitter.com/DealerShopUSA" target="blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/dealershopusa/" target="blank"><i class="fab fa-linkedin"></i></a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UC9RCzEUxvsfZiC6iI7LvE6A" target="blank"><i class="fab fa-youtube"></i></a>
            </li>
          </ul>
      	</div>
		<span class="header-menu-toggle" style="font-size:30px;cursor:pointer;color: white;" onclick="openNav()">&#9776;</span>
	</nav>
    </header>
<div id="container">
<!-- <header id="header">
<nav id="menu">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container"> -->