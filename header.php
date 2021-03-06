<?php
/**
 * Gnuplotting.org
 * header.php, adds the metadata and the header with title image
 **/
?>
<!DOCTYPE html>
<html <?php language_attributes('html'); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico"/>
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.gnuplotting.org/feed/"/>
  <!-- Adding google code prettifier -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/prettify.css" type="text/css" rel="stylesheet" />
  <link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/prettify.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
  <!--[if lt IE 9]>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/html5shiv.js"></script>
  <![endif]--> 
</head>

<body <?php body_class(); ?> onload="prettyPrint()">



<!-- ======= Header ======= -->
<header id="overview">
  <div class="container image">
  </div><!-- </container> -->
  <div class="container">
    <h1><a href="<?php echo site_url(); ?>">Gnuplotting</a></h1>
    <p class="lead">Create scientific plots using gnuplot</p>
  </div><!-- container -->
</header>

<?php // vim: set textwidth=120 ts=2 sw=2: ?>
