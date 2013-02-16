<?php
/**
 * Gnuplotting.org
 * footer.php, generates the nice footer
 */
?>

<footer>
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
  <div class="noise">
  </div><!-- </noise> -->
  <div class="container">
    <div class="row">

      <div class="span2 offset1">
        <ul class="unstyled">
          <li><h5>Gnuplot</h5></li>
          <li><a href="http://gnuplot.info/download.html">Download</a></li>
          <li><a href="http://gnuplot.sourceforge.net/demo/">Demos</a></li>
          <li><a href="http://gnuplot.info/">News</a></li>
        </ul>
      </div><!-- </span3> -->

     <div class="span2">
        <ul class="unstyled">
          <li><h5>Documentation</h5></li>
          <li><a href="http://www.gnuplotting.org/manpage">Manpage</a></li>
          <li><a href="http://web.archive.org/web/20110721043630/http://t16web.lanl.gov/Kawano/gnuplot/index-e.html">Not so FAQs</a></li>
          <li><a href="http://gnuplot-tricks.blogspot.com/">Tricks</a></li>
        </ul>
      </div><!-- </span2> -->

      <div class="span2">
        <ul class="unstyled">
          <li><h5>Developement</h5></li>
          <li><a href="http://github.com/Gnuplotting">Github</a></li>
          <li><a href="mailto://mail@gnuplotting.org">Ask a question</a></li>
        </ul>
      </div><!-- </span2> -->

    </div><!-- </row> -->
    <div class="row">
      <div class="span2 offset9">
        <a class="pull-right" href="#overview">Back to top</a>
      </div><!-- </span9> -->
    </div><!-- </row> -->

    <div class="row license">
      <div class="span14 offset1">
        Free to share and remix: <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons CC-BY</a>.
        Powered by <a href="http://wordpress.org/">WordPress</a>,
        <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>.
        <br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
        and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
        <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
      </div><!-- </span15> -->
    </div><!-- </row> -->
  </div><!-- </container> -->
</footer>

</body>
</html>

<?php // vim: set textwidth=120 ts=2 sw=2: ?>
