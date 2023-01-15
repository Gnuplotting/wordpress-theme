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
    <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gnuplot basics<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/plotting-functions/">Plotting functions</a></li>
        <li><a href="<?php echo site_url(); ?>/plotting-data/">Plotting data</a></li>
        <li><a href="<?php echo site_url(); ?>/output-terminals/">Output terminals</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manpages<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url(); ?>/manpage-gnuplot-4-6/">Gnuplot 4.6</a></li>
        <li><a href="http://gnuplot.info/docs_5.0/gnuplot.pdf">Gnuplot 5.0</a></li>
        <li><a href="http://gnuplot.info/docs_5.2/Gnuplot_5.2.pdf">Gnuplot 5.2</a></li>
      </ul>
    </li>
    <li><a href="<?php echo site_url(); ?>/about/">About</a></li>
    <?php if (is_user_logged_in()) { ?><li><a href="<?php echo site_url(); ?>/wp-admin">Dashboard <i class="icon-arrow-right"></i></a></li><?php } ?>
  </ul>

  <!-- Grid for main content and sidebar -->
  <div class="row">

    <!-- ======= Sidebar ======= -->
    <div class="span3 sidebar">
      <?php get_sidebar(); ?>
    </div><!-- </span3> -->

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



  </div><!-- </row> -->

  <div class="footer_art">
  </div><!-- </footer_art> -->

</div><!-- </container> -->

<?php get_footer(); ?>

<?php // vim: set textwidth=120 ts=2 sw=2: ?>
