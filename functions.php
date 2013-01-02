<?php
/**
 * Gnuplotting.org
 **/

/* Sidebar */
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

/* Pagination */
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\">";
         echo "<ul>";
         if($paged == 1) echo "<li class=\"prev disabled\"><a href=\"#\">&lsaquo; Previous</a></li>";
         if($paged > 1) echo "<li class=\"prev\"><a href=\"".get_pagenum_link($paged - 1)."\">&lsaquo; Previous</a></li>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class=\"active\"><a href=\"#\">".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a></li>";
             }
         }
 
         if($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a></li>";
         if($paged == $pages) echo "<li class=\"next disabled\"><a href=\"#\">Next &rsaquo;</a></li>";
         echo "</ul>";
         echo "</div>\n";
     }
}
?>
