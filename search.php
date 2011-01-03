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
<?php while (have_posts()) : the_post(); ?>
     
<?php if (function_exists('wp_list_comments')): ?>
<div <?php post_class(post); ?> id="post-<?php the_ID(); ?>">
<?php else : ?>
<div class="post" id="post-<?php the_ID(); ?>">
<?php endif; ?>
<div class="posttop">
<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="postmetatop">Posted <?php the_time('M.d, Y') ?> under <?php the_category(', ') ?></div><!-- /postmetatop -->
</div><!-- /posttop -->
        
<div class="postcontent">
<?php the_excerpt('(Read More &raquo;)'); ?>
<div class="cleared"></div>
</div><!-- /postcontent -->
        
</div><!-- /post -->

<?php endwhile; ?>
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
