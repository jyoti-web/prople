<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@200;300;400;500;700;800;900&family=Work+Sans:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<meta name="description" content="" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header role="banner">
  <img id="logo-main" src="http://localhost/wordpress/wp-content/uploads/2020/07/9299a1_4e13643e7c404816a4347dcc72119943_mv2.png" alt="Logo Thing main logo">
  <nav id="navbar-primary" class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbar-primary-collapse">
          <?php
          $defaults = array(
              'menu_class'      => 'menu',
              'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
          );
          wp_nav_menu( $defaults );
          ?>
        <!-- <ul class="nav navbar-nav">	
          <li class="active" ><a href="http://localhost/wordpress/">HOME</a></li>
          <li class="dropdown"><a href="<?php echo get_template_directory_uri();?>/about-2/">PROPEL CULTURE</a>
            <div class="dropdown-content">
              <a href="<?php echo get_template_directory_uri();?>/about-3/">ABOUT US</a>
              <a href="#">CAREERS</a>
              <a href="<?php echo get_template_directory_uri();?>/contact/">CONTACT</a>
              <a href="#">EMPLOYEE PORTAL</a>
            </div>
          </li>
          <li><a href="<?php echo get_template_directory_uri();?>/properties/">PORTFOLIO</a></li>
          <li><a href="<?php echo get_template_directory_uri();?>/management/">MANAGEMENT</a></li>
          <li class="dropdown"><a href="<?php echo get_template_directory_uri();?>/construction-2/">CONSTRUCTION</a>
            <div class="dropdown-content">
              <a href="<?php echo get_template_directory_uri();?>/hotels/">HOTELS</a>
            </div>
          </li>
          <li><a href="<?php echo get_template_directory_uri();?>/development-2/">DEVELOPMENT</a></li>
          <li class="dropdown"><a href="#">More</a>
            <div class="dropdown-content">
              <a href="<?php echo get_template_directory_uri();?>/phrg/">PHRG</a>
              <a href="<?php echo get_template_directory_uri();?>/news/">NEWS</a>
            </div>
          </li>
        </ul> -->
      </div>
    </div><!-- /.navbar-collapse -->
  </nav>
  <nav id="navbar-primary" class="navbar navbar-default max-1025" role="navigation">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbar-primary-collapse">
        <ul class="nav navbar-nav">	
          <li class="active" ><a href="http://localhost/wordpress/">HOME</a></li>
          <li class="dropdown"><a href="<?php echo get_template_directory_uri();?>/about-2/">PROPEL CULTURE</a>
            <div class="dropdown-content">
              <a href="<?php echo get_template_directory_uri();?>/about-3/">ABOUT US</a>
              <a href="#">CAREERS</a>
              <a href="<?php echo get_template_directory_uri();?>/contact/">CONTACT</a>
              <a href="#">EMPLOYEE PORTAL</a>
            </div>
          </li>
          <li><a href="<?php echo get_template_directory_uri();?>/properties/">PORTFOLIO</a></li>
          <li><a href="<?php echo get_template_directory_uri();?>/management/">MANAGEMENT</a></li>
          <li class="dropdown"><a href="#">More</a>
            <div class="dropdown-content">
              <a href="<?php echo get_template_directory_uri();?>/construction-2/">CONSTRUCTION</a>
              <a href="<?php echo get_template_directory_uri();?>/hotels/">HOTELS</a>
              <a href="<?php echo get_template_directory_uri();?>/development-2/">DEVELOPMENT</a>
              <a href="<?php echo get_template_directory_uri();?>/phrg/">PHRG</a>
              <a href="<?php echo get_template_directory_uri();?>/news/">NEWS</a>
            </div>
          </li>
        </ul>
      </div>
    </div><!-- /.navbar-collapse -->
  </nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="nav navbar-nav"> 
      <li class="active" ><a href="http://localhost/wordpress/">HOME</a></li>
      <li><a href="#demo"  data-toggle="collapse">PROPEL CULTURE</a>
        <div id="demo" class="collapse">
          <ul style="margin-left: 30px; padding-left: 0px; list-style-type: none;">
          <li><a href="<?php echo get_template_directory_uri();?>/about-3/">ABOUT US</a></li>
          <li><a href="#">CAREERS</a></li>
          <li><a href="<?php echo get_template_directory_uri();?>/contact/">CONTACT</a></li>
          <li><a href="#">EMPLOYEE PORTAL</a></li>
        </ul>
        </div>
      </li>
      <li><a href="<?php echo get_template_directory_uri();?>/properties/">PORTFOLIO</a></li>
      <li><a href="<?php echo get_template_directory_uri();?>/management/">MANAGEMENT</a></li>
      <li><a href="<?php echo get_template_directory_uri();?>/construction-2/">CONSTRUCTION</a></li>
      <li><a href="<?php echo get_template_directory_uri();?>/development-2/">DEVELOPMENT</a></li>
      <li><a href="<?php echo get_template_directory_uri();?>/phrg/">PHRG</a></li>
      <li><a href="<?php echo get_template_directory_uri();?>/news/">NEWS</a></li>
  </ul>
</div>
<span class="toggle-mobile-view" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

</header>
<div id="container">
	