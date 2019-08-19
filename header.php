<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Supplywisdom
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!-- owl carousel -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css'>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>



  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'supplywisdom' ); ?></a>
  
    <section class="top-header">
      <div class="container">
        <div>
        <ul class="desktop-icon">
          <li><a href="mailto:info@supplywisdom.com">info@supplywisdom.com</a></li>
          <li>Tel.<a href="tel:info@supplywisdom.com"> +1.617.830.1664</a></li>
        </ul> 
        <ul class="mob-icon">
          <li><a href="mailto:info@supplywisdom.com"><i class="icon-email-icon"></i></a></li>
          <li><a href="tel:info@supplywisdom.com"> <i class="icon-telephone-icon"></i></a></li>
        </ul>       
        </div>
        <div class="top-search">
        <ul class="desktop-menu">
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Contact</a></li>
          </ul>  
        <div class=" home-search">
					<form  action="<?php echo home_url( '/' ); ?>">
					  <input type="search" name="s" placeholder="Search&hellip;" value="<?php echo get_search_query()?>"  class="input"/>
					  <input type="hidden" name="post_type" value="kb_article">
					</form>
				</div><!-- /.container -->
				<div class="__search">
        <i class="fas fa-search"></i>
          <i class="fas fa-times"></i>
				</div><!-- /.search-close -->
      </div> 
</div> 
   
    </section>

    <header id="masthead" class="site-header main-menu">
      <div class="container">
      <div class="site-branding">
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Supply Wisdom</a></h1>        
      </div>
      <div class="ham">
        <span></span>
        <span></span>
        <span></span>
      </div>  

      <nav id="site-navigation" class="menu-link ">
      <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          ) );
        ?>

        <ul class="mob-menu">
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul>
          <a href="#" class="btn btn-outline">SUBSCRIBE</a>
          <a href="#" class="btn btn-outline">REQUEST DEMO</a>
        </ul>
      </nav>
    </div>
    </header> 

