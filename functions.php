<?php

register_sidebar(array(
    'name'              => 'home-sidebar',
    'before_widget'     => '<li id="%1$s" class="boxed widget %2$s">',
    'after_widget'      => '</li>',
    'before_title'      => '<h3 class="widgettitle">',
    'after_title'       => '</h3>',
));

if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'bottom_header'     => 'Bottom (grey) header menu',
    ));
}

function mytheme_comment_lx($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
            <div id="comment-<?php comment_ID(); ?>">
                <?php echo get_avatar($comment, $size = '50'); ?>
                <div class="commentbody">
                    <div class="author"><?php comment_author_link(); ?></div>
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em>(Your comment is awaiting moderation...)</em>
                    <?php endif; ?>
                    <div class="commentmetadata">
                        <a href="#comment-<?php comment_ID(); ?>">
                            <?php comment_date('F jS, Y'); ?>
                            on
                            <?php comment_time(); ?>
                        </a>
                        <?php edit_comment_link('edit', '&nbsp;&nbsp;', ''); ?>
                    </div>
                    <?php comment_text(); ?>
                </div>
                <div class="reply">
                    <?php comment_reply_link(array_merge($args, array(
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth']
                    ))); ?>
                </div>
                <div class="cleared"></div>
            </div>
        </li>
    <?php
}

?>
