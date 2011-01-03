<?php 
/**
 * @package WordPress
 * @subpackage Function
 */
get_header(); ?>

<div id="main">
<div id="content">

<div class="archivesbox">
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h2 id="contentdesc">Category: <span><?php single_cat_title(); ?></span></h2>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h2 id="contentdesc">Tag Archive: <span><?php single_tag_title(); ?></span></h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 id="contentdesc">Archive for <span><?php the_time('F jS, Y'); ?></span></h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 id="contentdesc">Archive for <span><?php the_time('F, Y'); ?></span></h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 id="contentdesc">Archive for <span><?php the_time('Y'); ?></span></h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 id="contentdesc">Author <span>Archive</span></h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 id="contentdesc">Blog <span>Archives</span></h2>
<?php } ?>
</div><!-- /archivesbox -->

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
<?php the_content('Read More &raquo;'); ?>
<div class="cleared"></div>
</div><!-- /postcontent -->
        
<div class="postmetabottom">
<div class="tags"><?php the_tags('Tags: ', ', ', ''); ?></div>
<div class="metacomments"><?php if ( comments_open() ) : ?><span><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span><?php endif; ?></div>
<div class="cleared"></div>
</div><!-- /postmetabottom -->
</div><!-- /post -->

<?php endwhile; ?>
<?php else : ?>
<div class="post">
<div class="posttop">
<h2 class="posttitle"><a href="#">Oops!</a></h2>
</div><!-- /posttop -->        
<div class="postcontent">
<p>What you are looking for doesn't seem to be on this page...</p>
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
