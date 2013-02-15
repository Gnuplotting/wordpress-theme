<?php
/*
Template Name: Manpage
*/
get_header('manpage'); ?>

<!-- ======= Main Content ======= -->
<div class="container">

  <!-- ======= Navbar ======= -->
  <ul class="nav nav-pills">
    <li><a href="#">Home</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Introduction<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="http://www.gnuplotting.org/introduction/plotting-functions/">Plotting functions</a></li>
        <li><a href="http://www.gnuplotting.org/introduction/plotting-data/">Plotting data</a></li>
        <li><a href="http://www.gnuplotting.org/introduction/output-terminals/">Output terminals</a></li>
      </ul>
    </li>
    <li class="active dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manpages<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="http://127.0.0.1/wordpress/?page_id=1284">Gnuplot 4.6</a></li>
      </ul>
    </li>
    <li><a href="http://www.gnuplotting.org/gallery.html">Gallery</a></li>
      <li class="feed right"><a href="http://www.gnuplotting.org/feed/"><i class="icon-rss icon-large"></i></a></li>
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
    </div><!-- </span9> -->


  </div><!-- </row> -->

  <div class="footer_art">
  </div><!-- </footer_art> -->

</div><!-- </container> -->

<?php get_footer(); ?>

<?php // vim: set textwidth=120 ts=2 sw=2: ?>
