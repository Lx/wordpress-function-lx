<?php 
/**
 * @package WordPress
 * @subpackage Function
 */
get_header(); ?>

<div id="main">
<div id="content">

<div class="archivesbox">
<h2 id="contentdesc">Search Results for: <span><?php the_search_query() ?></span></h2>
</div><!-- /archivesbox -->

<?php if (have_posts()) : ?>
  <?php get_template_part('loop', 'search'); ?>
<?php else : ?>
<div class="post">
<div class="posttop">
<h2 class="posttitle"><a href="#">Say that again?</a></h2>
</div><!-- /posttop -->        
<div class="postcontent">
<p>Sorry, but there are no results for this search. Please try again or browse through the other options on this site.</p>
</div><!-- /postcontent -->        
</div><!-- /post -->
<?php endif; ?>


<div id="navigation">
<?php if(function_exists('wp_pagenavi')) { ?>
<?php wp_pagenavi(); ?>
<?php }
else { ?>
<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<?php } ?><!-- end of pagenavi conditional statement -->
<div class="cleared"></div>
</div><!-- /navigation -->


</div><!-- /content -->

<?php get_sidebar(); ?>


</div><!-- /main --> 
<?php get_footer(); ?>
