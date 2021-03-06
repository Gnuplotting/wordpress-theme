<?php
/**
 * Gnuplotting.org
 * footer.php, generates the nice footer
 */
?>

<footer>
  <div class="noise">
  </div><!-- </noise> -->
  <div class="container">
    <div class="row">

      <div class="span2 offset1">
        <ul class="unstyled">
          <li><h5>Gnuplotting</h5></li>
          <li><a href="http://www.gnuplotting.org/about/">About</a></li>
          <li><a href="http://github.com/Gnuplotting" target="_blank">Github</a></li>
          <li><a href="http://www.gnuplotting.org/data-privacy-statement/">Data privacy</a></li>
        </ul>
      </div><!-- </span3> -->

      <div class="span2">
        <ul class="unstyled">
          <li><h5>Gnuplot</h5></li>
          <li><a href="http://gnuplot.info/download.html" target="_blank">Download</a></li>
          <li><a href="http://gnuplot.sourceforge.net/demo/" target="_blank">Demos</a></li>
          <li><a href="http://gnuplot.info/" target="_blank">News</a></li>
        </ul>
      </div><!-- </span2> -->

     <div class="span2">
        <ul class="unstyled">
          <li><h5>Documentation</h5></li>
          <li><a href="http://gnuplot.info/docs_5.2/Gnuplot_5.2.pdf">Manpage</a></li>
          <li><a href="http://folk.uio.no/inf3330/scripting/doc/gnuplot/Kawano/index-e.html" target="_blank">Not so FAQs</a></li>
          <li><a href="http://gnuplot-tricks.blogspot.com/" target="_blank">Tricks</a></li>
        </ul>
      </div><!-- </span2> -->

      <div class="span2">
        <ul class="unstyled">
          <li><h5>Follow</h5></li>
          <li><a href="http://twitter.com/gnuplotting">Twitter</a></li>
          <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
          <li><a href="<?php bloginfo('comments_rss2_url'); ?>">RSS (comments)</a></li>
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
        Free to share and remix: <a href="http://creativecommons.org/licenses/by-nc/3.0/" target="_blank">Creative Commons CC-BY-NC</a>.
        Powered by <a href="http://wordpress.org/" target="_blank">WordPress</a>,
        <a href="http://twitter.github.com/bootstrap/" target="_blank">Bootstrap</a>.
        <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
      </div><!-- </span15> -->
    </div><!-- </row> -->
  </div><!-- </container> -->
</footer>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.gnuplotting.org/" : "http://stats.gnuplotting.org/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 3);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://stats.gnuplotting.org/piwik.php?idsite=3" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tag -->

</body>
</html>

<?php // vim: set textwidth=120 ts=2 sw=2: ?>
