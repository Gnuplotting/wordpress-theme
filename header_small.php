<?php
/**
 * Gnuplotting.org
 **/
?>
<!DOCTYPE html>
<html <?php language_attributes('html'); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="http://www.gnuplotting.org/wp-content/themes/gnuplotting/img/favicon.ico"/>
  <!-- Adding google code prettifier -->
  <script type="text/javascript" src="http://www.gnuplotting.org/wp-content/themes/gnuplotting/js/prettify.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onload="prettyPrint()">

<!--<div class="topbar" data-scrollspy="scrollspy" >
  <div class="topbar-inner">
    <div class="row">
      
      <div class="span12 offset4">
        <a class="brand" href="#">Gnuplotting</a>
        <ul class="nav">
          <li class="active"><a href="#overview">Overview</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#grid-system">Grid</a></li>
          <li><a href="#layouts">Layouts</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>-->

<!-- Header with Icon and navigation bar -->
<header class="masthead" id="navigation">
  <div class="inner">
    <div class="container">
      <!-- Use the grid to separate header image from navigation -->
      <div class="row">

        <!-- ======= Image ======= -->
        <div class="span5">
          <a href="http://www.gnuplotting.org"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/header.png"><h1>Gnuplotting</h1></img></a>
        </div><!-- </span4> -->

        <!-- ======= Navigation ======= -->
        <div class="span11">
          <div class="topbar" data-dropdown="dropdown">
            <div class="topbar-inner">
              <div class="container">
              <ul class="nav">
                <li><a href="http://www.gnuplotting.org">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle">Introduction</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Plotting data</a></li>
                    <li><a href="#">Plotting functions</a></li>
                    <li><a href="#">Output terminals</a></li>
                  </ul>
                </li>
                <li><a href="#">Gallery</a></li>
              </ul>
            </div>
            </div><!-- </topbar-inner> -->
          </div><!-- </topbar> -->
        </div><!-- </span12> -->

      </div><!-- </row> -->
    </div><!-- </container> -->
  </div><!-- </inner> -->
</header>

<!-- vim: set textwidth=120 ts=2 sw=2: -->
