<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--> <!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]--> <!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]--> <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  
  <meta name="viewport" content="width=device-width" />

  <!--
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."compass/stylesheets/app.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."compass/stylesheets/screen.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."compass/stylesheets/overrides.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."compass/stylesheets/plugin_contactform7.css") ?>
  -->

  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>

  <script type="text/javascript" charset="utf-8" src="http://use.edgefonts.net/lobster.js"></script>
  <script type="text/javascript" charset="utf-8" src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
  <![endif]-->

  <!-- link rel="stylesheet" href="css/normalize.min.css"> 
  <link rel="stylesheet" href="css/main.css" -->

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>

</head>

<?php $slug = sanitize_title( get_the_title(), $fallback_title ); ?>

<body id="<?php echo $slug; ?>" <?php body_class(); ?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

  <div class="page-wrapper">
  
  <nav class="site-access">
    <ul class="access">
      <li>
        <a href="#content" title="Skip to content">Skip to content</a>
      </li>
    </ul>
  </nav><!-- .site-access -->

  <header class="site-header" role="banner">
    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    <?php if (get_bloginfo('description')) : ?>
      <p class="description"><?php bloginfo('description'); ?></p>
    <?php endif; ?>
  </header><!-- .site-header -->

  <nav class="site-nav">
    <?php wp_nav_menu(); ?>
  </nav><!-- .site-nav -->

  <section class="site-content">

