<?php
/**
 * Gnuplotting.org
 * index.php gets the whole side (header, main, sidebar, footer)
 **/
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
        <li><a href="http://127.0.0.1/wordpress/?page_id=1284">Gnuplot 4.6</a></li>
        <li><a href="manpage-4.4">Gnuplot 4.4</a></li>
      </ul>
    </li>
    <li><a href="http://www.gnuplotting.org/gallery.html">Gallery</a></li>
    <li class="feed right"><a href="http://www.gnuplotting.org/feed/"><i class="icon-rss icon-large"></i></a></li>
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
              <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
              <?php edit_post_link('Edit', ' | ', ''); ?>  
              </p><!-- </date> -->
              <?php the_content('Read the rest of this entry &raquo;'); ?>
            </div>
            <!-- Tags -->
            <p class="postmetadata">
            <?php the_tags('<strong>Tags:</strong> ', ', ', '<br />'); ?>
            </p>
          </section><!-- </post> -->

        <?php endwhile; ?>

        <!-- Link to next/past page -->
        <!--<div class="pagination">
          <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
          <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </div>-->

        <?php pagination($additional_loop->max_num_pages); ?>
        
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
