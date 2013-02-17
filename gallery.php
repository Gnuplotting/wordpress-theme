<?php
/*
Template Name: Gallery
*/
get_header(); ?>

<!-- ======= Main Content ======= -->
<div class="container">

  <!-- ======= Navbar ======= -->
  <ul class="nav nav-pills">
    <li><a href="<?php echo site_url(); ?>">Home</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gnuplot basics<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/?page_id=51">Plotting functions</a></li>
        <li><a href="<?php echo site_url(); ?>/?page_id=101">Plotting data</a></li>
        <li><a href="<?php echo site_url(); ?>/?page_id=114">Output terminals</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manpages<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/?page_id=1284">Gnuplot 4.6</a></li>
      </ul>
    </li>
    <!--<li class="active"><a href="<?php echo site_url(); ?>/gallery.html">Gallery</a></li>-->
    <li><a href="<?php echo site_url(); ?>/?page_id=97">About</a></li>
    <?php if (is_user_logged_in()) { ?><li><a href="<?php echo site_url(); ?>/wp-admin">Dashboard <i class="icon-arrow-right"></i></a></li><?php } ?>
    <li class="feed right"><a href="<?php echo site_url(); ?>/feed/"><i class="icon-rss icon-large"></i></a></li>
  </ul>

  <!-- Grid for main content and sidebar -->
  <div class="row">

    <!-- ======= Main page ======= -->
    <div class="span9" id="main">
      <section class="page type-page hentry">
        <div class="page-header">
          <h1><a href="http://127.0.0.1/wordpress/?page_id=971" rel="bookmark" title="Permanent Link to Gallery">Gallery</a></h1>
        </div>
        <div class="entry">
          <!-- Get content -->
          <?php require("gallery-figs.php");?>
        </div>
      </section>
    </div><!-- </span9> -->

    <!-- ======= Sidebar ======= -->
    <div class="span3">
      <?php get_sidebar(); ?>
    </div><!-- </span3> -->


  </div><!-- </row> -->

  <div class="footer_art">
  </div><!-- </footer_art> -->

</div><!-- </container> -->

<?php get_footer(); ?>

<?php // vim: set textwidth=120 ts=2 sw=2: ?>
