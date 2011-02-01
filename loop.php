<?php while (have_posts()) : the_post(); ?>
  <?php if (function_exists('wp_list_comments')) : ?>
    <div <?php post_class(post); ?> id="post-<?php the_ID(); ?>">
  <?php else : ?>
    <div class="post" id="post-<?php the_ID(); ?>">
  <?php endif; ?>
    <?php get_template_part('post-header'); ?>
    <div class="postcontent">
      <?php is_search() ? the_excerpt() : the_content('More &raquo;'); ?>
      <div class="cleared"></div>
    </div>
    <?php if (!is_search() && (get_the_tags() || comments_open())) : ?>
    <div class="postmetabottom">
      <div class="tags"><?php the_tags('Tags: ', ', ', ''); ?></div>
      <div class="metacomments">
        <?php if ( comments_open() ) : ?>
          <span>
            <?php
              comments_popup_link(
                'Leave a comment',
                'One comment',
                '% comments'
              );
            ?>
          </span>
        <?php endif; ?>
      </div>
      <div class="cleared"></div>
    </div>
    <?php endif; ?>
  </div>
<?php endwhile; ?>
