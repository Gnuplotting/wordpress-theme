<div class="span3">
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <input class="" onclick="this.value='';" type="text" placeholder="Search here ..." value="<?php echo wp_specialchars($s); ?>" name="s" id="s" />
        <button class="search-btn" type="submit" id="searchsubmit"><i class="icon-search icon-large"></i></button>
    </form>
</div>
