<?php
/**
 * @package WordPress
 * @subpackage Function
 */
?>

<div id="sidebar">
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>

<li class="boxed">
<a href="http://wordpress.org/support/"><img src="<?php bloginfo('template_directory'); ?>/images/shot.jpg" alt="Function" style="border:1px solid #ddd;" /></a>
<p>Hey! Thanks for choosing this theme! To change items in the sidebar, go to your admin panel and choose the widgets of your choice. Need a hand? Check out the attached readme.html included in the theme files. Enjoy!</p>
</li>

<li class="boxed">
<h3>Recent Entries...</h3>
<ul>
<?php wp_get_archives('type=postbypost&limit=8'); ?>
</ul>
</li>

<li class="boxed">
<h3>Categories</h3>
<ul>
<?php wp_list_categories('sort_column=name&title_li='); ?>
</ul>
</li>
      
<li class="boxed" id="tagbox">
<h3>Popular Tags</h3>
 <?php wp_tag_cloud('smallest=9&largest=16&number=45'); ?>
</li>


<?php endif; ?>
</ul>
</div><!-- /sidebar -->
        
<div class="cleared"></div>
