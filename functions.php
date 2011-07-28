<?php

register_sidebar(array(
    'name'              => 'home-sidebar',
    'before_widget'     => '<li id="%1$s" class="boxed widget %2$s">',
    'after_widget'      => '</li>',
    'before_title'      => '<h3 class="widgettitle">',
    'after_title'       => '</h3>',
));
register_sidebar(array(
    'name'              => 'archive-sidebar',
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
                    <div class="commentmetadata">
                        <a href="#comment-<?php comment_ID(); ?>">
                            <?php comment_date(); ?>
                            at
                            <?php comment_time(); ?>
                        </a>
                        <?php if ($comment->comment_approved == '0') : ?>
                            <em>(comment awaiting moderation)</em>
                        <?php endif; ?>
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
        <?php /*
            WordPress manages the closing of <li> elements because
            nested comments may need to be rendered first.  See the
            documentation for wp_list_comments.
        */ ?>
    <?php
}

function lx_non_empty_post_title($title) {
    if ($title == '') {
        return _('Untitled post');
    }
    if ($title == trim(sprintf(_('Private: %s'), ''))) {
        return sprintf(_('Private: %s'), _('Untitled post'));
    }
    if ($title == trim(sprintf(_('Protected: %s'), ''))) {
        return sprintf(_('Protected: %s'), _('Untitled post'));
    }
    return $title;
}
add_filter('the_title', 'lx_non_empty_post_title');

// It would be nice in the future to make all post titles in the title
// bar unique (or closer to unique) by including the post date for
// untitled posts, e.g. "Untitled post from August 23, 2004."
add_filter('single_post_title', 'lx_non_empty_post_title');

?>
