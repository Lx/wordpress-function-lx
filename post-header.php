<div class="posttop">
  <h2 class="posttitle">
    <a
      href="<?php the_permalink() ?>"
      rel="bookmark"
      title="Permanent Link to <?php the_title_attribute(); ?>"
    >
      <?php the_title(); ?>
    </a>
  </h2>
  <div class="postmetatop">
    Posted <?php the_date() ?> under <?php the_category(', ') ?>
  </div>
</div>
