<?php
/*
Template Name: Manpage
*/
get_header('manpage'); ?>

<!-- ======= Main Content ======= -->
<div class="container">

  <!-- ======= Navbar ======= -->
  <ul class="nav nav-pills">
    <li><a href="<?php echo site_url(); ?>">Home</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gnuplot basics<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/plotting-functions/">Plotting functions</a></li>
        <li><a href="<?php echo site_url(); ?>/plotting-data/">Plotting data</a></li>
        <li><a href="<?php echo site_url(); ?>/output-terminals/">Output terminals</a></li>
      </ul>
    </li>
    <li class="dropdown active">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manpages<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/manpage-gnuplot-4-6/">Gnuplot 4.6</a></li>
      </ul>
    </li>
    <!--<li><a href="<?php echo site_url(); ?>/gallery.html">Gallery</a></li>-->
    <li><a href="<?php echo site_url(); ?>/about/">About</a></li>
    <?php if (is_user_logged_in()) { ?><li><a href="<?php echo site_url(); ?>/wp-admin">Dashboard <i class="icon-arrow-right"></i></a></li><?php } ?>
    <li class="feed right"><a href="<?php echo site_url(); ?>/feed/"><i class="icon-rss icon-large"></i></a></li>
  </ul>

  <!-- Grid for main content and sidebar -->
  <div class="row">

    <!-- ======= Sidebar ======= -->
    <div class="span3 sidebar">
      <?php get_sidebar(); ?>
    </div><!-- </span3> -->

    <!-- ======= Main page ======= -->
    <div class="span9" id="main">
      <section class="post">
        <!-- Get content -->
        <?php require("manpage-4.6.php");?>
      </section>
      <?php comments_template(); ?>
    </div><!-- </span9> -->


  </div><!-- </row> -->

  <div class="footer_art">
  </div><!-- </footer_art> -->

</div><!-- </container> -->

<?php get_footer(); ?>

<?php // vim: set textwidth=120 ts=2 sw=2: ?>
