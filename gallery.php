<?php
/*
Template Name: Manpage
*/
get_header(); ?>

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
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manpages<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="manpage-4.6">Gnuplot 4.6</a></li>
        <li><a href="manpage-4.4">Gnuplot 4.4</a></li>
      </ul>
    </li>
    <li class="active"><a href="http://www.gnuplotting.org/?page_id=971">Gallery</a></li>
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
