<div class="posttop">
  <h2 class="posttitle">
    <a
      href="<?php the_permalink() ?>"
      rel="bookmark"
      title="Permanent link to &#8220;<?php the_title_attribute(); ?>&#8221;"
    >
      <?php the_title(); ?>
    </a>
  </h2>
  <?php if (get_post_type() != 'page') : ?>
    <div class="postmetatop">
      Posted <?php echo get_the_date() ?> under <?php the_category(', ') ?>
    </div>
  <?php endif; ?>
</div>
