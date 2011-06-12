<?php 
/**
 * @package WordPress
 * @subpackage Function
 */
get_header(); ?>

<div id="main">
<div id="content">


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
     
<?php if (function_exists('wp_list_comments')): ?>
<div <?php post_class(post); ?> id="post-<?php the_ID(); ?>">
<?php else : ?>
<div class="post" id="post-<?php the_ID(); ?>">
<?php endif; ?>
<?php get_template_part('post-header'); ?>
        
<div class="postcontent">
<?php the_content('(Read More &raquo;)'); ?>
<div class="cleared"></div>
<div class="linkpages"><?php wp_link_pages(); ?></div>
</div><!-- /postcontent -->
        
<?php if (get_the_tags() || comments_open()) : ?>
<div class="postmetabottom">
<div class="tags"><?php the_tags('Tags: ', ', ', ''); ?></div>
<div class="metacomments"><?php if ( comments_open() ) : ?><?php comments_rss_link(__('Comments <abbr title="Really Simple Syndication">RSS</abbr> feed')); ?><?php endif; ?></div>
<div class="cleared"></div>
</div><!-- /postmetabottom -->
<?php endif; ?>
</div><!-- /post -->

<div id="comments">
<?php if (function_exists('wp_list_comments')): ?>
<!-- WP 2.7 and above -->
<?php comments_template('', true); ?>

<?php else : ?>
<!-- WP 2.6 and below -->
<?php comments_template(); ?>
<?php endif; ?>
</div> <!-- Closes Comment -->

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


</div><!-- /content -->

<?php get_sidebar(); ?>


</div><!-- /main --> 
<?php get_footer(); ?>
