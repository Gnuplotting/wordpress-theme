<?php
/*
Template Name: Basics
*/
get_header(); ?>

<!-- ======= Main Content ======= -->
<div class="container">

  <!-- ======= Navbar ======= -->
  <ul class="nav nav-pills">
    <li><a href="<?php echo site_url(); ?>">Home</a></li>
    <li class="dropdown active">
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
    <!--<li><a href="<?php echo site_url(); ?>/gallery.html">Gallery</a></li>-->
    <li><a href="<?php echo site_url(); ?>/?page_id=97">About</a></li>
    <?php if (is_user_logged_in()) { ?><li><a href="<?php echo site_url(); ?>/wp-admin">Dashboard <i class="icon-arrow-right"></i></a></li><?php } ?>
    <li class="feed right"><a href="<?php echo site_url(); ?>/feed/"><i class="icon-rss icon-large"></i></a></li>
  </ul>

  <!-- Grid for main content and sidebar -->
  <div class="row">

    <!-- ======= Main page ======= -->
    <div class="span9" id="main">
	    <!-- Get content -->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
          <!-- Single entry -->
          <section <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <!-- Title of post -->
            <div class="page-header">
              <h1><a href="<?php the_permalink() ?>"
                     rel="bookmark"
                     title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            </div><!-- </page-header> -->
            <!-- Entry -->
            <div class="entry">
              <!-- Time, comments and edit -->
              <p class="date">
              <?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> |
              <?php comments_popup_link('<i class="icon-comments-alt"></i> No Comments', '<i class="icon-comments"></i> 1 Comment', '<i class="icon-comments"></i> % Comments'); ?>
              <?php edit_post_link('Edit', ' | ', ''); ?>  
              </p><!-- </date> -->
              <?php the_content('Read the rest of this entry &raquo;'); ?>
            </div>
            <!-- Tags -->
            <p class="postmetadata">
              <?php the_tags('<strong>Tags:</strong> ', ', ', '<br />'); ?>
            </p>
          </section><!-- </post> -->

          <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

        <?php endwhile; ?>

        <?php comments_template(); ?>

      <?php else : ?>
        <h2 class="center">Not Found</h2>
		    <p class="center">Sorry, but you are looking for something that isn't here.</p>
		    <?php get_search_form(); ?>

	    <?php endif; ?>

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
