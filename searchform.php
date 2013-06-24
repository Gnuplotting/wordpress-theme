<div class="span3">
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <input value="<?php 
            /* check if we have a search string. If not put 'Search here ...' in the field */
            $value=wp_specialchars($s); if(empty($value)) { echo 'Search here ...'; } else { echo wp_specialchars($s); }?>" 
            onfocus="this.style.color='#393318';"
            onclick="if(this.value=='Search here ...') this.value=''; else this.select();" 
            onblur="if(this.value=='') { this.value='Search here ...'; this.style.color='#999'; }"
            type="text" name="s" id="s" />
        <!-- Set color to gray for the dummy 'Search here ...' text -->
        <script>var s=document.getElementById('s'); if(s.value=='Search here ...') s.style.color='#999';</script>
        <button class="search-btn" type="submit" id="searchsubmit"></button>
    </form>
</div>
